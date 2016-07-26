<!DOCTYPE html>
<html>
<head>
	<title>Add Book and Review</title>
	<link rel="stylesheet" href="/CSS/addPage.css">
</head>
<body>
<?=validation_errors();?>

		<div id="header">
			<ul>
				<li><a href="/welcomeUser/">Home</a></li>
				<li><a href="/books/addpage/">Add Book and Review</a></li>
				<li><a href="/logout/">Logout</a></li>
			</ul>
		</div>
	<div id="container">
		<h4>Add a New Book Title and a Review</h4>
		<form action="/books/addReview/" method="post">
			<label>Book Title:</label><input type="text" name="title"><br>
			<label>Author:</label><br>
				<p class="indented">Choose from the list:
				<select name="authorDrop">
<?php 			foreach($authorList as $author){
					foreach($author as $name){
						echo '<option value="'.$name.'">'.$name."</option>";
					}
				};
?>
				</select></p>
				<p class="indented">Or add a new author:<input id ="author" type="text" name="authorWrite"></p>
			<label>Review:</label>
			<textarea name="content"></textarea>
			<label>Rating:</label>
				<select name="stars">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select> stars.</p>
			<button>Add Book and Review</button>
		</form>
	</div>
</body>
</html>