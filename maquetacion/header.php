<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		mierda-tengo-cancer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <?php include('svg-defs.svg')?>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="menu--top">
                <div class="wrap">
                    <div class="block--flex">
                        <a href="index.php">
                            <img src="img/logo.svg" alt="Mierda tengo cancer" class="logo">
                        </a>
                        <div class="menu--mobile">
                            <p>Menu</p>
                            <img src="img/menu.svg" alt="Menu">
                        </div>
                    </div><!--.block--flex-->
                </div><!--.wrap-->
            </div><!--.menu--top-->
            <div class="menu--bottom">
                <ul class="nav">
                    <li>
                        <a href="page.php" title="Testimonios">Testimonios</a>
                    </li>
                    <li>
                        <a href="page-libro.php" title="Libro">Libro</a>
                    </li>
                    <li>
                        <a href="page-autor.php" title="Autor">Autor</a>
                    </li>
                </ul><!--.nav-->
                <a href="page-comprar.php" class="btn btn--special" title="Comprar Libro">Comprar Libro</a>
            </div><!--.menu--bottom-->
        </header>