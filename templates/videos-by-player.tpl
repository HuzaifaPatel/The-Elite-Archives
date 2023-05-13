<div class="players-content">
	<div class=above-table>
		<div class="back">
			<p><a href="<?php echo explode("?", $_SERVER['REQUEST_URI'])[0] ?>">Back</a></p>
		</div>

		<div class="player-name">
			<span>Player: </span> 
			<span style="color: <?php echo $color ?>"><?php echo $player ?></span>
		</div>
	</div>

	<table class="video-table" align="center" border="1px">
		<tr>
			<th>Stage</th>
			<th>Difficulty</th>
			<th>Time</th>
			<th>Date</th>
			<th>Status</th>
			<th>Rankings</th>
			<th>Backup</th>
		</tr>

		<?php foreach($videoData as $videoDatum){ ?>
			<tr>
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
				<td><a href= <?php echo "https://the-elite-videos.nyc3.digitaloceanspaces.com/" . $videoDatum['player'] . "/" . $videoDatum['filename']; ?> target="_blank" rel="noopener noreferrer"> Backup </a></td>
			</tr>
		<?php } ?>
	</table>
</div>