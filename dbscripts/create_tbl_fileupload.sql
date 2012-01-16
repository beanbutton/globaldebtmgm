USE trackstar;

DROP TABLE IF EXISTS tbl_file_upload_item;
CREATE TABLE tbl_file_upload_item
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	description TEXT,
	filename VARCHAR(128),
	create_user_id INTEGER,
	update_user_id INTEGER,
	create_time DATETIME,
	update_time DATETIME
);


