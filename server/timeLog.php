 <?php
    $newTime = $_POST['time'];
    
    $myfile = fopen("times.txt", "a") or die("Unable to open file!");
    $txt = $newTime;
    fwrite($myfile, "\n". $txt);
    fclose($myfile);
?>
 
