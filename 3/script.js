// Создать объект Книга.
// Свойства - ID, Author, Year, Title.
// Написать функцию, которая будет сортировать все книги по заданному параметру.
function book(id, author, year, title) {
	this.id = id;
	this.author = author;
	this.year = year;
	this.title = title;

	this.showInfo = function() {
		return "Книга номер: "+this.id+"<br> Автор: " + this.author + "<br> Год: " + this.year + "<br> Название: " + this.title;
	}
}
function session(data) {
	var Books = [];
	Books.push(new book(3,"Tolkien", 2000, "10Algoritm"));
	Books.push(new book(2,"Roulings",1996,"Harry Potter11"));
	Books.push(new book(1,"Po", 1814,"Harry Potter10"));
	Books.push(new book(7,"Bekareva", '2017', "Theory of Probability"));
	Books.push(new book(6,"Einstein",1914,"Relativity"));
	Books.push(new book(5,"Virt", 2013,"Algorithms and Data Structures"));
	Books.push(new book(4,"Sedgewick", 2015,"Algorithms"));

	switch(data.value)
	{
		case "0":
			Books.sort(function(a,b) {
				return a['id']-b['id']
			});
		break;

		case "1":
			Books.sort(function(a,b) {
				return (a['author']>b['author']) ? 1 : -1
			});
		break;

		case "2":
			Books.sort(function(a,b) {
				return a['year']-b['year']
			});
		break;

		case "3":
			Books.sort(function(a,b) {
				return (a['title']>b['title']) ? 1 : -1
			});
		break;
	}

	var temp = "";
	for (i=0;i<Books.length;i++)
	temp += ("<p>"+ Books[i].showInfo() + "</p>");
	document.getElementById("result").innerHTML=temp;
}
