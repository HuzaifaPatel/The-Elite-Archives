<div class="players-content">
<!-- 	<div class="player-stats">
		<p>Player: <span style="color:<?php echo $color ?>"> <?php echo $player; ?> </span></p>
		<p> <?php echo ($alive == 1) ? "$alive video available" : "$alive videos available"; ?> </p>
		<p> <?php echo ($dead == 1) ? "$dead video unavailable" : "$dead videos unavailable"; ?> </p>
		<p> <a href="<?php echo $player_profile; ?>" target="_blank"> Player Rankings Profile </a> </p>
	</div> -->

	<div class="back">
		<p><a href="<?php echo explode("?", $_SERVER['REQUEST_URI'])[0] ?>">Back</a></p>
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
					<td><a href= <?php echo $videoDatum['rankings_url']; ?> target="_blank" rel="noopener noreferrer"> Click Here </a></td>
					<td><a href= <?php echo "https://the-elite-videos.nyc3.digitaloceanspaces.com/" . $videoDatum['player'] . "/" . $videoDatum['filename']; ?> target="_blank" rel="noopener noreferrer"> Click Here </a></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>