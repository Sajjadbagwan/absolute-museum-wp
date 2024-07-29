<div class="container breadcrumb-container">
    <?php
    function custom_wpseo_breadcrumb_separator($separator)
    {
        return ' > ';
    }

    add_filter('wpseo_breadcrumb_separator', 'custom_wpseo_breadcrumb_separator');

    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumb">', '</div>');
        // echo do_shortcode('[wpseo_breadcrumb]');
    }
    ?>
</div>
<style>
    .breadcrumb-container {
        margin-top: 50px;
    }

    .breadcrumb-container .breadcrumb span {
        font-size: 15px;
    }
</style>