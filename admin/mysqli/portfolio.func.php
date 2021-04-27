<?php
include("mysqli_connect.php");
//upload.php
if(!empty($_FILES)){
 if(is_uploaded_file($_FILES['uploadFile']['tmp_name'])){
  sleep(1);
  $coverphoto = mysqli_real_escape_string($conn,stripslashes(htmlentities($_FILES['uploadFile']['name'])));
  $source_path = $_FILES['uploadFile']['tmp_name'];
  $target_path = '../../work/'.$coverphoto ;
  if(move_uploaded_file($source_path, $target_path))
  {
    $webName = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['webName'])));
    $webURL = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['webURL'])));
    $systemKind = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['systemKind'])));
    $section = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['section'])));
    $description = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['description'])));

    $photo1 = mysqli_real_escape_string($conn,stripslashes(htmlentities($_FILES['uploadFile1']['name'])));
    $photo2 = mysqli_real_escape_string($conn,stripslashes(htmlentities($_FILES['uploadFile2']['name'])));
    $photo3 = mysqli_real_escape_string($conn,stripslashes(htmlentities($_FILES['uploadFile3']['name'])));
    $photo4 = mysqli_real_escape_string($conn,stripslashes(htmlentities($_FILES['uploadFile4']['name'])));

    $source_path1 = $_FILES['uploadFile1']['tmp_name'];
    $source_path2 = $_FILES['uploadFile2']['tmp_name'];
    $source_path3 = $_FILES['uploadFile3']['tmp_name'];
    $source_path4 = $_FILES['uploadFile4']['tmp_name'];

    $target_path1 = '../../work/'.$photo1 ;
    $target_path2 = '../../work/'.$photo2 ;
    $target_path3 = '../../work/'.$photo3 ;
    $target_path4 = '../../work/'.$photo4 ;

    $sql = "INSERT INTO portfolio_table(website_name, website_url, system_kind, project_type, description, cover_photo, photo_1, photo_2, photo_3, photo_4) VALUES('$webName','$webURL','$systemKind','$section','$description','$coverphoto','$photo1','$photo2','$photo3','$photo4')";

    move_uploaded_file($source_path1, $target_path1);
    move_uploaded_file($source_path2, $target_path2);
    move_uploaded_file($source_path3, $target_path3);
    move_uploaded_file($source_path4, $target_path4);
    mysqli_query($conn,$sql);
   //echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
  }
 }
}
/*if(isset($_POST['port_btn'])){
  $cover = $_FILES['cover_img']['name'];
  $location = '../../work/'.$cover;
  $fileType = strtolower(pathinfo($location,PATHINFO_EXTENSION));
  $valid_ext = array('jpg','jpeg','png');

  if(!in_array($fileType,$valid_ext)){
    echo "Invalid";
  }else{
    if(move_uploaded_file($_FILES['cover_img']['tmp_name'],$location)){
      echo "great";
    }
  }

}
*/
?>
