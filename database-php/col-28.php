<?php
error_reporting(0);
    if(isset($_POST['clear28'])){
        $fp243= fopen('./file-db/cleared28.txt', 'w');//opens file in append mode  
        $fp244 = fopen('./file-db/progress28.txt', 'w');//opens file in append mode  
        $fp245 = fopen('./file-db/issue28.txt', 'w');//opens file in append mode  
        fwrite($fp243, 'cleared');
        fwrite($fp244, '');
        fwrite($fp245, '');
        echo '<br>';
        fclose($fp243);  
        fclose($fp244);  
        fclose($fp245);  
        
       header("location:index.php");
    }
?>

<?php
$myfile243= fopen("./file-db/cleared28.txt", "r") or die("Unable to open file!");
$myfile244 = fopen("./file-db/progress28.txt", "r") or die("Unable to open file!");
$myfile245 = fopen("./file-db/issue28.txt", "r") or die("Unable to open file!");
$myText243= fread($myfile243,filesize("./file-db/cleared28.txt"));
$myText244 = fread($myfile244,filesize("./file-db/progress28.txt"));
$myText245 = fread($myfile245,filesize("./file-db/issue28.txt"));
// echo $myText;
fclose($myfile243);
fclose($myfile244);
fclose($myfil245);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress28'])){
        $fp246 = fopen('./file-db/cleared28.txt', 'w');//opens file in append mode  
        $fp247 = fopen('./file-db/progress28.txt', 'w');//opens file in append mode  
        $fp248 = fopen('./file-db/issue28.txt', 'w');//opens file in append mode  
        fwrite($fp246, '');
        fwrite($fp247, 'progress');
        fwrite($fp248, '');
        echo '<br>';
        fclose($fp246);  
        fclose($fp247);  
        fclose($fp248);  
        
       header("location:index.php");
    }
?>

<?php
$myfile246 = fopen("./file-db/cleared28.txt", "r") or die("Unable to open file!");
$myfile247 = fopen("./file-db/progress28.txt", "r") or die("Unable to open file!");
$myfile248 = fopen("./file-db/issue28.txt", "r") or die("Unable to open file!");
$myText246 = fread($myfile246,filesize("./file-db/cleared28.txt"));
$myText247 = fread($myfile247,filesize("./file-db/progress28.txt"));
$myText248 = fread($myfile248,filesize("./file-db/issue28.txt"));
// echo $myText;
fclose($myfile246);
fclose($myfile247);
fclose($myfile248);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue28'])){
        $fp249 = fopen('./file-db/cleared28.txt', 'w');//opens file in append mode  
        $fp250 = fopen('./file-db/progress28.txt', 'w');//opens file in append mode  
        $fp251 = fopen('./file-db/issue28.txt', 'w');//opens file in append mode  
        fwrite($fp249, '');
        fwrite($fp250, '');
        fwrite($fp251, 'issue');
        echo '<br>';
        fclose($fp249);  
        fclose($fp250);  
        fclose($fp251);  
        
       header("location:index.php");
    }
?>

<?php
$myfile249 = fopen("./file-db/cleared28.txt", "r") or die("Unable to open file!");
$myfile250 = fopen("./file-db/progress28.txt", "r") or die("Unable to open file!");
$myfile251 = fopen("./file-db/issue28.txt", "r") or die("Unable to open file!");
$myText249 = fread($myfile249,filesize("./file-db/cleared28.txt"));
$myText250 = fread($myfile250,filesize("./file-db/progress28.txt"));
$myText251 = fread($myfile251,filesize("./file-db/issue28.txt"));
// echo $myText;
fclose($myfile249);
fclose($myfile250);
fclose($myfile251);
?>