<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
    /**
     * Index action is the default action in a controller.
     */
    public function actionIndex()
    {
        $images         = Image::model()->findAll(array(
                                                       'select'    => 'name,file',
                                                       'order'     => 'RAND()',
                                                       'limit'    => '12'
                                                  ));
        $data['images'] = $images;


        Yii::app()->clientScript->registerMetaTag('Idea Grafica. Trabajamos con las mejores marcas del mercado, vinilos autoadhesivos brillantes / transparentes / mate / esmerilados. Infinidad de posibilidades de personalizar tu comercio en interior y exterior, veh&iacute;culos, todo tipo de carteles y se&ntilde;alizaciones.','description');
        Yii::app()->clientScript->registerMetaTag('Idea Grafica, Ploteos, Vinilos, Esmerilados, Carteles, Se&ntilde;alización, Marquesinas, Corp&oacute;reos, Gr&aacute;fica vehicular','keywords');

        $this->render('index', $data);
    }

    public function actionContact()
    {
        $model = new ContactForm();

        if (!empty($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $msg       = new YiiMailMessage('Idea Gráfica - Nuevo Contacto', 'body', 'text/html', 'utf8');
                $msg->view = 'contact';
                $msg->setFrom('contacto@idea-grafica.com.ar', 'Idea Grafica - Contacto');
                $msg->setTo('info@idea-grafica.com.ar');
                $msg->setBody($_POST['ContactForm']);
                Yii::app()->mail->send($msg);

                $contact             = new Contact;
                $contact->name       = $model->name;
                $contact->phone      = $model->phone;
                $contact->email      = $model->email;
                $contact->message    = $model->message;
                $contact->created_at = date('Y/m/d H:i:s');
                $contact->save();

                Yii::app()->session['flash'] = array(
                    'type'    => 'success',
                    'message' => 'Hemos recibido su mensaje. Nos comunicaremos contigo a la brevedad.'
                );
            }
        }

        $this->redirect('/');
    }
}