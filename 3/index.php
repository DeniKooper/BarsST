<!--Создать объект Книга.
Свойства - ID, Author, Year, Title.
Написать функцию, которая будет сортировать все книги по заданному параметру.-->
<!DOCTYPE html>
<html>
<head>
    <title>Book</title>
    <script src="script.js"></script>
</head>
<body>
    <p>Выберите параметр сортировки:</p>
    <select onchange="session(this)">
        <option value=0>По id</option>
        <option value=1>По автору</option>
        <option value=2>По году</option>
        <option value=3 selected value>По названию</option>
    </select>
    <p><span id="result">--</span></p>
</body>
</html>
