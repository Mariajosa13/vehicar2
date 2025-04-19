 obtenerlocal();



function obtenerlocal(){
    if(localStorage.getItem('nombre')){
    let nombre = localStorage.getItem('nombre');
    let nombre2 = JSON.parse(localStorage.getItem('nombre2'));
    
        
        var num = [nombre2['pila1'],nombre2['pila2'],nombre2['pila3'],nombre2['pila4'],nombre2['pila5']];
        
        //alert(num);
        
  
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Pila 1", "Pila 2", "Pila 3", "Pila 4", "Pila 5"],
    datasets: [{
      label: "Consumo",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [nombre2['pila1'],nombre2['pila2'],nombre2['pila3'],nombre2['pila4'],nombre2['pila5']],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 20000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
        
         }else{
        console.log('No hay datos');
    }
} 
