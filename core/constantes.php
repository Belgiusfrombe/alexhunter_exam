<?php

//Ma base d'URL
define('BASE_PUBLIC_URL', 'http://'.$_SERVER['HTTP_HOST']. explode(DISPATCHER_NAME, $_SERVER['SCRIPT_NAME'])[0]);

define('ROUTE_POST_DETAIL',          "Détails d'un post");
define('ROUTE_POST_ADD_FORM',        "Ajout d'un post");
define('ROUTE_POST_EDIT_FORM',       "Edition d'un post");