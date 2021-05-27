<?php
error_reporting(0);
    if(isset($_POST['clear2'])){
        $fp9 = fopen('./file-db/cleared2.txt', 'w');//opens file in append mode  
        $fp10 = fopen('./file-db/progress2.txt', 'w');//opens file in append mode  
        $f11 = fopen('./file-db/issue2.txt', 'w');//opens file in append mode  
        fwrite($fp9, 'cleared');
        fwrite($fp10, '');
        fwrite($fp11, '');
        echo '<br>';
        fclose($fp9);  
        fclose($fp10);  
        fclose($f11);  
        
       header("location:index.php");
    }
?>

<?php
$myfile9 = fopen("./file-db/cleared2.txt", "r") or die("Unable to open file!");
$myfile10 = fopen("./file-db/progress2.txt", "r") or die("Unable to open file!");
$myfile11 = fopen("./file-db/issue2.txt", "r") or die("Unable to open file!");
$myText9 = fread($myfile9,filesize("./file-db/cleared2.txt"));
$myText10 = fread($myfile10,filesize("./file-db/progress2.txt"));
$myText11 = fread($myfile11,filesize("./file-db/issue2.txt"));
// echo $myText;
fclose($myfile9);
fclose($myfile10);
fclose($myfil11);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress2'])){
        $fp12 = fopen('./file-db/cleared2.txt', 'w');//opens file in append mode  
        $fp13 = fopen('./file-db/progress2.txt', 'w');//opens file in append mode  
        $fp14 = fopen('./file-db/issue2.txt', 'w');//opens file in append mode  
        fwrite($fp12, '');
        fwrite($fp13, 'progress');
        fwrite($fp14, '');
        echo '<br>';
        fclose($fp12);  
        fclose($fp13);  
        fclose($fp14);  
        
       header("location:index.php");
    }
?>

<?php
$myfile12 = fopen("./file-db/cleared2.txt", "r") or die("Unable to open file!");
$myfile13 = fopen("./file-db/progress2.txt", "r") or die("Unable to open file!");
$myfile14 = fopen("./file-db/issue2.txt", "r") or die("Unable to open file!");
$myText12 = fread($myfile12,filesize("./file-db/cleared2.txt"));
$myText13 = fread($myfile13,filesize("./file-db/progress2.txt"));
$myText14 = fread($myfile14,filesize("./file-db/issue2.txt"));
// echo $myText;
fclose($myfile12);
fclose($myfile13);
fclose($myfile14);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue2'])){
        $fp15 = fopen('./file-db/cleared2.txt', 'w');//opens file in append mode  
        $fp16 = fopen('./file-db/progress2.txt', 'w');//opens file in append mode  
        $fp17 = fopen('./file-db/issue2.txt', 'w');//opens file in append mode  
        fwrite($fp15, '');
        fwrite($fp16, '');
        fwrite($fp17, 'issue');
        echo '<br>';
        fclose($fp15);  
        fclose($fp16);  
        fclose($fp17);  
        
       header("location:index.php");
    }
?>

<?php
$myfile15 = fopen("./file-db/cleared2.txt", "r") or die("Unable to open file!");
$myfile16 = fopen("./file-db/progress2.txt", "r") or die("Unable to open file!");
$myfile17 = fopen("./file-db/issue2.txt", "r") or die("Unable to open file!");
$myText15 = fread($myfile15,filesize("./file-db/cleared2.txt"));
$myText16 = fread($myfile16,filesize("./file-db/progress2.txt"));
$myText17 = fread($myfile17,filesize("./file-db/issue2.txt"));
// echo $myText;
fclose($myfile15);
fclose($myfile16);
fclose($myfile17);
?>