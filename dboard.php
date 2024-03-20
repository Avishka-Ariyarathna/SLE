<?php
include("./header.php");
include 'config.php';
$currentDate = new DateTime();  // Get the current date and time
$currentDate->modify('-1 day'); // Subtract one day
$d = $currentDate->format('Y-m-d');


$sql_deduruoya = "SELECT Revenue,unit FROM deduruoya WHERE date = '" . $d . "'";
$sql_kumbalgamuwa = "SELECT Revenue,unit FROM kumbalgamuwa WHERE date = '" . $d . "'";
$sql_biomed = "SELECT Revenue,unit FROM biomed WHERE date = '" . $d . "'";
$sql_memp = "SELECT Revenue,unit FROM memp WHERE date = '" . $d . "'";

$result_deduruoya = mysqli_query($connection, $sql_deduruoya);
$result_kumbalgamuwa = mysqli_query($connection, $sql_kumbalgamuwa);
$result_biomed = mysqli_query($connection, $sql_biomed);
$result_memp = mysqli_query($connection, $sql_memp);

$row1 = $result_deduruoya->fetch_assoc();
$row2 = $result_kumbalgamuwa->fetch_assoc();
$row3 = $result_biomed->fetch_assoc();
$row4 = $result_memp->fetch_assoc();

$data = array();

// Add the header to the array
$data[] = ['place', 'Generate value'];

// Fetch and add each row to the array
$data[] = ['deduruoya', (int) ($row1['Revenue'] ?? 0)];
$data[] = ['kubalgama', (int) ($row2['Revenue'] ?? 0)];
$data[] = ['biomed', (int) ($row3['Revenue'] ?? 0)];
$data[] = ['memp', (int) ($row4['Revenue'] ?? 0)];

// Convert the PHP array to a JSON string
$json_data = json_encode($data);




?>

<div class="content">
  <h1>Dashboard</h1>

  <div class="card">
    <div class="cot">
      <div class="img">
        <img
          src="./img/Galigamuwa.png"
          alt="">
      </div>
      <div class="text">
        <i  class="fa-solid fa-circle"></i>
      </div>
    </div>

    <div class="cot">
      <div class="img">
        <img
          src="./img/Kubalgama.png"
          alt="">
      </div>
      <div class="text">
      <i  class="fa-solid fa-circle"></i>
      </div>
    </div>
  </div>
  


  <div class="pie-header" style="flex-direction: column;">
    <p>DAILY PRODUCTION</p>
  </div>

  <div class="pie-div">


    <div id="donutchart"></div>

    <div class="pie_table">
      <table style="height: 100%; width: 100%; ">
        <tbody>
          <tr>
            <td><i style="color: black ; margin-right: 5px;" class="fa-solid fa-circle"></i>Date</td>
            <?php echo "<td style='font-weight: bold; '>" . $d . "</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #3366CC ; margin-right: 5px;" class="fa-solid fa-circle"></i>Deduruoya</td>
            <?php echo "<td style='font-weight: bold; '>" . ($row1['unit'] ?? '0') . "kWh</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #DC3912 ; margin-right: 5px; " class="fa-solid fa-circle"></i>kubalgama</td>
            <?php echo "<td style='font-weight: bold; '>" . ($row2['unit'] ?? '0') . "kWh</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #FF9900 ; margin-right: 5px; " class="fa-solid fa-circle"></i>Biomed</td>
            <?php echo "<td style='font-weight: bold; '>" . ($row3['unit'] ?? '0') . "kWh</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #109618 ; margin-right: 5px; " class="fa-solid fa-circle"></i>memp</td>
            <?php echo "<td style='font-weight: bold; '>" . ($row4['unit'] ?? '0') . "</td>"; ?>
          </tr>
        </tbody>
      </table>


    </div>
  </div>


  <div class="pie-header" style="margin-top:50px;">
    <p>DAILY REVENUE</p>
  </div>
  <div class="pie-div">

    <div id="piechart"></div>

    <div class="pie_table">

      <table style="height: 100%; width: 100%; ">
        <tbody>
          <tr>
            <td><i style="color: black ; margin-right: 5px;" class="fa-solid fa-circle"></i>Date</td>
            <?php echo "<td style='font-weight: bold; '>" . $d . "</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #3366CC ; margin-right: 5px;" class="fa-solid fa-circle"></i>Deduruoya</td>
            <?php echo "<td style='font-weight: bold; '>Rs" . ($row1['Revenue'] ?? '0') . ".00</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #DC3912 ; margin-right: 5px; " class="fa-solid fa-circle"></i>kubalgama</td>
            <?php echo "<td style='font-weight: bold; '>Rs" . ($row2['Revenue'] ?? '0') . ".00</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #FF9900 ; margin-right: 5px; " class="fa-solid fa-circle"></i>Biomed</td>
            <?php echo "<td style='font-weight: bold; '>Rs" . ($row3['Revenue'] ?? '0') . ".00</td>"; ?>
          </tr>
          <tr>
            <td><i style="color: #109618 ; margin-right: 5px; " class="fa-solid fa-circle"></i>memp</td>
            <?php echo "<td style='font-weight: bold; '>Rs" . ($row4['Revenue'] ?? '0') . ".00</td>"; ?>
          </tr>
        </tbody>
      </table>

    </div>


  </div>
</div>

</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work', 11],
      ['Eat', 2],
      ['Commute', 2],
      ['Watch TV', 2],
      ['Sleep', 7]
    ]);

    var options = {
      is3D: true,
      legend: 'none',
      backgroundColor: { fill: "transparent" },
      chartArea: { left: 0, top: 0, width: '100%', height: '100%' }
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  google.charts.load('current', { 'packages': ['corechart'] });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var d1 = <?php echo $json_data; ?>

    var data = google.visualization.arrayToDataTable(d1);

    var options = {
      is3D: true,
      title: 'REVENUE',
      legend: 'none',
      backgroundColor: { fill: "transparent" },
      chartArea: { left: 0, top: 0, width: '100%', height: '100%' }
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<?php
include("./footer.php");
?>