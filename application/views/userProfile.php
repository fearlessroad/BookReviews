<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" href="/CSS/userprofile.css">
</head>
<body>
<?php echo validation_errors();?>

	<div id="container">
		<div id="header">
			<ul>
				<li><a href="/welcomeUser/">Home</a></li>
				<li><a href="/books/addpage/">Add Book and Review</a></li>
				<li><a href="/logout/">Logout</a></li>
			</ul>
		</div>
		<h4>User Alias:<?= $thisData['alias']?></h4><br>
		<h5>Name:<?= $thisData['name']?> </h5>
		<h5>Email: <?=  $thisData['email']?></h5>
		<h5>Total Reviews: <?= $number['number']?></h5><br>
		<h4>Posted Reviews on the following books</h4>
		<ul>
		<?php foreach($reviewData as $Book){ echo "<li><a href='/bookprofile/".$Book['id']."'>".$Book['title']."</a></li>";
		}?>
		</ul>
	</div>
</body>
</html>