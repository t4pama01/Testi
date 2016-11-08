<?php
session_start();
?>
<?php include "valikko.php"; ?>
<h1>Salainen</h1>
<p>
<?php
echo 'Tervetuloa <b>'.$_SESSION['tunnus'].'</b>';
?>
<p>
	Terve
</p>

<?php include "footer.php"; ?>