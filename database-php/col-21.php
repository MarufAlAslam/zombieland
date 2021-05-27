<?php
error_reporting(0);
    if(isset($_POST['clear21'])){
        $fp180= fopen('./file-db/cleared21.txt', 'w');//opens file in append mode  
        $fp181 = fopen('./file-db/progress21.txt', 'w');//opens file in append mode  
        $fp182 = fopen('./file-db/issue21.txt', 'w');//opens file in append mode  
        fwrite($fp180, 'cleared');
        fwrite($fp181, '');
        fwrite($fp182, '');
        echo '<br>';
        fclose($fp180);  
        fclose($fp181);  
        fclose($fp182);  
        
       header("location:index.php");
    }
?>

<?php
$myfile180= fopen("./file-db/cleared21.txt", "r") or die("Unable to open file!");
$myfile181 = fopen("./file-db/progress21.txt", "r") or die("Unable to open file!");
$myfile182 = fopen("./file-db/issue21.txt", "r") or die("Unable to open file!");
$myText180= fread($myfile180,filesize("./file-db/cleared21.txt"));
$myText181 = fread($myfile181,filesize("./file-db/progress21.txt"));
$myText182 = fread($myfile182,filesize("./file-db/issue21.txt"));
// echo $myText;
fclose($myfile180);
fclose($myfile181);
fclose($myfil182);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress21'])){
        $fp183 = fopen('./file-db/cleared21.txt', 'w');//opens file in append mode  
        $fp184 = fopen('./file-db/progress21.txt', 'w');//opens file in append mode  
        $fp185 = fopen('./file-db/issue21.txt', 'w');//opens file in append mode  
        fwrite($fp183, '');
        fwrite($fp184, 'progress');
        fwrite($fp185, '');
        echo '<br>';
        fclose($fp183);  
        fclose($fp184);  
        fclose($fp185);  
        
       header("location:index.php");
    }
?>

<?php
$myfile183 = fopen("./file-db/cleared21.txt", "r") or die("Unable to open file!");
$myfile184 = fopen("./file-db/progress21.txt", "r") or die("Unable to open file!");
$myfile185 = fopen("./file-db/issue21.txt", "r") or die("Unable to open file!");
$myText183 = fread($myfile183,filesize("./file-db/cleared21.txt"));
$myText184 = fread($myfile184,filesize("./file-db/progress21.txt"));
$myText185 = fread($myfile185,filesize("./file-db/issue21.txt"));
// echo $myText;
fclose($myfile183);
fclose($myfile184);
fclose($myfile185);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue21'])){
        $fp186 = fopen('./file-db/cleared21.txt', 'w');//opens file in append mode  
        $fp187 = fopen('./file-db/progress21.txt', 'w');//opens file in append mode  
        $fp188 = fopen('./file-db/issue21.txt', 'w');//opens file in append mode  
        fwrite($fp186, '');
        fwrite($fp187, '');
        fwrite($fp188, 'issue');
        echo '<br>';
        fclose($fp186);  
        fclose($fp187);  
        fclose($fp188);  
        
       header("location:index.php");
    }
?>

<?php
$myfile186 = fopen("./file-db/cleared21.txt", "r") or die("Unable to open file!");
$myfile187 = fopen("./file-db/progress21.txt", "r") or die("Unable to open file!");
$myfile188 = fopen("./file-db/issue21.txt", "r") or die("Unable to open file!");
$myText186 = fread($myfile186,filesize("./file-db/cleared21.txt"));
$myText187 = fread($myfile187,filesize("./file-db/progress21.txt"));
$myText188 = fread($myfile188,filesize("./file-db/issue21.txt"));
// echo $myText;
fclose($myfile186);
fclose($myfile187);
fclose($myfile188);
?>