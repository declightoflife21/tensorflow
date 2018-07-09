<!DOCTYPE html>

<html>
<meta charset="utf-8"/>
<head>
    <title>PoseNet - Camera Feed Demo</title>
    <!-- style css -->
    <style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: black;
    }

    .footer-text {
        max-width: 600px;
        text-align: center;
        margin: auto;
    }

    @media only screen and (max-width: 600px) {
      .footer-text, .dg {
        display: none;
      }
    }

    #wrapper{
    width: 100%;
    max-width: 960px;
    margin: 0 auto;
    }

    #input{
      width: 30px;
    }
    </style>
    <!-- end style -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- wrapper -->
    <div id="wrapper" style="margin-top: 50px" style=" margin-bottom: 5px">

        <div id="loading">
        Loading the model...
    </div>
    <div id='main' style='display:none'>
      <!-- video -->
        <video id="video" playsinline style=" -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        display: none;
        ">
        </video>
        <canvas id="output"/>
    </div>
    <!-- end video -->

    <!-- button capture -->
    <button onclick="playVid()" type="button">Capture</button> Every
    <!-- end button capture -->
    <input id="input" type="text" name="label" placeholder="time" style=" margin-top: 5px"> Second <br>
    <input type="text" name="label" placeholder="Label" style=" margin-top: 5px"><br>
    <!-- button stop video -->
    <button onclick="pauseVid()" type="button" style="margin-top: 5px">Stop</button><br>
    <!-- end button stop video -->
</div>
    <!-- show table database -->
    <?php 
      include "koneksi.php"; 
      $sqli = $conn->query("SELECT * FROM tensor");
    ?>
    <!-- start table -->
      <table border=1 style=" margin-top: 5px">
        <!-- head table -->
        <thead>
          <tr>
            <th>ID</th>
            <th>Time</th>
            <th>Label</th>
            <th>Nose</th>
            <th>Left Eye</th>
            <th>Right Eye</th>
            <th>Left Ear</th>
            <th>Right Ear</th>
            <th>Left Shoulder</th>
            <th>Right Shoulder</th>
            <th>Left Elbow</th>
            <th>Right Elbow</th>
            <th>Left Wrist</th>
            <th>Right Wrist</th>
            <th>Left Hip</th>
            <th>Right Hip</th>
            <th>Left Knee</th>
            <th>Right Knee</th>
            <th>Left Ankle</th>
            <th>Right Ankle</th>
          </tr>
        </thead>
        <!-- end head table -->
        <!-- body table -->
        <tbody>
            <?php $id_tensor = 0; while($r=$sqli->fetch_assoc()){
            $id_tensor++;
            ?>
          <tr>
            <td><?php echo $id_tensor;?></td>
            <td><?php echo $r['time'];?></td>
            <td><?php echo $r['nama_label'];?></td>
            <td><?php echo $r['nose'];?></td>
            <td><?php echo $r['leftEye'];?></td>
            <td><?php echo $r['rightEye'];?></td>
            <td><?php echo $r['leftEar'];?></td>
            <td><?php echo $r['rightEar'];?></td>
            <td><?php echo $r['leftShoulder'];?></td>
            <td><?php echo $r['rightShoulder'];?></td>
            <td><?php echo $r['leftElbow'];?></td>
            <td><?php echo $r['rightElbow'];?></td>
            <td><?php echo $r['leftWrist'];?></td>
            <td><?php echo $r['rightWrist'];?></td>
            <td><?php echo $r['leftHip'];?></td>
            <td><?php echo $r['rightHip'];?></td>
            <td><?php echo $r['leftKnee'];?></td>
            <td><?php echo $r['rightKnee'];?></td>
            <td><?php echo $r['leftAnkle'];?></td>
            <td><?php echo $r['rightAnkle'];?></td>
            <?php } ?>
          </tr>
        </tbody>
        <!-- end body table -->
    </table>
    <!-- end table -->

    <script src="https://cdn.jsdelivr.net/npm/dat.gui@0.7.2/build/dat.gui.js"></script>
    <script src="https://unpkg.com/@tensorflow/tfjs"></script>
    <script src="https://unpkg.com/@tensorflow-models/posenet"></script>
    
    <script src="demo_util.js"></script>
    <script src="stats.min.js "></script>
    <script src="camera.js"></script>
</body>

<script>
    var imageScaleFactor = 0.5;
    var outputStride = 16;
    var flipHorizontal = false;

    var imageElement = document.getElementById('video');

    posenet.load().then(function(net){
      return net.estimateSinglePose(imageElement, imageScaleFactor, flipHorizontal, outputStride)
    }).then(function(pose){
      console.log(pose);
    })


  </script>

<!-- script play/stop video -->
    <script> 
      var vid = document.getElementById("video"); 

      function playVid() { 
      vid.play(); 
      } 

      function pauseVid() { 
      vid.pause(); 
    } 
    </script>
    <!-- end script play/stop video -->
</html>