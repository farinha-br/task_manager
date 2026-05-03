<?php

$opt = $_GET['opt'] ?? "";
$modified = time();
$p = (object) $_POST;

$db = new PDO('sqlite:data/todos.db');

if ($opt == 'read_sub') {
	$rdb = $db->prepare("SELECT * FROM todos WHERE id=?;");
	$rdb->execute([$p->id]);
	$rows = $rdb->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rows);
}

if ($opt == 'read_main') {
	$rdb = $db->prepare("SELECT * FROM todos WHERE id=?;");
	$rdb->execute([$p->id]);
	$rows = $rdb->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rows);
}

if ($opt == 'add_main') {
	$rdb = $db->prepare("SELECT id, main_id FROM todos WHERE main_id=?;");
	$rdb->execute([$p->main_id]);
	$rows = $rdb->fetchAll(PDO::FETCH_ASSOC);
	$rowCount = count($rows);
	if ($rowCount>0) {
		echo "0";
		exit();
	}
	$rdb = $db->prepare("INSERT INTO todos (main_id, description, workspace, modified, mark, main_sub) VALUES (?, ?, ?, ?, ?, ?);");
	echo $rdb->execute([$p->main_id, $p->description, $p->workspace, 0, $modified, 0]);
	echo $rdb->rowCount();
}

if ($opt == 'add_sub') {
	$rdb = $db->prepare("INSERT INTO todos (main_id, workspace, date_task, index_date, status, description, modified, mark, main_sub) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
	$rdb->execute([$p->main_id, $p->workspace, $p->date_task, $p->index_date, $p->status, $p->description, $modified, false, 1]);
	echo $rdb->rowCount();
}

if ($opt == 'upd_sub') {
	$rdb = $db->prepare("UPDATE todos SET description=?, date_task=?, index_date=?, modified=? WHERE id=?;");
	echo $rdb->execute([$p->description, $p->date_task, $p->index_date, $modified, $p->id]);
}

if ($opt == 'set_color') {
	$rdb = $db->prepare("UPDATE todos SET status=?, color=?, modified=? WHERE id=?;");
	echo $rdb->execute([$p->status, $p->color, $modified, $p->id]);
}

if ($opt == 'upd_main') {
	$rdb = $db->prepare("UPDATE todos SET description=?, modified=? WHERE id=?;");
	echo $rdb->execute([$p->description, $modified, $p->id]);
}

if ($opt == 'del_sub') {
	$rdb = $db->prepare("DELETE FROM todos WHERE id=?;");
	echo $rdb->execute([$p->id]);
}

if ($opt == 'set_mark') {
	$rdb = $db->prepare("UPDATE todos SET mark=? WHERE id=?;");
	echo $rdb->execute([$p->mark, $p->id]);
}

if ($opt == 'tasks') {
	$rdb = $db->prepare("select * from todos where workspace=? order by main_id, main_sub, date_task desc;");
	$rdb->execute([$p->workspace]);
	$rows = $rdb->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rows);
}	

