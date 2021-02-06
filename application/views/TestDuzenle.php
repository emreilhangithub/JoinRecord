<!DOCTYPE html>
<html>
<head>
	<title>Test Duzenle</title>
</head>
<body>

<form action="<?php echo base_url("Test/update/$listele->Telefonid") ?>" method="post"> 

   <label> Kayıt Numarası Seçiniz </label>


   <select name="Personelid">
    
     <option value="<?php echo $listele->Personelid; ?>">
         <?php echo $listele->isim; ?>
         </option>
    
       <?php foreach ($select as $list) { ?>
      <option value="<?php echo $list->Personelid; ?>">
         <?php echo $list->isim; ?>
         </option>
      <?php } ?> 

   </select> <br>   

   

Telefon Numarası Giriniz =  <input type="text" name="TelefonNo" value=" <?php echo $listele->TelefonNo; ?>"> </br>
<input type="submit" value ="Kaydet"> 

</form>


</body>
</html>