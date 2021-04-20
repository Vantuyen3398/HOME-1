<?php include 'constan.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>B1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$count_b = CountWoker(12);
		echo "Bai 1: Tong so cong nhan cua B = ". $count_b .".";
		echo "<br>";
		echo "<br>";
	?>
	<?php
		$count_candy = Candy(2000,200);
		echo "Bai 2: Tong so keo = ". $count_candy .".";
		echo "<br>";
		echo "<br>";
	?>

	<?php
		$count_d = Mables(18);
		echo "Bai 3: Tong so bi phai chuyen qua la = ". $count_d. ".";
		echo "<br>";
		echo "<br>";
	?>

	<?php
		$count_book = Book(27);
		echo "Bai 4: Tong so sach phai chuyen qua la = ". $count_book. ".";
		echo "<br>";
		echo "<br>";
	?>

	<?php
		$count_dx = Sumb(2/5,3/4,27,50);
		echo "Bai 5: Tong so bi xanh  = ". $count_dx['x']. ".";
		echo "<br>";
		echo " Tong so bi do = ". $count_dx['d']. ".";
		echo "<br>";
		echo "<br>";
	?>

	<?php
		$count_bi = Tongbi(120, 1/5, 3/10);
		echo "Bai 6: Tong so bi do = ". $count_bi['d']. ".";
		echo "<br>";
		echo " Tong so bi xanh = ". $count_bi['x']. ".";
		echo "<br>";
		echo " Tong so bi trang = ". $count_bi['t']. ".";
		echo "<br>";
		echo " Tong so bi vang = ". $count_bi['v']. ".";
		echo "<br>";
		echo "<br>";
	?>

	<?php
		$count_money = TotalMoney(50,10);
		echo "Bai 7: Tong so tiền = ". $count_money. ".";
		echo "<br>";
	?>
</body>
</html>