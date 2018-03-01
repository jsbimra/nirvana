<?php
	
	$ds          = DIRECTORY_SEPARATOR;  //1
 
	$storeFolder = 'uploads';   //2
	 
	if (!empty($_FILES)) {
	     
	    $tempFile = $_FILES['file']['tmp_name'];          //3             
	      
	    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
	     
	    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
	 
	    $uploadSuccess = move_uploaded_file($tempFile,$targetFile); //6
	    
	    if($uploadSuccess){
	    	//Drop and email 
	    	echo "File uploaded";

		    $sentEmail = mail('sonu.bimra@gmail.com', 'The Magical Subject Line', 'The Magical Message Body');

		    if($sentEmail){
		    	echo " & Mail sent succesfully!!! Hurray :)";
		    } else {
		    	echo "succesfully but Error in sending email. :(";
		    }
	    }
	    else{

	    }


	}
?>