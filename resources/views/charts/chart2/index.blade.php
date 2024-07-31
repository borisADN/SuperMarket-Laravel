<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    canvas#chart{
    background:#FFF;
    max-width: 80%;
    margin-top: 2rem;
    border-radius: 1.6rem;
    padding: var(--card-padding);
}
</style>
<body>
    <canvas id="chart">

    </canvas>
    <script
     src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"
     integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
     const chart = document.querySelector('#chart').getContext('2d');

new Chart(chart,{
    type: 'line',
data: {
    labels : ['jan', 'fev', 'mar', 'avr', 'mai', 'juin', 'juil', 'aout', 'sep',  'oct', 'nov','dec'] , 
    datasets : [
        // {
        //     label: 'BTC',
        //     data : [29374, 33537, 49631, 59095, 57828, 36684, 33572, 39974, 48847, 48647, 48116 , 61004],
        //     borderColor: 'red',
        //     borderWidth:2
        // },
        {
            label: 'ETH',
            data : [31500, 41000, 88000, 26000, 46000 , 32698 , 5000, 3000, 18656, 24832 , 36844,88888],
            borderColor: 'blue',
            borderWidth:2
        }
    ]
},
options:{
    responsive: true
}
})

    </script>
   
</body>
</html>