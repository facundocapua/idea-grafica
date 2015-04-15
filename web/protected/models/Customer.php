<?php
/**
 * @author: Facundo Capua
 *        Date: 7/22/12
 */
class Customer extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'customer';
    }
}
