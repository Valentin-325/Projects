<?php

/* accesam variabila conectare incluzand fisierul care o contine.
   Preluam datele punandu-le in variabile.
   Creem o variabila noua pentru a trimite datele noastre catre baza de date.
   Folosim comanda INSERT INTO ,"users" este numele tabelului.Dupa precizam in ce coloane 
   dorim sa inseram (in ordine)."VALUES" reprezinta propriu-zis informatiile preluate.
   Variabila $result are nevoie de 2 parametri si anume variabila care tine de conectarea la baza de date
   si ceea ce vrem sa trimitem.
   Dupa care folosim "header" pentru a fi redirectionati catre pagina noastra principala .*/

require 'conectare.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conectare, $sql);

header ("Location: html/home.php"); 