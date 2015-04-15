<ul class="main-tabs">
    <li <?php echo $selected == 1 ? 'class="selected"' : '';?>><a href="<?php echo $this->createUrl('aboutus/index/section/trajectory');?>" class="gotham-bold">NOSOTROS</a></li>
    <li <?php echo $selected == 2 ? 'class="selected"' : '';?>><a href="<?php echo $this->createUrl('solutions/index/section/gigantography');?>" class="gotham-bold">SOLUCIONES</a></li>
    <li <?php echo $selected == 3 ? 'class="selected"' : '';?>><a href="<?php echo $this->createUrl('gallery/index/section/banners');?>" class="gotham-bold">GALER&Iacute;A</a></li>
    <!--<li <?php echo $selected == 4 ? 'class="selected"' : '';?>><a href="#" class="gotham-bold">CONTACTO</a></li>-->
    <li class="last"></li>
</ul>
<div class="clear"></div>