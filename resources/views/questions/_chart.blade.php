<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js" charset="utf-8"></script>

<canvas id="canvas" width="900" height="200"></canvas>
<script type="text/javascript">
    var data = {
        labels: ['January' , 'February', 'March'],
        datasets:[
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80]
            }
        ]

    }

    var context = document.querySelector('#canvas').getContext('2d');

    new Chart(context).Line(data);
</script>
