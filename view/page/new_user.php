<form action="" method="POST">
    <input name="new_user"
     type="text"
     placeholder="введите имя больше 3 символов">
    <input type="submit">
</form> 

<?php
if(!empty($_POST['new_user'])){
    $new_user   = $_POST['new_user'];
    $queryNew  = "INSERT INTO users (slug, users) VALUES ('$new_user', '$new_user')"; 

    $res = queryDB($connect, $queryNew);
    header('Location:all');
}




