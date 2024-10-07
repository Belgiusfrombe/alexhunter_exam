<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion): array
{

    $sql = "SELECT categories.id, categories.name, COUNT(posts.id) AS post_count
            FROM categories
            LEFT JOIN posts ON posts.category_id = categories.id
            GROUP BY categories.id
            ORDER BY categories.name ASC";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}

