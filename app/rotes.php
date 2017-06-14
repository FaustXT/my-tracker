<?php
// url -> controller/apache_get_version
// url -> view

class Router{

  static $list = [];
  // adresa noua dupa metoda get
  static function get( $url, $callback){
    Router::$list[] = [
      'url'    => $url,
      'method' => 'get',
      'action' => $callback
    ];
  }
  // adresa noua dupa metoda get
  static function post( $url, $callback ){
    Router::$list[] = [
      'url'    => $url,
      'method' => 'post',
      'action' => $callback
    ];
  }
  // executa actiunea pentru adresa indicata
  static function execute( $url, $method="get" ){
    $found = false;
    foreach(Router::$list as $route ){
    //  print "<pre>";
      if(!stripos($route["url"], "%")){

      if ($route["url"] == $url and $route["method"] == $method )
      {


         if(is_string($route["action"])){
        /// apelut functiei fara nume
        $route["action"]();
        $found = true;
        }
        elseif(is_array($route["action"])){
          //print "Work";
          $found = true;
          foreach( $route["action"] as $rot ){
            if(!$rot())  break;


          }

        }
      }


    }else{
    $urlid = explode( "%" , $route["url"]) ;
    $route["url"] = $urlid[0] ;
// var_dump($route["url"]  );
// var_dump($url);
     if((stripos(  $url, $route["url"] ) !== False )and $route["method"] == $method )
     {
       /// apelut functiei fara nume
       $id=(str_replace( $route["url"], "", $url ));

       $route["action"]($id);
       $found = true;

     }
    }
    }
    if(!$found){
      header("Location:?error/error");

      }
  }
  static function redirect( $url){
    Router::execute($url);
  }
}

// Router::get("hellow", function(){ echo })
