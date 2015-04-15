<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <script src="/static/js/jquery.js" type="text/javascript"></script>
    <script src="/static/js/cufon-yui.js" type="text/javascript"></script>
    <script src="/static/js/fonts/GothamBold_400.font.js" type="text/javascript"></script>
    <script src="/static/js/fonts/GothamBook_325.font.js" type="text/javascript"></script>
    <script src="/static/js/fonts/GothamExtraLight_275.font.js" type="text/javascript"></script>
    <script src="/static/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>

    <script src="/static/js/jquery.jcarousel.pack.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(window).load(function(){
            Cufon.replace('.gotham-bold', { fontFamily:'GothamBold', hover:true });
            Cufon.replace('.gotham-book', { fontFamily:'GothamBook', hover:true });
            Cufon.replace('.gotham-extra-light', { fontFamily:'GothamExtraLight', hover:true });
            Cufon.now();

            $('.gotham-bold, .gotham-book, .gotham-extra-light').css('visibility', 'visible');

            <?php
            $message = Yii::app()->session['flash'];
            if(!empty($message)):
                unset(Yii::app()->session['flash']);
            ?>
                alert('<?php echo $message['message'];?>');
            <?php endif; ?>
        });
    </script>

    <link href="/static/css/reset.css" type="text/css" media="screen" rel="stylesheet"/>
    <link href="/static/css/styles.css" type="text/css" media="screen" rel="stylesheet"/>

    <link href="/static/css/jquery.jcarousel.css" type="text/css" media="screen" rel="stylesheet"/>
    <link href="/static/css/ig/skin.css" type="text/css" media="screen" rel="stylesheet"/>
    <link href="/static/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" rel="stylesheet"/>
    <title>Idea Gr&aacute;fica</title>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div class="left">
            <a href="/" class="logo"></a>
            <p class="gotham-book">
                IDEA<br />
                GR&Aacute;FICA
            </p>
        </div>
        <div class="right">
            <h1>
                <span class="gotham-extra-light">Dise&ntilde;amos</span><br />
                <span class="gotham-bold">Soluciones</span>
            </h1>
            <p class="gotham-book">
                Trabajamos con las mejores marcas del mercado, vinilos autoadhesivos brillantes / transparentes / mate / esmerilados. Infinidad de posibilidades de personalizar tu comercio en interior y exterior, veh&iacute;culos, todo tipo de carteles y se&ntilde;alizaciones.
            </p>
        </div>
        <div class="clear"></div>
    </div>

    <div class="content">
        <div class="sidebar">
            <h3 class="gotham-bold">ESCR&Iacute;BANOS</h3>
            <form id="contact-form" method="post" action="<?php echo $this->createUrl('site/contact');?>">
                <fieldset>
                    <input type="text" name="ContactForm[name]" id="contact_name" placeholder="Nombre" />
                    <input type="text" name="ContactForm[phone]" id="contact_phone" placeholder="Tel&eacute;fono" />
                    <input type="text" name="ContactForm[email]" id="contact_email" placeholder="E-mail" />
                    <textarea rows="10" cols="10" name="ContactForm[message]" id="contact_message" placeholder="Mensaje"></textarea>
                    <a href="javascript:" onclick="$('#contact-form').submit();" class="button-arrow"></a>
                </fieldset>
            </form>
        </div>

        <?php echo $content; ?>
    </div>
    <div class="clear"></div>

    <div id="footer">
        <div class="info">
            Cuenca 2570 C.A.B.A., Argentina - Tel. 05411.3529.9770 - <a href="mailto:info@idea-grafica.com.ar">info@idea-grafica.com.ar</a>
        </div>
        <ul>
            <li class="first"><a href="<?php echo $this->createUrl('aboutus/index/section/trajectory');?>">Nosotros</a></li>
            <li><a href="<?php echo $this->createUrl('solutions/index/section/gigantography');?>">Soluciones</a></li>
            <li><a href="<?php echo $this->createUrl('gallery/index/section/banners');?>">Galeria</a></li>
<!--            <li><a href="#">Contacto</a></li>-->
        </ul>
    </div>
</div>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-33917693-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>