<?php if ($images): ?>
<ul class="gallery-grid">
    <?php foreach ($images as $image): ?>
    <li>
        <a href="/uploads/gallery/<?php echo $image->file; ?>" rel="gallery"><img src="/uploads/gallery/thumbs/<?php echo $image->file; ?>" title="<?php echo $image->name; ?>" alt="<?php echo $image->name; ?>"/></a>
    </li>
    <?php endforeach; ?>
</ul>
<div class="clear"></div>
<?php endif; ?>

<script>
    $(document).ready(function () {
        $(".gallery-grid li a").fancybox({
            openEffect:'none',
            closeEffect:'none',
            nextEffect:'fade',
            prevEffect:'fade'
        });
    });
</script>
<?php
Yii::app()->clientScript->registerMetaTag('Idea Grafica. Galer&iacute;a de imagenes de nuestros trabajos','description');
Yii::app()->clientScript->registerMetaTag('Idea Grafica, galeria de imagenes, trabajos, marquesinas, corporeos, vinilos, decoracion','keywords');
?>