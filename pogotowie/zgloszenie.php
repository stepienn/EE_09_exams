<?php
	$baza=mysqli_connect("localhost", "root", "", "ratownictwo");
	if(isset($_POST["zglos"])){
		$data=date('H:i:s');
		$wynik=$baza->query("INSERT INTO zgloszenia(ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia) VALUES('${_POST["nrZespolu"]}', '${_POST["nrDyspozytora"]}', '${_POST["adres"]}', 0, '$data')");
		if($wynik)
		{
			$liczba=$baza->affected_rows;
			echo "Dodano $liczba wierszy.";
		}
		else
		{
			echo $baza->error;
		}
	}
	mysqli_close($baza);
?>