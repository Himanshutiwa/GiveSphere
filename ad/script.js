
// Sidebar Toggle Script
// Sidebar Toggle Script
var wrapper = document.getElementById("wrapper");
var toggleBtn = document.getElementById("menu-toggle");

toggleBtn.onclick = function () {
    wrapper.classList.toggle("toggled");
};
var closeBtn = document.getElementById("sidebar-close");

if (closeBtn) {
    closeBtn.onclick = function () {
        wrapper.classList.remove("toggled");
    };
}


// 1. Line Chart: Donation Analytics
const ctx = document.getElementById('donationChart').getContext('2d');
const donationChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Donations ($)',
            data: [12000, 19000, 15000, 25000, 22000, 30000, 40000],
            borderColor: '#0d6efd',
            backgroundColor: 'rgba(13, 110, 253, 0.1)',
            borderWidth: 2,
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});

// 2. Pie Chart: Sources
const ctxPie = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(ctxPie, {
    type: 'doughnut',
    data: {
        labels: ['Corporate', 'Individual', 'Events', 'Grants'],
        datasets: [{
            data: [45, 30, 15, 10],
            backgroundColor: [
                '#0d6efd',
                '#00b09b',
                '#fbc02d',
                '#ff5252'
            ],
            hoverOffset: 4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'bottom' }
        }
    }
});