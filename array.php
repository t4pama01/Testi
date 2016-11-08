<?php
session_start();
if($_SESSION['login'] !=TRUE) {
	header('Location:login.php');
}
?>
<?php include "valikko.php"; ?>
<h1>Array esimerkki</h1>
<p>
	Tässä harjoituksessa opetellaan php:n perusteita.
</p>
<?php
$asiakas=array(
	array("en"=>'Teppo',"sn"=>'Testi'),
	array("en"=>'Jussi',"sn"=>'Virtanen'),
	array("en"=>'Eino',"sn"=>'Leino'),
	array("en"=>'Juha',"sn"=>'Mieto')
	);
?>
<h2>Yksi alkio</h2>
<?php
	echo 'Ensimmäinen etunimi on '.$asiakas[0]['en'];
	echo '<br>';
	echo 'Toinen sukunimi on '.$asiakas[1]['sn'];
?>
<h2>Kaikki alkiot</h2>
<?php
echo 'Taulukon sisältö:<br>';
print_r($asiakas);
?>
<h2>Kaikki alkoit taulukkona</h2>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
<?php
foreach ($asiakas as $rivi) {
	echo '<tr><td>'.$rivi['en'].'</td><td>'.$rivi['sn'].'</td></tr>';
}
?>
</TABLE>


<?php include "footer.php"; ?>