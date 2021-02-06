<!DOCTYPE html>
<html>
<head>
	<title>Telefon Ekleme Sayfası</title>
</head>
<body>


	<h3>Telefon Ekleme Sayfası</h3>

	<form action="<?php echo base_url("telefon/insert") ?>" method="post"> 

	<span> PersonelId = </span> <select   name="Personelid">

             <?php foreach ($listele as $liste) { ?>

                <option value="<?php echo $liste->Personelid; ?>"> 

                    <?php echo $liste->isim; ?>

                </option>

            <?php } ?> 

        </select> <br>

	<span> Telefon = </span> <input type="text" name="TelefonNo" placeholder="TelefonNo Giriniz"> <br>


	<button>Ekle</button>

	</form>

</body>
</html>