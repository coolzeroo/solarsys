<style>
<?php
  $sql = "SELECT * FROM planets";
  $result = $conn->query($sql);
  $pdata = array();
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $pdata[$row["name"]] = array(
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

    .set-speed #sun dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Sun"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> Rotation Period';
    }

    .set-distance #sun dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Earth"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #sun dl.infos dd:after {
    <?php
            $diameter = $pdata["Sun"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #sun dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Sun"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #mercury dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Mercury"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #mercury dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Mercury"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #mercury dl.infos dd:after {
    <?php
            $diameter = $pdata["Mercury"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #mercury dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Mercury"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #venus dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Venus"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #venus dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Venus"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #venus dl.infos dd:after {
    <?php
            $diameter = $pdata["Venus"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #venus dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Venus"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #earth dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Earth"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #earth dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Earth"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #earth dl.infos dd:after {
    <?php
            $diameter = $pdata["Earth"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #earth dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Earth"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #mars dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Mars"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #mars dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Mars"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #mars dl.infos dd:after {
    <?php
            $diameter = $pdata["Mars"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #mars dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Mars"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #jupiter dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Jupiter"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #jupiter dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Jupiter"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #jupiter dl.infos dd:after {
    <?php
            $diameter = $pdata["Jupiter"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #jupiter dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Jupiter"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #saturn dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Saturn"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #saturn dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Saturn"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #saturn dl.infos dd:after {
    <?php
            $diameter = $pdata["Saturn"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #saturn dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Saturn"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #uranus dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Uranus"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #uranus dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Uranus"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km ';
    }

    .set-size #uranus dl.infos dd:after {
    <?php
            $diameter = $pdata["Uranus"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #uranus dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Uranus"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

    .set-speed #neptune dl.infos dd:after {
    <?php
            $orbital_speed = $pdata["Neptune"]["orbital_speed"];
    ?> content: '<?php echo $orbital_speed; ?> Km/s ';
    }

    .set-distance #neptune dl.infos dd:after {
    <?php
            $distance_from_sun = $pdata["Neptune"]["distance_from_sun"];
    ?> content: '<?php echo $distance_from_sun; ?> Million Km';
    }

    .set-size #neptune dl.infos dd:after {
    <?php
            $diameter = $pdata["Neptune"]["diameter"];
    ?> content: '<?php echo $diameter; ?> Km';
    }

    .set-rotation #neptune dl.infos dd:after {
    <?php
            $rotation_period = $pdata["Neptune"]["rotation_period"];
    ?> content: '<?php echo $rotation_period; ?> ';
    }

</style>