<?php
error_reporting(0);
    if(isset($_POST['clear40'])){
        $fp351= fopen('./file-db/cleared40.txt', 'w');//opens file in append mode  
        $fp352 = fopen('./file-db/progress40.txt', 'w');//opens file in append mode  
        $fp353 = fopen('./file-db/issue40.txt', 'w');//opens file in append mode  
        fwrite($fp351, 'cleared');
        fwrite($fp352, '');
        fwrite($fp353, '');
        echo '<br>';
        fclose($fp351);  
        fclose($fp352);  
        fclose($fp353);  
        
       header("location:index.php");
    }
?>

<?php
$myfile351= fopen("./file-db/cleared40.txt", "r") or die("Unable to open file!");
$myfile352 = fopen("./file-db/progress40.txt", "r") or die("Unable to open file!");
$myfile353 = fopen("./file-db/issue40.txt", "r") or die("Unable to open file!");
$myText351= fread($myfile351,filesize("./file-db/cleared40.txt"));
$myText352 = fread($myfile352,filesize("./file-db/progress40.txt"));
$myText353 = fread($myfile353,filesize("./file-db/issue40.txt"));
// echo $myText;
fclose($myfile351);
fclose($myfile352);
fclose($myfil353);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress40'])){
        $fp354 = fopen('./file-db/cleared40.txt', 'w');//opens file in append mode  
        $fp355 = fopen('./file-db/progress40.txt', 'w');//opens file in append mode  
        $fp356 = fopen('./file-db/issue40.txt', 'w');//opens file in append mode  
        fwrite($fp354, '');
        fwrite($fp355, 'progress');
        fwrite($fp356, '');
        echo '<br>';
        fclose($fp354);  
        fclose($fp355);  
        fclose($fp356);  
        
       header("location:index.php");
    }
?>

<?php
$myfile354 = fopen("./file-db/cleared40.txt", "r") or die("Unable to open file!");
$myfile355 = fopen("./file-db/progress40.txt", "r") or die("Unable to open file!");
$myfile356 = fopen("./file-db/issue40.txt", "r") or die("Unable to open file!");
$myText354 = fread($myfile354,filesize("./file-db/cleared40.txt"));
$myText355 = fread($myfile355,filesize("./file-db/progress40.txt"));
$myText356 = fread($myfile356,filesize("./file-db/issue40.txt"));
// echo $myText;
fclose($myfile354);
fclose($myfile356);
fclose($myfile356);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue40'])){
        $fp357 = fopen('./file-db/cleared40.txt', 'w');//opens file in append mode  
        $fp358 = fopen('./file-db/progress40.txt', 'w');//opens file in append mode  
        $fp359 = fopen('./file-db/issue40.txt', 'w');//opens file in append mode  
        fwrite($fp357, '');
        fwrite($fp358, '');
        fwrite($fp359, 'issue');
        echo '<br>';
        fclose($fp357);  
        fclose($fp358);  
        fclose($fp359);  
        
       header("location:index.php");
    }
?>

<?php
$myfile357 = fopen("./file-db/cleared40.txt", "r") or die("Unable to open file!");
$myfile358 = fopen("./file-db/progress40.txt", "r") or die("Unable to open file!");
$myfile359 = fopen("./file-db/issue40.txt", "r") or die("Unable to open file!");
$myText357 = fread($myfile357,filesize("./file-db/cleared40.txt"));
$myText358 = fread($myfile358,filesize("./file-db/progress40.txt"));
$myText359 = fread($myfile359,filesize("./file-db/issue40.txt"));
// echo $myText;
fclose($myfile357);
fclose($myfile358);
fclose($myfile359);
?>