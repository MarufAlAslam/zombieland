<?php
error_reporting(0);
    if(isset($_POST['clear31'])){
        $fp270= fopen('./file-db/cleared31.txt', 'w');//opens file in append mode  
        $fp271 = fopen('./file-db/progress31.txt', 'w');//opens file in append mode  
        $fp272 = fopen('./file-db/issue31.txt', 'w');//opens file in append mode  
        fwrite($fp270, 'cleared');
        fwrite($fp271, '');
        fwrite($fp272, '');
        echo '<br>';
        fclose($fp270);  
        fclose($fp271);  
        fclose($fp272);  
        
       header("location:index.php");
    }
?>

<?php
$myfile270= fopen("./file-db/cleared31.txt", "r") or die("Unable to open file!");
$myfile271 = fopen("./file-db/progress31.txt", "r") or die("Unable to open file!");
$myfile272 = fopen("./file-db/issue31.txt", "r") or die("Unable to open file!");
$myText270= fread($myfile270,filesize("./file-db/cleared31.txt"));
$myText271 = fread($myfile271,filesize("./file-db/progress31.txt"));
$myText272 = fread($myfile272,filesize("./file-db/issue31.txt"));
// echo $myText;
fclose($myfile270);
fclose($myfile271);
fclose($myfil272);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress31'])){
        $fp273 = fopen('./file-db/cleared31.txt', 'w');//opens file in append mode  
        $fp274 = fopen('./file-db/progress31.txt', 'w');//opens file in append mode  
        $fp275 = fopen('./file-db/issue31.txt', 'w');//opens file in append mode  
        fwrite($fp273, '');
        fwrite($fp274, 'progress');
        fwrite($fp275, '');
        echo '<br>';
        fclose($fp273);  
        fclose($fp274);  
        fclose($fp275);  
        
       header("location:index.php");
    }
?>

<?php
$myfile273 = fopen("./file-db/cleared31.txt", "r") or die("Unable to open file!");
$myfile274 = fopen("./file-db/progress31.txt", "r") or die("Unable to open file!");
$myfile275 = fopen("./file-db/issue31.txt", "r") or die("Unable to open file!");
$myText273 = fread($myfile273,filesize("./file-db/cleared31.txt"));
$myText274 = fread($myfile274,filesize("./file-db/progress31.txt"));
$myText275 = fread($myfile275,filesize("./file-db/issue31.txt"));
// echo $myText;
fclose($myfile273);
fclose($myfile274);
fclose($myfile275);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue31'])){
        $fp276 = fopen('./file-db/cleared31.txt', 'w');//opens file in append mode  
        $fp277 = fopen('./file-db/progress31.txt', 'w');//opens file in append mode  
        $fp278 = fopen('./file-db/issue31.txt', 'w');//opens file in append mode  
        fwrite($fp276, '');
        fwrite($fp277, '');
        fwrite($fp278, 'issue');
        echo '<br>';
        fclose($fp276);  
        fclose($fp277);  
        fclose($fp278);  
        
       header("location:index.php");
    }
?>

<?php
$myfile276 = fopen("./file-db/cleared31.txt", "r") or die("Unable to open file!");
$myfile277 = fopen("./file-db/progress31.txt", "r") or die("Unable to open file!");
$myfile278 = fopen("./file-db/issue31.txt", "r") or die("Unable to open file!");
$myText276 = fread($myfile276,filesize("./file-db/cleared31.txt"));
$myText277 = fread($myfile277,filesize("./file-db/progress31.txt"));
$myText278 = fread($myfile278,filesize("./file-db/issue31.txt"));
// echo $myText;
fclose($myfile276);
fclose($myfile277);
fclose($myfile278);
?>