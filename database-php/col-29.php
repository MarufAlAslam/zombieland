<?php
error_reporting(0);
    if(isset($_POST['clear29'])){
        $fp252= fopen('./file-db/cleared29.txt', 'w');//opens file in append mode  
        $fp253 = fopen('./file-db/progress29.txt', 'w');//opens file in append mode  
        $fp254 = fopen('./file-db/issue29.txt', 'w');//opens file in append mode  
        fwrite($fp252, 'cleared');
        fwrite($fp253, '');
        fwrite($fp254, '');
        echo '<br>';
        fclose($fp252);  
        fclose($fp253);  
        fclose($fp254);  
        
       header("location:index.php");
    }
?>

<?php
$myfile252= fopen("./file-db/cleared29.txt", "r") or die("Unable to open file!");
$myfile253 = fopen("./file-db/progress29.txt", "r") or die("Unable to open file!");
$myfile254 = fopen("./file-db/issue29.txt", "r") or die("Unable to open file!");
$myText252= fread($myfile252,filesize("./file-db/cleared29.txt"));
$myText253 = fread($myfile253,filesize("./file-db/progress29.txt"));
$myText254 = fread($myfile254,filesize("./file-db/issue29.txt"));
// echo $myText;
fclose($myfile252);
fclose($myfile253);
fclose($myfil254);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress29'])){
        $fp255 = fopen('./file-db/cleared29.txt', 'w');//opens file in append mode  
        $fp256 = fopen('./file-db/progress29.txt', 'w');//opens file in append mode  
        $fp257 = fopen('./file-db/issue29.txt', 'w');//opens file in append mode  
        fwrite($fp255, '');
        fwrite($fp256, 'progress');
        fwrite($fp257, '');
        echo '<br>';
        fclose($fp255);  
        fclose($fp256);  
        fclose($fp257);  
        
       header("location:index.php");
    }
?>

<?php
$myfile255 = fopen("./file-db/cleared29.txt", "r") or die("Unable to open file!");
$myfile256 = fopen("./file-db/progress29.txt", "r") or die("Unable to open file!");
$myfile257 = fopen("./file-db/issue29.txt", "r") or die("Unable to open file!");
$myText255 = fread($myfile255,filesize("./file-db/cleared29.txt"));
$myText256 = fread($myfile256,filesize("./file-db/progress29.txt"));
$myText257 = fread($myfile257,filesize("./file-db/issue29.txt"));
// echo $myText;
fclose($myfile255);
fclose($myfile256);
fclose($myfile257);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue29'])){
        $fp258 = fopen('./file-db/cleared29.txt', 'w');//opens file in append mode  
        $fp259 = fopen('./file-db/progress29.txt', 'w');//opens file in append mode  
        $fp260 = fopen('./file-db/issue29.txt', 'w');//opens file in append mode  
        fwrite($fp258, '');
        fwrite($fp259, '');
        fwrite($fp260, 'issue');
        echo '<br>';
        fclose($fp258);  
        fclose($fp259);  
        fclose($fp260);  
        
       header("location:index.php");
    }
?>

<?php
$myfile258 = fopen("./file-db/cleared29.txt", "r") or die("Unable to open file!");
$myfile259 = fopen("./file-db/progress29.txt", "r") or die("Unable to open file!");
$myfile260 = fopen("./file-db/issue29.txt", "r") or die("Unable to open file!");
$myText258 = fread($myfile258,filesize("./file-db/cleared29.txt"));
$myText259 = fread($myfile259,filesize("./file-db/progress29.txt"));
$myText260 = fread($myfile260,filesize("./file-db/issue29.txt"));
// echo $myText;
fclose($myfile258);
fclose($myfile259);
fclose($myfile260);
?>