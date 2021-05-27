<?php
error_reporting(0);
    if(isset($_POST['clear36'])){
        $fp315= fopen('./file-db/cleared36.txt', 'w');//opens file in append mode  
        $fp316 = fopen('./file-db/progress36.txt', 'w');//opens file in append mode  
        $fp317 = fopen('./file-db/issue36.txt', 'w');//opens file in append mode  
        fwrite($fp315, 'cleared');
        fwrite($fp316, '');
        fwrite($fp317, '');
        echo '<br>';
        fclose($fp315);  
        fclose($fp316);  
        fclose($fp317);  
        
       header("location:index.php");
    }
?>

<?php
$myfile315= fopen("./file-db/cleared36.txt", "r") or die("Unable to open file!");
$myfile316 = fopen("./file-db/progress36.txt", "r") or die("Unable to open file!");
$myfile317 = fopen("./file-db/issue36.txt", "r") or die("Unable to open file!");
$myText315= fread($myfile315,filesize("./file-db/cleared36.txt"));
$myText316 = fread($myfile316,filesize("./file-db/progress36.txt"));
$myText317 = fread($myfile317,filesize("./file-db/issue36.txt"));
// echo $myText;
fclose($myfile315);
fclose($myfile316);
fclose($myfil317);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress36'])){
        $fp318 = fopen('./file-db/cleared36.txt', 'w');//opens file in append mode  
        $fp319 = fopen('./file-db/progress36.txt', 'w');//opens file in append mode  
        $fp320 = fopen('./file-db/issue36.txt', 'w');//opens file in append mode  
        fwrite($fp318, '');
        fwrite($fp319, 'progress');
        fwrite($fp320, '');
        echo '<br>';
        fclose($fp318);  
        fclose($fp319);  
        fclose($fp320);  
        
       header("location:index.php");
    }
?>

<?php
$myfile318 = fopen("./file-db/cleared36.txt", "r") or die("Unable to open file!");
$myfile319 = fopen("./file-db/progress36.txt", "r") or die("Unable to open file!");
$myfile320 = fopen("./file-db/issue36.txt", "r") or die("Unable to open file!");
$myText318 = fread($myfile318,filesize("./file-db/cleared36.txt"));
$myText319 = fread($myfile319,filesize("./file-db/progress36.txt"));
$myText320 = fread($myfile320,filesize("./file-db/issue36.txt"));
// echo $myText;
fclose($myfile318);
fclose($myfile319);
fclose($myfile320);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue36'])){
        $fp321 = fopen('./file-db/cleared36.txt', 'w');//opens file in append mode  
        $fp322 = fopen('./file-db/progress36.txt', 'w');//opens file in append mode  
        $fp323 = fopen('./file-db/issue36.txt', 'w');//opens file in append mode  
        fwrite($fp321, '');
        fwrite($fp322, '');
        fwrite($fp323, 'issue');
        echo '<br>';
        fclose($fp321);  
        fclose($fp322);  
        fclose($fp323);  
        
       header("location:index.php");
    }
?>

<?php
$myfile321 = fopen("./file-db/cleared36.txt", "r") or die("Unable to open file!");
$myfile322 = fopen("./file-db/progress36.txt", "r") or die("Unable to open file!");
$myfile323 = fopen("./file-db/issue36.txt", "r") or die("Unable to open file!");
$myText321 = fread($myfile321,filesize("./file-db/cleared36.txt"));
$myText322 = fread($myfile322,filesize("./file-db/progress36.txt"));
$myText323 = fread($myfile323,filesize("./file-db/issue36.txt"));
// echo $myText;
fclose($myfile321);
fclose($myfile322);
fclose($myfile323);
?>