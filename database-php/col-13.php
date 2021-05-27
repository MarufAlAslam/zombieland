<?php
error_reporting(0);
    if(isset($_POST['clear13'])){
        $fp108= fopen('./file-db/cleared13.txt', 'w');//opens file in append mode  
        $fp109 = fopen('./file-db/progress13.txt', 'w');//opens file in append mode  
        $fp110 = fopen('./file-db/issue13.txt', 'w');//opens file in append mode  
        fwrite($fp108, 'cleared');
        fwrite($fp109, '');
        fwrite($fp110, '');
        echo '<br>';
        fclose($fp108);  
        fclose($fp109);  
        fclose($fp110);  
        
       header("location:index.php");
    }
?>

<?php
$myfile108= fopen("./file-db/cleared13.txt", "r") or die("Unable to open file!");
$myfile109 = fopen("./file-db/progress13.txt", "r") or die("Unable to open file!");
$myfile110 = fopen("./file-db/issue13.txt", "r") or die("Unable to open file!");
$myText108= fread($myfile108,filesize("./file-db/cleared13.txt"));
$myText109 = fread($myfile109,filesize("./file-db/progress13.txt"));
$myText110 = fread($myfile110,filesize("./file-db/issue13.txt"));
// echo $myText;
fclose($myfile108);
fclose($myfile109);
fclose($myfil110);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress13'])){
        $fp111 = fopen('./file-db/cleared13.txt', 'w');//opens file in append mode  
        $fp112 = fopen('./file-db/progress13.txt', 'w');//opens file in append mode  
        $fp113 = fopen('./file-db/issue13.txt', 'w');//opens file in append mode  
        fwrite($fp111, '');
        fwrite($fp112, 'progress');
        fwrite($fp113, '');
        echo '<br>';
        fclose($fp111);  
        fclose($fp112);  
        fclose($fp113);  
        
       header("location:index.php");
    }
?>

<?php
$myfile111 = fopen("./file-db/cleared13.txt", "r") or die("Unable to open file!");
$myfile112 = fopen("./file-db/progress13.txt", "r") or die("Unable to open file!");
$myfile113 = fopen("./file-db/issue13.txt", "r") or die("Unable to open file!");
$myText111 = fread($myfile111,filesize("./file-db/cleared13.txt"));
$myText112 = fread($myfile112,filesize("./file-db/progress13.txt"));
$myText113 = fread($myfile113,filesize("./file-db/issue13.txt"));
// echo $myText;
fclose($myfile111);
fclose($myfile112);
fclose($myfile113);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue13'])){
        $fp114 = fopen('./file-db/cleared13.txt', 'w');//opens file in append mode  
        $fp115 = fopen('./file-db/progress13.txt', 'w');//opens file in append mode  
        $fp116 = fopen('./file-db/issue13.txt', 'w');//opens file in append mode  
        fwrite($fp114, '');
        fwrite($fp115, '');
        fwrite($fp116, 'issue');
        echo '<br>';
        fclose($fp114);  
        fclose($fp115);  
        fclose($fp116);  
        
       header("location:index.php");
    }
?>

<?php
$myfile114 = fopen("./file-db/cleared13.txt", "r") or die("Unable to open file!");
$myfile115 = fopen("./file-db/progress13.txt", "r") or die("Unable to open file!");
$myfile116 = fopen("./file-db/issue13.txt", "r") or die("Unable to open file!");
$myText114 = fread($myfile114,filesize("./file-db/cleared13.txt"));
$myText115 = fread($myfile115,filesize("./file-db/progress13.txt"));
$myText116 = fread($myfile116,filesize("./file-db/issue13.txt"));
// echo $myText;
fclose($myfile114);
fclose($myfile115);
fclose($myfile116);
?>