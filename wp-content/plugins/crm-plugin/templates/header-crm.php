<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="<?php echo CRM_PLUGIN_URL ?>templates/themes/css/crm-styler.css" />
    <link rel="stylesheet" href="<?php echo CRM_PLUGIN_URL ?>templates/themes/css/crm-colors.css" />
    <link rel="stylesheet" href="<?php echo CRM_PLUGIN_URL ?>templates/themes/css/crm-pnotify.css" />
    <link rel="stylesheet" href="<?php echo CRM_PLUGIN_URL ?>templates/themes/css/boton-flotante.css" />
    <link rel="stylesheet" href="<?php echo CRM_PLUGIN_URL ?>templates/vendors/aos/dist/aos.css" />
    <link rel="stylesheet" href="<?php echo CRM_PLUGIN_URL ?>templates/vendors/datepicker/dist/bootstrap-datepicker.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo CRM_PLUGIN_URL ?>templates/vendors/datepicker/dist/bootstrap-datepicker.es.min.css" rel="stylesheet">
    
    <title>CRM</title>
    
    <style>html.fontawesome-i2svg-active.fontawesome-i2svg-complete{margin-top:0px!important}</style>
    
    <?php 
    //show_admin_bar( false ); 
    wp_head(); 
    ?>

</head>

<body class="bg-light">
	
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-white d-block d-md-none border">
    	
        <div class="container py-2">

            <a href="">
                <img src="" alt="Logo del CRM de Nakama" class="logo-head img-fluid">
            </a>

            <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fa-solid fa-bars text-primary text-big"></i>
            </button>
            
        </div>
        
    </nav>