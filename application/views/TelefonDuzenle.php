<!DOCTYPE html>
<html>
<head>
	<title>Telefon Bilgi Duzenleme Sayfası</title>
</head>
<body>


	<h3>Telefon Bilgi Duzenleme Sayfası </h3>

	<form action="<?php echo base_url("Telefon/update/$listele->Telefonid") ?>" method="post"> 

	<span> Personel İd = </span> 


	<select name="Personelid">

		<option> <?php echo ($listele->isim); ?> </option>

                <?php foreach ($getir as $cek) { ?>

                <option value="<?php echo $cek->Personelid; ?>"> 

                    <?php echo $cek->isim; ?>

                </option>       

            <?php } ?>                         


        </select> <br>






	<span> Telefon Numarası = </span> <input type="text" name="TelefonNo" placeholder="Yaş Giriniz" value="<?php echo($listele->TelefonNo); ?>"> <br>


	<button>Güncelle</button>

	</form>

</body>
</html>