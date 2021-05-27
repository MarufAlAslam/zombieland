<?php
error_reporting(0);
    if(isset($_POST['clear50'])){
        $fp441= fopen('./file-db/cleared50.txt', 'w');//opens file in append mode  
        $fp442 = fopen('./file-db/progress50.txt', 'w');//opens file in append mode  
        $fp443 = fopen('./file-db/issue50.txt', 'w');//opens file in append mode  
        fwrite($fp441, 'cleared');
        fwrite($fp442, '');
        fwrite($fp443, '');
        echo '<br>';
        fclose($fp441);  
        fclose($fp442);  
        fclose($fp443);  
        
       header("location:index.php");
    }
?>

<?php
$myfile441= fopen("./file-db/cleared50.txt", "r") or die("Unable to open file!");
$myfile442 = fopen("./file-db/progress50.txt", "r") or die("Unable to open file!");
$myfile443 = fopen("./file-db/issue50.txt", "r") or die("Unable to open file!");
$myText441= fread($myfile441,filesize("./file-db/cleared50.txt"));
$myText442 = fread($myfile442,filesize("./file-db/progress50.txt"));
$myText443 = fread($myfile443,filesize("./file-db/issue50.txt"));
// echo $myText;
fclose($myfile441);
fclose($myfile442);
fclose($myfil443);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress50'])){
        $fp444 = fopen('./file-db/cleared50.txt', 'w');//opens file in append mode  
        $fp445 = fopen('./file-db/progress50.txt', 'w');//opens file in append mode  
        $fp446 = fopen('./file-db/issue50.txt', 'w');//opens file in append mode  
        fwrite($fp444, '');
        fwrite($fp445, 'progress');
        fwrite($fp446, '');
        echo '<br>';
        fclose($fp444);  
        fclose($fp445);  
        fclose($fp446);  
        
       header("location:index.php");
    }
?>

<?php
$myfile444 = fopen("./file-db/cleared50.txt", "r") or die("Unable to open file!");
$myfile445 = fopen("./file-db/progress50.txt", "r") or die("Unable to open file!");
$myfile446 = fopen("./file-db/issue50.txt", "r") or die("Unable to open file!");
$myText444 = fread($myfile444,filesize("./file-db/cleared50.txt"));
$myText445 = fread($myfile445,filesize("./file-db/progress50.txt"));
$myText446 = fread($myfile446,filesize("./file-db/issue50.txt"));
// echo $myText;
fclose($myfile444);
fclose($myfile446);
fclose($myfile446);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue50'])){
        $fp447 = fopen('./file-db/cleared50.txt', 'w');//opens file in append mode  
        $fp448 = fopen('./file-db/progress50.txt', 'w');//opens file in append mode  
        $fp449 = fopen('./file-db/issue50.txt', 'w');//opens file in append mode  
        fwrite($fp447, '');
        fwrite($fp448, '');
        fwrite($fp449, 'issue');
        echo '<br>';
        fclose($fp447);  
        fclose($fp448);  
        fclose($fp449);  
        
       header("location:index.php");
    }
?>

<?php
$myfile447 = fopen("./file-db/cleared50.txt", "r") or die("Unable to open file!");
$myfile448 = fopen("./file-db/progress50.txt", "r") or die("Unable to open file!");
$myfile449 = fopen("./file-db/issue50.txt", "r") or die("Unable to open file!");
$myText447 = fread($myfile447,filesize("./file-db/cleared50.txt"));
$myText448 = fread($myfile448,filesize("./file-db/progress50.txt"));
$myText449 = fread($myfile449,filesize("./file-db/issue50.txt"));
// echo $myText;
fclose($myfile447);
fclose($myfile448);
fclose($myfile449);
?>