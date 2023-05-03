<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/report.js"></script>

<div class="players-content">
	<div class="player-stats">
<!-- 			<?php
			if($url[1] != 'dead-videos'){ ?>
				<br></br>
				<p style="display: inline; font-size: 28px;"><?php echo $description?></p> <?php
			} ?>
			<?php 
			if($url[1] != 'dead-videos'){ ?>
				<p> <?php echo ($dead == 1) ? "$dead video unavailable" : "$dead videos unavailable"; ?> </p> <?php
			}else{ ?>
				<p>Choose a category</p>
			<?php } ?> -->
			<p style="display: inline;"> <a href="/dead-videos-goldeneye">GoldenEye Data</span></a>
			<p style="display: inline;"> <a href="/dead-videos-perfect-dark">Perfect Dark Data</span></a>
			<p style="display: inline;"> <a href="/dead-videos-ltk-dltk">LTK/DLTK Data</a></p>
			<p style="display: inline;"> <a href="/dead-videos-changes">Change Log</a></p>
	</div>

<!-- <?php if($url[1] != 'dead-videos'){ ?>
<table class="video-table" align="center" border="1px">
	<tr>
		<td></td>
		<th>Player</th>
		<th>Stage</th>
		<th>Difficulty</th>
		<th>Time</th>
		<th>Date</th>
		<th>Rankings</th>
	</tr>

	<?php foreach($deadVideoData as $data){ ?>
		<tr>
			<td></td>
			<td style="color: <?php echo $color[$data['player']] ?>"><?php echo str_replace("_"," ",$data['player']); ?></td>
			<td><?php echo $data['stage']; ?></td>
			<td><?php echo $data['difficulty']; ?></td>
			<td><?php echo $data['regular_time']; ?></td>
			<td><?php echo $data['published_date']; ?></td>
			<td><a href= <?php echo $data['rankings_url'] ?> target="_blank" rel="noopener noreferrer"> Click Here </a></td>

		</tr>
	<?php } ?>
</table>
</div>
<?php } ?> -->