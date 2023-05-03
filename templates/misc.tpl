<div class="players-content">
	<div class="player-stats">
			<br>
			<br>
			<p style="display: inline;">Currently Viewing:</p>
			<p style="color: #F32037; display: inline;"><?php echo $description?></p>
			<br>
			<br>
			<br>
			<br>
			<br>
	</div>


<table class="video-table" align="center" border="1px">
	<tr>
		<th>Name</th>
		<th>Level</th>
		<th>Difficulty</th>
		<th>Year</th>
		<th>Notes</th>
		<th>Status</th>
		<th>Backup</th>
	</tr>

	<?php foreach($miscTutorialData as $data){ ?>
		<tr>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['level'] ?></td>
			<td><?php echo $data['difficulty'] ?></td>
			<td><?php echo $data['year'] == '0000' ? 'Unknown' : $data['year'] ?> </td>
			<td><?php echo $data['notes'] ?></td>
			<td style="color:#1BCC62;"><?php echo $data['status'] ?></td>
			<td><a href=" <?php echo $data['link'] ?>" target="_blank">Click Here</a></td>
		</tr>
	<?php } ?>
</table>
</div>