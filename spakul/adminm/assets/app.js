/*
|-------------------------------------
|  Fixed Facebook Chat Example
|-------------------------------------
|
|  Writer : Rubi Jihantoro
|  Github : https://www.github.com/codenoid/
|  Kutemukan : https://kutemukan.com/profile/ruby/
|  Facebook : https://www.facebook.com/real.jihantoro/
| 
*/
var ci = setInterval(function () {getchat()}, 1000);
function chat (u) {
	if(!$('.active-chat > [username="'+u+'"]').html()){
		$.ajax({
			url   : terminal,
			type  : 'POST',
			data  : {wdyw:1,data:u},
			dataType: 'html',
			success : function(result){   	
				$('.istirahat').html(result);
				$('.change').html($('.a-d').html());
				$(".chat-list").mCustomScrollbar("scrollTo",'.active-chat > .chat[username="'+fw+'"] .chat-list .mCSB_container > div:last-child');
			}
		});
	}
}
function toactive (i) {
  $('.template > .chat').attr('username', i.username);
  $('.template .close.icon').attr('close-username', i.username);
  $('.template .myname').html(i.name);
  $('.template input').attr("onchange", "send('"+i.username+"')");
  $('.template input').attr("input-for", i.username);
  var ih = "'";
  $('.template i.close.icon').attr('onclick', "doclose("+ih+i.username+ih+");");
  $('.active-chat').append($('.template').html());
  var interval = '<script type="text/javascript" i-id="'+i.username+'">var i'+i.username+' = setInterval(function(){}, 1000);</script>';
  $('.intervalroom').append(interval);
  $('.active-chat > .chat[username!="'+i.username+'"]').removeClass('active');
  $('.active-chat > .chat[username="'+i.username+'"]').addClass('active');
  $(".chat-list").mCustomScrollbar({theme:"minimal-dark"});
}
function doclose (u) {
  $('.active-chat > .chat[username!="'+u+'"]').removeClass('active');
  $('.active-chat > .chat[username="'+u+'"]').addClass('active');
  $('.active-chat > .chat[username="'+u+'"]').remove();
}
function getchat(){
	var fw = $('.active-chat > .active.chat').attr('username')
	, 	cl = $('.active-chat > .chat[username="'+fw+'"] .chat-list .chat-item').length;
	if(cl == 0 || cl < 0)
		var tt = 0;
	else
		var tt = $('.active-chat > .chat[username="'+fw+'"] .chat-list .chat-item:last-child').attr('id');
	$.ajax({
		url   : terminal,
		type  : 'POST',
		data  : {wdyw:2,data:fw,li:tt},
		dataType: 'html',
		success : function(result){
			$('.active-chat > .chat[username="'+fw+'"] .chat-list > div > .mCSB_container').append(result);
			$(".chat-list").mCustomScrollbar("scrollTo",'.active-chat > .chat[username="'+fw+'"] .chat-list .mCSB_container > div:last-child');
		}
	});
}
function send (f) {
	var d = $('input[input-for="'+f+'"]').val();
	
	if(d && f)
	{
		$.ajax({
			url   : terminal,
			type  : 'POST',
			data  : {wdyw:3,data:f,content:d},
			dataType: 'html',
			success : function(result){
				$('.active-chat > .chat input').val('');
				$(".chat-list").mCustomScrollbar("scrollTo",'.active-chat > .chat[username="'+f+'"] .chat-list .mCSB_container > div:last-child');
			}
		});
	}
}
