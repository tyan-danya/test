<?php

$curl = curl_init('https://www.cbr.ru/scripts/XML_daily.asp?date_req=25.12.2022');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HEADER, false);


$html = curl_exec($curl);

echo $html;
curl_close($curl);

