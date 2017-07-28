<!DOCTYPE html><html class=''>
<head>
<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="z7hltuedx746ywz"></script>
</head>
<body>
<div class="row">
  <div class="small-12 columns">
    <h1>Dropbox Chooser Demo</h1>
    <div id="container"></div>
    <hr>  
    <input type="text" name="testing" id="upload01" value="">
  </div>
</div>
<script>/**
 * Chooser (Drop Box)
 * https://www.dropbox.com/developers/dropins/chooser/js
 */
options = {
    success: function(files) {	
	var link = 	files[0].link;
	//fieldName = fieldName.trim();
	var fieldName = link.substring(0,link.length - 1 + 1);
	//var fieldName = link.substring(0, string.length()-1) + "1";
	alert(fieldName);
		   document.getElementById("upload01").value = files[0].link;	     
     //  for(i = 0; i< files.length; i++){
//
//                  var link = document.createElement('a');
//                  var br = document.createElement('br');
//                  link.href = files[i].link;
//                  link.textContent = files[i].link;
//                  document.getElementById('container').appendChild(br);
//                  document.getElementById('container').appendChild(link); 
//				             
//                } 
				
    },
    
    linkType: "preview", // "preview" or "direct"
    multiselect: true, // true or false
   
};

 var button = Dropbox.createChooseButton(options);
       // Dropbox.choose(options);
        document.getElementById('container').appendChild(button);
		
		
//function add_img_to_list(file) {
//	alert(file);
//  var li  = document.createElement('li');
//  var a   = document.createElement('a');
//  a.href = file.link;
//  var img = new Image();
//  var src = file.thumbnailLink;
//  src = src.replace("bounding_box=75", "bounding_box=256");
//  src = src.replace("mode=fit", "mode=crop");
//  img.src = src;
//  img.className = "th"
//  document.getElementById("img_list").appendChild(li).appendChild(a).appendChild(img);
//  document.getElementById("upload01").val(img);
//}
//# sourceURL=pen.js
</script>
<?php
/*$url = 'https://www.dropbox.com/s/ue07t2m3m36ln1c/Vikram%20Shah%20Independent%20StrategyManagement%20Consultants%20Resume.pdf?dl=0';
$url = rtrim($url, '0');
$url = rtrim($url,"1").'1';

  
  $str = $url;
$from = "/";
$to = "?";
	$ext = getStringBetween($str,$from,$to);
	$url = file_get_contents($url);
	//echo $url;
	//echo $ext;die;
	if($ext == 'jpg'){
		 $file = "resume.jpg";
	}else{
		 $file = "resume.pdf";
		}
   

    file_put_contents($file, $url);
	
	



function getStringBetween($str,$from,$to)
{
    $sub = substr($str, strpos($str,$from)+strlen($from),strlen($str));
    $ur =  substr($sub,0,strpos($sub,$to));
	
	 $id = substr($ur, strrpos($ur, '/') + 1);
	$arr = explode(".",$id);
	//print_r($arr);die;
	return $arr[1];
}*/
?>
</body>
</html>