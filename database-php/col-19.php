<?php
error_reporting(0);
    if(isset($_POST['clear19'])){
        $fp162= fopen('./file-db/cleared19.txt', 'w');//opens file in append mode  
        $fp163 = fopen('./file-db/progress19.txt', 'w');//opens file in append mode  
        $fp164 = fopen('./file-db/issue19.txt', 'w');//opens file in append mode  
        fwrite($fp162, 'cleared');
        fwrite($fp163, '');
        fwrite($fp164, '');
        echo '<br>';
        fclose($fp162);  
        fclose($fp163);  
        fclose($fp164);  
        
       header("location:index.php");
    }
?>

<?php
$myfile162= fopen("./file-db/cleared19.txt", "r") or die("Unable to open file!");
$myfile163 = fopen("./file-db/progress19.txt", "r") or die("Unable to open file!");
$myfile164 = fopen("./file-db/issue19.txt", "r") or die("Unable to open file!");
$myText162= fread($myfile162,filesize("./file-db/cleared19.txt"));
$myText163 = fread($myfile163,filesize("./file-db/progress19.txt"));
$myText164 = fread($myfile164,filesize("./file-db/issue19.txt"));
// echo $myText;
fclose($myfile162);
fclose($myfile163);
fclose($myfil164);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress19'])){
        $fp165 = fopen('./file-db/cleared19.txt', 'w');//opens file in append mode  
        $fp166 = fopen('./file-db/progress19.txt', 'w');//opens file in append mode  
        $fp167 = fopen('./file-db/issue19.txt', 'w');//opens file in append mode  
        fwrite($fp165, '');
        fwrite($fp166, 'progress');
        fwrite($fp167, '');
        echo '<br>';
        fclose($fp165);  
        fclose($fp166);  
        fclose($fp167);  
        
       header("location:index.php");
    }
?>

<?php
$myfile165 = fopen("./file-db/cleared19.txt", "r") or die("Unable to open file!");
$myfile166 = fopen("./file-db/progress19.txt", "r") or die("Unable to open file!");
$myfile167 = fopen("./file-db/issue19.txt", "r") or die("Unable to open file!");
$myText165 = fread($myfile165,filesize("./file-db/cleared19.txt"));
$myText166 = fread($myfile166,filesize("./file-db/progress19.txt"));
$myText167 = fread($myfile167,filesize("./file-db/issue19.txt"));
// echo $myText;
fclose($myfile165);
fclose($myfile166);
fclose($myfile167);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue19'])){
        $fp168 = fopen('./file-db/cleared19.txt', 'w');//opens file in append mode  
        $fp169 = fopen('./file-db/progress19.txt', 'w');//opens file in append mode  
        $fp170 = fopen('./file-db/issue19.txt', 'w');//opens file in append mode  
        fwrite($fp168, '');
        fwrite($fp169, '');
        fwrite($fp170, 'issue');
        echo '<br>';
        fclose($fp168);  
        fclose($fp169);  
        fclose($fp170);  
        
       header("location:index.php");
    }
?>

<?php
$myfile168 = fopen("./file-db/cleared19.txt", "r") or die("Unable to open file!");
$myfile169 = fopen("./file-db/progress19.txt", "r") or die("Unable to open file!");
$myfile170 = fopen("./file-db/issue19.txt", "r") or die("Unable to open file!");
$myText168 = fread($myfile168,filesize("./file-db/cleared19.txt"));
$myText169 = fread($myfile169,filesize("./file-db/progress19.txt"));
$myText170 = fread($myfile170,filesize("./file-db/issue19.txt"));
// echo $myText;
fclose($myfile168);
fclose($myfile169);
fclose($myfile170);
?>