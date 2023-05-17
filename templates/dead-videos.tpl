<div class="players-content">
	<div class=above-table>
		<div class="back">
			<p><a href="<?php echo explode("?", $_SERVER['REQUEST_URI'])[0] ?>">Back</a></p>
		</div>
	</div>

	<table class="video-table" align="center" border="1px">
		<tr>
			<th>Player</th>
			<th>Stage</th>
			<th>Difficulty</th>
			<th>Time</th>
			<th>Date</th>
			<th>Status</th>
			<th>Rankings</th>
		</tr>

		<?php foreach($videoData as $videoDatum){ ?>
			<tr>
				<td style="color:<?php echo $videoDatum['hexcode'] ?>;"><?php echo $videoDatum['player'] ?></td>
				<td><?php echo $videoDatum['stage']; ?></td>
				<td><?php echo $videoDatum['difficulty']; ?></td>
				<td><?php echo $videoDatum['regular_time']; ?></td>
				<td><?php echo $videoDatum['published_date']; ?></td>
				<?php if($videoDatum['file_exists'] == 1){ ?>
					<td style="color:#1BCC62; "><?php echo "Available"; ?></td>
				<?php }else{ ?>
					<td style="color:#F32037;";><?php echo "Not Available"; ?></td>
				<?php } ?>
				<td><a href= <?php echo $videoDatum['rankings_url']; ?> target="_blank" rel="noopener noreferrer"> Rankings </a></td>
			</tr>
		<?php } ?>
	</table>
</div>