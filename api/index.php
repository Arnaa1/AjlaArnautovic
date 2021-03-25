<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/BaseDao.class.php"; //include basedao u index.file

//instanca klase, kreirana variabla
$ajla=new BaseDao();

echo "Hello form API";


 ?>
