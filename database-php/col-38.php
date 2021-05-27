<?php
error_reporting(0);
    if(isset($_POST['clear38'])){
        $fp333= fopen('./file-db/cleared38.txt', 'w');//opens file in append mode  
        $fp334 = fopen('./file-db/progress38.txt', 'w');//opens file in append mode  
        $fp335 = fopen('./file-db/issue38.txt', 'w');//opens file in append mode  
        fwrite($fp333, 'cleared');
        fwrite($fp334, '');
        fwrite($fp335, '');
        echo '<br>';
        fclose($fp333);  
        fclose($fp334);  
        fclose($fp335);  
        
       header("location:index.php");
    }
?>

<?php
$myfile333= fopen("./file-db/cleared38.txt", "r") or die("Unable to open file!");
$myfile334 = fopen("./file-db/progress38.txt", "r") or die("Unable to open file!");
$myfile335 = fopen("./file-db/issue38.txt", "r") or die("Unable to open file!");
$myText333= fread($myfile333,filesize("./file-db/cleared38.txt"));
$myText334 = fread($myfile334,filesize("./file-db/progress38.txt"));
$myText335 = fread($myfile335,filesize("./file-db/issue38.txt"));
// echo $myText;
fclose($myfile333);
fclose($myfile334);
fclose($myfil335);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress38'])){
        $fp336 = fopen('./file-db/cleared38.txt', 'w');//opens file in append mode  
        $fp337 = fopen('./file-db/progress38.txt', 'w');//opens file in append mode  
        $fp338 = fopen('./file-db/issue38.txt', 'w');//opens file in append mode  
        fwrite($fp336, '');
        fwrite($fp337, 'progress');
        fwrite($fp338, '');
        echo '<br>';
        fclose($fp336);  
        fclose($fp337);  
        fclose($fp338);  
        
       header("location:index.php");
    }
?>

<?php
$myfile336 = fopen("./file-db/cleared38.txt", "r") or die("Unable to open file!");
$myfile337 = fopen("./file-db/progress38.txt", "r") or die("Unable to open file!");
$myfile338 = fopen("./file-db/issue38.txt", "r") or die("Unable to open file!");
$myText336 = fread($myfile336,filesize("./file-db/cleared38.txt"));
$myText337 = fread($myfile337,filesize("./file-db/progress38.txt"));
$myText338 = fread($myfile338,filesize("./file-db/issue38.txt"));
// echo $myText;
fclose($myfile336);
fclose($myfile338);
fclose($myfile338);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue38'])){
        $fp339 = fopen('./file-db/cleared38.txt', 'w');//opens file in append mode  
        $fp340 = fopen('./file-db/progress38.txt', 'w');//opens file in append mode  
        $fp341 = fopen('./file-db/issue38.txt', 'w');//opens file in append mode  
        fwrite($fp339, '');
        fwrite($fp340, '');
        fwrite($fp341, 'issue');
        echo '<br>';
        fclose($fp339);  
        fclose($fp340);  
        fclose($fp341);  
        
       header("location:index.php");
    }
?>

<?php
$myfile339 = fopen("./file-db/cleared38.txt", "r") or die("Unable to open file!");
$myfile340 = fopen("./file-db/progress38.txt", "r") or die("Unable to open file!");
$myfile341 = fopen("./file-db/issue38.txt", "r") or die("Unable to open file!");
$myText339 = fread($myfile339,filesize("./file-db/cleared38.txt"));
$myText340 = fread($myfile340,filesize("./file-db/progress38.txt"));
$myText341 = fread($myfile341,filesize("./file-db/issue38.txt"));
// echo $myText;
fclose($myfile339);
fclose($myfile340);
fclose($myfile341);
?>