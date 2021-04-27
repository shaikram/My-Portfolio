<?php
    include("mysqli_connect.php");

    if(isset($_POST['port_done'])){
      $port_id = $_POST['port_id'];
      $sql = "SELECT * FROM portfolio_table WHERE port_id=$port_id";
      $res = mysqli_query($conn,$sql);

      while($row = mysqli_fetch_assoc($res)){
        $webName = ucwords($row['website_name']);
        $webURL = $row['website_url'];
        $systemKind = ucwords($row['system_kind']);
        $type = $row['project_type'];
        $description = $row['description'];
        $coverPhoto = $row['cover_photo'];
        $photo1 = $row['photo_1'];
        $photo2 = $row['photo_2'];
        $photo3 = $row['photo_3'];
        $photo4 = $row['photo_4'];
        $port_id = $row['port_id'];


        ?>
        <div class="pic_frame">

          <img src="work/<?php echo $coverPhoto;?>" class="pt_images">
          <div class="divBtn">
            <div class="btnLeft" onclick="prev()">
              <i class="fa fa-angle-double-left fa-2x"></i>
            </div>
            <div class="btnRight" onclick="next()">
              <i class="fa fa-angle-double-right fa-2x"></i>
            </div>
          </div>
        </div>

        <div class="descDiv">
          <div class="ptd1">
            <h1><?php echo $webName;?></h1>
            <h3><?php echo $systemKind;?></h3>
          </div>
          <div class="ptd2">
            <p>
              <?php echo $description;?>
            </p>
          </div>
          <div class="ptd3">
            <a href="<?php echo $webURL;?>">
              <div class="dsite">
                <i class="fa fa-location-arrow"></i> &nbsp;&nbsp;VIEW SITE
              </div>
            </a>
            <div class="cls2" onclick="dlgLogIn()">
              <i class="fa fa-times fa-3x"></i>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          var slider_img = document.querySelector('.pt_images');
          var images = ['<?php echo $coverPhoto;?>', '<?php echo $photo1;?>', '<?php echo $photo2;?>', '<?php echo $photo3;?>', '<?php echo $photo4;?>'];
          var i = 0;

          function prev(){
            if(i <= 0)
              i = images.length;
              i--;
              return setImage();


          }
          function next(){
            if(i >= images.length - 1)
              i = -1;
              i++;
              return setImage();

          }
          function setImage(){
            return slider_img.setAttribute('src','work/' + images[i]);
            //alert(i);
          }

        </script>
        <?php
      }

    }
?>
