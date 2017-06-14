<?php
Class GameControler {
  public function game2024(){
    if (isset($_COOKIE["map2048"]))
  $map_now= Cookies::get("map2048", $action = true);
  else {
    $map_now=new Game2048();
  Cookies::set($map_now, "map2048", $action= true);
  }

// print "<pre>";
// var_dump($map);
  r("game-2048", ["map"=>$map_now->map]);
  }
  public function add(){
    $map_now= Cookies::get("map2048", $action = true);
    $map_now->whinorlose();
   $map_now->and();
   Cookies::set($map_now, "map2048", $action= true);
    r("game-2048", ["map"=>$map_now->map]);
  }
  public function left(){
  $map_now = Cookies::get("map2048", $action = true);
  $map_now->left();
  $map_now->whinorlose();
  $map_now->and();
  //var_dump($map_now);
    Cookies::set($map_now, "map2048", $action= true);
  r("game-2048", ["map"=>$map_now->map]);
  }
  public function right(){
    $map_now = Cookies::get("map2048", $action = true);
    $map_now->right();
    $map_now->whinorlose();
    $map_now->and();
    //var_dump($map_now);
      Cookies::set($map_now, "map2048", $action= true);
    r("game-2048", ["map"=>$map_now->map]);
  }
  public function down(){
    $map_now = Cookies::get("map2048", $action = true);

    $map_now->down();
    $map_now->whinorlose();
    $map_now->and();
    //var_dump($map_now);
      Cookies::set($map_now, "map2048", $action= true);
    r("game-2048", ["map"=>$map_now->map]);
  }
  public function up(){
    $map_now = Cookies::get("map2048", $action = true);
    $map_now->up();
    $map_now->whinorlose();
    $map_now->and();
    //var_dump($map_now);
      Cookies::set($map_now, "map2048", $action= true);
    r("game-2048", ["map"=>$map_now->map]);
  }
  public function newgame(){
    $map_now = Cookies::get("map2048", $action = true);

    $map_now->newgame();
    header("Location:?games/list");
  }


}
