<?php
error_reporting(0);
    if(isset($_POST['clear12'])){
        $fp99= fopen('./file-db/cleared12.txt', 'w');//opens file in append mode  
        $fp100 = fopen('./file-db/progress12.txt', 'w');//opens file in append mode  
        $fp101 = fopen('./file-db/issue12.txt', 'w');//opens file in append mode  
        fwrite($fp99, 'cleared');
        fwrite($fp100, '');
        fwrite($fp101, '');
        echo '<br>';
        fclose($fp99);  
        fclose($fp100);  
        fclose($fp101);  
        
       header("location:index.php");
    }
?>

<?php
$myfile99= fopen("./file-db/cleared12.txt", "r") or die("Unable to open file!");
$myfile100 = fopen("./file-db/progress12.txt", "r") or die("Unable to open file!");
$myfile101 = fopen("./file-db/issue12.txt", "r") or die("Unable to open file!");
$myText99= fread($myfile99,filesize("./file-db/cleared12.txt"));
$myText100 = fread($myfile100,filesize("./file-db/progress12.txt"));
$myText101 = fread($myfile101,filesize("./file-db/issue12.txt"));
// echo $myText;
fclose($myfile99);
fclose($myfile100);
fclose($myfil101);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress12'])){
        $fp102 = fopen('./file-db/cleared12.txt', 'w');//opens file in append mode  
        $fp103 = fopen('./file-db/progress12.txt', 'w');//opens file in append mode  
        $fp104 = fopen('./file-db/issue12.txt', 'w');//opens file in append mode  
        fwrite($fp102, '');
        fwrite($fp103, 'progress');
        fwrite($fp104, '');
        echo '<br>';
        fclose($fp102);  
        fclose($fp103);  
        fclose($fp104);  
        
       header("location:index.php");
    }
?>

<?php
$myfile102 = fopen("./file-db/cleared12.txt", "r") or die("Unable to open file!");
$myfile103 = fopen("./file-db/progress12.txt", "r") or die("Unable to open file!");
$myfile104 = fopen("./file-db/issue12.txt", "r") or die("Unable to open file!");
$myText102 = fread($myfile102,filesize("./file-db/cleared12.txt"));
$myText103 = fread($myfile103,filesize("./file-db/progress12.txt"));
$myText104 = fread($myfile104,filesize("./file-db/issue12.txt"));
// echo $myText;
fclose($myfile102);
fclose($myfile103);
fclose($myfile104);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue12'])){
        $fp105 = fopen('./file-db/cleared12.txt', 'w');//opens file in append mode  
        $fp106 = fopen('./file-db/progress12.txt', 'w');//opens file in append mode  
        $fp107 = fopen('./file-db/issue12.txt', 'w');//opens file in append mode  
        fwrite($fp105, '');
        fwrite($fp106, '');
        fwrite($fp107, 'issue');
        echo '<br>';
        fclose($fp105);  
        fclose($fp106);  
        fclose($fp107);  
        
       header("location:index.php");
    }
?>

<?php
$myfile105 = fopen("./file-db/cleared12.txt", "r") or die("Unable to open file!");
$myfile106 = fopen("./file-db/progress12.txt", "r") or die("Unable to open file!");
$myfile107 = fopen("./file-db/issue12.txt", "r") or die("Unable to open file!");
$myText105 = fread($myfile105,filesize("./file-db/cleared12.txt"));
$myText106 = fread($myfile106,filesize("./file-db/progress12.txt"));
$myText107 = fread($myfile107,filesize("./file-db/issue12.txt"));
// echo $myText;
fclose($myfile105);
fclose($myfile106);
fclose($myfile107);
?>