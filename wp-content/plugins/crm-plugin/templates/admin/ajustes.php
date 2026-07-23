<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="wrap">

    <h1>CRM Nakama — Ajustes</h1>

    <form method="post" action="options.php">
        
        <?php
        settings_fields( 'crm_nakama_options' );
        do_settings_sections( 'crm_nakama' );
        submit_button();
        ?>

    </form>

</div>
