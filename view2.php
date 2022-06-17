<?php
include_once('../config/connection.php');

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
