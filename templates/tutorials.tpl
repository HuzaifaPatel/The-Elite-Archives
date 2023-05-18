<div class="players-content">
	<div class=above-table>
		<div class="back">
			<p><a href="javascript:history.back(1);">Back</a></p>
		</div>
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

		<?php foreach($videoData as $datum){ ?>
			<tr>
				<td style="color: <?php echo $datum['hexcode']?>"><?php echo $datum['player'] ?></td>
				<td><?php echo $datum['stage'] ?></td>
				<td><?php echo $datum['difficulty'] ?></td>
				<td><?php echo $datum['year'] == NULL ? 'Unknown' : $data['year'] ?> </td>
				<td><?php echo $datum['notes'] ?></td>
				<td style="color:#1BCC62;"><?php echo $datum['status'] == 1 ? 'Available' : 'Unavailable' ?></td>
				<td><a href=" <?php echo $datum['url'] ?>" target="_blank">Click Here</a></td>
			</tr>
		<?php } ?>
	</table>
</div>