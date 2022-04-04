<!-- http://localhost:8000/easy_gdb/custom_view.php?file_name=easy_atlas.php&table_name=expression/example1.txt&gene_name=Solyc12g100360.1.1 -->
<!-- http://localhost:8000/easy_gdb/custom_view.php?file_name=easy_atlas.php&table_name=expression/example_small.txt&gene_name=Gene1000 -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<?php 
  $table_file = test_input($_GET["table_name"]);
  $gene_name = test_input($_GET["gene_name"]);
  $table_title = str_replace(".txt", "", $table_file);
?>

<div class="page_container" style="margin-top:20px">
  <h1 class="text-center"><?php echo "$table_title" ?></h1>
  <br>
  <div class="data_table_frame">

<?php
if ( file_exists("$custom_text_path/custom_pages/$table_file") ) {
  $tab_file = file("$custom_text_path/custom_pages/$table_file");

  echo "<center><div style=\"width:90%; border:2px solid #666;overflow: scroll;\"><table class=\"table\" id=\"tblResults\"><thead><tr>";
  
  $columns = [];
  $row_count = 0;
  $col_count = 0;
  $field_number = 0;
  
  foreach ($tab_file as $line) {
    $columns = explode("\t", $line);

    if ($row_count == 0) {
      foreach ($columns as $col) {
        echo "<th>$col</th>";
        $col_count++;
        // if ($link_field == $col) {
          // $field_number = $col_count;
        // }
      }
      echo "</tr></thead>";
      
      $col_count = 0;
    } 
    else {
      echo "<tr>";

      if ($columns[0] == $gene_name) {
        foreach ($columns as $col) {
         echo "<td>$col</td>";
        }
      }
      // foreach ($columns as $col) {
        // $col_count++;
        
        // if ($col_count == $field_number) {
        //   echo "<td><a href=\"/easy_gdb/custom_view.php?file_name=row_data.php&row_data=".$table_file.",".$row_count.",".($field_number-1)."\">$col</a></td>";
        //   // echo "<td><a href=\"row_data.php?row_data=".$table_file.",".$row_count.",".($field_number-1)."\">$col</a></td>";
        // } else {
        //   echo "<td>$col</td>";
        // }
      // }
      echo "</tr>";
      $col_count = 0;
    }
    $row_count++;
  
  
  }

  echo "</table></div></center>";
  
}
?>
<br>

<center>
<div id="chart1" style="min-height: 365px;width:90%; border:2px solid #666;"></div><br>
<div id="chart2" style="min-height: 365px;width:90%; border:2px solid #666;"></div><br>
</center>

  </div>
</div>

<br>
<script type="text/javascript">
  
var options = {
  series: [{
      name: "Sample1",
      data: [
        [1,2.99],[1, 8.89],[1, 5.2]
      ]},
      {name: "Sample2",
      data: [
        [2,5.93],[2, 22],[2, 17.03]
      ]},
      {name: "Sample3",
      data: [
        [3,5.93],[3, 22],[3, 17.03]
      ]},
      {name: "Sample4",
      data: [
        [4,15.5],[4, 16],[4, 17.03]
      ]},
      {name: "Sample5",
      data: [
        [5,5.93],[5, 22],[5, 17.03]
      ]},
      {name: "Sample6",
      data: [
        [6,5.93],[6, 6],[6, 5.53]
      ]},
      {name: "Sample7",
      data: [
        [7,5.93],[7, 22],[7, 17.03]
      ]},
      {name: "Sample8",
      data: [
        [8,0.93],[8, 0.222],[8, 1.03]
      ]},
      {name: "Sample9",
      data: [
        [9,5.93],[9, 22],[9, 17.03]
      ]},
      {name: "Sample10",
      data: [
        [10,5.16],[10, 0.18],[10, 21.58]
      ]
  }],
  chart: {
    height: 350,
    type: 'scatter',
    zoom: {
      enabled: false,
      // type: 'xy'
    }
  },
  title: {
    text: 'Gene1 Expression values (RPKM)'
  },
  xaxis: {
    type: 'category',
    categories: ["Sample1", "Sample2", "Sample3","Sample4", "Sample5", "Sample6","Sample7", "Sample8", "Sample9", "Sample10"],
    tickAmount: 9,
    labels: {
      formatter: function(val) {
        return val;
        // return parseFloat(val).toFixed(1)
      }
    }
  },
  yaxis: {
    tickAmount: 5
  },
  legend: {
    show: false
    // position: 'top'
  }
};

          var chart = new ApexCharts(document.querySelector("#chart2"), options);
          chart.render();




var options = {
  series: [
    {
      name: 'Gene1',
      data: [12,4,3,15,2,4,17,2,0.54,2.30]
    },
    {
      name: 'Gene2',
      data: [1,4.5,3.9,11,5,4.5,14,2,2.54,3.30]
    },
    {
      name: 'Gene3',
      data: [12,4,3,15,2,4,17,2,0.54,2.30]
    },
    {
      name: 'Gene4',
      data: [1,4.5,3.9,11,5,4.5,14,2,2.54,3.30]
    },
    {
      name: 'Gene5',
      data: [12,4,3,15,2,4,17,2,0.54,2.30]
    },
    {
      name: 'Gene6',
      data: [1,4.5,3.9,11,5,4.5,14,2,2.54,3.30]
    },
    {
      name: 'Gene7',
      data: [12,4,3,15,2,4,17,2,0.54,2.30]
    },
    {
      name: 'Gene8',
      data: [12,4,3,15,2,4,17,2,0.54,2.30]
    },
    {
      name: 'Gene9',
      data: [1,4.5,3.9,11,5,4.5,14,2,2.54,3.30]
    },
    {
      name: 'Gene10',
      data: [9,3,3,14,5,6,12,4,3,13]
    }
  ],
  chart: {
    height: 350,
    type: 'heatmap',
  },
  dataLabels: {
    enabled: false
  },
  colors: ["#FF0000"],
  title: {
    text: 'Expression values of gene selection (RPKM)'
  },
  
  xaxis: {
    type: 'category',
    categories: ["Sample1", "Sample2", "Sample3","Sample4", "Sample5", "Sample6", "Sample7", "Sample8","Sample9", "Sample10"],
    // tickAmount: 2,
    labels: {
      formatter: function(val) {
        return val;
        // return parseFloat(val).toFixed(1)
      }
    }
  }
  
};

var chart = new ApexCharts(document.querySelector("#chart1"), options);
chart.render();


      
  // $("#tblResults").dataTable({
  //   "dom":'Bfrtip',
  //   "ordering": false,
  //   "buttons": ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
  // });
  //
  // $("#tblResults_filter").addClass("float-right");
  // $("#tblResults_info").addClass("float-left");
  // $("#tblResults_paginate").addClass("float-right");
  //
  //


</script>


