<?php
include(dirname(__FILE__)."\Connection.php");

if (isset($_POST))
{
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category = $_POST["category"];

    $query = "INSERT INTO posts (title, content, image) 
                      VALUES('$title', '$content', '$category')";

    mysqli_query($conn, $query);
    $_SESSION['success'] = "Post saved";
    header('location: ../../../index.php');
}
?>