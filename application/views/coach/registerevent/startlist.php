<?php
?>

<table class="table mb-4">

	<thead>
	<tr>
		<th scope="1">Name Athlete</th>
		<th scope="2">Category</th>
		<th scope="3">Distance</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<?php foreach ($startlist as $start):?>
		<td><?php echo $start['first_name']?>-<?php echo $start['last_name']?></td>
		<td><?php echo $start['Name_Category']?></td>
		<td><?php echo $start['Distance']?></td>
	</tr>

	<?php endforeach?>

</table>
