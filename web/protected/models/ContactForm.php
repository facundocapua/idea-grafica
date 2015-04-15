<?php
/**
 * @author: Facundo Capua
 *        Date: 8/5/12
 */
class ContactForm extends CFormModel
{
    public $name;
    public $phone;
    public $email;
    public $message;

    public function rules()
    {
        return array(
            array('name, email, message', 'required'),
            array('name, phone, email', 'length', 'max' => 255)
        );
    }
}
