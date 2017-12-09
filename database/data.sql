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


INSERT INTO category VALUES ('Home', '#000080');--blue 
INSERT INTO category VALUES ('Work', '#800000'); --brown 
INSERT INTO category VALUES ('Finances', '#DAA520'); -- dark yellow 
INSERT INTO category VALUES ('Sport', '#45a049'); --green 
INSERT INTO category VALUES ('Leisure', '#D2691E'); -- dark orange
INSERT INTO category VALUES ('Beauty', '#800080'); --purple
INSERT INTO category VALUES ('Other', '#696969'); --grey 

INSERT INTO user VALUES('jonsnow', 'jonsnow1#', 'Kit Harrigton');
INSERT INTO user VALUES('danny', 'dannyTa1#', 'Emilia Clarke');
INSERT INTO user VALUES('tyrion','tyrionLa1#', 'Peter Dinklage');

INSERT INTO user_cat VALUES ('Home','jonsnow');
INSERT INTO user_cat VALUES ('Work','jonsnow');
INSERT INTO user_cat VALUES ('Finances','jonsnow');
INSERT INTO user_cat VALUES ('Sport','jonsnow');
INSERT INTO user_cat VALUES ('Leisure','jonsnow');
INSERT INTO user_cat VALUES ('Beauty','jonsnow');
INSERT INTO user_cat VALUES ('Other','jonsnow');

INSERT INTO user_cat VALUES ('Home','danny');
INSERT INTO user_cat VALUES ('Work','danny');
INSERT INTO user_cat VALUES ('Finances','danny');
INSERT INTO user_cat VALUES ('Sport','danny');
INSERT INTO user_cat VALUES ('Leisure','danny');
INSERT INTO user_cat VALUES ('Beauty','danny');
INSERT INTO user_cat VALUES ('Other','danny');

INSERT INTO user_cat VALUES ('Home','tyrion');
INSERT INTO user_cat VALUES ('Work','tyrion');
INSERT INTO user_cat VALUES ('Finances','tyrion');
INSERT INTO user_cat VALUES ('Sport','tyrion');
INSERT INTO user_cat VALUES ('Leisure','tyrion');
INSERT INTO user_cat VALUES ('Beauty','tyrion');
INSERT INTO user_cat VALUES ('Other','tyrion');



INSERT INTO todo VALUES (NULL,
  'Homework',
  'Computer network class',
  '2017-11-23',
  'Work',
  'jonsnow',
  0
);

INSERT INTO todo VALUES (NULL,
  'Ltw Project',
  'Make project for ltw class',
  '2017-12-10',
  'Work',
  'jonsnow',
  1
);

INSERT INTO todo VALUES (NULL,
  'Tax',
  'Pay the tax on finances.',
  '2017-11-31',
  'Finances',
  'jonsnow',
  0
);

INSERT INTO todo VALUES (NULL,
  'Homework',
  'Computer network class',
  '2017-11-29',
  'Work',
  'tyrion',
  0
);


INSERT INTO todo VALUES (NULL,
  'Hair',
  'Go to the hairdresser',
  '2017-11-23',
  'Beauty',
  'danny',
  0
);


--sqlite data.db < data.sql
