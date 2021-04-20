<?php  
	//BT1
	//Tuyen
	//Created 19-04-2021 11h15
	//Find the number of workers in group 2

	function CountWoker($a){	
		$b = $a * 2;
		$b = $b - 4;
		return $b;
	}
?>

<?php  
	//BT2
	//Tuyen
	//Created 19-04-2021 14h30
	//Find the number of candies you can buy

	function Candy($many, $price){
		$sum_candy = $many / $price;

		if($sum_candy % 2 == 0){
			$t_sum_candy = $sum_candy + ($sum_candy / 2);
			$sum_candy_1 = $t_sum_candy - $sum_candy;

			if($sum_candy_1 % 2 != 0){
				$sum_candy_2 = $sum_candy_1 - 1;

				if($sum_candy_2 % 2 == 0){
					$t_sum_candy_1 = $t_sum_candy + ($sum_candy_2 / 2);
					$sum_candy_3 = $t_sum_candy_1 - $t_sum_candy + 1;

					if($sum_candy_3 % 2 != 0){
						$sum_candy_4 = $sum_candy_3 - 1;

						if($sum_candy_4 % 2 == 0){
							$t_sum_candy_2 = $t_sum_candy_1 + ($sum_candy_4 / 2);
							$sum_candy_5 = $t_sum_candy_2 - $t_sum_candy_1 + 1;

							if ($sum_candy_5 % 2 == 0) {
								$t_sum_candy_3 = $t_sum_candy_2 + ($sum_candy_5 / 2);
								$sum_candy_6 = $t_sum_candy_3 - $t_sum_candy_2;

								if ($sum_candy_6 < 2) {
									return $t_sum_candy_3;
								}
							}
						}
					}
				}
			}
		}
	}	
?>

<?php  
	//BT3
	//Tuyen
	//Created 19-04-2021 14h45
	//Find the number of marbles to balance the 2 bags

	function Mables($a){
		$b = $a * 2;
		$c = $b / 2;
		$d = $c / 2;
		return $d;
	}
?>

<?php  
	//BT4
	//Tuyen
	//Created 19-04-2021 15h00
	//find the number of books so that 2 people are equal

	function Book($b){
		$m = $b / 3;
		$tg = $b - $m;
		$t_book = $tg / 2;
		return $t_book;
	}
?>

<?php  
	//BT5
	//Tuyen
	//Created 19-04-2021 21h00
	//Find the number of marbles per type

	function Sumb($a1, $a2, $t1, $t_sum){
		$blue = ($t_sum * $a2 - $t1 * 1) / (1 * $a2 - $a1* 1);
		$red = $t_sum - $blue;
		return array('x'=>$blue, 'd'=>$red);
	}
?>

<?php  
	//BT6
	//Tuyen
	//Created 19-04-2021 15h20
	//Find the number of marbles per type

	function Tongbi($t,$d,$x){
		$t_d = $t * $d;
		$t_x = $t * $x;
		$t_c = $t - $t_d - $t_x;
		$t_t = $t_c / (3 + 7) * 7;
		$t_v = $t_c - $t_t;
		return array('d'=>$t_d, 'x'=>$t_x, 't'=>$t_t, 'v'=>$t_v);
	}
?>

<?php  
	function TotalMoney($total_candy, $usd){
		$euro = 0;
		$candy = 0;
	}
?>