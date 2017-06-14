<?php
  class CommentsControler{

    static function create(){
    $userid    = Session::get('id');
    $date      = date('d-m-y H:i:s');
    $torrentid = $_POST['torrentid'];
    $text      = $_POST['comment'];
    if ( CommentsControler::isValideComment($text)){
    $comments = new Comments ($userid, $torrentid, $text, $date );
    $comments->save();
    header("Location:?torrent/details/".$torrentid);
  }else
  header("Location:?error/error");
  }

    static function isValideComment($text){
      return (strlen($text)>3);
    }

  }
