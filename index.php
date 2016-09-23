<?php
$news = [
	1 => [
		'title' => 'Урок 1',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat malesuada tempus. Mauris maximus vestibulum orci ut pharetra. Etiam in justo id sapien sollicitudin pulvinar dictum sit amet lorem. Nullam quis orci euismod, accumsan felis at, pulvinar lorem. Nulla interdum massa vel tellus tincidunt dignissim. Donec finibus, orci quis interdum condimentum, enim massa interdum purus, ac tincidunt magna massa ac ipsum.'
	],
	2 => [
		'title' => 'Урок 2',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat malesuada tempus. Mauris maximus vestibulum orci ut pharetra.'
	],
	3 => [
		'title' => 'Урок 3',
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat malesuada tempus. Mauris maximus vestibulum orci ut pharetra. Nulla interdum massa vel tellus tincidunt dignissim. Donec finibus, orci quis interdum condimentum, enim massa interdum purus, ac tincidunt magna massa ac ipsum.'
	],
];


$id = $_GET['id'];
$article = $news[$id];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Приклад</title>
</head>
<body>
	<h1>Hello, world!</h1>
  <h2><?php $article['title']; ?></h2>
	<p><?php echo $article['text']; ?></p>
</body>
</html>