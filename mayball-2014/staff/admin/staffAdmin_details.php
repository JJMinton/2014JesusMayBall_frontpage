<style>
body {
	font-family: 'Lucida Grande', Verdana, Helvetica, Arial,sans-serif;
	font-size: 0.9em;
}
.label {
	font-weight: bold;
}
td { vertical-align: top;
	border-bottom: 1px solid black;
	padding: 5px;
	} 
table {
	margin-left: auto;
	margin-right: auto;
	border-collapse: collapse;
	width: 80%;
}
h1 {
	text-align: center;
	margin-bottom: 3em;
}
.left {
	
}
.right {
	width: 60%;
}
</style>
<div style="width: 80%; margin: 0 auto;">
<h1>Staffing Details</h1>
<p> Download in <a href="spreadsheet_details.php">spreadsheet format</a>. This is a tab separated file. In order to import it into excel (or similar software) correctly, make sure the 'tab' box is the only box checked for the delimiters (comma, space, etc should be unchecked).</p>
</div>
<br />
<br />
<table>
<?php

$cv = mysqli_connect("localhost", "mayball_admin", "XuthebAw97");
mysqli_select_db($cv,"mayball");

mysqli_real_query($cv, "SELECT * FROM staff_details WHERE 1;");

if($result = mysqli_use_result($cv)) {
	while(($row = mysqli_fetch_assoc($result)) != null) {
		echo "<tr>";
		echo "<td class='right'>";
			echo "<span class='label'>Name</span>: " . $row["name"] . "<br />";
			echo "<span class='label'>Sort Code</span>: " . $row["sort1"] . "-" . $row["sort2"] . "-" . $row["sort3"] . "<br />";
			echo "<span class='label'>Account Number</span>: " . $row["account"] . "<br />";
			echo "<span class='label'>Email</span>: " . $row["email"] . "<br />";
			echo "<span class='label'>Mobile</span>: " . $row["mobile"] . "<br />";
			echo "<span class='label'>Photo</span>: <img src=\"" . $row["photo"] ."\" alt=\"Display Picture\" width=42 height=42><br />";
		echo "</td>";
		
		echo "</tr>";
	}
	
	
}

mysqli_free_result($result);






?>
</table>
