<!DOCTYPE html>
<html>
<head>
	<title>user detail</title>
</head>
<body>
	
<table border=1 colspan=1>
	<tr>
		<th>Name</th>
		<th>E-mail</th>
		<th>Contact</th>
		<th>Time</th>
	</tr>
	<?php foreach($users as $user): ?>
	<tr>

		<td><?php echo $user['name']; ?></td>
		<th><?php echo $user['email']; ?></th>
		<th><?php echo $user['contact']; ?></th>
		<th><?php echo $time = $user['timestamp']; // echo date('d-m-y',$time); ?></th>

	</tr>
<?php endforeach ?>
</table>
</body>
</html>