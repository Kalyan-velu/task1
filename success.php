<?php

require_once 'db/conn.php';

if (isset($_POST["submit"]) && isset($_FILES["file"])) {

   $img_name = $_FILES["file"]["tmp_name"];
   $img_size = $_FILES['file']['size'];
   $tmp_name = $_FILES["file"]["tmp_name"];
   $error = $_FILES["file"]["error"];

   if ($error == 0) {
      if ($img_size > 5000000) {
         $em = "Sorry, your file is too large. .$img_size.";
         header("Location: form.php?error=$em");
      } else {
         try {
            //code...
            $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ext_lc = strtolower($img_ext);
            $allowed_ext = array("jpg", "jpeg", "png");

            $new_img_name = uniqid("IMG-", true) . '.' . $img_ext_lc;
            $img_upload_path = 'uploads/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            $textinput = $_POST["textinput"];
            $numberinput = $_POST["numberinput"];
            $remarks = $_POST["remarks"];

            $result = $crud->insert($textinput, $numberinput, $img_upload_path, $remarks);

            if ($result) {
               echo "Success";
               header("Location: alerts.php");
               echo $img_name;
            } else {
               echo "Error";
               header("Location: alerte.php");
            }
         } catch (\Throwable $th) {
            echo $th;
            throw $th;
         }
      }
   } else {
      echo "Error";
   }
}
