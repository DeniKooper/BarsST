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
            $("#information").text (data);
       }

        $(document).ready (function () {
            $("#load").bind("click", function () {
                temp1 = document.getElementById("text1").value
                temp2 = document.getElementById("text2").value
                $.ajax({
                    url: "content.php",
                    type: "POST",
                    data: ({str1: temp1, str2: temp2}),
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
    <input type="text" id="text1" size="45" placeholder="Введите первый массив..."></input><br>
    <input type="text" id="text2" size="45" placeholder="Введите второй массив..."></input>
    <p id="load" style="cursor: pointer">Перевести</p>
    <div id="information"></div>
</body>
</html>
