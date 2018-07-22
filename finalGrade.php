<title>Grade Calculator Validation</title>
<?php
//variables initialization
$pe = $_POST['pe'];
$pm = $_POST['pm'];
$pw = $_POST['pw'];
$qe = $_POST['qe'];
$qm = $_POST['qm'];
$qw = $_POST['qw'];
$le = $_POST['le'];
$lm = $_POST['lm'];
$lw = $_POST['lw'];
$ppe = $_POST['ppe'];
$ppm = $_POST['ppm'];
$ppw = $_POST['ppw'];
//calculating individual grades
$ptotal = ($pe/$pm)*$pw;
$qtotal = ($qe/$qm)*$qw;
$ltotal = ($le/$lm)*$lw;
$pptotal = ($ppe/$ppm)*$ppw;
//adding all grades
$grade = round(($ptotal+$qtotal+$ltotal+$pptotal)/10,2); //round(value, limit)
//output
echo "<style>body{font-family:verdana} b{color:blue;}</style>";
echo "<center><h1>Final Grade: <b>".$grade."</b></h1></center>";
echo "<center><a href='#' onclick='window.history.back()'><button><-Go back</button></a></center>";
?>