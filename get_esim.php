<?php include "valikko.php"; ?>
<?php
if(isset($_GET['btn'])) {
	$enimi=$_GET['en'];
	$snimi=$_GET['sn'];
	echo 'Terve '.$enimi.' '.$snimi;
}
?>
<h1>Henkilötiedot(get)</h1>
<FORM action="get_esim.php" method="GET">
<label>Etunimi</label><input type="text" name="en">
<br>
<label>Sukunimi</label><input type="text" name="sn">
<br>
<input type="submit" name="btn" value="Lähetä">
</FORM>

<?php include "footer.php"; ?>