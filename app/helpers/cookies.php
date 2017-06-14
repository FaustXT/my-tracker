<?php
class Cookies{

  public function set($key, $name ,$action = null){
    if(!$action){
      setcookie($name, $key, time()+7*24*60*60 );
    }else
      setcookie($name,serialize($key), time()+7*24*60*60);
  }
  public function get($name, $action=null){
    if(!$action) $key= $_COOKIE[$name];
    else $key= unserialize($_COOKIE[$name]);
  //  var_dump($key);
    return $key;
  }
}
