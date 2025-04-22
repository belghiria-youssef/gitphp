<!DOCTYPE html>
<html>
<body>

<?php
$infodate = getdate();
echo "<p>Salut PHP,nous sommes : " . $infodate['mday'] . "-" . $infodate['mon'] . "-" . $infodate['year']. " </p>";


$now = new DateTime();

echo $now ->format("Y-m-d H:i:s");

$currentH = (int) $now -> format("H");

if($currentH <12){

	echo " <br> LE MATIN";
    }else{
    
    echo "<br> APRES MIDI";
    
    }








?>

</body>
</html>
