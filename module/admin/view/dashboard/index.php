<!--
<div class="row">
    <div class="col-md-6">
        <canvas id="myChart" ></canvas>
    </div>

    <div class="col-md-6">
        <canvas id="pieChart"></canvas>
    </div>
</div>
-->
<div class="alert-warning alert" >Gráfico de registro por gênero de 2017</div>
<div class="row">
    <div class="col-md-12">
        <canvas id="lineChart"></canvas>
    </div>
</div>


<script>

    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho","Agosto","Setembro","Outubro","Novembro", "Dezembro"],
            datasets: [
                {
                    label: "Homens",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [

                        <?=isset($dadosGraficoGenero[1][1]['total']) ? $dadosGraficoGenero[1][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[2][1]['total']) ? $dadosGraficoGenero[2][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[3][1]['total']) ? $dadosGraficoGenero[3][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[4][1]['total']) ? $dadosGraficoGenero[4][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[5][1]['total']) ? $dadosGraficoGenero[5][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[6][1]['total']) ? $dadosGraficoGenero[6][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[7][1]['total']) ? $dadosGraficoGenero[7][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[8][1]['total']) ? $dadosGraficoGenero[8][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[9][1]['total']) ? $dadosGraficoGenero[9][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[10][1]['total']) ? $dadosGraficoGenero[10][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[11][1]['total']) ? $dadosGraficoGenero[11][1]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[12][1]['total']) ? $dadosGraficoGenero[12][1]['total'] : 0?>,

                    ]
                },
                {
                    label: "Mulheres",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [
                        <?=isset($dadosGraficoGenero[1][2]['total']) ? $dadosGraficoGenero[1][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[2][2]['total']) ? $dadosGraficoGenero[2][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[3][2]['total']) ? $dadosGraficoGenero[3][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[4][2]['total']) ? $dadosGraficoGenero[4][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[5][2]['total']) ? $dadosGraficoGenero[5][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[6][2]['total']) ? $dadosGraficoGenero[6][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[7][2]['total']) ? $dadosGraficoGenero[7][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[8][2]['total']) ? $dadosGraficoGenero[8][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[9][2]['total']) ? $dadosGraficoGenero[9][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[10][2]['total']) ? $dadosGraficoGenero[10][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[11][2]['total']) ? $dadosGraficoGenero[11][2]['total'] : 0?>,
                        <?=isset($dadosGraficoGenero[12][2]['total']) ? $dadosGraficoGenero[12][2]['total'] : 0?>,
                    ]
                }
            ]
        },
        options: {
            responsive: true
        }
    });
</script>

