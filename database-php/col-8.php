<?php
error_reporting(0);
    if(isset($_POST['clear8'])){
        $fp63= fopen('./file-db/cleared8.txt', 'w');//opens file in append mode  
        $fp64 = fopen('./file-db/progress8.txt', 'w');//opens file in append mode  
        $fp65 = fopen('./file-db/issue8.txt', 'w');//opens file in append mode  
        fwrite($fp63, 'cleared');
        fwrite($fp64, '');
        fwrite($fp65, '');
        echo '<br>';
        fclose($fp63);  
        fclose($fp64);  
        fclose($fp65);  
        
       header("location:index.php");
    }
?>

<?php
$myfile63= fopen("./file-db/cleared8.txt", "r") or die("Unable to open file!");
$myfile64 = fopen("./file-db/progress8.txt", "r") or die("Unable to open file!");
$myfile65 = fopen("./file-db/issue8.txt", "r") or die("Unable to open file!");
$myText63= fread($myfile63,filesize("./file-db/cleared8.txt"));
$myText64 = fread($myfile64,filesize("./file-db/progress8.txt"));
$myText65 = fread($myfile65,filesize("./file-db/issue8.txt"));
// echo $myText;
fclose($myfile63);
fclose($myfile64);
fclose($myfil65);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress8'])){
        $fp66 = fopen('./file-db/cleared8.txt', 'w');//opens file in append mode  
        $fp67 = fopen('./file-db/progress8.txt', 'w');//opens file in append mode  
        $fp68 = fopen('./file-db/issue8.txt', 'w');//opens file in append mode  
        fwrite($fp66, '');
        fwrite($fp67, 'progress');
        fwrite($fp68, '');
        echo '<br>';
        fclose($fp66);  
        fclose($fp67);  
        fclose($fp68);  
        
       header("location:index.php");
    }
?>

<?php
$myfile66 = fopen("./file-db/cleared8.txt", "r") or die("Unable to open file!");
$myfile67 = fopen("./file-db/progress8.txt", "r") or die("Unable to open file!");
$myfile68 = fopen("./file-db/issue8.txt", "r") or die("Unable to open file!");
$myText66 = fread($myfile66,filesize("./file-db/cleared8.txt"));
$myText67 = fread($myfile67,filesize("./file-db/progress8.txt"));
$myText68 = fread($myfile68,filesize("./file-db/issue8.txt"));
// echo $myText;
fclose($myfile66);
fclose($myfile67);
fclose($myfile68);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue8'])){
        $fp69 = fopen('./file-db/cleared8.txt', 'w');//opens file in append mode  
        $fp70 = fopen('./file-db/progress8.txt', 'w');//opens file in append mode  
        $fp71 = fopen('./file-db/issue8.txt', 'w');//opens file in append mode  
        fwrite($fp69, '');
        fwrite($fp70, '');
        fwrite($fp71, 'issue');
        echo '<br>';
        fclose($fp69);  
        fclose($fp70);  
        fclose($fp71);  
        
       header("location:index.php");
    }
?>

<?php
$myfile69 = fopen("./file-db/cleared8.txt", "r") or die("Unable to open file!");
$myfile70 = fopen("./file-db/progress8.txt", "r") or die("Unable to open file!");
$myfile71 = fopen("./file-db/issue8.txt", "r") or die("Unable to open file!");
$myText69 = fread($myfile69,filesize("./file-db/cleared8.txt"));
$myText70 = fread($myfile70,filesize("./file-db/progress8.txt"));
$myText71 = fread($myfile71,filesize("./file-db/issue8.txt"));
// echo $myText;
fclose($myfile69);
fclose($myfile70);
fclose($myfile71);
?>