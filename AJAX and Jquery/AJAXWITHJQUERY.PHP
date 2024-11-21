<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ajax With Jquery</h1>

    //button to call ajax
    <button id="ajaxbtn">Call Ajax</button>


    <!-- // Include the jQuery library cdn -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        //with out comment

        $(document).ready(function() {
            $("#ajaxbtn").click(function() {
                $.ajax({
                    url: "ajax.php",
                    type: "GET",
                    success: function(data) {
                        alert(data);
                    },

                    error: function() {
                        alert("Error");
                    }
                });
            });
        });
    </script>
</body>

</html>