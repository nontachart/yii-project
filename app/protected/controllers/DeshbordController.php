<?php

class DeshbordController extends Controller {

    public function actionIndex() {
        $user = User::model()->findByPk('1');
//        foreach ($users as $user) {
//            echo "=========<br>";
//            print_r($user);
//            echo "<br>=========<br>";


        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'user-form',
            'enableAjaxValidation' => false,
                ));
//        print_r($user->email);
//        echo "<br>";
//        echo $form->listBox($user, 'email', $user);
//        echo "<br>";
//        $session = new CHttpSession;
//        $session->add("test", "nontachart");
//        $session->remove("test");
//        print_r($_SESSION);

        $this->widget('CCaptcha', array('buttonLabel' =>'<br />Generate new image'));

        $this->render('index');
    }

}