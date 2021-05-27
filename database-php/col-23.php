<?php
error_reporting(0);
    if(isset($_POST['clear23'])){
        $fp198= fopen('./file-db/cleared23.txt', 'w');//opens file in append mode  
        $fp199 = fopen('./file-db/progress23.txt', 'w');//opens file in append mode  
        $fp200 = fopen('./file-db/issue23.txt', 'w');//opens file in append mode  
        fwrite($fp198, 'cleared');
        fwrite($fp199, '');
        fwrite($fp200, '');
        echo '<br>';
        fclose($fp198);  
        fclose($fp199);  
        fclose($fp200);  
        
       header("location:index.php");
    }
?>

<?php
$myfile198= fopen("./file-db/cleared23.txt", "r") or die("Unable to open file!");
$myfile199 = fopen("./file-db/progress23.txt", "r") or die("Unable to open file!");
$myfile200 = fopen("./file-db/issue23.txt", "r") or die("Unable to open file!");
$myText198= fread($myfile198,filesize("./file-db/cleared23.txt"));
$myText199 = fread($myfile199,filesize("./file-db/progress23.txt"));
$myText200 = fread($myfile200,filesize("./file-db/issue23.txt"));
// echo $myText;
fclose($myfile198);
fclose($myfile199);
fclose($myfil200);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress23'])){
        $fp201 = fopen('./file-db/cleared23.txt', 'w');//opens file in append mode  
        $fp202 = fopen('./file-db/progress23.txt', 'w');//opens file in append mode  
        $fp203 = fopen('./file-db/issue23.txt', 'w');//opens file in append mode  
        fwrite($fp201, '');
        fwrite($fp202, 'progress');
        fwrite($fp203, '');
        echo '<br>';
        fclose($fp201);  
        fclose($fp202);  
        fclose($fp203);  
        
       header("location:index.php");
    }
?>

<?php
$myfile201 = fopen("./file-db/cleared23.txt", "r") or die("Unable to open file!");
$myfile202 = fopen("./file-db/progress23.txt", "r") or die("Unable to open file!");
$myfile203 = fopen("./file-db/issue23.txt", "r") or die("Unable to open file!");
$myText201 = fread($myfile201,filesize("./file-db/cleared23.txt"));
$myText202 = fread($myfile202,filesize("./file-db/progress23.txt"));
$myText203 = fread($myfile203,filesize("./file-db/issue23.txt"));
// echo $myText;
fclose($myfile201);
fclose($myfile202);
fclose($myfile203);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue23'])){
        $fp204 = fopen('./file-db/cleared23.txt', 'w');//opens file in append mode  
        $fp205 = fopen('./file-db/progress23.txt', 'w');//opens file in append mode  
        $fp206 = fopen('./file-db/issue23.txt', 'w');//opens file in append mode  
        fwrite($fp204, '');
        fwrite($fp205, '');
        fwrite($fp206, 'issue');
        echo '<br>';
        fclose($fp204);  
        fclose($fp205);  
        fclose($fp206);  
        
       header("location:index.php");
    }
?>

<?php
$myfile204 = fopen("./file-db/cleared23.txt", "r") or die("Unable to open file!");
$myfile205 = fopen("./file-db/progress23.txt", "r") or die("Unable to open file!");
$myfile206 = fopen("./file-db/issue23.txt", "r") or die("Unable to open file!");
$myText204 = fread($myfile204,filesize("./file-db/cleared23.txt"));
$myText205 = fread($myfile205,filesize("./file-db/progress23.txt"));
$myText206 = fread($myfile206,filesize("./file-db/issue23.txt"));
// echo $myText;
fclose($myfile204);
fclose($myfile205);
fclose($myfile206);
?>