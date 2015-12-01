<?php
			 require_once('mysql_connect.php');

			 //Time

		 $head_info = $_POST['time'];
		 if(!empty($head_info)){
		 $id = 1;
		 $query = "UPDATE general SET head_info = '$head_info' WHERE id='$id'"  ;


   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }


            //Phone

               $phoneone = $_POST['phoneone'];
                 if(!empty($phoneone)){
		 $id = 1;
		 $query = "UPDATE general SET phoneone = '$phoneone' WHERE id='$id'"  ;


   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }
                $phonetwo = $_POST['phonetwo'];
             if(!empty($phonetwo)){
		 $id = 1;
		 $query = "UPDATE general SET phonetwo = '$phonetwo' WHERE id='$id'"  ;


   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }

                  $slogan = $_POST['slogan'];
             if(!empty($slogan )){
		 $id = 1;
		 $query = "UPDATE general SET slidename = '$slogan' WHERE id='$id'"  ;


   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }

                  $desc = $_POST['desc'];
             if(!empty($desc)){
		 $id = 1;
		 $query = "UPDATE general SET slidedescription = '$desc' WHERE id='$id'"  ;


   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }

                  $contact_we = $_POST['contact_we'];
             if(!empty($contact_we)){
				$escaped_item = mysqli_real_escape_string($link,$contact_we);
		 $id = 1;
		 $query = "UPDATE general SET contact = \"$escaped_item\" WHERE id='$id'"  ;


   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }

               $contactfoot = $_POST['contactfoot'];
             if(!empty($contactfoot)){
		 $id = 1;
		 $query = "UPDATE general SET contactfoot = '$contactfoot' WHERE id='$id'"  ;


   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }

           // Перевірка чи файл прийшов
			if( !empty( $_FILES["filename"]) & !empty($_POST["number"])) {
			$num = $_POST["number"];
   			if($_FILES["filename"]["size"] > 1024*3*1024)
  			 {
   			  echo ("Размер файла превышает три мегабайта");
  			   exit;
  			 }
  			 // Перевіряємо чи завантажений файл
  			 if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
  			 {
  			   // Если файл загружен успешно, перемещаем его
   			  // из временной директории в конечную    rename("/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
  			   move_uploaded_file($_FILES["filename"]["tmp_name"], "../img/slider/" .$num. ".jpg");

  			 } else {
   			   echo("Ошибка загрузки файла");
  			 }

				}

				    $addcom = $_POST['addcom'];
             if(!empty($addcom)){
				 $id = $addcom;

		      $query = "SELECT name, comment FROM feedback WHERE id='$id' ";
		      $result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysqli_error());
		         while ($line = mysqli_fetch_assoc($result))  {
		      $name = $line[name];
		      $comment = $line[comment];
                            }
		 	  $querytwo = "INSERT INTO feedbackview SET namev = '$name', commentv = '$comment' ";
		 	  $resulttwo = mysqli_query($link, $querytwo) or die('Запит не вдався: ' . mysqli_error());

		 	  $querytree = "DELETE FROM feedback WHERE id='$id' ";
		 	  $resulttree = mysqli_query($link,$querytree) or die('Запит не вдався: ' . mysqli_error());

            }

                $delcom = $_POST['delcom'];
             if(!empty($delcom)){
				 $id = $delcom;

		 	  $querytree = "DELETE FROM feedback WHERE id='$id' ";
		 	  $resulttree = mysqli_query($link, $querytree) or die('Запит не вдався: ' . mysqli_error());

            }

              ///////////Товари памперси///////////////
            $id_prod = $_POST['id_pam'];
             if(!empty($id_prod) or !empty($_POST['name_pam'])){
             $path = "img/screenshots/pampers/".$_POST['path_pam'];
             $name = $_POST['name_pam'];
             $price = "Ціна - ".$_POST['price_pam']." грн";
             $availability = $_POST['ava_pam'];
             $description = $_POST['desc_pam'];

         if(isset($_POST['edit_pam'])){
 				$query_edit = "UPDATE product SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_prod'";

     			if(!empty($query_edit) and $result == mysqli_query($link, $query_edit)) {

               		 echo  "Готово!!! Перезаписано!";


         		 } else {

                $status = "Виниклапомилка. Інформація не була записана.";



         		   }
      }

		if(isset($_POST['add_pam'])){
             $query_add = "INSERT INTO product (path, name, price, availability, Description) VALUES ('$path', '$name', '$price', '$availability', '$description')";
              if(!empty($query_add) and $result == mysqli_query($link, $query_add)) {

                echo  "Готово!!! Перезаписано!";

           			 } else {

                $status = "Виниклапомилка. Інформація не була записана.";



         		   }
         		   }




         		   }




                      $del_pam = $_POST['del_pampers'];
 		if(!empty($del_pam)){

 			 $query_del = "DELETE FROM product WHERE id = '$del_pam' ";
 			if(!empty($query_del) and $result == mysqli_query($link, $query_del)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }

            ///////////Товари ///////////////



                $id_crockery = $_POST['id_crockery'];

             if(!empty($id_crockery)){

             $path = "img/screenshots/wash_crockery/".$_POST['path_pam'];

             $name = $_POST['name_crockery'];

             $price = "Ціна - ".$_POST['price_crockery']." грн";

             $availability = $_POST['ava_crockery'];

             $description = $_POST['desc_crockery'];



         if(isset($_POST['edit_crockery'])){

 $query = "UPDATE wash_crockery SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_crockery'";

              }



		if(isset($_POST['add_crockery'])){

 $query = "INSERT INTO wash_crockery SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_crockery = $_POST['del_crockery'];

 		if(!empty($del_crockery)){



 			 $query = "DELETE FROM wash_crockery WHERE id = '$del_crockery' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



             ///////////Зубна паста///////////////



                $id_ties_past = $_POST['id_ties_past'];

             if(!empty($id_ties_past)){

             $path = "img/screenshots/ties_past/".$_POST['path_ties_past'];

             $name = $_POST['name_ties_past'];

             $price = "Ціна - ".$_POST['price_ties_past']." грн";

             $availability = $_POST['ava_ties_past'];

             $description = $_POST['desc_ties_past'];



         if(isset($_POST['edit_ties_past'])){

 $query = "UPDATE ties_past SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_ties_past'";

              }



		if(isset($_POST['add_ties_past'])){

 $query = "INSERT INTO ties_past SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_ties_past = $_POST['del_ties_past'];

 		if(!empty($del_ties_past)){



 			 $query = "DELETE FROM ties_past WHERE id = '$del_ties_past' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }





             ///////////Миючі засоби//////////////



                $id_wash_items = $_POST['id_wash_items'];

             if(!empty($id_wash_items)){

             $path = "img/screenshots/wash_items/".$_POST['path_wash_items'];

             $name = $_POST['name_wash_items'];

             $price = "Ціна - ".$_POST['price_wash_items']." грн";

             $availability = $_POST['ava_wash_items'];

             $description = $_POST['desc_wash_items'];



         if(isset($_POST['edit_wash_items'])){

 $query = "UPDATE wash_items SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_wash_items'";

              }



		if(isset($_POST['add_wash_items'])){

 $query = "INSERT INTO wash_items SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_wash_items = $_POST['del_wash_items'];

 		if(!empty($del_wash_items)){



 			 $query = "DELETE FROM wash_items WHERE id = '$del_wash_items' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }

                 ///////////Прокладки//////////////



                $id_tampon = $_POST['id_tampon'];

             if(!empty($id_tampon)){

             $path = "img/screenshots/tampon/".$_POST['path_tampon'];

             $name = $_POST['name_tampon'];

             $price = "Ціна - ".$_POST['price_tampon']." грн";

             $availability = $_POST['ava_tampon'];

             $description = $_POST['desc_tampon'];



         if(isset($_POST['edit_tampon'])){

 $query = "UPDATE tampon SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_tampon'";

              }



		if(isset($_POST['add_tampon'])){

 $query = "INSERT INTO tampon SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_tampon = $_POST['del_tampon'];

 		if(!empty($del_tampon)){



 			 $query = "DELETE FROM tampon WHERE id = '$del_tampon' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



               ///////////Серветки//////////////



                $id_servetca = $_POST['id_servetca'];

             if(!empty($id_servetca)){

             $path = "img/screenshots/servetca/".$_POST['path_servetca'];

             $name = $_POST['name_servetca'];

             $price = "Ціна - ".$_POST['price_servetca']." грн";

             $availability = $_POST['ava_servetca'];

             $description = $_POST['desc_servetca'];



         if(isset($_POST['edit_servetca'])){

 $query = "UPDATE servetca SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_servetca'";

              }



		if(isset($_POST['add_servetca'])){

 $query = "INSERT INTO servetca SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_servetca = $_POST['del_servetca'];

 		if(!empty($del_servetca)){



 			 $query = "DELETE FROM servetca WHERE id = '$del_servetca' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }





               ///////////Капусули//////////////



                $id_wash_powder = $_POST['id_wash_powder'];

             if(!empty($id_wash_powder)){

             $path = "img/screenshots/wash_powder/".$_POST['path_wash_powder'];

             $name = $_POST['name_wash_powder'];

             $price = "Ціна - ".$_POST['price_wash_powder']." грн";

             $availability = $_POST['ava_wash_powder'];

             $description = $_POST['desc_wash_powder'];



         if(isset($_POST['edit_wash_powder'])){

 $query = "UPDATE wash_powder SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_wash_powder'";

              }



		if(isset($_POST['add_wash_powder'])){

 $query = "INSERT INTO wash_powder SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_wash_powder = $_POST['del_wash_powder'];

 		if(!empty($del_wash_powder)){



 			 $query = "DELETE FROM wash_powder WHERE id = '$del_wash_powder' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



             ///////////Порошок//////////////



                $id_powder = $_POST['id_powder'];

             if(!empty($id_powder)){

             $path = "img/screenshots/powder/".$_POST['path_powder'];

             $name = $_POST['name_powder'];

             $price = "Ціна - ".$_POST['price_powder']." грн";

             $availability = $_POST['ava_powder'];

             $description = $_POST['desc_powder'];



         if(isset($_POST['edit_powder'])){

 $query = "UPDATE powder SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_powder'";

              }



		if(isset($_POST['add_powder'])){

 $query = "INSERT INTO powder SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_powder = $_POST['del_powder'];

 		if(!empty($del_powder)){



 			 $query = "DELETE FROM powder WHERE id = '$del_powder' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



               ///////////Шампуні//////////////



                $id_head_clean = $_POST['id_head_clean'];

             if(!empty($id_head_clean)){

             $path = "img/screenshots/head_clean/".$_POST['path_head_clean'];

             $name = $_POST['name_head_clean'];

             $price = "Ціна - ".$_POST['price_head_clean']." грн";

             $availability = $_POST['ava_head_clean'];

             $description = $_POST['desc_head_clean'];



         if(isset($_POST['edit_head_clean'])){

 $query = "UPDATE head_clean SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_head_clean'";

              }



		if(isset($_POST['add_head_clean'])){

 $query = "INSERT INTO head_clean SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_head_clean = $_POST['del_head_clean'];

 		if(!empty($del_head_clean)){



 			 $query = "DELETE FROM head_clean WHERE id = '$del_head_clean' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



              ///////////Туалетний папір//////////////



                $id_ws = $_POST['id_ws'];

             if(!empty($id_ws)){

             $path = "img/screenshots/ws/".$_POST['path_ws'];

             $name = $_POST['name_ws'];

             $price = "Ціна - ".$_POST['price_ws']." грн";

             $availability = $_POST['ava_ws'];

             $description = $_POST['desc_ws'];



         if(isset($_POST['edit_ws'])){

 $query = "UPDATE ws SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_ws'";

              }



		if(isset($_POST['add_ws'])){

 $query = "INSERT INTO ws SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_ws = $_POST['del_ws'];

 		if(!empty($del_ws)){



 			 $query = "DELETE FROM ws WHERE id = '$del_ws' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



              ///////////Освіжувачі повітря//////////////



                $id_clean_gas = $_POST['id_clean_gas'];

             if(!empty($id_clean_gas)){

             $path = "img/screenshots/clean_gas/".$_POST['path_clean_gas'];

             $name = $_POST['name_clean_gas'];

             $price = "Ціна ".$_POST['price_clean_gas']." грн";

             $availability = $_POST['ava_clean_gas'];

             $description = $_POST['desc_clean_gas'];



         if(isset($_POST['edit_clean_gas'])){

 $query = "UPDATE clean_gas SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description'  WHERE id='$id_clean_gas'";

              }



		if(isset($_POST['add_clean_gas'])){

 $query = "INSERT INTO clean_gas SET path = '$path', name = '$name', price = '$price', availability = '$availability', Description = '$description' ";

              }



   		if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }



                      $del_clean_gas = $_POST['del_clean_gas'];

 		if(!empty($del_clean_gas)){



 			 $query = "DELETE FROM clean_gas WHERE id = '$del_clean_gas' ";





 			if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

            }





  ///////////Категорії//////////////

                $id_num_cat = $_POST['num_cat'];
             if(!empty($id_num_cat)){             	 if(!empty($_POST['name_cat']) && $_POST['name_cat']!= 'Введіть: ім\'я'){
            $name = $_POST['name_cat'];
				$query = "UPDATE category SET name = '$name' WHERE id='$id_num_cat'";
				}
				 if(!empty($_POST['desc_cat']) && $_POST['desc_cat']!= 'Введіть: короткий опис'){
				$descript = $_POST['desc_cat'];
				$queryone = "UPDATE category SET descript = '$descript'  WHERE id='$id_num_cat'";
				}



   		if($result == mysqli_query($link, $query)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";


            }

            if($resultone == mysqli_query($link, $queryone)) {
                echo  "Готово!!! Перезаписано!";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }


            ///////////// log pass//////////////

             	 if(!empty($_POST['name_adm']) && $_POST['name_adm']!= 'Введіть: LOGIN'){
            		$name = $_POST['name_adm'];
				$query = "UPDATE admin SET name_admin = '$name' WHERE id='1'";

				if($result == mysqli_query($link, $query)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";





            }
				}
				 if(!empty($_POST['pass_adm']) && $_POST['pass_adm']!= 'Введіть: PASSWORD'){
				$pass = md5($_POST['pass_adm']);
				$queryone = "UPDATE admin SET password = '$pass'  WHERE id='1'";

				 if($resultone == mysqli_query($link, $queryone)) {

                echo  "Готово!!! Перезаписано!";

            } else {

                $status = "Виниклапомилка. Інформація не була записана.";



            }

				}




















 ?>

             <script language="JavaScript">
 window.location.href = "http://podguzniko.com.ua/admin/admin.php"
</script>