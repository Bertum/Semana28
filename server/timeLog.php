 <?php
    $newTime = $_POST['time'];
    
    $myfile = fopen("times.txt", "a") or die("Unable to open file!");
    fwrite($myfile, "\n". $newTime);
    fclose($myfile);
?>
 
