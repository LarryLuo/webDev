<?php 
	include 'conn.php';
	if(isset($_GET['action'])){
 		$del_sql="DELETE FROM `p_newsbase` WHERE `id`='{$_GET['action']}'";
 		mysql_query($del_sql)or die("finish"); 
 		$del_sql2="DELETE FROM `p_newscontent` WHERE `nid`='{$_GET['action']}'";
 		mysql_query($del_sql2)or die("finish");
	}
?>
<?php
	if(isset($_POST[into_news])){
		$base_sql="INSERT INTO `p_newsbase` (`id`,`cid`,`title`,`author`,`date_time`,`brief`)" . 
			"VALUES (NULL,'$_POST[cid]','$_POST[title]','$_POST[author]',now(),substring('$_POST[newscontent]', 1,20))";
		mysql_query($base_sql);
		$last_id=mysql_insert_id();
		$content_sql="INSERT INTO `p_newscontent` (`nid`,`keyword`,`content`,`remark`)" .
			"VALUES ($last_id,'$_POST[keyword]','$_POST[newscontent]','')";
		mysql_query($content_sql);
	}
?>
<script language=javascript>
	function Del(id){
		if(confirm('you really del it?')){
			window.location.href="?sid=1&action=" + id;
 		}
	}
</script>

	<body style="background-color: #ECEBB6">
		<div id="editNews">
			<ul>
			<?php
				$news_sql="SELECT * FROM p_newsbase";
				$news_qurey=mysql_query($news_sql,$conn);
				while($news_row=mysql_fetch_array($news_qurey)){
			?>		
				<li>	
					<a href="../wrapper.php?sid=5&mid=2&nid=<?=$news_row['id']?>">
						<?=$news_row['title']?>
					</a>
					<span style="float:right">
						<a href="#" onclick="Del(<?=$news_row[id]?>)">del</a>
					</span>
				</li>
			<?php	
				}
			?>
			</ul>
		</div>

		<div id="updateNews">
		<table class=navi cellSpacing=1 align=center border=0>
			<tbody>
				<tr>
					<h2>add news</h2>
				</tr>
			</tbody>
		</table>
		</br>
		<table border=0 cellSpacing=1 align=center class=form>
			<form action="index.php?sid=1" method="post" >
				<tr>
					<td width=80>news title</td>
					<td>
						<input type="text" name="title" size=40>
						</select>
					</td>
				</tr>

				<tr>
					<td width=80>news author</td>
					<td>
						<input type="text" name="author" size=40>
					</td>
				</tr>

				<tr>
					<td width=80>key words</td>
					<td>
						<input type="text" name="keyword" size=40>
					</td>
				</tr>

				<tr>
					<td width=80>text content</td>
					<td>
						<textarea class="ckeditor" name="newscontent" rows="10" cols="30">
						</textarea>
						<script>
							CKEDITOR.replace('newscontent',{
								filebrowserBrowseUrl:'../ckfinder/ckfinder.html',
								filebrowserImageBrowseUrl:'../ckfinder/ckfinder.html?Type=Images',
								filebrowserFlashBrowseUrl:'../ckfinder/ckfinder.html?Tyep=Flash',
								filebrowserUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
								filebrowserImageUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
							});
						</script>
					</td>
				</tr>
				
				<tr>
					<td width=80></td>
					<td>
						<input type="submit" name="into_news" style="height:30px;" value="add news">
					</td>
				</tr>
			</form>
		</table>
		</div>
	</body>
