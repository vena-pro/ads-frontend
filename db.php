<?php

$pdo = new PDO ('mysql:host=localhost;dbname=ads_db', 'root', 'root');


$pdo -> exec(
    "CREATE TABLE ads (
        id BIGINT AUTO_INCREMENT,
        text TEXT NOT NULL,
        name TEXT NOT NULL,
        phone TEXT NOT NULL,
        PRIMARY KEY (id)
    )"
);