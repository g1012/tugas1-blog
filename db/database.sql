CREATE TABLE tb_category(
	cat_id INT(11) NOT NULL AUTO_INCREMENT,
	cat_nama VARCHAR(100) NOT NULL,
	cat_text VARCHAR(100) NOT NULL,
	PRIMARY KEY (cat_id)
);

CREATE TABLE tb_post(
	post_id INT(11) NOT NULL AUTO_INCREMENT,
	post_date DATE NOT NULL,
	post_slug VARCHAR(25) NOT NULL,
	post_litle VARCHAR(100) NOT NULL,
	post_text TEXT NOT NULL,
	catt_id INT(11) NOT NULL,
	PRIMARY KEY (post_id),
	FOREIGN KEY(catt_id)
		REFERENCES tb_category(cat_id)
);

CREATE TABLE tb_pothos(
	pothos_id INT(11) NOT NULL AUTO_INCREMENT,
	pothos_date DATE NOT NULL,
	pothos_litle VARCHAR(100) NOT NULL,
	pothos_text TEXT NOT NULL,
	postt_id INT(11) NOT NULL,
	PRIMARY KEY (pothos_id),
	FOREIGN KEY(postt_id)
		REFERENCES tb_post(post_id)
);

CREATE TABLE tb_album(
	album_id INT(11) NOT NULL AUTO_INCREMENT,
	album_nama VARCHAR(100) NOT NULL,
	album_text VARCHAR(100) NOT NULL,
	pothoss_id INT(11) NOT NULL,
	PRIMARY KEY (album_id),
	FOREIGN KEY(pothoss_id)
		REFERENCES tb_pothos(pothos_id)
);

CREATE TABLE tb_user(
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(100) NOT NULL,
	user_pass VARCHAR(100) NOT NULL,
	PRIMARY KEY (user_id)
	
);