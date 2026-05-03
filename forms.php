
<div id="add_main_form">
	<input type="hidden" id="a_workspace">
	<table>
		<tr><td>Main id: </td><td><input type="text" id="a_main_id" size=30></td></tr>
		<tr><td>Desc: </td><td><input type="text" id="a_description" size=30></td></tr>
		<tr><td><input type="button" value="Add Main id" onclick="add_main_id();"></td><td>
		<input type="button" value="Close" onclick="main_close();"></td></tr>
	</table>
</div>

<div id="upd_main_form">
	<input type="hidden" id="b_id" name="b_id">
	<table>
		<tr><td>Desc: </td><td><input type="text" id="b_description" size=30></td></tr>
		<tr><td><input type="button" value="Update Main" onclick="upd_main();"></td><td>
		<input type="button" value="Close" onclick="main_close();"></td></tr>
	</table>
</div>

<div id="add_sub_form">
	<input type="hidden" id="c_main_id">
	<input type="hidden" id="c_workspace">
	<table>
		<tr><td>Date: </td><td><input type="text" id="c_date_task" size=30></td></tr>
		<tr><td>Status: </td><td><input type="text" id="c_status" size=30></td></tr>
		<tr><td>Desc: </td><td><input type="text" id="c_description" size=30></td></tr>
		<tr><td><input type="button" value="Add Sub" onclick="add_sub_save();"></td><td>
		<input type="button" value="Close" onclick="main_close();"></td></tr>
	</table>
</div>

<div id="upd_sub_form">
	<input type="hidden" id="d_id" name="d_id">
	<table>
		<tr><td>Desc: </td><td><input type="text" id="d_description" size=30></td></tr>
		<tr><td>Date: </td><td><input type="text" id="d_date_task" size=30></td></tr>
		<tr><td><input type="button" value="Update sub" onclick="upd_sub();"></td><td>
		<input type="button" value="Close" onclick="main_close();"></td></tr>
		<tr><td>&nbsp;</td><td><input type="button" value="Delete sub" onclick="del_sub();"></td></tr>
	</table>
</div>

<div id="colors">
	<input type="hidden" id="e_id" name="e_id">
	<table>
	<tr><td>Status:</td><td colspan=5><input type="text" id="e_status"></td></tr>
	<tr>
		<td><input type="radio" class="color" name="e_txt" checked value="black"> <span style="background-color: black; "> &nbsp; &nbsp; </span> &nbsp; </td>
		<td><input type="radio" class="color" name="e_txt" value="blue"> <span style="background-color: blue; "> &nbsp; &nbsp; </span> &nbsp; </td>
		<td><input type="radio" class="color" name="e_txt" value="green"> <span style="background-color: green; "> &nbsp; &nbsp; </span> &nbsp; </td>
		<td><input type="radio" class="color" name="e_txt" value="orange"> <span style="background-color: orange; "> &nbsp; &nbsp; </span> &nbsp; </td>
		<td><input type="radio" class="color" name="e_txt" value="red"> <span style="background-color: red; "> &nbsp; &nbsp; </span> &nbsp; </td>
		<td><input type="radio" class="color" name="e_txt" value="grey"> <span style="background-color: grey; "> &nbsp; &nbsp; </span> &nbsp; </td>
		<td><input type="button" value="Set color" onclick="set_color();"> &nbsp; </td>
		<td><input type="button" value="Close" onclick="main_close();"></td>
	</tr>
	</table>
</div>





