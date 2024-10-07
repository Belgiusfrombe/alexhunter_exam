<?php


namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;


function indexAction(\PDO $connexion)
{
    include_once "../app/models/postsModel.php";
    $posts = \App\Models\PostsModel\findAll($connexion);
    global  $content, $title;

    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/_index.php';
    $content = ob_get_clean(); 
}

function showAction(PDO $connexion, int $id)
{

    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($connexion, $id);

    global $content, $title;
    $title = "Alex Parker - " . $post['title'] . ROUTE_POST_DETAIL;
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function addFormAction(PDO $connexion){

    global $content, $title;
    $title = "Alex Parker -" . ROUTE_POST_ADD_FORM;
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}
