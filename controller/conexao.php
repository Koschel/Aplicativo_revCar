<?php
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'revcar');

$conn = mysqli_connect(HOST,USER,PASSWORD,DB) or die ('Erro na conexão com o banco');


?>