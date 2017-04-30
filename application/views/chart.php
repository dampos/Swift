<?php
function printData($points)
{
  //print_r($points);

  foreach($points as $point)
  {
    echo '[new Date(' . $point['time_from'] * 1000 . '),' . $point['value'] . '],';
  }
}
//print_r($points);

?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
  	
  	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('datetime', 'Date');
      data.addColumn('number', 'w/h');
	  

      data.addRows([
		<?php printData($points); ?>
      ]);

      var options = {
        hAxis: {
		
          title: 'Time'
        },
        vAxis: {
          title: 'Power Generated',
          baseline: 0,
        },
		explorer: { actions: ['dragToZoom', 'rightClickToReset'], axis: 'horizontal' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>

<div id="chart_div"></div>