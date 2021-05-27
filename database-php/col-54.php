<?php
error_reporting(0);
    if(isset($_POST['clear54'])){
        $fp477= fopen('./file-db/cleared54.txt', 'w');//opens file in append mode  
        $fp478 = fopen('./file-db/progress54.txt', 'w');//opens file in append mode  
        $fp479 = fopen('./file-db/issue54.txt', 'w');//opens file in append mode  
        fwrite($fp477, 'cleared');
        fwrite($fp478, '');
        fwrite($fp479, '');
        echo '<br>';
        fclose($fp477);  
        fclose($fp478);  
        fclose($fp479);  
        
       header("location:index.php");
    }
?>

<?php
$myfile477= fopen("./file-db/cleared54.txt", "r") or die("Unable to open file!");
$myfile478 = fopen("./file-db/progress54.txt", "r") or die("Unable to open file!");
$myfile479 = fopen("./file-db/issue54.txt", "r") or die("Unable to open file!");
$myText477= fread($myfile477,filesize("./file-db/cleared54.txt"));
$myText478 = fread($myfile478,filesize("./file-db/progress54.txt"));
$myText479 = fread($myfile479,filesize("./file-db/issue54.txt"));
// echo $myText;
fclose($myfile477);
fclose($myfile478);
fclose($myfil479);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress54'])){
        $fp480 = fopen('./file-db/cleared54.txt', 'w');//opens file in append mode  
        $fp481 = fopen('./file-db/progress54.txt', 'w');//opens file in append mode  
        $fp482 = fopen('./file-db/issue54.txt', 'w');//opens file in append mode  
        fwrite($fp480, '');
        fwrite($fp481, 'progress');
        fwrite($fp482, '');
        echo '<br>';
        fclose($fp480);  
        fclose($fp481);  
        fclose($fp482);  
        
       header("location:index.php");
    }
?>

<?php
$myfile480 = fopen("./file-db/cleared54.txt", "r") or die("Unable to open file!");
$myfile481 = fopen("./file-db/progress54.txt", "r") or die("Unable to open file!");
$myfile482 = fopen("./file-db/issue54.txt", "r") or die("Unable to open file!");
$myText480 = fread($myfile480,filesize("./file-db/cleared54.txt"));
$myText481 = fread($myfile481,filesize("./file-db/progress54.txt"));
$myText482 = fread($myfile482,filesize("./file-db/issue54.txt"));
// echo $myText;
fclose($myfile480);
fclose($myfile482);
fclose($myfile482);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue54'])){
        $fp483 = fopen('./file-db/cleared54.txt', 'w');//opens file in append mode  
        $fp484 = fopen('./file-db/progress54.txt', 'w');//opens file in append mode  
        $fp485 = fopen('./file-db/issue54.txt', 'w');//opens file in append mode  
        fwrite($fp483, '');
        fwrite($fp484, '');
        fwrite($fp485, 'issue');
        echo '<br>';
        fclose($fp483);  
        fclose($fp484);  
        fclose($fp485);  
        
       header("location:index.php");
    }
?>

<?php
$myfile483 = fopen("./file-db/cleared54.txt", "r") or die("Unable to open file!");
$myfile484 = fopen("./file-db/progress54.txt", "r") or die("Unable to open file!");
$myfile485 = fopen("./file-db/issue54.txt", "r") or die("Unable to open file!");
$myText483 = fread($myfile483,filesize("./file-db/cleared54.txt"));
$myText484 = fread($myfile484,filesize("./file-db/progress54.txt"));
$myText485 = fread($myfile485,filesize("./file-db/issue54.txt"));
// echo $myText;
fclose($myfile483);
fclose($myfile484);
fclose($myfile485);
?>