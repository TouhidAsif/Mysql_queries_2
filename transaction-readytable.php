<?
Create Table accounts(
number INT,
balance FlOAT,
PRIMARY KEY(number)
)ENGINE InnoDB
DESCRIBE accounts;
INSERT INTO accounts(number,balance)VALUES(1234,702.5);
INSERT INTO accounts(number,balance)VALUES(6743,234.32);
SELECT * FROM accounts;

?>