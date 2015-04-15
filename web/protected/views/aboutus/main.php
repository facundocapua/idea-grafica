<div class="content-aboutus">
     <?php $this->renderPartial('/shared/navigation', array('selected' => 1)); ?>
    <div class="clear"></div>
    <div class="main-tab-content">
        <h2 class="gotham-extra-light"><?php echo $title; ?></h2>
        <ul class="subnav">
            <?php foreach($subsections as $key => $subsection): ?>
            <li <?php echo $key == $current_subsection ? 'class="selected"' : ''; ?>><a href="<?php echo $this->createUrl('aboutus/index/section/'.$key); ?>"><?php echo $subsection['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="clear"></div>
        <?php Yii::app()->Controller->renderPartial('_'.$content_file, $view_data); ?>
    </div>
</div>