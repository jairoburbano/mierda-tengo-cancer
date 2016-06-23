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
        <h1 class="headline">Aporta tu testimonio</h1>
        <div class="block--flex">
            <div class="content--testimonio">
                <h2 class="sub-title">Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit justo vitae feugiat aliquet. Morbi euismod ligula tellus. Nullam placerat tortor ac massa tincidunt volutpat. Quisque justo lectus, efficitur ac ipsum ut, scelerisque cursus quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                </p>
                <div class="formulario container-contact">
                    <form action="" class="formulario__content formulario--single form-contact">
                        <div class="input-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name">
                        </div><!--.input-group-->
                        <div class="input-group">
                            <label for="lastname">Apellido</label>
                            <input type="text" name="lastname" id="lastname">
                        </div><!--.input-group-->
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div><!--.input-group-->
                        <div class="input-group error">
                            <label for="age">Edad</label>
                            <input type="text" name="age" id="age">
                            <p class="error">Lorem ipsum dolor sit.</p>
                        </div><!--.input-group-->
                        <div class="input-group">
                            <label for="diagnostico">Diagnóstico</label>
                            <div class="content__select">
                                <div class="text__select">
                                    <span></span>
                                    <img src="img/select.svg" alt="select">
                                </div>
                                <select name="diagnostico" id="diagnostico">
                                    <option value=""></option>
                                    <option value="1">asdasd</option>
                                    <option value="2">fghfg</option>
                                    <option value="3">qweqw</option>
                                    <option value="4">xzczxc</option>
                                </select>
                            </div>
                        </div><!--.input-group-->
                        <div class="input-group">
                            <label for="photo">Subir tu foto</label>
                            <div class="file--group">
                                <div class="text__file">
                                    <span></span>
                                </div>
                                <input type="file" name="photo" id="photo" class="file">
                            </div>
                        </div><!--.input-group-->
                        <div class="input-group input-group--big normal">
                            <label for="message">Tu historia</label>
                            <textarea name="historia" id="message"></textarea>
                        </div><!--.input-group-->
                        <h2 class="sub-title mbig">Tips</h2>
                        <div class="content--groups">
                            <div class="tips__group">
                                <div class="tips__number">1</div>
                                <div class="tips__content">
                                    <div class="input-group input-group--big">
                                        <label for="categoria1">Categoria</label>
                                        <div class="content__select">
                                            <div class="text__select">
                                                <span></span>
                                                <img src="img/select.svg" alt="select">
                                            </div>
                                            <select name="categoria[]" id="categoria1">
                                                <option value=""></option>
                                                <option value="1">asdasd</option>
                                                <option value="2">fghfg</option>
                                                <option value="3">qweqw</option>
                                                <option value="4">xzczxc</option>
                                            </select>
                                        </div>
                                    </div><!--.input-group-->
                                    <div class="input-group input-group--big normal">
                                        <label for="message1">Tu historia</label>
                                        <textarea name="message[]" id="message1"></textarea>
                                    </div><!--.input-group-->
                                </div>
                            </div><!--.tips__group-->
                            <div class="tips__group">
                                <div class="tips__number">2</div>
                                <div class="tips__content">
                                    <div class="input-group input-group--big">
                                        <label for="categoria2">Categoria</label>
                                        <div class="content__select">
                                            <div class="text__select">
                                                <span></span>
                                                <img src="img/select.svg" alt="select">
                                            </div>
                                            <select name="categoria[]" id="categoria2">
                                                <option value=""></option>
                                                <option value="1">asdasd</option>
                                                <option value="2">fghfg</option>
                                                <option value="3">qweqw</option>
                                                <option value="4">xzczxc</option>
                                            </select>
                                        </div>
                                    </div><!--.input-group-->
                                    <div class="input-group input-group--big normal">
                                        <label for="message2">Tu historia</label>
                                        <textarea name="message[]" id="message2"></textarea>
                                    </div><!--.input-group-->
                                </div>
                            </div><!--.tips__group-->
                            <div class="tips__group">
                                <div class="tips__number">3</div>
                                <div class="tips__content">
                                    <div class="input-group input-group--big">
                                        <label for="categoria3">Categoria</label>
                                        <div class="content__select">
                                            <div class="text__select">
                                                <span></span>
                                                <img src="img/select.svg" alt="select">
                                            </div>
                                            <select name="categoria[]" id="categoria3">
                                                <option value=""></option>
                                                <option value="1">asdasd</option>
                                                <option value="2">fghfg</option>
                                                <option value="3">qweqw</option>
                                                <option value="4">xzczxc</option>
                                            </select>
                                        </div>
                                    </div><!--.input-group-->
                                    <div class="input-group input-group--big normal">
                                        <label for="message3">Tu historia</label>
                                        <textarea name="message[]" id="message3"></textarea>
                                    </div><!--.input-group-->
                                </div>
                            </div><!--.tips__group-->
                        </div><!--.content--groups-->
                        <div class="btn--clear more-tips">
                            <span class="btn btn--border js-more">Agregar Tips +</span>
                        </div>
                        <input type="submit" value="Enviar Testimonio" class="btn btn--border btn--buy send">
                    </form>
                </div><!--.formuario-->
            </div><!--.content--testimonio-->
            <div class="sidebar--testimonio">
                <h2 class="sub-title">Diagnóstico</h2>
                <!--NOTE: Aqui poner clase de categoria para dar color al elemento-->
                <div class="item item--full clearfix color-1">
                    <div class="item__image">
                        <a href="single.php" title="Titulo post">
                            <!--NOTE: Tamaño imagen 360px * 245px-->
                            <img src="https://s-media-cache-ak0.pinimg.com/236x/3d/cf/f9/3dcff9de25bac2a028dec388118458cd.jpg" alt="Titulo imagen">
                        </a>
                    </div><!--.item__image-->
                    <div class="item__text">
                        <div class="item__category">
                            <!--NOTE: Cambiar categoria-->
                            <a href="category.php" title="Titulo categoria" class="category">Nombre Categoria</a>
                            <!--NOTE: No modificar esta parte, es igual para todo los items-->
                            <a href="single.php" title="Leer Testimonio" class="read-more">
                                <img src="img/message.svg" alt="Leer testimonio">
                                <span>Leer Testimonio</span>
                            </a>
                        </div><!--.item__category-->
                        <!--NOTE: El nombre y el apellido pan por separado por cambio de tamaño-->
                        <a href="single.php" title="Titulo post" class="item__title">Pablo<span>Hernández</span></a>
                        <div class="item__content">
                            <div class="item__content--data">
                                <!--NOTE: Este texto debe tener limite de caracteres-->
                                <p>
                                    Un bulto bajo el mentón fue la primera alerta de que algo ocurría. Pablo tenía 34 años, pero dejó pasar el tiempo y solo cuando la protuberancia se empezó a ver a simple vista decidió ir al doctor.
                                </p>
                            </div><!--.item__content--data-->
                        </div><!--.item__content-->
                        <a href="single.php" title="Leer más" class="btn btn--simple">Leer más »</a>
                    </div><!--.item__text-->
                </div><!--.item-->
                <!--NOTE: Aqui poner clase de categoria para dar color al elemento-->
                <div class="item item--full clearfix color-1">
                    <div class="item__image">
                        <a href="single.php" title="Titulo post">
                            <!--NOTE: Tamaño imagen 360px * 245px-->
                            <img src="https://s-media-cache-ak0.pinimg.com/236x/3d/cf/f9/3dcff9de25bac2a028dec388118458cd.jpg" alt="Titulo imagen">
                        </a>
                    </div><!--.item__image-->
                    <div class="item__text">
                        <div class="item__category">
                            <!--NOTE: Cambiar categoria-->
                            <a href="category.php" title="Titulo categoria" class="category">Nombre Categoria</a>
                            <!--NOTE: No modificar esta parte, es igual para todo los items-->
                            <a href="single.php" title="Leer Testimonio" class="read-more">
                                <img src="img/message.svg" alt="Leer testimonio">
                                <span>Leer Testimonio</span>
                            </a>
                        </div><!--.item__category-->
                        <!--NOTE: El nombre y el apellido pan por separado por cambio de tamaño-->
                        <a href="single.php" title="Titulo post" class="item__title">Pablo<span>Hernández</span></a>
                        <div class="item__content">
                            <div class="item__content--data">
                                <!--NOTE: Este texto debe tener limite de caracteres-->
                                <p>
                                    Un bulto bajo el mentón fue la primera alerta de que algo ocurría. Pablo tenía 34 años, pero dejó pasar el tiempo y solo cuando la protuberancia se empezó a ver a simple vista decidió ir al doctor.
                                </p>
                            </div><!--.item__content--data-->
                        </div><!--.item__content-->
                        <a href="single.php" title="Leer más" class="btn btn--simple">Leer más »</a>
                    </div><!--.item__text-->
                </div><!--.item-->
                <!--NOTE: Aqui poner clase de categoria para dar color al elemento-->
                <div class="item item--full clearfix color-1">
                    <div class="item__image">
                        <a href="single.php" title="Titulo post">
                            <!--NOTE: Tamaño imagen 360px * 245px-->
                            <img src="https://s-media-cache-ak0.pinimg.com/236x/3d/cf/f9/3dcff9de25bac2a028dec388118458cd.jpg" alt="Titulo imagen">
                        </a>
                    </div><!--.item__image-->
                    <div class="item__text">
                        <div class="item__category">
                            <!--NOTE: Cambiar categoria-->
                            <a href="category.php" title="Titulo categoria" class="category">Nombre Categoria</a>
                            <!--NOTE: No modificar esta parte, es igual para todo los items-->
                            <a href="single.php" title="Leer Testimonio" class="read-more">
                                <img src="img/message.svg" alt="Leer testimonio">
                                <span>Leer Testimonio</span>
                            </a>
                        </div><!--.item__category-->
                        <!--NOTE: El nombre y el apellido pan por separado por cambio de tamaño-->
                        <a href="single.php" title="Titulo post" class="item__title">Pablo<span>Hernández</span></a>
                        <div class="item__content">
                            <div class="item__content--data">
                                <!--NOTE: Este texto debe tener limite de caracteres-->
                                <p>
                                    Un bulto bajo el mentón fue la primera alerta de que algo ocurría. Pablo tenía 34 años, pero dejó pasar el tiempo y solo cuando la protuberancia se empezó a ver a simple vista decidió ir al doctor.
                                </p>
                            </div><!--.item__content--data-->
                        </div><!--.item__content-->
                        <a href="single.php" title="Leer más" class="btn btn--simple">Leer más »</a>
                    </div><!--.item__text-->
                </div><!--.item-->
            </div><!--.sidebar--testimonio-->
        </div><!--.block--flex-->
    </section><!--.testimonio-->
</div><!--.wrap-->
<?php include 'footer.php'; ?>