<?php
error_reporting(0);
    if(isset($_POST['clear57'])){
        $fp504= fopen('./file-db/cleared57.txt', 'w');//opens file in append mode  
        $fp505 = fopen('./file-db/progress57.txt', 'w');//opens file in append mode  
        $fp506 = fopen('./file-db/issue57.txt', 'w');//opens file in append mode  
        fwrite($fp504, 'cleared');
        fwrite($fp505, '');
        fwrite($fp506, '');
        echo '<br>';
        fclose($fp504);  
        fclose($fp505);  
        fclose($fp506);  
        
       header("location:index.php");
    }
?>

<?php
$myfile504= fopen("./file-db/cleared57.txt", "r") or die("Unable to open file!");
$myfile505 = fopen("./file-db/progress57.txt", "r") or die("Unable to open file!");
$myfile506 = fopen("./file-db/issue57.txt", "r") or die("Unable to open file!");
$myText504= fread($myfile504,filesize("./file-db/cleared57.txt"));
$myText505 = fread($myfile505,filesize("./file-db/progress57.txt"));
$myText506 = fread($myfile506,filesize("./file-db/issue57.txt"));
// echo $myText;
fclose($myfile504);
fclose($myfile505);
fclose($myfil506);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress57'])){
        $fp507 = fopen('./file-db/cleared57.txt', 'w');//opens file in append mode  
        $fp508 = fopen('./file-db/progress57.txt', 'w');//opens file in append mode  
        $fp509 = fopen('./file-db/issue57.txt', 'w');//opens file in append mode  
        fwrite($fp507, '');
        fwrite($fp508, 'progress');
        fwrite($fp509, '');
        echo '<br>';
        fclose($fp507);  
        fclose($fp508);  
        fclose($fp509);  
        
       header("location:index.php");
    }
?>

<?php
$myfile507 = fopen("./file-db/cleared57.txt", "r") or die("Unable to open file!");
$myfile508 = fopen("./file-db/progress57.txt", "r") or die("Unable to open file!");
$myfile509 = fopen("./file-db/issue57.txt", "r") or die("Unable to open file!");
$myText507 = fread($myfile507,filesize("./file-db/cleared57.txt"));
$myText508 = fread($myfile508,filesize("./file-db/progress57.txt"));
$myText509 = fread($myfile509,filesize("./file-db/issue57.txt"));
// echo $myText;
fclose($myfile507);
fclose($myfile509);
fclose($myfile509);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue57'])){
        $fp510 = fopen('./file-db/cleared57.txt', 'w');//opens file in append mode  
        $fp511 = fopen('./file-db/progress57.txt', 'w');//opens file in append mode  
        $fp512 = fopen('./file-db/issue57.txt', 'w');//opens file in append mode  
        fwrite($fp510, '');
        fwrite($fp511, '');
        fwrite($fp512, 'issue');
        echo '<br>';
        fclose($fp510);  
        fclose($fp511);  
        fclose($fp512);  
        
       header("location:index.php");
    }
?>

<?php
$myfile510 = fopen("./file-db/cleared57.txt", "r") or die("Unable to open file!");
$myfile511 = fopen("./file-db/progress57.txt", "r") or die("Unable to open file!");
$myfile512 = fopen("./file-db/issue57.txt", "r") or die("Unable to open file!");
$myText510 = fread($myfile510,filesize("./file-db/cleared57.txt"));
$myText511 = fread($myfile511,filesize("./file-db/progress57.txt"));
$myText512 = fread($myfile512,filesize("./file-db/issue57.txt"));
// echo $myText;
fclose($myfile510);
fclose($myfile511);
fclose($myfile512);
?>