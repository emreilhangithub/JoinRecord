<!DOCTYPE html>
<html>
<head>

    <title>Time right now is: </title>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script>   console.log("Hello World"); </script>
</head>
<body>

<div id="app">
    <p> {{ title }} </p>
   <!--  <p> {{test()}} </p> -->
    <button v-on:click="showAlert">  {{goster}}  </button>
    <p> {{tiklandi}} {{puan}}</p>
</div>

<script type="text/javascript">

    new Vue({
        el : "#app",
        data : {
            title:"Vuejs de Saat Kaç ?  ",
            kac:"Saat = ",
            goster:"Saati Göster",
            tiklandi:"Kaç kere tıklandı = ",
            puan : 0
        },
        methods : {
            test : function ()
            {
                this.puan++;
                console.log("Kaç kere tıklandı"+this.puan);
                //localStorage.setItem("lastname", "Smith");
                var suan = 13;
                var time = new Date();
                //sessionStorage.removeItem('key');
                //sessionStorage.setItem('key', 'value');
                //localStorage.setItem('key', 'value');
                var test = time.getHours()+ ":" + time.getMinutes() + ":" +  time.getSeconds() ;
                //return time.getHours()+ ":" + time.getMinutes() + ":" +  time.getSeconds() ;
                if(this.puan==10)
                {
                    console.log("Kazandinız");
                }
                if (time.getHours()<suan)
                {
                    //return time.getHours()+ ":" + time.getMinutes() + ":" +  time.getSeconds() + " Saat 13 den küçük" ;
                    return this.kac+ test + " \n  Saat 13 den küçük" ;
                }
                else if (time.getHours()==suan)
                {
                    return this.kac+test + " \n  Şaat 13 eşit";
                }
                else {
                    return  this.kac+test + " \n Saaten 13 den büyük";
                }
                //time.getSeconds();
                //console.log(time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds());
            },
            showAlert : function(){
                alert(this.test());
            }

        }
    });

</script>

<!-- <?php  print_r($json1); ?> -->



<table border="1">

    <thead>
    <th> userId </th>
    <th> id </th>
    <th> title </th>
    <th> body </th>
    </thead>

    <tbody>
    <?php foreach ($json1 as $list) { ?>
        <tr>
       <td> <?php  echo $list['userId']; ?> </td>
        <td>  <?php  echo $list['id']; ?> </td>
        <td>  <?php  echo $list['title']; ?> </td>
        <td>  <?php  echo $list['body']; ?> </td>
        <?php echo "<br>"; ?>
        </tr>
    <?php } ?>

    </tbody>


</table>



</body>
</html>