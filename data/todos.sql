PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "workspaces" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"name"  TEXT,
"descricao"  TEXT,
"color"  TEXT,
"label"  TEXT DEFAULT 20000101,
"modified"  INTEGER,
"ordem"  INTEGER,
UNIQUE ("id" ASC)
);
INSERT INTO workspaces VALUES(1,'2026','De 2026','#FF00FF','2026',NULL,1);
INSERT INTO workspaces VALUES(2,'2025','De 2025','#00C000','2025',NULL,2);
INSERT INTO workspaces VALUES(3,'2024','Antigos','#000000','2024',NULL,3);
CREATE TABLE todos (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, workspace TEXT, main_id TEXT, main_sub INTEGER, description TEXT, status TEXT, color TEXT DEFAULT black, modified INTEGER, date_task TEXT, index_date TEXT, mark INTEGER DEFAULT 0, UNIQUE (id ASC));
INSERT INTO todos VALUES(1,'2026','03/2026',0,'Pies and Cakes','assinado',NULL,NULL,NULL,NULL,1);
INSERT INTO todos VALUES(2,'2026','04/2026',0,'Tasks and Todos','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(3,'2026','10/2026',0,'Gardens and Flowers','assinado',NULL,NULL,NULL,NULL,1);
INSERT INTO todos VALUES(5,'2025','112/2025',0,'Pizza and Spaghetti','assinado','blue',1777649276,NULL,NULL,1);
INSERT INTO todos VALUES(6,'2025','113/2025',0,'Gardens and Flowers','assinado','green',NULL,NULL,NULL,0);
INSERT INTO todos VALUES(7,'2025','114/2025',0,'Burgers and Desserts','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(8,'2025','115/2025',0,'Tacos','assinado',NULL,1777649296,NULL,NULL,1);
INSERT INTO todos VALUES(13,'2024','28/2025',0,'Tasks and Todos Ltd','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(14,'2024','30/2025',0,'Ice Creams','assinado','green',NULL,NULL,NULL,1);
INSERT INTO todos VALUES(15,'2024','5/2026',0,'Soda and Juice','assinado',NULL,NULL,NULL,NULL,1);
INSERT INTO todos VALUES(16,'2024','51/2025',0,'Mobile Phones','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(18,'2024','65/2025',0,'Barman Whiskies','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(19,'2024','65/2025',1,'Tasks and Todos Ltd','Scotch whisky','blue',1777642288,'10/05/2025','2025-05-10',0);
INSERT INTO todos VALUES(20,'2026','7/2026',0,'Tasks and Todos Ltd','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(22,'2024','85/2025',0,'Burgers and Desserts','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(23,'2026','9/2026',0,'Soda and Juice','assinado',NULL,NULL,NULL,NULL,1);
INSERT INTO todos VALUES(24,'2025','91/2025',0,'Mountains and Castles','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(26,'2024','93/2025',0,'Mountains and Castles','assinado',NULL,NULL,NULL,NULL,0);
INSERT INTO todos VALUES(28,'2025','112/2025',1,'Soda and Juice ','enviado','black',1777691100,'12/01/2025','2025-01-12',0);
INSERT INTO todos VALUES(29,'2024','5/2026',1,'Serve Orange Juice','paid','green',1777681727,'15/02/2025','2025-02-15',0);
INSERT INTO todos VALUES(30,'2025','112/2025',1,'Rent cars','a pagar','blue',1777680253,'10/02/2025','2025-02-10',0);
INSERT INTO todos VALUES(31,'2024','5/2026',1,'Soda with juice','sell','blue',1777681716,'17/02/2025','2025-02-17',0);
INSERT INTO todos VALUES(32,'2025','112/2025',1,'Pay ','pago','red',1777667485,'20/02/2025','2025-02-20',0);
INSERT INTO todos VALUES(34,'2025','113/2025',1,'Sample','sample','blue',1777649301,'10/02/2025','2025-02-10',0);
INSERT INTO todos VALUES(35,'2025','113/2025',1,'Burguer','paid','black',1777766865,'10/02/2025','2025-02-10',0);
INSERT INTO todos VALUES(36,'2025','113/2025',1,'Buy Burger','paid','blue',1776773065,'11/02/2026','2026-02-11',0);
INSERT INTO todos VALUES(37,'2025','117/2025',0,'Seventeen',NULL,'black',1776183745,NULL,NULL,0);
INSERT INTO todos VALUES(38,'2025','117/2025',1,'Sub Seventeen','seventeen','black',1777667505,'05/05/2025','2025-05-05',0);
INSERT INTO todos VALUES(39,'2025','112/2025',1,'Pizza Napole','paid','green',1777680326,'10/02/2025','2025-02-10','');
INSERT INTO todos VALUES(42,'2025','200/2025',0,'Sample',NULL,'black',1776785288,NULL,NULL,1776785275);
INSERT INTO todos VALUES(43,'2025','114/2025',1,'Ice Cream','ice','blue',1777770505,'10/01/2025','2025-01-10','');
DELETE FROM sqlite_sequence;
INSERT INTO sqlite_sequence VALUES('workspaces',3);
INSERT INTO sqlite_sequence VALUES('todos',43);
COMMIT;
