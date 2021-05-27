<?php
error_reporting(0);
    if(isset($_POST['clear15'])){
        $fp126= fopen('./file-db/cleared15.txt', 'w');//opens file in append mode  
        $fp127 = fopen('./file-db/progress15.txt', 'w');//opens file in append mode  
        $fp128 = fopen('./file-db/issue15.txt', 'w');//opens file in append mode  
        fwrite($fp126, 'cleared');
        fwrite($fp127, '');
        fwrite($fp128, '');
        echo '<br>';
        fclose($fp126);  
        fclose($fp127);  
        fclose($fp128);  
        
       header("location:index.php");
    }
?>

<?php
$myfile126= fopen("./file-db/cleared15.txt", "r") or die("Unable to open file!");
$myfile127 = fopen("./file-db/progress15.txt", "r") or die("Unable to open file!");
$myfile128 = fopen("./file-db/issue15.txt", "r") or die("Unable to open file!");
$myText126= fread($myfile126,filesize("./file-db/cleared15.txt"));
$myText127 = fread($myfile127,filesize("./file-db/progress15.txt"));
$myText128 = fread($myfile128,filesize("./file-db/issue15.txt"));
// echo $myText;
fclose($myfile126);
fclose($myfile127);
fclose($myfil128);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress15'])){
        $fp129 = fopen('./file-db/cleared15.txt', 'w');//opens file in append mode  
        $fp130 = fopen('./file-db/progress15.txt', 'w');//opens file in append mode  
        $fp131 = fopen('./file-db/issue15.txt', 'w');//opens file in append mode  
        fwrite($fp129, '');
        fwrite($fp130, 'progress');
        fwrite($fp131, '');
        echo '<br>';
        fclose($fp129);  
        fclose($fp130);  
        fclose($fp131);  
        
       header("location:index.php");
    }
?>

<?php
$myfile129 = fopen("./file-db/cleared15.txt", "r") or die("Unable to open file!");
$myfile130 = fopen("./file-db/progress15.txt", "r") or die("Unable to open file!");
$myfile131 = fopen("./file-db/issue15.txt", "r") or die("Unable to open file!");
$myText129 = fread($myfile129,filesize("./file-db/cleared15.txt"));
$myText130 = fread($myfile130,filesize("./file-db/progress15.txt"));
$myText131 = fread($myfile131,filesize("./file-db/issue15.txt"));
// echo $myText;
fclose($myfile129);
fclose($myfile130);
fclose($myfile131);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue15'])){
        $fp132 = fopen('./file-db/cleared15.txt', 'w');//opens file in append mode  
        $fp133 = fopen('./file-db/progress15.txt', 'w');//opens file in append mode  
        $fp134 = fopen('./file-db/issue15.txt', 'w');//opens file in append mode  
        fwrite($fp132, '');
        fwrite($fp133, '');
        fwrite($fp134, 'issue');
        echo '<br>';
        fclose($fp132);  
        fclose($fp133);  
        fclose($fp134);  
        
       header("location:index.php");
    }
?>

<?php
$myfile132 = fopen("./file-db/cleared15.txt", "r") or die("Unable to open file!");
$myfile133 = fopen("./file-db/progress15.txt", "r") or die("Unable to open file!");
$myfile134 = fopen("./file-db/issue15.txt", "r") or die("Unable to open file!");
$myText132 = fread($myfile132,filesize("./file-db/cleared15.txt"));
$myText133 = fread($myfile133,filesize("./file-db/progress15.txt"));
$myText134 = fread($myfile134,filesize("./file-db/issue15.txt"));
// echo $myText;
fclose($myfile132);
fclose($myfile133);
fclose($myfile134);
?>