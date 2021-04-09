USE ucode_web
CREATE  TABLE IF NOT EXISTS powers(
     id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
     hero_id INT,
     name TEXT NOT NULL ,
     points INT NOT NULL ,
     type ENUM("attack","defense") NOT NULL);
CREATE TABLE IF NOT EXISTS races(
     id INT NOT NULL,
     hero_id INT NOT NULL ,
     name TEXT NOT NULL,
     FOREIGN KEY(hero_id) REFERENCES heroes(id) ON DELETE CASCADE
     );
CREATE TABLE IF NOT EXISTS teams(
     id INT NOT NULL,
     hero_id INT NOT NULL ,
     name TEXT NOT NULL,
     FOREIGN KEY(hero_id)  REFERENCES heroes(id) ON DELETE CASCADE
     );