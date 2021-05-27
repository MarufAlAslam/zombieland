<?php
error_reporting(0);
    if(isset($_POST['clear60'])){
        $fp531= fopen('./file-db/cleared60.txt', 'w');//opens file in append mode  
        $fp532 = fopen('./file-db/progress60.txt', 'w');//opens file in append mode  
        $fp533 = fopen('./file-db/issue60.txt', 'w');//opens file in append mode  
        fwrite($fp531, 'cleared');
        fwrite($fp532, '');
        fwrite($fp533, '');
        echo '<br>';
        fclose($fp531);  
        fclose($fp532);  
        fclose($fp533);  
        
       header("location:index.php");
    }
?>

<?php
$myfile531= fopen("./file-db/cleared60.txt", "r") or die("Unable to open file!");
$myfile532 = fopen("./file-db/progress60.txt", "r") or die("Unable to open file!");
$myfile533 = fopen("./file-db/issue60.txt", "r") or die("Unable to open file!");
$myText531= fread($myfile531,filesize("./file-db/cleared60.txt"));
$myText532 = fread($myfile532,filesize("./file-db/progress60.txt"));
$myText533 = fread($myfile533,filesize("./file-db/issue60.txt"));
// echo $myText;
fclose($myfile531);
fclose($myfile532);
fclose($myfil533);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress60'])){
        $fp534 = fopen('./file-db/cleared60.txt', 'w');//opens file in append mode  
        $fp535 = fopen('./file-db/progress60.txt', 'w');//opens file in append mode  
        $fp536 = fopen('./file-db/issue60.txt', 'w');//opens file in append mode  
        fwrite($fp534, '');
        fwrite($fp535, 'progress');
        fwrite($fp536, '');
        echo '<br>';
        fclose($fp534);  
        fclose($fp535);  
        fclose($fp536);  
        
       header("location:index.php");
    }
?>

<?php
$myfile534 = fopen("./file-db/cleared60.txt", "r") or die("Unable to open file!");
$myfile535 = fopen("./file-db/progress60.txt", "r") or die("Unable to open file!");
$myfile536 = fopen("./file-db/issue60.txt", "r") or die("Unable to open file!");
$myText534 = fread($myfile534,filesize("./file-db/cleared60.txt"));
$myText535 = fread($myfile535,filesize("./file-db/progress60.txt"));
$myText536 = fread($myfile536,filesize("./file-db/issue60.txt"));
// echo $myText;
fclose($myfile534);
fclose($myfile536);
fclose($myfile536);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue60'])){
        $fp537 = fopen('./file-db/cleared60.txt', 'w');//opens file in append mode  
        $fp538 = fopen('./file-db/progress60.txt', 'w');//opens file in append mode  
        $fp539 = fopen('./file-db/issue60.txt', 'w');//opens file in append mode  
        fwrite($fp537, '');
        fwrite($fp538, '');
        fwrite($fp539, 'issue');
        echo '<br>';
        fclose($fp537);  
        fclose($fp538);  
        fclose($fp539);  
        
       header("location:index.php");
    }
?>

<?php
$myfile537 = fopen("./file-db/cleared60.txt", "r") or die("Unable to open file!");
$myfile538 = fopen("./file-db/progress60.txt", "r") or die("Unable to open file!");
$myfile539 = fopen("./file-db/issue60.txt", "r") or die("Unable to open file!");
$myText537 = fread($myfile537,filesize("./file-db/cleared60.txt"));
$myText538 = fread($myfile538,filesize("./file-db/progress60.txt"));
$myText539 = fread($myfile539,filesize("./file-db/issue60.txt"));
// echo $myText;
fclose($myfile537);
fclose($myfile538);
fclose($myfile539);
?>