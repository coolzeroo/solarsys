<?php
include "connect-db.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM planets WHERE id = $id";
    $conn->query($sql);
    $conn->close();
}

header('Location: ../index.html');
?>