
/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

$(document).ready(function (e) {

    getGraficoDecomportamientoCDI();
    getGraficoDecomportamientoCDINum();
    getPieChart3D();
});

function getGraficoDecomportamientoCDI() {

    $.ajax({
        url: base_url + 'index.php/ctrlComportamientoDesarrollo/getGraficoDeComportamientoCDI',
        type: 'POST'
    }).done(function (data) {
        $('#rGraficoCCDI').html(data);
    });
}
function getGraficoDecomportamientoCDINum() {

    $.ajax({
        url: base_url + 'index.php/ctrlComportamientoDesarrollo/getGraficoDeComportamientoCDINum',
        type: 'POST'
    }).done(function (data) {
        $('#rGraficoCCDIn').html(data);
    });
}

function getNumberWithFormatPorcentaje(v)
{
    return v * 100;
}
function getPieChart3D() {
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'VIVIENDAS VENDIDAS'],
            ['MILAN', 11],
            ['ROMA', 13]
        ]);

        var options = {
            title: 'INGRESOS POR VENTAS DE VIVIENDAS',
            pieHole: 0.4,
            width: 600,
            height: 400
        };

        var chart = new google.visualization.PieChart(document.getElementById('rGraficoIVV'));
        chart.draw(data, options);
    }
}