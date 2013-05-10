<?php

require "./framework/classloader.php";
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

date_default_timezone_set('Asia/Chongqing');

// ��ʼ���������
$loader = new classloader();

// ��־��ʹ��
// ��ʼ��
logger::init(array());
//����: ($msg, $moduleName)
logger::info("testing mes","index.php");
logger::warn("oh no warning","index.php");
logger::trace("hei hei tracing","index.php");
logger::debug("just debug", "index");
logger::debug("just debug, ֻ��debug��������", "index");


// ������Ϣ
$config = array(
	"dbhost" => "localhost",
	"dbuser" => "root",
	"dbpwd" => "",
	"dbname" => "test",
	"dbcharset" => "utf-8",
	"pconnect" => 0
);

// ��ʼ��
try {
	database::init($config);
} catch (DbException $dbe) {
	echo 'can not connect to database'.$dbe;
}

// ��Ҫ�ĸ�����:
// database::execute($sql)
// database::fetch_all($sql)
// database::fetch_one($sql)

try {
// ��ʼ����
database::begin_tx();

// ִ��sql���, ��ɾ�Ĳ���
$afr = database::execute("insert into product values (14, 'xiaomi 2s 32G BK', 'xiaomi 2s 32G', 2199)");

$afr = database::execute("insert into producta values (15, 'xiaomi 2s 32G CDMA', 'xiaomi 2s CDMA', 2199)");

// �ύ����
database::commit();
} catch (Exception $e) {
    // ����ع�
	database::rollback();
	echo "error happen tx has benn rollback $br";
}

// ��ѯ���ݿ�, ����������
$products = database::fetch_all("select * from product" .database::paging(1,100));
$psize = count($products);
echo "product size: $psize $br";
foreach ($products as $prod) {
	echo $prod['product_id'].",".$prod['product_name'].",".$prod['price'].$br;
}

// ��ѯ���ݿ�, ����һ��
$p = database::fetch_one("select * from product where product_id=".database::quote(3));
echo $p['product_id'].",".$p['product_name'].",".$p['price'].$br;






// dao��̳�dao_base
class dao_product extends dao_base {
    // һ��Ҫ���������ͱ����������ֶ�, ��������Ļ��������ʾ
	public $pk = "product_id";
	public $table = "product";
	
	public function __construct() {
		parent::__construct($this->pk, $this->table);
	}
	
}

// bean�� Ҳ����ʵ�����������ʾ, key���ֶ���, value��ֵ
$phone = array(
	"product_id" => "23",
	"product_name" => "SONY LT36H",
	"product_desc" => "SONY LT36H BLACK",
	"price" => 4999
);

$dao_p = new dao_product();
// ɾ��
//$dao_p->delete($phone);
// ����
$dao_p->add($phone);  

$phone["price"] = 3999;
// �޸�
$dao_p->save($phone);

//$dao_p->delete_batch(array(1,2,4));
//$dao_p->delete_where("product_id <= 5");

// ͨ����������
$p1 = $dao_p->fetch_one(13);
$p1["price"] += 10;
$dao_p->save($p1);

// �����������, ��������
$ps = $dao_p->fetch_all("product_id > 10", "product_id desc");
var_dump($ps);
// �����������, ���ط�ҳ����
$ps2 = $dao_p->fetch_page("product_id > 10", 1, 5, "product_id desc");
//var_dump($ps2);
