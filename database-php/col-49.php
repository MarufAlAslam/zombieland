<?php
error_reporting(0);
    if(isset($_POST['clear49'])){
        $fp432= fopen('./file-db/cleared49.txt', 'w');//opens file in append mode  
        $fp433 = fopen('./file-db/progress49.txt', 'w');//opens file in append mode  
        $fp434 = fopen('./file-db/issue49.txt', 'w');//opens file in append mode  
        fwrite($fp432, 'cleared');
        fwrite($fp433, '');
        fwrite($fp434, '');
        echo '<br>';
        fclose($fp432);  
        fclose($fp433);  
        fclose($fp434);  
        
       header("location:index.php");
    }
?>

<?php
$myfile432= fopen("./file-db/cleared49.txt", "r") or die("Unable to open file!");
$myfile433 = fopen("./file-db/progress49.txt", "r") or die("Unable to open file!");
$myfile434 = fopen("./file-db/issue49.txt", "r") or die("Unable to open file!");
$myText432= fread($myfile432,filesize("./file-db/cleared49.txt"));
$myText433 = fread($myfile433,filesize("./file-db/progress49.txt"));
$myText434 = fread($myfile434,filesize("./file-db/issue49.txt"));
// echo $myText;
fclose($myfile432);
fclose($myfile433);
fclose($myfil434);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress49'])){
        $fp435 = fopen('./file-db/cleared49.txt', 'w');//opens file in append mode  
        $fp436 = fopen('./file-db/progress49.txt', 'w');//opens file in append mode  
        $fp437 = fopen('./file-db/issue49.txt', 'w');//opens file in append mode  
        fwrite($fp435, '');
        fwrite($fp436, 'progress');
        fwrite($fp437, '');
        echo '<br>';
        fclose($fp435);  
        fclose($fp436);  
        fclose($fp437);  
        
       header("location:index.php");
    }
?>

<?php
$myfile435 = fopen("./file-db/cleared49.txt", "r") or die("Unable to open file!");
$myfile436 = fopen("./file-db/progress49.txt", "r") or die("Unable to open file!");
$myfile437 = fopen("./file-db/issue49.txt", "r") or die("Unable to open file!");
$myText435 = fread($myfile435,filesize("./file-db/cleared49.txt"));
$myText436 = fread($myfile436,filesize("./file-db/progress49.txt"));
$myText437 = fread($myfile437,filesize("./file-db/issue49.txt"));
// echo $myText;
fclose($myfile435);
fclose($myfile437);
fclose($myfile437);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue49'])){
        $fp438 = fopen('./file-db/cleared49.txt', 'w');//opens file in append mode  
        $fp439 = fopen('./file-db/progress49.txt', 'w');//opens file in append mode  
        $fp440 = fopen('./file-db/issue49.txt', 'w');//opens file in append mode  
        fwrite($fp438, '');
        fwrite($fp439, '');
        fwrite($fp440, 'issue');
        echo '<br>';
        fclose($fp438);  
        fclose($fp439);  
        fclose($fp440);  
        
       header("location:index.php");
    }
?>

<?php
$myfile438 = fopen("./file-db/cleared49.txt", "r") or die("Unable to open file!");
$myfile439 = fopen("./file-db/progress49.txt", "r") or die("Unable to open file!");
$myfile440 = fopen("./file-db/issue49.txt", "r") or die("Unable to open file!");
$myText438 = fread($myfile438,filesize("./file-db/cleared49.txt"));
$myText439 = fread($myfile439,filesize("./file-db/progress49.txt"));
$myText440 = fread($myfile440,filesize("./file-db/issue49.txt"));
// echo $myText;
fclose($myfile438);
fclose($myfile439);
fclose($myfile440);
?>