<?php 
# basic webserver identification info
# link dir to tested domain name

if ( $_GET['info'] ) {
    phpinfo();
} else {
    $u = posix_uname();
    $id = $_SERVER["HTTP_HOST"].' on '.$u['nodename'].' behind '.$_SERVER['SERVER_ADDR'].' from '.$_SERVER["HTTP_X_FORWARDED_FOR"];
?>
<html>
<head>
<title><?= $id ?></title>
</head>
<body>
<?= $id ?>
</body>
</html>
<?php
}

?>
