<?php
error_reporting(0);
    if(isset($_POST['clear58'])){
        $fp513= fopen('./file-db/cleared58.txt', 'w');//opens file in append mode  
        $fp514 = fopen('./file-db/progress58.txt', 'w');//opens file in append mode  
        $fp515 = fopen('./file-db/issue58.txt', 'w');//opens file in append mode  
        fwrite($fp513, 'cleared');
        fwrite($fp514, '');
        fwrite($fp515, '');
        echo '<br>';
        fclose($fp513);  
        fclose($fp514);  
        fclose($fp515);  
        
       header("location:index.php");
    }
?>

<?php
$myfile513= fopen("./file-db/cleared58.txt", "r") or die("Unable to open file!");
$myfile514 = fopen("./file-db/progress58.txt", "r") or die("Unable to open file!");
$myfile515 = fopen("./file-db/issue58.txt", "r") or die("Unable to open file!");
$myText513= fread($myfile513,filesize("./file-db/cleared58.txt"));
$myText514 = fread($myfile514,filesize("./file-db/progress58.txt"));
$myText515 = fread($myfile515,filesize("./file-db/issue58.txt"));
// echo $myText;
fclose($myfile513);
fclose($myfile514);
fclose($myfil515);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress58'])){
        $fp516 = fopen('./file-db/cleared58.txt', 'w');//opens file in append mode  
        $fp517 = fopen('./file-db/progress58.txt', 'w');//opens file in append mode  
        $fp518 = fopen('./file-db/issue58.txt', 'w');//opens file in append mode  
        fwrite($fp516, '');
        fwrite($fp517, 'progress');
        fwrite($fp518, '');
        echo '<br>';
        fclose($fp516);  
        fclose($fp517);  
        fclose($fp518);  
        
       header("location:index.php");
    }
?>

<?php
$myfile516 = fopen("./file-db/cleared58.txt", "r") or die("Unable to open file!");
$myfile517 = fopen("./file-db/progress58.txt", "r") or die("Unable to open file!");
$myfile518 = fopen("./file-db/issue58.txt", "r") or die("Unable to open file!");
$myText516 = fread($myfile516,filesize("./file-db/cleared58.txt"));
$myText517 = fread($myfile517,filesize("./file-db/progress58.txt"));
$myText518 = fread($myfile518,filesize("./file-db/issue58.txt"));
// echo $myText;
fclose($myfile516);
fclose($myfile518);
fclose($myfile518);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue58'])){
        $fp519 = fopen('./file-db/cleared58.txt', 'w');//opens file in append mode  
        $fp520 = fopen('./file-db/progress58.txt', 'w');//opens file in append mode  
        $fp521 = fopen('./file-db/issue58.txt', 'w');//opens file in append mode  
        fwrite($fp519, '');
        fwrite($fp520, '');
        fwrite($fp521, 'issue');
        echo '<br>';
        fclose($fp519);  
        fclose($fp520);  
        fclose($fp521);  
        
       header("location:index.php");
    }
?>

<?php
$myfile519 = fopen("./file-db/cleared58.txt", "r") or die("Unable to open file!");
$myfile520 = fopen("./file-db/progress58.txt", "r") or die("Unable to open file!");
$myfile521 = fopen("./file-db/issue58.txt", "r") or die("Unable to open file!");
$myText519 = fread($myfile519,filesize("./file-db/cleared58.txt"));
$myText520 = fread($myfile520,filesize("./file-db/progress58.txt"));
$myText521 = fread($myfile521,filesize("./file-db/issue58.txt"));
// echo $myText;
fclose($myfile519);
fclose($myfile520);
fclose($myfile521);
?>