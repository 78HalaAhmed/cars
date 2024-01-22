<?php
$pass="@woman2012";
$hash=password_hash($pass,PASSWORD_DEFAULT);
echo $hash ;
echo "<br>" .strlen($hash);

$verfiy=password_verify($pass,$hash );
echo"<br>";
if($verfiy){
    echo "password corrcet";
}else
echo "password is inncorrect";


?>