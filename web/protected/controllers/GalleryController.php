<?php
/**
 * @author: Facundo Capua
 *        Date: 7/21/12
 */
class GalleryController extends CController
{
    protected static $subsections = array(
        'banners'    => array(
            'id'           => 'banners',
            'view'         => 'main',
            'title'        => 'Banners',
            'content_file' => 'gallery',
            'field_id'     => 1,
            'view_data'    => null
        ),
        'corporeal'    => array(
            'id'           => 'corporeal',
            'view'         => 'main',
            'title'        => 'Corpóreo',
            'content_file' => 'gallery',
            'field_id'     => 2,
            'view_data'    => null
        ),
        'vehicular'    => array(
            'id'           => 'vehicular',
            'view'         => 'main',
            'title'        => 'Gráfica vehicular',
            'content_file' => 'gallery',
            'field_id'     => 3,
            'view_data'    => null
        ),
        'vinyl'    => array(
            'id'           => 'vinyl',
            'view'         => 'main',
            'title'        => 'Vinilos',
            'content_file' => 'gallery',
            'field_id'     => 4,
            'view_data'    => null
        ),
        'canopies'    => array(
            'id'           => 'canopies',
            'view'         => 'main',
            'title'        => 'Marquesinas',
            'content_file' => 'gallery',
            'field_id'     => 5,
            'view_data'    => null
        ),
    );

    public function actionIndex($section)
    {
        $data                       = self::$subsections[$section];
        $data['subsections']        = self::$subsections;
        $data['current_subsection'] = $section;

        $images = Image::model()->findAll(array(
                                               'select'    => 'name,file',
                                               'condition' => 'gallery_id = :galleryId',
                                               'params'    => array(':galleryId' => $data['field_id'])
                                          ));

        $data['view_data'] = array('images' => $images);

        $this->render($data['view'], $data);
    }

}
