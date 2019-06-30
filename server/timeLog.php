 <?php
    //$newTime = $_POST['time'];
	//$newTime = $_REQUEST;
    $myfile = fopen("times.txt", "a") or die("Unable to open file!");
    //fwrite($myfile, "\n". $newTime);
	//fwrite($myfile, "\n". var_export($_REQUEST, true));
    //fclose($myfile);
	
	foreach($_REQUEST as $fieldName=>$fieldVal){
		$container = explode("=",$fieldName);
		if($container[0] == "time"){
			fwrite($myfile, $fieldVal. "\n");
		}
	}
	
	fclose($myfile);
?>
 
