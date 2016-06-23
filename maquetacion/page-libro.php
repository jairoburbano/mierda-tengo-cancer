<?php
/**
 * template-{Valor}.php
 *
 *
 * @package		mierda-tengo-cancer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = '';
$subpage = '';
$type = 'page';
$template = '';
$title = ' ';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap clearfix inside">
    <section class="libro">
        <h1 class="headline">Sobre el libro</h1>
        <div class="block--flex">
            <div class="book__image">
                <img src="assets/big.jpg" alt="Libro">
            </div><!--.book__image-->
            <div class="book__content">
                <h2 class="sub-title">¡Mierda! Tengo Cáncer ¿Qué hago?</h2>
                <div class="content">
                    <p>
                        ¡Mierda! Tengo cáncer, ¿qué hago? Roberto Ibáñez Atkinson relata su travesía por el cáncer, desde que le diagnosticaron un melanoma en 2011 a los 27 años hasta la actualidad. Junto él, más de 90 personas –doctores, pacientes y familiares de enfermos– comparten sus tips para sobrellevar la enfermedad. “Escribí el libro que a mí me hubiera gustado leer cuando supe que tenía cáncer. No sabía por dónde empezar y esta es una buena manera de hacerlo”, dice el autor.
                    </p>
                    <blockquote>
                        Escribí el libro que a mí me hubiera gustado leer cuando supe que tenía cáncer. No sabía por dónde empezar y esta es una buena manera de hacerlo.
                    </blockquote>
                    <p>
                        Pensado como una carta de navegación, Ibáñez Atkinson despliega el radical cambio de alimentación que introdujo en su vida, desmenuza el melanoma, responde las 100 preguntas más frecuentes sobre el cáncer con apoyo de especialistas chilenos y orienta a los pacientes acerca de cómo pararse ante los doctores.
                    </p>
                    <p>
                        En este feroz viaje el autor descubrió tantas cosas de sí mismo y de los demás que hoy agradece la experiencia de crecimiento que trajo el cáncer a su vida. Por eso, este no es un libro solo para pacientes de cáncer. Es un relato para asumir un cambio de vida antes de que nos veamos obligados a hacerlo.
                    </p>
                </div>
                <div class="share block--flex">
                    <p>Compartir</p>
                    <!--NOTE: Este btn tiene color segun la red ("redes-xx")-->
                    <a href="#" title="Compartir en Twitter" class="btn btn--rss redes-1">
                        <svg><use xlink:href="#shape-icon-twitter" /></svg>
                    </a>
                    <a href="#" title="Compartir en facebook" class="btn btn--rss redes-2">
                        <svg><use xlink:href="#shape-icon-facebook" /></svg>
                    </a>
                    <a href="#" title="Compartir en Instagram" class="btn btn--rss redes-3">
                        <svg><use xlink:href="#shape-icon-instagram" /></svg>
                    </a>
                    <a href="#" title="Compartir por Mail" class="btn btn--rss redes-4">
                        <svg><use xlink:href="#shape-icon-mail" /></svg>
                    </a>
                </div><!--.share-->
                <div class="block--flex flex--center">
                    <a href="#" title="Adelanto" class="btn btn--border">Adelanto</a>
                    <a href="#" title="Comprar libro" class="btn btn--border btn--buy">Comprar Libro</a>
                </div>
            </div><!--.book__content-->
        </div><!--.block--flex-->
    </section><!--.comprar-->
</div><!--.wrap-->
<?php include 'footer.php'; ?>