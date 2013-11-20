<?php
$hostname_sai_principal = "localhost";
$database_sai_principal = "mundoquimica";
$username_sai_principal = "root";
$password_sai_principal = "123";

#server
#$hostname_sai_principal = "mysql10.000webhost.com";
#$database_sai_principal = "a9911245_quimica";
#$username_sai_principal = "a9911245_quimica";
#$password_sai_principal = "quimica123";

$sai_principal = mysql_connect($hostname_sai_principal, $username_sai_principal, $password_sai_principal) or trigger_error("Erro ao conectar no banco de dados! ".E_USER_ERROR);

mysql_select_db($database_sai_principal);


?>