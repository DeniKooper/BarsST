<!DOCTYPE html>
<html>
<head>
    <title>CamelCase</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        function funcBefore () {
            $("#information").text ("Ожидание данных...")
        }
       function funcSuccess (data) {
            $("#information").text ('');
            data = JSON.parse(data);
            var temp = "";
            for (j = 1 ; j < data.length ; ++j)
                temp += data[j].charAt(0).toUpperCase() +
                    data[j].substr(1).toLowerCase()
            $("#information").text (data[0]+temp);
       }

        $(document).ready (function () {
            $("#load").bind("click", function () {
                temp = document.getElementById("text").value
                $.ajax({
                    url: "content.php",
                    type: "POST",
                    data: ({str: temp}),
                    beforeSend: funcBefore,
                    success: funcSuccess,
                    error: function(error) {
                        $("#information").text(error);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <input type="text" id="text" placeholder="Введите строку..."></input>
    <p id="load" style="cursor: pointer">Перевести</p>
    <div id="information"></div>
</body>
</html>
