<?php
error_reporting(0);
    if(isset($_POST['clear6'])){
        $fp45 = fopen('./file-db/cleared6.txt', 'w');//opens file in append mode  
        $fp46 = fopen('./file-db/progress6.txt', 'w');//opens file in append mode  
        $fp47 = fopen('./file-db/issue6.txt', 'w');//opens file in append mode  
        fwrite($fp45, 'cleared');
        fwrite($fp46, '');
        fwrite($fp47, '');
        echo '<br>';
        fclose($fp45);  
        fclose($fp46);  
        fclose($fp47);  
        
       header("location:index.php");
    }
?>

<?php
$myfile45 = fopen("./file-db/cleared6.txt", "r") or die("Unable to open file!");
$myfile46 = fopen("./file-db/progress6.txt", "r") or die("Unable to open file!");
$myfile47 = fopen("./file-db/issue6.txt", "r") or die("Unable to open file!");
$myText45 = fread($myfile45,filesize("./file-db/cleared6.txt"));
$myText46 = fread($myfile46,filesize("./file-db/progress6.txt"));
$myText47 = fread($myfile47,filesize("./file-db/issue6.txt"));
// echo $myText;
fclose($myfile45);
fclose($myfile46);
fclose($myfil47);
?>




<!-- progress -->
<?php
error_reporting(0);
    if(isset($_POST['progress6'])){
        $fp48 = fopen('./file-db/cleared6.txt', 'w');//opens file in append mode  
        $fp49 = fopen('./file-db/progress6.txt', 'w');//opens file in append mode  
        $fp50 = fopen('./file-db/issue6.txt', 'w');//opens file in append mode  
        fwrite($fp48, '');
        fwrite($fp49, 'progress');
        fwrite($fp50, '');
        echo '<br>';
        fclose($fp48);  
        fclose($fp49);  
        fclose($fp50);  
        
       header("location:index.php");
    }
?>

<?php
$myfile48 = fopen("./file-db/cleared6.txt", "r") or die("Unable to open file!");
$myfile49 = fopen("./file-db/progress6.txt", "r") or die("Unable to open file!");
$myfile50 = fopen("./file-db/issue6.txt", "r") or die("Unable to open file!");
$myText48 = fread($myfile48,filesize("./file-db/cleared6.txt"));
$myText49 = fread($myfile49,filesize("./file-db/progress6.txt"));
$myText50 = fread($myfile50,filesize("./file-db/issue6.txt"));
// echo $myText;
fclose($myfile48);
fclose($myfile49);
fclose($myfile50);
?>



<!-- issue -->
<?php
error_reporting(0);
    if(isset($_POST['issue6'])){
        $fp51 = fopen('./file-db/cleared6.txt', 'w');//opens file in append mode  
        $fp52 = fopen('./file-db/progress6.txt', 'w');//opens file in append mode  
        $fp53 = fopen('./file-db/issue6.txt', 'w');//opens file in append mode  
        fwrite($fp51, '');
        fwrite($fp52, '');
        fwrite($fp53, 'issue');
        echo '<br>';
        fclose($fp51);  
        fclose($fp52);  
        fclose($fp53);  
        
       header("location:index.php");
    }
?>

<?php
$myfile51 = fopen("./file-db/cleared6.txt", "r") or die("Unable to open file!");
$myfile52 = fopen("./file-db/progress6.txt", "r") or die("Unable to open file!");
$myfile53 = fopen("./file-db/issue6.txt", "r") or die("Unable to open file!");
$myText51 = fread($myfile51,filesize("./file-db/cleared6.txt"));
$myText52 = fread($myfile52,filesize("./file-db/progress6.txt"));
$myText53 = fread($myfile53,filesize("./file-db/issue6.txt"));
// echo $myText;
fclose($myfile51);
fclose($myfile52);
fclose($myfile53);
?>