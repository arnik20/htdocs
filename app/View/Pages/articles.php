﻿<div class="body">
	<p style="font-size: 25px"><b>Статьи</b></p>
	<?php 
		$DB = Dbconnect::instance()->getConnect(); 
		$user = $DB->select('SELECT * FROM `article`');
		echo '<div>';
		foreach($user as $shit => $do) 
		{
			echo ("<p><b>$do[title]</b></p>");
			echo ("<p>$do[description]</p>");
			echo ("<p style='font-style: italic;'>$do[update]</p>");
		}
		echo '</div>';
	?>
</div>