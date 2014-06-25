<div id="kids_list">
<table border="1">
	<caption><h3>幼儿信息</h3></caption>
	<tr>
		<th scope="col">序号</th>
		<th scope="col">姓名</th>
		<th scope="col">英文名</th>
		<th scope="col">年龄</th>
		<th scope="col">性别</th>
		<th scope="col">健康情况</th>
		<th scope="col">国籍</th>
		<th scope="col">家庭地址</th>
		<th scope="col">家长姓名</th>
		<th scope="col">联系电话</th>
	</tr>

<?php
	$kids_sql="SELECT * FROM p_kidsinfo";
	$kids_query=mysql_query($kids_sql,$conn);
	while ($kids_row=mysql_fetch_array($kids_query)) {
?>
	<tr>
		<td><?=$kids_row[id]?></td>
		<td><?=$kids_row[name]?></td>
		<td><?=$kids_row[ename]?></td>
		<td><?=$kids_row[age]?></td>
		<td><?=$kids_row[sex]?></td>
		<td><?=$kids_row[health]?></td>
		<td><?=$kids_row[nation]?></td>
		<td><?=$kids_row[address]?></td>
		<td><?=$kids_row[pname]?></td>
		<td><?=$kids_row[phone]?></td>
	</tr>
<?php
	}
?>
</table>
</div>
