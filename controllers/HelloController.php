<?php

namespace app\controllers;


class HelloController extends \yii\web\Controller{

  public function actionIndex(){

    $age = 22;
    $address = 'นราธิวาส';

    return $this->render('index',[

      'firstname'=>'มูฮามะฟาอิส',
      'lastname'=>'จูเปาะ',
      'age'=> $age,
      'address'=> $address

    ]);
  }

}


?>
