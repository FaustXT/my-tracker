<?php
include './app/bootstrap.php';
// Router::get("hellow", function(){echo "Hellow";});
// Router::get("bye", function(){echo "bye";});
// Router::get("logout", function(){echo "logout";});
// print "<pre>";
// var_dump(Router::$list);
//
// $URL = 'log';
// Router::execute( $URL );

// $t= new Torrent ("Film", "Comedy", "Name" , "File", "Image");
// $t->save;

<img src="<?php echo Captcha::show();?>" alt="" />
 Captcha::show();

class Sameclass{
static function login(){

   if(empty($_POST)){
      if( Session::LoginCount()<3 )
    r("signin-form", []);
    }
   else{
     $username  =strip_tags(trim($_POST['username']));
     $password = strip_tags(trim($_POST['password1']));

     if( Session::LoginCount()<3 ){

       if( $user = User::find( $username, $password )){
         Session::set( "user", $user->nikname, "id", $user->id );

       }else{ echo Session::LoginCount('set');

      }else


         if( Session::LoginCount()<3 )
         r("signin-form", ["error"=>"Invalid username or password"]);
         if( Session::LoginCount()>=3 )
         r("signin-form", ["error_login"=>Captcha::show() , "error"=>"Invalid username or password"] );


        }

   }
    //echo Session::LoginCount;
}
}
?>
