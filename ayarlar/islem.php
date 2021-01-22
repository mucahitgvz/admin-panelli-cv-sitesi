<?php
session_start();
ob_start();
require_once 'baglan.php';
if (isset($_POST["admingiris"])) {
	$kullanici_mail=$_POST["kullanici_mail"];
	$kullanici_sifre=$_POST["kullanici_sifre"];
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_sifre=:sifre and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
	'mail' =>$kullanici_mail,
	'sifre' =>$kullanici_sifre,
	'yetki' => 1	
	));
$bakbi=$kullanicisor->rowCount();
if ($bakbi==1) {
	$_SESSION['kullanici_mail']=$kullanici_mail;
header("Location:../yonetim/hakkimda.php");
	exit;
}
else {
header("Location:../yonetim/index.php?durum=exit");
	exit;
}
}
if (@$_GET["sertifikasil"]=="ok") {
	$sil=$db->prepare("DELETE FROM sertifika where id=:id");
	$kontrol=$sil->execute(array(
	'id'=>@$_GET["sertifika_sil"]
));
	if ($kontrol) {
		header("Location:../yonetim/sertifika.php?&durum=ok");
		exit;
	}
	else{
		header("Location:../yonetim/sertifika.php?durum=ok");
	}
}
if (isset($_POST["sertifikaguncelle"])) 
{
$sertifika_id=$_POST["sertifika_id"];
$sertifikaguncelle=$db->prepare("UPDATE sertifika SET 
	sertifika=:sertifika
	where id={$_POST["sertifika_id"]}
	");
 $update=$sertifikaguncelle->execute(array(
 	'sertifika'=>$_POST["sertifika"]
 	 ));
 if ($update) {
 	header("Location:../yonetim/sertifika.php?sertifika_id=$sertifika_id&durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/sertifika.php?sertifika_id=$sertifika_id&durum=no");
exit;
 }	
}
if (isset($_POST["beceriekle"])) 
{
$beceriekle=$db->prepare("INSERT into sertifika SET 
	sertifika=:sertifika
	");
 $update=$beceriekle->execute(array(
 	'sertifika'=>$_POST["sertifika"]
 ));
 if ($update) {
 	header("Location:../yonetim/sertifika.php?durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/sertifika.php?durum=no");
exit;
 }	
}
if (@$_GET["becerisil"]=="ok") {
	$sil=$db->prepare("DELETE FROM beceri where id=:id");
	$kontrol=$sil->execute(array(
	'id'=>@$_GET["beceri_sil"]
));
	if ($kontrol) {
		header("Location:../yonetim/beceri.php?&durum=ok");
		exit;
	}
	else{
		header("Location:../yonetim/beceri.php?durum=ok");
	}
}
if (isset($_POST["beceriguncelle"])) 
{
$beceri_id=$_POST["beceri_id"];
$beceriguncelle=$db->prepare("UPDATE beceri SET 
	yetenek=:yetenek
	where id={$_POST["beceri_id"]}
	");
 $update=$beceriguncelle->execute(array(
 	'yetenek'=>$_POST["yetenek"]
 	 ));
 if ($update) {
 	header("Location:../yonetim/beceri.php?beceri_id=$egitim_id&durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/beceri.php?beceri_id=$egitim_id&durum=no");
exit;
 }
}
if (isset($_POST["beceriekle"])) 
{
$beceriekle=$db->prepare("INSERT into beceri SET 
	yetenek=:yetenek
	");
 $update=$beceriekle->execute(array(
 	'yetenek'=>$_POST["yetenek"]
 ));
 if ($update) {
 	header("Location:../yonetim/beceri.php?durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/beceri.php?durum=no");
exit;
 }	
}
if (@$_GET["silindi"]=="ok") {
	$sil=$db->prepare("DELETE FROM egitim where id=:id");
	$kontrol=$sil->execute(array(
	'id'=>@$_GET["egitim_sil"]
));
	if ($kontrol) {
		header("Location:../yonetim/egitim.php?&durum=ok");
		exit;
	}
	else{
		header("Location:../yonetim/deneyim.php?durum=ok");
	}
}
if (isset($_POST["egitimguncelle"])) 
{
$deneyim_id=$_POST["egitim_id"];

$egitimguncelle=$db->prepare("UPDATE egitim SET 
	baslik=:baslik,
	altbaslik=:altbaslik,
	icerik=:icerik,
	tarih=:tarih
	where id={$_POST["egitim_id"]}
	");
 $update=$egitimguncelle->execute(array(
 	'baslik'=>$_POST["baslik"],
 	'altbaslik'=>$_POST["altbaslik"],
 	'icerik'=>$_POST["icerik"],
 	'tarih'=>$_POST["tarih"]
 ));
 if ($update) {
 	header("Location:../yonetim/egitim.php?egitim_id=$egitim_id&durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/egitim.php?egitim_id=$egitim_id&durum=no");
exit;
 }	
}
if (isset($_POST["ayarkaydet"])) 
{
$ayarkaydet=$db->prepare("UPDATE ayarlar SET 
	ayar_title=:ayar_title,
	ayar_desc=:ayar_desc,
	ayar_keywords=:ayar_keywords,
	ayar_author=:ayar_author
	where ayar_id=1
	");
 $update=$ayarkaydet->execute(array(
 	'ayar_title'=>$_POST["ayar_title"],
 	'ayar_desc'=>$_POST["ayar_desc"],
 	'ayar_keywords'=>$_POST["ayar_keywords"],
 	'ayar_author'=>$_POST["ayar_author"]
 ));
 if ($update) {
 	header("Location:../yonetim/hakkimda.php?durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/hakkimda.php?durum=no");
exit;
 }	
} 
require_once 'baglan.php';
if (isset($_POST["hakkimdakaydet"])) 
{
$hakkimdakaydet=$db->prepare("UPDATE hakkimda SET 
	ad=:ad,
	soyad=:soyad,
	telefon=:telefon,
	mail=:mail,
	icerik=:icerik,
	facebook=:facebook,
	instagram=:instagram,
	github=:github,
	youtube=:youtube
	where id=1
	");
 $update=$hakkimdakaydet->execute(array(
 	'ad'=>$_POST["ad"],
 	'soyad'=>$_POST["soyad"],
 	'telefon'=>$_POST["telefon"],
 	'mail'=>$_POST["mail"],
 	'icerik'=>$_POST["icerik"],
 	'facebook'=>$_POST["facebook"],
 	'instagram'=>$_POST["instagram"],
 	'github'=>$_POST["github"],
 	'youtube'=>$_POST["youtube"]
 ));
 if ($update) {
 	header("Location:../yonetim/genel-ayarlar.php?durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/genel-ayarlar.php?durum=no");
exit;
 } 	
} 
require_once 'baglan.php';
if (isset($_POST["deneyimguncelle"])) 
{
$deneyim_id=$_POST["deneyim_id"];

$deneyimguncelle=$db->prepare("UPDATE deneyim SET 
	baslik=:baslik,
	altbaslik=:altbaslik,
	icerik=:icerik,
	tarih=:tarih
	where id={$_POST["deneyim_id"]}
	");
 $update=$deneyimguncelle->execute(array(
 	'baslik'=>$_POST["baslik"],
 	'altbaslik'=>$_POST["altbaslik"],
 	'icerik'=>$_POST["icerik"],
 	'tarih'=>$_POST["tarih"]
 ));
 if ($update) {

 	header("Location:../yonetim/deneyim-duzenle.php?deneyim_id=$deneyim_id&durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/deneyim-duzenle.php?deneyim_id=$deneyim_id&durum=no");
exit;
 } 	
} 
if (@$_GET["durum"]=="ok") {
	$sil=$db->prepare("DELETE FROM deneyim where id=:id");
	$kontrol=$sil->execute(array(
	'id'=>@$_GET["deneyim_sil"]
));
	if ($kontrol) {
		header("Location:../yonetim/deneyim-duzenle.php?deneyim_id=$deneyim_id&durum=ok");
		exit;
	}
	else{
		header("Location:../yonetim/deneyim.php?durum=ok");
	}
}
if (isset($_POST["deneyimekle"])) 
{
$deneyimekle=$db->prepare("INSERT into deneyim SET 
	baslik=:baslik,
	altbaslik=:altbaslik,
	icerik=:icerik,
	tarih=:tarih
	");
 $update=$deneyimekle->execute(array(
 	'baslik'=>$_POST["baslik"],
 	'altbaslik'=>$_POST["altbaslik"],
 	'icerik'=>$_POST["icerik"],
 	'tarih'=>$_POST["tarih"]
 ));
 if ($update) {

 	header("Location:../yonetim/deneyim.php?durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/deneyim.php?durum=no");
exit;
 } 	
}
if (isset($_POST["egitimekle"])) 
{
$egitimekle=$db->prepare("INSERT into egitim SET 
	baslik=:baslik,
	altbaslik=:altbaslik,
	icerik=:icerik,
	tarih=:tarih
	");
 $update=$egitimekle->execute(array(
 	'baslik'=>$_POST["baslik"],
 	'altbaslik'=>$_POST["altbaslik"],
 	'icerik'=>$_POST["icerik"],
 	'tarih'=>$_POST["tarih"]
 ));
 if ($update) {
 	header("Location:../yonetim/egitim.php?durum=ok");
 	exit;
 }
 else {
header("Location:../yonetim/egitim.php?durum=no");
exit;
 }
} 
 ?>
