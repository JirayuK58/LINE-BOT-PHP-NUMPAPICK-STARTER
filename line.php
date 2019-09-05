 <?php
  

function send_LINE($msg){
 $access_token = '8hAAIWJ8Wnpcmop4cs7iPwyqdQ+3mia6FpDZyxhW7sB24ZWugGr15/y5j62RXXzm9iZsq7Ni5gJnFTmAAHCoQwMI/TfjcK3AMRIprusOhwpSWPRhqrW7uFWMl4VbFhIAbypuignpOCF3jwmQQiOZ6QdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '0745c770c777185664c62920665c6e8b',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
