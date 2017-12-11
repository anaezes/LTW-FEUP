CREATE TABLE category (
  cat_name VARCHAR PRIMARY KEY,
  cat_color VARCHAR 
);


CREATE TABLE user (
  usr_username VARCHAR PRIMARY KEY,
  usr_password VARCHAR NOT NULL,
  usr_name VARCHAR NOT NULL
);


CREATE TABLE todo (
  td_id INTEGER PRIMARY KEY,
  td_name VARCHAR NOT NULL,
  td_description VARCHAR NOT NULL,
  td_date DATE,
  cat_name VARCHAR REFERENCES category NOT NULL,
  usr_username VARCHAR REFERENCES user NOT NULL,
  td_check BIT NOT NULL
);

CREATE TABLE user_cat (
  cat VARCHAR REFERENCES category NOT NULL,
  usr VARCHAR REFERENCES user NOT NULL,
  PRIMARY KEY (cat, usr)
);

CREATE TABLE friends_with (
  usr_1 VARCHAR REFERENCES user NOT NULL,
  usr_2 VARCHAR REFERENCES user NOT NULL,
  PRIMARY KEY (usr_1, usr_2)
);

CREATE TABLE shared_with (
  usr_1 VARCHAR REFERENCES user NOT NULL,
  todo_id INTEGER REFERENCES todo NOT NULL,
  usr_2 VARCHAR REFERENCES user NOT NULL,
  PRIMARY KEY (usr_1, todo_id, usr_2)
);


INSERT INTO category VALUES ('Home', '#000080');--blue 
INSERT INTO category VALUES ('Work', '#800000'); --brown 
INSERT INTO category VALUES ('Finances', '#DAA520'); -- dark yellow 
INSERT INTO category VALUES ('Sport', '#45a049'); --green 
INSERT INTO category VALUES ('Leisure', '#D2691E'); -- dark orange
INSERT INTO category VALUES ('Beauty', '#800080'); --purple
INSERT INTO category VALUES ('Other', '#696969'); --grey 


--INSERT INTO user VALUES('jonsnow', 'jonsnow1#', 'Kit Harrigton');
--INSERT INTO user VALUES('danny', 'dannyTa1#', 'Emilia Clarke');
--INSERT INTO user VALUES('tyrion','tyrionLa1#', 'Peter Dinklage');
--arya, aryaStark1#
--sansa, sansaStark1#