<?php
include 'db_connection.php';
include 'header.php';
$conn = OpenCon();
$selectOption = $_GET['player'];
$difficulty = $_GET['difficulty'];
$stage = $_GET['stage'];

if($difficulty == "All" && $stage == ""){
	$query = "select * from video_data ORDER BY published_date ASC";
}else if($stage == ""){
	$query = "SELECT * FROM video_data WHERE difficulty = '$difficulty' AND player = '$selectOption' ORDER BY published_date ASC";
}else if($difficulty == "All"){
	$query = "SELECT * FROM video_data WHERE player = '$selectOption' AND stage = '$stage' ORDER BY published_date ASC";
}else{
	$query = "SELECT * FROM video_data WHERE difficulty = '$difficulty' AND player = '$selectOption' AND stage = '$stage' ORDER BY published_date ASC";
}
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE HTML>

<html>

	<head>
		<link rel="stylesheet" type="text/css" href="players.css">
		<link rel="stylesheet" type="text/css" href="header.css">
	</head>

	<body>
		<div class="main-content">

			<div class="player-stats">

					<?php $player_name = str_replace("_"," ",$selectOption); ?>

					<p><?php echo "Currently viewing: $player_name"; ?></p>

					<?php if($difficulty == "All" && $stage == ""){
						$available_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 0";
						$unavailable_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 1";
					}else if($stage == ""){
						$available_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 0 AND difficulty = '$difficulty'";
						$unavailable_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 1 AND difficulty = '$difficulty'";
					}else if($difficulty == "All" && $stage != ""){
						$available_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 0 AND stage = '$stage'";
						$unavailable_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 1 AND stage = '$stage'";
					}else{
						$available_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 0 AND difficulty = '$difficulty' AND stage = '$stage'";
						$unavailable_videos_query = "SELECT * FROM video_data WHERE player = '$selectOption' AND dead_youtube_url = 1 AND difficulty = '$difficulty' AND stage = '$stage'";
					} ?>

					<?php if($num_available_videos = mysqli_query($conn, $available_videos_query)){
						$available_videos = mysqli_num_rows($num_available_videos);
					?>
						<p>
							<?php 
								if($available_videos == 1){
									echo "$available_videos video available";
								}else{
									echo "$available_videos videos available";
								} 
							?>
						</p>
					<?php } ?>

					<?php if($num_unavailable_videos = mysqli_query($conn, $unavailable_videos_query)){
						$unavailable_videos = mysqli_num_rows($num_unavailable_videos);
					?>
						<p>
							<?php 
								if("$unavailable_videos unavailable videos" == 1){
									echo "$unavailable_videos video unavailable";
								}else{
									echo "$unavailable_videos videos unavailable";
								} 
							?>
						</p>
					<?php } ?>
			</div>

			<div class="filter">

				<h2>Filter</h2>

				<form class="filter-form" action="filteredPlayers.php" method="GET"> <!-- used to be POST -->
					<input name="player" type="hidden" value="<?php echo $selectOption; ?>">
					<!-- <input type="hidden" name="difficulty" value=""> -->
					<!-- <input type="radio" name="imgsel" value="" checked> -->
					<strong>All: </strong> <input type="radio" name="difficulty" value="All" checked />
					<strong>Agent: </strong> <input type="radio" name="difficulty" value="Agent" />
					<strong>Secret Agent: </strong> <input type="radio" name="difficulty" value="SA" />
					<strong>00 Agent: </strong> <input type="radio" name="difficulty" value="00A" />
					<br></br>
					<strong>Date: </strong> <input type="date" name="date" />
					<br></br>
					<strong>Stage:</strong>
					<select name="stage">
						<?php $get_stage = mysqli_query($conn, "SELECT DISTINCT stage FROM video_data WHERE player = '$selectOption'"); ?>
						<option value ="">Select Stage</option>
						<?php while ($row = $get_stage->fetch_assoc()){$stage = $row['stage']; ?>
							<option value="<?php echo htmlspecialchars($stage);?>"> <?php echo $stage ?> </option>; <?php
						} ?>
					</select>
					<br></br>
					<input type="submit" value="Show Me">
				</form>

			</div>

			<table class="video-table" align="center" border="1px">

				<!-- <?php echo "current player: $selectOption"; ?> -->
				<tr>
					<th>Game</th>
					<th>Stage</th>
					<th>Difficulty</th>
					<!-- <th>Seconds</th> -->
					<th>Time</th>
					<th>Player</th>
					<!--<th>extension</th>-->
					<!-- <th>youtube url</th> -->
					<th>Date</th>
					<!-- <th>rankings url</th> -->
					<!--<th>filename</th>-->
					<th>Status</th>
					<th>Backup</th>
				</tr>

				<?php 
					while($rows = mysqli_fetch_assoc($result)){
						if($rows['player'] == $selectOption){
				?>

							<tr>
								<!-- https://stackoverflow.com/questions/11686846/php-change-if-else-to-one-line-conditional-fails-id-like-to-know-why -->
								<td> <?php echo $rows['game'] == "ge" ? "GoldenEye" : "Perfect Dark" ?> </td> 
								<!-- <td><?php echo $rows['game']; ?></td> -->
								<td><?php echo $rows['stage']; ?></td>
								<td><?php echo $rows['difficulty']; ?></td>
								<!-- <td><?php echo $rows['time_in_seconds']; ?></td> -->
								<td><?php echo $rows['regular_time']; ?></td>
								<td><?php echo str_replace("_"," ",$rows['player']); ?></td>
								<!-- <td><?php echo $rows['extension']; ?></td> -->
								<!-- <td><a href= <?php echo $rows['youtube_url'] ?> > <?php echo $rows['youtube_url']; ?> </a></td> -->
								<td><?php echo $rows['published_date']; ?></td>
								<!-- <td><a href= <?php echo $rows['rankings_url'] ?> > <?php echo $rows['rankings_url']; ?> </a></td> -->
								<!--<td><?php echo $rows['filename']; ?></td>-->

								<?php if($rows['dead_youtube_url'] == 0){ ?>
									<td style="color:green"><?php echo "Available"; ?></td>
								<?php }else{ ?>
									<td style="color:red"><?php echo "Not Available"; ?></td>
								<?php } ?>

								<td><a href = "https://the-elite-videos.nyc3.digitaloceanspaces.com/<?php echo $rows['player'] ?>/<?php echo $rows['filename'] ?> ">Click Here</a></td>
							</tr>
				<?php
						}else if($selectOption == "null"){
							echo "select valid player";
							break;
						}
				
					}
				?>
			</table>
		</div>
	</body>
</html>