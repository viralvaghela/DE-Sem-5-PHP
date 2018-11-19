<?php
		
			
		//ACTUACL CODE FOR IMAGE WATER MARK....START FROM HERE :)
		if (isset($_POST['submit'])) {

	$path="Upload/";	
			$wfilename = $_FILES['UserUpload']['name'];
			$wtempname = $_FILES['UserUpload']['tmp_name'];
			$wfilesize = $_FILES['UserUpload']['size'];
			$wfiletype = $_FILES['UserUpload']['type'];
			 
			 move_uploaded_file($wtempname,$path.$wfilename);
		
			$filename = $_FILES['UserWUpload']['name'];
			$tempname = $_FILES['UserWUpload']['tmp_name'];
			$filesize = $_FILES['UserWUpload']['size'];
			$filetype = $_FILES['UserWUpload']['type'];
			
			move_uploaded_file($tempname,$path.$filename);
									
			$source=$path.$wfilename;
			$destination=$path.$filename;
			


		$src_img=imagecreatefromjpeg($source); 				
		$src_w=imagesx($src_img);
		$src_h=imagesy($src_img);
			
		//src means WATER MARK IMAGE... $path.$wfilename
		$des_img=imagecreatefromjpeg($destination);

		//DES Means MAIN IMAGE ...	$path.$filename
		$size=getimagesize($destination);
		$dst_x=$size['0']-$src_w;
		$dst_y=$size['1']-$src_h;
		$src_x=10;
		$src_y=20;
		$pct=70;
 
		imagecopymerge($des_img,$src_img,$dst_x,$dst_y,$src_x,$src_y,$src_w,$src_h,$pct);
	
		header('Content-Type:image/jpeg');
		imagejpeg($des_img);
		imagedestroy($des_img);
		imagedestroy($src_img);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload image</title>
	
</head>
<body>

	<form name="frm1" method="POST" id="frm1" action="" enctype="multipart/form-data">
		<h3>Select WATER MARK Image</h3>
		<input type="file" name="UserUpload" id="UserUpload">

		<br><br><br>

		<h2>Select ORIGINAL image</h2>	
		
		<input type="file" name="UserWUpload" id="UserWUpload"><br>
		
		<br><br>
 
		<input type="submit" name="submit" value="submit" id="submit">
	</form>


</body>
</html>