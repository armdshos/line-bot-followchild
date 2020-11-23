<?php


$access_token = 'tg3ul2zoeExQRu3WyyyTRQd0mCXZ7L9cCIlbCXV8Ov16XI2ufyt2FjP/HNhF3NhAiWE+csTRZmxe9bnggvT5DCGw/eezuYA8SKu1pgu1NfesWpvkQxfYogpaxU9PKgsPNpKavbXuQCrMqPl2xSBEmQdB04t89/1O/w1cDnyilFU=';

$userId = '8e12c625670c0b6bd0eed3942494169a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

