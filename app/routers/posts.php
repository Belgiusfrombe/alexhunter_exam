<?php

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
        break;
    case 'addForm':
        PostsController\addFormAction($connexion);
        break;
    case 'add':
            PostsController\addAction($connexion,$_POST);
        break;
    case 'editForm':
            PostsController\editFormAction($connexion, $_GET['id']);
        break;
    case 'update':
            PostsController\updateAction($connexion, $_GET['id'], $_POST);
        break;
    case 'delete':
            PostsController\deleteAction($connexion, $_GET['id'], $_POST);
        break;

    default:
        PostsController\indexAction($connexion);
endswitch;
