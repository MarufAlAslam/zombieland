<?php
error_reporting(0);
    if(isset($_POST['clear20'])){
        $fp171= fopen('./file-db/cleared20.txt', 'w');//opens file in append mode  
        $fp172 = fopen('./file-db/progress20.txt', 'w');//opens file in append mode  
        $fp173 = fopen('./file-db/issue20.txt', 'w');//opens file in append mode  
        fwrite($fp171, 'cleared');
        fwrite($fp172, '');
        fwrite($fp173, '');
        echo '<br>';
        fclose($fp171);  
        fclose($fp172);  
        fclose($fp173);  
        
       header("location:index.php");
    }
?>

<?php
$myfile171= fopen("./file-db/cleared20.txt", "r") or die("Unable to open file!");
$myfile172 = fopen("./file-db/progress20.txt", "r") or die("Unable to open file!");
$myfile173 = fopen("./file-db/issue20.txt", "r") or die("Unable to open file!");
$myText171= fread($myfile171,filesize("./file-db/cleared20.txt"));
$myText172 = fread($myfile172,filesize("./file-db/progress20.txt"));
$myText173 = fread($myfile173,filesize("./file-db/issue20.txt"));
// echo $myText;
fclose($myfile171);
fclose($myfile172);
fclose($myfil173);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress20'])){
        $fp174 = fopen('./file-db/cleared20.txt', 'w');//opens file in append mode  
        $fp175 = fopen('./file-db/progress20.txt', 'w');//opens file in append mode  
        $fp176 = fopen('./file-db/issue20.txt', 'w');//opens file in append mode  
        fwrite($fp174, '');
        fwrite($fp175, 'progress');
        fwrite($fp176, '');
        echo '<br>';
        fclose($fp174);  
        fclose($fp175);  
        fclose($fp176);  
        
       header("location:index.php");
    }
?>

<?php
$myfile174 = fopen("./file-db/cleared20.txt", "r") or die("Unable to open file!");
$myfile175 = fopen("./file-db/progress20.txt", "r") or die("Unable to open file!");
$myfile176 = fopen("./file-db/issue20.txt", "r") or die("Unable to open file!");
$myText174 = fread($myfile174,filesize("./file-db/cleared20.txt"));
$myText175 = fread($myfile175,filesize("./file-db/progress20.txt"));
$myText176 = fread($myfile176,filesize("./file-db/issue20.txt"));
// echo $myText;
fclose($myfile174);
fclose($myfile175);
fclose($myfile176);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue20'])){
        $fp177 = fopen('./file-db/cleared20.txt', 'w');//opens file in append mode  
        $fp178 = fopen('./file-db/progress20.txt', 'w');//opens file in append mode  
        $fp179 = fopen('./file-db/issue20.txt', 'w');//opens file in append mode  
        fwrite($fp177, '');
        fwrite($fp178, '');
        fwrite($fp179, 'issue');
        echo '<br>';
        fclose($fp177);  
        fclose($fp178);  
        fclose($fp179);  
        
       header("location:index.php");
    }
?>

<?php
$myfile177 = fopen("./file-db/cleared20.txt", "r") or die("Unable to open file!");
$myfile178 = fopen("./file-db/progress20.txt", "r") or die("Unable to open file!");
$myfile179 = fopen("./file-db/issue20.txt", "r") or die("Unable to open file!");
$myText177 = fread($myfile177,filesize("./file-db/cleared20.txt"));
$myText178 = fread($myfile178,filesize("./file-db/progress20.txt"));
$myText179 = fread($myfile179,filesize("./file-db/issue20.txt"));
// echo $myText;
fclose($myfile177);
fclose($myfile178);
fclose($myfile179);
?>