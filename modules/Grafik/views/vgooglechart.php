<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.

      //statis
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          <?php 
              $query = $this->db->query("select * from tbl_kwh")->result_array();

              foreach($query as $row){
                echo "['".$row['tanggal']."',".$row['jumlah']."],";                
              }


          ?>


          // ['apple', 5],
          // ['mangga', 1],
          // ['rambutan', 1],
          // ['pisang', 1],
          // ['jeruk', 2],
          
        ]);

        // Set chart options
        var options = {'title':'Google Chart PIE',
                       'width':400,
                       'height':300,
                       'pieHole': 0.4 //donat
                        //'is3D': true, untuk memakai 3d

                      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('pie'));
        chart.draw(data, options);
      }

       // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(linechart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and


      function linechart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Phase');
        data.addRows([
          <?php 
              $query = $this->db->query("select * from tbl_kwh ")->result_array();

              $bulan = array('januari','februari','maret','april','mei','juni');

              foreach($query as $row){
                echo "['".$row['phase']."',".$row['jumlah']."],";                
              }


          ?>


          // ['apple', 5],
          // ['mangga', 1],
          // ['rambutan', 1],
          // ['pisang', 1],
          // ['jeruk', 2],
          
        ]);

        // Set chart options
         var options = {
        chart: {
          title: 'Box Office Earnings in First Two Weeks of Opening',
          subtitle: 'in millions of dollars (USD)'
        },
        width: 900,
        height: 500
      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('line'));
        chart.draw(data, options);
      }


      // dinamis
    //   function drawChart() {
    //   var jsonData = $.ajax({
    //       url: "http://localhost/pertamina/grafik/get_google",
    //       dataType: "json",
    //       async: false
    //       }).responseText;
          
    //   // Create our data table out of JSON data loaded from server.
    //   var data = new google.visualization.DataTable(jsonData);

    //   // Instantiate and draw our chart, passing in some options.
    //   var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    //   chart.draw(data, {width: 400, height: 240});
    // }

    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="pie"></div>
    <br>=======================<br>
    <div id="line"></div>
  </body>
</html>