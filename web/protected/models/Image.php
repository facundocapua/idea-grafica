<?php
/**
 * @author: Facundo Capua
 *        Date: 8/5/12
 */
class Image extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'image';
    }
}
