<div id="kids_list">
<table border="1">
	<caption><h3>招聘信息</h3></caption>
	<tr>
		<th scope="col">序号</th>
		<th scope="col">姓名</th>
		<th scope="col">性别</th>
		<th scope="col">年龄</th>
		<th scope="col">专业</th>
		<th scope="col">学历</th>
		<th scope="col">计算机水平</th>
		<th scope="col">英语水平</th>
		<th scope="col">教龄</th>
		<th scope="col">联系电话</th>
		<th scope="col">自我介绍</th>
	</tr>

<?php
	$zp_sql="SELECT * FROM p_zp";
	$zp_query=mysql_query($zp_sql,$conn);
	while ($zp_row=mysql_fetch_array($zp_query)) {
?>
	<tr>
		<td><?=$zp_row[id]?></td>
		<td><?=$zp_row[name]?></td>
		<td><?=$zp_row[sex]?></td>
		<td><?=$zp_row[age]?></td>
		<td><?=$zp_row[major]?></td>
		<td><?=$zp_row[education]?></td>
		<td><?=$zp_row[pc]?></td>
		<td><?=$zp_row[english]?></td>
		<td><?=$zp_row[teaching]?></td>
		<td><?=$zp_row[phone]?></td>
		<td><?=$zp_row[intro]?></td>
	</tr>
<?php
	}
?>
</table>
</div>
