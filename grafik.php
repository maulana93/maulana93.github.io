<style>
    #chartdiv {
      width: 100%;
      height: 500px;
    }
    </style>
<div id="chartdiv"></div>
      <script>
        /**
         * ---------------------------------------
         * This demo was created using amCharts 4.
         *
         * For more information visit:
         * https://www.amcharts.com/
         *
         * Documentation is available at:
         * https://www.amcharts.com/docs/v4/
         * ---------------------------------------
         */

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.XYChart);

        // Set up data source
        chart.dataSource.url = window.location+"assets/data/data.json";

        // Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "date";

        // Create value axis
        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series1 = chart.series.push(new am4charts.ColumnSeries());
        series1.dataFields.valueY = "sales_toko_a";
        series1.dataFields.categoryX = "date";
        series1.name = "Toko A";
        series1.strokeWidth = 3;
        series1.tensionX = 0.7;
        series1.columns.template.tooltipText = "Toko: {name}\nTanggal: {categoryX}\nPenjualan: {valueY}";

        var series2 = chart.series.push(new am4charts.ColumnSeries());
        series2.dataFields.valueY = "sales_toko_b";
        series2.dataFields.categoryX = "date";
        series2.name = "Toko B";
        series2.strokeWidth = 3;
        series2.tensionX = 0.7;
        series2.columns.template.tooltipText = "Toko: {name}\nTanggal: {categoryX}\nPenjualan: {valueY}";

        var series3 = chart.series.push(new am4charts.ColumnSeries());
        series3.dataFields.valueY = "sales_toko_c";
        series3.dataFields.categoryX = "date";
        series3.name = "Toko C";
        series3.strokeWidth = 3;
        series3.tensionX = 0.7;
        series3.columns.template.tooltipText = "Toko: {name}\nTanggal: {categoryX}\nPenjualan: {valueY}";

        // Add legend
        chart.legend = new am4charts.Legend();
      </script>