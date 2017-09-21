create table lc29_projects

CREATE TABLE lc29_projects (
	project_id serial PRIMARY KEY,
	project_title VARCHAR (160) UNIQUE NOT NULL,
	project_content TEXT NOT NULL,
	project_photo TEXT NOT NULL,
);