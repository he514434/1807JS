<?php
	include "main.php";
	
	$q = mysql_query("SELECT * FROM stu");
	if(!$q){
		echo "<script>alert('database no data,so  error');location.href='index.html';</script>";
	}else{
		
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title></title>
	</head>
	<body>
		<table border="1" cellspacing="0" width="700" align="center">
			<thead>
				<tr>
					<th>学号</th>
					<th>姓名</th>
					<th>性别</th>
					<th>机试</th>
					<th>笔试</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php
						while($arr = mysql_fetch_assoc($q)){
				?>
				<tr>
					<td><?php echo $arr["id"]; ?></td>
					<td><?php echo $arr["name"]; ?></td>
					<td><?php echo $arr["sex"]; ?></td>
					<td><?php echo $arr["cmp"]; ?></td>
					<td><?php echo $arr["pen"]; ?></td>
					<td><a href="delete.php?id=<?php echo $arr["id"] ?>">删除</a></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
	</body>
</html>




