<?php
    include 'server.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM post WHERE post_id = $id";

    $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($conn));
    mysqli_close($conn);

    if($result){
        header('Location: profile.php');
    } else {
        echo 'Erro !!';
    }

?>
