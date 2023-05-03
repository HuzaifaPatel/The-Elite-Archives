<?php if(sizeof($tutorialData) == 0){ ?>
	<div class="no-data">
		<span>No Data Available</span>
	</div>
<?php }else{ ?>
	<div class="players-content">
		<div class="player-stats">
				<br>
				<br>
				<!-- <p style="display: inline;">Currently Viewing:</p> -->
				<p style="color: white; display: inline; font-size: 28px;"><?php echo $description?></p>
				<br>
				<br>
				<br>
				<br>
				<br>
		</div>


	<table class="video-table" align="center" border="1px">
		<tr>
			<!-- <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td> -->
			<td></td>
			<th>Name</th>
			<th>Level</th>
			<th>Difficulty</th>
			<th>Year</th>
			<th>Notes</th>
			<th>Status</th>
			<th>Backup</th>
		</tr>

		<?php foreach($tutorialData as $data){ ?>
			<tr>
				<!-- <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td> -->
				<td></td>
				<td style="color: <?php echo $color[$data['player']] ?>"><?php echo $data['player'] ?></td>
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
<?php } ?>