<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
</head>

<body>


    <h1>AJAX Example</h1>


    <button onclick="myFunction()">Click me</button>

    <script>
        function myFunction() {
            // ajax example 
            var olgXMLHttpRequest = new XMLHttpRequest();
            olgXMLHttpRequest.onreadystatechange = function() {
                if (olgXMLHttpRequest.readyState === 4) {
                    // check if the response is successful
                    if (olgXMLHttpRequest.status === 200) {
                        alert(olgXMLHttpRequest.responseText);

                    } else {
                        alert("Error: " + olgXMLHttpRequest.status);
                        alert("Error: " + olgXMLHttpRequest.statusText);
                    }
                }
            };
            olgXMLHttpRequest.open("GET", "ajaxdata.php");
            olgXMLHttpRequest.send();
        }
    </script>
</body>

</html>