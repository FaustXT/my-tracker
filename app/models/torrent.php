<?php
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
// skeleton of user(create,read ,update, delete)

class Torrent{
  public $type;
  public $gen;
  public $name;
  public $file;
  public $image;
  public $description;
  public $id;
  public $block;

  //////////////////////////////////////////////////////// create
  public function __construct( $type, $gen, $name, $file, $image, $description, $id=false ){

$this->type  = $type;
$this->gen   = $gen;
$this->name  = $name;
$this->file  = $file;
$this->image = $image;
$this->description = $description;
$this->id = $id;
$this->block= false;


 }
 /////////////////////////////////////////////// save user to disk/database
 public function save(){
 $uuid1 = Uuid::uuid1();

if($this->id){
move_uploaded_file($this->file['tmp_name'], "public/torrent/TorrentFiles/$this->id.torrent" );
$this->file= "public/torrent/TorrentFiles/$this->id.torrent" ;
  imagejpeg( imagecreatefromjpeg($this->image['tmp_name']), "public/torrent/images/$this->id.jpg");
$this->image="public/torrent/images/$this->id.jpg";
$torrent = json_encode( $this );
 file_put_contents( "database/torrent/$this->id.json" , $torrent ) ; //
}else{
move_uploaded_file($this->file['tmp_name'], "public/torrent/TorrentFiles/{$uuid1->toString()}.torrent" );
$this->file= "public/torrent/TorrentFiles/{$uuid1->toString()}.torrent" ;
  imagejpeg( imagecreatefromjpeg($this->image['tmp_name']), "public/torrent/images/{$uuid1->toString()}.jpg");
$this->image="public/torrent/images/{$uuid1->toString()}.jpg";
$this->id=$uuid1->toString();
$torrent = json_encode( $this );
 file_put_contents( "database/torrent/{$uuid1->toString()}.json" , $torrent ) ; //
}
 }

 //////////////////////////////////// Save Object
 static function SaveObject($torrent){
   file_put_contents( "database/torrent/$torrent->id.json", json_encode($torrent) );
   return true;
 }

 //////////////////////////////////////////// Find torrent function
 public static function find( $words ){
   // 1) scan
   $files = scandir('database/torrent');
   unset($files[0]);
   unset($files[1]);
//stristr($email, 'e')
$Findtorrent = [];
   foreach ($files as $file) {
     $torrent = json_decode(file_get_contents('database/torrent/'.$file)) ;

     if(( stripos( $torrent->name , $words) !==FALSE ) or ( stripos( $torrent->gen , $words ) !==FALSE ) or ( stripos( $torrent->type , $words )!==FALSE ) ) {
      $Findtorrent[]= $torrent;
     }
   }
   return $Findtorrent;
 }
 //////////////////////// GET by ID
 public static function GetBID( $id){
    return  json_decode(file_get_contents('database/torrent/'.$id.'.json'));

 }
/////////////////////////// Delete by ID
public static function Delete($id){
   unlink('database/torrent/'.$id.'.json');
   if(is_file('public/torrent/images/'.$id.'.jpg'))
       unlink('public/torrent/images/'.$id.'.jpg');
   if(is_file('public/torrent/TorrentFiles/'.$id.'.torrent'))
       unlink('public/torrent/TorrentFiles/'.$id.'.torrent');


   if(is_dir('database/comments/'.$id)){
   $folder =scandir('database/comments/'.$id);
   foreach ($folder as $file) {
     print "delete coment<br>";
    unlink('database/comments/'.$id."/".$file);
   }
   rmdir("database/comments/$id");
    }
}

 ///////////////////////////////////////////// List torrent function
 public static function all(){
   $files = scandir('database/torrent');
   unset($files[0]);
   unset($files[1]);

   foreach ($files as $file) {
     $torrent = json_decode(file_get_contents('database/torrent/'.$file)) ;
     $allTorrent[]= $torrent;
   }
   return $allTorrent;
 }



}
