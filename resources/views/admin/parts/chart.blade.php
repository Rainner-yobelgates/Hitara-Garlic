<script>
    let ctx = $('#myChart');

    let chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ],
            datasets: [{
                label: 'Visitors',
                data: ["{{ $jan }}", "{{ $feb }}", "{{ $mar }}", "{{ $apr }}", "{{ $mei }}", "{{ $jun }}", "{{ $jul }}", "{{ $aug }}", "{{ $sep }}", "{{ $okt }}", "{{ $nov }}","{{ $des }}"],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                    'rgb(123, 17, 58)',
                    'rgb(27,32,33)',
                    'rgb(48,27,63)',
                    'rgb(245,192,192)',
                    'rgb(163,221,203)',
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                    'rgb(123, 17, 58)',
                    'rgb(27,32,33)',
                    'rgb(48,27,63)',
                    'rgb(245,192,192)',
                    'rgb(163,221,203)',
                ],
                borderWidth: 1
            }]
        }
    });

    console.table(chart);
</script>