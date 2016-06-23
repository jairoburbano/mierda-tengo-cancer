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
    <section class="page-list">
        <h1 class="headline">Testimonios y tips</h1>
        <div class="btn--clear">
            <a href="#" title="Filtrar por tipo de cáncer" class="btn btn--border btn--buy js-btn">
                Filtrar por tipo de cáncer
                <svg><use xlink:href="#shape-page-list" /></svg>
            </a>
        </div>
        <div class="filter--content">
          <img src="img/close.svg" alt="Cerrar" class="js-close close">
           <h2>Filtrar por tipos de cáncer</h2>
            <ul class="filters js-filters">
                <li class="btn btn--border-fill filter--item color-1" data-filter=".clase-1">Melanoma</li>
                <li class="btn btn--border-fill filter--item color-2" data-filter=".clase-2">Cáncer de piel</li>
                <li class="btn btn--border-fill filter--item color-3" data-filter=".clase-3">Cáncer de mama</li>
                <li class="btn btn--border-fill filter--item color-4" data-filter=".clase-1">Linfoma de no hodgkin</li>
                <li class="btn btn--border-fill filter--item color-5" data-filter=".clase-3">Linfoma de Hodgkin</li>
                <li class="btn btn--border-fill filter--item color-6" data-filter=".clase-2">Leucemia</li>
                <li class="btn btn--border-fill filter--item color-7" data-filter=".clase-3">Tumor cerebral</li>
                <li class="btn btn--border-fill filter--item color-8" data-filter=".clase-3">Neuroblastoma</li>
                <li class="btn btn--border-fill filter--item color-9" data-filter=".clase-2">Cáncer de ovario</li>
                <li class="btn btn--border-fill filter--item color-10" data-filter=".clase-1">Cáncer de tiroides</li>
                <li class="btn btn--border-fill filter--item color-11" data-filter=".clase-2">Cáncer de páncreas</li>
                <li class="btn btn--border-fill filter--item color-12" data-filter=".clase-1">Cáncer cérvico uterino</li>
                <li class="btn btn--border-fill filter--item color-13" data-filter=".clase-1">Osteosarcoma</li>
                <li class="btn btn--border-fill filter--item color-14" data-filter=".clase-3">Cáncer de colon</li>
                <li class="btn btn--border-fill filter--item color-15" data-filter=".clase-1">Cáncer de pulmon</li>
            </ul>
        </div>
        <div class="block--flex js-grid">
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
            <?php include 'elements/item-page.php'; ?>
        </div><!--.block--flex-->
        <div class="btn--full">
            <a href="#" title="Cargar más testimonios" class="btn btn--border btn--buy">Cargar más testimonios</a>
        </div>
    </section><!--.page-list-->
</div><!--.wrap-->


<?php include 'footer.php'; ?>