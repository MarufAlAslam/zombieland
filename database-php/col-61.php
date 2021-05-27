<?php
error_reporting(0);
    if(isset($_POST['clear61'])){
        $fp540= fopen('./file-db/cleared61.txt', 'w');//opens file in append mode  
        $fp541 = fopen('./file-db/progress61.txt', 'w');//opens file in append mode  
        $fp542 = fopen('./file-db/issue61.txt', 'w');//opens file in append mode  
        fwrite($fp540, 'cleared');
        fwrite($fp541, '');
        fwrite($fp542, '');
        echo '<br>';
        fclose($fp540);  
        fclose($fp541);  
        fclose($fp542);  
        
       header("location:index.php");
    }
?>

<?php
$myfile540= fopen("./file-db/cleared61.txt", "r") or die("Unable to open file!");
$myfile541 = fopen("./file-db/progress61.txt", "r") or die("Unable to open file!");
$myfile542 = fopen("./file-db/issue61.txt", "r") or die("Unable to open file!");
$myText540= fread($myfile540,filesize("./file-db/cleared61.txt"));
$myText541 = fread($myfile541,filesize("./file-db/progress61.txt"));
$myText542 = fread($myfile542,filesize("./file-db/issue61.txt"));
// echo $myText;
fclose($myfile540);
fclose($myfile541);
fclose($myfil542);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress61'])){
        $fp543 = fopen('./file-db/cleared61.txt', 'w');//opens file in append mode  
        $fp544 = fopen('./file-db/progress61.txt', 'w');//opens file in append mode  
        $fp545 = fopen('./file-db/issue61.txt', 'w');//opens file in append mode  
        fwrite($fp543, '');
        fwrite($fp544, 'progress');
        fwrite($fp545, '');
        echo '<br>';
        fclose($fp543);  
        fclose($fp544);  
        fclose($fp545);  
        
       header("location:index.php");
    }
?>

<?php
$myfile543 = fopen("./file-db/cleared61.txt", "r") or die("Unable to open file!");
$myfile544 = fopen("./file-db/progress61.txt", "r") or die("Unable to open file!");
$myfile545 = fopen("./file-db/issue61.txt", "r") or die("Unable to open file!");
$myText543 = fread($myfile543,filesize("./file-db/cleared61.txt"));
$myText544 = fread($myfile544,filesize("./file-db/progress61.txt"));
$myText545 = fread($myfile545,filesize("./file-db/issue61.txt"));
// echo $myText;
fclose($myfile543);
fclose($myfile545);
fclose($myfile545);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue61'])){
        $fp546 = fopen('./file-db/cleared61.txt', 'w');//opens file in append mode  
        $fp547 = fopen('./file-db/progress61.txt', 'w');//opens file in append mode  
        $fp548 = fopen('./file-db/issue61.txt', 'w');//opens file in append mode  
        fwrite($fp546, '');
        fwrite($fp547, '');
        fwrite($fp548, 'issue');
        echo '<br>';
        fclose($fp546);  
        fclose($fp547);  
        fclose($fp548);  
        
       header("location:index.php");
    }
?>

<?php
$myfile546 = fopen("./file-db/cleared61.txt", "r") or die("Unable to open file!");
$myfile547 = fopen("./file-db/progress61.txt", "r") or die("Unable to open file!");
$myfile548 = fopen("./file-db/issue61.txt", "r") or die("Unable to open file!");
$myText546 = fread($myfile546,filesize("./file-db/cleared61.txt"));
$myText547 = fread($myfile547,filesize("./file-db/progress61.txt"));
$myText548 = fread($myfile548,filesize("./file-db/issue61.txt"));
// echo $myText;
fclose($myfile546);
fclose($myfile547);
fclose($myfile548);
?>