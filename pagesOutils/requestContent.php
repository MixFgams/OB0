<?php
session_start() ;
include("./pdo.php") ;
header("Content-type: application/json; charset=utf-8;") ;

if (!empty($SESSION['contentId']) && !empty($pdo)) {
    $contentId = $SESSION['contentId'] ;
    $sql = "SELECT ContentID, `name`, `description`, production, director 
                FROM film 
                WHERE ContentID = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $contentId, PDO::PARAM_INT) ;
    $stmt->execute() ;

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_DEFAULT) ;
        echo json_encode($row) ;
    }
}

