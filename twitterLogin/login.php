<?php
##############################################
### 初期設定
//エラー詳細
ini_set('display_errors', 1);

//セッションスタート
session_start();

//文字セット
header("Content-type: text/html; charset=utf-8");

//インクルード
require_once('config.php');
require_once('../vendor/autoload.php');

//インポート
use Abraham\TwitterOAuth\TwitterOAuth;

##############################################
### twitter oauth request token 取得

//TwitterOAuthクラスをインスタンス化
$objTwitterConection = new TwitterOAuth($sTwitterConsumerKey, $sTwitterConsumerSecret);

//oauthリクエストトークンの取得
$aTwitterRequestToken = $objTwitterConection->oauth('oauth/request_token', array('oauth_callback' => $sTwitterCallBackUri));

//oauthリクエストトークンをセッションに格納
$_SESSION['twOauthToken'] = $aTwitterRequestToken['oauth_token'];
$_SESSION['twOauthTokenSecret'] = $aTwitterRequestToken['oauth_token_secret'];

##############################################
### twitter 認証へ

//Twitter認証URLの作成
$sTwitterRequestUrl = $objTwitterConection->url('oauth/authenticate', array('oauth_token' => $_SESSION['twOauthToken']));

//Twitter認証画面へリダイレクト
?>
