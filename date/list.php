<?php
include "connect-db.php";

$sql = "SELECT * FROM planets";
$result = $conn->query($sql);

$pdata = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdata[] = array(
            "id" => $row["id"],
            "name" => $row["name"],
            "moons" => $row["moons"],
            "distance_from_sun" => $row["distance_from_sun"],
            "revolution_period" => $row["revolution_period"],
            "rotation_period" => $row["rotation_period"],
            "orbital_speed" => $row["orbital_speed"],
            "diameter" => $row["diameter"],
            "mass" => $row["mass"],
            "density" => $row["density"],
            "notes" => $row["notes"]
        );
    }
}
$conn->close();

echo json_encode($pdata, true);

?>