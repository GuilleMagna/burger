<?php
$content_fields = array(
    'texto_full_time_job_on_site' => 'Full time job/on site',
    'texto_urgent' => 'Urgent',
    'link_careers_details_html' => 'careers-details.html',
    'texto_business_strategy_consultant' => 'Business Strategy Consultant',
    'texto_week' => '/ week',
    'texto_london_uk' => 'London,UK',
    'link_careers_details_html_2' => 'careers-details.html',
    'texto_apply_now' => 'Apply Now',
    'texto_full_time_job_on_site_2' => 'Full time job/on site',
    'texto_urgent_2' => 'Urgent',
    'link_careers_details_html_3' => 'careers-details.html',
    'texto_management_consultant' => 'Management Consultant',
    'texto_week_2' => '/ week',
    'texto_london_uk_2' => 'London,UK',
    'link_careers_details_html_4' => 'careers-details.html',
    'texto_apply_now_2' => 'Apply Now',
    'texto_full_time_job_on_site_3' => 'Full time job/on site',
    'texto_urgent_3' => 'Urgent',
    'link_careers_details_html_5' => 'careers-details.html',
    'texto_business_process_consultant' => 'Business Process Consultant',
    'texto_week_3' => '/ week',
    'texto_london_uk_3' => 'London,UK',
    'link_careers_details_html_6' => 'careers-details.html',
    'texto_apply_now_3' => 'Apply Now',
    'texto_full_time_job_on_site_4' => 'Full time job/on site',
    'texto_urgent_4' => 'Urgent',
    'link_careers_details_html_7' => 'careers-details.html',
    'texto_operations_consultant' => 'Operations Consultant',
    'texto_week_4' => '/ week',
    'texto_london_uk_4' => 'London,UK',
    'link_careers_details_html_8' => 'careers-details.html',
    'texto_apply_now_4' => 'Apply Now',
    'texto_full_time_job_on_site_5' => 'Full time job/on site',
    'texto_urgent_5' => 'Urgent',
    'link_careers_details_html_9' => 'careers-details.html',
    'texto_organizational_development' => 'Organizational Development',
    'texto_week_5' => '/ week',
    'texto_london_uk_5' => 'London,UK',
    'link_careers_details_html_10' => 'careers-details.html',
    'texto_apply_now_5' => 'Apply Now',
    'texto_full_time_job_on_site_6' => 'Full time job/on site',
    'texto_urgent_6' => 'Urgent',
    'link_careers_details_html_11' => 'careers-details.html',
    'texto_performance_optimization' => 'Performance Optimization',
    'texto_week_6' => '/ week',
    'texto_london_uk_6' => 'London,UK',
    'link_careers_details_html_12' => 'careers-details.html',
    'texto_apply_now_6' => 'Apply Now',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Careers Section -->
<section class="tj-careers-section section-gap">
    <div class="container">
    <div class="row rg-30">
        <div class="col-xl-4 col-md-6">
        <div class="tj-careers wow fadeInUp" data-wow-delay="0.1s">
            <div class="tj-careers-icon mb-30">
            <i class="tji-strategy"></i>
            </div>
            <div class="tj-careers-tag">
            <span><?php echo esc_html( $texto_full_time_job_on_site ); ?></span> <span><?php echo esc_html( $texto_urgent ); ?></span>
            </div>
            <h4 class="tj-careers-title">
            <a href="<?php echo esc_url( $link_careers_details_html ); ?>"><?php echo esc_html( $texto_business_strategy_consultant ); ?></a>
            </h4>
            <div class="tj-careers-salary">
            <span>$400-$550</span> <?php echo esc_html( $texto_week ); ?>
            </div>
            <div class="tj-careers-bottom">
            <span class="location"><i class="tji-location"></i><?php echo esc_html( $texto_london_uk ); ?></span>
            <a href="<?php echo esc_url( $link_careers_details_html_2 ); ?>" class="tj-careers-btn">
                <div class="btn-text">
                <span><?php echo esc_html( $texto_apply_now ); ?></span>
                </div>
                <span class="btn-icon">
                <i class="tji-arrow-right"></i>
                <i class="tji-arrow-right"></i>
                </span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="tj-careers wow fadeInUp" data-wow-delay="0.3s">
            <div class="tj-careers-icon mb-30">
            <i class="tji-manage"></i>
            </div>
            <div class="tj-careers-tag">
            <span><?php echo esc_html( $texto_full_time_job_on_site_2 ); ?></span> <span><?php echo esc_html( $texto_urgent_2 ); ?></span>
            </div>
            <h4 class="tj-careers-title">
            <a href="<?php echo esc_url( $link_careers_details_html_3 ); ?>"><?php echo esc_html( $texto_management_consultant ); ?></a>
            </h4>
            <div class="tj-careers-salary">
            <span>$400-$550</span> <?php echo esc_html( $texto_week_2 ); ?>
            </div>
            <div class="tj-careers-bottom">
            <span class="location"><i class="tji-location"></i><?php echo esc_html( $texto_london_uk_2 ); ?></span>
            <a href="<?php echo esc_url( $link_careers_details_html_4 ); ?>" class="tj-careers-btn">
                <div class="btn-text">
                <span><?php echo esc_html( $texto_apply_now_2 ); ?></span>
                </div>
                <span class="btn-icon">
                <i class="tji-arrow-right"></i>
                <i class="tji-arrow-right"></i>
                </span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="tj-careers wow fadeInUp" data-wow-delay="0.5s">
            <div class="tj-careers-icon mb-30">
            <i class="tji-process-1"></i>
            </div>
            <div class="tj-careers-tag">
            <span><?php echo esc_html( $texto_full_time_job_on_site_3 ); ?></span> <span><?php echo esc_html( $texto_urgent_3 ); ?></span>
            </div>
            <h4 class="tj-careers-title">
            <a href="<?php echo esc_url( $link_careers_details_html_5 ); ?>"><?php echo esc_html( $texto_business_process_consultant ); ?></a>
            </h4>
            <div class="tj-careers-salary">
            <span>$400-$550</span> <?php echo esc_html( $texto_week_3 ); ?>
            </div>
            <div class="tj-careers-bottom">
            <span class="location"><i class="tji-location"></i><?php echo esc_html( $texto_london_uk_3 ); ?></span>
            <a href="<?php echo esc_url( $link_careers_details_html_6 ); ?>" class="tj-careers-btn">
                <div class="btn-text">
                <span><?php echo esc_html( $texto_apply_now_3 ); ?></span>
                </div>
                <span class="btn-icon">
                <i class="tji-arrow-right"></i>
                <i class="tji-arrow-right"></i>
                </span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="tj-careers wow fadeInUp" data-wow-delay="0.7s">
            <div class="tj-careers-icon mb-30">
            <i class="tji-operations"></i>
            </div>
            <div class="tj-careers-tag">
            <span><?php echo esc_html( $texto_full_time_job_on_site_4 ); ?></span> <span><?php echo esc_html( $texto_urgent_4 ); ?></span>
            </div>
            <h4 class="tj-careers-title">
            <a href="<?php echo esc_url( $link_careers_details_html_7 ); ?>"><?php echo esc_html( $texto_operations_consultant ); ?></a>
            </h4>
            <div class="tj-careers-salary">
            <span>$400-$550</span> <?php echo esc_html( $texto_week_4 ); ?>
            </div>
            <div class="tj-careers-bottom">
            <span class="location"><i class="tji-location"></i><?php echo esc_html( $texto_london_uk_4 ); ?></span>
            <a href="<?php echo esc_url( $link_careers_details_html_8 ); ?>" class="tj-careers-btn">
                <div class="btn-text">
                <span><?php echo esc_html( $texto_apply_now_4 ); ?></span>
                </div>
                <span class="btn-icon">
                <i class="tji-arrow-right"></i>
                <i class="tji-arrow-right"></i>
                </span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="tj-careers wow fadeInUp" data-wow-delay="0.9s">
            <div class="tj-careers-icon mb-30">
            <i class="tji-organize"></i>
            </div>
            <div class="tj-careers-tag">
            <span><?php echo esc_html( $texto_full_time_job_on_site_5 ); ?></span> <span><?php echo esc_html( $texto_urgent_5 ); ?></span>
            </div>
            <h4 class="tj-careers-title">
            <a href="<?php echo esc_url( $link_careers_details_html_9 ); ?>"><?php echo esc_html( $texto_organizational_development ); ?></a>
            </h4>
            <div class="tj-careers-salary">
            <span>$400-$550</span> <?php echo esc_html( $texto_week_5 ); ?>
            </div>
            <div class="tj-careers-bottom">
            <span class="location"><i class="tji-location"></i><?php echo esc_html( $texto_london_uk_5 ); ?></span>
            <a href="<?php echo esc_url( $link_careers_details_html_10 ); ?>" class="tj-careers-btn">
                <div class="btn-text">
                <span><?php echo esc_html( $texto_apply_now_5 ); ?></span>
                </div>
                <span class="btn-icon">
                <i class="tji-arrow-right"></i>
                <i class="tji-arrow-right"></i>
                </span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="tj-careers wow fadeInUp" data-wow-delay="1.1s">
            <div class="tj-careers-icon mb-30">
            <i class="tji-performance"></i>
            </div>
            <div class="tj-careers-tag">
            <span><?php echo esc_html( $texto_full_time_job_on_site_6 ); ?></span> <span><?php echo esc_html( $texto_urgent_6 ); ?></span>
            </div>
            <h4 class="tj-careers-title">
            <a href="<?php echo esc_url( $link_careers_details_html_11 ); ?>"><?php echo esc_html( $texto_performance_optimization ); ?></a>
            </h4>
            <div class="tj-careers-salary">
            <span>$400-$550</span> <?php echo esc_html( $texto_week_6 ); ?>
            </div>
            <div class="tj-careers-bottom">
            <span class="location"><i class="tji-location"></i><?php echo esc_html( $texto_london_uk_6 ); ?></span>
            <a href="<?php echo esc_url( $link_careers_details_html_12 ); ?>" class="tj-careers-btn">
                <div class="btn-text">
                <span><?php echo esc_html( $texto_apply_now_6 ); ?></span>
                </div>
                <span class="btn-icon">
                <i class="tji-arrow-right"></i>
                <i class="tji-arrow-right"></i>
                </span>
            </a>
            </div>
        </div>
        </div>
    </div>
    <!-- post pagination -->
    <div class="tj-pagination d-flex justify-content-center">
        <ul>
        <li>
            <span aria-current="page" class="page-numbers current">01</span>
        </li>
        <li>
            <a class="page-numbers" href="#">02</a>
        </li>
        <li>
            <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
        </li>
        </ul>
    </div>
    </div>
</section>
<!-- end: Careers Section -->
