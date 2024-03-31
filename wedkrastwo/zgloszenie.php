<?php
$db=mysqli_connect("localhost:8080", "root", "", "wedkarstwo");
if(isset($_POST["zglos"])){
    $lowisko=@$_POST['lowisko'];
    $data=@$_POST['data'];
    $sedzia=@$_POST['sedzia'];


$wynik=$db->query("INSERT INTO zawody_wedkarskie(karty_wedkarskie_id, lowisko_id, data_zawodow, sedzia) VALUES ('0', '$lowisko', '$data', '$sedzia')");
if($wynik)
    {
    $liczba=$db->affected_rows;
    echo "Dodano $liczba wierszy.";
    }
}
$db->close();
?>











