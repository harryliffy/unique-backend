<?php
session_start();
include 'connection.php';

$wdyw = $_POST['wdyw'];
if(empty($_POST['data']))
	$data = 'rubi';
else
	$data = $_POST['data'];
if($wdyw == '1'){ // Get User Data / to be chat
  $items = mysql_query("SELECT * FROM fbchat_users WHERE username='$data' ORDER BY id DESC LIMIT 1");
  while ($n = mysql_fetch_array($items)) {
  	echo '<script type="text/javascript">toactive({
			name: "'.$n["name"].'",
			username:"'.$n["username"].'",
			image:"'.$n["image"].'"
  		});</script>';
  }
}
elseif($wdyw == '2'){ // load chat
  $li   = $_POST['li'];
  $me   = $_SESSION['logged_as'];
  $chat = mysql_query("SELECT * FROM fbchat_chats WHERE (username='$data' AND sender='$me' OR username='$me' AND sender='$data') AND id > '$li' ORDER BY id ASC");
  while ($n = mysql_fetch_array($chat)) {
  	if($n['sender'] == $me)
  		echo '<div class="me chat-item" id="'.$n['id'].'">'.$n['content'].'</div>';
  	else
  		echo '<div class="him chat-item" id="'.$n['id'].'">'.$n['content'].'</div>';
  }
}
elseif($wdyw == '3'){ // post chat
  $me   = $_SESSION['logged_as'];
  $ct   = $_POST['content'];
  $last_seen=date('Y-m-d h:i:s ');
  if($data != $me && $ct)
  {
  	mysql_query("INSERT INTO fbchat_chats (content,sender,username) VALUES ('$ct','$me','$data');");
	mysql_query("UPDATE fbchat_users SET last_activity='$last_seen' WHERE username='$me' ");
  }
}