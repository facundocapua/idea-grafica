<?php
/**
 * @author: Facundo Capua
 *        Date: 7/21/12
 */
class SolutionsController extends CController
{
    protected static $subsections = array(
        'gigantography' => array(
            'id'           => 'gigantography',
            'view'         => 'main',
            'title'        => 'Gigantografias',
            'content_file' => 'gigantography',
            'view_data'    => null
        ),
        'vinyl'         => array(
            'id'           => 'vinyl',
            'view'         => 'main',
            'title'        => 'Vinilos',
            'content_file' => 'vinyl',
            'view_data'    => null
        ),
        'canopies'      => array(
            'id'           => 'canopies',
            'view'         => 'main',
            'title'        => 'Marquesinas',
            'content_file' => 'canopies',
            'view_data'    => null
        ),
        'signage'       => array(
            'id'           => 'signage',
            'view'         => 'main',
            'title'        => 'Cartelería',
            'content_file' => 'signage',
            'view_data'    => null
        ),
        'corporeal'     => array(
            'id'           => 'corporeal',
            'view'         => 'main',
            'title'        => 'Corpóreo',
            'content_file' => 'corporeal',
            'view_data'    => null
        ),
    );

    public function actionIndex($section)
    {
        $data                       = self::$subsections[$section];
        $data['subsections']        = self::$subsections;
        $data['current_subsection'] = $section;

        $this->render($data['view'], $data);
    }

}
