Title Book:
<input type="text" name="title" id="title" value="{{ isset($book->title)?$book->title:'' }}">
Autor
<input type="text" name="author" id="author" value="{{ isset($book->author)?$book->author:'' }}">

Description:
<input type ="text" name="description" id="description" value="{{ isset($book->description)?$book->description:'' }}">

price:
<input type="number" name="price" id="price" value="{{ isset($book->price)?$book->price:'' }}">

<button type="submit">Save</button>
