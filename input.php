<html>
    <head>
        <meta charset="utf-8">
        <script>
            function send() {
                request = new XMLHttpRequest();
                request.onreadystatechange = showResult;
                var keyword = document.getElementById("username").value;
                var url= "member-table.php?username=" + keyword;
                request.open("GET", url, true);
                request.send(null);
                }
                function showResult() {
                if (request.readyState == 4) {
                if (request.status == 200)
                    document.getElementById("result").innerHTML = request.responseText;
                }
            }
        </script>
    </head>
    <body>
        <input type="text" id="username" onkeyup="send()">
        <div id="result"></div>
    </body>
</html>
