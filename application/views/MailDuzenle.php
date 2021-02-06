<!DOCTYPE html>
<html>
<head>
	<title>Mail Bilgi Duzenleme Sayfası</title>
</head>
<body>


	<h3>Mail Bilgi Duzenleme Sayfası </h3>

	<form action="<?php echo base_url("Mail/update/$listele->Mailid") ?>" method="post"> 

	<span> PersonelId = </span> <select   name="Personelid">             

                <option value="<?php echo ($listele->Personelid); ?>"> 

                    <?php echo($listele->isim); ?>

                </option>

                <?php foreach ($getir as $cek) { ?>

                <option value="<?php echo $cek->Personelid; ?>"> 

                    <?php echo $cek->isim; ?>

                </option>       

            <?php } ?>     

           

        </select> <br>



	<span> MailAdresi = </span> <input type="text" name="MailAdresi" placeholder="MailAdresi Giriniz" value="<?php echo($listele->MailAdresi); ?>"> <br>


	<button>Güncelle</button>

	</form>

</body>
</html>