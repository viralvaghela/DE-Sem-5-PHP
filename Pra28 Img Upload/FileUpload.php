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
			//move_uploaded_file($file_tmp,"images/".$file_name)

			if($filetype=="image/png" OR $filetype=="image/jpg" OR $filetype=="image/jpeg" OR $filetype=="image/gif") {
					if ( move_uploaded_file($tempname,$path.$filename))
					{
						echo "<br><br>"."Uploaded successfully: ".$filetype;
				
					}
					else
						echo "Something went Wrong";

					
			}
			else
				echo "Please Select Only Image file(.img / .jpeg / .gif)";

		}
		//phpinfo();
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
		<input type="submit" name="submit" value="submit" id="submit">

	</form>

</body>
</html>