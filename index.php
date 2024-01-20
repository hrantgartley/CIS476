<!DOCTYPE html>
<html>

<body>
    <?php
    for ($i = 1; $i < 101; $i++) {
        $output = "";

        if ($i % 15 == 0) {
            $output = "Blueberry";
        } else {
            if ($i % 3 == 0) {
                $output .= "Blue ";
            }
            if ($i % 5 == 0) {
                $output .= "Berry ";
            }
        }

        echo "<p>" . $i . ($output ? " " . $output : "") . "</p>";
    }
    ?>
</body>

</html>
