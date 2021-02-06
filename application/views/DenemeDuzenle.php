<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <!-- <?php print_r($listele);  ?> -->



<form action="<?php echo base_url("DenemeCon/update/$listele->Telefonid");?>" method="post">
    <label> Personel Telefon Numarası Düzenle</label> <br> <br>
    <label>Personelid = </label>
    <select name="Personelid">

        <option value="<?php echo $listele->Personelid; ?>"><?php echo $listele->isim; ?></option>

        <?php foreach ($getir as $list)  { ?>

        <option value="<?php echo $list->Personelid; ?>"><?php echo $list->isim; ?></option>

        <?php } ?>


    </select> <br>
    <label>TelefonNo = </label> <input type="text" name="TelefonNo" value="<?php echo $listele->TelefonNo; ?>"> <br><br>

    <input type="submit">

    
</form>



</body>
</html>