<?php if($customers): ?>
    <ul class="customer-grid">
    <?php foreach($customers as $customer): ?>
        <li><img src="/uploads/customers/<?php echo $customer->image; ?>" title="<?php echo $customer->name; ?>" alt="<?php echo $customer->name; ?>" /></li>
    <?php endforeach; ?>
    </ul>
    <div class="clear"></div>
<?php endif; ?>
<?php
Yii::app()->clientScript->registerMetaTag('Idea Grafica. Nuestros clientes','description');
Yii::app()->clientScript->registerMetaTag('Idea Grafica, Ploteos, Vinilos, Esmerilados, Carteles, Se&ntilde;alización, Marquesinas, Corp&oacute;reos, Gr&aacute;fica vehicular','keywords');
?>