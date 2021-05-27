<?php
error_reporting(0);
    if(isset($_POST['clear62'])){
        $fp549= fopen('./file-db/cleared62.txt', 'w');//opens file in append mode  
        $fp550 = fopen('./file-db/progress62.txt', 'w');//opens file in append mode  
        $fp551 = fopen('./file-db/issue62.txt', 'w');//opens file in append mode  
        fwrite($fp549, 'cleared');
        fwrite($fp550, '');
        fwrite($fp551, '');
        echo '<br>';
        fclose($fp549);  
        fclose($fp550);  
        fclose($fp551);  
        
       header("location:index.php");
    }
?>

<?php
$myfile549= fopen("./file-db/cleared62.txt", "r") or die("Unable to open file!");
$myfile550 = fopen("./file-db/progress62.txt", "r") or die("Unable to open file!");
$myfile551 = fopen("./file-db/issue62.txt", "r") or die("Unable to open file!");
$myText549= fread($myfile549,filesize("./file-db/cleared62.txt"));
$myText550 = fread($myfile550,filesize("./file-db/progress62.txt"));
$myText551 = fread($myfile551,filesize("./file-db/issue62.txt"));
// echo $myText;
fclose($myfile549);
fclose($myfile550);
fclose($myfil551);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress62'])){
        $fp552 = fopen('./file-db/cleared62.txt', 'w');//opens file in append mode  
        $fp553 = fopen('./file-db/progress62.txt', 'w');//opens file in append mode  
        $fp554 = fopen('./file-db/issue62.txt', 'w');//opens file in append mode  
        fwrite($fp552, '');
        fwrite($fp553, 'progress');
        fwrite($fp554, '');
        echo '<br>';
        fclose($fp552);  
        fclose($fp553);  
        fclose($fp554);  
        
       header("location:index.php");
    }
?>

<?php
$myfile552 = fopen("./file-db/cleared62.txt", "r") or die("Unable to open file!");
$myfile553 = fopen("./file-db/progress62.txt", "r") or die("Unable to open file!");
$myfile554 = fopen("./file-db/issue62.txt", "r") or die("Unable to open file!");
$myText552 = fread($myfile552,filesize("./file-db/cleared62.txt"));
$myText553 = fread($myfile553,filesize("./file-db/progress62.txt"));
$myText554 = fread($myfile554,filesize("./file-db/issue62.txt"));
// echo $myText;
fclose($myfile552);
fclose($myfile554);
fclose($myfile554);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue62'])){
        $fp555 = fopen('./file-db/cleared62.txt', 'w');//opens file in append mode  
        $fp556 = fopen('./file-db/progress62.txt', 'w');//opens file in append mode  
        $fp557 = fopen('./file-db/issue62.txt', 'w');//opens file in append mode  
        fwrite($fp555, '');
        fwrite($fp556, '');
        fwrite($fp557, 'issue');
        echo '<br>';
        fclose($fp555);  
        fclose($fp556);  
        fclose($fp557);  
        
       header("location:index.php");
    }
?>

<?php
$myfile555 = fopen("./file-db/cleared62.txt", "r") or die("Unable to open file!");
$myfile556 = fopen("./file-db/progress62.txt", "r") or die("Unable to open file!");
$myfile557 = fopen("./file-db/issue62.txt", "r") or die("Unable to open file!");
$myText555 = fread($myfile555,filesize("./file-db/cleared62.txt"));
$myText556 = fread($myfile556,filesize("./file-db/progress62.txt"));
$myText557 = fread($myfile557,filesize("./file-db/issue62.txt"));
// echo $myText;
fclose($myfile555);
fclose($myfile556);
fclose($myfile557);
?>