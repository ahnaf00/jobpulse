<script src="{{ asset('assets/backend') }}/js/core/popper.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/core/bootstrap.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins/smooth-scrollbar.min.js"></script>

<script src="{{ asset('assets/backend') }}/js/plugins/dragula/dragula.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins/jkanban/jkanban.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins/chartjs.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins/swiper-bundle.min.js" type="text/javascript"></script>
{{-- <script>
    if (document.getElementsByClassName('mySwiper')) {
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
            initialSlide: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    };

    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
            datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderSkipped: false,
                    backgroundColor: "#55A6F8",
                    data: [450, 200, 100, 220, 500, 100, 400, 230, 500, 200],
                    maxBarThickness: 6
                },
                {
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderSkipped: false,
                    backgroundColor: "#774DD3",
                    data: [200, 300, 200, 420, 400, 200, 300, 430, 400, 300],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    backgroundColor: '#fff',
                    titleColor: '#1e293b',
                    bodyColor: '#1e293b',
                    borderColor: '#e9ecef',
                    borderWidth: 1,
                    usePointStyle: true
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    stacked: true,
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [4, 4],
                    },
                    ticks: {
                        beginAtZero: true,
                        padding: 10,
                        font: {
                            size: 12,
                            family: "Noto Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#64748B"
                    },
                },
                x: {
                    stacked: true,
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false
                    },
                    ticks: {
                        font: {
                            size: 12,
                            family: "Noto Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#64748B"
                    },
                },
            },
        },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(85, 166, 248, 0.1)');
    gradientStroke1.addColorStop(0, 'rgba(21, 137, 255, 0.0001)');

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
    gradientStroke2.addColorStop(1, 'rgba(22, 93, 255, 0.2)');
    gradientStroke2.addColorStop(0, 'rgba(22, 93, 255, 0.0001)');

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Organic Search",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#55A6F8",
                    borderColor: "#55A6F8",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: true,
                    data: [340, 550, 350, 750, 650, 250, 500, 150, 600, 550, 400, 950],
                    maxBarThickness: 6
                },
                {
                    label: "Referral",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#774DD3",
                    borderColor: "#774DD3",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [100, 500, 200, 550, 250, 500, 250, 750, 400, 650, 250, 750],
                    maxBarThickness: 6
                }
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    align: 'end',
                    labels: {
                        boxWidth: 6,
                        boxHeight: 6,
                        padding: 20,
                        pointStyle: 'circle',
                        borderRadius: 50,
                        usePointStyle: true,
                        font: {
                            weight: 600,
                        },
                    },
                    tooltip: {
                        backgroundColor: '#fff',
                        titleColor: '#1e293b',
                        bodyColor: '#1e293b',
                        borderColor: '#e9ecef',
                        borderWidth: 1,
                        pointRadius: 2,
                        usePointStyle: true,
                        boxWidth: 8,
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: true,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                },
            },
        },
    });
</script> --}}
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="{{ asset('assets/backend') }}/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon='{"rayId":"859827606ece786e","version":"2024.2.1","token":"1b7cbb72744b40c580f8633c6b62637e"}'
    crossorigin="anonymous"></script>
