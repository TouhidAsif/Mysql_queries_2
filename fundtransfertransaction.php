<?
BEGIN;
update accounts set balance=balance-250 where number=1234;
update accounts set balance=balance+250 where number=4321;
select * from accounts;
?>