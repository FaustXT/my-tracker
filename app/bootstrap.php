<?php
// load all that is necess.
require './app/helpers/composer/vendor/autoload.php';
include 'vendor/autoload.php';
require './app/helpers/files.php';
require './app/helpers/session.php';
require './app/helpers/captcha.php';
require './app/helpers/cookies.php';

// if(isset($_COOKIE["language"]))
// $language = json_decode('public/language/'.$_COOKIE["language"].".json");
// else{
// setcookie("language", $_COOKIE['language']);
// }
//if(!empty($_POST))
//setcookie("language",  $_POST['language']);
//echo  $_POST['language'];

if(Session::get('user')){

    $IfLogin = true;
    } else {
   $IfLogin = false;

   }

$loader = new Twig_Loader_Filesystem('app/views');
$twig = new Twig_Environment($loader, array(
    'cache'        => 'public/cache',
    'debug'        => true,
    'IfLogin'      => $IfLogin,
//    'language'     => $language
));
$twig->addGlobal('IfLogin', $IfLogin);
//$thig->addGlobal('language', $language);

include './app/helpers/render.php';

/// Models

include 'app/models/user.php';
include 'app/models/torrent.php';
include 'app/models/comments.php';
include 'app/models/game2048.php';


////////////////////// Controllers ////////////////
include 'app/controllers/user.php';
include 'app/controllers/torrent.php';
include 'app/controllers/comments.php';
include 'app/controllers/admincontroler.php';

/////////////////////////// get_class_methods
include 'app/controllers/games.php';



////// AT THE END !!!!!!!!
include 'app/rotes.php';
include 'app/urls.php';
if ( !empty($_GET) ){
    $url = key($_GET);
    Router::execute( $url );
}else   Router::execute("mytracker/home");
