<div class="players-content">
	<div class="player-stats">
		<br></br>
		<p style="display: inline; font-size: 28px;"><?php echo $description?></p>
		<p> <?php echo "$fixed videos fixed" ?> </p>

		<p></p>
		<p></p>
		<br></br>
		<p style="display: inline;"> <a href="/dead-videos-goldeneye">GoldenEye Data</span></a>
		<p style="display: inline;"> <a href="/dead-videos-perfect-dark">Perfect Dark Data</span></a>
		<p style="display: inline;"> <a href="/dead-videos-ltk-dltk">LTK Data</a></p>
		<p style="display: inline;"> <a href="/dead-videos-changes">Change Log</a></p>
		<br>
		<br>
		<br>
	</div>

	<table class="video-table" align="center" border="1px">
		<tr>
			<td></td>
			<th>Player</th>
			<th>Change</th>
			<th>Date</th>
			<th>Time (EST)</th>
			<th>Rankings</th>
		</tr>
		<?php echo count($deadVideoData) ?>
		<?php foreach($deadVideoData as $data){ ?>
			<tr>
				<td></td>
				<td style="color: <?php echo $color[$data['player']] ?>"><?php echo str_replace("_"," ",$data['player']); ?></td>
				<td><?php echo "Fixed " . $data['change']; ?></td>
				<td><?php echo $data['date_accepted']; ?></td>
				<td><?php echo strtoupper($data['time_accepted']); ?></td>
				<td><a href= <?php echo $data['rankings_url'] ?> target="_blank" rel="noopener noreferrer"> Click Here </a></td>
			</tr>
		<?php } ?>
	</table>
</div>