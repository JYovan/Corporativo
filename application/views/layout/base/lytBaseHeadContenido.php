<!DOCTYPE HTML>
<html>
    <head>
        <title>Template básico</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- styles -->
       <!-- <link href="css/lib/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/styles.css" rel="stylesheet" type="text/css">-->
        <!-- styles -->
        <?php echo link_tag('css/lib/bootstrap.min.css'); ?>
        <?php echo link_tag('css/main.css'); ?>  
        <?php echo link_tag('css/styles.css'); ?>  
        
        <!-- scripts -->
        <script src="<?php echo base_url();?>js/lib/jquery-2.1.0.min.js"></script>        
        <script src="<?php echo base_url();?>js/lib/bootstrap.min.js"></script>   
        <script src="<?php echo base_url();?>js/lib/bootstrap3-typeahead.js"></script>                    
        <script src="<?php echo base_url();?>js/lib/jquery.bootpag.min.js"></script>
        <script src="<?php echo base_url();?>js/lib/jquery.typewatch.js"></script>
        <script src="<?php echo base_url();?>js/cliente.js"></script>
        
        <script src="<?php echo base_url();?>js/config.js"></script>
        
        <?php
        if(isset($scripts)):
            foreach($scripts as $js): ?>
            <script src="<?php echo base_url() . "js/{$js}.js"; ?>" type="text/javascript"></script>
        <?php
            endforeach;
        endif; ?>

    </head>    
       <!-- <header id="header">
            <div class="container">
                <div class="row">
                    <div class="span9">
                        <h1 class="title">Rectoría General</h1>
                        <img src="media/logo.png">
                    </div>
                    <div class="span3">
                        <p class="legend">
                            Lascurain de Retana No. 5<br>Guanajuato, GTO. México.<br>
                            Col. Centro. C.P. 36000<br>
                            Tel. +52 (473) 732 00 06<br>webugto@ugto.mx
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <nav id="mainMenu">
            <div class="container">
                <div class="row">
                    <div class="span10">
                        <ul>
                            <li><a href="#"><span class="icon-off icon-white"></span>Iniciar Sesión</a></li>
                            <li><a href="#"><span class="icon-info-sign icon-white"></span>Mesa de Ayuda</a>
                                <ul class="submenu">
                                    <li><a href="#"><span class="icon-info-sign icon-white"></span> Enlace 1</a></li>
                                    <li><a href="#"><span class="icon-info-sign icon-white"></span>Enlace 2</a></li>
                                    <li><a href="#"><span class="icon-info-sign icon-white"></span>Enlace 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="icon-question-sign icon-white"></span>Manual de Usuario</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>-->
        




