<div class=player-select>
	<form action="player-selection/players.php" method="GET">
		<input type="submit" value="Show Me">
		<select name="player"> <?php
			foreach ($players as $player){ ?>
				<option value="<?php echo htmlspecialchars($player['player']); ?>"> <?php echo $player['player'] ?> </option>; <?php
			} ?>
		</select>
	</form>
</div>
