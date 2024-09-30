
<?php
$countries = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "Italy" => "Rome",
    "Spain" => "Madrid",
    "Canada" => "Ottawa"
);

//Ascending Order:
ksort($countries);
echo "Sorted by country (ascending):"."<br>";
foreach ($countries as $country => $capital)
{
    echo "$country: $capital"."<br>";
}
echo"<br>";

//Descending Order:
$sorted_by_capital = $countries;
arsort($sorted_by_capital);
echo "Sorted by capital (descending):"."<br>";
foreach ($sorted_by_capital as $country => $capital) {
    echo "$country: $capital"."<br>";
}
?>
