<?php
error_reporting(0);
    if(isset($_POST['clear27'])){
        $fp234= fopen('./file-db/cleared27.txt', 'w');//opens file in append mode  
        $fp235 = fopen('./file-db/progress27.txt', 'w');//opens file in append mode  
        $fp236 = fopen('./file-db/issue27.txt', 'w');//opens file in append mode  
        fwrite($fp234, 'cleared');
        fwrite($fp235, '');
        fwrite($fp236, '');
        echo '<br>';
        fclose($fp234);  
        fclose($fp235);  
        fclose($fp236);  
        
       header("location:index.php");
    }
?>

<?php
$myfile234= fopen("./file-db/cleared27.txt", "r") or die("Unable to open file!");
$myfile235 = fopen("./file-db/progress27.txt", "r") or die("Unable to open file!");
$myfile236 = fopen("./file-db/issue27.txt", "r") or die("Unable to open file!");
$myText234= fread($myfile234,filesize("./file-db/cleared27.txt"));
$myText235 = fread($myfile235,filesize("./file-db/progress27.txt"));
$myText236 = fread($myfile236,filesize("./file-db/issue27.txt"));
// echo $myText;
fclose($myfile234);
fclose($myfile235);
fclose($myfil236);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress27'])){
        $fp237 = fopen('./file-db/cleared27.txt', 'w');//opens file in append mode  
        $fp238 = fopen('./file-db/progress27.txt', 'w');//opens file in append mode  
        $fp239 = fopen('./file-db/issue27.txt', 'w');//opens file in append mode  
        fwrite($fp237, '');
        fwrite($fp238, 'progress');
        fwrite($fp239, '');
        echo '<br>';
        fclose($fp237);  
        fclose($fp238);  
        fclose($fp239);  
        
       header("location:index.php");
    }
?>

<?php
$myfile237 = fopen("./file-db/cleared27.txt", "r") or die("Unable to open file!");
$myfile238 = fopen("./file-db/progress27.txt", "r") or die("Unable to open file!");
$myfile239 = fopen("./file-db/issue27.txt", "r") or die("Unable to open file!");
$myText237 = fread($myfile237,filesize("./file-db/cleared27.txt"));
$myText238 = fread($myfile238,filesize("./file-db/progress27.txt"));
$myText239 = fread($myfile239,filesize("./file-db/issue27.txt"));
// echo $myText;
fclose($myfile237);
fclose($myfile238);
fclose($myfile239);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue27'])){
        $fp240 = fopen('./file-db/cleared27.txt', 'w');//opens file in append mode  
        $fp241 = fopen('./file-db/progress27.txt', 'w');//opens file in append mode  
        $fp242 = fopen('./file-db/issue27.txt', 'w');//opens file in append mode  
        fwrite($fp240, '');
        fwrite($fp241, '');
        fwrite($fp242, 'issue');
        echo '<br>';
        fclose($fp240);  
        fclose($fp241);  
        fclose($fp242);  
        
       header("location:index.php");
    }
?>

<?php
$myfile240 = fopen("./file-db/cleared27.txt", "r") or die("Unable to open file!");
$myfile241 = fopen("./file-db/progress27.txt", "r") or die("Unable to open file!");
$myfile242 = fopen("./file-db/issue27.txt", "r") or die("Unable to open file!");
$myText240 = fread($myfile240,filesize("./file-db/cleared27.txt"));
$myText241 = fread($myfile241,filesize("./file-db/progress27.txt"));
$myText242 = fread($myfile242,filesize("./file-db/issue27.txt"));
// echo $myText;
fclose($myfile240);
fclose($myfile241);
fclose($myfile242);
?>