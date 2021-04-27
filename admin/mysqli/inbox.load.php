<?php
include("mysqli_connect.php");
$query = "SELECT * FROM message_table WHERE status = 1 ORDER BY Msg_id desc";
$query1 = "SELECT * FROM message_table WHERE status = 0 ORDER BY Msg_id asc";
$res = mysqli_query($conn,$query);
$res1 = mysqli_query($conn,$query1);
if(mysqli_num_rows($res) > 0){
  while($rows = mysqli_fetch_assoc($res)){
    $status = $rows['Status'];
    $stat1 = "Read";
    $stat2 = "Unread";
    $msg_id = $rows['Msg_id'];
    if($status == 1){
      echo "<a href='read.php?msg_id=".$msg_id."'><div class='unread_div'>";
      echo "<h3>";
      echo ucwords($rows['Email_name']);
      echo "</h3>";
      echo "<span style='float:right' class='status'><i class='fa fa-eye-slash'></i> ".$stat2."</span>";
      echo "<span>";
      echo ucwords($rows['Email']);
      echo "</span><br>";
      echo "<p>";
      echo substr($rows['Email_text'],0,15);
      echo "</p><br>";
      echo "</div></a>";
    }

  }
}if(mysqli_num_rows($res1) > 0){
  while($rows = mysqli_fetch_assoc($res1)){
    $status = $rows['Status'];
    $stat1 = "Read";
    $stat2 = "Unread";
    $msg_id = $rows['Msg_id'];

    echo "<a href='read.php?msg_id=".$msg_id."'><div class='unread_div read_div'>";
    echo "<h3>";
    echo ucwords($rows['Email_name']);
    echo "</h3>";
    echo "<span style='float:right' class='status'><i class='fa fa-eye'></i> ".$stat1."</span>";
    echo "<span>";
    echo ucwords($rows['Email']);
    echo "</span><br>";
    echo "<p>";
    echo substr($rows['Email_text'],0,15);
    echo "</p><br>";
    echo "</div></a>";

  }

}else{
  echo "<br><br><br><span class='msg_span'>There's no messages</span>";
}

?>
