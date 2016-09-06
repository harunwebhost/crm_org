$(function() {
    selected_by_us="Today's FreeTrail";
    chartganrator(selected_by_us);
   $('.dropdown-inverse li > a').click(function(e){
    selected_by_us=$(this).text();
    chartganrator(selected_by_us);
    });
   

   function chartganrator(selected_by_us){
     $.ajax({

        url  : 'chart_data.php',
        type : 'GET',
        data : 'selected='+selected_by_us,
        success: function(data) {
            chartData = data;
            
            var chartProperties = {
                "caption": "",
                "xAxisName": "Employee Name",
                "yAxisName": "Free Trails",
                "rotatevalues": "1",
                "theme": "zune"
            }

            apiChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container',
                width: '550',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
       }
    });
   }

});