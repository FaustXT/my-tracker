<?php
/// User constroller class

class UserController{
  static function index(){
    r("home", []);
  }
  static function error(){
    r("error", []);
  }

  static function all(){
    print "<pre>";
      var_dump(User::all());

  }
  static function list(){
      $users = User::all();
      r("user-list", ["users"=>$users]);
  }

  static function test(){
  //  echo "User test function!!!!! :) ";
// print "<pre>";
//   var_dump(User::find( 'Jon' , 'lucreaza' ));
////////////// Torent ////////////
// $t= new Torrent ("movie", "satyr", "fiorst" , "fishier", "iamgine");
// $t->save();
echo"<pre>";
  var_dump( Torrent::find( 'horror' ));
  }
  static function listtorent(){
    print "<pre>";
    var_dump( Torrent::all() );
  }
  ////////////////////////  Login ////////////////////////
  static function login(){

     if(empty($_POST)){
        if( Session::LoginCount()<3){
          r("signin-form", []);
        }else {
          r("signin-form", ["error_login"=>Captcha::show()] );
        }
      }
     else{
       $username  =strip_tags(trim($_POST['username']));
       $password = strip_tags(trim($_POST['password1']));
       if( Session::LoginCount()>=3 ){
       $captcha  = strip_tags(trim($_POST['captcha']));
         if( ($user = User::login( $username, $password) and (Session::get('phrase') == $captcha) )){
           Session::set( "user", $user->nikname, "id", $user->id );
           header('Location:?mytracker/home');
         }else {
            Session::LoginCount('set');
           r("signin-form", ["error_login"=>Captcha::show() , "error"=>"Invalid username or password"] );
          }
        }else {
          if( $user = User::login( $username, $password)){
             Session::set( "user", $user->nikname, "id", $user->id );
             header('Location:?mytracker/home');
          }
          else{
               Session::LoginCount('set');
              r("signin-form", ["error"=>"Invalid username or password"]);
          }
        }
     }
  }

/////////////////////// create ////////////////
  static function create(){
    if(empty($_POST))
  r( "signup-form" , []);
    else{


      $username  =strip_tags(trim($_POST['username']));

      $password1 = strip_tags(trim($_POST['password1']));

      $password2 = strip_tags(trim($_POST['password2']));

      $email     = strip_tags(trim($_POST['email']));

        $error= false;

      if( !UserController::isValidUsername( $username )){
        $error['name']="Invalid username!";
      }

      if( !UserController::isValidPassword( $password1 )){
          $error['password1']="Invalid password";
      }
      if( !UserController::isPasswordMatch( $password1, $password2 )){
         $error['password2']="Password confirmation doesn't match";
      }
      if( !UserController::isValidEmail( $email )){
        $error['email']="Invalid Email";
      }
      if($error){
        r( "signup-form" , ["error" =>$error]);

      }else{

      echo "Register!!!";
      $user = new User( $username,$password1 ,$email );
      $user->save();
     }
    }
  }
  static function isValidUsername( $username ){
    return preg_match( '/^[A-Za-z][A-Za-z0-9]{2,31}$/', $username );
  }
  static function isPasswordMatch( $password1, $password2 ){
    return ($password1 === $password2);
  }
  static function isValidPassword( $password1 ){
    return preg_match( '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{3,31}$/', $password1);
  }
  static function isValidEmail( $email ){
    return preg_match( '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $email );
  }
  ///////////////////////////////// User details ////////////////////
  public static function details($id){
    $user = User::GetUser($id);
    unset($user ->password );
    if(!Session::get('admin'))
  r('user-details', ['user'=>$user]);
  else
  r('admin-details',['user'=>$user]);
  }
/////////////////////////////////// Cheking if login ////////////////////////
public static function CheckLogin(){
   if(!Session::get("user")){
     Router::redirect("user/login") ;
    return false;
    }
    else
    return true;
}
////////////////////////////////////// LOGOUT /////////////
 public static function logout(){
   Session::delete('user');
   Session::delete('id');
   header('Location:?mytracker/home');
 }
 /////////////////////////////////////// PROfILE /////////
 static function profile(){
   $id = Session::get('id');
   $user = User::GetUser($id);

   if(empty($_POST)){

   if(!Session::get('admin'))
 r('user-profile', ['user'=>$user]);
 else
 r('admin-details',['user'=>$user]);
 } else {
    if(isset($_POST["old_password"])){
   if($user->password === strip_tags(trim($_POST["old_password"]))){
     $password1=strip_tags(trim( $_POST["password1"]));
     $password2= strip_tags(trim($_POST["password2"]));
     if( !UserController::isValidPassword( $password1 )){
         r( "user-profile" , ['user'=>$user, 'error_pass'=>'Invalid password' ]);
         die;
        }
      if($password1 !== $password2 ){
        r( "user-profile" , ['user'=>$user, 'error_pass'=>"Password confirmation doesn't match" ]);
        die;
      }
   }else {
     r( "user-profile" , ['user'=>$user, 'error_pass'=>"Incorrect password" ]);
     die;
    }
    //$id =$user->$id;
    $user= new User( $user->nikname, $password1, $user->email, $user->id );
    $user->save();
    r( "user-profile" , ['user'=>$user, 'change_pass'=>"Password successful change" ]);
  } else{
    $image= $_FILES['photo'];
    //var_dump($image);
    if( !TorrentController::isValideImage( $image )){
    r("user-profile" , ['user'=>$user, "error_img" =>"Incorect image type onle JPEG is admitet!"]);
    die;}
    $userid= $_POST['userid'];
    $user= new User ( $user->nikname, $user->password, $user->email, $user->id, $image["tmp_name"]);
    $user->save();
    if(!Session::get('admin')) r('user-profile', ['user'=>$user]);
  else                         r('admin-details',['user'=>$user]);
  }
  }

}

}
