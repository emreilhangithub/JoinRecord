<!DOCTYPE html>
<html>
<head>
	<title>Personel Telefon Listesi</title>
</head>
<body>

	

<h3>Personel Telefon Listesi</h3>
<hr>

<a href="<?php echo base_url('telefon/insertPage') ?>">Telefon Ekle</a> <br> <br>

<table border="1">
	
	<thead>
		<th>İd</th>
		<th>PersonelId</th>
		<th>Telefon</th>
		<th>Durum</th>
	</thead>

<?php foreach ($listele as $liste) { ?>
	<tbody>
		
		<tr>
			<td><?php echo $liste->Telefonid ?></td>
			<td><?php echo $liste->isim ?></td>
			<td><?php echo $liste->TelefonNo ?></td>						
			<td>
				<a href="<?php echo base_url("Telefon/editPage/$liste->Telefonid") ?>">Düzenle</a>
				<a href="<?php echo base_url("Telefon/delete/$liste->Telefonid") ?>">Sil</a>					
			</td>
		</tr>

	</tbody>
<?php } ?>

</table>



</body>
</html>