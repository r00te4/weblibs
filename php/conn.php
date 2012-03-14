<?php
// The basic link to mysql
$host="localhost";
$db_name="mydb";
$db_user="noroot";
$db_pwd="123456";
@$link=mysql_connect($host,$db_user,$db_pwd);
if(!$link){
echo "db link err!sorry";
}else{echo "ok";}

?>

