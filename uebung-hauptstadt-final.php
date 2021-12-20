<?php
    $land = "England";
    $hauptstadt = "London";

    if (isset($_POST['submit'])) {
        $land = $_POST['land'];
    
        if ($land == "England") {
            $hauptstadt = "London";
        } else if ($land == "Frankreich") {
            $hauptstadt = "Paris";
        } else if ($land == "Italien") {
            $hauptstadt = "Rom";
        } else {
            $hauptstadt = "Madrid";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wie heißt die Hauptstdt?</title>
</head>
<body>
    <h3>Wie heißt die Hauptstadt?</h3>
    <form method="post" action="">
        <select name="land">
            <option <?php if ($land == "England") echo "selected" ?>>England</option>
            <option <?php if ($land == "Frankreich") echo "selected" ?>>Frankreich</option>
            <option <?php if ($land == "Italien") echo "selected" ?>>Italien</option>
            <option <?php if ($land == "Spanien") echo "selected" ?>>Spanien</option>
        </select>
        <input type="submit" name="submit" value="Absenden">
    </form>
    
    <h3>Die Hauptstadt heißt:</h3>
    <p><?php echo $hauptstadt; ?></p>
</body>
</html>