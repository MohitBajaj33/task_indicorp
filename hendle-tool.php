<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(isset($_POST['submit']) and !empty($_POST)){
    $tool = $_POST["title_tool"];
    $category =  $_POST['select-tool'];
    $qty = $_POST['qty'];
    
  
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

 

     $insert_query = "INSERT INTO tool(tool_category,image,title,qty) VALUES( '$category','$file_real_name','$tool', $qty)";



      if($pic_size>=1 and $pic_size<=2000){
          if($pic_error===0){
            if(move_uploaded_file($pic_tmp_name ,"tool_image/$file_real_name")){
                if(mysqli_query($conn,$insert_query)){
                    echo '<script> 
                      alert("Add Successfully") ;
                      </script>';
                      header("location:add-tool.php");
                      exit;
                }else{
                  echo '<script> 
                     alert("Not Add tool");
                     </script>';
                      header("location:add-tool.php");
                      exit;
                    }
              }
          }else{
            echo 'error2';
            exit;
            header("location:add-tool.php");
            exit;
          }
        }else{
          echo '<script> 
              alert("image size min=5kb and max= 500kb");
              </script>';
          exit;
          header("location:add-tool.php");
          exit;
        }
  }
}

?>