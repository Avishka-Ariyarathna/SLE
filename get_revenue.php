<?php
include("./header.php");
include 'config.php';

$place = $_POST['place'];
$date = $_POST['date'];
echo''.$date.'';

if ($place == '3') {
    $place = 'deduruoya';

} ?>

<div class="content">
    <table id="deduruoya_table" class="plant_table">
        <thead>
            <tr>
                <td>PLACE</td>
                <td>date</td>
                <td>Revenve</td>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Deduruoya</td>
                <?php
                require_once 'config.php';
                $query = "SELECT * FROM $place WHERE date = '$date'";
                $result = mysqli_query($connection, $query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $tariff = $row['unit'] * $row['tariff'];
                        echo "<td>" . $row['date'] . "</td><td>Rs." . $tariff . ".00</td><tr>";
                    }
                }
                ?>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <?php
    include("./footer.php");
    ?>