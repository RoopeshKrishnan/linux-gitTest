<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Select Country</h1>
    </div>
    <section id="form">
      <select id="country_select">
        <option disabled selected>choose country</option>

        <?php 

         foreach($all_country as $row){

            $country_id = $row->country_id;
            $country = $row->country;

         ?>

             <option value="<?php echo $country_id ?>"><?php echo $country ?></option>
    
         
         <?php
         }

        ?>
     

      </select>

    </section>


</body>
</html>

<script>
  var country_select = document.getElementById("country_select");
  country_select.addEventListener("change",getCountryid);



  function getCountryid(){

    var country_select = document.getElementById("country_select");

    var country_id = country_select.options[country_select.selectedIndex].value;

    console.log('country_id :' + country_id);





            var xhr = new XMLHttpRequest();

        var url = '<?php echo base_url()?>controller/get_state';

        xhr.open('POST',url , true);
        xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");


        xhr.onreadystatechange = function(){

          if(xhr.readyState == 4 && xhr.status == 200){

                      
              var text= xhr.responseText;

              console.log(text);

              var ajaxResult = document.getElementById("ajax-result");

              ajaxResult.innerHTML = text;

          }
        }


        xhr.send('country_id='+country_id);






  }
  
</script>