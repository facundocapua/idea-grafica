<?php
/**
 * @author: Facundo Capua
 *        Date: 7/21/12
 */
class AboutusController extends CController
{
    protected static $subsections = array(
        'trajectory' => array(
            'id'           => 'trajectory',
            'view'         => 'main',
            'title'        => 'Trayectoria',
            'content_file' => 'trajectory',
            'view_data'    => null
        ),
        'customers'  => array(
            'id'           => 'customers',
            'view'         => 'main',
            'title'        => 'Clientes',
            'content_file' => 'customers',
            'view_data'    => null
        )
    );

    public function actionIndex($section)
    {
        $data                       = self::$subsections[$section];
        $data['subsections']        = self::$subsections;
        $data['current_subsection'] = $section;

        if ($section == 'customers') {
            $customers = Customer::model()->findAll(array(
                                                      'select' => 'name,image'
                                                 ));

            $data['view_data'] = array('customers' => $customers);
        }

        $this->render($data['view'], $data);
    }

}
