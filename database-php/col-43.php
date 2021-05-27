<?php
error_reporting(0);
    if(isset($_POST['clear43'])){
        $fp378= fopen('./file-db/cleared43.txt', 'w');//opens file in append mode  
        $fp379 = fopen('./file-db/progress43.txt', 'w');//opens file in append mode  
        $fp380 = fopen('./file-db/issue43.txt', 'w');//opens file in append mode  
        fwrite($fp378, 'cleared');
        fwrite($fp379, '');
        fwrite($fp380, '');
        echo '<br>';
        fclose($fp378);  
        fclose($fp379);  
        fclose($fp380);  
        
       header("location:index.php");
    }
?>

<?php
$myfile378= fopen("./file-db/cleared43.txt", "r") or die("Unable to open file!");
$myfile379 = fopen("./file-db/progress43.txt", "r") or die("Unable to open file!");
$myfile380 = fopen("./file-db/issue43.txt", "r") or die("Unable to open file!");
$myText378= fread($myfile378,filesize("./file-db/cleared43.txt"));
$myText379 = fread($myfile379,filesize("./file-db/progress43.txt"));
$myText380 = fread($myfile380,filesize("./file-db/issue43.txt"));
// echo $myText;
fclose($myfile378);
fclose($myfile379);
fclose($myfil380);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress43'])){
        $fp381 = fopen('./file-db/cleared43.txt', 'w');//opens file in append mode  
        $fp382 = fopen('./file-db/progress43.txt', 'w');//opens file in append mode  
        $fp383 = fopen('./file-db/issue43.txt', 'w');//opens file in append mode  
        fwrite($fp381, '');
        fwrite($fp382, 'progress');
        fwrite($fp383, '');
        echo '<br>';
        fclose($fp381);  
        fclose($fp382);  
        fclose($fp383);  
        
       header("location:index.php");
    }
?>

<?php
$myfile381 = fopen("./file-db/cleared43.txt", "r") or die("Unable to open file!");
$myfile382 = fopen("./file-db/progress43.txt", "r") or die("Unable to open file!");
$myfile383 = fopen("./file-db/issue43.txt", "r") or die("Unable to open file!");
$myText381 = fread($myfile381,filesize("./file-db/cleared43.txt"));
$myText382 = fread($myfile382,filesize("./file-db/progress43.txt"));
$myText383 = fread($myfile383,filesize("./file-db/issue43.txt"));
// echo $myText;
fclose($myfile381);
fclose($myfile383);
fclose($myfile383);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue43'])){
        $fp384 = fopen('./file-db/cleared43.txt', 'w');//opens file in append mode  
        $fp385 = fopen('./file-db/progress43.txt', 'w');//opens file in append mode  
        $fp386 = fopen('./file-db/issue43.txt', 'w');//opens file in append mode  
        fwrite($fp384, '');
        fwrite($fp385, '');
        fwrite($fp386, 'issue');
        echo '<br>';
        fclose($fp384);  
        fclose($fp385);  
        fclose($fp386);  
        
       header("location:index.php");
    }
?>

<?php
$myfile384 = fopen("./file-db/cleared43.txt", "r") or die("Unable to open file!");
$myfile385 = fopen("./file-db/progress43.txt", "r") or die("Unable to open file!");
$myfile386 = fopen("./file-db/issue43.txt", "r") or die("Unable to open file!");
$myText384 = fread($myfile384,filesize("./file-db/cleared43.txt"));
$myText385 = fread($myfile385,filesize("./file-db/progress43.txt"));
$myText386 = fread($myfile386,filesize("./file-db/issue43.txt"));
// echo $myText;
fclose($myfile384);
fclose($myfile385);
fclose($myfile386);
?>