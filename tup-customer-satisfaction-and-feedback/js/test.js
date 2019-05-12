var data1, data2, data3, data4, data5;
var dataArr2, valuess;

function getOffice(criteria) {
    axios.get(`php/getdata.php?arr=${JSON.stringify(criteria)}`).then(
        res => {
            data2 = res.data;
            console.log(data2);
            return parseInt(res.data);
        })
}

var randomScalingFactor = function(num) {
    var test = axios.get("php/getdata.php").then(
        res => {
            var dataArr = res.data;
            console.log("INSIDE FUNCTION");
            console.log(dataArr);


            // handleData(dataArr);
        })

    return test;
};

function handleData(data) {
    console.log("hd");
    console.log(typeof(data));
    console.log(data);

    data1 = data;

}


randomScalingFactor();

// data2 = randomScalingFactor(); 
// data3 = randomScalingFactor(); 
// data4 = randomScalingFactor(); 
// data5 = randomScalingFactor(); 

var config = {
    type: 'pie',
    data: {
        datasets: [{
            data: [
                data1,
                data2,
                data3,
                data4,
                data5,
            ],
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

window.onload = function() {
    // randomScalingFactor();
    var ctx = document.getElementById('chart-area').getContext('2d');
    window.myPie = new Chart(ctx, config);
};



var colorNames = Object.keys(window.chartColors);