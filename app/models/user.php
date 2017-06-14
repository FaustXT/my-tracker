<?php
//pe acasa
// https://medialoot.com/item/lumino-admin-bootstrap-template
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
// skeleton of user(create,read ,update, delete)

class User{
  public $nikname;
  public $password;
  public $email;
  public $id;
  public $role;
  public $avatar;


  //// create
  public function __construct( $nikname, $password, $email, $id= null, $avatar= null){

$this->nikname = $nikname;
$this->password = $password;
$this->email    = $email;
$this->id       =$id;
$this->role  = "User";
$this->avatar = $avatar;
 }
 /// save user to disk/database
public function save(){
  if(!$this->id){
  $uuid1 = Uuid::uuid1();
  $this->id = $uuid1->toString();
}
if(isset($this->avatar)){
  imagejpeg( imagecreatefromjpeg($this->avatar), "./public/images/avatars/$this->id.jpg");
  $this->avatar= "./public/images/avatars/$this->id.jpg";
}
  $user = json_encode( $this );
 file_put_contents( "database/user/$this->id.json" , $user) ;
 }

 ///////////////// LOGIN /////////////////////////
 public static function login($name, $password=null){
   // 1) scan
   $files = scandir('database/user');
   unset($files[0]);
   unset($files[1]);

   foreach ($files as $file) {
     $user = json_decode(file_get_contents('database/user/'.$file)) ;
     if( $user->nikname == $name) {

       if($password){
         if( $user->password == $password )
         return $user;
         else
         return null;
       }

     }
   }
   return null;
 }

 public static function GetNameBID( $id){
    $user = json_decode(file_get_contents("database/user/".$id.".json"));
     return $user->nikname;
     }

 public static function all(){
   $files = scandir('database/user');
   unset($files[0]);
   unset($files[1]);

   foreach ($files as $file) {
     $user = json_decode(file_get_contents('database/user/'.$file)) ;
     $allUsers[]= $user;
   }
   return $allUsers;
 }
  static function GetUser( $id ){
 return json_decode( file_get_contents('database/user/'.$id.'.json'));
 }
 static function CountUser(){
   $files = scandir('database/user');
   unset($files[0]);
   unset($files[1]);
  return count($files);
 }

}
