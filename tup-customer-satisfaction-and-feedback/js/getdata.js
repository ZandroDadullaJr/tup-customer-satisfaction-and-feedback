var pie_dataset = {
    dset: []
}

var cleaned_data = [];

function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", theUrl, false); // false for synchronous request
    xmlHttp.send(null);
    return xmlHttp.responseText;
}

function getData() {
    var result = httpGet("php/getdata.php");
    var resultArr = JSON.parse(result);
    xvar = resultArr;

    cleaned_data = [
        resultArr[0].criteria_1,
        resultArr[0].criteria_2,
        resultArr[0].criteria_3,
        resultArr[0].criteria_4,
        resultArr[0].criteria_5
    ]

    var len = cleaned_data.length;

    for (var i = 0; i < len; i++) {
        pie_dataset.dset.push(cleaned_data[i]);

    }
    console.log(cleaned_data);
}


function main() {
    getData();
}

main();

var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
};

var config = {
    type: 'pie',
    data: {
        datasets: [{
            data: cleaned_data,
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.orange,
                window.chartColors.yellow,
                window.chartColors.green,
                window.chartColors.blue,
            ],
            label: 'Dataset 1'
        }],
        labels: [
            'Red',
            'Orange',
            'Yellow',
            'Green',
            'Blue'
        ]
    },
    options: {
        responsive: true
    }
};



document.getElementById('randomizeData').addEventListener('click', function() {
    config.data.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
            return randomScalingFactor();
        });
    });

    window.myPie.update();
});

var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
    var newDataset = {
        backgroundColor: [],
        data: [],
        label: 'New dataset ' + config.data.datasets.length,
    };

    for (var index = 0; index < config.data.labels.length; ++index) {
        newDataset.data.push(randomScalingFactor());

        var colorName = colorNames[index % colorNames.length];
        var newColor = window.chartColors[colorName];
        newDataset.backgroundColor.push(newColor);
    }

    config.data.datasets.push(newDataset);
    window.myPie.update();
});

document.getElementById('removeDataset').addEventListener('click', function() {
    config.data.datasets.splice(0, 1);
    window.myPie.update();
});


// SPLINE
var chartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        type: 'line',
        label: 'Dataset 1',
        borderColor: window.chartColors.blue,
        borderWidth: 2,
        fill: false,
        data: [
            -5,
            2,
            -4,
            -1,
            5,
            1,
            3
        ]
    }, {
        type: 'bar',
        label: 'Dataset 2',
        backgroundColor: window.chartColors.red,
        data: [
            5,
            10,
            15,
           	20,
            15,
            25,
            15
        ],
        borderColor: 'white',
        borderWidth: 2
    }]

};


document.getElementById('randomizeData').addEventListener('click', function() {
    chartData.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
            return randomScalingFactor();
        });
    });
    window.myMixedChart.update();
});

// ONLOAD FUNCTION

window.onload = function() {
    var ctx = document.getElementById('chart-area').getContext('2d');
    window.myPie = new Chart(ctx, config);

    var ctx1 = document.getElementById('canvas').getContext('2d');
    window.myMixedChart = new Chart(ctx1, {
        type: 'bar',
        data: chartData,
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Chart.js Combo Bar Line Chart'
            },
            tooltips: {
                mode: 'index',
                intersect: true
            }
        }
    });

};