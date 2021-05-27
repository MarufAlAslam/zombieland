<?php
error_reporting(0);
    if(isset($_POST['clear55'])){
        $fp486= fopen('./file-db/cleared55.txt', 'w');//opens file in append mode  
        $fp487 = fopen('./file-db/progress55.txt', 'w');//opens file in append mode  
        $fp488 = fopen('./file-db/issue55.txt', 'w');//opens file in append mode  
        fwrite($fp486, 'cleared');
        fwrite($fp487, '');
        fwrite($fp488, '');
        echo '<br>';
        fclose($fp486);  
        fclose($fp487);  
        fclose($fp488);  
        
       header("location:index.php");
    }
?>

<?php
$myfile486= fopen("./file-db/cleared55.txt", "r") or die("Unable to open file!");
$myfile487 = fopen("./file-db/progress55.txt", "r") or die("Unable to open file!");
$myfile488 = fopen("./file-db/issue55.txt", "r") or die("Unable to open file!");
$myText486= fread($myfile486,filesize("./file-db/cleared55.txt"));
$myText487 = fread($myfile487,filesize("./file-db/progress55.txt"));
$myText488 = fread($myfile488,filesize("./file-db/issue55.txt"));
// echo $myText;
fclose($myfile486);
fclose($myfile487);
fclose($myfil488);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress55'])){
        $fp489 = fopen('./file-db/cleared55.txt', 'w');//opens file in append mode  
        $fp490 = fopen('./file-db/progress55.txt', 'w');//opens file in append mode  
        $fp491 = fopen('./file-db/issue55.txt', 'w');//opens file in append mode  
        fwrite($fp489, '');
        fwrite($fp490, 'progress');
        fwrite($fp491, '');
        echo '<br>';
        fclose($fp489);  
        fclose($fp490);  
        fclose($fp491);  
        
       header("location:index.php");
    }
?>

<?php
$myfile489 = fopen("./file-db/cleared55.txt", "r") or die("Unable to open file!");
$myfile490 = fopen("./file-db/progress55.txt", "r") or die("Unable to open file!");
$myfile491 = fopen("./file-db/issue55.txt", "r") or die("Unable to open file!");
$myText489 = fread($myfile489,filesize("./file-db/cleared55.txt"));
$myText490 = fread($myfile490,filesize("./file-db/progress55.txt"));
$myText491 = fread($myfile491,filesize("./file-db/issue55.txt"));
// echo $myText;
fclose($myfile489);
fclose($myfile491);
fclose($myfile491);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue55'])){
        $fp492 = fopen('./file-db/cleared55.txt', 'w');//opens file in append mode  
        $fp493 = fopen('./file-db/progress55.txt', 'w');//opens file in append mode  
        $fp494 = fopen('./file-db/issue55.txt', 'w');//opens file in append mode  
        fwrite($fp492, '');
        fwrite($fp493, '');
        fwrite($fp494, 'issue');
        echo '<br>';
        fclose($fp492);  
        fclose($fp493);  
        fclose($fp494);  
        
       header("location:index.php");
    }
?>

<?php
$myfile492 = fopen("./file-db/cleared55.txt", "r") or die("Unable to open file!");
$myfile493 = fopen("./file-db/progress55.txt", "r") or die("Unable to open file!");
$myfile494 = fopen("./file-db/issue55.txt", "r") or die("Unable to open file!");
$myText492 = fread($myfile492,filesize("./file-db/cleared55.txt"));
$myText493 = fread($myfile493,filesize("./file-db/progress55.txt"));
$myText494 = fread($myfile494,filesize("./file-db/issue55.txt"));
// echo $myText;
fclose($myfile492);
fclose($myfile493);
fclose($myfile494);
?>