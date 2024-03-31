function callcu(output)
{

var cena = 0;


if(document.getElementById('k').checked){
    cena = 25;}
if(document.getElementById('s').checked){
    cena = 30;}
if(document.getElementById('p').checked){
    cena = 40;}
if(document.getElementById('d').checked){
    cena = 50;}

output.innerHTML = "Cena strzyżenia: " + cena; 
}