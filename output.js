    	var imageScaleFactor = 0.5;
    	var outputStride = 16;
    	var flipHorizontal = false;

	    var imageElement = document.getElementById('video');

    	posenet.load().then(function(net){
      		return net.estimateSinglePose(imageElement, imageScaleFactor, flipHorizontal, outputStride)
    		}).then(function(pose){

          var myJSON = JSON.stringify(pose,['keypoints','score']);
          document.getElementById("data").innerHTML = myJSON;
          
        })