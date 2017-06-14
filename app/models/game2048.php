<?php

  class Game2048{
    public $map=  [[0,0,0,0],
                  [0,0,2,0],
                  [0,0,0,0],
                  [0,0,0,0]];


  public function and(){
    $action=false;
    do{
      $x = rand(0,3);
      $y = rand(0,3);
      if($this->map[$x][$y] ==0){
        $action=true;
        $this->map[$x][$y]=2;
      }
    }while(!$action);
  }
  public function show(){
    return ($this);
  }
//////////////////// MOVE LEFT ///////////////
  public function left(){
    for($y=0;$y<=3;$y++){
      for($x=1;$x<=3;$x++){
        if($this->map[$y][$x]==0) continue;
        for($i=$x;$i>0;$i--){

          if($this->map[$y][$i-1]!=0){
            if($this->map[$y][$i-1]==$this->map[$y][$i]){
              $this->map[$y][$i-1]=$this->map[$y][$i-1]<<1;
              $this->map[$y][$i]=0; break;
            } else break;
            }
            $this->map[$y][$i-1]=$this->map[$y][$i];
            $this->map[$y][$i]=0; continue;
        }
      }
    }
  }
////////////////////////// MOVE RIGHT ///////////////
  public function right(){
    for($y=0;$y<=3;$y++){
      for($x=3;$x>=0;$x--){
        if($this->map[$y][$x]==0) continue;
        for($i=$x;$i<3;$i++){
          if($this->map[$y][$i+1]!=0){
            if($this->map[$y][$i+1]==$this->map[$y][$i]){
              $this->map[$y][$i+1]=$this->map[$y][$i+1]<<1;
              $this->map[$y][$i]=0; break;
            } else break;
            }
            $this->map[$y][$i+1]=$this->map[$y][$i];
            $this->map[$y][$i]=0; continue;
        }
      }
    }
  }
  public function down(){
    for($y=0;$y<=3;$y++){
      for($x=3;$x>=0;$x--){
        if($this->map[$x][$y]==0) continue;
        for($i=$x;$i<3;$i++){
          if($this->map[$i+1][$y]!=0){
            if($this->map[$i+1][$y]==$this->map[$i][$y]){
              $this->map[$i+1][$y]=$this->map[$i+1][$y]<<1;
              $this->map[$i][$y]=0; break;
            } else break;
            }
            $this->map[$i+1][$y]=$this->map[$i][$y];
            $this->map[$i][$y]=0; continue;
        }
      }
    }
  }
  public function up(){
    for($y=0;$y<=3;$y++){
      for($x=1;$x<=3;$x++){
        if($this->map[$x][$y]==0) continue;
        for($i=$x;$i>0;$i--){
          if($this->map[$i-1][$y]!=0){
            if($this->map[$i-1][$y]==$this->map[$i][$y]){
              $this->map[$i-1][$y]=$this->map[$i-1][$y]<<1;
              $this->map[$i][$y]=0; break;
            } else break;
            }
            $this->map[$i-1][$y]=$this->map[$i][$y];
            $this->map[$i][$y]=0; continue;
        }
      }
    }
  }
  public function whinorlose(){
  $lose=true;
    for ($y=0; $y<4 ; $y++) {
      for ($x=0; $x<4 ; $x++) {
        if ($this->map[$x][$y]==2048) {
            print "wine";
        }
        if($this->map[$x][$y]==0)
       $lose=false;
      }

      }
      if($lose){
              print "luse";
              unset($_COOKIE["map2048"]);
              die;
    }
  }
  public function newgame(){
    unset($_COOKIE["map2048"]);
    setcookie("map2048", "", time() - 3600);
  }
}
