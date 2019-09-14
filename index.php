<?php
  $ip = $_SERVER['REMOTE_ADDR']; //получаем IP адрес клиента
  $client = $_SERVER['HTTP_USER_AGENT']; //получаем идентификатор HTTP клиента
  $today = date("Y.m.d H:i:s"); //получаем текущие дату и время
  $f = fopen("log.csv","a"); //открываем файл для добавления данных
  $temp = $_REQUEST['temp']; //получаем значение посланной переменной "а"
  $pres = $_REQUEST['pres']; //получаем значение посланной переменной "а"
  $hum = $_REQUEST['hum']; //получаем значение посланной переменной "а"
  fwrite($f,"$today; $ip; $client; temp=$temp; pres=$pres; hum=$hum; \r\n-----------------\r\n"); //запись данных в файл
  fclose($f); //закрываем файл
?>
<p>GPRS data read page</p>
