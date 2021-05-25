<?php
    $multi_array = array(
        "musicals" => array("Oklahoma", "The Music Man", "South Pacific"),
        "dramas" => array("Lawrence of Arabia", "To Kill a Mockingbird", "Casablanca"),
        "mysteries" => array("The Maltese Falcon", "Rear Window", "North by Northwest")
    );

    foreach($multi_array as $types => $subarrays) {
        // strtoupper makes captial letters
        $uppertypes = strtoupper($types);
        echo $uppertypes;
        echo "<br>";

        foreach($subarrays as $key => $value) {
            echo "----> " . $key . " = " . $value;
            echo "<br>";
        }
    }

    ////////////// Descending Order /////////////////////////

    echo "<br>";
    krsort($multi_array);
    foreach($multi_array as $types => $subarrays) {
        // strtoupper makes captial letters
        $uppertypes = strtoupper($types);
        echo $uppertypes;
        echo "<br>";

        krsort($subarrays);
        foreach($subarrays as $key => $value) {
            echo "----> " . $key . " = " . $value;
            echo "<br>";
        }
    }
?>