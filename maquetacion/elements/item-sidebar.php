<!--NOTE: Aqui poner clase de categoria para dar color al elemento-->
<div class="item item--full clearfix color-1">
    <div class="item__image">
        <a href="single.php" title="Titulo post">
            <!--NOTE: Tamaño imagen 360px * 245px-->
            <img src="assets/post.jpg" alt="Titulo imagen">
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