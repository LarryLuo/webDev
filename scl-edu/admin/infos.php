<div id="kids_list">
<table border="1">
	<caption><h3>�׶���Ϣ</h3></caption>
	<tr>
		<th scope="col">���</th>
		<th scope="col">����</th>
		<th scope="col">Ӣ����</th>
		<th scope="col">����</th>
		<th scope="col">�Ա�</th>
		<th scope="col">�������</th>
		<th scope="col">����</th>
		<th scope="col">��ͥ��ַ</th>
		<th scope="col">�ҳ�����</th>
		<th scope="col">��ϵ�绰</th>
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
