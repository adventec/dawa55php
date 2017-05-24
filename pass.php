<?php

$pass='a';

$hash=password_hash($pass, PASSWORD_DEFAULT);
echo $hash."<BR>";
$hash='$2y$10$XmvUxblAzXFRD36jWzF1jevY89MZ7DkPYeHyOgiymzDDvRq0Bx4iW';
$check=password_verify($pass,$hash);
echo $check;



?>