<div class="content-home">
    <ul class="first-level">
        <li>
            <h3 class="gotham-bold">NOSOTROS</h3>
            <ul class="second-level">
                <li><a href="<?php echo $this->createUrl('aboutus/index/section/trajectory');?>">Trayectoria</a></li>
                <li><a href="<?php echo $this->createUrl('aboutus/index/section/customers');?>">Clientes</a></li>
<!--                <li><a href="#">Equipo</a></li>-->
            </ul>
<!--            <a href="--><?php //echo $this->createUrl('aboutus/index/section/trajectory');?><!--" class="gotham-bold button">VER</a>-->
        </li>
        <li>
            <h3 class="gotham-bold">SOLUCIONES</h3>
            <ul class="second-level">
                <li><a href="<?php echo $this->createUrl('solutions/index/section/gigantography');?>">Gigantograf&iacute;a</a></li>
                <li><a href="<?php echo $this->createUrl('solutions/index/section/vinyl');?>">Vinilos / Decoraci&oacute;n</a></li>
                <li><a href="<?php echo $this->createUrl('solutions/index/section/canopies');?>">Marquesinas publicitarias</a></li>
                <li><a href="<?php echo $this->createUrl('solutions/index/section/signage');?>">Carteler&iacute;a</a></li>
                <li><a href="<?php echo $this->createUrl('solutions/index/section/corporeal');?>">Corp&oacute;reos</a></li>
            </ul>
<!--            <a class="gotham-bold button">VER</a>-->
        </li>
        <li>
            <h3 class="gotham-bold">GALER&Iacute;A</h3>
            <ul class="second-level">
                <li><a href="<?php echo $this->createUrl('gallery/index/section/banners');?>">Banners</a></li>
                <li><a href="<?php echo $this->createUrl('gallery/index/section/corporeal');?>">Corp&oacute;reos</a></li>
                <li><a href="<?php echo $this->createUrl('gallery/index/section/vehicular');?>">Gr&aacute;fica vehicular</a></li>
                <li><a href="<?php echo $this->createUrl('gallery/index/section/vinyl');?>">Vinilos</a></li>
                <li><a href="<?php echo $this->createUrl('gallery/index/section/canopies');?>">Marquesinas</a></li>
            </ul>
<!--            <a class="gotham-bold button">VER</a>-->
        </li>
        <li>
            <h3 class="gotham-bold">CONTACTO</h3>
            <p>
                Cuenca 2570 C.A.B.A., Argentina<br />
                C.P.: 1417<br />
                Tel. 05411.4502.3144<br />
                <a href="mailto:info@idea-grafica.com.ar">info@idea-grafica.com.ar</a>
            </p>
        </li>
    </ul>
    <div class="clear"></div>
    <div class="separator"></div>

    <ul id="gallery" class="jcarousel jcarousel-skin-ig">
        <?php foreach($images as $image): ?>
        <li>
            <a href="/uploads/gallery/<?php echo $image->file; ?>" rel="gallery"><img src="/uploads/gallery/thumbs/<?php echo $image->file; ?>" title="<?php echo $image->name; ?>" alt="<?php echo $image->name; ?>"/></a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<script type="text/javascript">

    $(document).ready(function() {
        $('#gallery').jcarousel({
            scroll: 2,
            visible: 6
        });

        $("#gallery li a").fancybox({
            openEffect:'none',
            closeEffect:'none',
            nextEffect:'fade',
            prevEffect:'fade'
        });
    });

</script>