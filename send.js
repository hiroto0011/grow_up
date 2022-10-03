
console.log("okです");
// 「CDO.Message」オブジェクト生成
var cdoMsg = new ActiveXObject("CDO.Message");
// 送信元設定
cdoMsg.From = "cst.enmt@gmail.com";
// 送信先設定
cdoMsg.To = "eno.215031@gmail.com";
// 題名設定
cdoMsg.Subject = "題名";
// 本文設定
cdoMsg.Textbody = "本文";

// CDOオブジェクトコンフィグ用名前空間
var namespace = "http://schemas.microsoft.com/cdo/configuration/";
// 送信にネットワークを利用、「2」(cdoSendUsingPort)を設定
cdoMsg.Configuration.Fields.Item(namespace + "sendusing") = 2;
// SMTPサーバ設定
cdoMsg.Configuration.Fields.Item(namespace + "smtpserver") = "smtp.gmail.com";
// SMTPポート設定
cdoMsg.Configuration.Fields.Item(namespace + "smtpserverport") = 465;
// Basic認証、「1」(cdoBasic)を設定
cdoMsg.Configuration.Fields.Item(namespace + "smtpauthenticate") = 1;
// 認証ユーザ設定
cdoMsg.Configuration.Fields.Item(namespace + "sendusername") = "cst.enmt@gmail.com";
// 認証パスワード設定
cdoMsg.Configuration.Fields.Item(namespace + "sendpassword") = "1500succeed";
// SSLを使用
cdoMsg.Configuration.Fields.Item(namespace + "smtpusessl") = true;

// コンフィグアップデート
cdoMsg.Configuration.Fields.Update();

// メール送信
cdoMsg.Send();

// 後処理
cdoMsg = null;

