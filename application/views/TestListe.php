<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>


<a href="<?php echo base_url("Test/insertPage"); ?>">Test Ekle</a>

<?php echo "<br>"; ?>


<?php foreach ($listele as $list) { ?>
	
	<?php echo $list->Telefonid; ?>
	<?php echo $list->isim; ?>
	<?php echo $list->TelefonNo; ?>
	 <a href="<?php echo base_url("Test/updatePage/$list->Telefonid"); ?>">Düzenle</a> 
	 <a href="<?php echo base_url("Test/delete/$list->Telefonid"); ?>">Sil</a> 
	<?php echo "<br>"; ?>

<?php } ?>

</body>
</html>