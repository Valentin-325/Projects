<?php 

/*  Pentru conectarea la baza de date avem nevoie de o variabila.
	Folosim functia de mai jos care are nevoie de 4 parametrii si anume :
	1 - hostul
	2 - username-ul bazei de date,adica root deoarece folosim xampp
	3 - parola(nu am pus nicio parola) 
	4 - numele bazei de date la care ne conectam 

	Dupa folosim un if ca sa vedem daca conectarea la baza de date a reusit,in caz contrar
	sa ne apara un mesaj care sa ne atentioneze in legatura cu asta. */

$conectare = mysqli_connect('localhost','root','','tehnologii_web'); 	

if(!$conectare) {
	die('Conectare la baza de date a esuat!');
}
