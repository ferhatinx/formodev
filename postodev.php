<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$sayi = $_GET['sayi'];
	
if($sayi % 3 ==0){
	echo "tebrikler";
}
elseif($sayi % 3 ==1){
	$sayi+=2; 
	echo $sayi;
}
	
else{
	$sayi+=1;
	echo $sayi;
}

?>
</body>
</html>