<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      username		</th>
 		<th width="80px">
		      password		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      profile		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->username; ?>
		</td>
       		<td>
			<?php echo $row->password; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->profile; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
