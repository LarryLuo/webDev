<div id="kids_list">
<table border="1">
	<caption><h3>��Ƹ��Ϣ</h3></caption>
	<tr>
		<th scope="col">���</th>
		<th scope="col">����</th>
		<th scope="col">�Ա�</th>
		<th scope="col">����</th>
		<th scope="col">רҵ</th>
		<th scope="col">ѧ��</th>
		<th scope="col">�����ˮƽ</th>
		<th scope="col">Ӣ��ˮƽ</th>
		<th scope="col">����</th>
		<th scope="col">��ϵ�绰</th>
		<th scope="col">���ҽ���</th>
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
