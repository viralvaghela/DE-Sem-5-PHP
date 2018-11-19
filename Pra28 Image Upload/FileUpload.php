<?php
		if (isset($_REQUEST['submit'])) {
			$filename = $_FILES['UserUpload']['name'];
			$tempname = $_FILES['UserUpload']['tmp_name'];
			$filesize = $_FILES['UserUpload']['size'];
			$filetype = $_FILES['UserUpload']['type'];
			echo "File name:".$filename."<br>";
			echo "File size:".$filesize."<br>";
			echo "File type:".$filetype."<br>";
			echo "Temp Name:".$tempname."<br>";
			$path="Upload/";
			if($filetype=="image/png" OR $filetype=="image/jpg" OR $filetype=="image/jpeg" OR $filetype=="image/gif") {
					
					if (file_exists($path.$filename)) {
						echo "File already exists";
						exit;	//exit if file alerady exists...
					}
					else
						{	
							list($height, $width, $t ,$a) = getimagesize($tempname); //Get height and width using function  and store in list////
							if ($height< 500 && $width<500)
							 {

								
								if ( move_uploaded_file($tempname,$path.$filename))
									{
										
										echo "<h1> <br><br>"."Uploaded successfully: ".$filename."<h1>";
									}
								else
										echo "Something went wrong";
							}
							else
								echo "Height and width should be less than 500px";
					}				
			}			
			else
				echo"please  select png,jpeg,or gif file";	
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload image</title>
	
</head>
<body>

	<form name="frm1" method="POST" id="frm1" action="" enctype="multipart/form-data">
		<h3>Select Image</h3>
		<input type="file" name="UserUpload" id="UserUpload"><br>
		<div id="btn"><br>
			<input type="submit" name="submit" value="submit" id="submit">
		</div>
	</form>

</body>
</html>