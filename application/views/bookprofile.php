<!DOCTYPE html>
<html>
<head>
	<title>Review a Book</title>
	<link rel="stylesheet" href="/CSS/bookprofile.css">
</head>
<body>
<?php echo validation_errors();?>
		<div id="header">
			<ul>
				<li><a href="/welcomeUser/">Home</a></li>
				<li><a href="/books/addpage/">Add Book and Review</a></li>
				<li><a href="/logout/">Logout</a></li>
			</ul>
		</div>
	<div id="container">
		<h4><?=$bookInfo['title']?></h4>
		<p>Author: <?= $bookInfo['name']?></p>
		<div class="column">
		<h4>Reviews</h4>

<?php 
		foreach($reviewInfo as $review){
?>
			<div class='review'>
				<p>Rating:<?=$review['stars']?> stars.</p>
				<p><a href='/userprofile/<?=$review['user_id']?>/'>"<?=$review['alias']?></a> says: <?=$review['content']?></p>
				<p>Posted on <?=$review['date']?></p>
			</div>
<?php	
		}
?>
		</div>
		<div class="column">
			<h4>Add a Review</h4>
			<form action = "/books/addReviewWithId/<?=$bookInfo['id']?>" method="POST">
				<textarea name="content"></textarea>
				<p>Rating:
					<select name="stars">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select> stars.</p>
				<button>Submit Review</button>
			</form>
		</div>
	</div>
</body>
</html>