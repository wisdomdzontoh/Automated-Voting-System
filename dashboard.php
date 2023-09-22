<?php
include "dbcon.php";

// Get the list of positions from the database
$positions_result = $conn->query("SELECT DISTINCT position FROM candidate");
$positions = array();
while ($row = $positions_result->fetch_assoc()) {
    $positions[] = $row['position'];
}

// Loop through the positions and create a separate pie chart for each one
foreach ($positions as $position) {
    $result = $conn->query("SELECT candidate.candidate_id, SUM(votes.candidate_id) as total_votes FROM candidate INNER JOIN votes ON candidate.candidate_id = votes.candidate_id WHERE candidate.position='$position' GROUP BY candidate.candidate_id");
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $candidate = $row['candidate_id'];
        $votes = $row['total_votes'];
        $rows[] = "['Candidate $candidate', $votes]";
    }
    $data = implode(",", $rows);
?>

<html>
  <head>
  <style>
  .home-btn {
			position: fixed;
			top: 20px;
			left: 20px;
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			text-decoration: none;
			font-weight: bold;
			border-radius: 5px;
			box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
		}

		.home-btn:hover {
			background-color: #0062cc;
			color: #fff;
			box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
		}
  div {
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
body {
			background-image: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v952-bb-004-b-klxbs7on.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=a1d99f58ae46e4fcab3b20668b9789a3");
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart<?php echo $position; ?>);
      function drawChart<?php echo $position; ?>() {
        var data = google.visualization.arrayToDataTable([
          ['Candidate', 'Votes'],
          <?php echo $data; ?>
        ]);

        var options = {
          title: '<?php echo $position; ?> Election Results',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_<?php echo $position; ?>'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_<?php echo $position; ?>" style="width: 900px; height: 500px;"></div>
    <a href="http://evotingsystem.42web.io/" class="home-btn">Home</a>
    
  </body>
    
</html>

<?php
}
?>
