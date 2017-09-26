<?php
// kapcsolati adatok
$host = "localhost";
$user = "artdecom";
$pwd = "9UAUe8cb6G";
// kapcsolat létrehozása
$dbHiba = "&wrm=<font color='#ff0000'>Mysql hiba: ".mysql_error()."</font>&";
$k1 = mysql_connect("localhost", "artdecom", "9UAUe8cb6G") or die ($dbHiba);


 $datab = mysql_select_db ("artdecom1") 
or die ("Hiba a kiválasztásban -> ".mysql_error()); 



if (isset ($_POST["recName"],$_POST["recName2"]) && $_POST["recName"].$_POST["recName2"]!= "0") {


$qr = "insert into eukoltseg_tab values ('".$_POST["recName"]."', now(),'".$_POST["recName2"]."','')";
$dbqr = mysql_query ($qr) or die ("&wrm=<font color='#ff0000'>
Mysql hiba:".mysql_error()."</font>&");

}


// Adattáblák lekérdezése 
$rec_list = mysql_query ("select ev,portugal, izland, ir, uk, norveg, sved, dan, belga, svajc, holland, nszk, ausztria, olasz, jugoszlav, gorog, torok, francia, total from eukoltseg_tab where ev ='1950' ") or die ("Hiba a kérésben -> ".mysql_error()); 
$i = 1; 


while ($sor = mysql_fetch_array ($rec_list)) { 
$kiir0 .=$sor["ev"]; 
$kiir1 .=$sor["portugal"];
$kiir2 .=$sor["izland"];
$kiir3 .=$sor["ir"];
$kiir4 .=$sor["uk"];
$kiir5 .=$sor["norveg"]; 
$kiir6 .=$sor["sved"];
$kiir7 .=$sor["dan"];
$kiir8 .=$sor["belga"];
$kiir9 .=$sor["svajc"];
$kiir10 .=$sor["holland"]; 
$kiir11 .=$sor["nszk"];
$kiir12 .=$sor["ausztria"];
$kiir13 .=$sor["olasz"];
$kiir14 .=$sor["jugoszlav"];
$kiir15 .=$sor["gorog"];
$kiir16 .=$sor["torok"];
$kiir17 .=$sor["francia"];
$kiir18 .=$sor["total"];


$i++; 
} 
// Adat kiíratása a flash-ben 
print "$kiir0,$kiir1,$kiir2,$kiir3,$kiir4,$kiir5,$kiir6,$kiir7,$kiir8,$kiir9,$kiir10,$kiir11,$kiir12,$kiir13,$kiir14,$kiir15,$kiir16,$kiir17,$kiir18"; 
?>