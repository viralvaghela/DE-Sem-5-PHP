	#CODE FOR ORIGINAL IMAGE....

			$wfilename = $_FILES['wUserUpload']['name'];
			$wtempname = $_FILES['wUserUpload']['tmp_name'];
			$wfilesize = $_FILES['wUserUpload']['size'];
			$wfiletype = $_FILES['wUserUpload']['type'];
			/*echo "File name:".$wfilename."<br>";
			echo "File size:".$wfilesize."<br>";
			echo "File type:".$wfiletype."<br>";
			echo "Temp Name:".$wtempname."<br>";*/
			
			$path="Upload/";
		
			if($wfiletype=="image/png" OR $wfiletype=="image/jpg" OR $wfiletype=="image/jpeg" OR $wfiletype=="image/gif") {		
													
								if ( move_uploaded_file($wtempname,$path.$wfilename))
									{
										/*echo $arr['h'];
										echo $arr['width'];*/
										echo "<h1> <br><br>"."Uploaded successfully: ".$wfilename."<h1>";
									}
								else
										echo "Something went wrong";
									
			}			
			else
				echo "please  select png,jpeg,or gif file";
			

				# CODE FOR WATERMARK IMAGE

			$filename = $_FILES['UserWUpload']['name'];
			$tempname = $_FILES['UserWUpload']['tmp_name'];
			$filesize = $_FILES['UserWUpload']['size'];
			$filetype = $_FILES['UserWUpload']['type'];
			echo "File name:".$filename."<br>";
			echo "File size:".$filesize."<br>";
			echo "File type:".$filetype."<br>";
			echo "Temp Name:".$tempname."<br>";
			
			//move_uploaded_file($file_tmp,"images/".$file_name)

			if($filetype=="image/png" OR $filetype=="image/jpg" OR $filetype=="image/jpeg" OR $filetype=="image/gif") {
					
								
								if ( move_uploaded_file($tempname,$path.$filename))
									{
										/*echo $arr['h'];
										echo $arr['width'];*/
										echo "<h1> <br><br>"."Uploaded successfully: ".$filename."<h1>";
									}
								else
										echo "Something went wrong";
								
			}			
			else
				echo "please  select png,jpeg,or gif file"; 
			