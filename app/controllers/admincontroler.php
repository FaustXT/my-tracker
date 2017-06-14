<?php
class AdminControler {
  static function adminlogin(){

         if(empty($_POST)){
            if( Session::LoginCount()<3){
              r("admin-login", []);
            }else {
              r("admin-login", ["error_login"=>Captcha::show()] );
            }
          }
         else{
           $username  =strip_tags(trim($_POST['username']));
           $password = strip_tags(trim($_POST['password1']));
           if( Session::LoginCount()>=3 ){
           $captcha  = strip_tags(trim($_POST['captcha']));

             if( ($user = User::login( $username, $password) and (Session::get('phrase') == $captcha) and ($user->role ==='admin'))){
               Session::set( "user", $user->nikname, "id", $user->id );
               Session::set("admin", true);
                header('Location:?admin/index');
             }else {
                Session::LoginCount('set');
               r("admin-login", ["error_login"=>Captcha::show() , "error"=>"Invalid username or password"] );
              }
            }else {
              if( ($user = User::login( $username, $password)  and ($user->role ==='admin'))){
                 Session::set( "user", $user->nikname, "id", $user->id );
                 Session::set("admin", true);
                 header('Location:?admin/index');
              }
              else{
                   Session::LoginCount('set');
                  r("admin-login", ["error"=>"Invalid username or password"]);
              }
            }
         }
      }
  static function index(){
    $user = count(User::all());
    $torrent = count(Torrent::all());
    $comments = count(Comments::all());
    r("admin-index", ["user"=>$user, "torrent"=>$torrent, "coments"=> $comments]);

  }
   static function CheckLogin(){
     if( (!Session::get("user")) and (!Session::get("admin")) ){
       Router::redirect("admin/login") ;
      return false;
      }
      else
      return true;
  }
  static function logout(){
    Session::delete('user');
    Session::delete('id');
    Session::delete('admin');

    header('Location:?mytracker/home');
  }

}
