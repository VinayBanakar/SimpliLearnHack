<html lang="en">
<head>
	
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
     <link href="ranks21.css" rel="stylesheet">
</head>

<body>
<div class="table-title">
<h3>Top Ranks</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Name</th>
<th class="text-left">Points</th>
</tr>
</thead>
<tbody class="table-hover">
	<?php



$con=mysqli_connect("localhost","root","","Kernel");
    if(mysqli_connect_errno()){
        echo "ERROR ".mysqli_connect_error();
    }
       
        $result = mysqli_query($con,"SELECT User_Name,Rank FROM users ORDER BY Rank ");

         while($row = mysqli_fetch_array($result)) {
        $user=$row['User_Name'];
        //$pass=$row['PassWord'];
        //$id=$row['User_ID'];
        $rank=$row['Rank'];
       
        func($user,$rank);

    }
    function func($x,$y)
    {
    	echo "<tr><td class=\"text-left\">".$x."</td>";
    	echo "<td class=\"text-left\">".$y."</td></tr>";
    }
    echo "</tbody></table></body></html>";

        ?>


