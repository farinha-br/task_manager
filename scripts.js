
const db_route = (opt, params, callback) => {
	$.post('db.php' + opt, params, function (data, status) {
		callback(data);
	});
};

const edit_task = async function(b_id) {	
	$("#upd_main_form").show();
	db_route('?opt=read_main', {id: b_id}, data => {
		let rs = JSON.parse(data)[0];
		$("#b_id").val(b_id);
		$("#b_description").val(rs.description);
	});
};

const upd_main = async function() {
	$("#upd_main_form").hide();
	let params = {id: $("#b_id").val(), description: $("#b_description").val()};
	db_route('?opt=upd_main', params, data => {
		console.log(data);
		window.location.reload(true);
	});
};

const add_main = function(workspace) {
	$("#add_main_form").show();
	$("#a_add_workspace").val(workspace);
};

const add_main_id = async function() {
	$("#add_main_form").hide();
	let params = {
		main_id: $("#a_main_id").val(),
		workspace: sessionStorage.getItem("workspace"), 
		description: $("#a_description").val()
	};
	db_route("?opt=add_main", params, data => {
		window.location.reload(true);
	});
};

const add_sub = function(main_id, workspace) {
	$("#add_sub_form").show();
	$("#c_workspace").val(workspace);
	$("#c_main_id").val(main_id);
}
   
const add_sub_save = async function() {	
	$("#add_sub_form").hide();
	let c_date_task = $("#c_date_task").val();
	let c_index_date = c_date_task.split('/').reverse().join('-');
	let params = {
		main_id: $("#c_main_id").val(), 
		workspace: $("#c_workspace").val(), 
		description: $("#c_description").val(), 
		status: $("#c_status").val(), 
		date_task: c_date_task, 
		index_date: c_index_date
	};
	db_route("?opt=add_sub", params, data => {
		window.location.reload(true);
	});
};

async function edit_sub(f_id) { 
	$("#upd_sub_form").show();
	db_route('?opt=read_sub', {id: f_id}, data => { 
		let rs = JSON.parse(data)[0];
		$("#d_id").val(f_id);
		$("#d_description").val(rs.description);
		$("#d_date_task").val(rs.date_task);
	});
};

const upd_sub = async function() {	
	$("#upd_sub_form").hide();
	let d_date_task = $("#d_date_task").val();
	let d_index_date = d_date_task.split('/').reverse().join('-');
	let params = {
		id: $("#d_id").val(), 
		date_task: d_date_task, 
		index_date: d_index_date, 
		description: $("#d_description").val()
	};
	db_route('?opt=upd_sub', params, data => {
		window.location.reload(true);
	});
};

const main_close = function() {
	$("#add_main_form").hide();
	$("#add_sub_form").hide();
	$("#upd_sub_form").hide();
	$("#upd_main_form").hide();
	$("#colors").hide();
}	;

const edit_sub_close = function() {
	$("#edit_sub_form").hide();
};	

const main_show = function(main_id) {
	$("#add_main").show();
	$("#f_group").val(main_id);
};	

const scolor = function(id, el) {
	$("#colors").show();
	$("#e_id").val(id);
	$("#e_status").val(el.innerText);
};	

const set_color = async function() {
	var e_color = 'black';
	e_color = document.querySelector('input[name="e_txt"]:checked')?.value;
	let params = {id: $("#e_id").val(), status: $("#e_status").val(), color: e_color};
	db_route('?opt=set_color', params, data => {
		window.location.reload(true);
	});
};

const goto_id = function() {
	document.getElementById("id001").scrollIntoView({ 
		behavior: "smooth", 
		block: "start" 
	});
};

const del_sub = async function() {
	$("#upd_sub_form").hide();
	if ($("#d_description").val()=="") 
		deleteSub($("#d_id").val());
};

const deleteSub = async function(id) {
	db_route('?opt=del_sub', {id: id}, data => {
		window.location.reload(true);
	});
};

const set_mark = async function(el, id) {
	var f_mark = '0';
	if (el.checked) f_mark = '1';
	db_route('?opt=set_mark', {id: id, mark: f_mark}, data => {
		//
	});;
};

