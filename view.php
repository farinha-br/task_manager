
<table>
<?php
	$db = new PDO('sqlite:data/todos.db');
	$rdb = $db->prepare("select * from todos where workspace=? order by main_id, main_sub, date_task desc;");
	$rdb->execute([$wksp]);
	$rows = $rdb->fetchAll(PDO::FETCH_ASSOC);
	
	$chkd = '';
	$close_table = '';

	foreach ($rows as $row) {
		if ($row['mark']) $chkd = 'checked'; else $chkd = '';
		if ($row['main_sub']=="0") {
			echo $close_table; 
			?>
			<br/>
			<table><tr>
				<td>
					<input type="checkbox" <?php echo $chkd; ?> onchange="set_mark(this, '<?php echo $row['id']; ?>');" />
				</td>
				<td class="cnt xcolor parent">
					<?php echo $row['main_id']; ?> &nbsp; 
					<span class="child">
						<a href="#" class="svg_edit" title="Edit" width="12" height="12" 
						onclick="edit_task('<?php echo $row['id']; ?>');">&#x1F589;</a> &nbsp;
						<a href="#" class="svg_add" title="Add Task" width="12" height="12" 
						onclick="add_sub('<?php echo $row['main_id']; ?>', '<?php echo $row['workspace']; ?>');">&#x0002B;</a>
					</span>
				</td>
				<td colspan=2>
					<li class="desc xcolor"><?php echo $row['description']; ?></li>
				</td>
			</tr>
			<?php
			$p = "";
		} else {
			?>
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
				<li class="cnt">
					<a style="color: <?php echo $row['color']; ?>;" href="#" 
					onclick="scolor('<?php echo $row['id']; ?>', this);"><?php echo $row['status']; ?></a>
				</li>
			</td>
			<td class="parent" style="text-align: center;">
				<?php echo $row['date_task']; ?>
				<span class="child"> &nbsp; 
					<a href="#" class="svg_edit" title="Edit" width="12" height="12" 
					onclick="edit_sub('<?php echo $row['id']; ?>');">&#x1F589;</a>
				</span>
			</td>
			<td class="s300"> 
				&nbsp; <?php echo $row['description']; ?>
			</td>
		</tr>
		<?php
			$p = "sub";
		}
		$close_table = '</table>';
	}
?>
</table>



