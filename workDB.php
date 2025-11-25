<?php
function connectDB($host, $port,
         $dbname, $user,
         $password){
    return pg_connect("host=$host
        port=$port
        dbname=$dbname
        user=$user
        password=$password");
}
function queryDB($connect, $sql_query){
    $res = pg_query($connect, $sql_query);
    if (!$res){
        $error = pg_last_error($connect);
        echo ('Database error: ' . $error . '<br>');
    }
    return $res ;
}
?>

<!-- // пример -->
<!-- <meta charset="utf-8"> для перевода в utf-8 длякорректного отображения кирилицы -->
<?php
// require ('workDB.php');
// $host = 'localhost';
// $port = '5432';
// $dbname = 'mydatabase';
// $user = 'postgres';
// $password = '13031998';

// $connect = connectDB($host,$port,$dbname,$user,$password);
// $sqlQueryUTF8 = "SET NAMES 'utf8'"; -- SQL запрос
// $quvery = queryDB($connect,$sqlQueryUTF8);
// $data = pg_fetch_all($quvery); -- достаёт данные в переменную
