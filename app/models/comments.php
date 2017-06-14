<?php
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  class Comments{
    public $userid;
    public $date;
    public $text;
    public $torrentid;


  public function __construct( $userid, $torrentid, $text, $date ){
    $this->userid = $userid;
    $this->torrentid = $torrentid;
    $this->text = $text;
    $this->date = $date;

  }
  public function save(){
    $uuid1 = Uuid::uuid1();
    $comments = json_encode ($this);
    if(!is_dir('database/comments/'.$this->torrentid)){
    mkdir('database/comments/'.$this->torrentid);
    }
    file_put_contents("database/comments/".$this->torrentid."/{$uuid1->toString()}.json", $comments);
  }
  public function SortByDate($comments){
    usort( $comments, function( $a, $b){
      return (strtotime($a->date) < strtotime($b->date)) ? -1 : 1 ;
    });
    return $comments;
  }
  ////////////////////////////////////// List ALL by torrentid /////////////////
  public static function all( $torrentid=null){
    if($torrentid){
    $files = scandir('database/comments/'.$torrentid);
    unset($files[0]);
    unset($files[1]);

    foreach ($files as $file) {

      $comments = json_decode(file_get_contents('database/comments/'.$torrentid."/".$file)) ;
      $comments->usernikname = User::GetNameBID($comments->userid);

      $allCommentes[]= $comments;
      }
    }else {
      $folders = scandir('database/comments/');
      unset($folders[0]);
      unset($folders[1]);
      foreach ($folders as $folder){

        $files = scandir('database/comments/'.$folder);
        unset($files[0]);
        unset($files[1]);
        foreach ($files as $file) {
          $comments = json_decode(file_get_contents("database/comments/$folder/$file")) ;
            $allCommentes[]= $comments;
          }

          }

         }
return $allCommentes;

  }

  }
