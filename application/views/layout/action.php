<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="test1.php?id=<?php echo $row["id"]; ?>" name="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
		<a href="update2.php?id=<?php echo $row["id"];?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
		<a href="delete_action.php?id=<?php echo $row["id"];?>"><i class="fa fa-trash" aria-hidden="true" name="delete"></i></a>
</body>
</html>