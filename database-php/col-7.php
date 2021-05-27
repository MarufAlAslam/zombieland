<?php
error_reporting(0);
    if(isset($_POST['clear7'])){
        $fp54= fopen('./file-db/cleared7.txt', 'w');//opens file in append mode  
        $fp55 = fopen('./file-db/progress7.txt', 'w');//opens file in append mode  
        $fp56 = fopen('./file-db/issue7.txt', 'w');//opens file in append mode  
        fwrite($fp54, 'cleared');
        fwrite($fp55, '');
        fwrite($fp56, '');
        echo '<br>';
        fclose($fp54);  
        fclose($fp55);  
        fclose($fp56);  
        
       header("location:index.php");
    }
?>

<?php
$myfile54= fopen("./file-db/cleared7.txt", "r") or die("Unable to open file!");
$myfile55 = fopen("./file-db/progress7.txt", "r") or die("Unable to open file!");
$myfile56 = fopen("./file-db/issue7.txt", "r") or die("Unable to open file!");
$myText54= fread($myfile54,filesize("./file-db/cleared7.txt"));
$myText55 = fread($myfile55,filesize("./file-db/progress7.txt"));
$myText56 = fread($myfile56,filesize("./file-db/issue7.txt"));
// echo $myText;
fclose($myfile54);
fclose($myfile55);
fclose($myfil56);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress7'])){
        $fp57 = fopen('./file-db/cleared7.txt', 'w');//opens file in append mode  
        $fp58 = fopen('./file-db/progress7.txt', 'w');//opens file in append mode  
        $fp59 = fopen('./file-db/issue7.txt', 'w');//opens file in append mode  
        fwrite($fp57, '');
        fwrite($fp58, 'progress');
        fwrite($fp59, '');
        echo '<br>';
        fclose($fp57);  
        fclose($fp58);  
        fclose($fp59);  
        
       header("location:index.php");
    }
?>

<?php
$myfile57 = fopen("./file-db/cleared7.txt", "r") or die("Unable to open file!");
$myfile58 = fopen("./file-db/progress7.txt", "r") or die("Unable to open file!");
$myfile59 = fopen("./file-db/issue7.txt", "r") or die("Unable to open file!");
$myText57 = fread($myfile57,filesize("./file-db/cleared7.txt"));
$myText58 = fread($myfile58,filesize("./file-db/progress7.txt"));
$myText59 = fread($myfile59,filesize("./file-db/issue7.txt"));
// echo $myText;
fclose($myfile57);
fclose($myfile58);
fclose($myfile59);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue7'])){
        $fp60 = fopen('./file-db/cleared7.txt', 'w');//opens file in append mode  
        $fp61 = fopen('./file-db/progress7.txt', 'w');//opens file in append mode  
        $fp62 = fopen('./file-db/issue7.txt', 'w');//opens file in append mode  
        fwrite($fp60, '');
        fwrite($fp61, '');
        fwrite($fp62, 'issue');
        echo '<br>';
        fclose($fp60);  
        fclose($fp61);  
        fclose($fp62);  
        
       header("location:index.php");
    }
?>

<?php
$myfile60 = fopen("./file-db/cleared7.txt", "r") or die("Unable to open file!");
$myfile61 = fopen("./file-db/progress7.txt", "r") or die("Unable to open file!");
$myfile62 = fopen("./file-db/issue7.txt", "r") or die("Unable to open file!");
$myText60 = fread($myfile60,filesize("./file-db/cleared7.txt"));
$myText61 = fread($myfile61,filesize("./file-db/progress7.txt"));
$myText62 = fread($myfile62,filesize("./file-db/issue7.txt"));
// echo $myText;
fclose($myfile60);
fclose($myfile61);
fclose($myfile62);
?>