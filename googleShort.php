 <?php
  /**
 * Google Shorten Url
 * @date 2016-04-21
 * @author Pradip Kumar
 */ 
 
       $yourUlr="https://github.com/pradipcoderockers"; //Long Url 
       $appUrl = "https://www.googleapis.com/urlshortener/v1/url";
       $appUrl .= '?key=' . "AIzaSyDglLb0dxqxCyUSuPpmGClUa3MIKukM45g"; // for access api key visit https://console.developers.google.com
       // curl init
       $ch = curl_init($appUrl);
       //set options
       $options = array(CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => '{"longUrl": "' . $yourUlr . '"}');
       curl_setopt_array($ch, $options);
       // curl exec
       $res = curl_exec($ch);
       // converting to array
       $res = json_decode($res, true);
       // Return shorten url converted by google
       echo $res['id'];
   ?>
