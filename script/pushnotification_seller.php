<?php
include('connection.php');

session_start();
$uid_seller = $_SESSION['uid'];

if(isset($_POST['view'])){

$query = "SELECT * FROM `quotation` where uid_seller ='$uid_seller' ORDER BY id";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["name"].'</strong><br />
   <small><em>'.$row["message"].'</em></small>
   </a>
   </li>
   ';

 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No quotation Found</a></li>';
}



$status_query = "SELECT * FROM `notifyseller` WHERE seen = 0 and uid_seller = '$uid_seller'";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}
if($_POST["view"] != '')
{
    $update_query = "UPDATE `notifyseller` SET seen = 1 WHERE seen ='0' and uid_seller ='$uid_seller'";
    mysqli_query($con, $update_query);
}

?>