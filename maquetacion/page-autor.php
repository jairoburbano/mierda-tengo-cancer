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
    <section class="autor">
        <h1 class="headline">Sobre el autor</h1>
        <div class="block--flex">
            <div class="autor__image">
                <img src="assets/autor.jpg" alt="titulo">
                <img src="assets/8_Andr%C3%A9s-Billikopf.jpg" alt="titulo">
                <img src="assets/1_Claudia-Ram%C3%ADrez.jpg" alt="titulo">
            </div><!--.book__image-->
            <div class="autor__content">
                <h2 class="sub-title">Roberto Ibañez</h2>
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a quam sed turpis mollis gravida. Nullam non porttitor metus, at hendrerit arcu. Pellentesque porttitor dolor vitae eros auctor pharetra. Curabitur est nibh, dignissim sit amet risus ut, elementum tincidunt justo. Proin molestie varius purus quis vehicula. Cras viverra dapibus magna, in lacinia enim condimentum non. Nulla eget accumsan urna, sit amet malesuada elit. <a href="#">Nullam porta purus non mi suscipit</a>, in consequat purus convallis. Donec in mattis massa, quis suscipit magna.
                    </p>
                    <p>
                        Morbi iaculis tempor diam quis fermentum. Quisque cursus varius ante vitae fringilla. Quisque sed sapien ligula. Sed ultrices est nec magna malesuada venenatis. Suspendisse consectetur dapibus ante, quis tempor lectus tempus in. Maecenas consequat nulla a ex dapibus, non iaculis ante tempor. Nam at purus quis lorem auctor suscipit. Quisque leo est, vestibulum sit amet iaculis ac, lacinia vel justo. Vestibulum diam dolor, convallis et erat sit amet, tristique blandit quam.
                    </p>
                    <p>
                        Etiam scelerisque tincidunt egestas. Ut quis nunc libero. Nam maximus purus tellus. Nullam et est mollis, consequat nulla sit amet, porta leo. Quisque purus massa, maximus eu mauris at, ultrices hendrerit justo. Vestibulum sollicitudin arcu et eros tempor faucibus. Nullam aliquam neque eleifend nulla dignissim varius. Vestibulum et tempus augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris vulputate tortor viverra massa efficitur molestie. Fusce feugiat id leo sodales pellentesque. Sed sagittis quis elit non commodo.
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
            </div><!--.book__content-->
        </div><!--.block--flex-->
    </section><!--.comprar-->
</div><!--.wrap-->
<?php include 'footer.php'; ?>