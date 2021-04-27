<div class="work_sec work-scroll" id="scroll-section4">
   <div class="workCont">
     <h2>WORK</h2><br>
     <div class="work_line"></div>


   </div>
   <div class="workCont1">
     <div class="work_nav">
       <ul class="ul_1">
         <li id="wrk_all">ALL</li>
         <li id="wrk_port">PORTFOLIOS</li>
       </ul>
       <ul class="ul_2">
         <li id="wrk_func">FUNCTIONAL</li>
         <li id="wrk_oth">OTHERS</li>
       </ul>
     </div>
     <div class="myWorks_div" id="myWorks_div">

       <div id="wbg" class="wbg" onclick="dlgLogIn()"></div>
         <center>
            <div id="dlgbox" class="dlgbox">

            </div>
         </center>

       <div class="all_div work_ul_div" id="all_div">
         <h2>ALL</h2>
         <ul>
           <?php
           $sql = "SELECT * FROM portfolio_table ORDER BY port_id ASC";
           $res = mysqli_query($conn,$sql);
           $workRows = mysqli_num_rows($res);

           if(mysqli_num_rows($res) > 0){


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

                   <li id="work_img_li">
                     <div class="work_img_div" ontouchmove="closeFunc(<?php echo $port_id;?>);" onmouseout="leaveFunc(<?php echo $port_id;?>);" onmouseover="hoverFunc(<?php echo $port_id;?>);">
                       <center>
                         <div class="work_hover" onclick="closeFunc(<?php echo $port_id;?>);" id="work_hover<?php echo $port_id;?>">
                           <h3><?php echo $webName;?></h3>
                           <br><br><br>
                           <div class="see_more_div" id="showDialog<?php echo $port_id;?>" onclick="showDialog(<?php echo $port_id;?>);">
                             SEE MORE
                           </div>
                         </div>
                           <img src="work/<?php echo $coverPhoto;?>" onclick="clickFunc(<?php echo $port_id;?>);" id="work_img<?php echo $port_id;?>" class="work_img">
                       </center>
                     </div>
                   </li>

                   <?php
                 }

           }
           ?>

         </ul>
       </div>
       <div class="portfolio_div work_ul_div" id="portfolio_div">
         <h2>PORTFOLIO</h2>
         <ul>
           <?php
           $sql = "SELECT * FROM portfolio_table WHERE project_type = 'PORTFOLIO' ORDER BY port_id ASC";
           $res = mysqli_query($conn,$sql);
           $workRows = mysqli_num_rows($res);
           if(mysqli_num_rows($res) > 0){


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
                   <li id="work_img_li">
                     <div class="work_img_div" onmouseout="leaveFunc(<?php echo $port_id;?>);" onmouseover="hoverFunc(<?php echo $port_id;?>);">
                       <center>
                         <div class="work_hover" onclick="closeFunc(<?php echo $port_id;?>);" id="work_hover_1<?php echo $port_id;?>">
                           <h3><?php echo $webName;?></h3>
                           <br><br><br>
                           <div class="see_more_div" id="showDialog<?php echo $port_id;?>" onclick="showDialog(<?php echo $port_id;?>);">
                             SEE MORE
                           </div>
                         </div>
                           <img src="work/<?php echo $coverPhoto;?>" onclick="clickFunc(<?php echo $port_id;?>);" id="work_img_1<?php echo $port_id;?>" class="work_img">
                       </center>
                     </div>
                   </li>
                   <?php
                 }

           }
           ?>


         </ul>
       </div>
       <div class="functional_div work_ul_div" id="functional_div">
         <h2>FUNCTIONAL</h2>
         <ul>
           <?php
           $sql = "SELECT * FROM portfolio_table WHERE project_type = 'FUNCTIONAL' ORDER BY port_id ASC";
           $res = mysqli_query($conn,$sql);
           $workRows = mysqli_num_rows($res);
           if(mysqli_num_rows($res) > 0){


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
                   <li id="work_img_li">
                     <div class="work_img_div" onmouseout="leaveFunc(<?php echo $port_id;?>);" onmouseover="hoverFunc(<?php echo $port_id;?>);">
                       <center>
                         <div class="work_hover" onclick="closeFunc(<?php echo $port_id;?>);" id="work_hover_1<?php echo $port_id;?>">
                           <h3><?php echo $webName;?></h3>
                           <br><br><br>
                           <div class="see_more_div" id="showDialog<?php echo $port_id;?>" onclick="showDialog(<?php echo $port_id;?>);">
                             SEE MORE
                           </div>
                         </div>
                           <img src="work/<?php echo $coverPhoto;?>" onclick="clickFunc(<?php echo $port_id;?>);" id="work_img_1<?php echo $port_id;?>" class="work_img">
                       </center>
                     </div>
                   </li>
                   <?php
                 }

           }
           ?>

         </ul>
       </div>
       <div class="others_div" id="others_div">
         <h2>OTHERS</h2>
         <center>
         <div class="redirectDiv">
           <h3><i class="fa fa-folder-open fa-lg"></i> Other Works</h3>
           <input type="password" id="rdct_inp" maxlength="20">
           <button type="button" id="rdct_btn">SUBMIT</button><br>
           <span id="redrctError">
             This area is for admin only, please leave this area, Thankyou!
           </span>

         </div>
       </center>
       </div>
     </div>

   </div>


 </div>
