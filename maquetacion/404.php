<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		mierda-tengo-cancer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = '404';
$subpage = '';
include 'header.php'; ?>
<div class="banner" style="background-image: url(assets/bg.jpg);">
    <div class="banner--404">
        <div class="banner__text__404">
            <h1>Error 404</h1>
            <p>
                La página que visitas no existe. 
            </p>
            <p>
                Tranquilo, aún nos quedan muchos testimonios por contar, por mientras te invitamos a visitar los que ya están en nuestro sitio
            </p>
            <a href="http://mierdatengocancer.cl/aporta-tu-testimonio/" title="Ir a testimonios" class="btn btn--border btn--buy">ir a testimonios</a>
        </div>
    </div>
</div><!--.banner-->