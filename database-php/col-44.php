<?php
error_reporting(0);
    if(isset($_POST['clear44'])){
        $fp387= fopen('./file-db/cleared44.txt', 'w');//opens file in append mode  
        $fp388 = fopen('./file-db/progress44.txt', 'w');//opens file in append mode  
        $fp389 = fopen('./file-db/issue44.txt', 'w');//opens file in append mode  
        fwrite($fp387, 'cleared');
        fwrite($fp388, '');
        fwrite($fp389, '');
        echo '<br>';
        fclose($fp387);  
        fclose($fp388);  
        fclose($fp389);  
        
       header("location:index.php");
    }
?>

<?php
$myfile387= fopen("./file-db/cleared44.txt", "r") or die("Unable to open file!");
$myfile388 = fopen("./file-db/progress44.txt", "r") or die("Unable to open file!");
$myfile389 = fopen("./file-db/issue44.txt", "r") or die("Unable to open file!");
$myText387= fread($myfile387,filesize("./file-db/cleared44.txt"));
$myText388 = fread($myfile388,filesize("./file-db/progress44.txt"));
$myText389 = fread($myfile389,filesize("./file-db/issue44.txt"));
// echo $myText;
fclose($myfile387);
fclose($myfile388);
fclose($myfil389);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress44'])){
        $fp390 = fopen('./file-db/cleared44.txt', 'w');//opens file in append mode  
        $fp391 = fopen('./file-db/progress44.txt', 'w');//opens file in append mode  
        $fp392 = fopen('./file-db/issue44.txt', 'w');//opens file in append mode  
        fwrite($fp390, '');
        fwrite($fp391, 'progress');
        fwrite($fp392, '');
        echo '<br>';
        fclose($fp390);  
        fclose($fp391);  
        fclose($fp392);  
        
       header("location:index.php");
    }
?>

<?php
$myfile390 = fopen("./file-db/cleared44.txt", "r") or die("Unable to open file!");
$myfile391 = fopen("./file-db/progress44.txt", "r") or die("Unable to open file!");
$myfile392 = fopen("./file-db/issue44.txt", "r") or die("Unable to open file!");
$myText390 = fread($myfile390,filesize("./file-db/cleared44.txt"));
$myText391 = fread($myfile391,filesize("./file-db/progress44.txt"));
$myText392 = fread($myfile392,filesize("./file-db/issue44.txt"));
// echo $myText;
fclose($myfile390);
fclose($myfile392);
fclose($myfile392);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue44'])){
        $fp393 = fopen('./file-db/cleared44.txt', 'w');//opens file in append mode  
        $fp394 = fopen('./file-db/progress44.txt', 'w');//opens file in append mode  
        $fp395 = fopen('./file-db/issue44.txt', 'w');//opens file in append mode  
        fwrite($fp393, '');
        fwrite($fp394, '');
        fwrite($fp395, 'issue');
        echo '<br>';
        fclose($fp393);  
        fclose($fp394);  
        fclose($fp395);  
        
       header("location:index.php");
    }
?>

<?php
$myfile393 = fopen("./file-db/cleared44.txt", "r") or die("Unable to open file!");
$myfile394 = fopen("./file-db/progress44.txt", "r") or die("Unable to open file!");
$myfile395 = fopen("./file-db/issue44.txt", "r") or die("Unable to open file!");
$myText393 = fread($myfile393,filesize("./file-db/cleared44.txt"));
$myText394 = fread($myfile394,filesize("./file-db/progress44.txt"));
$myText395 = fread($myfile395,filesize("./file-db/issue44.txt"));
// echo $myText;
fclose($myfile393);
fclose($myfile394);
fclose($myfile395);
?>