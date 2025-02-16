var ctx = document.getElementById('stockChart').getContext('2d');
var stockChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Produto 1', 'Produto 2', 'Produto 3', 'Produto 4', 'Produto 5'],
        datasets: [{
            label: 'Estoque Disponível',
            data: [30, 50, 70, 40, 90],
            backgroundColor: 'rgba(0, 123, 255, 0.6)',
            borderColor: 'rgba(0, 123, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
var salesCtx = document.getElementById('salesChart').getContext('2d');
var salesChart = new Chart(salesCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Vendas Mensais',
            data: [2000, 2500, 2200, 2100, 2400, 2700, 3000],
            borderColor: 'rgba(0, 123, 255, 1)',
            fill: false,
            tension: 0.1,
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});