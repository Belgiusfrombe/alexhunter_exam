<?php
// 	ROUTE DU DETAIL D'UN POST
// 			PATTERN: /posts/id/slug-du-post.html
// 			URL: ???
// 			CTRL: ???
// 			ACTION: ???
// 			TITLE: Alex Parker - Title du post

if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';


// 	ROUTE PAR DEFAUT: liste des posts²
// 		PATTERN: /
// 		CTRL: ???
// 		ACTION: ???
// 		TITLE: Alex Parker - Blog

else:
    include_once "../app/controllers/postsController.php";
    \App\Controllers\PostsController\indexAction($connexion);

endif;
