<?php
$access_token = '9p+LHRZ2a21eVdsrchEID5+rsVSMyCzycthUUVVKizk0IeCMj/KQkCZjj6Qp4NYu8k91Ckk8QJEDKpohGGGF+FRPUl+33/gMDdEMI5RKIRXCO21wqIJ0eUQ86/j2Js0FehwAuI2/WPWClp+H77dFTAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
