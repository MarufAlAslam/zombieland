<?php
error_reporting(0);
    if(isset($_POST['clear1'])){
        $fp = fopen('./file-db/cleared1.txt', 'w');//opens file in append mode  
        $fp1 = fopen('./file-db/progress1.txt', 'w');//opens file in append mode  
        $fp2 = fopen('./file-db/issue1.txt', 'w');//opens file in append mode  
        fwrite($fp, 'cleared');
        fwrite($fp1, '');
        fwrite($fp2, '');
        echo '<br>';
        fclose($fp);  
        fclose($fp1);  
        fclose($fp2);  
        
       header("location:index.php");
    }
?>

<?php
$myfile = fopen("./file-db/cleared1.txt", "r") or die("Unable to open file!");
$myfile1 = fopen("./file-db/progress1.txt", "r") or die("Unable to open file!");
$myfile2 = fopen("./file-db/issue1.txt", "r") or die("Unable to open file!");
$myText = fread($myfile,filesize("./file-db/cleared1.txt"));
$myText1 = fread($myfile1,filesize("./file-db/progress1.txt"));
$myText2 = fread($myfile2,filesize("./file-db/issue1.txt"));
// echo $myText;
fclose($myfile);
fclose($myfile1);
fclose($myfile2);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress1'])){
        $fp3 = fopen('./file-db/cleared1.txt', 'w');//opens file in append mode  
        $fp4 = fopen('./file-db/progress1.txt', 'w');//opens file in append mode  
        $fp5 = fopen('./file-db/issue1.txt', 'w');//opens file in append mode  
        fwrite($fp3, '');
        fwrite($fp4, 'progress');
        fwrite($fp5, '');
        echo '<br>';
        fclose($fp3);  
        fclose($fp4);  
        fclose($fp5);  
        
       header("location:index.php");
    }
?>

<?php
$myfile3 = fopen("./file-db/cleared1.txt", "r") or die("Unable to open file!");
$myfile4 = fopen("./file-db/progress1.txt", "r") or die("Unable to open file!");
$myfile5 = fopen("./file-db/issue1.txt", "r") or die("Unable to open file!");
$myText3 = fread($myfile3,filesize("./file-db/cleared1.txt"));
$myText4 = fread($myfile4,filesize("./file-db/progress1.txt"));
$myText5 = fread($myfile5,filesize("./file-db/issue1.txt"));
// echo $myText;
fclose($myfile3);
fclose($myfile4);
fclose($myfile5);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue1'])){
        $fp6 = fopen('./file-db/cleared1.txt', 'w');//opens file in append mode  
        $fp7 = fopen('./file-db/progress1.txt', 'w');//opens file in append mode  
        $fp8 = fopen('./file-db/issue1.txt', 'w');//opens file in append mode  
        fwrite($fp6, '');
        fwrite($fp7, '');
        fwrite($fp8, 'issue');
        echo '<br>';
        fclose($fp6);  
        fclose($fp7);  
        fclose($fp8);  
        
       header("location:index.php");
    }
?>

<?php
$myfile6 = fopen("./file-db/cleared1.txt", "r") or die("Unable to open file!");
$myfile7 = fopen("./file-db/progress1.txt", "r") or die("Unable to open file!");
$myfile8 = fopen("./file-db/issue1.txt", "r") or die("Unable to open file!");
$myText6 = fread($myfile6,filesize("./file-db/cleared1.txt"));
$myText7 = fread($myfile7,filesize("./file-db/progress1.txt"));
$myText8 = fread($myfile8,filesize("./file-db/issue1.txt"));
// echo $myText;
fclose($myfile6);
fclose($myfile7);
fclose($myfile8);
?>