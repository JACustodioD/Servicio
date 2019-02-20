CREATE DATABASE escuela1;
USE escuela1;


CREATE TABLE adm(
	adm_usr varchar (35) NOT NULL,
	adm_pas varchar(35) NOT NULL,
	CONSTRAINT pk_adm_usr PRIMARY KEY (adm_usr)
)Engine=InnoDB;

INSERT INTO adm VALUES ('Encargado','escuela');

CREATE TABLE cont (
	cont_curp varchar (18) NOT NULL,
	cont_pass varchar(35) NOT NULL,
	cont_nom varchar (75) NOT NULL,
	cont_appa varchar (75) NOT NULL,
	cont_apma varchar (75) NOT NULL,
	cont_tel varchar (75) NOT NULL,
	cont_dir varchar (75) NOT NULL,
	CONSTRAINT pk_cont_curp PRIMARY KEY (cont_curp)
)Engine=InnoDB;

CREATE TABLE alu(
	alu_curp varchar(18) NOT NULL,
 	alu_nom varchar (75) NOT NULL,
	alu_appa varchar (75) NOT NULL,
	alu_apma varchar (75) NOT NULL,
	alu_gra char(1) NOT NULL,
	alu_gru char(1) NOT NULL,
	alu_nac date NOT NULL,
	alu_gen char(18) NOT NULL,
	alu_nal varchar (20) NOT NULL,
	alu_cal varchar(35) NOT NULL,
	alu_col varchar(40) NOT NULL,
	alu_mun varchar(50) NOT NULL,
	alu_cor varchar(50) NOT NULL,
	alu_est float NOT NULL,
	alu_pes float NOT NULL,
	alu_sgr varchar (10) NOT NULL,
	alu_cont varchar(18) NOT NULL,
	CONSTRAINT pk_alu_id PRIMARY KEY (alu_curp),
	CONSTRAINT fk_alu_curp FOREIGN KEY (alu_cont) REFERENCES cont (cont_curp)
)Engine=InnoDB;



CREATE TABLE hme(
	hme_cod int NOT NULL AUTO_INCREMENT,
	hme_curp varchar (18) NOT NULL,
	hme_insmed varchar (30) NOT NULL,
	hme_nombmed varchar (75) NOT NULL,
	hme_telmed varchar (15) NOT NULL,
	CONSTRAINT pk_hme_cod PRIMARY KEY (hme_cod),
	CONSTRAINT fk_hme_curp FOREIGN KEY (hme_curp) REFERENCES alu (alu_curp)
)Engine=InnoDB;

CREATE TABLE pad (
	idPadecimiento int,
	nombrePad varchar (100),
	CONSTRAINT pad PRIMARY KEY (idPadecimiento)
)ENGINE=InnoDB;

CREATE TABLE usr_pad(
	usr_curp varchar (18),
	id_pad int,
	CONSTRAINT usr_pad PRIMARY KEY (usr_curp,id_pad),
	CONSTRAINT usr_pad FOREIGN KEY (usr_curp)  REFERENCES alu (alu_curp),
	CONSTRAINT usr_padp FOREIGN KEY (id_pad) REFERENCES pad (idPadecimiento)
)ENGINE=InnoDB;

CREATE TABLE obs (
	idObservacion int,
	nombreObs varchar (100),
	CONSTRAINT obs PRIMARY KEY (idObservacion)
)ENGINE=InnoDB;

CREATE TABLE usr_obs(
	usr_curp varchar (18),
	id_Obs int,
	CONSTRAINT usr_obs PRIMARY KEY (usr_curp,id_Obs),
	CONSTRAINT usr_obs FOREIGN KEY (usr_curp) REFERENCES alu (alu_curp),
	CONSTRAINT usr_obsp FOREIGN KEY (id_Obs) REFERENCES obs (idObservacion)
)ENGINE=InnoDB;



			
INSERT INTO pad VALUES (1,'Sobrepeso u Obesidad');
INSERT INTO pad VALUES (2,'Enfermedades del corazón');
INSERT INTO pad VALUES (3,'Bronquitis');
INSERT INTO pad VALUES (4,'Hemorragias');
INSERT INTO pad VALUES (5,'Epilepsia (ataques, convulsiones');
INSERT INTO pad VALUES (6,'Fiebre Reumatica');
INSERT INTO pad VALUES (7,'Cancer');
INSERT INTO pad VALUES (8,'Diabetes (azúcar en la sangre)');
INSERT INTO pad VALUES (9,'Amigdalitis (anginas)');
INSERT INTO pad VALUES (10,'Anemia');
INSERT INTO pad VALUES (11,'Hepatitis');
INSERT INTO pad VALUES (12,'Neoplasis');


INSERT INTO obs VALUES (50,'No duerme bien durante la noche');
INSERT INTO obs VALUES (51,'Falta de aire despues de hacer ejercicio.');
INSERT INTO obs VALUES (52,'Hemorragias frecuentes.');
INSERT INTO obs VALUES (53,'Dolor en las piernas al dormir.');
INSERT INTO obs VALUES (54,'Alergico a un alimento o bebida.');
INSERT INTO obs VALUES (55,'Intervención quirurjica.');
INSERT INTO obs VALUES (56,'Presenta fiebre frecuentemente.');
INSERT INTO obs VALUES (57,'Alergico a ciertos medicamentos.');
INSERT INTO obs VALUES (58,'Antecedentes que no permiten actividad fisica.');
INSERT INTO obs VALUES (59,'Se desmaya con frecuencia.');
INSERT INTO obs VALUES (60,'Recibió transfución sanguinea.');
INSERT INTO obs VALUES (61,'Impedimento al realizar deportes.');
