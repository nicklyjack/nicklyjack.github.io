<?php
  $ip = $_SERVER['REMOTE_ADDR']; //получаем IP адрес клиента
  $client = $_SERVER['HTTP_USER_AGENT']; //получаем идентификатор HTTP клиента
  $today = date("Y.m.d H:i:s"); //получаем текущие дату и время
  $f = fopen("log.csv","a"); //открываем файл для добавления данных
  $param = $_REQUEST['a']; //получаем значение посланной переменной "а"
  fwrite($f,"$today; $ip; $client; sensor=$param\r\n-----------------\r\n"); //запись данных в файл
  fclose($f); //закрываем файл
?>
<p>GPRS data read page</p>
