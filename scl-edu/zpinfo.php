<div id="kids_list">
<table border="1">
	<caption><h3>ZP information</h3></caption>
	<tr>
		<th scope="col">id</th>
		<th scope="col">name</th>
		<th scope="col">sex</th>
		<th scope="col">age</th>
		<th scope="col">major</th>
		<th scope="col">education</th>
		<th scope="col">pc</th>
		<th scope="col">english</th>
		<th scope="col">teaching</th>
		<th scope="col">phone</th>
		<th scope="col">intro</th>
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