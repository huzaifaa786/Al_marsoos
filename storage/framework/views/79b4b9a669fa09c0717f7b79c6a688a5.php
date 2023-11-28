<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
        < script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" >
    <title>Prayer Times</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Prayer Times</h1>
    <table id="prayerTable">
        <thead>
            <tr>
                <th>Prayer</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>Fajr</td>
                <td id="fajrTime" >Loading...</td>
            </tr>
            <tr>
                <td>Dhuhr</td>
                <td id="dhuhrTime">Loading...</td>
            </tr>
            <tr>
                <td>Asr</td>
                <td id="asrTime">Loading...</td>
            </tr>
            <tr>
                <td>Maghrib</td>
                <td id="maghribTime">Loading...</td>
            </tr>
            <tr>
                <td>Isha</td>
                <td id="ishaTime">Loading...</td>
            </tr>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            prayertime();
        });

        function prayertime() {
            let data = {
                expectsJson: true,
            };
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('prayer.time')); ?>",
                data: {
                },
                success: function(response) {
                    console.log(response);  
                    var fajar = response.data.timings.Fajr;
                    var zuhur = response.data.timings.Dhuhr;
                    alert(zuhur);
                    $('#fajrTime').text(fajar);
                    $('#dhuhrTime').text(zuhur);               
                },
                error: function() {
                    alert("Error Fetching details.");
                }
            });
        }
       
    </script>
</body>
</html>
<?php /**PATH F:\laraval\Al_marsoos\resources\views/MorePages/pryer.blade.php ENDPATH**/ ?>