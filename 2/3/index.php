<!-- 3. Написать функцию, которая объединяет два массива, оставляя уникальные значения. -->
<!DOCTYPE html>
<html>
<head>
    <title>Union</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $("#load").bind("click", function () {
                temp1 = document.getElementById("text1").value;
                temp2 = document.getElementById("text2").value;
                temp1 = temp1.split(" ");
                temp2 = temp2.split(" ");
                result = {};
                for (var i = 0; i <= temp2.length - 1; i++) {
                    if (temp1.indexOf(temp2[i])<0) temp1[temp1.length]=temp2[i];
                }
                temp2 = "";
                for (var i = 0; i <= temp1.length - 1; i++) {
                    temp2 += " "+temp1[i]
                }
                $("#information").text (temp2);
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
