<?php
/**
 * @author: Facundo Capua
 *        Date: 7/20/12
 */

return array(
    'name'        => 'Idea Grafica',

    // preloading 'log' component
    'preload'     => array('log'),

    'import'      => array(
        'application.models.*',
        'application.extensions.*'
    ),

    'components'  => array(
        'db'          => array(
            'connectionString' => 'mysql:host=localhost;dbname=idea_grafica',
            'emulatePrepare'   => true,
            'username'         => 'root',
            'password'         => 'root',
            'charset'          => 'utf8',
            'tablePrefix'      => '',
        ),
//        'db'          => array(
//            'connectionString' => 'mysql:host=internal-db.s69248.gridserver.com;dbname=db69248_ideagrafica',
//            'emulatePrepare'   => true,
//            'username'         => 'db69248',
//            'password'         => 'qweasd123',
//            'charset'          => 'utf8',
//            'tablePrefix'      => '',
//        ),
        'request'     => array(
            'baseUrl' => ''
        ),

        'urlManager'  => array(
            'urlFormat'      => 'path',
            'showScriptName' => false,
            'rules'          => array(
                'nosotros'                     => 'aboutus/index/section/trajectory',
                'nosotros/trayectoria'         => 'aboutus/index/section/trajectory',
                'nosotros/clientes'            => 'aboutus/index/section/customers',
                'nosotros/<section:\w+>'       => 'aboutus/index',

                'soluciones'                   => 'solutions/index/section/gigantography',
                'soluciones/gigantografias'    => 'solutions/index/section/gigantography',
                'soluciones/vinilos'           => 'solutions/index/section/vinyl',
                'soluciones/marquesinas'       => 'solutions/index/section/canopies',
                'soluciones/carteleria'        => 'solutions/index/section/signage',
                'soluciones/corporeos'         => 'solutions/index/section/corporeal',
                'soluciones/<section:\w+>'     => 'solutions/index',


                'galeria'                      => 'gallery/index/section/banners',
                'galeria/banners'              => 'gallery/index/section/banners',
                'galeria/corporeos'            => 'gallery/index/section/corporeal',
                'galeria/grafica-vehicular'    => 'gallery/index/section/vehicular',
                'galeria/vinilos'              => 'gallery/index/section/vinyl',
                'galeria/marquesinas'          => 'gallery/index/section/canopies',
                'gallery/<section:\w+>'        => 'gallery/index',


                '<controller:\w+>/<action:\w+>'=> '<controller>/<action>',
            ),
        ),
        'mail'        => array(
            'class'            => 'YiiMail',
            'transportType'    => 'smtp',
            'transportOptions' => array(
                'host'       => 'smtp.gmail.com',
                'username'   => 'contacto@idea-grafica.com.ar',
                'password'   => 'Contacto2012',
                'port'       => 465,
                'encryption' => 'ssl'
            ),
            'viewPath'         => 'application.views.mail',
            'logging'          => true,
            'dryRun'           => false
        ),
        'session'     => array(
            'sessionName' => 'IdeaGrafSess'
        ),
        'log'         => array(
            'class' => 'CLogRouter',
            'routes'=> array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels'=> 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                    'class'=>'CWebLogRoute',
                ),
                */
            ),
        ),
    )


);