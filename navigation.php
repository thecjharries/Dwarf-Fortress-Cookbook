<div id="headerImage"></div>
<table id="navTable">
	<tr>
		<td><?php if($thisPage=="Home"){
				echo "<div id=\"highlighted\">Home</div>";
			}else{
				echo "<a href=\"index.php\">Home</a>";
			}?></td>
		<td><?php if($thisPage=="Guides"){
				echo "<div id=\"highlighted\">Guides</div>";
			}else{
				echo "<a href=\"guides.php\">Guides</a>";
			}?></td>
		<td><?php if($thisPage=="About"){
				echo"<div id=\"highlighted\">About</div>";
			}else{
				echo "<a href=\"about.php\">About</a>";
			}?></td>
	</tr>
</table>
