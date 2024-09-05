<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(isset($_POST['submit']) and !empty($_POST)){
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $email = $_POST['email'];

    $pic_aar = $_FILES['file'];
    $pic_name = $pic_aar['name'];
    $pic_name_info = pathinfo($pic_name);
    $file_name = $pic_name_info['filename'];
    $file_extension = $pic_name_info['extension'];
    $file_real_name = $file_name.'_'.time().'.'.$file_extension;
    
    $pic_type = $pic_aar['type'];
    $pic_tmp_name = $pic_aar['tmp_name'];
   
    $pic_error = $pic_aar['error'];
    $pic_size = floor($pic_aar['size']/1024);

    $allowed_type =array('image/jpeg','image/png','image/jpg');
 
     $query = "SELECT * FROM user WHERE email = '$email'";
     $fetch_data = mysqli_query($conn,$query);
     $data = mysqli_fetch_array($fetch_data);

     $insert_query = "INSERT INTO USER(name,email,mobile,password,image) VALUES( '$name','$email',' $mobile','$password','$file_real_name')";

    //  if (preg_match('/^(?=.*[a-zA-Z])(?=.*\d)(?=.*    [@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}$/', $password)) {

    //  }


     if(!$data){   
        if(preg_match("/[6|7|8|9]{1}[0-9]{9}/",$mobile)){
            if(in_array($pic_type,$allowed_type)){
                if($pic_size>=5 and $pic_size<=2000){
                  if($pic_error===0){
                      if(move_uploaded_file($pic_tmp_name ,"uploads/$file_real_name")){
                        if(mysqli_query($conn,$insert_query)){
                          echo '<script> 
                          alert("Registered Successfully") ;
                          </script>';
                          header("location:login.php");
                          exit;
                        }else{
                          header("location:registation.php");
                      exit;
                        }
                      }
                    }else{
                      header("location:registation.php");
                      exit;
                      }

                    }else{
                      header("location:registation.php");
                      exit;
                    }

                  }
          
          }else{
         
            header("location:registation.php");
          exit;
        }
    }
     else{

      header("location:registation.php");
      exit;
     }  


  }
}

?>