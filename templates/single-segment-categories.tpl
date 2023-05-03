<div class="players-content">
	<div class="dashboard">
			<br></br>
			<p style="display: inline; font-size: 28px;"><?php echo $description?></p>
			<p>Real Time Speedruns</p>
			<span><a href="/<?php echo $game?>/single-segments/real-time/agent">Agent</a></span>
			<span><a href="/<?php echo $game?>/single-segments/real-time/secret-agent">Secret Agent</a></span>
			<span><a href="/<?php echo $game?>/single-segments/real-time/00-agent">00 Agent</a></span>
			<span><a href="/<?php echo $game?>/single-segments/real-time/100">100%</a></span>
			<span><a href="/<?php echo $game?>/single-segments/real-time/all60">All 60</a></span>
			<p>Game Time Speedruns</p>
			<span><a href="/<?php echo $game?>/single-segments/game-time/agent">Agent</a></span>
			<span><a href="/<?php echo $game?>/single-segments/game-time/secret-agent">Secret Agent</a></span>
			<span><a href="/<?php echo $game?>/single-segments/game-time/00-agent">00 Agent</a></span>
			<br></br>
			<br></br>

	</div>


<table class="video-table" align="center" border="1px">
	<tr>
		<td></td>
		<th>Player</th>
		<th>Category</th>
		<th>Time</th>
		<th>Date</th>
		<th>Status</th>
	</tr>

	<?php foreach($rtaData as $data){ ?>
		<tr>
			<td></td>
			<td style="color: <?php echo $color[$data['player']] ?>"><?php echo str_replace("_"," ",$data['player']); ?></td>
			<td><?php echo $data['category']; ?></td>
			<td><?php echo $data['regular_time']; ?></td>
			<td><?php echo $data['published_date'] == '0000-00-00' ? 'Unknown' : $data['published_date'] ?></td>

			<?php if($data['file_exists'] == 1){ ?>
				<td style="color:#1BCC62; "><?php echo "Available"; ?></td>
			<?php }else{ ?>
				<td style="color:#F32037;";><?php echo "Not Available"; ?></td>
			<?php } ?>
		</tr>
	<?php } ?>
</table>
</div>