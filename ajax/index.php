<!DOCTYPE html>
<html>
<head>
    <title>Ajax</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        function funcBefore () {
            $("#information").text ("Ожидание данных...")
        }
       function funcSuccess (data) {
            $("#information").text (data);
       }

        $(document).ready (function () {
            $("#load").bind("click", function () {
                var admin = "Admin";
                $.ajax({
                    url: "content.php",
                    type: "POST",
                    data: ({name: admin, number: 7}),
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
    <p id="load" style="cursor: pointer">Загрузить данные</p>
    <div id="information"></div>
</body>
</html>
