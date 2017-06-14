<?php

class TorrentController{

 static function create($id = null){
   if(empty($_POST)){
   if($id==null)
 r( "torrentin-form" , []);
  else{
    $torrent = Torrent::GetBID($id);
    r("torrentin-form",["torrent"=> $torrent, "id"=>$id]);
  }
  }else{
    // public $type;
    // public $gen;
    // public $name;
    // public $file;
    // public $image;
    // public $description;
    // public $id

    $type   = strip_tags(trim($_POST['type']));
    $gen    = strip_tags(trim($_POST['gen']));
    $name   = ucfirst(strip_tags(trim($_POST['name'])));
    $file  = $_FILES['torrent'];
    $image = $_FILES['photo'];
    $description =strip_tags(trim($_POST['description']));

    if(isset($_POST['id']))
    $id =$_POST['id'];
    else {
    //  $id = null;
    }

    if( !TorrentController::isValideName( $name )){
    r("torrentin-form" , ["error" =>"Too short name"]);
    die;
  }if( !TorrentController::isValideFile( $file )){
    r("torrentin-form" , ["error" =>"Incorect type of file"]);
    die;
  }if( !TorrentController::isValideName( $type )){
  r("torrentin-form" , ["error" =>"Too short type"]);
  die;
  }if( !TorrentController::isValideName( $gen )){
  r("torrentin-form" , ["error" =>"Too short gen"]);
  die;
  }if( !TorrentController::isValideDescription( $description )){
  r("torrentin-form" , ["error" =>"Too short description"]);
  die;
  }if( !TorrentController::isValideImage( $image )){
  r("torrentin-form" , ["error" =>"incorect image type onle JPEG is admitet"]);
  die;
  }
  else {


    $torrent = new torrent(  $type, $gen, $name, $file, $image, $description );
  //  var_dump($torrent);
   $torrent->save();
    header("Location:?torrent/list");

  }
 }
 }
 public function isValideName( $name ){
   return (strlen($name)>2);
 }
 static function isValideFile( $file ){
   return ($file['type'] == 'application/x-bittorrent');
 }
 static function isValideDescription( $description ){
   return (strlen($description)> 5);
 }

 static function isValideImage( $image ){
   return ($image['type'] == 'image/jpeg');
 }
//////////////////////////// LIST //////////////////////////
 static function list(){
   $torrents = Torrent::all();
foreach ($torrents as &$torrent) {
if( !isset( $torrent->id )){
$PartLinc = explode(  "/", $torrent->file);
$PartLinc= explode( "." , $PartLinc[3]);
$torrent->id= $PartLinc[0];
}
}
if(!Session::get('admin'))
r('torrent-list', ['torrents'=>$torrents]);
else
r('admin-torrents-list', ['torrents'=>$torrents]);
 }
 ////////////////////////// DETAILS //////////////////////
 static function details($id){
   $torrent = Torrent::GetBID($id);
   if(is_dir('database/comments/'.$id)){
  $comments=Comments::all($id);
  if(count($comments)>1)
  $comments=Comments::SortByDate($comments);


r("torrent-details", [ "id"=>$id ,"torrent"=>$torrent, "comments"=>$comments]);

} else{
r("torrent-details", ["id"=>$id, "torrent"=>$torrent]);

}

}
////////////////////////// Delete Torrent ///////////////
static function SaveObject($id){
  Torrent::delete($id);
 header("Location:?torrent/list");
}

////////////////////////// Block Torrent ///////////////////
static function block($id){
  $torrent =  Torrent::GetBID($id);
  if($torrent->block==false)
  $torrent->block=true;
  else
  $torrent->block=false;
  Torrent::save($torrent);
  header("Location:?torrent/list");
  }

///////////////////////// Unblock Torrent ///////////////////
static function unblock($id){
  $torrent =  Torrent::GetBID($id);
  $torrent->block=false;
  Torrent::save($torrent);
  header("Location:?torrent/list");
}
}
