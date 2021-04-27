<?php
 $query = "SELECT * FROM message_table";
 $res = mysqli_query($conn,$query);
 $msg_num = mysqli_num_rows($res);
?>
<div class="msg_div">
  <center>
  <div class="msg_head">
    <h1>Inquiries</h1><br><br><br><br>
    <span>Messages: <?php echo $msg_num;?></span>
  </div>
  <div class="inbox_div" id="inbox_div">

  </div>
  </center>

</div>
