function funkcja(mieszanka, litry, wynik){

    
    var mieszanka = document.getElementById('mieszanka').value;
    var litry = document.getElementById('litry').value;
    var wynik;

    wynik = 0;

    if( mieszanka == 1){
        wynik = litry * 4 ;
    }
         else if (mieszanka == 2){
        wynik = litry * 3.5;
         }
    
         document.getElementById('wynik').innerHTML= "cena paliwa wynosi: " + wynik;
}