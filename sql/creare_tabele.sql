DROP TABLE Users
CASCADE CONSTRAINTS PURGE;
DROP TABLE CLOSETS
CASCADE CONSTRAINTS PURGE;
DROP TABLE DRAWERS
CASCADE CONSTRAINTS PURGE;
DROP TABLE OBJECTS
CASCADE CONSTRAINTS PURGE;

CREATE TABLE Users
    (
	id number primary key,
	username varchar2(255) NOT NULL,
	password varchar2(255) NOT NULL,
  firstname varchar2(255) ,
	lastname varchar2(255),
	e_mail varchar2(255) NOT NULL,
	creation_date date 
	);
  
  CREATE TABLE CLOSETS
  (
  id number primary key NOT NULL,
  user_id number,
  name varchar(255) NOT NULL,
  private number default 1,
  creation_date date
  );
  

  CREATE TABLE DRAWERS(
  id number primary key not null,
  closet_id integer,
  name varchar(255) not null,
  locked number default 0,
  password varchar(255),
  creation_date date
  );
  
  CREATE TABLE OBJECTS(
  id number primary key not null,
  drawer_id number,
  color varchar(30),
  material varchar(30),
  price number,
  sentimental_value number,
  added_date date not null,
  type varchar(255) not null,
  note varchar(255)
  );
  
  
     alter table Closets add CONSTRAINT fk_User FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;
     alter table Drawers add CONSTRAINT fk_Closet FOREIGN KEY (closet_id) REFERENCES Closets(id) ON DELETE CASCADE;
     alter table Objects add CONSTRAINT fk_Drawer FOREIGN KEY (drawer_id) REFERENCES Drawers(id) ON DELETE CASCADE;
      