<!-- 2. Написать функцию, которая в заданном массиве оставляет только численные значения. -->
<!DOCTYPE html>
<html>
<head>
    <title>CamelCase</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $("#load").bind("click", function () {
                temp = document.getElementById("text").value;
                temp = temp.replace(/[^-0-9\s]/gim,'');
                temp = temp.split(" ");
                $("#information").text (temp);
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
