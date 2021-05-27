<?php
error_reporting(0);
    if(isset($_POST['clear45'])){
        $fp396= fopen('./file-db/cleared45.txt', 'w');//opens file in append mode  
        $fp397 = fopen('./file-db/progress45.txt', 'w');//opens file in append mode  
        $fp398 = fopen('./file-db/issue45.txt', 'w');//opens file in append mode  
        fwrite($fp396, 'cleared');
        fwrite($fp397, '');
        fwrite($fp398, '');
        echo '<br>';
        fclose($fp396);  
        fclose($fp397);  
        fclose($fp398);  
        
       header("location:index.php");
    }
?>

<?php
$myfile396= fopen("./file-db/cleared45.txt", "r") or die("Unable to open file!");
$myfile397 = fopen("./file-db/progress45.txt", "r") or die("Unable to open file!");
$myfile398 = fopen("./file-db/issue45.txt", "r") or die("Unable to open file!");
$myText396= fread($myfile396,filesize("./file-db/cleared45.txt"));
$myText397 = fread($myfile397,filesize("./file-db/progress45.txt"));
$myText398 = fread($myfile398,filesize("./file-db/issue45.txt"));
// echo $myText;
fclose($myfile396);
fclose($myfile397);
fclose($myfil398);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress45'])){
        $fp399 = fopen('./file-db/cleared45.txt', 'w');//opens file in append mode  
        $fp400 = fopen('./file-db/progress45.txt', 'w');//opens file in append mode  
        $fp401 = fopen('./file-db/issue45.txt', 'w');//opens file in append mode  
        fwrite($fp399, '');
        fwrite($fp400, 'progress');
        fwrite($fp401, '');
        echo '<br>';
        fclose($fp399);  
        fclose($fp400);  
        fclose($fp401);  
        
       header("location:index.php");
    }
?>

<?php
$myfile399 = fopen("./file-db/cleared45.txt", "r") or die("Unable to open file!");
$myfile400 = fopen("./file-db/progress45.txt", "r") or die("Unable to open file!");
$myfile401 = fopen("./file-db/issue45.txt", "r") or die("Unable to open file!");
$myText399 = fread($myfile399,filesize("./file-db/cleared45.txt"));
$myText400 = fread($myfile400,filesize("./file-db/progress45.txt"));
$myText401 = fread($myfile401,filesize("./file-db/issue45.txt"));
// echo $myText;
fclose($myfile399);
fclose($myfile401);
fclose($myfile401);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue45'])){
        $fp402 = fopen('./file-db/cleared45.txt', 'w');//opens file in append mode  
        $fp403 = fopen('./file-db/progress45.txt', 'w');//opens file in append mode  
        $fp404 = fopen('./file-db/issue45.txt', 'w');//opens file in append mode  
        fwrite($fp402, '');
        fwrite($fp403, '');
        fwrite($fp404, 'issue');
        echo '<br>';
        fclose($fp402);  
        fclose($fp403);  
        fclose($fp404);  
        
       header("location:index.php");
    }
?>

<?php
$myfile402 = fopen("./file-db/cleared45.txt", "r") or die("Unable to open file!");
$myfile403 = fopen("./file-db/progress45.txt", "r") or die("Unable to open file!");
$myfile404 = fopen("./file-db/issue45.txt", "r") or die("Unable to open file!");
$myText402 = fread($myfile402,filesize("./file-db/cleared45.txt"));
$myText403 = fread($myfile403,filesize("./file-db/progress45.txt"));
$myText404 = fread($myfile404,filesize("./file-db/issue45.txt"));
// echo $myText;
fclose($myfile402);
fclose($myfile403);
fclose($myfile404);
?>