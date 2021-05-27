<?php
error_reporting(0);
    if(isset($_POST['clear32'])){
        $fp279= fopen('./file-db/cleared32.txt', 'w');//opens file in append mode  
        $fp280 = fopen('./file-db/progress32.txt', 'w');//opens file in append mode  
        $fp281 = fopen('./file-db/issue32.txt', 'w');//opens file in append mode  
        fwrite($fp279, 'cleared');
        fwrite($fp280, '');
        fwrite($fp281, '');
        echo '<br>';
        fclose($fp279);  
        fclose($fp280);  
        fclose($fp281);  
        
       header("location:index.php");
    }
?>

<?php
$myfile279= fopen("./file-db/cleared32.txt", "r") or die("Unable to open file!");
$myfile280 = fopen("./file-db/progress32.txt", "r") or die("Unable to open file!");
$myfile281 = fopen("./file-db/issue32.txt", "r") or die("Unable to open file!");
$myText279= fread($myfile279,filesize("./file-db/cleared32.txt"));
$myText280 = fread($myfile280,filesize("./file-db/progress32.txt"));
$myText281 = fread($myfile281,filesize("./file-db/issue32.txt"));
// echo $myText;
fclose($myfile279);
fclose($myfile280);
fclose($myfil281);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress32'])){
        $fp282 = fopen('./file-db/cleared32.txt', 'w');//opens file in append mode  
        $fp283 = fopen('./file-db/progress32.txt', 'w');//opens file in append mode  
        $fp284 = fopen('./file-db/issue32.txt', 'w');//opens file in append mode  
        fwrite($fp282, '');
        fwrite($fp283, 'progress');
        fwrite($fp284, '');
        echo '<br>';
        fclose($fp282);  
        fclose($fp283);  
        fclose($fp284);  
        
       header("location:index.php");
    }
?>

<?php
$myfile282 = fopen("./file-db/cleared32.txt", "r") or die("Unable to open file!");
$myfile283 = fopen("./file-db/progress32.txt", "r") or die("Unable to open file!");
$myfile284 = fopen("./file-db/issue32.txt", "r") or die("Unable to open file!");
$myText282 = fread($myfile282,filesize("./file-db/cleared32.txt"));
$myText283 = fread($myfile283,filesize("./file-db/progress32.txt"));
$myText284 = fread($myfile284,filesize("./file-db/issue32.txt"));
// echo $myText;
fclose($myfile282);
fclose($myfile283);
fclose($myfile284);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue32'])){
        $fp285 = fopen('./file-db/cleared32.txt', 'w');//opens file in append mode  
        $fp286 = fopen('./file-db/progress32.txt', 'w');//opens file in append mode  
        $fp287 = fopen('./file-db/issue32.txt', 'w');//opens file in append mode  
        fwrite($fp285, '');
        fwrite($fp286, '');
        fwrite($fp287, 'issue');
        echo '<br>';
        fclose($fp285);  
        fclose($fp286);  
        fclose($fp287);  
        
       header("location:index.php");
    }
?>

<?php
$myfile285 = fopen("./file-db/cleared32.txt", "r") or die("Unable to open file!");
$myfile286 = fopen("./file-db/progress32.txt", "r") or die("Unable to open file!");
$myfile287 = fopen("./file-db/issue32.txt", "r") or die("Unable to open file!");
$myText285 = fread($myfile285,filesize("./file-db/cleared32.txt"));
$myText286 = fread($myfile286,filesize("./file-db/progress32.txt"));
$myText287 = fread($myfile287,filesize("./file-db/issue32.txt"));
// echo $myText;
fclose($myfile285);
fclose($myfile286);
fclose($myfile287);
?>