// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php   
    //Número do quarto e a quantidade de reservas
    include_once '../../modelo/dao/QuartoDAO.php';
    $listaQuartos = QuartoDAO::getInstance()->listAll();
    for ($i=0; $i<sizeof($listaQuartos);$i++){
        echo "\"".$listaQuartos[$i]->getNumeroQuarto()."\"";
        if ($i+1 < sizeof($listaQuartos))
            echo ", ";
    }
    
    ?>],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [<?php
      include_once '../../modelo/dao/ReservaDAO.php';
      $sql = "where idQuarto in (select quarto.id from quarto where quarto.numeroQuarto = :quarto)";
      $arrayDeParametros = array (":quarto");
      for ($i=0; $i<sizeof($listaQuartos);$i++){
          $arrayDeValores = array ($listaQuartos[$i]->getNumeroQuarto());
          $listaReservas = 
                ReservaDAO::getInstance()->listWhere(
                $sql, $arrayDeParametros, $arrayDeValores);
          echo sizeof($listaReservas);
          if ($i+1<sizeof($listaQuartos))
            echo ", ";
      }
      ?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 10,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
