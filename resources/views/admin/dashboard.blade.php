@extends('admin.master.layout')
@section('title','Dashboard')
@section('dashboard','active')
@section('section')
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Today', 'Properties per day'],
     <?php echo $firstdata; ?>
      
      ]);
      var data2 = google.visualization.arrayToDataTable([
        ['Today', 'Staff Wise Property'],
     <?php echo $seconddata; ?>
      
      ]);

      var options = {
        title: 'Total Property Added Today',
        pieHole: 0.3,
        
      };
      var options2 = {
        title: 'Marketing Staff wise property',
        is3D: true,
        
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);

      var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
      chart2.draw(data2, options2);
    }
  </script>


<div class="container-fluid  dashboard-content dash">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
   
      <h2>Dashboard</h2>
            <!-- ============================================================== -->
            <div class="first_chart">
            <div id="piechart" style="width:100%; height: 100%;"></div>
            <div id="piechart2" style="width:100%; height: 100%;"></div>
           
          </div>
        
   
</div>
@endsection