<?php
error_reporting(0);
    if(isset($_POST['clear41'])){
        $fp360= fopen('./file-db/cleared41.txt', 'w');//opens file in append mode  
        $fp361 = fopen('./file-db/progress41.txt', 'w');//opens file in append mode  
        $fp362 = fopen('./file-db/issue41.txt', 'w');//opens file in append mode  
        fwrite($fp360, 'cleared');
        fwrite($fp361, '');
        fwrite($fp362, '');
        echo '<br>';
        fclose($fp360);  
        fclose($fp361);  
        fclose($fp362);  
        
       header("location:index.php");
    }
?>

<?php
$myfile360= fopen("./file-db/cleared41.txt", "r") or die("Unable to open file!");
$myfile361 = fopen("./file-db/progress41.txt", "r") or die("Unable to open file!");
$myfile362 = fopen("./file-db/issue41.txt", "r") or die("Unable to open file!");
$myText360= fread($myfile360,filesize("./file-db/cleared41.txt"));
$myText361 = fread($myfile361,filesize("./file-db/progress41.txt"));
$myText362 = fread($myfile362,filesize("./file-db/issue41.txt"));
// echo $myText;
fclose($myfile360);
fclose($myfile361);
fclose($myfil362);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress41'])){
        $fp363 = fopen('./file-db/cleared41.txt', 'w');//opens file in append mode  
        $fp364 = fopen('./file-db/progress41.txt', 'w');//opens file in append mode  
        $fp365 = fopen('./file-db/issue41.txt', 'w');//opens file in append mode  
        fwrite($fp363, '');
        fwrite($fp364, 'progress');
        fwrite($fp365, '');
        echo '<br>';
        fclose($fp363);  
        fclose($fp364);  
        fclose($fp365);  
        
       header("location:index.php");
    }
?>

<?php
$myfile363 = fopen("./file-db/cleared41.txt", "r") or die("Unable to open file!");
$myfile364 = fopen("./file-db/progress41.txt", "r") or die("Unable to open file!");
$myfile365 = fopen("./file-db/issue41.txt", "r") or die("Unable to open file!");
$myText363 = fread($myfile363,filesize("./file-db/cleared41.txt"));
$myText364 = fread($myfile364,filesize("./file-db/progress41.txt"));
$myText365 = fread($myfile365,filesize("./file-db/issue41.txt"));
// echo $myText;
fclose($myfile363);
fclose($myfile365);
fclose($myfile365);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue41'])){
        $fp366 = fopen('./file-db/cleared41.txt', 'w');//opens file in append mode  
        $fp367 = fopen('./file-db/progress41.txt', 'w');//opens file in append mode  
        $fp368 = fopen('./file-db/issue41.txt', 'w');//opens file in append mode  
        fwrite($fp366, '');
        fwrite($fp367, '');
        fwrite($fp368, 'issue');
        echo '<br>';
        fclose($fp366);  
        fclose($fp367);  
        fclose($fp368);  
        
       header("location:index.php");
    }
?>

<?php
$myfile366 = fopen("./file-db/cleared41.txt", "r") or die("Unable to open file!");
$myfile367 = fopen("./file-db/progress41.txt", "r") or die("Unable to open file!");
$myfile368 = fopen("./file-db/issue41.txt", "r") or die("Unable to open file!");
$myText366 = fread($myfile366,filesize("./file-db/cleared41.txt"));
$myText367 = fread($myfile367,filesize("./file-db/progress41.txt"));
$myText368 = fread($myfile368,filesize("./file-db/issue41.txt"));
// echo $myText;
fclose($myfile366);
fclose($myfile367);
fclose($myfile368);
?>