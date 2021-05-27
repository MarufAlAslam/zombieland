<?php
error_reporting(0);
    if(isset($_POST['clear39'])){
        $fp342= fopen('./file-db/cleared39.txt', 'w');//opens file in append mode  
        $fp343 = fopen('./file-db/progress39.txt', 'w');//opens file in append mode  
        $fp344 = fopen('./file-db/issue39.txt', 'w');//opens file in append mode  
        fwrite($fp342, 'cleared');
        fwrite($fp343, '');
        fwrite($fp344, '');
        echo '<br>';
        fclose($fp342);  
        fclose($fp343);  
        fclose($fp344);  
        
       header("location:index.php");
    }
?>

<?php
$myfile342= fopen("./file-db/cleared39.txt", "r") or die("Unable to open file!");
$myfile343 = fopen("./file-db/progress39.txt", "r") or die("Unable to open file!");
$myfile344 = fopen("./file-db/issue39.txt", "r") or die("Unable to open file!");
$myText342= fread($myfile342,filesize("./file-db/cleared39.txt"));
$myText343 = fread($myfile343,filesize("./file-db/progress39.txt"));
$myText344 = fread($myfile344,filesize("./file-db/issue39.txt"));
// echo $myText;
fclose($myfile342);
fclose($myfile343);
fclose($myfil344);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress39'])){
        $fp345 = fopen('./file-db/cleared39.txt', 'w');//opens file in append mode  
        $fp346 = fopen('./file-db/progress39.txt', 'w');//opens file in append mode  
        $fp347 = fopen('./file-db/issue39.txt', 'w');//opens file in append mode  
        fwrite($fp345, '');
        fwrite($fp346, 'progress');
        fwrite($fp347, '');
        echo '<br>';
        fclose($fp345);  
        fclose($fp346);  
        fclose($fp347);  
        
       header("location:index.php");
    }
?>

<?php
$myfile345 = fopen("./file-db/cleared39.txt", "r") or die("Unable to open file!");
$myfile346 = fopen("./file-db/progress39.txt", "r") or die("Unable to open file!");
$myfile347 = fopen("./file-db/issue39.txt", "r") or die("Unable to open file!");
$myText345 = fread($myfile345,filesize("./file-db/cleared39.txt"));
$myText346 = fread($myfile346,filesize("./file-db/progress39.txt"));
$myText347 = fread($myfile347,filesize("./file-db/issue39.txt"));
// echo $myText;
fclose($myfile345);
fclose($myfile347);
fclose($myfile347);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue39'])){
        $fp348 = fopen('./file-db/cleared39.txt', 'w');//opens file in append mode  
        $fp349 = fopen('./file-db/progress39.txt', 'w');//opens file in append mode  
        $fp350 = fopen('./file-db/issue39.txt', 'w');//opens file in append mode  
        fwrite($fp348, '');
        fwrite($fp349, '');
        fwrite($fp350, 'issue');
        echo '<br>';
        fclose($fp348);  
        fclose($fp349);  
        fclose($fp350);  
        
       header("location:index.php");
    }
?>

<?php
$myfile348 = fopen("./file-db/cleared39.txt", "r") or die("Unable to open file!");
$myfile349 = fopen("./file-db/progress39.txt", "r") or die("Unable to open file!");
$myfile350 = fopen("./file-db/issue39.txt", "r") or die("Unable to open file!");
$myText348 = fread($myfile348,filesize("./file-db/cleared39.txt"));
$myText349 = fread($myfile349,filesize("./file-db/progress39.txt"));
$myText350 = fread($myfile350,filesize("./file-db/issue39.txt"));
// echo $myText;
fclose($myfile348);
fclose($myfile349);
fclose($myfile350);
?>