<?php
error_reporting(0);
    if(isset($_POST['clear24'])){
        $fp207= fopen('./file-db/cleared24.txt', 'w');//opens file in append mode  
        $fp208 = fopen('./file-db/progress24.txt', 'w');//opens file in append mode  
        $fp209 = fopen('./file-db/issue24.txt', 'w');//opens file in append mode  
        fwrite($fp207, 'cleared');
        fwrite($fp208, '');
        fwrite($fp209, '');
        echo '<br>';
        fclose($fp207);  
        fclose($fp208);  
        fclose($fp209);  
        
       header("location:index.php");
    }
?>

<?php
$myfile207= fopen("./file-db/cleared24.txt", "r") or die("Unable to open file!");
$myfile208 = fopen("./file-db/progress24.txt", "r") or die("Unable to open file!");
$myfile209 = fopen("./file-db/issue24.txt", "r") or die("Unable to open file!");
$myText207= fread($myfile207,filesize("./file-db/cleared24.txt"));
$myText208 = fread($myfile208,filesize("./file-db/progress24.txt"));
$myText209 = fread($myfile209,filesize("./file-db/issue24.txt"));
// echo $myText;
fclose($myfile207);
fclose($myfile208);
fclose($myfil209);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress24'])){
        $fp210 = fopen('./file-db/cleared24.txt', 'w');//opens file in append mode  
        $fp211 = fopen('./file-db/progress24.txt', 'w');//opens file in append mode  
        $fp212 = fopen('./file-db/issue24.txt', 'w');//opens file in append mode  
        fwrite($fp210, '');
        fwrite($fp211, 'progress');
        fwrite($fp212, '');
        echo '<br>';
        fclose($fp210);  
        fclose($fp211);  
        fclose($fp212);  
        
       header("location:index.php");
    }
?>

<?php
$myfile210 = fopen("./file-db/cleared24.txt", "r") or die("Unable to open file!");
$myfile211 = fopen("./file-db/progress24.txt", "r") or die("Unable to open file!");
$myfile212 = fopen("./file-db/issue24.txt", "r") or die("Unable to open file!");
$myText210 = fread($myfile210,filesize("./file-db/cleared24.txt"));
$myText211 = fread($myfile211,filesize("./file-db/progress24.txt"));
$myText212 = fread($myfile212,filesize("./file-db/issue24.txt"));
// echo $myText;
fclose($myfile210);
fclose($myfile211);
fclose($myfile212);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue24'])){
        $fp213 = fopen('./file-db/cleared24.txt', 'w');//opens file in append mode  
        $fp214 = fopen('./file-db/progress24.txt', 'w');//opens file in append mode  
        $fp215 = fopen('./file-db/issue24.txt', 'w');//opens file in append mode  
        fwrite($fp213, '');
        fwrite($fp214, '');
        fwrite($fp215, 'issue');
        echo '<br>';
        fclose($fp213);  
        fclose($fp214);  
        fclose($fp215);  
        
       header("location:index.php");
    }
?>

<?php
$myfile213 = fopen("./file-db/cleared24.txt", "r") or die("Unable to open file!");
$myfile214 = fopen("./file-db/progress24.txt", "r") or die("Unable to open file!");
$myfile215 = fopen("./file-db/issue24.txt", "r") or die("Unable to open file!");
$myText213 = fread($myfile213,filesize("./file-db/cleared24.txt"));
$myText214 = fread($myfile214,filesize("./file-db/progress24.txt"));
$myText215 = fread($myfile215,filesize("./file-db/issue24.txt"));
// echo $myText;
fclose($myfile213);
fclose($myfile214);
fclose($myfile215);
?>