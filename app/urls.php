<?php
// Lista de cai prelucrate
// Router::get("hello", function(){echo "Hello";});
// Router::get("bye", function(){echo "bye";});
// Router::get("logout", function(){echo "logout";});
/////////////////// User Controls ///////////////////
Router::get("mytracker/home", "UserController::index");
Router::get("user/create", "UserController::create");
Router::get("user/delte", "UserController::test");
Router::get("user/profile",["AdminControler::CheckLogin", "UserController::profile"]);
Router::get("user/list", "UserController::list");
Router::get("user/login", "UserController::login");
Router::get("user/logout", "UserController::logout");
Router::get("user/test", "UserController::test");
Router::get("user/all", "UserController::all");
Router::get("user/details/%", "UserController::details");

////////////////////////// Games //////////////////
Router::get("games/list", "GameControler::game2024");
Router::get("game/add", "GameControler::add");
Router::get("game/left", "GameControler::left");
Router::get("game/right", "GameControler::right");
Router::get("game/down", "GameControler::down");
Router::get("game/up", "GameControler::up");
Router::get("game/newgame", "GameControler::newgame");


///////// Torrents controls /////////////////////
Router::get("torrent/list", "TorrentController::list");
//Router::get("torrent/create", "TorrentController::create");
Router::get("torrent/details/%", "TorrentController::details");
Router::get("torrent/create", ["UserController::CheckLogin", "TorrentController::create"]);

/////////////////////////////// Commets //////////
Router::get("comments/create/", "CommentsControler::create");

 /////////////////////////////// Error /////////////////

Router::get("error/error", "UserController::error");

///////////////////////////////// Admins controls ////////////////
Router::get("admin/login", "AdminControler::adminlogin");
Router::get("admin/index", ["AdminControler::CheckLogin", "AdminControler::index"]);
Router::get("admin/logout", "AdminControler::logout");
Router::get("admin/torrent/edit/%",  "TorrentController::create");
Router::get("admin/torrent/block/%", "TorrentController::block");
Router::get("admin/torrent/delete/%", "TorrentController::delete");
