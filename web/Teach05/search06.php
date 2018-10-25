<!DOCTYPE html>
<html>
<head>
	<title>something</title>
</head>
<body>
	<?php
		require ("dbConnect.php");

		$book = $_POST['book'];
		$chapter = $_POST['chapter'];
		$verse = $_POST['verse'];
		$content = $_POST['content'];

		$checkboxes = $_POST['topic'];

		$query = 'INSERT INTO scriptures (book,chapter,verse, content) VALUES (:book,:chapter,:verse,:content)';
		
		$stmt = $db->prepare($query);

   		$stmt->bindValue(':book', $book, PDO::PARAM_STR);
   		$stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
   		$stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
   		$stmt->bindValue(':content', $book, PDO::PARAM_STR);
   		$stmt->execute();
   		$rows = $stmt->fetch(PDO::FETCH_ASSOC);

   		for ($checkboxes as $checkbox) {

   		$query = 'INSERT INTO links (scripture_id,topic_id) VALUES (:scrip_id,:topic_id)';

   		$stmt->bindValue(':scrip_id', $rows['id'], PDO::PARAM_STR);
   		$stmt->bindValue(':topic_id', $checkbox, PDO::PARAM_INT);
   		$stmt->execute();
   		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		foreach ($db->query("SELECT * FROM scriptures WHERE book = $book AND chapter = $chapter AND verse = $verse") as $row)
		{


		echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "<br>" . $row['content'] . "<br>";
		//foreach(($db->query("SELECT * FROM topics JOIN links ON ???) as $row))

		}




	?>

</body>
</html>