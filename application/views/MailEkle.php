<!DOCTYPE html>
<html>
<head>
	<title>Mail Ekleme Sayfası</title>
</head>
<body>


	<h3>Mail Ekleme Sayfası</h3>

	<form action="<?php echo base_url("Mail/insert") ?>" method="post"> 

	<span> PersonelId = </span> <select   name="Personelid">

             <?php foreach ($listele as $liste) { ?>

                <option value="<?php echo $liste->Personelid; ?>"> 

                    <?php echo $liste->isim; ?>

                </option>

            <?php } ?> 

        </select> <br>
	<span> Mail Adresi = </span> <input type="text" name="MailAdresi" placeholder="Mail Giriniz"> <br>


	<button>Ekle</button>

	</form>

</body>
</html>