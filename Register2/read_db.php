<?php
session_start();
include 'server.php';

    $comment = $_POST['comment'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO comment     
    (comment, id , user_id)
    VALUES
    ('$comment', '{$_POST['id']}' , $user_id)
    ";

    $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($conn));
    mysqli_query($conn,"UPDATE post SET reply=reply+1 WHERE post_id ='{$_POST['id']}' ");

    if($result){
        echo "Success!<BR>";
        header('Location: read_no_edit.php?id=' . $_POST['id']);
    } else {
        echo 'Erro !!';
    }
    mysqli_close($conn);

?>
