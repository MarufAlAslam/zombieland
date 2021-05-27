<?php
error_reporting(0);
    if(isset($_POST['clear26'])){
        $fp225= fopen('./file-db/cleared26.txt', 'w');//opens file in append mode  
        $fp226 = fopen('./file-db/progress26.txt', 'w');//opens file in append mode  
        $fp227 = fopen('./file-db/issue26.txt', 'w');//opens file in append mode  
        fwrite($fp225, 'cleared');
        fwrite($fp226, '');
        fwrite($fp227, '');
        echo '<br>';
        fclose($fp225);  
        fclose($fp226);  
        fclose($fp227);  
        
       header("location:index.php");
    }
?>

<?php
$myfile225= fopen("./file-db/cleared26.txt", "r") or die("Unable to open file!");
$myfile226 = fopen("./file-db/progress26.txt", "r") or die("Unable to open file!");
$myfile227 = fopen("./file-db/issue26.txt", "r") or die("Unable to open file!");
$myText225= fread($myfile225,filesize("./file-db/cleared26.txt"));
$myText226 = fread($myfile226,filesize("./file-db/progress26.txt"));
$myText227 = fread($myfile227,filesize("./file-db/issue26.txt"));
// echo $myText;
fclose($myfile225);
fclose($myfile226);
fclose($myfil227);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress26'])){
        $fp228 = fopen('./file-db/cleared26.txt', 'w');//opens file in append mode  
        $fp229 = fopen('./file-db/progress26.txt', 'w');//opens file in append mode  
        $fp230 = fopen('./file-db/issue26.txt', 'w');//opens file in append mode  
        fwrite($fp228, '');
        fwrite($fp229, 'progress');
        fwrite($fp230, '');
        echo '<br>';
        fclose($fp228);  
        fclose($fp229);  
        fclose($fp230);  
        
       header("location:index.php");
    }
?>

<?php
$myfile228 = fopen("./file-db/cleared26.txt", "r") or die("Unable to open file!");
$myfile229 = fopen("./file-db/progress26.txt", "r") or die("Unable to open file!");
$myfile230 = fopen("./file-db/issue26.txt", "r") or die("Unable to open file!");
$myText228 = fread($myfile228,filesize("./file-db/cleared26.txt"));
$myText229 = fread($myfile229,filesize("./file-db/progress26.txt"));
$myText230 = fread($myfile230,filesize("./file-db/issue26.txt"));
// echo $myText;
fclose($myfile228);
fclose($myfile229);
fclose($myfile230);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue26'])){
        $fp231 = fopen('./file-db/cleared26.txt', 'w');//opens file in append mode  
        $fp232 = fopen('./file-db/progress26.txt', 'w');//opens file in append mode  
        $fp233 = fopen('./file-db/issue26.txt', 'w');//opens file in append mode  
        fwrite($fp231, '');
        fwrite($fp232, '');
        fwrite($fp233, 'issue');
        echo '<br>';
        fclose($fp231);  
        fclose($fp232);  
        fclose($fp233);  
        
       header("location:index.php");
    }
?>

<?php
$myfile231 = fopen("./file-db/cleared26.txt", "r") or die("Unable to open file!");
$myfile232 = fopen("./file-db/progress26.txt", "r") or die("Unable to open file!");
$myfile233 = fopen("./file-db/issue26.txt", "r") or die("Unable to open file!");
$myText231 = fread($myfile231,filesize("./file-db/cleared26.txt"));
$myText232 = fread($myfile232,filesize("./file-db/progress26.txt"));
$myText233 = fread($myfile233,filesize("./file-db/issue26.txt"));
// echo $myText;
fclose($myfile231);
fclose($myfile232);
fclose($myfile233);
?>