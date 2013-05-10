<?php

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

/// 以上是数据库初始化

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