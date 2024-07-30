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
