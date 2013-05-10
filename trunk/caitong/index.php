<?php

define("APP_ROOT", __DIR__);
define("CLASS_PATH", __DIR__ . "/framework/");

function br() {
	echo "<br>";
}

$br = "<br />";
/*
echo microtime(true);
br();

$a = "abc";
$b = $a;
$c = & $a;

echo ($a == "abc") ? "$a == abc" :  "!$a == abc";
br();
echo ($a === "abc") ? "$a === abc" :  "!$a === abc";
br();

echo ($a == $b) ? "$a == $b" :  "!$a == $b";
br();
echo ($a === $b) ? "$a === $b" :  "!$a === $b";
br();

echo ($a == $c) ? "$a == $c" :  "!$a == $c";
br();
echo ($a === $c) ? "$a === $c" :  "!$a === $c";

br();
var_dump( getdate());

$t = microtime(true);
echo date('Y-m-d H:i:s ');

br();
//var_dump($_SERVER);
br();
echo dirname(__FILE__);


br();
*/
///////////////////////////////////////////////////////////
// logging testing
///////////////////////////////////////////////////////////
require "./framework/classloader.php";
error_reporting(E_ALL);
ini_set('display_errors', true);
//ini_set('html_errors', false);

date_default_timezone_set('Asia/Chongqing');
echo date('Y-m-d H:i:s ');
echo PHP_INT_MAX;

echo CLASS_PATH;
$loader = new classloader();
logger::init(array());
logger::info("testing mes","index.php");
logger::warn("oh no warning","index.php");
logger::trace("hei hei tracing","index.php");
logger::debug("just debug", "index");
logger::debug("just debug, 只是debug，不用怕", "index");

br();
///////////////////////////////////////////////////////////
// unit testing for database.php
///////////////////////////////////////////////////////////
//require "./framework/dbexception.php";
//require "./framework/db/db_driver_mysql.php";
//require "./framework/database.php";
//require "./framework/dao/dao_base.php";
/*
create table product (
product_id int,
product_name varchar(30),
product_desc varchar(1000),
price decimal
)


*/

$config = array(
	"dbhost" => "localhost",
	"dbuser" => "root",
	"dbpwd" => "",
	"dbname" => "test",
	"dbcharset" => "utf-8",
	"pconnect" => 0
);

try {
	database::init($config);
} catch (DbException $dbe) {
	echo 'can not connect to database'.$dbe;
}

// dao testing plase here:

class dao_product extends dao_base {
	public $pk = "product_id";
	public $table = "product";
	
	public function __construct() {
		parent::__construct($this->pk, $this->table);
	}
	
}

$phone = array(
	"product_id" => "23",
	"product_name" => "SONY LT36H",
	"product_desc" => "SONY LT36H BLACK",
	"price" => 4999
);

$dao_p = new dao_product();
//$dao_p->delete($phone);
$dao_p->add($phone);

$phone["price"] = 3999;
$dao_p->save($phone);

//$dao_p->delete_batch(array(1,2,4));
//$dao_p->delete_where("product_id <= 5");

$p1 = $dao_p->fetch_one(13);
$p1["price"] += 10;
$dao_p->save($p1);

$ps = $dao_p->fetch_all("product_id > 10", "product_id desc");
var_dump($ps);

$ps2 = $dao_p->fetch_page("product_id > 10", 1, 5, "product_id desc");
//var_dump($ps2);


echo "<br>  ===============================  <br>";
try {
database::begin_tx();
$afr = database::execute("insert into product values (14, 'xiaomi 2s 32G BK', 'xiaomi 2s 32G', 2199)");

$afr = database::execute("insert into producta values (15, 'xiaomi 2s 32G CDMA', 'xiaomi 2s CDMA', 2199)");
echo "Affected rows: $afr  $br";
database::commit();
} catch (Exception $e) {
	database::rollback();
	echo "error happen tx has benn rollback $br";
}

$products = database::fetch_all("select * from product" .database::paging(1,100));
$psize = count($products);
echo "product size: $psize $br";
foreach ($products as $prod) {
	echo $prod['product_id'].",".$prod['product_name'].",".$prod['price'].$br;
}

$p = database::fetch_one("select * from product where product_id=".database::quote(3));
echo $p['product_id'].",".$p['product_name'].",".$p['price'].$br;


?>