<?php
error_reporting(0);
    if(isset($_POST['clear35'])){
        $fp306= fopen('./file-db/cleared35.txt', 'w');//opens file in append mode  
        $fp307 = fopen('./file-db/progress35.txt', 'w');//opens file in append mode  
        $fp308 = fopen('./file-db/issue35.txt', 'w');//opens file in append mode  
        fwrite($fp306, 'cleared');
        fwrite($fp307, '');
        fwrite($fp308, '');
        echo '<br>';
        fclose($fp306);  
        fclose($fp307);  
        fclose($fp308);  
        
       header("location:index.php");
    }
?>

<?php
$myfile306= fopen("./file-db/cleared35.txt", "r") or die("Unable to open file!");
$myfile307 = fopen("./file-db/progress35.txt", "r") or die("Unable to open file!");
$myfile308 = fopen("./file-db/issue35.txt", "r") or die("Unable to open file!");
$myText306= fread($myfile306,filesize("./file-db/cleared35.txt"));
$myText307 = fread($myfile307,filesize("./file-db/progress35.txt"));
$myText308 = fread($myfile308,filesize("./file-db/issue35.txt"));
// echo $myText;
fclose($myfile306);
fclose($myfile307);
fclose($myfil308);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress35'])){
        $fp309 = fopen('./file-db/cleared35.txt', 'w');//opens file in append mode  
        $fp310 = fopen('./file-db/progress35.txt', 'w');//opens file in append mode  
        $fp311 = fopen('./file-db/issue35.txt', 'w');//opens file in append mode  
        fwrite($fp309, '');
        fwrite($fp310, 'progress');
        fwrite($fp311, '');
        echo '<br>';
        fclose($fp309);  
        fclose($fp310);  
        fclose($fp311);  
        
       header("location:index.php");
    }
?>

<?php
$myfile309 = fopen("./file-db/cleared35.txt", "r") or die("Unable to open file!");
$myfile310 = fopen("./file-db/progress35.txt", "r") or die("Unable to open file!");
$myfile311 = fopen("./file-db/issue35.txt", "r") or die("Unable to open file!");
$myText309 = fread($myfile309,filesize("./file-db/cleared35.txt"));
$myText310 = fread($myfile310,filesize("./file-db/progress35.txt"));
$myText311 = fread($myfile311,filesize("./file-db/issue35.txt"));
// echo $myText;
fclose($myfile309);
fclose($myfile310);
fclose($myfile311);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue35'])){
        $fp312 = fopen('./file-db/cleared35.txt', 'w');//opens file in append mode  
        $fp313 = fopen('./file-db/progress35.txt', 'w');//opens file in append mode  
        $fp314 = fopen('./file-db/issue35.txt', 'w');//opens file in append mode  
        fwrite($fp312, '');
        fwrite($fp313, '');
        fwrite($fp314, 'issue');
        echo '<br>';
        fclose($fp312);  
        fclose($fp313);  
        fclose($fp314);  
        
       header("location:index.php");
    }
?>

<?php
$myfile312 = fopen("./file-db/cleared35.txt", "r") or die("Unable to open file!");
$myfile313 = fopen("./file-db/progress35.txt", "r") or die("Unable to open file!");
$myfile314 = fopen("./file-db/issue35.txt", "r") or die("Unable to open file!");
$myText312 = fread($myfile312,filesize("./file-db/cleared35.txt"));
$myText313 = fread($myfile313,filesize("./file-db/progress35.txt"));
$myText314 = fread($myfile314,filesize("./file-db/issue35.txt"));
// echo $myText;
fclose($myfile312);
fclose($myfile313);
fclose($myfile314);
?>