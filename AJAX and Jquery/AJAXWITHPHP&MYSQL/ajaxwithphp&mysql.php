<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ajax with
        PHP and MySQL</h1>
    </h1>
    <input type="text" id="name" placeholder="Enter Your Name" onkeyup="myfunction()">
    <p id="result"></p>
    <!-- // Include the jQuery library cdn -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function myfunction() {
            var name = $("#name").val();
            $.ajax({
                url: "userdata.php",
                type: "POST",
                data: {
                    name: name
                },
                success: function(response) {
                    $("#result").html(response);
                },
                error: function() {
                    alert("Error");
                }
            });
        }
    </script>
</body>

</html>