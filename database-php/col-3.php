<?php
error_reporting(0);
    if(isset($_POST['clear3'])){
        $fp18 = fopen('./file-db/cleared3.txt', 'w');//opens file in append mode  
        $fp19 = fopen('./file-db/progress3.txt', 'w');//opens file in append mode  
        $fp20 = fopen('./file-db/issue3.txt', 'w');//opens file in append mode  
        fwrite($fp18, 'cleared');
        fwrite($fp19, '');
        fwrite($fp20, '');
        echo '<br>';
        fclose($fp18);  
        fclose($fp19);  
        fclose($fp20);  
        
       header("location:index.php");
    }
?>

<?php
$myfile18 = fopen("./file-db/cleared3.txt", "r") or die("Unable to open file!");
$myfile19 = fopen("./file-db/progress3.txt", "r") or die("Unable to open file!");
$myfile20 = fopen("./file-db/issue3.txt", "r") or die("Unable to open file!");
$myText18 = fread($myfile18,filesize("./file-db/cleared3.txt"));
$myText19 = fread($myfile19,filesize("./file-db/progress3.txt"));
$myText20 = fread($myfile20,filesize("./file-db/issue3.txt"));
// echo $myText;
fclose($myfile18);
fclose($myfile19);
fclose($myfil20);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress3'])){
        $fp21 = fopen('./file-db/cleared3.txt', 'w');//opens file in append mode  
        $fp22 = fopen('./file-db/progress3.txt', 'w');//opens file in append mode  
        $fp23 = fopen('./file-db/issue3.txt', 'w');//opens file in append mode  
        fwrite($fp21, '');
        fwrite($fp22, 'progress');
        fwrite($fp23, '');
        echo '<br>';
        fclose($fp21);  
        fclose($fp22);  
        fclose($fp23);  
        
       header("location:index.php");
    }
?>

<?php
$myfile21 = fopen("./file-db/cleared3.txt", "r") or die("Unable to open file!");
$myfile22 = fopen("./file-db/progress3.txt", "r") or die("Unable to open file!");
$myfile23 = fopen("./file-db/issue3.txt", "r") or die("Unable to open file!");
$myText21 = fread($myfile21,filesize("./file-db/cleared3.txt"));
$myText22 = fread($myfile22,filesize("./file-db/progress3.txt"));
$myText23 = fread($myfile23,filesize("./file-db/issue3.txt"));
// echo $myText;
fclose($myfile21);
fclose($myfile22);
fclose($myfile23);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue3'])){
        $fp24 = fopen('./file-db/cleared3.txt', 'w');//opens file in append mode  
        $fp25 = fopen('./file-db/progress3.txt', 'w');//opens file in append mode  
        $fp26 = fopen('./file-db/issue3.txt', 'w');//opens file in append mode  
        fwrite($fp24, '');
        fwrite($fp25, '');
        fwrite($fp26, 'issue');
        echo '<br>';
        fclose($fp24);  
        fclose($fp25);  
        fclose($fp26);  
        
       header("location:index.php");
    }
?>

<?php
$myfile24 = fopen("./file-db/cleared3.txt", "r") or die("Unable to open file!");
$myfile25 = fopen("./file-db/progress3.txt", "r") or die("Unable to open file!");
$myfile26 = fopen("./file-db/issue3.txt", "r") or die("Unable to open file!");
$myText24 = fread($myfile24,filesize("./file-db/cleared3.txt"));
$myText25 = fread($myfile25,filesize("./file-db/progress3.txt"));
$myText26 = fread($myfile26,filesize("./file-db/issue3.txt"));
// echo $myText;
fclose($myfile24);
fclose($myfile25);
fclose($myfile26);
?>