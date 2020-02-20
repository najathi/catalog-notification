<?php

if (isset($_POST['submitNoti'])) {
	$ch=curl_init("https://fcm.googleapis.com/fcm/send");
	$header=array("Content-Type:application/json","Authorization:key=AAAA-q_PqFI:APA91bG6QUBh0Ne3SJ1m297R4CV8cdRq2jQxD1lZZmh-r9OLO9PxQRoJmXbGU5Mvsah-cQVjaQf74QOm76iGiGwGCdX_PfxsYYTuFTDyYzJNlEdhgmMLCvGDOZ4H1b9FGRJYwz3fZCnE");

	// ! to topic means am using all device

	//now let's see data message
	$data=json_encode(array("to"=>"/topics/allDevices","data"=>array("title"=>$_REQUEST['title'],"message"=>$_REQUEST['message'], "url"=>$_REQUEST['url'])));
	curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
	$isSend = curl_exec($ch);
	
	if ($isSend) {
			header("Location: ../?not=added");
			exit();
	} else {
			header("Location: ../?err=try");
			exit();
	}

}