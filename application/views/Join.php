<!DOCTYPE html>
<html>
<head>
	<title>Tablo Birleştirme İşlemi </title>
</head>
<body>

	<h3> Personel Tablosu</h3>

<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Personelid</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yas</th>
	</thead>

	<tbody>

		<?php foreach ($personel as $per1) { ?>
			<tr>
			<td> <?php echo $per1->Personelid; ?> </td>
			<td> <?php echo $per1->isim; ?> </td>
			<td> <?php echo $per1->soyisim; ?> </td>
			<td> <?php echo $per1->yas; ?> </td>
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>

<h3> Telefon Tablosu</h3>

<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Telefonid</th>
		<th>PersonelId</th>
		<th>TelefonNo</th>
	</thead>

	<tbody>

		<?php foreach ($telefon as $liste) { ?>
			<tr>
			<td><?php echo $liste->Telefonid ?></td>
			<td><?php echo $liste->Personelid ?></td>
			<td><?php echo $liste->TelefonNo ?></td>			
			</tr>
		<?php } ?>
		
		

	</tbody>

</table> 


<h3> Mail Tablosu</h3>

<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Mailid</th>
		<th>Personelid</th>
		<th>MailAdresi</th>
	</thead>

	<tbody>

		<?php foreach ($mail as $liste) { ?>
			<tr>
			<td><?php echo $liste->Mailid ?></td>
			<td><?php echo $liste->Personelid ?></td>
			<td><?php echo $liste->MailAdresi ?></td>			
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>

 	 <h3>Telefonlu Joinli Tablomuz</h3>

	<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Personelid</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yaş</th>
		<th>Telefonid</th>
		<th>TelefonNo</th>
	</thead>

	<tbody>

		<?php foreach ($teljoin as $row) { ?>
			<tr>
			<td> <?php echo $row->Personelid; ?> </td>
			<td> <?php echo $row->isim; ?> </td>
			<td> <?php echo $row->soyisim; ?> </td>
			<td> <?php echo $row->yas; ?> </td>
			<td> <?php echo $row->Telefonid; ?> </td>
			<td> <?php echo $row->TelefonNo; ?> </td>
			<!-- <td> <?php echo $row->Mailid; ?> </td>
			<td> <?php echo $row->MailAdresi; ?> </td> -->
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>   

<h3>Mailli Joinli Tablomuz</h3>

	<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Personelid</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yaş</th>
		<th>Mailid</th>
		<th>MailAdresi</th>
	</thead>

	<tbody>

		<?php foreach ($mailjoin as $row) { ?>
			<tr>
			<td> <?php echo $row->Personelid; ?> </td>
			<td> <?php echo $row->isim; ?> </td>
			<td> <?php echo $row->soyisim; ?> </td>
			<td> <?php echo $row->yas; ?> </td>
			<td> <?php echo $row->Mailid; ?> </td>
			<td> <?php echo $row->MailAdresi; ?> </td>
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>   

<h3>3 Tablo Gösterildi 1 kere birbirine bağlandı</h3>

	<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Personelid</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yaş</th>
		<th>Telefonid</th>
		<th>TelefonNo</th>
		<th>Mailid</th>
		<th>MailAdresi</th>	
	</thead>

	<tbody>

		<?php foreach ($where as $row) { ?>
			<tr>
			<td> <?php echo $row->Personelid; ?> </td>
			<td> <?php echo $row->isim; ?> </td>
			<td> <?php echo $row->soyisim; ?> </td>
			<td> <?php echo $row->yas; ?> </td>
			<td> <?php echo $row->Telefonid; ?> </td>
			<td> <?php echo $row->TelefonNo; ?> </td>
			<td> <?php echo $row->Mailid; ?> </td>
			<td> <?php echo $row->MailAdresi; ?> </td>		
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>   

<h3>3 İnner Join ve 2 kere birbirine bağlandı</h3>

	<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Personelid</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yaş</th>
		<th>Telefonid</th>
		<th>TelefonNo</th>
		<th>Mailid</th>
		<th>MailAdresi</th>	
	</thead>

	<tbody>

		<?php foreach ($uctablojoin as $row) { ?>
			<tr>
			<td> <?php echo $row->Personelid; ?> </td>
			<td> <?php echo $row->isim; ?> </td>
			<td> <?php echo $row->soyisim; ?> </td>
			<td> <?php echo $row->yas; ?> </td>
			<td> <?php echo $row->Telefonid; ?> </td>
			<td> <?php echo $row->TelefonNo; ?> </td>
			<td> <?php echo $row->Mailid; ?> </td>
			<td> <?php echo $row->MailAdresi; ?> </td>		
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>   

<h3>3 Tablo İnner Join ve 2 kere birbirine bağlandı</h3>

	<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Personelid</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yaş</th>
		<th>Telefonid</th>
		<th>TelefonNo</th>
		<th>Mailid</th>
		<th>MailAdresi</th>	
	</thead>

	<tbody>

		<?php foreach ($uctabloinnerjoin as $row) { ?>
			<tr>
			<td> <?php echo $row->Personelid; ?> </td>
			<td> <?php echo $row->isim; ?> </td>
			<td> <?php echo $row->soyisim; ?> </td>
			<td> <?php echo $row->yas; ?> </td>
			<td> <?php echo $row->Telefonid; ?> </td>
			<td> <?php echo $row->TelefonNo; ?> </td>
			<td> <?php echo $row->Mailid; ?> </td>
			<td> <?php echo $row->MailAdresi; ?> </td>		
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>   

<h3>3 Left Join ve 2 kere birbirine bağlandı</h3>

	<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Personelid</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yaş</th>
		<th>Telefonid</th>
		<th>TelefonNo</th>
		<th>Mailid</th>
		<th>MailAdresi</th>	
	</thead>

	<tbody>

		<?php foreach ($uctabloleftjoin as $row) { ?>
			<tr>
			<td> <?php echo $row->Personelid; ?> </td>
			<td> <?php echo $row->isim; ?> </td>
			<td> <?php echo $row->soyisim; ?> </td>
			<td> <?php echo $row->yas; ?> </td>
			<td> <?php echo $row->Telefonid; ?> </td>
			<td> <?php echo $row->TelefonNo; ?> </td>
			<td> <?php echo $row->Mailid; ?> </td>
			<td> <?php echo $row->MailAdresi; ?> </td>		
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>   


<h3> Join Telefon Model Tablosu</h3>

<table border="1" style="background-color: #4CAF50;
  color: white;">

	<thead>
		<th>Telefonid</th>
		<th>İsim</th>
		<th>TelefonNo</th>
	</thead>

	<tbody>

		<?php foreach ($model as $per1) { ?>
			<tr>
			<td> <?php echo $per1->Telefonid; ?> </td>
			<td> <?php echo $per1->isim; ?> </td>
			<td> <?php echo $per1->TelefonNo; ?> </td>
			</tr>
		<?php } ?>
		
		

	</tbody>

</table>


</body>
</html>