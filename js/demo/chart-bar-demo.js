// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var data;
var maxGrafica;
getDatos();
getTopeMaxGrafica();

/* funcion para obtener datos del server*/
function getDatos() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      data = JSON.parse(this.responseText);
      //console.log(data);
      setGraficas(data);
    }
  };
  xmlhttp.open("GET", "services/getLeaderboardMain.php", true);
  xmlhttp.send();
}

/* funcion para obtener el tome mayor de la grafica */
function getTopeMaxGrafica() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      maxGrafica = parseInt(this.responseText, 10);;
      //console.log("MAX: "+maxGrafica);
    }
  };
  xmlhttp.open("GET", "services/getTopeMaxGraficas.php", true);
  xmlhttp.send();
}

// Bar Chart Example
function setGraficas(data) {
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [data[0].grupo, data[1].grupo, data[2].grupo, data[3].grupo, data[4].grupo, data[5].grupo, data[6].grupo, data[7].grupo, data[8].grupo, data[9].grupo, data[10].grupo, data[11].grupo],
      datasets: [{
        label: "PUNTOS",
        backgroundColor: ["#2e59d9", "#2e59d9", "#2e59d9", "#2e59d9", "#5EC58F", "#5EC58F", "#5EC58F", "#5EC58F", "#EFC359", "#EFC359", "#EFC359", "#EFC359"],
        hoverBackgroundColor: "#ED7E24",
        borderColor: "#4e73df",
        data: [data[0].puntos, data[1].puntos, data[2].puntos, data[3].puntos, data[4].puntos, data[5].puntos, data[6].puntos, data[7].puntos, data[8].puntos, data[9].puntos, data[10].puntos, data[11].puntos]
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            maxTicksLimit: 12
          },
          maxBarThickness: 25,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: maxGrafica,
            maxTicksLimit: 5,
            padding: 10,
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
          label: function (tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + " " + tooltipItem.yLabel;
          }
        }
      },
    }
  });
}
