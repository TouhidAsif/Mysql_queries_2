<?
BEGIN;
update accounts set balance=balance+25.11 where number=12354;
COMMIT;
select * from accounts;
?>