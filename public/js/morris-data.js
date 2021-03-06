// Dashboard 1 Morris-chart
/*
Template Name: Monster Admin
Author: nimadeveloper.ir
Email: nima.bigham5@gmail.com
File: js
*/
$(function () {
    "use strict";
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '1390',
            male: 130,
            women: 100,
            avg: 80
        }, {
            period: '1390',
            male: 130,
            women: 100,
            avg: 80
        }, {
            period: '1391',
            male: 80,
            women: 60,
            avg: 70
        }, {
            period: '1392',
            male: 70,
            women: 200,
            avg: 140
        }, {
            period: '1393',
            male: 180,
            women: 150,
            avg: 140
        }, {
            period: '1394',
            male: 105,
            women: 100,
            avg: 80
        },
            {
                period: '1395',
                male: 250,
                women: 150,
                avg: 200
            }],
        xkey: 'period',
        ykeys: ['avg', 'women', 'male'],
        labels: ['میانگین', 'زن', 'مرد'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors: ['#f6e700', '#009efb', '#55ce63'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#f6e700', '#009efb', '#55ce63'],
        resize: true

    });

    Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            period: '1390',
            SiteA: 0,
            SiteB: 0,

        }, {
            period: '1391',
            SiteA: 130,
            SiteB: 100,

        }, {
            period: '1392',
            SiteA: 80,
            SiteB: 60,

        }, {
            period: '1393',
            SiteA: 70,
            SiteB: 200,

        }, {
            period: '1394',
            SiteA: 180,
            SiteB: 150,

        }, {
            period: '1395',
            SiteA: 105,
            SiteB: 90,

        },
            {
                period: '1396',
                SiteA: 250,
                SiteB: 150,

            }],
        xkey: 'period',
        ykeys: ['SiteA', 'SiteB'],
        labels: ['سایت الف', 'سایت ب'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors: ['#b4becb', '#009efb'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#b4becb', '#009efb'],
        resize: true

    });


// LINE CHART
    var line = new Morris.Line({
        element: 'morris-line-chart',
        resize: true,
        data: [
            {y: '1394 Q1', item1: 2666},
            {y: '1394 Q2', item1: 2778},
            {y: '1394 Q3', item1: 4912},
            {y: '1394 Q4', item1: 3767},
            {y: '1395 Q1', item1: 6810},
            {y: '1395 Q2', item1: 5670},
            {y: '1395 Q3', item1: 4820},
            {y: '1395 Q4', item1: 15073},
            {y: '1396 Q1', item1: 10687},
            {y: '1396 Q2', item1: 8432}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['آیتم 1'],
        gridLineColor: '#eef0f2',
        lineColors: ['#009efb'],
        lineWidth: 1,
        hideHover: 'auto'
    });
    // Morris donut chart

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "فروش دانلود",
            value: 12,

        }, {
            label: "فروش در فروشگاه",
            value: 30
        }, {
            label: "سفارش از طریق ایمیل",
            value: 20
        }],
        resize: true,
        colors: ['#009efb', '#55ce63', '#2f3d4a']
    });

// Morris bar chart

    Morris.Bar({
        element: 'morris-bar-chart',
        data: items,
        xkey: 'key',
        ykeys: ['age_max', 'age_min', 'age_avg'],
        labels: ['حداکثر سن ', 'حداقل سن ', 'میانگین'],
        barColors: ['#55ce63', '#2f3d4a', '#009efb'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
// Extra chart
    Morris.Area({
        element: 'extra-area-chart',
        data: [{
            period: '1391',
            male: 0,
            women: 0,
            avg: 0
        }, {
            period: '1392',
            male: 50,
            women: 15,
            avg: 5
        }, {
            period: '1393',
            male: 20,
            women: 50,
            avg: 65
        }, {
            period: '1394',
            male: 60,
            women: 12,
            avg: 7
        }, {
            period: '1395',
            male: 30,
            women: 20,
            avg: 120
        }, {
            period: '1396',
            male: 25,
            women: 80,
            avg: 40
        }, {
            period: '1397',
            male: 10,
            women: 10,
            avg: 10
        }


        ],
        lineColors: ['#55ce63', '#2f3d4a', '#009efb'],
        xkey: 'period',
        ykeys: ['male', 'women', 'avg'],
        labels: ['سایت الف', 'سایت ب', 'سایت ج'],
        pointSize: 0,
        lineWidth: 0,
        resize: true,
        fillOpacity: 0.8,
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        hideHover: 'auto'

    });
});