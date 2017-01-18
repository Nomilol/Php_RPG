<?php
$clients = require 'users.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tableau des utilisateurs</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>ID utilisateur </td>
				<td>Email utilisateur </td>
				<td>Crée le </td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($clients as $key => $user): ?>
			<tr>
				<td><?= $user->getId(); ?>
				</td>
				<td><?= $user->getEmail(); ?></td>
				<td><?= $user->getCreatedAt(); ?></td>
			</tr>
		</tbody>

<?php endforeach; ?>

</table>
</body>
</html>
