<?php
include("./header.php");

?>

<div class="content">
    <h1>Deduruoya Power Plant</h1>
    <table id="deduruoya_table" class="plant_table">
        <thead>
            <tr>
                <td>DATE</td>
                <td>UNIT</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                require_once 'config.php';
                $query = "SELECT * FROM deduruoya
                        ORDER BY id DESC
                        LIMIT 1";
                $result = mysqli_query($connection, $query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<td>" . $row['date'] . "</td><td>" . $row['unit'] . " kWh</td><tr>";
                    }
                }
                $connection->close();
                ?>
        </tbody>
        <tfoot>
            <tr>
                <td><button class="btn" onclick="openPopupForm()">Add-Data</button>
                    <button class="btn" onclick="openPopupForm2()">Generate-Data</button>
                </td>
            </tr>
        </tfoot>
    </table>

    <table id="deduruoya_table" class="plant_table">
        <thead>
            <tr>
                <td>Date</td>
                <td>Name</td>
                <td>Contact Number</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2012-05-01</td>
                <td>avishka</td>
                <td>0776175619</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td><button class="btn" onclick="openPopupForm()">Add-Data</button></td>
            </tr>
        </tfoot>
    </table>

    <div id="curve_chart" class="curve_chart"></div>

    <!-- item status Start -->
    <!-- card Start -->
    <div class="card">
        <div class="form-container">
            <form id="turbineForm">
                <label for="turbineTextBox">Turbine</label>
                <input type="text" id="turbineTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="generatorForm">
                <label for="generatorTextBox">Generator</label>
                <input type="text" id="generatorTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="hydraulicUnitForm">
                <label for="hydraulicUnitTextBox">Hydraulic Unit</label>
                <input type="text" id="hydraulicUnitTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="lubricationSystemForm">
                <label for="lubricationSystemTextBox">Lubrication System</label>
                <input type="text" id="lubricationSystemTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="dewateringSystemForm">
                <label for="dewateringSystemTextBox">Dewatering System</label>
                <input type="text" id="dewateringSystemTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>


        <div class="form-container">
            <form id="MediumvoltagepanelForm">
                <label for="MediumvoltagepanelTextBox">Medium voltage panel</label>
                <input type="text" id="MediumvoltagepanelTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="LowvoltagePanelForm">
                <label for="LowvoltagePanelTextBox">Low voltage Panel</label>
                <input type="text" id="LowvoltagePanelTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="BatteryPackForm">
                <label for="BatteryPackTextBox">Battery Pack</label>
                <input type="text" id="BatteryPackTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="ControlPanelForm">
                <label for="ControlPanelTextBox">Control Panel</label>
                <input type="text" id="ControlPanelTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="StationServicePanelForm">
                <label for="StationServicePanelTextBox">Station Service Panel</label>
                <input type="text" id="StationServicePanelTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="MotorControlPanelForm">
                <label for="MotorControlPanelTextBox">Motor Control Panel</label>
                <input type="text" id="MotorControlPanelTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="DecentralizedControlCommonForm">
                <label for="DecentralizedControlCommonTextBox">Decentralized Control Common</label>
                <input type="text" id="DecentralizedControlCommonTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="InletValveControlSystemForm">
                <label for="InletValveControlSystemTextBox">Inlet Valve and Control System</label>
                <input type="text" id="InletValveControlSystemTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="BypassValveControlSystemForm">
                <label for="BypassValveControlSystemTextBox">Bypass Valve and Control System</label>
                <input type="text" id="BypassValveControlSystemTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="AuxiliaryGeneratorForm">
                <label for="AuxiliaryGeneratorTextBox">Auxiliary Generator (Outside)</label>
                <input type="text" id="AuxiliaryGeneratorTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="TransformerForm">
                <label for="TransformerTextBox">Transformer</label>
                <input type="text" id="TransformerTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="CTPTTransformerForm">
                <label for="CTPTTransformerTextBox">CT PT Transformer</label>
                <input type="text" id="CTPTTransformerTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="AutoRecloserForm">
                <label for="AutoRecloserTextBox">Auto Re-closer</label>
                <input type="text" id="AutoRecloserTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="MechanicalBypassUnitForm">
                <label for="MechanicalBypassUnitTextBox">Mechanical Bypass Unit (33,000)</label>
                <input type="text" id="MechanicalBypassUnitTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>

        <div class="form-container">
            <form id="OverheadCraneForm">
                <label for="OverheadCraneTextBox">Overhead Crane</label>
                <input type="text" id="OverheadCraneTextBox">
                <button class="btn" type="submit">Status</button>
            </form>
        </div>


    </div> <!-- card end -->




    <!-- item status End -->





    <div id="popup-form" class="popup_form">
        <form action="./add_deduruoya.php" method="post">
            <h2>ADD DATA</h2>
            <input type="date" name="date" required placeholder="date" />
            <br />
            <input type="text" name="unit" required placeholder="Unit-kWh" />
            <br />
            <input type="submit" />
            <button onclick="closePopupForm()"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
        </form>
    </div>

    <div id="popup-form2" class="popup_form">
        <form action="./generete_deduruoya.php" method="post">
            <h2>Date</h2>
            <input type="date" name="date" required placeholder="date" />
            <br />
            <input type="submit" />
            <button onclick="closePopupForm()"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
        </form>
    </div>

    <div id="popup-form3" class="popup_form">
        <form action="./generete_deduruoya.php" method="post">
            <h2>Date</h2>
            <input type="date" name="date" required placeholder="date" />
            <br />
            <input type="submit" />
            <button onclick="closePopupForm()"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
        </form>
    </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    <?php
    include 'config.php';

    $sql = "SELECT date, unit
        FROM deduruoya
        ORDER BY id ASC
        LIMIT 10";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $data = array();

        // Add the header to the array
        $data[] = ['date', 'unit'];

        while ($row = $result->fetch_assoc()) {
            // Fetch and add each row to the array
            $data[] = [date('m-d', strtotime($row['date'])), (int) $row['unit']];
        }

        // Convert the PHP array to a JSON string
        $json_data = json_encode($data);
    } else {
        echo "No data found!";
    }

    $connection->close();
    ?>
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Parse the JSON data generated from PHP
        var jsonData = <?php echo $json_data; ?>;

        var data = google.visualization.arrayToDataTable(jsonData);

        var options = {
            title: "DEDURUOYA POWER PLANT ELECTRICITY GENERATION",
            curveType: "function",
            legend: { position: "none" },
            backgroundColor: { fill: "transparent" },
            chartArea: { left: 70, top: 50, width: '100%', height: '75%' },
            vAxes: { 0: { title: 'k W h' } }
        };

        var chart = new google.visualization.LineChart(
            document.getElementById("curve_chart")
        );

        chart.draw(data, options);
    }
</script>

<script>

    function openPopupForm() {
        document.getElementById('popup-form').style.display = 'block';
        document.getElementById('curve_chart').style.display = 'none';
        var divToBlur = document.getElementById('blurredDiv');
        var mydiv = document.getElementById('myDiv');
        var table = document.getElementById('deduruoya_table');
        divToBlur.classList.add('blurred');
        mydiv.classList.add('blurred');
        table.classList.add('blurred');
    }
    function openPopupForm2() {
        document.getElementById('popup-form2').style.display = 'block';
        document.getElementById('curve_chart').style.display = 'none';
        var divToBlur = document.getElementById('blurredDiv');
        var mydiv = document.getElementById('myDiv');
        var table = document.getElementById('deduruoya_table');
        divToBlur.classList.add('blurred');
        mydiv.classList.add('blurred');
        table.classList.add('blurred');
    }
    function closePopupForm() {
        document.getElementById('popup-form').style.display = 'none';
        document.getElementById('popup-form2').style.display = 'none';
        document.getElementById('curve_chart').style.display = 'block';
        var divToBlur = document.getElementById('blurredDiv');
        var mydiv = document.getElementById('myDiv');
        var table = document.getElementById('deduruoya_table');
        divToBlur.classList.remove('blurred');
        mydiv.classList.remove('blurred');
        table.classList.remove('blurred');
    }
</script>

<script>
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const textBox = this.querySelector('input[type="text"]');
            const selectedColor = prompt('Choose a color (e.g., red, blue, green):');
            textBox.style.backgroundColor = selectedColor;
            // Store selected color in local storage
            localStorage.setItem(textBox.id, selectedColor);
        });

        // Retrieve and apply stored color on page load
        const textBox = form.querySelector('input[type="text"]');
        const storedColor = localStorage.getItem(textBox.id);
        if (storedColor) {
            textBox.style.backgroundColor = storedColor;
        }
    });
</script>




<?php
include("./footer.php");
?>