<?php
$countries = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "Italy" => "Rome",
    "Spain" => "Madrid",
    "Canada" => "Ottawa"
);
$countries["Japan"] = "Tokyo";
$countries["Algeria"] = "Munich";

foreach ($countries as $country => $capital)
 {
    echo "$country: $capital"."<br>";
}
?>