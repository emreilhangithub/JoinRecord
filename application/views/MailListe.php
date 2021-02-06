<!DOCTYPE html>
<html>
<head>
	<title>Mail Listesi</title>
</head>
<body>

	

<h3>Mail Listesi</h3>
<hr>

<a href="<?php echo base_url('Mail/insertPage') ?>">Mail Ekle</a> <br> <br>

<table border="1">
	
	<thead>
		<th>Mailid</th>
		<th>Personelid</th>
		<th>MailAdresi</th>
		<th>Durum</th>
	</thead>

<?php foreach ($listele as $liste) { ?>
	<tbody>
		
		<tr>
			<td><?php echo $liste->Mailid ?></td>
			<td><?php echo $liste->isim ?></td>
			<td><?php echo $liste->MailAdresi ?></td>						
			<td>
				<a href="<?php echo base_url("Mail/editPage/$liste->Mailid") ?>">Düzenle</a>
				<a href="<?php echo base_url("Mail/delete/$liste->Mailid") ?>">Sil</a>					
			</td>
		</tr>

	</tbody>
<?php } ?>

</table>



</body>
</html>