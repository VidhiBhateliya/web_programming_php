<?php
$countries = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "Italy" => "Rome",
    "Spain" => "Madrid",
    "Canada" => "Ottawa"
);
foreach($countries as $country =>$capital)
{
	echo "$country: $capital"."<br>";
}
?>