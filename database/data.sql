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
  usr_username VARCHAR REFERENCES user NOT NULL
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

INSERT INTO user VALUES('johnSnow', '7110eda4d09', 'Kit Harrigton');
INSERT INTO user VALUES('annaXpto','7110e062aa5', 'Anne Shirly');
INSERT INTO user VALUES('peterDink','7110eda4572', 'Peter Dinklage');

INSERT INTO user_cat VALUES ('Home','johnSnow');
INSERT INTO user_cat VALUES ('Work','johnSnow');
INSERT INTO user_cat VALUES ('Finances','johnSnow');
INSERT INTO user_cat VALUES ('Sport','johnSnow');
INSERT INTO user_cat VALUES ('Leisure','johnSnow');
INSERT INTO user_cat VALUES ('Beauty','johnSnow');
INSERT INTO user_cat VALUES ('Other','johnSnow');

INSERT INTO user_cat VALUES ('Home','annaXpto');
INSERT INTO user_cat VALUES ('Work','annaXpto');
INSERT INTO user_cat VALUES ('Finances','annaXpto');
INSERT INTO user_cat VALUES ('Sport','annaXpto');
INSERT INTO user_cat VALUES ('Leisure','annaXpto');
INSERT INTO user_cat VALUES ('Beauty','annaXpto');
INSERT INTO user_cat VALUES ('Other','annaXpto');

INSERT INTO user_cat VALUES ('Home','peterDink');
INSERT INTO user_cat VALUES ('Work','peterDink');
INSERT INTO user_cat VALUES ('Finances','peterDink');
INSERT INTO user_cat VALUES ('Sport','peterDink');
INSERT INTO user_cat VALUES ('Leisure','peterDink');
INSERT INTO user_cat VALUES ('Beauty','peterDink');
INSERT INTO user_cat VALUES ('Other','peterDink');



INSERT INTO todo VALUES (NULL,
  'Homework',
  'Computer network class',
  '2017-11-23',
  'Work',
  'johnSnow'
);

INSERT INTO todo VALUES (NULL,
  'Ltw Project',
  'Make project for ltw class',
  '2017-12-10',
  'Work',
  'johnSnow'
);

INSERT INTO todo VALUES (NULL,
  'Tax',
  'Pay the tax on finances.',
  '2017-11-31',
  'Finances',
  'johnSnow'
);

INSERT INTO todo VALUES (NULL,
  'Homework',
  'Computer network class',
  '2017-11-29',
  'Work',
  'peterDink'
);


INSERT INTO todo VALUES (NULL,
  'Hair',
  'Go to the hairdresser',
  '2017-11-23',
  'Beauty',
  'annaXpto'
);


--sqlite data.db < data.sql
