<?php  
 $connect = mysqli_connect("localhost", "root", "", "db_kp");
 if(isset($_POST["id_tensor"]) && isset($_POST["time"]) && isset($_POST["nama_label"]) && isset($_POST["nose"]) && isset($_POST["leftEye"]) && isset($_POST["rightEye"]) && isset($_POST["leftEar"]) && isset($_POST["rightEar"]) && isset($_POST["leftShoulder"]) && isset($_POST["rightShoulder"]) && isset($_POST["leftElbow"]) && isset($_POST["rightElbow"]) && isset($_POST["leftWrist"]) && isset($_POST["rightWrist"]) && isset($_POST["leftHip"]) && isset($_POST["rightHip"]) && isset($_POST["leftKnee"]) && isset($_POST["rightKnee"]) && isset($_POST["leftAnkle"]) && isset($_POST["rightAnkle"]))
 {
    $id_tensor = mysqli_real_escape_string($connect, $_POST["id_tensor"]);
    $time = mysqli_real_escape_string($connect, $_POST["time"]);
    $nama_label = mysqli_real_escape_string($connect, $_POST["nama_label"]);
    $nose = mysqli_real_escape_string($connect, $_POST["nose"]);
    $leftEye = mysqli_real_escape_string($connect, $_POST["leftEye"]);
    $rightEye = mysqli_real_escape_string($connect, $_POST["rightEye"]);
    $leftEar = mysqli_real_escape_string($connect, $_POST["leftEar"]);
    $rightEar = mysqli_real_escape_string($connect, $_POST["rightEar"]);
    $leftShoulder = mysqli_real_escape_string($connect, $_POST["leftShoulder"]);
    $rightShoulder = mysqli_real_escape_string($connect, $_POST["rightShoulder"]);
    $leftElbow = mysqli_real_escape_string($connect, $_POST["leftElbow"]);
    $rightElbow = mysqli_real_escape_string($connect, $_POST["rightElbow"]);
    $leftWrist = mysqli_real_escape_string($connect, $_POST["leftWrist"]);
    $rightWrist = mysqli_real_escape_string($connect, $_POST["rightWrist"]);
    $leftHip = mysqli_real_escape_string($connect, $_POST["leftHip"]);
    $rightHip = mysqli_real_escape_string($connect, $_POST["rightHip"]);
    $leftKnee = mysqli_real_escape_string($connect, $_POST["leftKnee"]);
    $rightKnee = mysqli_real_escape_string($connect, $_POST["rightKnee"]);
    $leftAnkle = mysqli_real_escape_string($connect, $_POST["leftAnkle"]);
    $rightAnkle = mysqli_real_escape_string($connect, $_POST["rightAnkle"]);
  if($_POST["id_tensor"] != '')  
  {  
    //update post  
    $sql = "UPDATE tensor SET id_tensor = '".$id_tensor."', time = '".$time."', nama_label = '".$nama_label."', nose = '".$nose."', leftEye = '".$leftEye."', rightEye = '".$rightEye."', leftEar = '".$leftEar."', rightEar = '".$rightEar."', leftShoulder = '".$leftShoulder."', rightShoulder = '".$rightShoulder."', leftElbow = '".$leftElbow."', rightElbow = '".$rightElbow."', leftWrist = '".$leftWrist."', rightWrist = '".$time."', leftHip = '".$leftHip."', rightHip = '".$rightHip."', leftKnee = '".$leftKnee."', rightKnee = '".$rightKnee."', leftAnkle = '".$leftAnkle."', rightAnkle = '".$rightAnkle."' WHERE id_tensor = '".$_POST["id_tensor"]."'";  
    mysqli_query($connect, $sql);  
  }  
  else  
  {  
    //insert post  
    $sql = "INSERT INTO tensor (id_tensor, time, nama_label, nose, leftEye, rightEye, leftEar, rightEar, leftShoulder, rightShoulder, leftElbow, rightElbow , leftWrist, rightWrist, leftHip, rightHip, leftKnee, rightKnee, leftAnkle, rightAnkle) VALUES ('".$id_tensor."', '".$time."', '".$nama_label."', '".$nose."', '".$leftEye."', '".$rightEye."', '".$leftEar."', '".$rightEar."', '".$leftShoulder."', '".$rightShoulder."', '".$leftElbow."', '".$rightElbow."', '".$leftWrist."', '".$rightWrist."', '".$leftHip."', '".$rightHip."', '".$leftKnee."', '".$rightKnee."', '".$leftAnkle."', '".$rightAnkle."')";  
    mysqli_query($connect, $sql);  
    echo mysqli_insert_id($connect);  
  }
 }  
 ?>


