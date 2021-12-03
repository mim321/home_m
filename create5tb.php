<?php $sql=array('
create table myorders 
(orderid int, custid int, emplid int, datetime varchar(50), primary key (orderid));','
insert into myorders values (1,1,1,"2017/11/04 08:53:21");','
insert into myorders values (2,1,2,"2017/11/04 08:54:21");','
insert into myorders values (3,2,1,"2017/11/04 08:56:21");','
create table myorderdetails 
(orderid int, proid int, quan int, price double, primary key (orderid, proid));','
insert into myorderdetails values (1,3,10,2.5);','
insert into myorderdetails values (2,6,1,20);','
insert into myorderdetails values (2,9,20,3);','
insert into myorderdetails values (3,6,5,5.5);','
create table myorders_temp (orderid int, custid int, emplid int, datetime varchar(50));','
create table myorderdetails_temp (orderid int, proid int, quan int, price double);','
create table myproducts (proid int, quan int, price double);','
insert into myproducts values (1,300,10);','
insert into myproducts values (2,700,5.5);','
insert into myproducts values (3,100,2);');
if((int)phpversion() >= 7) {
  $connect = new mysqli("localhost", "root", "", "");
  foreach($sql as $q) { $result = $connect->query($q); }   
  $connect->close(); 
} else {
  $connect = mysql_connect("localhost","root", "");          
  foreach($sql as $q) { $result = mysql_db_query("id14699626_login",$q); } 
  mysql_close($connect);  
}
if($result) echo "create : completely<a href=myorderform.php>home</a>"; else echo "fail".$q;
exit;
?>