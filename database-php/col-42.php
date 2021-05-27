<?php
error_reporting(0);
    if(isset($_POST['clear42'])){
        $fp369= fopen('./file-db/cleared42.txt', 'w');//opens file in append mode  
        $fp370 = fopen('./file-db/progress42.txt', 'w');//opens file in append mode  
        $fp371 = fopen('./file-db/issue42.txt', 'w');//opens file in append mode  
        fwrite($fp369, 'cleared');
        fwrite($fp370, '');
        fwrite($fp371, '');
        echo '<br>';
        fclose($fp369);  
        fclose($fp370);  
        fclose($fp371);  
        
       header("location:index.php");
    }
?>

<?php
$myfile369= fopen("./file-db/cleared42.txt", "r") or die("Unable to open file!");
$myfile370 = fopen("./file-db/progress42.txt", "r") or die("Unable to open file!");
$myfile371 = fopen("./file-db/issue42.txt", "r") or die("Unable to open file!");
$myText369= fread($myfile369,filesize("./file-db/cleared42.txt"));
$myText370 = fread($myfile370,filesize("./file-db/progress42.txt"));
$myText371 = fread($myfile371,filesize("./file-db/issue42.txt"));
// echo $myText;
fclose($myfile369);
fclose($myfile370);
fclose($myfil371);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress42'])){
        $fp372 = fopen('./file-db/cleared42.txt', 'w');//opens file in append mode  
        $fp373 = fopen('./file-db/progress42.txt', 'w');//opens file in append mode  
        $fp374 = fopen('./file-db/issue42.txt', 'w');//opens file in append mode  
        fwrite($fp372, '');
        fwrite($fp373, 'progress');
        fwrite($fp374, '');
        echo '<br>';
        fclose($fp372);  
        fclose($fp373);  
        fclose($fp374);  
        
       header("location:index.php");
    }
?>

<?php
$myfile372 = fopen("./file-db/cleared42.txt", "r") or die("Unable to open file!");
$myfile373 = fopen("./file-db/progress42.txt", "r") or die("Unable to open file!");
$myfile374 = fopen("./file-db/issue42.txt", "r") or die("Unable to open file!");
$myText372 = fread($myfile372,filesize("./file-db/cleared42.txt"));
$myText373 = fread($myfile373,filesize("./file-db/progress42.txt"));
$myText374 = fread($myfile374,filesize("./file-db/issue42.txt"));
// echo $myText;
fclose($myfile372);
fclose($myfile374);
fclose($myfile374);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue42'])){
        $fp375 = fopen('./file-db/cleared42.txt', 'w');//opens file in append mode  
        $fp376 = fopen('./file-db/progress42.txt', 'w');//opens file in append mode  
        $fp377 = fopen('./file-db/issue42.txt', 'w');//opens file in append mode  
        fwrite($fp375, '');
        fwrite($fp376, '');
        fwrite($fp377, 'issue');
        echo '<br>';
        fclose($fp375);  
        fclose($fp376);  
        fclose($fp377);  
        
       header("location:index.php");
    }
?>

<?php
$myfile375 = fopen("./file-db/cleared42.txt", "r") or die("Unable to open file!");
$myfile376 = fopen("./file-db/progress42.txt", "r") or die("Unable to open file!");
$myfile377 = fopen("./file-db/issue42.txt", "r") or die("Unable to open file!");
$myText375 = fread($myfile375,filesize("./file-db/cleared42.txt"));
$myText376 = fread($myfile376,filesize("./file-db/progress42.txt"));
$myText377 = fread($myfile377,filesize("./file-db/issue42.txt"));
// echo $myText;
fclose($myfile375);
fclose($myfile376);
fclose($myfile377);
?>