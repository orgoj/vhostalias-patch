<?php
/**
* automatic redirection script do www.* URL version or homepeage
*/

$vhostroot = '/data/web/vhost/';
$host = $_SERVER['HTTP_HOST'];

if ( ! file_exists($vhostroot.$host) ) {

  if ( (substr($host, 0, 4) != 'www.')
    && file_exists($vhostroot.'www.'.$host)
  ) {
    // redirect to www.* if exists
    header('Location: http://www.'.$host.'/');
    exit();
  }

}

header("HTTP/1.1 404 Not Found");

?>
<html>
<head>
<title>404 Error - Document not found</title>
</head>
<body>
<?php

if ( ! file_exists($vhostroot.$host) ) {
    echo '<p>Site <b>'.$host.'</b> not configured.</p>';
} else {
    echo '<p>Document not found.</p>';
    echo '<p><a href="http://'.$host.'">Try HomePage.</a></p>';
}



?>
&nbsp;<br>
</body>
</html>
