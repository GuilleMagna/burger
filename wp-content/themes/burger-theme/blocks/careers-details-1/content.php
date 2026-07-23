<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Careers Details Section
<section class="tj-careers-details section-gap">
    <div class="container">
    <div class="row rg-50">
        <div class="col-lg-8">
        <div class="tj-post-wrapper">
            <div class="tj-post-single-post">

            <div class="tj-careers-top mb-30">
                <div class="tj-careers-top-icon">
                <i class="tji-manage"></i>
                </div>
                <div class="tj-careers-top-content">
                <div class="tj-careers-tag">
                    <span><?php echo esc_html( $burger_get( 'texto_full_time_job_on_site', 'Full Time Job/On Site' ) ); ?></span> <span><?php echo esc_html( $burger_get( 'texto_urgent', 'Urgent' ) ); ?></span>
                </div>
                <h4 class="tj-careers-top-title text-anim"><?php echo esc_html( $burger_get( 'texto_management_consultant', 'Management Consultant' ) ); ?></h4>
                <span class="location"><i class="tji-location"></i><?php echo esc_html( $burger_get( 'texto_london_uk', 'London,UK' ) ); ?></span>
                </div>
            </div>
            <div class="tj-entry-content">
                <h4 class="text-anim"><?php echo esc_html( $burger_get( 'texto_job_description', 'Job Description' ) ); ?></h4>
                <p class="wow fadeInUp" data-wow-delay="0.1s">
                <?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses', 'Our mission is to empowers businesses size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptionals the value through strategic inset, innovative approaches. Our consulting of our missing empower businesses of all sizes to thrive. Committed to the delivering exceptional in the values through our strategic inset, i approaches empower. Our mission is to empowers businesses' ) ); ?>
                </p>
                <p class="wow fadeInUp" data-wow-delay="0.3s">
                <?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses_2', 'Our mission is to empowers businesses size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptionals the value through strategic inset' ) ); ?>
                </p>
                <div class="tj-check-list">
                <h4 class="text-anim"><?php echo esc_html( $burger_get( 'texto_requirements', 'Requirements' ) ); ?></h4>
                <p class="wow fadeInUp" data-wow-delay="0.1s">
                    <?php echo wp_kses_post( $burger_get( 'texto_formulating_and_implementing_business', 'Formulating and implementing business goals. We begin with an in-depth analysis of your business and market to identify opportunities and challenges. From there, we work with you to define clear, actionable.' ) ); ?>
                </p>
                </div>
                <div class="team-details__experience__list service-check-list mt-4 mb-4 wow fadeInUp"
                data-wow-delay="0.3s">
                <ul>
                    <li><i class="tji-check"></i><span><?php echo esc_html( $burger_get( 'texto_clear_vision_and_direction_for_your_bu', 'Clear vision and direction for your business for consultings.' ) ); ?></span></li>
                    <li><i class="tji-check"></i><span><?php echo esc_html( $burger_get( 'texto_enhanced_ability_to_anticipate_and_res', 'Enhanced ability to anticipate and respond to market changes.' ) ); ?></span></li>
                    <li><i class="tji-check"></i><span><?php echo esc_html( $burger_get( 'texto_data_driven_decision_making_for_strate', 'Data-driven decision-making for strategic planning execution.' ) ); ?></span></li>
                    <li><i class="tji-check"></i><span><?php echo esc_html( $burger_get( 'texto_structured_approach_to_achieving_your', 'Structured approach to achieving your business goals.' ) ); ?></span></li>
                </ul>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.3s"><?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses_3', 'Our mission is to empowers businesses size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptionals the value through strategic inset, innovative approaches. Our consulting of our missing empower businesses of all sizes to delivering delivering exceptional.' ) ); ?></p>
                <div class="tj-check-list">
                <h4 class="text-anim"><?php echo esc_html( $burger_get( 'texto_responsibilities', 'Responsibilities' ) ); ?></h4>
                <p class="wow fadeInUp" data-wow-delay="0.1s">
                    <?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses_4', 'Our mission is to empowers businesses size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptionals the value through strategic inset. Committed to the delivering exceptional in the values through our strategic inset, i approaches empower.' ) ); ?>
                </p>
                <ul class="wow fadeInUp" data-wow-delay="0.3s">
                    <li><span><i class="tji-check"></i></span> <?php echo esc_html( $burger_get( 'texto_discover_our_expertise', 'Discover our expertise' ) ); ?></li>
                    <li><span><i class="tji-check"></i></span> <?php echo esc_html( $burger_get( 'texto_journey_and_commitment_to_explained', 'Journey and commitment to explained' ) ); ?></li>
                    <li><span><i class="tji-check"></i></span> <?php echo esc_html( $burger_get( 'texto_meet_our_team_and_learn', 'Meet our team and learn' ) ); ?></li>
                    <li><span><i class="tji-check"></i></span> <?php echo esc_html( $burger_get( 'texto_meet_our_team', 'Meet our team' ) ); ?></li>
                </ul>
                </div>
            </div>
            <div class="tj-tags-post tj-post-details_tags_share wow fadeInUp" data-wow-delay=".1s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="tagcloud">
                <span><?php echo esc_html( $burger_get( 'texto_tags', 'Tags:' ) ); ?></span>
                <a href="#"><?php echo esc_html( $burger_get( 'texto_business', 'Business' ) ); ?></a>
                <a href="#"><?php echo esc_html( $burger_get( 'texto_consulting', 'Consulting' ) ); ?></a>
                <a href="#"><?php echo esc_html( $burger_get( 'texto_insights', 'Insights' ) ); ?></a>
                </div>
                <div class="post-share">
                <ul>
                    <li> <?php echo esc_html( $burger_get( 'texto_share', 'Share:' ) ); ?></li>
                    <li> <a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com', 'https://www.facebook.com/' ) ); ?>" title="Facebook"><i
                        class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li> <a href="<?php echo esc_url( $burger_get( 'link_https_x_com', 'https://x.com/' ) ); ?>" title="Twitter"><i class="fab fa-x-twitter"></i></a></li>
                    <li> <a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com', 'https://www.linkedin.com/' ) ); ?>" title="Linkedin"><i
                        class="fa-brands fa-linkedin-in"></i></a>

                    </li>
                    <li> <a href="<?php echo esc_url( $burger_get( 'link_https_www_pinterest_com', 'https://www.pinterest.com/' ) ); ?>" title="Pinterest"><i
                        class="fa-brands fa-pinterest-p"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="tj-nav__post previous">
                <div class="tj-nav-post__nav prev_post">
                <a href="<?php echo esc_url( $burger_get( 'link_careers_details_html', 'careers-details.html' ) ); ?>"><span><i class="tji-arrow-left"></i></span><?php echo esc_html( $burger_get( 'texto_previous', 'Previous' ) ); ?></a>
                </div>
            </div>
            <div class="tj-nav-post__grid">
                <a href="<?php echo esc_url( $burger_get( 'link_careers_html', 'careers.html' ) ); ?>"><i class="tji-window"></i></a>
            </div>
            <div class="tj-nav__post next">
                <div class="tj-nav-post__nav next_post">
                <a href="<?php echo esc_url( $burger_get( 'link_careers_details_html_2', 'careers-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_next', 'Next' ) ); ?><span><i class="tji-arrow-right"></i></span></a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <aside class="tj-blog-sidebar">
            <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_job_information', 'Job Information' ) ); ?></h4>
            <div class="project_catagory">
                <ul>
                <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_category', 'Category' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_business_consultant', 'Business Consultant' ) ); ?></span></li>
                <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_number', 'Number' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_8080uo', '8080UO' ) ); ?></span></li>
                <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_company', 'Company' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_bexon', 'Bexon' ) ); ?></span></li>
                <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_website', 'Website' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_www_example_com', 'www.example.com' ) ); ?></span></li>
                <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_salary', 'Salary' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_400_550_week', '$400-$550 / week' ) ); ?></span></li>
                <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_vacancy', 'Vacancy' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_03_available', '03 Available' ) ); ?></span></li>
                <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_apply_on', 'Apply on' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_oct_22_2024', 'OCT 22, 2024' ) ); ?></span></li>
                </ul>
            </div>
            </div>
            <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.3s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_apply_online', 'Apply Online' ) ); ?></h4>
            <div class="tj-careers-form">
                <form action="#">
                <div class="form-input">
                    <input type="text" name="cr_name" placeholder="Full name*">
                </div>
                <div class="form-input">
                    <input type="email" name="cr_email" placeholder="Enter email*">
                </div>
                <div class="form-input">
                    <input type="text" name="cr_phone" placeholder="Phone number*">
                </div>
                <div class="form-input">
                    <textarea name="cr_cover_letter" placeholder="Cover letter*"></textarea>
                </div>
                <div class="form-input reduce">
                    <label class="label" for="inputFile"><?php echo esc_html( $burger_get( 'texto_attach_resume', 'Attach Resume*' ) ); ?></label>
                    <input type="file" id="inputFile">
                </div>
                <div class="tj-careers-button">
                    <button type="submit" class="tj-primary-btn">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_submit_now', 'Submit Now' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </button>
                </div>
                </form>
            </div>
            </div>
        </aside>
        </div>
    </div>
    </div>
</section>
end: Careers Details Section -->


<!-- start: Careers Details Section -->
<section class="tj-careers-details section-gap">

    <div class="container">

        <div class="row rg-50">

            <div class="col-lg-8">

                <div class="tj-post-wrapper">

                    <div class="tj-post-single-post">
                            
                        <!-- top content -->
                        <div class="tj-careers-top mb-30">
                            <img src="<?php echo esc_url( $burger_get( 'imagen_https_demo_nakamatesting_com_ar_wp_conten', 'https://demo.nakamatesting.com.ar/wp-content/uploads/2026/04/MOTOBOMBA-AUTOCEBANTE-DE-12-VOLTS.jpeg' ) ); ?>" alt="" class="w-100 img-fluid rounded-3">
                        </div>

                        <!-- content -->
                        <div class="tj-entry-content">
                            <h4 class="text-anim"><?php echo esc_html( $burger_get( 'texto_motobomba_autocebante_de_12_volts', 'MOTOBOMBA AUTOCEBANTE DE 12 VOLTS' ) ); ?></h4>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                <?php echo wp_kses_post( $burger_get( 'texto_la_motobomba_autocebante_de_12_volts_e', 'La motobomba autocebante de 12 volts. es una herramienta esencial para la transferencia de líquidos en aplicaciones de riego, suministro de agua o drenaje, donde la capacidad de autocebado es esencial para un funcionamiento sin interrupciones. En BELTRANDO SRL, somos fabricantes líderes en el diseño y la producción de motobombas autocebantes de alta calidad, y nuestra motobomba autocebante es uno de nuestros productos más populares. Con su capacidad de autocebado, esta motobomba es capaz de funcionar sin problemas incluso en situaciones de baja presión de agua, lo que garantiza un suministro constante de líquidos. Además, su diseño compacto y su motor potente la hacen fácil de instalar y utilizar en una amplia variedad de entornos de trabajo. En BELTRANDO SRL, estamos comprometidos con la calidad y la durabilidad de nuestros productos, y la motobomba autocebante no es una excepción. Todas nuestras motobombas autocebantes son fabricadas con materiales de alta calidad y están diseñadas para durar años con un mantenimiento mínimo. Si buscas una motobomba autocebante confiable y eficiente para tus aplicaciones de transferencia de líquidos, no dudes en elegir la motobomba autocebante de BELTRANDO SRL.' ) ); ?>
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                <?php echo wp_kses_post( $burger_get( 'texto_bomba_rotativa_autocebante_y_reversibl', 'Bomba rotativa autocebante y reversible, equipada con rotor flexible y sello mecánico. Construida en AISI 304, con pulido sanitario de muy simple desarme, permitiendo una fácil limpieza de todos los elementos que la componen. Permite succionar desde distintas profundidades productos líquidos y viscosos como leche, crema, suero, sangre, mosto de uva, jugos, detergentes, etc. Accionadas por motor eléctrico incorporado, de acople directo. Opciones en 12 Volts, 220 Volts y 380 Volts.' ) ); ?>
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s"><?php echo esc_html( $burger_get( 'texto_todos_estos_modelos_pueden_ser_provist', 'Todos éstos modelos pueden ser provistos montados sobre carro de transporte, construido en AISI 304.' ) ); ?></p>
                        </div>

                        <!-- post tag and share -->
                        <div class="tj-tags-post tj-post-details_tags_share wow fadeInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                            <div class="tagcloud">
                                <span><?php echo esc_html( $burger_get( 'texto_etiquetas', 'Etiquetas:' ) ); ?></span>
                                <a href="#"><?php echo esc_html( $burger_get( 'texto_bombas', 'Bombas' ) ); ?></a>
                                <a href="#"><?php echo esc_html( $burger_get( 'texto_autobombas', 'Autobombas' ) ); ?></a>
                            </div>

                            <div class="post-share">

                                <ul>

                                    <li>
                                        <?php echo esc_html( $burger_get( 'texto_compartir', 'Compartir:' ) ); ?>
                                    </li>

                                    <li> 
                                        <a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_2', 'https://www.facebook.com/' ) ); ?>" title="Facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li> 
                                        <a href="<?php echo esc_url( $burger_get( 'link_https_x_com_2', 'https://x.com/' ) ); ?>" title="Twitter"><i class="fab fa-x-twitter"></i></a>
                                    </li>

                                    <li> 
                                        <a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_2', 'https://www.linkedin.com/' ) ); ?>" title="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>

                                    <li> 
                                        <a href="<?php echo esc_url( $burger_get( 'link_https_www_pinterest_com_2', 'https://www.pinterest.com/' ) ); ?>" title="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <!-- post navigation -->
                    <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                        <!-- previous post -->
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                            <a href="<?php echo esc_url( $burger_get( 'link_careers_details_html_3', 'careers-details.html' ) ); ?>"><span><i class="tji-arrow-left"></i></span><?php echo esc_html( $burger_get( 'texto_anterior', 'Anterior' ) ); ?></a>
                            </div>
                        </div>

                        <div class="tj-nav-post__grid">
                            <a href="<?php echo esc_url( $burger_get( 'link_careers_html_2', 'careers.html' ) ); ?>"><i class="tji-window"></i></a>
                        </div>

                        <!-- next post -->
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                            <a href="<?php echo esc_url( $burger_get( 'link_careers_details_html_4', 'careers-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_siguiente', 'Siguiente' ) ); ?><span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <aside class="tj-blog-sidebar">
                    <!-- Job information  -->
                    <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_modelo_n_0_5', 'Modelo: N° 0.5' ) ); ?></h4>
                    <div class="project_catagory">
                        <ul>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_potencia', 'POTENCIA' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_0_5_hp', '0.5 HP' ) ); ?></span></li>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_voltaje', 'VOLTAJE' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_12_volts', '12 volts' ) ); ?></span></li>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_e_s', 'E/S' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_tipo_manguera_25_mm', 'Tipo manguera 25 mm.' ) ); ?></span></li>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_rendimiento', 'RENDIMIENTO' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_5_000_lts_h', '5.000 Lts/H.' ) ); ?></span></li>
                        </ul>
                    </div>
                    </div>
                    <!-- Job information  -->
                    <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_modelo_n_1', 'Modelo: N° 1' ) ); ?></h4>
                    <div class="project_catagory">
                        <ul>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_potencia_2', 'POTENCIA' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_0_75_hp', '0.75 HP' ) ); ?></span></li>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_voltaje_2', 'VOLTAJE' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_12_volts_2', '12 volts' ) ); ?></span></li>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_e_s_2', 'E/S' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_danesa_38_mm', 'Danesa 38 mm.' ) ); ?></span></li>
                        <li><span class="first-child"><?php echo esc_html( $burger_get( 'texto_rendimiento_2', 'RENDIMIENTO' ) ); ?></span><span><?php echo esc_html( $burger_get( 'texto_10_000_lts_h', '10.000 Lts/H.' ) ); ?></span></li>
                        </ul>
                    </div>
                    </div>
                    <!-- apply form -->
                    <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_consultar_modelos', 'Consultar modelos' ) ); ?></h4>
                    <div class="tj-careers-form">
                        <form action="#">
                        <div class="form-input">
                            <input type="text" name="cr_name" placeholder="Nombre*">
                        </div>
                        <div class="form-input">
                            <input type="email" name="cr_email" placeholder="E-mail*">
                        </div>
                        <div class="form-input">
                            <input type="text" name="cr_phone" placeholder="Teléfono*">
                        </div>
                        <div class="tj-careers-button">
                            <button type="submit" class="tj-primary-btn">
                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_enviar_consulta', 'Enviar consulta' ) ); ?></span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </button>
                        </div>
                        </form>
                    </div>
                    </div>
                </aside>

            </div>

        </div>

    </div>

</section>
<!-- end: Careers Details Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
