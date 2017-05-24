<?php

namespace app\controllers;


class HelloController extends \yii\web\Controller{

  public function actionIndex(){
    $age = 22;
    $address = 'นราธิวาส123';

    return $this->render('index',[
      'firstname'=>'มูฮามะฟาอิส',
      'lastname'=>'จูเปาะ',
      'age'=> $age,
      'address'=> $address
    ]);
  }

  public function actionProduct($id,$brand=null,$price){

    return $this->render('product',[
      'id' => $id,
      'brand' => $brand,
      'price' => $price
     ]);
  }

}


?>
