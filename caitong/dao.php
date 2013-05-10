<?php

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

/// ���������ݿ��ʼ��

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