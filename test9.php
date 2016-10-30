<?php	



        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 5;
	$offset = ($page-1)*$rows;
	
	$mysqli = new mysqli('localhost', 'root', '', 'anfordern');
//	$conn = mysql_connect('localhost','root','');
//	mysql_select_db('anfordern',$conn);
	
	$rs = mysqli_query($mysqli,"select count(*) from anforderungen");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysqli_query($mysqli,"select * from anforderungen limit $offset,$rows");
	
	$rows = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($rows, $row);
	}
	$result["rows"] = $rows;
	#var_dump(json_encode($result));
	echo json_encode($result);