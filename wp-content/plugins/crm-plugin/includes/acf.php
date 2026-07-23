<?php 

function crm_nakama_import_acf_json() {

    $json_file = CRM_PLUGIN_PATH . 'fields.json';
    if (!file_exists($json_file)) return;

    $json = file_get_contents($json_file);
    $data = json_decode($json, true);
    if (!is_array($data)) return;

    foreach ($data as $group) {

        if (!isset($group['key']) || !isset($group['title'])) continue;

        $key = $group['key'];
        $existing = acf_get_field_group($key);

        if ($existing && isset($existing['ID'])) {
            wp_delete_post($existing['ID'], true);
        }

        $new_id = acf_import_field_group($group);

        if ($new_id && !is_wp_error($new_id)) {
            wp_update_post([
                'ID'          => $new_id,
                'post_status' => 'publish',
                'post_type'   => 'acf-field-group',
            ]);
        }
    }

    add_action('admin_notices', function() {
        echo '<div class="notice notice-success"><p><strong>Campos ACF del CRM Nakama importados correctamente.</strong></p></div>';
    });

}

