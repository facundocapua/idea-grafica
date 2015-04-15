<div class="content-aboutus">
    <?php $this->renderPartial('/shared/navigation', array('selected' => 2)); ?>
    <div class="main-tab-content">
        <ul class="subnav">
            <?php foreach($subsections as $key => $subsection): ?>
            <li <?php echo $key == $current_subsection ? 'class="selected"' : ''; ?>><a href="<?php echo $this->createUrl('solutions/index/section/'.$key); ?>"><?php echo htmlentities($subsection['title'], ENT_NOQUOTES, Yii::app()->charset); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h2 class="gotham-extra-light"><?php echo htmlentities($title, ENT_NOQUOTES, Yii::app()->charset); ?></h2>
        <div class="clear"></div>
        <?php Yii::app()->Controller->renderPartial('_'.$content_file, $view_data); ?>
    </div>
</div>