<?php

include "connect-db.php";

$name = $_GET["name"];
$moons = $_GET["moons"];
$distance_from_sun = $_GET["distance_from_sun"];
$revolution_period = $_GET["revolution_period"];
$rotation_period = $_GET["rotation_period"];
$orbital_speed = $_GET["orbital_speed"];
$diameter = $_GET["diameter"];
$mass = $_GET["mass"];
$density = $_GET["density"];
$notes = $_GET["notes"];

if (isset($_GET["id"]) && $_GET["id"] != '') {
    // update person
    $id = $_GET["id"];
    $sql = "UPDATE planets set name = '$name', moons = '$moons', distance_from_sun = '$distance_from_sun', revolution_period = '$revolution_period', rotation_period = '$rotation_period', orbital_speed = '$orbital_speed', diameter = '$diameter', mass = '$mass', density = '$density', notes = '$notes' WHERE id = $id";
} else {
    $sql = "INSERT INTO planets(name, moons, distance_from_sun, revolution_period, rotation_period, orbital_speed, diameter, mass, density, notes) VALUES('$name', '$moons', '$distance_from_sun', '$revolution_period', '$rotation_period', '$orbital_speed', '$diameter', '$mass', '$density', '$notes')";
}

echo $sql;

$conn->query($sql);
$conn->close();

header('Location: ../index.html');
?>