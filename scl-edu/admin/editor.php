<?php
	include 'conn.php';

	if(isset($_POST[into_news])){
		mysql_query($base_sql);
		$last_id=mysql_insert_id();
		$content_sql="INSERT INTO `p_content` (`sid`,`content`,`remark`)" .
			"VALUES ($_POST[sid],'$_POST[content]','')";
		mysql_query($content_sql);
	}
?>
<script language=javascript>
	function CheckPost()
	{
		if(editer.sid.value=="")
		{
			alert("enter sid!");
			editer.sid.focus();
			return false;
		}
	}
</script>
		<div id="contentsList">
			<ul>
			<?php
				$contents_sql="SELECT * FROM p_content";
				$contents_query=mysql_query($contents_sql,$conn);
				while($row=mysql_fetch_array($contents_query)){
					if ($row[sid]<7) {
				
			?>
				<li>	
					<a href="../wrapper.php?sid=<?=$row[sid]?>">
						title
					</a>
				</li>
			<?php	
					}	
				}
			?>
			</ul>
		</div>
		<table class=navi cellSpacing=1 align=center border=0>
			<tbody>
				<tr>
					<th>add contents</th>
				</tr>
			</tbody>
		</table>
		</br>
		<table border=0 cellSpacing=1 align=center class=form>
			<form name="editor" action="editor.php" method="post" onsubmit="return CheckPost();">


				<tr>
					<td width=80>content sid</td>
					<td>
						<input type="text" name="sid" size=20>
					</td>
				</tr>


				<tr>
					<td>text contents</td>
					<td>
						<textarea class="ckeditor" name="contents" rows="10" cols="60">
						</textarea>
						<script>
							CKEDITOR.replace('contents',{
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
						<input type="submit" name="into_news" style="height:30px;" value="add contents" >
					</td>
				</tr>
			</form>
		</table>
