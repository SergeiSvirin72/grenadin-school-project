<?php
	include ('../db.php');
	
	$result = mysqli_query($conn, "SELECT COUNT(id) AS total FROM news");
	$total=mysqli_fetch_assoc($result);
	if($total['total'] == 0) {
		echo 'Здесь пока нет новостей.';
	} else {
		$result = mysqli_query($conn, "SELECT * FROM news ORDER BY date $_GET[order] LIMIT $_GET[limit] OFFSET $_GET[offset]");
		while($row=mysqli_fetch_array($result))
		{
			$date = date_create_from_format('Y-m-d', $row['date']);		
?>
			<article class="news-article">
				<?php 
					if($row['img']!="false"){
						echo "<img src='images/news/$row[img]'>";
					}
				?>
				<div class="news-content">
					<h5><a href="article.php?id=<?php echo $row['id'];?>" target="_blank"><?php echo $row['name'];?></a></h5>
					<span class="badge badge-danger">
						<?php echo date_format(date_create_from_format('Y-m-d', $row['date']), "d.m.Y");?>
					</span>
					<p class="text"><?php echo strip_tags($row['text']);?></p>
				</div>
			</article>
<?php
		}
	}
	mysqli_close($conn);
?>