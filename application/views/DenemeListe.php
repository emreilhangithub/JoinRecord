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

<!-- <?php echo "test"; ?> -->
<!-- <?php print_r($listele); ?> -->

 <a href="<?php echo base_url('DenemeCon/insertPage');?>"><?php echo "Yeni Ekle"; ?> </a>
<!-- echo demezsen base_url calısmıyor -->


<?php echo "<br> Toplam Kayıt Sayısı = ".$count."<br>"; ?>

<table border="1">

    <thead>
    <th>Telefonid</th>
    <th>Personelid</th>
    <th>TelefonNo</th>
    <th>İşlem</th>
    </thead>

    <tbody>
    <?php  foreach ($listele as $list) { ?>
    <tr>
        <td><?php echo $list->Telefonid; ?> </td>
        <td><?php echo $list->isim; ?> </td>
        <td><?php echo $list->TelefonNo; ?> </td>
        <td> <a href="<?php echo base_url("DenemeCon/updatePage/$list->Telefonid");?>"><?php echo "Düzenle"; ?></a> </td>
        <td> <a href="<?php echo base_url("DenemeCon/delete/$list->Telefonid");?>"><?php echo "Sil"; ?> </a> </td>
    </tr>
    <?php  } ?>

    </tbody>

</table>

</body>
</html>