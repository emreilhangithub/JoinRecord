<!DOCTYPE html>
<html>
<head>
	<title>Test Ekle</title>
</head>
<body>

<!-- <?php echo"test"; ?> -->

<!-- <?php print_r($listele); ?>  -->



<form action="<?php echo base_url(); ?>Test/insert" method="post">

   <label> Kayıt Numarası </label>


   <select name="Personelid">
      <!-- denemek için select verdik  -->
      <?php foreach ($listele as $list) { ?>
      <option value="<?php echo $list->Personelid; ?>">
         <?php echo $list->isim; ?>
         </option>
      <?php } ?>
   </select> <br> 





   

Telefon Numarası Giriniz =  <input type="text" name="TelefonNo"> </br>
<input type="submit" value ="Kaydet"> 

</form>

</body>
</html>