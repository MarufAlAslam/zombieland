<?php
error_reporting(0);
    if(isset($_POST['clear4'])){
        $fp27 = fopen('./file-db/cleared4.txt', 'w');//opens file in append mode  
        $fp28 = fopen('./file-db/progress4.txt', 'w');//opens file in append mode  
        $fp29 = fopen('./file-db/issue4.txt', 'w');//opens file in append mode  
        fwrite($fp27, 'cleared');
        fwrite($fp28, '');
        fwrite($fp29, '');
        echo '<br>';
        fclose($fp27);  
        fclose($fp28);  
        fclose($fp29);  
        
       header("location:index.php");
    }
?>

<?php
$myfile27 = fopen("./file-db/cleared4.txt", "r") or die("Unable to open file!");
$myfile28 = fopen("./file-db/progress4.txt", "r") or die("Unable to open file!");
$myfile29 = fopen("./file-db/issue4.txt", "r") or die("Unable to open file!");
$myText27 = fread($myfile27,filesize("./file-db/cleared4.txt"));
$myText28 = fread($myfile28,filesize("./file-db/progress4.txt"));
$myText29 = fread($myfile29,filesize("./file-db/issue4.txt"));
// echo $myText;
fclose($myfile27);
fclose($myfile28);
fclose($myfil29);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress4'])){
        $fp30 = fopen('./file-db/cleared4.txt', 'w');//opens file in append mode  
        $fp31 = fopen('./file-db/progress4.txt', 'w');//opens file in append mode  
        $fp32 = fopen('./file-db/issue4.txt', 'w');//opens file in append mode  
        fwrite($fp30, '');
        fwrite($fp31, 'progress');
        fwrite($fp32, '');
        echo '<br>';
        fclose($fp30);  
        fclose($fp31);  
        fclose($fp32);  
        
       header("location:index.php");
    }
?>

<?php
$myfile30 = fopen("./file-db/cleared4.txt", "r") or die("Unable to open file!");
$myfile31 = fopen("./file-db/progress4.txt", "r") or die("Unable to open file!");
$myfile32 = fopen("./file-db/issue4.txt", "r") or die("Unable to open file!");
$myText30 = fread($myfile30,filesize("./file-db/cleared4.txt"));
$myText31 = fread($myfile31,filesize("./file-db/progress4.txt"));
$myText32 = fread($myfile32,filesize("./file-db/issue4.txt"));
// echo $myText;
fclose($myfile30);
fclose($myfile31);
fclose($myfile32);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue4'])){
        $fp33 = fopen('./file-db/cleared4.txt', 'w');//opens file in append mode  
        $fp34 = fopen('./file-db/progress4.txt', 'w');//opens file in append mode  
        $fp35 = fopen('./file-db/issue4.txt', 'w');//opens file in append mode  
        fwrite($fp33, '');
        fwrite($fp34, '');
        fwrite($fp35, 'issue');
        echo '<br>';
        fclose($fp33);  
        fclose($fp34);  
        fclose($fp35);  
        
       header("location:index.php");
    }
?>

<?php
$myfile33 = fopen("./file-db/cleared4.txt", "r") or die("Unable to open file!");
$myfile34 = fopen("./file-db/progress4.txt", "r") or die("Unable to open file!");
$myfile35 = fopen("./file-db/issue4.txt", "r") or die("Unable to open file!");
$myText33 = fread($myfile33,filesize("./file-db/cleared4.txt"));
$myText34 = fread($myfile34,filesize("./file-db/progress4.txt"));
$myText35 = fread($myfile35,filesize("./file-db/issue4.txt"));
// echo $myText;
fclose($myfile33);
fclose($myfile34);
fclose($myfile35);
?>