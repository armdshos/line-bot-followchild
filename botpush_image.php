<?php
$accessToken = "tg3ul2zoeExQRu3WyyyTRQd0mCXZ7L9cCIlbCXV8Ov16XI2ufyt2FjP/HNhF3NhAiWE+csTRZmxe9bnggvT5DCGw/eezuYA8SKu1pgu1NfesWpvkQxfYogpaxU9PKgsPNpKavbXuQCrMqPl2xSBEmQdB04t89/1O/w1cDnyilFU=";
   //$content = file_get_contents('php://input');
   //$arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
   //รับข้อความจากผู้ใช้
   $message = 'สวัสดี';//$arrayJson['events'][0]['message']['text'];
   //รับ id ของผู้ใช้
   $id = 'U2947c469fd8429f2ab326d98a5308d97';//$arrayJson['events'][0]['source']['userId'];
   #ตัวอย่าง Message Type "Text + Sticker"
   //if($message == "สวัสดี"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "รูปโลโก้";
      $arrayPostData['messages'][1]['type'] = "image";
      $arrayPostData['messages'][1]['originalContentUrl'] = "https://www.youant.net/wp-content/uploads/2020/04/logo-new-128.png";
      $arrayPostData['messages'][1]['previewImageUrl'] = "https://www.youant.net/wp-content/uploads/2020/04/logo-new-128.png";
      pushMsg($arrayHeader,$arrayPostData);
   //}
   function pushMsg($arrayHeader,$arrayPostData){
      $strUrl = "https://api.line.me/v2/bot/message/push";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
   }
   exit;

?>
