<?php
use Gregwar\Captcha\CaptchaBuilder;

class Captcha{
public  $captcha;
    static function show(){
      $builder = new CaptchaBuilder;
      $builder->build();
      Session::set( 'phrase', $builder->getPhrase() );
      //header('Content-type: image/jpeg');
      return $builder->inline();
    }



}
