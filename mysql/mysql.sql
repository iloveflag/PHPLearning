create table users(
	user_id int(11) auto_increment primary key not null,
	user_first varchar(256) not null,
	user_last varchar(256) not null,
	user_email varchar(256) not null,
	user_uid varchar(256) not null,
	user_pwd varchar(256) not null
)

insert into users(user_first,user_last,user_email,user_uid,user_pwd)values('zhao','renqun','zmbxzrq@outlook.com','admin','123456@admin');
insert into users(user_first,user_last,user_email,user_uid,user_pwd)values('zhao','renqun1','zmbxzrq@qq.com','zhao','123456');