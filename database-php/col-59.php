<?php
error_reporting(0);
    if(isset($_POST['clear59'])){
        $fp522= fopen('./file-db/cleared59.txt', 'w');//opens file in append mode  
        $fp523 = fopen('./file-db/progress59.txt', 'w');//opens file in append mode  
        $fp524 = fopen('./file-db/issue59.txt', 'w');//opens file in append mode  
        fwrite($fp522, 'cleared');
        fwrite($fp523, '');
        fwrite($fp524, '');
        echo '<br>';
        fclose($fp522);  
        fclose($fp523);  
        fclose($fp524);  
        
       header("location:index.php");
    }
?>

<?php
$myfile522= fopen("./file-db/cleared59.txt", "r") or die("Unable to open file!");
$myfile523 = fopen("./file-db/progress59.txt", "r") or die("Unable to open file!");
$myfile524 = fopen("./file-db/issue59.txt", "r") or die("Unable to open file!");
$myText522= fread($myfile522,filesize("./file-db/cleared59.txt"));
$myText523 = fread($myfile523,filesize("./file-db/progress59.txt"));
$myText524 = fread($myfile524,filesize("./file-db/issue59.txt"));
// echo $myText;
fclose($myfile522);
fclose($myfile523);
fclose($myfil524);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress59'])){
        $fp525 = fopen('./file-db/cleared59.txt', 'w');//opens file in append mode  
        $fp526 = fopen('./file-db/progress59.txt', 'w');//opens file in append mode  
        $fp527 = fopen('./file-db/issue59.txt', 'w');//opens file in append mode  
        fwrite($fp525, '');
        fwrite($fp526, 'progress');
        fwrite($fp527, '');
        echo '<br>';
        fclose($fp525);  
        fclose($fp526);  
        fclose($fp527);  
        
       header("location:index.php");
    }
?>

<?php
$myfile525 = fopen("./file-db/cleared59.txt", "r") or die("Unable to open file!");
$myfile526 = fopen("./file-db/progress59.txt", "r") or die("Unable to open file!");
$myfile527 = fopen("./file-db/issue59.txt", "r") or die("Unable to open file!");
$myText525 = fread($myfile525,filesize("./file-db/cleared59.txt"));
$myText526 = fread($myfile526,filesize("./file-db/progress59.txt"));
$myText527 = fread($myfile527,filesize("./file-db/issue59.txt"));
// echo $myText;
fclose($myfile525);
fclose($myfile527);
fclose($myfile527);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue59'])){
        $fp528 = fopen('./file-db/cleared59.txt', 'w');//opens file in append mode  
        $fp529 = fopen('./file-db/progress59.txt', 'w');//opens file in append mode  
        $fp530 = fopen('./file-db/issue59.txt', 'w');//opens file in append mode  
        fwrite($fp528, '');
        fwrite($fp529, '');
        fwrite($fp530, 'issue');
        echo '<br>';
        fclose($fp528);  
        fclose($fp529);  
        fclose($fp530);  
        
       header("location:index.php");
    }
?>

<?php
$myfile528 = fopen("./file-db/cleared59.txt", "r") or die("Unable to open file!");
$myfile529 = fopen("./file-db/progress59.txt", "r") or die("Unable to open file!");
$myfile530 = fopen("./file-db/issue59.txt", "r") or die("Unable to open file!");
$myText528 = fread($myfile528,filesize("./file-db/cleared59.txt"));
$myText529 = fread($myfile529,filesize("./file-db/progress59.txt"));
$myText530 = fread($myfile530,filesize("./file-db/issue59.txt"));
// echo $myText;
fclose($myfile528);
fclose($myfile529);
fclose($myfile530);
?>