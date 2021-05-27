<?php
error_reporting(0);
    if(isset($_POST['clear16'])){
        $fp135= fopen('./file-db/cleared16.txt', 'w');//opens file in append mode  
        $fp136 = fopen('./file-db/progress16.txt', 'w');//opens file in append mode  
        $fp137 = fopen('./file-db/issue16.txt', 'w');//opens file in append mode  
        fwrite($fp135, 'cleared');
        fwrite($fp136, '');
        fwrite($fp137, '');
        echo '<br>';
        fclose($fp135);  
        fclose($fp136);  
        fclose($fp137);  
        
       header("location:index.php");
    }
?>

<?php
$myfile135= fopen("./file-db/cleared16.txt", "r") or die("Unable to open file!");
$myfile136 = fopen("./file-db/progress16.txt", "r") or die("Unable to open file!");
$myfile137 = fopen("./file-db/issue16.txt", "r") or die("Unable to open file!");
$myText135= fread($myfile135,filesize("./file-db/cleared16.txt"));
$myText136 = fread($myfile136,filesize("./file-db/progress16.txt"));
$myText137 = fread($myfile137,filesize("./file-db/issue16.txt"));
// echo $myText;
fclose($myfile135);
fclose($myfile136);
fclose($myfil137);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress16'])){
        $fp138 = fopen('./file-db/cleared16.txt', 'w');//opens file in append mode  
        $fp139 = fopen('./file-db/progress16.txt', 'w');//opens file in append mode  
        $fp140 = fopen('./file-db/issue16.txt', 'w');//opens file in append mode  
        fwrite($fp138, '');
        fwrite($fp139, 'progress');
        fwrite($fp140, '');
        echo '<br>';
        fclose($fp138);  
        fclose($fp139);  
        fclose($fp140);  
        
       header("location:index.php");
    }
?>

<?php
$myfile138 = fopen("./file-db/cleared16.txt", "r") or die("Unable to open file!");
$myfile139 = fopen("./file-db/progress16.txt", "r") or die("Unable to open file!");
$myfile140 = fopen("./file-db/issue16.txt", "r") or die("Unable to open file!");
$myText138 = fread($myfile138,filesize("./file-db/cleared16.txt"));
$myText139 = fread($myfile139,filesize("./file-db/progress16.txt"));
$myText140 = fread($myfile140,filesize("./file-db/issue16.txt"));
// echo $myText;
fclose($myfile138);
fclose($myfile139);
fclose($myfile140);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue16'])){
        $fp141 = fopen('./file-db/cleared16.txt', 'w');//opens file in append mode  
        $fp142 = fopen('./file-db/progress16.txt', 'w');//opens file in append mode  
        $fp143 = fopen('./file-db/issue16.txt', 'w');//opens file in append mode  
        fwrite($fp141, '');
        fwrite($fp142, '');
        fwrite($fp143, 'issue');
        echo '<br>';
        fclose($fp141);  
        fclose($fp142);  
        fclose($fp143);  
        
       header("location:index.php");
    }
?>

<?php
$myfile141 = fopen("./file-db/cleared16.txt", "r") or die("Unable to open file!");
$myfile142 = fopen("./file-db/progress16.txt", "r") or die("Unable to open file!");
$myfile143 = fopen("./file-db/issue16.txt", "r") or die("Unable to open file!");
$myText141 = fread($myfile141,filesize("./file-db/cleared16.txt"));
$myText142 = fread($myfile142,filesize("./file-db/progress16.txt"));
$myText143 = fread($myfile143,filesize("./file-db/issue16.txt"));
// echo $myText;
fclose($myfile141);
fclose($myfile142);
fclose($myfile143);
?>