<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT posts.*, categories.name AS category_name
        FROM posts
        JOIN categories ON posts.category_id = categories.id
        ORDER BY posts.created_at DESC
        LIMIT 10;"; 

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, $id): array
{
    $sql = "SELECT posts.*, categories.name AS category_name
        FROM posts
        JOIN categories ON posts.category_id = categories.id
        WHERE posts.id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}

function createOne(PDO $connexion, array $data): bool
{

    $sql = "INSERT INTO posts (title, text, quote, created_at, category_id)
            VALUES (:title, :text, :quote, NOW(), :category_id)";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->execute();
    return $connexion->lastInsertId();
}


function deleteOneById(PDO $connexion, int $id): bool {

    $sql = "DELETE FROM posts 
            WHERE id = :id";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);

    return $rs->execute();
}