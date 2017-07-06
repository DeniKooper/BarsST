<!-- 4. Создать пустой объект user, добавить свойства surname, firstname, lastname со значениями. Удалить свойство lastname, заменить значение свойства surname. -->
<!DOCTYPE html>
<html>
<head>
    <title>CamelCase</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
    $(document).ready (function () {
        function user(){

        }
        user = new user();
        user.surname = "Kooper";
        user.firstname = "Deni";
        user.lastname = "Qsak";
        temp= "Surname: " + user.surname + "; " + "Firstname: " + user.firstname + "; " + "Lastname: " + user.lastname;
        $("#information1").text (temp);
        delete user.lastname;
        temp= "Surname: " + user.surname + "; " + "Firstname: " + user.firstname + "; " + "Lastname: " + user.lastname;
        $("#information2").text (temp);
    })
    </script>
</head>
<body>
    <div id="information1"></div>
    <br>
    <div id="information2"></div>
</body>
</html>
