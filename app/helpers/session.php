<?php
// functii utile pentru gestionarea sesiunii
class Session{

  public function get( $key ){
    if( session_status() !=PHP_SESSION_ACTIVE ){
        session_start();
    }
    if(isset($_SESSION[$key])) {
      $user= $_SESSION[$key];
  //  $user[]= $_SESSION[$key];
    return $user;
    }
    else return null;

  }
  public function LoginCount( $action='get' ){
    if( session_status() !=PHP_SESSION_ACTIVE ){
        session_start();
    }
    if ($action == 'set'){
    if(isset($_SESSION['LoginCaunt'])){
    $_SESSION['LoginCaunt']++;
    }
    else {
      $_SESSION['LoginCaunt']  = 1;
    }
    return $_SESSION['LoginCaunt'];

  }
  else{
    if(isset($_SESSION['LoginCaunt'])){
    return $_SESSION['LoginCaunt'];
    }
    else {
    return null;
    }
}
  }

  public function set( $key, $value , $key1 =null , $value1 =null ){
    if( session_status() !=PHP_SESSION_ACTIVE ){
        session_start();
    }
    if($key1){
    $_SESSION[$key] = $value;
  } else
  $_SESSION[$key]  = $value;
  $_SESSION[$key1] = $value1;


  }

  public function delete( $key ){
    if( session_status() !=PHP_SESSION_ACTIVE ){
        session_start();
    }
    if(isset($_SESSION[$key])){
      $value = $_SESSION[$key];
      unset($_SESSION[$key]);
      return $value;
  }
  else{
    return null;
  }
}
}
