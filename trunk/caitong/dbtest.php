<?php

require "./framework/classloader.php";
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

date_default_timezone_set('Asia/Chongqing');

// 初始化类加载器
$loader = new classloader();

// 日志的使用
// 初始化
logger::init(array());
//参数: ($msg, $moduleName)
logger::info("testing mes","index.php");
logger::warn("oh no warning","index.php");
logger::trace("hei hei tracing","index.php");
logger::debug("just debug", "index");
logger::debug("just debug, 只是debug，不用怕", "index");


// 配置信息
$config = array(
	"dbhost" => "localhost",
	"dbuser" => "root",
	"dbpwd" => "",
	"dbname" => "test",
	"dbcharset" => "utf-8",
	"pconnect" => 0
);

// 初始化
try {
	database::init($config);
} catch (DbException $dbe) {
	echo 'can not connect to database'.$dbe;
}

// 主要四个方法:
// database::execute($sql)
// database::fetch_all($sql)
// database::fetch_one($sql)

try {
// 开始事务
database::begin_tx();

// 执行sql语句, 增删改操作
$afr = database::execute("insert into product values (14, 'xiaomi 2s 32G BK', 'xiaomi 2s 32G', 2199)");

$afr = database::execute("insert into producta values (15, 'xiaomi 2s 32G CDMA', 'xiaomi 2s CDMA', 2199)");

// 提交事务
database::commit();
} catch (Exception $e) {
    // 事务回滚
	database::rollback();
	echo "error happen tx has benn rollback $br";
}

// 查询数据库, 返回所有行
$products = database::fetch_all("select * from product" .database::paging(1,100));
$psize = count($products);
echo "product size: $psize $br";
foreach ($products as $prod) {
	echo $prod['product_id'].",".$prod['product_name'].",".$prod['price'].$br;
}

// 查询数据库, 返回一行
$p = database::fetch_one("select * from product where product_id=".database::quote(3));
echo $p['product_id'].",".$p['product_name'].",".$p['price'].$br;






// dao类继承dao_base
class dao_product extends dao_base {
    // 一定要定义主键和表名这两个字段, 主键多个的话用数组表示
	public $pk = "product_id";
	public $table = "product";
	
	public function __construct() {
		parent::__construct($this->pk, $this->table);
	}
	
}

// bean类 也就是实体类用数组表示, key是字段名, value是值
$phone = array(
	"product_id" => "23",
	"product_name" => "SONY LT36H",
	"product_desc" => "SONY LT36H BLACK",
	"price" => 4999
);

$dao_p = new dao_product();
// 删除
//$dao_p->delete($phone);
// 新增
$dao_p->add($phone);  

$phone["price"] = 3999;
// 修改
$dao_p->save($phone);

//$dao_p->delete_batch(array(1,2,4));
//$dao_p->delete_where("product_id <= 5");

// 通过主键查找
$p1 = $dao_p->fetch_one(13);
$p1["price"] += 10;
$dao_p->save($p1);

// 输入过滤条件, 返回数据
$ps = $dao_p->fetch_all("product_id > 10", "product_id desc");
var_dump($ps);
// 输入过滤条件, 返回分页数据
$ps2 = $dao_p->fetch_page("product_id > 10", 1, 5, "product_id desc");
//var_dump($ps2);
