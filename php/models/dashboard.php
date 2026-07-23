<?php
$user = $_SESSION['currentUser'];
$name = $user['name'];

$currentHours = date("H");
$greet = "";

if ($currentHours >= 6 && $currentHours < 12) {
    $greet = "Buenos días, $name!";
} else if ($currentHours >= 12 && $currentHours < 21) {
    $greet = "Buenas tardes, $name!`";
} else {
    $greet = "Buenas noches, $name!";
}


$currentDate = new DateTime();

$format = new IntlDateFormatter(
    'es_ES',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE
);

$format->setPattern("EEEE d 'de' MMMM 'de' yyyy");

$formattedDate = $format->format($currentDate);

