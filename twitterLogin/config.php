<?php
//アプリケーションの Consumer Key と Consumer Secret
$sTwitterConsumerKey = '02B47iY8MVqGf04hXatceR3tB'; //Consumer Key (API Key)
$sTwitterConsumerSecret = 'yGblIxoYbFtsrwLga45jqXZUeu4a767t4NSlk9o7ENZyXdc5iX'; //Consumer Secret (API Secret)

//アプリケーションのコールバックURL
$sTwitterCallBackUri = 'http://localhost/googlemapsAPI-test/twitterLogin/callback.php'; //コールバックURL

//変数初期化
$objTwitterConection = NULL; //TwitterOAuthクラスのインスタンス化
$aTwitterRequestToken = array(); //リクエストトークン
$sTwitterRequestUrl = ''; //認証用URL
$objTwitterAccessToken = NULL; //アクセストークン
$objTwUserInfo = NULL; //ユーザー情報
?>