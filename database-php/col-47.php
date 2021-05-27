<?php
error_reporting(0);
    if(isset($_POST['clear47'])){
        $fp414= fopen('./file-db/cleared47.txt', 'w');//opens file in append mode  
        $fp415 = fopen('./file-db/progress47.txt', 'w');//opens file in append mode  
        $fp416 = fopen('./file-db/issue47.txt', 'w');//opens file in append mode  
        fwrite($fp414, 'cleared');
        fwrite($fp415, '');
        fwrite($fp416, '');
        echo '<br>';
        fclose($fp414);  
        fclose($fp415);  
        fclose($fp416);  
        
       header("location:index.php");
    }
?>

<?php
$myfile414= fopen("./file-db/cleared47.txt", "r") or die("Unable to open file!");
$myfile415 = fopen("./file-db/progress47.txt", "r") or die("Unable to open file!");
$myfile416 = fopen("./file-db/issue47.txt", "r") or die("Unable to open file!");
$myText414= fread($myfile414,filesize("./file-db/cleared47.txt"));
$myText415 = fread($myfile415,filesize("./file-db/progress47.txt"));
$myText416 = fread($myfile416,filesize("./file-db/issue47.txt"));
// echo $myText;
fclose($myfile414);
fclose($myfile415);
fclose($myfil416);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress47'])){
        $fp417 = fopen('./file-db/cleared47.txt', 'w');//opens file in append mode  
        $fp418 = fopen('./file-db/progress47.txt', 'w');//opens file in append mode  
        $fp419 = fopen('./file-db/issue47.txt', 'w');//opens file in append mode  
        fwrite($fp417, '');
        fwrite($fp418, 'progress');
        fwrite($fp419, '');
        echo '<br>';
        fclose($fp417);  
        fclose($fp418);  
        fclose($fp419);  
        
       header("location:index.php");
    }
?>

<?php
$myfile417 = fopen("./file-db/cleared47.txt", "r") or die("Unable to open file!");
$myfile418 = fopen("./file-db/progress47.txt", "r") or die("Unable to open file!");
$myfile419 = fopen("./file-db/issue47.txt", "r") or die("Unable to open file!");
$myText417 = fread($myfile417,filesize("./file-db/cleared47.txt"));
$myText418 = fread($myfile418,filesize("./file-db/progress47.txt"));
$myText419 = fread($myfile419,filesize("./file-db/issue47.txt"));
// echo $myText;
fclose($myfile417);
fclose($myfile419);
fclose($myfile419);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue47'])){
        $fp420 = fopen('./file-db/cleared47.txt', 'w');//opens file in append mode  
        $fp421 = fopen('./file-db/progress47.txt', 'w');//opens file in append mode  
        $fp422 = fopen('./file-db/issue47.txt', 'w');//opens file in append mode  
        fwrite($fp420, '');
        fwrite($fp421, '');
        fwrite($fp422, 'issue');
        echo '<br>';
        fclose($fp420);  
        fclose($fp421);  
        fclose($fp422);  
        
       header("location:index.php");
    }
?>

<?php
$myfile420 = fopen("./file-db/cleared47.txt", "r") or die("Unable to open file!");
$myfile421 = fopen("./file-db/progress47.txt", "r") or die("Unable to open file!");
$myfile422 = fopen("./file-db/issue47.txt", "r") or die("Unable to open file!");
$myText420 = fread($myfile420,filesize("./file-db/cleared47.txt"));
$myText421 = fread($myfile421,filesize("./file-db/progress47.txt"));
$myText422 = fread($myfile422,filesize("./file-db/issue47.txt"));
// echo $myText;
fclose($myfile420);
fclose($myfile421);
fclose($myfile422);
?>