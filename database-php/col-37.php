<?php
error_reporting(0);
    if(isset($_POST['clear37'])){
        $fp324= fopen('./file-db/cleared37.txt', 'w');//opens file in append mode  
        $fp325 = fopen('./file-db/progress37.txt', 'w');//opens file in append mode  
        $fp326 = fopen('./file-db/issue37.txt', 'w');//opens file in append mode  
        fwrite($fp324, 'cleared');
        fwrite($fp325, '');
        fwrite($fp326, '');
        echo '<br>';
        fclose($fp324);  
        fclose($fp325);  
        fclose($fp326);  
        
       header("location:index.php");
    }
?>

<?php
$myfile324= fopen("./file-db/cleared37.txt", "r") or die("Unable to open file!");
$myfile325 = fopen("./file-db/progress37.txt", "r") or die("Unable to open file!");
$myfile326 = fopen("./file-db/issue37.txt", "r") or die("Unable to open file!");
$myText324= fread($myfile324,filesize("./file-db/cleared37.txt"));
$myText325 = fread($myfile325,filesize("./file-db/progress37.txt"));
$myText326 = fread($myfile326,filesize("./file-db/issue37.txt"));
// echo $myText;
fclose($myfile324);
fclose($myfile325);
fclose($myfil326);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress37'])){
        $fp327 = fopen('./file-db/cleared37.txt', 'w');//opens file in append mode  
        $fp328 = fopen('./file-db/progress37.txt', 'w');//opens file in append mode  
        $fp329 = fopen('./file-db/issue37.txt', 'w');//opens file in append mode  
        fwrite($fp327, '');
        fwrite($fp328, 'progress');
        fwrite($fp329, '');
        echo '<br>';
        fclose($fp327);  
        fclose($fp328);  
        fclose($fp329);  
        
       header("location:index.php");
    }
?>

<?php
$myfile327 = fopen("./file-db/cleared37.txt", "r") or die("Unable to open file!");
$myfile328 = fopen("./file-db/progress37.txt", "r") or die("Unable to open file!");
$myfile329 = fopen("./file-db/issue37.txt", "r") or die("Unable to open file!");
$myText327 = fread($myfile327,filesize("./file-db/cleared37.txt"));
$myText328 = fread($myfile328,filesize("./file-db/progress37.txt"));
$myText329 = fread($myfile329,filesize("./file-db/issue37.txt"));
// echo $myText;
fclose($myfile327);
fclose($myfile328);
fclose($myfile329);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue37'])){
        $fp330 = fopen('./file-db/cleared37.txt', 'w');//opens file in append mode  
        $fp331 = fopen('./file-db/progress37.txt', 'w');//opens file in append mode  
        $fp332 = fopen('./file-db/issue37.txt', 'w');//opens file in append mode  
        fwrite($fp330, '');
        fwrite($fp331, '');
        fwrite($fp332, 'issue');
        echo '<br>';
        fclose($fp330);  
        fclose($fp331);  
        fclose($fp332);  
        
       header("location:index.php");
    }
?>

<?php
$myfile330 = fopen("./file-db/cleared37.txt", "r") or die("Unable to open file!");
$myfile331 = fopen("./file-db/progress37.txt", "r") or die("Unable to open file!");
$myfile332 = fopen("./file-db/issue37.txt", "r") or die("Unable to open file!");
$myText330 = fread($myfile330,filesize("./file-db/cleared37.txt"));
$myText331 = fread($myfile331,filesize("./file-db/progress37.txt"));
$myText332 = fread($myfile332,filesize("./file-db/issue37.txt"));
// echo $myText;
fclose($myfile330);
fclose($myfile331);
fclose($myfile332);
?>