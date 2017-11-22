CREATE TABLE category (
  cat_id INTEGER PRIMARY KEY,
  cat_name VARCHAR NOT NULL
);


CREATE TABLE user (
  usr_username VARCHAR PRIMARY KEY,
  usr_password VARCHAR NOT NULL,
  usr_name VARCHAR NOT NULL,
  usr_photo VARCHAR NOT NULL --path to image ??
);


CREATE TABLE todo (
  td_id INTEGER PRIMARY KEY,
  td_name VARCHAR NOT NULL,
  td_description VARCHAR NOT NULL,
  td_date DATE,
  cat_id INTEGER REFERENCES category NOT NULL,
  usr_username VARCHAR REFERENCES user NOT NULL
);


INSERT INTO category VALUES (NULL, 'Home');
INSERT INTO category VALUES (NULL, 'Work');
INSERT INTO category VALUES (NULL, 'Finances');
INSERT INTO category VALUES (NULL, 'Sport');
INSERT INTO category VALUES (NULL, 'Leisure');
INSERT INTO category VALUES (NULL, 'Beauty');
INSERT INTO category VALUES (NULL, 'Other');

INSERT INTO user VALUES('johnSnow', '7110eda4d09', 'Kit Harrigton', 'http://pixel.nymag.com/imgs/daily/vulture/2015/09/15/15-kit-harington-got-snow.w529.h529.jpg');
INSERT INTO user VALUES('annaXpto','7110e062aa5', 'Anne Shirly', 'https://pbs.twimg.com/profile_images/623229468643975169/mpGSSdrW.jpg');
INSERT INTO user VALUES('peterDink','7110eda4572', 'Peter Dinklage', 'https://www.biography.com/.image/t_share/MTE5NTU2MzE2NTMzMzI3Mzcx/peter-dinklage-20787107-1-402.jpg');


INSERT INTO todo VALUES (NULL,
  'Homework',
  'Computer network class',
  '2017-11-23',
  2,
  'johnSnow'
);

INSERT INTO todo VALUES (NULL,
  'Ltw Project',
  'Make project for ltw class',
  '2017-12-10',
  2,
  'johnSnow'
);

INSERT INTO todo VALUES (NULL,
  'Tax',
  'Pay the tax on finances.',
  '2017-11-31',
  3,
  'johnSnow'
);

INSERT INTO todo VALUES (NULL,
  'Homework',
  'Computer network class',
  '2017-11-29',
  2,
  'peterDink'
);

INSERT INTO todo VALUES (NULL,
  'Hair',
  'Go to the hairdresser',
  '2017-11-23',
  6,
  'anaXpto'
);

--Ir buscar um todo de uma determinada categoria:
--select category.cat_name from category, todo where todo.cat_id ==2 and todo.cat_id == category.cat_id;
