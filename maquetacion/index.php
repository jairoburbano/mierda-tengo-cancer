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
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="banner" style="background-image: url(assets/bg.jpg);">
    <img src="img/banner.svg" alt="Mierda tengo cancer">
    <div class="down js-down">
        <svg><use xlink:href="#shape-icon-down" /></svg>
    </div>
</div><!--.banner-->
<div class="wrap">
    <h1 class="headline">Testimonios y tips</h1>
    <div class="block--flex">
        <?php include 'elements/item-home.php'; ?>
        <?php include 'elements/item-home.php'; ?>
        <a href="page-testimonio.php" title="Aporta" class="aporta">
            <span class="aporta--content">
                <span class="title">Aporta tú <span>testimonio</span></span>
                <span>Aquí</span>
            </span>
            <img src="img/aporta.svg" alt="Aporta">
        </a><!--.aporta-->
    </div><!--.bock--flex-->
</div><!--.wrap-->
<div class="listado">
    <div class="relleno"></div>
    <div class="wrap">
        <div class="block--flex">
            <h2>Diagósticos, <span>tipos de de cáncer</span></h2>
            <div class="listado__items">
                <a href="#" title="Melanoma" class="btn btn--border-fill melanoma">Melanoma</a>
                <a href="#" title="Cáncer de piel" class="btn btn--border-fill cancer-de-piel">Cáncer de piel</a>
                <a href="#" title="Cáncer de mama" class="btn btn--border-fill cancer-de-mama">Cáncer de mama</a>
                <a href="#" title="Linfoma de no Hodgkin" class="btn btn--border-fill linfoma-de-no-hodgkin">Linfoma de no Hodgkin</a>
                <a href="#" title="Linfoma de Hodking" class="btn btn--border-fill color-5">Linfoma de Hodking</a>
                <a href="#" title="Leucemia" class="btn btn--border-fill color-6">Leucemia</a>
                <a href="#" title="Tumor cereblar" class="btn btn--border-fill color-7">Tumor cereblar</a>
                <a href="#" title="Neuroblastoma" class="btn btn--border-fill color-8">Neuroblastoma</a>
                <a href="#" title="Cáncer de Ovario" class="btn btn--border-fill color-9">Cáncer de Ovario</a>
                <a href="#" title="Cáncer de tiroides" class="btn btn--border-fill color-10">Cáncer de tiroides</a>
                <a href="#" title="Cáncer de pancreas" class="btn btn--border-fill color-11">Cáncer de pancreas</a>
                <a href="#" title="Cáncer cervico uterino" class="btn btn--border-fill color-12">Cáncer cervico uterino</a>
                <a href="#" title="Osteosarcoma" class="btn btn--border-fill color-13">Osteosarcoma</a>
                <a href="#" title="Cáncer de colon" class="btn btn--border-fill color-14">Cáncer de colon</a>
                <a href="#" title="Cáncer al pulmón" class="btn btn--border-fill color-15">Cáncer al pulmón</a>
                <a href="#" title="Cáncer de testículos" class="btn btn--border-fill color-16">Cáncer de testículos</a>
                <a href="#" title="Sarcoma de Ewing" class="btn btn--border-fill color-17">Sarcoma de Ewing</a>
                <a href="#" title="Cáncer de próstata" class="btn btn--border-fill color-18">Cáncer de próstata</a>
                <a href="#" title="Cáncer de células claras" class="btn btn--border-fill color-19">Cáncer de células claras</a>
            </div><!--.listado__items-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</div><!--.listado-->
<div class="wrap">
    <div class="block--flex">
        <h1 class="headline bigger">El Libro</h1>
        <div class="center--content">
            <img src="assets/big.jpg" alt="Libro">
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id metus mattis, cursus neque eget, egestas diam. Proin non lacinia dui. Fusce placerat dui vel vehicula feugiat.
                </p>
                <div class="btn--clear">
                    <a href="page-comprar.php" title="Comprar Libro" class="btn btn--border btn--buy">Comprar Libro</a>
                </div>
                <div class="btn--clear">
                    <a href="#" title="Adelanto" class="btn btn--border">Adelanto</a>
                </div>
            </div><!--.content-->
        </div><!--.center--content-->
        <div class="center--content big">
            <div class="rounded">
                <img src="assets/Roberto%20Iba%C3%B1ez.jpg" alt="Autor">
            </div>
            <div class="content">
                <h2 class="sub-title">Roberto Ibañez</h2>
                <p>
                    La vida de Roberto Ibáñez cambió para siempre después de recibir el diagnóstico de un lunar de feo aspecto en su brazo derecho: melanoma. Con el apoyo incondicional de su familia, sus amigos y sus compañeros de trabajo, y acudiendo justo a tiempo donde los espe- cialistas más adecuados, Roberto salió adelante con el compromiso consigo mismo de com- partir su aprendizaje y la experiencia de crecimiento que, inesperadamente, le trajo el cáncer.
                </p>
                <div class="btn--clear">
                    <a href="#" title="Leer Más" class="btn btn--border">Leer Más</a>
                </div>
            </div><!--.content-->
        </div><!--.center--content-->
    </div><!--.block--flex-->
</div><!--.wrap-->
<?php include 'footer.php'; ?>