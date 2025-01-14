"use strict";
$(document).ready(function () {
  initCardChart();
  initCardChart2();
  initamChartBar();
  amChartCylinder();
  amChartGauge();
  //   initChartReport1();
  //   initChartReport2();
  amChartLineWidget();
});

var barChartData = [];
for (var i = 0; i <= 20; i += 1) {
  barChartData.push([i, parseInt(Math.random() * 30)]);
}
Morris.Area({
  element: "area_chart",
  data: [
    { w: "2011 Q1", x: 2, y: 0, z: 0 },
    { w: "2011 Q2", x: 50, y: 15, z: 5 },
    { w: "2011 Q3", x: 15, y: 50, z: 23 },
    { w: "2011 Q4", x: 45, y: 12, z: 7 },
    { w: "2011 Q5", x: 20, y: 32, z: 55 },
    { w: "2011 Q6", x: 39, y: 67, z: 20 },
    { w: "2011 Q7", x: 20, y: 9, z: 5 },
  ],
  xkey: "w",
  ykeys: ["x", "y", "z"],
  labels: ["X", "Y", "Z"],
  pointSize: 0,
  lineWidth: 0,
  resize: true,
  fillOpacity: 0.8,
  behaveLikeLine: true,
  gridLineColor: "#e0e0e0",
  hideHover: "auto",
  lineColors: ["rgb(97, 97, 97)", "rgb(0, 206, 209)", "rgb(255, 117, 142)"],
});
Morris.Line({
  element: "project_line",
  data: [
    {
      period: "2008",
      iphone: 35,
      ipad: 67,
      itouch: 15,
    },
    {
      period: "2009",
      iphone: 140,
      ipad: 189,
      itouch: 67,
    },
    {
      period: "2010",
      iphone: 50,
      ipad: 80,
      itouch: 22,
    },
    {
      period: "2011",
      iphone: 180,
      ipad: 220,
      itouch: 76,
    },
    {
      period: "2012",
      iphone: 130,
      ipad: 110,
      itouch: 82,
    },
    {
      period: "2013",
      iphone: 80,
      ipad: 60,
      itouch: 85,
    },
    {
      period: "2014",
      iphone: 78,
      ipad: 205,
      itouch: 135,
    },
    {
      period: "2015",
      iphone: 180,
      ipad: 124,
      itouch: 140,
    },
    {
      period: "2016",
      iphone: 105,
      ipad: 100,
      itouch: 85,
    },
    {
      period: "2017",
      iphone: 210,
      ipad: 180,
      itouch: 120,
    },
  ],
  xkey: "period",
  ykeys: ["iphone", "ipad", "itouch"],
  labels: ["iPhone", "iPad", "iPod Touch"],
  pointSize: 3,
  fillOpacity: 0,
  pointStrokeColors: ["#222222", "#cccccc", "#f96332"],
  behaveLikeLine: true,
  gridLineColor: "#e0e0e0",
  lineWidth: 2,
  hideHover: "auto",
  lineColors: ["#222222", "#20B2AA", "#f96332"],
  resize: true,
});

function initCardChart2() {
  //Chart Bar
  $(".chart.chart-bar-2").sparkline(undefined, {
    type: "bar",
    barColor: "#fff",
    negBarColor: "#fff",
    barWidth: "4px",
    height: "45px",
  });
  $(".chart.chart-bar2").sparkline(undefined, {
    type: "bar",
    barColor: "#54B253",
    negBarColor: "#000",
    barWidth: "4px",
    height: "65px",
  });

  //Chart Pie
  $(".chart.chart-pie-2").sparkline(undefined, {
    type: "pie",
    height: "45px",
    sliceColors: [
      "rgba(255,255,255,0.70)",
      "rgba(255,255,255,0.85)",
      "rgba(255,255,255,0.95)",
      "rgba(255,255,255,1)",
    ],
  });

  //Chart Line
  $(".chart.chart-line-2").sparkline(undefined, {
    type: "line",
    width: "60px",
    height: "45px",
    lineColor: "#fff",
    lineWidth: 1.3,
    fillColor: "rgba(0,0,0,0)",
    spotColor: "rgba(255,255,255,0.40)",
    maxSpotColor: "rgba(255,255,255,0.40)",
    minSpotColor: "rgba(255,255,255,0.40)",
    spotRadius: 3,
    highlightSpotColor: "#fff",
  });
}

function initCardChart() {
  //Chart Bar
  $(".chart.chart-bar").sparkline(
    [6, 4, 8, 6, 8, 10, 5, 6, 7, 9, 5, 6, 4, 8, 6, 8, 10, 5, 6, 7, 9, 5],
    {
      type: "bar",
      barColor: "#FF9800",
      negBarColor: "#fff",
      barWidth: "4px",
      height: "45px",
    }
  );

  //Chart Pie
  $(".chart.chart-pie").sparkline([30, 35, 25, 8], {
    type: "pie",
    height: "45px",
    sliceColors: ["#65BAF2", "#F39517", "#F44586", "#6ADF42"],
  });

  //Chart Line
  $(".chart.chart-line").sparkline([9, 4, 6, 5, 6, 4, 7, 3], {
    type: "line",
    width: "60px",
    height: "45px",
    lineColor: "#65BAF2",
    lineWidth: 2,
    fillColor: "rgba(0,0,0,0)",
    spotColor: "#F39517",
    maxSpotColor: "#F39517",
    minSpotColor: "#F39517",
    spotRadius: 3,
    highlightSpotColor: "#F44586",
  });

  // live chart
  var mrefreshinterval = 500; // update display every 500ms
  var lastmousex = -1;
  var lastmousey = -1;
  var lastmousetime;
  var mousetravel = 0;
  var mpoints = [];
  var mpoints_max = 30;
  $("html").on("mousemove", function (e) {
    var mousex = e.pageX;
    var mousey = e.pageY;
    if (lastmousex > -1) {
      mousetravel += Math.max(
        Math.abs(mousex - lastmousex),
        Math.abs(mousey - lastmousey)
      );
    }
    lastmousex = mousex;
    lastmousey = mousey;
  });
  var mdraw = function () {
    var md = new Date();
    var timenow = md.getTime();
    if (lastmousetime && lastmousetime != timenow) {
      var pps = Math.round((mousetravel / (timenow - lastmousetime)) * 1000);
      mpoints.push(pps);
      if (mpoints.length > mpoints_max) mpoints.splice(0, 1);
      mousetravel = 0;
      $("#liveChart").sparkline(mpoints, {
        width: mpoints.length * 2,
        height: "45px",
        tooltipSuffix: " pixels per second",
      });
    }
    lastmousetime = timenow;
    setTimeout(mdraw, mrefreshinterval);
  };
  // We could use setInterval instead, but I prefer to do it this way
  setTimeout(mdraw, mrefreshinterval);
}

function initamChartBar() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("amChartBar", am4charts.XYChart);

  // Add data
  chart.data = [
    {
      date: "2012-07-27",
      value: 13,
    },
    {
      date: "2012-08-28",
      value: 11,
    },
    {
      date: "2012-09-29",
      value: 14,
    },
    {
      date: "2012-10-30",
      value: 10,
    },
    {
      date: "2012-11-31",
      value: 12,
    },
  ];

  // Create axes
  var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
  dateAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");
  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  // Create series
  var series = chart.series.push(new am4charts.LineSeries());
  series.dataFields.valueY = "value";
  series.dataFields.dateX = "date";
  series.tooltipText = "{value}";
  series.strokeWidth = 2;
  series.minBulletDistance = 5;

  // Make bullets grow on hover
  var bullet = series.bullets.push(new am4charts.CircleBullet());
  bullet.circle.strokeWidth = 2;
  bullet.circle.radius = 4;
  bullet.circle.fill = am4core.color("#fff");

  var bullethover = bullet.states.create("hover");
  bullethover.properties.scale = 1.3;

  // Make a panning cursor
  chart.cursor = new am4charts.XYCursor();
  chart.cursor.behavior = "panXY";
}

function amChartCylinder() {
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("amChartCylinder", am4charts.XYChart3D);

  chart.titles.create().text = "Chart Data";

  // Add data
  chart.data = [
    {
      category: "Q1",
      value1: 30,
      value2: 70,
    },
    {
      category: "Q2",
      value1: 15,
      value2: 85,
    },
    {
      category: "Q3",
      value1: 40,
      value2: 60,
    },
    {
      category: "Q4",
      value1: 55,
      value2: 45,
    },
  ];

  // Create axes
  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
  categoryAxis.dataFields.category = "category";
  categoryAxis.renderer.grid.template.location = 0;
  categoryAxis.renderer.grid.template.strokeOpacity = 0;
  categoryAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.renderer.grid.template.strokeOpacity = 0;
  valueAxis.min = -10;
  valueAxis.max = 110;
  valueAxis.strictMinMax = true;
  valueAxis.renderer.baseGrid.disabled = true;
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");
  valueAxis.renderer.labels.template.adapter.add("text", function (text) {
    if (text > 100 || text < 0) {
      return "";
    } else {
      return text + "%";
    }
  });

  // Create series
  var series1 = chart.series.push(new am4charts.ConeSeries());
  series1.dataFields.valueY = "value1";
  series1.dataFields.categoryX = "category";
  series1.columns.template.width = am4core.percent(60);
  series1.columns.template.fillOpacity = 0.9;
  series1.columns.template.strokeOpacity = 1;
  series1.columns.template.strokeWidth = 2;

  var series2 = chart.series.push(new am4charts.ConeSeries());
  series2.dataFields.valueY = "value2";
  series2.dataFields.categoryX = "category";
  series2.stacked = true;
  series2.columns.template.width = am4core.percent(60);
  series2.columns.template.fill = am4core.color("#000");
  series2.columns.template.fillOpacity = 0.1;
  series2.columns.template.stroke = am4core.color("#000");
  series2.columns.template.strokeOpacity = 0.2;
  series2.columns.template.strokeWidth = 2;
}

function amChartGauge() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  var chart = am4core.create("amChartGauge", am4charts.XYChart);

  var data = [];

  chart.data = [
    {
      year: "2014",
      income: 13.5,
      lineColor: chart.colors.next(),
    },
    {
      year: "2015",
      income: 20.1,
      expenses: 34.9,
    },
    {
      year: "2016",
      income: 30.6,
      lineColor: chart.colors.next(),
    },
    {
      year: "2017",
      income: 28.1,
    },
    {
      year: "2018",
      income: 26.1,
      lineColor: chart.colors.next(),
    },
    {
      year: "2019",
      income: 30.1,
    },
  ];

  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
  categoryAxis.renderer.grid.template.location = 0;
  categoryAxis.renderer.ticks.template.disabled = true;
  categoryAxis.renderer.line.opacity = 0;
  categoryAxis.renderer.grid.template.disabled = true;
  categoryAxis.renderer.minGridDistance = 40;
  categoryAxis.dataFields.category = "year";
  categoryAxis.startLocation = 0.4;
  categoryAxis.endLocation = 0.6;
  categoryAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.tooltip.disabled = true;
  valueAxis.renderer.line.opacity = 0;
  valueAxis.renderer.ticks.template.disabled = true;
  valueAxis.min = 0;
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  var lineSeries = chart.series.push(new am4charts.LineSeries());
  lineSeries.dataFields.categoryX = "year";
  lineSeries.dataFields.valueY = "income";
  lineSeries.tooltipText = "income: {valueY.value}";
  lineSeries.fillOpacity = 0.5;
  lineSeries.strokeWidth = 3;
  lineSeries.propertyFields.stroke = "lineColor";
  lineSeries.propertyFields.fill = "lineColor";

  var bullet = lineSeries.bullets.push(new am4charts.CircleBullet());
  bullet.circle.radius = 6;
  bullet.circle.fill = am4core.color("#fff");
  bullet.circle.strokeWidth = 3;

  chart.cursor = new am4charts.XYCursor();
  chart.cursor.behavior = "panX";
  chart.cursor.lineX.opacity = 0;
  chart.cursor.lineY.opacity = 0;
}

function amChartLineWidget() {
  am4core.ready(function () {
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create chart instance
    var chart = am4core.create("amChartLineWidget", am4charts.XYChart);

    // Add data
    chart.data = [
      {
        date: "2012-03-01",
        price: 20,
      },
      {
        date: "2012-03-02",
        price: 75,
      },
      {
        date: "2012-03-03",
        price: 15,
      },
      {
        date: "2012-03-04",
        price: 75,
      },
      {
        date: "2012-03-05",
        price: 158,
      },
      {
        date: "2012-03-06",
        price: 57,
      },
      {
        date: "2012-03-07",
        price: 107,
      },
      {
        date: "2012-03-08",
        price: 89,
      },
      {
        date: "2012-03-09",
        price: 75,
      },
      {
        date: "2012-03-10",
        price: 132,
      },
      {
        date: "2012-03-11",
        price: 380,
      },
      {
        date: "2012-03-12",
        price: 56,
      },
      {
        date: "2012-03-13",
        price: 169,
      },
      {
        date: "2012-03-14",
        price: 24,
      },
      {
        date: "2012-03-15",
        price: 147,
      },
    ];

    // Create axes
    var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
    dateAxis.renderer.grid.template.location = 0;
    dateAxis.renderer.minGridDistance = 50;
    dateAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.logarithmic = true;
    valueAxis.renderer.minGridDistance = 20;
    valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

    // Create series
    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.valueY = "price";
    series.dataFields.dateX = "date";
    series.tensionX = 0.8;
    series.strokeWidth = 3;

    var bullet = series.bullets.push(new am4charts.CircleBullet());
    bullet.circle.fill = am4core.color("#fff");
    bullet.circle.strokeWidth = 3;

    // Add cursor
    chart.cursor = new am4charts.XYCursor();
    chart.cursor.fullWidthLineX = true;
    chart.cursor.xAxis = dateAxis;
    chart.cursor.lineX.strokeWidth = 0;
    chart.cursor.lineX.fill = am4core.color("#000");
    chart.cursor.lineX.fillOpacity = 0.1;

    // Add scrollbar
    chart.scrollbarX = new am4core.Scrollbar();

    // Add a guide
    let range = valueAxis.axisRanges.create();
    range.value = 90.4;
    range.grid.stroke = am4core.color("#396478");
    range.grid.strokeWidth = 1;
    range.grid.strokeOpacity = 1;
    range.grid.strokeDasharray = "3,3";
    range.label.inside = true;
    range.label.text = "Average";
    range.label.fill = range.grid.stroke;
    range.label.verticalCenter = "bottom";
  }); // end am4core.ready()
}
