<?
EXPLAIN select * from accounts where number='1234';
?>
----------------------------------------------------------------------------------
id |select type| table  |type |possible_keys| key   |key_len |ref  | rows | Extra|
----------------------------------------------------------------------------------
1  | simple    |accounts|const| PRIMARY    | PRIMARY |4       |const|1     |      |