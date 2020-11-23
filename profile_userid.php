<?php

/*Get Data From POST Http Request*/
$datas = file_get_contents('php://input');
/*Decode Json From LINE Data Body*/
$deCode = json_decode($datas,true);

file_put_contents('log.txt', file_get_contents('php://input') . PHP_EOL, FILE_APPEND);

$replyToken = $deCode['events'][0]['replyToken'];
//$replyuserId = $deCode['events'][0]['userId'];
echo "Token = ".$replyToken;
//echo "<hr>";

$access_token = 'tg3ul2zoeExQRu3WyyyTRQd0mCXZ7L9cCIlbCXV8Ov16XI2ufyt2FjP/HNhF3NhAiWE+csTRZmxe9bnggvT5DCGw/eezuYA8SKu1pgu1NfesWpvkQxfYogpaxU9PKgsPNpKavbXuQCrMqPl2xSBEmQdB04t89/1O/w1cDnyilFU=';

$userId = $replyuserId;//'Ub9af2ecddba401128eb33559023cbf9a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

//echo $result;
