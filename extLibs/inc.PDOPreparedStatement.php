<?php
if(!isset($pdo) && PDO_ON == TRUE){
    $dsn = 'mysql:host='.DB_SERVER.';port='.DB_PORT.';dbname='.DB_NAME;
    $user = DB_USER;
    $password = DB_PASSWORD;
    $pdo = new SYSTEM\DATABASE\PDO($dsn, $user, $password);
} 
$sql = 'SELECT * FROM users WHERE user_nickname LIKE :name';
$pdo->preparedStatement($sql);
$params = array('name'=>'%jS%');
$data = $pdo->execute($params);

foreach ($data as $userAccount) {
    echo '<p><h2>Datensatz <small><b>user_id:</b> '.$userAccount['user_id'].'</small></h2>';
//  echo 'UserID: <b>'.$userAccount['user_id'].'</b><br />';
    echo 'UserNickname: <b>'.$userAccount['user_nickname'].'</b><br />';
    echo 'User_eMail: <b>'.$userAccount['user_email'].'</b><br />';
    echo 'User_active: <b>';
    echo ($userAccount['user_active'] === 1)? 'TRUE</b><br />':'FALSE</b><br />';
    echo 'User_Password: <b>'.$userAccount['user_password'].'</b></p><hr />';
}
