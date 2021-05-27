<?php
error_reporting(0);
    if(isset($_POST['clear51'])){
        $fp450= fopen('./file-db/cleared51.txt', 'w');//opens file in append mode  
        $fp451 = fopen('./file-db/progress51.txt', 'w');//opens file in append mode  
        $fp452 = fopen('./file-db/issue51.txt', 'w');//opens file in append mode  
        fwrite($fp450, 'cleared');
        fwrite($fp451, '');
        fwrite($fp452, '');
        echo '<br>';
        fclose($fp450);  
        fclose($fp451);  
        fclose($fp452);  
        
       header("location:index.php");
    }
?>

<?php
$myfile450= fopen("./file-db/cleared51.txt", "r") or die("Unable to open file!");
$myfile451 = fopen("./file-db/progress51.txt", "r") or die("Unable to open file!");
$myfile452 = fopen("./file-db/issue51.txt", "r") or die("Unable to open file!");
$myText450= fread($myfile450,filesize("./file-db/cleared51.txt"));
$myText451 = fread($myfile451,filesize("./file-db/progress51.txt"));
$myText452 = fread($myfile452,filesize("./file-db/issue51.txt"));
// echo $myText;
fclose($myfile450);
fclose($myfile451);
fclose($myfil452);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress51'])){
        $fp453 = fopen('./file-db/cleared51.txt', 'w');//opens file in append mode  
        $fp454 = fopen('./file-db/progress51.txt', 'w');//opens file in append mode  
        $fp455 = fopen('./file-db/issue51.txt', 'w');//opens file in append mode  
        fwrite($fp453, '');
        fwrite($fp454, 'progress');
        fwrite($fp455, '');
        echo '<br>';
        fclose($fp453);  
        fclose($fp454);  
        fclose($fp455);  
        
       header("location:index.php");
    }
?>

<?php
$myfile453 = fopen("./file-db/cleared51.txt", "r") or die("Unable to open file!");
$myfile454 = fopen("./file-db/progress51.txt", "r") or die("Unable to open file!");
$myfile455 = fopen("./file-db/issue51.txt", "r") or die("Unable to open file!");
$myText453 = fread($myfile453,filesize("./file-db/cleared51.txt"));
$myText454 = fread($myfile454,filesize("./file-db/progress51.txt"));
$myText455 = fread($myfile455,filesize("./file-db/issue51.txt"));
// echo $myText;
fclose($myfile453);
fclose($myfile455);
fclose($myfile455);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue51'])){
        $fp456 = fopen('./file-db/cleared51.txt', 'w');//opens file in append mode  
        $fp457 = fopen('./file-db/progress51.txt', 'w');//opens file in append mode  
        $fp458 = fopen('./file-db/issue51.txt', 'w');//opens file in append mode  
        fwrite($fp456, '');
        fwrite($fp457, '');
        fwrite($fp458, 'issue');
        echo '<br>';
        fclose($fp456);  
        fclose($fp457);  
        fclose($fp458);  
        
       header("location:index.php");
    }
?>

<?php
$myfile456 = fopen("./file-db/cleared51.txt", "r") or die("Unable to open file!");
$myfile457 = fopen("./file-db/progress51.txt", "r") or die("Unable to open file!");
$myfile458 = fopen("./file-db/issue51.txt", "r") or die("Unable to open file!");
$myText456 = fread($myfile456,filesize("./file-db/cleared51.txt"));
$myText457 = fread($myfile457,filesize("./file-db/progress51.txt"));
$myText458 = fread($myfile458,filesize("./file-db/issue51.txt"));
// echo $myText;
fclose($myfile456);
fclose($myfile457);
fclose($myfile458);
?>