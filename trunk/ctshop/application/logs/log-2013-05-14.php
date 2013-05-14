<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-05-14 03:39:07 --> Config Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 03:39:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 03:39:07 --> URI Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Router Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Output Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Security Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Input Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 03:39:07 --> Language Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Loader Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Controller Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Model Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Model Class Initialized
DEBUG - 2013-05-14 03:39:07 --> Database Driver Class Initialized
DEBUG - 2013-05-14 03:39:07 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (1,2,4)
DEBUG - 2013-05-14 03:39:07 --> Final output sent to browser
DEBUG - 2013-05-14 03:39:07 --> Total execution time: 0.2339
DEBUG - 2013-05-14 03:40:50 --> Config Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 03:40:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 03:40:50 --> URI Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Router Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Output Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Security Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Input Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 03:40:50 --> Language Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Loader Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Controller Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Model Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Model Class Initialized
DEBUG - 2013-05-14 03:40:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 03:40:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (1,2,4)
DEBUG - 2013-05-14 03:40:50 --> Final output sent to browser
DEBUG - 2013-05-14 03:40:50 --> Total execution time: 0.0451
DEBUG - 2013-05-14 06:54:02 --> Config Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Hooks Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Utf8 Class Initialized
DEBUG - 2013-05-14 06:54:02 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 06:54:02 --> URI Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Router Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Output Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Security Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Input Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 06:54:02 --> Language Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Loader Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Controller Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Model Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Model Class Initialized
DEBUG - 2013-05-14 06:54:02 --> Database Driver Class Initialized
INFO  - 2013-05-14 06:54:02 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
DEBUG - 2013-05-14 06:54:28 --> Config Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 06:54:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 06:54:28 --> URI Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Router Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Output Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Security Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Input Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 06:54:28 --> Language Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Loader Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Controller Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Model Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Model Class Initialized
DEBUG - 2013-05-14 06:54:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 06:54:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 06:54:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 06:54:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 06:54:28 --> Final output sent to browser
DEBUG - 2013-05-14 06:54:28 --> Total execution time: 0.3228
DEBUG - 2013-05-14 07:11:14 --> Config Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:11:14 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:11:14 --> URI Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Router Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Output Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Security Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Input Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:11:14 --> Language Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Loader Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Controller Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:14 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:11:14 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:11:14 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:11:14 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 11
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 12
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 13
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 14
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\typelist.php 7
ERROR - 2013-05-14 07:11:14 --> Severity: Warning  --> Invalid argument supplied for foreach() E:\wamp\www\CTShop\application\views\ec\typelist.php 7
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 66
ERROR - 2013-05-14 07:11:14 --> Severity: Warning  --> Invalid argument supplied for foreach() E:\wamp\www\CTShop\application\views\ec\itemlist.php 66
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 84
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 85
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 19
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 19
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 19
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 19
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 19
ERROR - 2013-05-14 07:11:14 --> Severity: Notice  --> Trying to get property of non-object E:\wamp\www\CTShop\application\views\ec\itemlist.php 19
DEBUG - 2013-05-14 07:11:14 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 07:11:14 --> Final output sent to browser
DEBUG - 2013-05-14 07:11:14 --> Total execution time: 0.1801
DEBUG - 2013-05-14 07:11:15 --> Config Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:11:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:11:15 --> URI Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Router Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Output Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Security Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Input Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:11:15 --> Language Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Loader Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Controller Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Database Driver Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Config Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Hooks Class Initialized
ERROR - 2013-05-14 07:11:15 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 07:11:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:11:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:11:15 --> URI Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Router Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Output Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Security Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Input Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:11:15 --> Language Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Loader Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Controller Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:15 --> Database Driver Class Initialized
ERROR - 2013-05-14 07:11:15 --> 404 Page Not Found --> item/css
DEBUG - 2013-05-14 07:11:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:11:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:11:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:11:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Database Driver Class Initialized
ERROR - 2013-05-14 07:11:16 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 07:11:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:11:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:11:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:11:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:11:16 --> Database Driver Class Initialized
ERROR - 2013-05-14 07:11:16 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 07:24:23 --> Config Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:24:23 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:24:23 --> URI Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Router Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Output Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Security Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Input Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:24:23 --> Language Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Loader Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Controller Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Model Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Model Class Initialized
DEBUG - 2013-05-14 07:24:23 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:24:23 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:24:23 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:24:23 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:24:23 --> Unable to load the requested class: ViewModel
DEBUG - 2013-05-14 07:25:01 --> Config Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:25:01 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:25:01 --> URI Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Router Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Output Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Security Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Input Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:25:01 --> Language Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Loader Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Controller Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:01 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:25:01 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:25:01 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:25:01 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:25:01 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:25:44 --> Config Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:25:44 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:25:44 --> URI Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Router Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Output Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Security Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Input Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:25:44 --> Language Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Loader Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Controller Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:44 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:25:44 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:25:44 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:25:44 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:25:44 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:25:46 --> Config Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:25:46 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:25:46 --> URI Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Router Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Output Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Security Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Input Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:25:46 --> Language Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Loader Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Controller Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:46 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:25:46 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:25:46 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:25:46 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:25:46 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:25:47 --> Config Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:25:47 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:25:47 --> URI Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Router Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Output Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Security Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Input Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:25:47 --> Language Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Loader Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Controller Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:25:47 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:25:47 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:25:47 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:25:47 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:25:47 --> Config Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:25:47 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:25:47 --> URI Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Router Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Output Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Security Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Input Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:25:47 --> Language Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Loader Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Controller Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:47 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:25:47 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:25:47 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:25:47 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:25:47 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:25:48 --> Config Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:25:48 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:25:48 --> URI Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Router Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Output Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Security Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Input Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:25:48 --> Language Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Loader Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Controller Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:25:48 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:25:48 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:25:48 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:25:48 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:25:48 --> Config Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:25:48 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:25:48 --> URI Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Router Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Output Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Security Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Input Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:25:48 --> Language Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Loader Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Controller Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:25:48 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:25:48 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:25:48 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:25:48 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:25:48 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:02 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:02 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:02 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:02 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:02 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:02 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:02 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:02 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:02 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:03 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:03 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:03 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:03 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:03 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:03 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:03 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:03 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:04 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:04 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:04 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:04 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:05 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:05 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:05 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:05 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:05 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:06 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:06 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:06 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:06 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:06 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:06 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:06 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:06 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:06 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:06 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:06 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:06 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:06 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:06 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:06 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:06 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:06 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:06 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:06 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:06 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:07 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:07 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:07 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:07 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:07 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:07 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:07 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:07 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:07 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:07 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:07 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:07 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:07 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:07 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:07 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:07 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:07 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:07 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:07 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:07 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:07 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:07 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:07 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:07 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:07 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:07 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:07 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:07 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:07 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:07 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:07 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:07 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:07 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:07 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:07 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:07 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:08 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:08 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:08 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:08 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:08 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:08 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:08 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:08 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:08 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:08 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:08 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:08 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:08 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:08 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:08 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:46 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:46 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:46 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:46 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:46 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:46 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:46 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:46 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:46 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:27:47 --> Config Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:27:47 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:27:47 --> URI Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Router Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Output Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Security Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Input Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:27:47 --> Language Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Loader Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Controller Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:27:47 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:27:47 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:27:47 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:27:47 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:27:47 --> Severity: Notice  --> Undefined variable: viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:28:06 --> Config Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:28:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:28:06 --> URI Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Router Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Output Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Security Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Input Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:28:06 --> Language Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Loader Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Controller Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Model Class Initialized
DEBUG - 2013-05-14 07:28:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:28:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:28:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:28:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:28:06 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:29:19 --> Config Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:29:19 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:29:19 --> URI Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Router Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Output Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Security Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Input Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:29:19 --> Language Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Loader Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Controller Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:29:19 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:29:19 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:29:19 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:29:19 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:29:19 --> Config Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:29:19 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:29:19 --> URI Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Router Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Output Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Security Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Input Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:29:19 --> Language Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Loader Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Controller Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:19 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:29:19 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:29:19 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:29:19 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:29:19 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:29:20 --> Config Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:29:20 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:29:20 --> URI Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Router Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Output Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Security Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Input Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:29:20 --> Language Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Loader Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Controller Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:29:20 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:29:20 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:29:20 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:29:20 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:29:20 --> Config Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:29:20 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:29:20 --> URI Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Router Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Output Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Security Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Input Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:29:20 --> Language Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Loader Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Controller Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:29:20 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:29:20 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:29:20 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:29:20 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:29:20 --> Config Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:29:20 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:29:20 --> URI Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Router Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Output Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Security Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Input Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:29:20 --> Language Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Loader Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Controller Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:29:20 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:29:20 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:29:20 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:29:20 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:29:20 --> Config Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:29:20 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:29:20 --> URI Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Router Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Output Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Security Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Input Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:29:20 --> Language Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Loader Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Controller Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Model Class Initialized
DEBUG - 2013-05-14 07:29:20 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:29:20 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:29:20 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:29:20 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:29:20 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:30:01 --> Config Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:30:01 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:30:01 --> URI Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Router Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Output Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Security Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Input Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:30:01 --> Language Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Loader Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Controller Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:01 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:30:01 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:30:01 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:30:01 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:30:01 --> Unable to load the requested class: viewmodel2
DEBUG - 2013-05-14 07:30:02 --> Config Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:30:02 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:30:02 --> URI Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Router Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Output Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Security Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Input Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:30:02 --> Language Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Loader Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Controller Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:30:02 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:30:02 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:30:02 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:30:02 --> Unable to load the requested class: viewmodel2
DEBUG - 2013-05-14 07:30:02 --> Config Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:30:02 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:30:02 --> URI Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Router Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Output Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Security Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Input Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:30:02 --> Language Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Loader Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Controller Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:02 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:30:02 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:30:02 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:30:02 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:30:02 --> Unable to load the requested class: viewmodel2
DEBUG - 2013-05-14 07:30:12 --> Config Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:30:12 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:30:12 --> URI Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Router Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Output Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Security Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Input Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:30:12 --> Language Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Loader Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Controller Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:12 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:30:12 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:30:12 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:30:12 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:30:12 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:30:13 --> Config Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:30:13 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:30:13 --> URI Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Router Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Output Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Security Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Input Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:30:13 --> Language Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Loader Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Controller Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:30:13 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:30:13 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:30:13 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:30:13 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:30:13 --> Config Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:30:13 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:30:13 --> URI Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Router Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Output Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Security Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Input Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:30:13 --> Language Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Loader Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Controller Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:30:13 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:30:13 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:30:13 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:30:13 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:30:13 --> Config Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:30:13 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:30:13 --> URI Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Router Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Output Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Security Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Input Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:30:13 --> Language Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Loader Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Controller Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Model Class Initialized
DEBUG - 2013-05-14 07:30:13 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:30:13 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:30:13 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:30:13 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:30:13 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 43
DEBUG - 2013-05-14 07:52:03 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:03 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:03 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:03 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:03 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:03 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:03 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:03 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:03 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:03 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:03 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:03 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:03 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:03 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:03 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:04 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:04 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:04 --> Severity: Notice  --> Undefined property: Item::$ViewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:15 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:15 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:15 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:15 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:15 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:15 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:15 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:15 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:15 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:15 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:15 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:15 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:15 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:15 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:15 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:16 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:16 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:16 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:16 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:16 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:16 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:16 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:16 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:16 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:16 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:16 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:16 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:16 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:16 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:16 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:16 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:16 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:16 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:16 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:16 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:16 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:16 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:16 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:16 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:16 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:16 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:16 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:16 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:17 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:17 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:17 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:17 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:17 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:17 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:17 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:17 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:52:17 --> Config Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:52:17 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:52:17 --> URI Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Router Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Output Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Security Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Input Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:52:17 --> Language Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Loader Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Controller Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Model Class Initialized
DEBUG - 2013-05-14 07:52:17 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:52:17 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:52:17 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:52:17 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:52:17 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 44
DEBUG - 2013-05-14 07:53:47 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:47 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:47 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:47 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:47 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:47 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:47 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:47 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:47 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:48 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:48 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:48 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:48 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:48 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:48 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:48 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:48 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:48 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:48 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:48 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:48 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:48 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:48 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:48 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:48 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:48 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:48 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:48 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:48 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:48 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:48 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:48 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:48 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:48 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:49 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:49 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:49 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:49 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:49 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:49 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:49 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:49 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:49 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:49 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:49 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:49 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:49 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:49 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:49 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:49 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:49 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:49 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:49 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:49 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:49 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:49 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:49 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:49 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:49 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:49 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:49 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:49 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:49 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:49 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:49 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:49 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:49 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:49 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:49 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:49 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:49 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:49 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:49 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:49 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:49 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:50 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:50 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:50 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:50 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:50 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:50 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:50 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:50 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:50 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:50 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:50 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:50 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:50 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:50 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:50 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:50 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:50 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:50 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:50 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:50 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:51 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:51 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:51 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:51 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:51 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:51 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:51 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:51 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:51 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:51 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:51 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:51 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:51 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:51 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:51 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:51 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:51 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:51 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:51 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:51 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:51 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:51 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:51 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:51 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:51 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:51 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:51 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:51 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:51 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:51 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:51 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:51 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:51 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:51 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:51 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:51 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:52 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:52 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:52 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:52 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:52 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:52 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:52 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:53:52 --> Config Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:53:52 --> URI Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Router Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Output Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Security Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Input Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:53:52 --> Language Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Loader Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Controller Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Model Class Initialized
DEBUG - 2013-05-14 07:53:52 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:53:52 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:53:52 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:53:52 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:53:52 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:54:04 --> Config Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:54:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:54:04 --> URI Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Router Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Output Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Security Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Input Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:54:04 --> Language Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Loader Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Controller Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:54:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:54:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:54:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:54:04 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:54:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:54:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:54:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:54:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:54:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:54:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:54:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:54:05 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:54:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:54:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:54:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:54:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:54:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:54:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:54:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:54:05 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:54:05 --> Config Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:54:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:54:05 --> URI Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Router Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Output Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Security Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Input Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:54:05 --> Language Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Loader Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Controller Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 07:54:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:54:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:54:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:54:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:54:05 --> Severity: Notice  --> Undefined property: Item::$viewModel E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:56:53 --> Config Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:56:53 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:56:53 --> URI Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Router Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Output Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Security Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Input Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:56:53 --> Language Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Loader Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Controller Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:56:53 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:56:53 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:56:53 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:56:53 --> Severity: Notice  --> Undefined property: Item::$PropertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:56:53 --> Config Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:56:53 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:56:53 --> URI Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Router Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Output Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Security Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Input Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:56:53 --> Language Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Loader Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Controller Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:53 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:56:53 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:56:53 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:56:53 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:56:53 --> Severity: Notice  --> Undefined property: Item::$PropertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:56:54 --> Config Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:56:54 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:56:54 --> URI Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Router Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Output Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Security Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Input Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:56:54 --> Language Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Loader Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Controller Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:56:54 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:56:54 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:56:54 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:56:54 --> Severity: Notice  --> Undefined property: Item::$PropertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:56:54 --> Config Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:56:54 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:56:54 --> URI Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Router Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Output Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Security Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Input Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:56:54 --> Language Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Loader Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Controller Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:56:54 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:56:54 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:56:54 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:56:54 --> Severity: Notice  --> Undefined property: Item::$PropertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:56:54 --> Config Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:56:54 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:56:54 --> URI Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Router Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Output Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Security Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Input Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:56:54 --> Language Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Loader Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Controller Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:56:54 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:56:54 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:56:54 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:56:54 --> Severity: Notice  --> Undefined property: Item::$PropertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:56:54 --> Config Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:56:54 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:56:54 --> URI Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Router Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Output Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Security Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Input Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:56:54 --> Language Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Loader Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Controller Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:56:54 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:56:54 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:56:54 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:56:54 --> Severity: Notice  --> Undefined property: Item::$PropertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:56:54 --> Config Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:56:54 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:56:54 --> URI Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Router Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Output Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Security Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Input Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:56:54 --> Language Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Loader Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Controller Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Model Class Initialized
DEBUG - 2013-05-14 07:56:54 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:56:54 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:56:54 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:56:54 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:56:54 --> Severity: Notice  --> Undefined property: Item::$PropertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:08 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:08 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:08 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:08 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:08 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:08 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:08 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:08 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:08 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:08 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:08 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:08 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:08 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:08 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:08 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:09 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:09 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:09 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:09 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:09 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:09 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:09 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:09 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:09 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:09 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:09 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:09 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:09 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:09 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:09 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:09 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:09 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:09 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:09 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:09 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:09 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:09 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:09 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:09 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:09 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:09 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:09 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:09 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:09 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:09 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:09 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:09 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:09 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:26 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:26 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:26 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:26 --> Database Driver Class Initialized
ERROR - 2013-05-14 07:57:26 --> Unable to load the requested class: propertyobjec
DEBUG - 2013-05-14 07:57:34 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:34 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:34 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:34 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:34 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:34 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:34 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:34 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:35 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:35 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:35 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:35 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:35 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:35 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:35 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:35 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:35 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:35 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:35 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:35 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:35 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:35 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:35 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:35 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 07:57:35 --> Config Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Hooks Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Utf8 Class Initialized
DEBUG - 2013-05-14 07:57:35 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 07:57:35 --> URI Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Router Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Output Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Security Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Input Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 07:57:35 --> Language Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Loader Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Controller Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Model Class Initialized
DEBUG - 2013-05-14 07:57:35 --> Database Driver Class Initialized
INFO  - 2013-05-14 07:57:35 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 07:57:35 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 07:57:35 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 07:57:35 --> Severity: Notice  --> Undefined property: Item::$propertyObject E:\wamp\www\CTShop\application\controllers\ec\Item.php 46
DEBUG - 2013-05-14 08:02:39 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:39 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:39 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Security Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Input Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:39 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:02:39 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:02:39 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:02:39 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:02:39 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:02:39 --> Final output sent to browser
DEBUG - 2013-05-14 08:02:39 --> Total execution time: 0.0573
DEBUG - 2013-05-14 08:02:39 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:39 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:39 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Security Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Input Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:39 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:39 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:39 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Security Class Initialized
ERROR - 2013-05-14 08:02:39 --> 404 Page Not Found --> item/css
DEBUG - 2013-05-14 08:02:39 --> Input Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:39 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:39 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:39 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Security Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Input Class Initialized
ERROR - 2013-05-14 08:02:39 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:02:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:39 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:39 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:02:39 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:02:40 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:40 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:40 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Security Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Security Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Input Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Input Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:40 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:02:40 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:02:40 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:02:40 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:02:41 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Config Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:02:41 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:41 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:02:41 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:02:41 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:41 --> URI Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Router Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Output Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Security Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Security Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Input Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Input Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:41 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:02:41 --> Language Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Loader Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Controller Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Model Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:02:41 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:02:41 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:02:41 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:11 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:11 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:11 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:03:11 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:03:11 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:03:11 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:03:11 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:03:11 --> Final output sent to browser
DEBUG - 2013-05-14 08:03:11 --> Total execution time: 0.0729
DEBUG - 2013-05-14 08:03:11 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:11 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:11 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:11 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:11 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:11 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:11 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:11 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:11 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:11 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:11 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:11 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:11 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:11 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:03:11 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:03:11 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:03:11 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:12 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:12 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:12 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:12 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:12 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:12 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:12 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:12 --> Model Class Initialized
ERROR - 2013-05-14 08:03:12 --> 404 Page Not Found --> item/css
DEBUG - 2013-05-14 08:03:12 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:12 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:03:15 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:03:15 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:03:15 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:03:15 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:03:15 --> Final output sent to browser
DEBUG - 2013-05-14 08:03:15 --> Total execution time: 0.0432
DEBUG - 2013-05-14 08:03:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:15 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:03:15 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:03:15 --> 404 Page Not Found --> item/css
ERROR - 2013-05-14 08:03:15 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:15 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:15 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:16 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:16 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:16 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:16 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:16 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:16 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:16 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:03:16 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:30 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:30 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:30 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:03:30 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:03:30 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:03:30 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:03:30 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:03:30 --> Final output sent to browser
DEBUG - 2013-05-14 08:03:30 --> Total execution time: 0.0426
DEBUG - 2013-05-14 08:03:30 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:30 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:30 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:30 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:30 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:30 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:30 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:30 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Security Class Initialized
ERROR - 2013-05-14 08:03:30 --> 404 Page Not Found --> item/css
DEBUG - 2013-05-14 08:03:30 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:30 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:30 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Global POST and COOKIE data sanitized
ERROR - 2013-05-14 08:03:31 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:31 --> Language Class Initialized
ERROR - 2013-05-14 08:03:31 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:31 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Model Class Initialized
ERROR - 2013-05-14 08:03:31 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:31 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:31 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:31 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:31 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:31 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:31 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:31 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:31 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:31 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:31 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:31 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:32 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:32 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:32 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:32 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:32 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:32 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:32 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:32 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:03:32 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:34 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:34 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:34 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:03:34 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:03:34 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:03:34 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:03:34 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:03:34 --> Final output sent to browser
DEBUG - 2013-05-14 08:03:34 --> Total execution time: 0.0424
DEBUG - 2013-05-14 08:03:34 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:34 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:34 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:34 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:34 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:34 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:34 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:34 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:34 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Controller Class Initialized
ERROR - 2013-05-14 08:03:34 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:34 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:03:34 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Router Class Initialized
ERROR - 2013-05-14 08:03:34 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:34 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Security Class Initialized
ERROR - 2013-05-14 08:03:34 --> 404 Page Not Found --> item/css
DEBUG - 2013-05-14 08:03:34 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:34 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:34 --> Model Class Initialized
ERROR - 2013-05-14 08:03:34 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:34 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:34 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:35 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:35 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:35 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Config Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:03:35 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:03:35 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:35 --> URI Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Router Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:35 --> Output Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Security Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Input Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:03:35 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Language Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Loader Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Controller Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Model Class Initialized
DEBUG - 2013-05-14 08:03:35 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:35 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:03:35 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:03:35 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:05:15 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:05:15 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:05:15 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:05:15 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:05:15 --> Final output sent to browser
DEBUG - 2013-05-14 08:05:15 --> Total execution time: 0.0427
DEBUG - 2013-05-14 08:05:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:05:15 --> 404 Page Not Found --> item/css
ERROR - 2013-05-14 08:05:15 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:15 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:15 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:15 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:15 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:05:15 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:16 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:16 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:16 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:16 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:16 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:05:16 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:05:16 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:16 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:16 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:16 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:16 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:16 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:16 --> Language Class Initialized
ERROR - 2013-05-14 08:05:16 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:16 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:16 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:05:16 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:18 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:18 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:18 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:18 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:05:18 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:05:18 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:05:18 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:05:18 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:05:18 --> Final output sent to browser
DEBUG - 2013-05-14 08:05:18 --> Total execution time: 0.0430
DEBUG - 2013-05-14 08:05:18 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:18 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:18 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:18 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:18 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:18 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:18 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:18 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:18 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:18 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:18 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:18 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:18 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:18 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:18 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:05:18 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:05:18 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:05:18 --> 404 Page Not Found --> item/css
DEBUG - 2013-05-14 08:05:18 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:18 --> UTF-8 Support Enabled
ERROR - 2013-05-14 08:05:18 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:18 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:18 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:18 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:05:18 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:05:19 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Config Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:05:19 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:19 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:05:19 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:05:19 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:19 --> URI Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Router Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Output Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Security Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:19 --> Input Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:05:19 --> Language Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Loader Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Controller Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Model Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:05:19 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:05:19 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:05:19 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:06:06 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:06 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:06 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:06:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:06:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:06:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:06:07 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:06:07 --> Final output sent to browser
DEBUG - 2013-05-14 08:06:07 --> Total execution time: 0.0437
DEBUG - 2013-05-14 08:06:07 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:07 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:07 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:07 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:07 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:07 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:07 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:07 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:07 --> URI Class Initialized
ERROR - 2013-05-14 08:06:07 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:06:07 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:06:07 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:07 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:07 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:07 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:07 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:06:07 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:06:07 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:06:07 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:06:08 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:08 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:08 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:08 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:08 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:06:08 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:06:08 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:06:08 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:06:51 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:51 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:51 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:06:51 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:06:51 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:06:51 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:06:51 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:06:51 --> Final output sent to browser
DEBUG - 2013-05-14 08:06:51 --> Total execution time: 0.0429
DEBUG - 2013-05-14 08:06:51 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:51 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:51 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:51 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:51 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:51 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Config Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:06:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:06:51 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:51 --> URI Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Router Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Output Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Security Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:51 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Input Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:51 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:06:51 --> Language Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Loader Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Controller Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Model Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:06:51 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:06:51 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:06:51 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:06:51 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:06:51 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:07:29 --> Config Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:07:29 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:07:29 --> URI Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Router Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Output Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Security Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Input Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:07:29 --> Language Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Loader Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Controller Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:07:29 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:07:29 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:07:29 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:07:29 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:07:29 --> Final output sent to browser
DEBUG - 2013-05-14 08:07:29 --> Total execution time: 0.0423
DEBUG - 2013-05-14 08:07:29 --> Config Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Config Class Initialized
DEBUG - 2013-05-14 08:07:29 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:07:29 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:07:29 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:07:29 --> URI Class Initialized
DEBUG - 2013-05-14 08:07:29 --> URI Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Router Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Router Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Output Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Output Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Security Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Config Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Input Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Security Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:07:29 --> Language Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Input Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:07:29 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:07:29 --> Loader Class Initialized
DEBUG - 2013-05-14 08:07:29 --> URI Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Controller Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Language Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Router Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Output Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Loader Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Controller Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Security Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Input Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:07:29 --> Language Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Loader Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Controller Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:07:29 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:07:29 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:07:29 --> 404 Page Not Found --> item/images
ERROR - 2013-05-14 08:07:29 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:09:01 --> Config Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:09:01 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:09:01 --> URI Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Router Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Output Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Security Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Input Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:09:01 --> Language Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Loader Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Controller Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:09:01 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:09:01 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:09:01 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:09:01 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:09:01 --> Final output sent to browser
DEBUG - 2013-05-14 08:09:01 --> Total execution time: 0.0632
DEBUG - 2013-05-14 08:09:01 --> Config Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:09:01 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:09:01 --> URI Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Router Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Output Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Security Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Input Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:09:01 --> Language Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Loader Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Controller Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:01 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:09:01 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:09:02 --> Config Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:09:02 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:09:02 --> URI Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Router Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Output Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Security Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Input Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:09:02 --> Language Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Loader Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Controller Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:09:02 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:09:02 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:09:02 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:09:02 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:09:02 --> Final output sent to browser
DEBUG - 2013-05-14 08:09:02 --> Total execution time: 0.0444
DEBUG - 2013-05-14 08:09:02 --> Config Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:09:02 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:09:02 --> URI Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Router Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Output Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Security Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Input Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:09:02 --> Language Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Loader Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Controller Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:02 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:09:02 --> 404 Page Not Found --> item/images
DEBUG - 2013-05-14 08:09:26 --> Config Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:09:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:09:26 --> URI Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Router Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Output Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Security Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Input Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:09:26 --> Language Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Loader Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Controller Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:09:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:09:26 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:09:26 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:09:26 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:09:26 --> Final output sent to browser
DEBUG - 2013-05-14 08:09:26 --> Total execution time: 0.0452
DEBUG - 2013-05-14 08:09:27 --> Config Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:09:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:09:27 --> URI Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Router Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Output Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Security Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Input Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:09:27 --> Language Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Loader Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Controller Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:09:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:09:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:09:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:09:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:09:27 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:09:27 --> Final output sent to browser
DEBUG - 2013-05-14 08:09:27 --> Total execution time: 0.0360
DEBUG - 2013-05-14 08:25:01 --> Config Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:25:01 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:25:01 --> URI Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Router Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Output Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Security Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Input Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:25:01 --> Language Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Loader Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Controller Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:01 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:25:01 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:25:01 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:25:01 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:25:13 --> Config Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:25:13 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:25:13 --> URI Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Router Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Output Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Security Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Input Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:25:13 --> Language Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Loader Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Controller Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:13 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:25:13 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:25:13 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:25:13 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:25:13 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:25:13 --> Final output sent to browser
DEBUG - 2013-05-14 08:25:13 --> Total execution time: 0.0331
DEBUG - 2013-05-14 08:25:14 --> Config Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:25:14 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:25:14 --> URI Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Router Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Output Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Security Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Input Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:25:14 --> Language Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Loader Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Controller Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:14 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:25:14 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:25:14 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:25:14 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:25:14 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:25:14 --> Final output sent to browser
DEBUG - 2013-05-14 08:25:14 --> Total execution time: 0.0438
DEBUG - 2013-05-14 08:25:29 --> Config Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:25:29 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:25:29 --> URI Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Router Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Output Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Security Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Input Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:25:29 --> Language Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Loader Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Controller Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:25:29 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:25:29 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:25:29 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 08:25:29 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:25:29 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:25:29 --> Final output sent to browser
DEBUG - 2013-05-14 08:25:29 --> Total execution time: 0.0431
DEBUG - 2013-05-14 08:28:53 --> Config Class Initialized
DEBUG - 2013-05-14 08:28:53 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:28:53 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:28:53 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:28:54 --> URI Class Initialized
DEBUG - 2013-05-14 08:28:54 --> Router Class Initialized
DEBUG - 2013-05-14 08:28:54 --> Output Class Initialized
DEBUG - 2013-05-14 08:28:54 --> Security Class Initialized
DEBUG - 2013-05-14 08:28:54 --> Input Class Initialized
DEBUG - 2013-05-14 08:28:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:28:54 --> Language Class Initialized
DEBUG - 2013-05-14 08:28:54 --> Loader Class Initialized
DEBUG - 2013-05-14 08:28:54 --> Controller Class Initialized
DEBUG - 2013-05-14 08:28:54 --> File loaded: application/views/uc/main/index.php
DEBUG - 2013-05-14 08:28:54 --> Final output sent to browser
DEBUG - 2013-05-14 08:28:54 --> Total execution time: 0.0158
DEBUG - 2013-05-14 08:32:22 --> Config Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:32:22 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:32:22 --> URI Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Router Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Output Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Security Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Input Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:32:22 --> Language Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Loader Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Controller Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Model Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Model Class Initialized
DEBUG - 2013-05-14 08:32:22 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:32:22 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:32:22 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:32:22 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:32:22 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:32:22 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:32:22 --> Final output sent to browser
DEBUG - 2013-05-14 08:32:22 --> Total execution time: 0.1510
DEBUG - 2013-05-14 08:40:18 --> Config Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:40:18 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:40:18 --> URI Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Router Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Output Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Security Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Input Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:40:18 --> Language Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Loader Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Controller Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Model Class Initialized
DEBUG - 2013-05-14 08:40:18 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Config Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:41:19 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:41:19 --> URI Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Router Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Output Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Security Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Input Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:41:19 --> Language Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Loader Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Controller Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:19 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Config Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:41:20 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:41:20 --> URI Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Router Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Output Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Security Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Input Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:41:20 --> Language Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Loader Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Controller Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Config Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:41:20 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:41:20 --> URI Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Router Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Output Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Security Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Input Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:41:20 --> Language Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Loader Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Controller Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:20 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Config Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:41:55 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:41:55 --> URI Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Router Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Output Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Security Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Input Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:41:55 --> Language Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Loader Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Controller Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:55 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Config Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:41:56 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:41:56 --> URI Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Router Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Output Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Security Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Input Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:41:56 --> Language Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Loader Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Controller Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Model Class Initialized
DEBUG - 2013-05-14 08:41:56 --> Database Driver Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Config Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:43:01 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:43:01 --> URI Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Router Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Output Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Security Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Input Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:43:01 --> Language Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Loader Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Controller Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Model Class Initialized
DEBUG - 2013-05-14 08:43:01 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:43:01 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:43:01 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:43:01 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:43:01 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:43:01 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:43:01 --> Final output sent to browser
DEBUG - 2013-05-14 08:43:01 --> Total execution time: 0.0437
DEBUG - 2013-05-14 08:43:30 --> Config Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:43:30 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:43:30 --> URI Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Router Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Output Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Security Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Input Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:43:30 --> Language Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Loader Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Controller Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Model Class Initialized
DEBUG - 2013-05-14 08:43:30 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:43:30 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:43:30 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:43:30 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:43:30 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:43:30 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:43:30 --> Final output sent to browser
DEBUG - 2013-05-14 08:43:30 --> Total execution time: 0.0692
DEBUG - 2013-05-14 08:44:12 --> Config Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:44:12 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:44:12 --> URI Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Router Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Output Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Security Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Input Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:44:12 --> Language Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Loader Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Controller Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:12 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:44:12 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:44:12 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:44:12 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:44:12 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:44:12 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:44:12 --> Final output sent to browser
DEBUG - 2013-05-14 08:44:12 --> Total execution time: 0.0746
DEBUG - 2013-05-14 08:44:13 --> Config Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:44:13 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:44:13 --> URI Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Router Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Output Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Security Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Input Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:44:13 --> Language Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Loader Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Controller Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:13 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:44:13 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:44:13 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:44:13 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:44:13 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:44:13 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:44:13 --> Final output sent to browser
DEBUG - 2013-05-14 08:44:13 --> Total execution time: 0.0461
DEBUG - 2013-05-14 08:44:14 --> Config Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:44:14 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:44:14 --> URI Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Router Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Output Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Security Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Input Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:44:14 --> Language Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Loader Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Controller Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:14 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:44:14 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:44:14 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:44:14 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:44:14 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:44:14 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:44:14 --> Final output sent to browser
DEBUG - 2013-05-14 08:44:14 --> Total execution time: 0.0335
DEBUG - 2013-05-14 08:44:59 --> Config Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:44:59 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:44:59 --> URI Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Router Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Output Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Security Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Input Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:44:59 --> Language Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Loader Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Controller Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Model Class Initialized
DEBUG - 2013-05-14 08:44:59 --> Database Driver Class Initialized
ERROR - 2013-05-14 08:44:59 --> Severity: Notice  --> Undefined variable: method E:\wamp\www\CTShop\application\controllers\ec\Item.php 27
INFO  - 2013-05-14 08:44:59 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:44:59 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:44:59 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:44:59 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:44:59 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:44:59 --> Final output sent to browser
DEBUG - 2013-05-14 08:44:59 --> Total execution time: 0.0459
DEBUG - 2013-05-14 08:45:08 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:08 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:08 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:08 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:08 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:08 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:08 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:08 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:08 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:08 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:08 --> Total execution time: 0.0453
DEBUG - 2013-05-14 08:45:09 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:09 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:09 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:09 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:09 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:09 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:09 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:09 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:09 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:09 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:09 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:09 --> Total execution time: 0.0443
DEBUG - 2013-05-14 08:45:25 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:25 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:25 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:25 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:25 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:25 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:25 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:25 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:25 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:25 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:25 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:25 --> Total execution time: 0.0449
DEBUG - 2013-05-14 08:45:26 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:26 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:26 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:26 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:26 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:26 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:26 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:26 --> Total execution time: 0.0458
DEBUG - 2013-05-14 08:45:26 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:26 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:26 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:26 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:26 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:26 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:26 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:26 --> Total execution time: 0.0431
DEBUG - 2013-05-14 08:45:26 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:26 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:26 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:26 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:26 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:26 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:26 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:26 --> Total execution time: 0.0448
DEBUG - 2013-05-14 08:45:26 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:26 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:26 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:27 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:27 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:27 --> Total execution time: 0.0454
DEBUG - 2013-05-14 08:45:27 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:27 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:27 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:27 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:27 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:27 --> Total execution time: 0.0436
DEBUG - 2013-05-14 08:45:27 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:27 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:27 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:27 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:27 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:27 --> Total execution time: 0.0351
DEBUG - 2013-05-14 08:45:27 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:27 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:27 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:27 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:27 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:27 --> Total execution time: 0.0358
DEBUG - 2013-05-14 08:45:27 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:27 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:27 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:27 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:27 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:27 --> Total execution time: 0.0440
DEBUG - 2013-05-14 08:45:27 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:27 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:27 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:27 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:27 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:27 --> Total execution time: 0.0450
DEBUG - 2013-05-14 08:45:28 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:28 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:28 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:28 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:28 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:28 --> Total execution time: 0.0437
DEBUG - 2013-05-14 08:45:28 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:28 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:28 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:28 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:28 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:28 --> Total execution time: 0.0338
DEBUG - 2013-05-14 08:45:28 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:28 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:28 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:28 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:28 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:28 --> Total execution time: 0.0339
DEBUG - 2013-05-14 08:45:28 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:28 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:28 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:28 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:28 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:28 --> Total execution time: 0.0441
DEBUG - 2013-05-14 08:45:28 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:28 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:28 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:28 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:28 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:28 --> Total execution time: 0.0437
DEBUG - 2013-05-14 08:45:29 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:29 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:29 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:29 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:29 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:29 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:29 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:29 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:29 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:29 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:29 --> Total execution time: 0.0434
DEBUG - 2013-05-14 08:45:29 --> Config Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:45:29 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:45:29 --> URI Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Router Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Output Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Security Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Input Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:45:29 --> Language Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Loader Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Controller Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Model Class Initialized
DEBUG - 2013-05-14 08:45:29 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:45:29 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:45:29 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:45:29 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:45:29 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:45:29 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:45:29 --> Final output sent to browser
DEBUG - 2013-05-14 08:45:29 --> Total execution time: 0.0445
DEBUG - 2013-05-14 08:46:02 --> Config Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:46:02 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:46:02 --> URI Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Router Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Output Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Security Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Input Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:46:02 --> Language Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Loader Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Controller Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:02 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:46:02 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:46:02 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:46:02 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:46:02 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:46:02 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:46:02 --> Final output sent to browser
DEBUG - 2013-05-14 08:46:02 --> Total execution time: 0.0446
DEBUG - 2013-05-14 08:46:03 --> Config Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:46:03 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:46:03 --> URI Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Router Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Output Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Security Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Input Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:46:03 --> Language Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Loader Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Controller Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:46:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:46:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:46:03 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:46:03 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:46:03 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:46:03 --> Final output sent to browser
DEBUG - 2013-05-14 08:46:03 --> Total execution time: 0.0458
DEBUG - 2013-05-14 08:46:03 --> Config Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:46:03 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:46:03 --> URI Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Router Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Output Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Security Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Input Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:46:03 --> Language Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Loader Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Controller Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:03 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:46:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:46:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:46:03 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:46:03 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:46:03 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:46:03 --> Final output sent to browser
DEBUG - 2013-05-14 08:46:03 --> Total execution time: 0.0445
DEBUG - 2013-05-14 08:46:04 --> Config Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:46:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:46:04 --> URI Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Router Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Output Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Security Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Input Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:46:04 --> Language Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Loader Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Controller Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:46:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:46:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:46:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:46:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:46:04 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:46:04 --> Final output sent to browser
DEBUG - 2013-05-14 08:46:04 --> Total execution time: 0.0438
DEBUG - 2013-05-14 08:46:04 --> Config Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:46:04 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:46:04 --> URI Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Router Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Output Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Security Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Input Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:46:04 --> Language Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Loader Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Controller Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Model Class Initialized
DEBUG - 2013-05-14 08:46:04 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:46:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:46:04 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:46:04 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:46:04 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:46:04 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:46:04 --> Final output sent to browser
DEBUG - 2013-05-14 08:46:04 --> Total execution time: 0.0434
DEBUG - 2013-05-14 08:51:38 --> Config Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:51:38 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:51:38 --> URI Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Router Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Output Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Security Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Input Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:51:38 --> Language Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Loader Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Controller Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Model Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Model Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:51:38 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:51:38 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:51:38 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:51:38 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:51:38 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:51:38 --> Final output sent to browser
DEBUG - 2013-05-14 08:51:38 --> Total execution time: 0.0558
DEBUG - 2013-05-14 08:51:38 --> Config Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:51:38 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:51:38 --> URI Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Router Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Output Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Security Class Initialized
DEBUG - 2013-05-14 08:51:38 --> Input Class Initialized
DEBUG - 2013-05-14 08:51:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:51:39 --> Language Class Initialized
DEBUG - 2013-05-14 08:51:39 --> Loader Class Initialized
DEBUG - 2013-05-14 08:51:39 --> Controller Class Initialized
DEBUG - 2013-05-14 08:51:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:51:39 --> Model Class Initialized
DEBUG - 2013-05-14 08:51:39 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:51:39 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:51:39 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:51:39 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:51:39 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:51:39 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:51:39 --> Final output sent to browser
DEBUG - 2013-05-14 08:51:39 --> Total execution time: 0.0436
DEBUG - 2013-05-14 08:51:47 --> Config Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:51:47 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:51:47 --> URI Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Router Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Output Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Security Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Input Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:51:47 --> Language Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Loader Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Controller Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Model Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Model Class Initialized
DEBUG - 2013-05-14 08:51:47 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:51:47 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:51:47 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:51:47 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:51:47 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT -12 , 12 
DEBUG - 2013-05-14 08:51:47 --> DB Transaction Failure
ERROR - 2013-05-14 08:51:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-12 , 12' at line 9
DEBUG - 2013-05-14 08:51:47 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-05-14 08:52:44 --> Config Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:52:44 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:52:44 --> URI Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Router Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Output Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Security Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Input Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:52:44 --> Language Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Loader Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Controller Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:44 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:52:44 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:52:44 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:52:44 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:52:44 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT -12 , 12 
DEBUG - 2013-05-14 08:52:44 --> DB Transaction Failure
ERROR - 2013-05-14 08:52:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-12 , 12' at line 9
DEBUG - 2013-05-14 08:52:44 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-05-14 08:52:45 --> Config Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:52:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:52:45 --> URI Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Router Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Output Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Security Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Input Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:52:45 --> Language Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Loader Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Controller Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:52:45 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:52:45 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:52:45 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:52:45 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT -12 , 12 
DEBUG - 2013-05-14 08:52:45 --> DB Transaction Failure
ERROR - 2013-05-14 08:52:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-12 , 12' at line 9
DEBUG - 2013-05-14 08:52:45 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-05-14 08:52:45 --> Config Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:52:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:52:45 --> URI Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Router Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Output Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Security Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Input Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:52:45 --> Language Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Loader Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Controller Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:45 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:52:45 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:52:45 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:52:45 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:52:45 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT -12 , 12 
DEBUG - 2013-05-14 08:52:45 --> DB Transaction Failure
ERROR - 2013-05-14 08:52:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-12 , 12' at line 9
DEBUG - 2013-05-14 08:52:45 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-05-14 08:52:49 --> Config Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:52:49 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:52:49 --> URI Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Router Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Output Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Security Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Input Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:52:49 --> Language Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Loader Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Controller Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:49 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:52:49 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:52:49 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:52:49 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:52:49 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:52:49 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:52:49 --> Final output sent to browser
DEBUG - 2013-05-14 08:52:49 --> Total execution time: 0.0334
DEBUG - 2013-05-14 08:52:50 --> Config Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:52:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:52:50 --> URI Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Router Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Output Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Security Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Input Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:52:50 --> Language Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Loader Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Controller Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:52:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:52:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:52:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:52:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:52:50 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:52:50 --> Final output sent to browser
DEBUG - 2013-05-14 08:52:50 --> Total execution time: 0.0330
DEBUG - 2013-05-14 08:52:50 --> Config Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:52:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:52:50 --> URI Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Router Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Output Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Security Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Input Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:52:50 --> Language Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Loader Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Controller Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Model Class Initialized
DEBUG - 2013-05-14 08:52:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:52:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:52:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:52:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:52:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:52:50 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:52:50 --> Final output sent to browser
DEBUG - 2013-05-14 08:52:50 --> Total execution time: 0.0442
DEBUG - 2013-05-14 08:53:50 --> Config Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:53:50 --> URI Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Router Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Output Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Security Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Input Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:53:50 --> Language Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Loader Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Controller Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Model Class Initialized
DEBUG - 2013-05-14 08:53:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:53:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:53:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:53:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:53:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 08:53:50 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:53:50 --> Final output sent to browser
DEBUG - 2013-05-14 08:53:50 --> Total execution time: 0.0435
DEBUG - 2013-05-14 08:54:00 --> Config Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:54:00 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:54:00 --> URI Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Router Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Output Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Security Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Input Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:54:00 --> Language Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Loader Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Controller Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Model Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Model Class Initialized
DEBUG - 2013-05-14 08:54:00 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:54:00 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:54:00 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:54:00 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:54:00 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 08:54:00 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:54:00 --> Final output sent to browser
DEBUG - 2013-05-14 08:54:00 --> Total execution time: 0.0427
DEBUG - 2013-05-14 08:54:05 --> Config Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 08:54:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 08:54:05 --> URI Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Router Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Output Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Security Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Input Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 08:54:05 --> Language Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Loader Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Controller Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Model Class Initialized
DEBUG - 2013-05-14 08:54:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 08:54:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 08:54:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType  WHERE gt_parentId =  (11)
INFO  - 2013-05-14 08:54:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1  AND gt_id IN  (11)
INFO  - 2013-05-14 08:54:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1  AND t.gt_id IN  (11)
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 08:54:05 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 08:54:05 --> Final output sent to browser
DEBUG - 2013-05-14 08:54:05 --> Total execution time: 0.0442
DEBUG - 2013-05-14 10:35:10 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:10 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:10 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:10 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:10 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:10 --> Router Class Initialized
ERROR - 2013-05-14 10:35:10 --> 404 Page Not Found --> itemlist
DEBUG - 2013-05-14 10:35:31 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:31 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:31 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:31 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:31 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:31 --> Router Class Initialized
ERROR - 2013-05-14 10:35:31 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:39 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:39 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:39 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:39 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:39 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:39 --> Router Class Initialized
ERROR - 2013-05-14 10:35:39 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:43 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:43 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:43 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:44 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:44 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Router Class Initialized
ERROR - 2013-05-14 10:35:44 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:44 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:44 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:44 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Router Class Initialized
ERROR - 2013-05-14 10:35:44 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:44 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:44 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:44 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Router Class Initialized
ERROR - 2013-05-14 10:35:44 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:44 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:44 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:44 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:44 --> Router Class Initialized
ERROR - 2013-05-14 10:35:44 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:45 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:45 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Router Class Initialized
ERROR - 2013-05-14 10:35:45 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:45 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:45 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Router Class Initialized
ERROR - 2013-05-14 10:35:45 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:45 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:45 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Router Class Initialized
ERROR - 2013-05-14 10:35:45 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:45 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:45 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Router Class Initialized
ERROR - 2013-05-14 10:35:45 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:45 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:45 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:45 --> Router Class Initialized
ERROR - 2013-05-14 10:35:45 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:35:46 --> Config Class Initialized
DEBUG - 2013-05-14 10:35:46 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:35:46 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:35:46 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:35:46 --> URI Class Initialized
DEBUG - 2013-05-14 10:35:46 --> Router Class Initialized
ERROR - 2013-05-14 10:35:46 --> 404 Page Not Found --> item
DEBUG - 2013-05-14 10:36:12 --> Config Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:36:12 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:36:12 --> URI Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Router Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Output Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Security Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Input Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:36:12 --> Language Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Loader Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Controller Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Model Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Model Class Initialized
DEBUG - 2013-05-14 10:36:12 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:36:12 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:36:12 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:36:12 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:36:12 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:36:13 --> Final output sent to browser
DEBUG - 2013-05-14 10:36:13 --> Total execution time: 0.3486
DEBUG - 2013-05-14 10:37:06 --> Config Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:37:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:37:06 --> URI Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Router Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Output Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Security Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Input Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:37:06 --> Language Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Loader Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Controller Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:06 --> Database Driver Class Initialized
ERROR - 2013-05-14 10:37:06 --> 404 Page Not Found --> item/showlist0
DEBUG - 2013-05-14 10:37:56 --> Config Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:37:56 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:37:56 --> URI Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Router Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Output Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Security Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Input Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:37:56 --> Language Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Loader Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Controller Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:56 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:37:56 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:37:56 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:37:56 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:37:56 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:37:56 --> Final output sent to browser
DEBUG - 2013-05-14 10:37:56 --> Total execution time: 0.0479
DEBUG - 2013-05-14 10:37:57 --> Config Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:37:57 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:37:57 --> URI Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Router Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Output Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Security Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Input Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:37:57 --> Language Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Loader Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Controller Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:57 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:37:57 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:37:57 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:37:57 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:37:57 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:37:57 --> Final output sent to browser
DEBUG - 2013-05-14 10:37:57 --> Total execution time: 0.0519
DEBUG - 2013-05-14 10:37:58 --> Config Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:37:58 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:37:58 --> URI Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Router Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Output Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Security Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Input Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:37:58 --> Language Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Loader Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Controller Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Model Class Initialized
DEBUG - 2013-05-14 10:37:58 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:37:58 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:37:58 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:37:58 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:37:58 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:37:58 --> Final output sent to browser
DEBUG - 2013-05-14 10:37:58 --> Total execution time: 0.0602
DEBUG - 2013-05-14 10:38:00 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:00 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:00 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:00 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:00 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:00 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:00 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:00 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 10:38:00 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:00 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:00 --> Total execution time: 0.0662
DEBUG - 2013-05-14 10:38:03 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:03 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:03 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:03 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:03 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:03 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:03 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:03 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:38:03 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:03 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:03 --> Total execution time: 0.0683
DEBUG - 2013-05-14 10:38:06 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:06 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:06 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 10:38:06 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:06 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:06 --> Total execution time: 0.0661
DEBUG - 2013-05-14 10:38:08 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:08 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:08 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:08 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:08 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:08 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:08 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:38:08 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:08 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:08 --> Total execution time: 0.0464
DEBUG - 2013-05-14 10:38:15 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:15 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:15 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:15 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:15 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:15 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:15 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:15 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 10:38:15 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:15 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:15 --> Total execution time: 0.0678
DEBUG - 2013-05-14 10:38:34 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:34 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:34 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:34 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:34 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:34 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:34 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:34 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:38:34 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:34 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:34 --> Total execution time: 0.0439
DEBUG - 2013-05-14 10:38:36 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:36 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:36 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:36 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:36 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:36 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:36 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:36 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 10:38:36 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:36 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:36 --> Total execution time: 0.0559
DEBUG - 2013-05-14 10:38:38 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:38 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:38 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:38 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:38 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:38 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:38 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:38 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:38:38 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:38 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:38 --> Total execution time: 0.0640
DEBUG - 2013-05-14 10:38:40 --> Config Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:38:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:38:40 --> URI Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Router Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Output Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Security Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Input Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:38:40 --> Language Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Loader Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Controller Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Model Class Initialized
DEBUG - 2013-05-14 10:38:40 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:38:40 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:38:40 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:38:40 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 10:38:40 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:38:40 --> Final output sent to browser
DEBUG - 2013-05-14 10:38:40 --> Total execution time: 0.0615
DEBUG - 2013-05-14 10:39:37 --> Config Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:39:37 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:39:37 --> URI Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Router Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Output Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Security Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Input Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:39:37 --> Language Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Loader Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Controller Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:37 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:39:37 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:39:37 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:39:37 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:39:37 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:39:37 --> Final output sent to browser
DEBUG - 2013-05-14 10:39:37 --> Total execution time: 0.0572
DEBUG - 2013-05-14 10:39:41 --> Config Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:39:41 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:39:41 --> URI Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Router Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Output Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Security Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Input Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:39:41 --> Language Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Loader Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Controller Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:41 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:39:41 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:39:41 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:39:41 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 10:39:41 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:39:41 --> Final output sent to browser
DEBUG - 2013-05-14 10:39:41 --> Total execution time: 0.0604
DEBUG - 2013-05-14 10:39:43 --> Config Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:39:43 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:39:43 --> URI Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Router Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Output Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Security Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Input Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:39:43 --> Language Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Loader Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Controller Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:43 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:39:43 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:39:43 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:39:43 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:39:43 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:39:43 --> Final output sent to browser
DEBUG - 2013-05-14 10:39:43 --> Total execution time: 0.0630
DEBUG - 2013-05-14 10:39:45 --> Config Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:39:45 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:39:45 --> URI Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Router Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Output Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Security Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Input Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:39:45 --> Language Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Loader Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Controller Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:45 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:39:45 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:39:45 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:39:45 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 12 , 12 
DEBUG - 2013-05-14 10:39:45 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:39:45 --> Final output sent to browser
DEBUG - 2013-05-14 10:39:45 --> Total execution time: 0.0610
DEBUG - 2013-05-14 10:39:47 --> Config Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Hooks Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Utf8 Class Initialized
DEBUG - 2013-05-14 10:39:47 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 10:39:47 --> URI Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Router Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Output Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Security Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Input Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 10:39:47 --> Language Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Loader Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Controller Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Model Class Initialized
DEBUG - 2013-05-14 10:39:47 --> Database Driver Class Initialized
INFO  - 2013-05-14 10:39:47 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 10:39:47 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 10:39:47 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 10:39:47 --> File loaded: application/views/ec/itemlist.php
DEBUG - 2013-05-14 10:39:47 --> Final output sent to browser
DEBUG - 2013-05-14 10:39:47 --> Total execution time: 0.0581
DEBUG - 2013-05-14 12:02:40 --> Config Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:02:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:02:40 --> URI Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Router Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Output Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Security Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Input Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:02:40 --> Language Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Loader Class Initialized
DEBUG - 2013-05-14 12:02:40 --> Controller Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Config Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:03:08 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:03:08 --> URI Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Router Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Output Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Security Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Input Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:03:08 --> Language Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Loader Class Initialized
DEBUG - 2013-05-14 12:03:08 --> Controller Class Initialized
ERROR - 2013-05-14 12:03:08 --> Severity: Notice  --> Undefined variable: viewModel G:\wamp\www\ctshop\application\views\ec\typelist.php 7
ERROR - 2013-05-14 12:03:08 --> Severity: Notice  --> Trying to get property of non-object G:\wamp\www\ctshop\application\views\ec\typelist.php 7
ERROR - 2013-05-14 12:03:08 --> Severity: Warning  --> Invalid argument supplied for foreach() G:\wamp\www\ctshop\application\views\ec\typelist.php 7
DEBUG - 2013-05-14 12:03:08 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:03:08 --> Final output sent to browser
DEBUG - 2013-05-14 12:03:08 --> Total execution time: 0.0238
DEBUG - 2013-05-14 12:03:09 --> Config Class Initialized
DEBUG - 2013-05-14 12:03:09 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:03:09 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:03:09 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:03:09 --> URI Class Initialized
DEBUG - 2013-05-14 12:03:09 --> Router Class Initialized
ERROR - 2013-05-14 12:03:09 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:17:50 --> Config Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:17:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:17:50 --> URI Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Router Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Output Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Security Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Input Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:17:50 --> Language Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Loader Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Controller Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Model Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Model Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:17:50 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:17:50 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:17:50 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:17:50 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:17:50 --> Final output sent to browser
DEBUG - 2013-05-14 12:17:50 --> Total execution time: 0.0794
DEBUG - 2013-05-14 12:17:50 --> Config Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:17:50 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:17:50 --> URI Class Initialized
DEBUG - 2013-05-14 12:17:50 --> Router Class Initialized
ERROR - 2013-05-14 12:17:50 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:17:51 --> Config Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:17:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:17:51 --> URI Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Router Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Output Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Security Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Input Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:17:51 --> Language Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Loader Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Controller Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Model Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Model Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:17:51 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:17:51 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:17:51 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:17:51 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:17:51 --> Final output sent to browser
DEBUG - 2013-05-14 12:17:51 --> Total execution time: 0.0701
DEBUG - 2013-05-14 12:17:51 --> Config Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:17:51 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:17:51 --> URI Class Initialized
DEBUG - 2013-05-14 12:17:51 --> Router Class Initialized
ERROR - 2013-05-14 12:17:51 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:22:13 --> Config Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:22:13 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:22:13 --> URI Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Router Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Output Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Security Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Input Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:22:13 --> Language Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Loader Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Controller Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Model Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Model Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:22:13 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:22:13 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:22:13 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:13 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
DEBUG - 2013-05-14 12:22:13 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:22:13 --> Final output sent to browser
DEBUG - 2013-05-14 12:22:13 --> Total execution time: 0.0644
DEBUG - 2013-05-14 12:22:13 --> Config Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:22:13 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:22:13 --> URI Class Initialized
DEBUG - 2013-05-14 12:22:13 --> Router Class Initialized
ERROR - 2013-05-14 12:22:13 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:22:14 --> Config Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:22:14 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:22:14 --> URI Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Router Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Output Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Security Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Input Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:22:14 --> Language Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Loader Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Controller Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Model Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Model Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:22:14 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:22:14 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:22:14 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:22:14 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
DEBUG - 2013-05-14 12:22:14 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:22:14 --> Final output sent to browser
DEBUG - 2013-05-14 12:22:14 --> Total execution time: 0.0801
DEBUG - 2013-05-14 12:22:14 --> Config Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:22:14 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:22:14 --> URI Class Initialized
DEBUG - 2013-05-14 12:22:14 --> Router Class Initialized
ERROR - 2013-05-14 12:22:14 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:23:05 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:05 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:05 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Router Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Output Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Security Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Input Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:23:05 --> Language Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Loader Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Controller Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:05 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:23:05 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:23:05 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:23:05 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:05 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
DEBUG - 2013-05-14 12:23:06 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:23:06 --> Final output sent to browser
DEBUG - 2013-05-14 12:23:06 --> Total execution time: 0.0810
DEBUG - 2013-05-14 12:23:06 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:06 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Router Class Initialized
ERROR - 2013-05-14 12:23:06 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:23:06 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:06 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Router Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Output Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Security Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Input Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:23:06 --> Language Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Loader Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Controller Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:23:06 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:23:06 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:23:06 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined variable: currency G:\wamp\www\ctshop\application\views\ec\index.php 38
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\libraries\PropertyObject.php 17
ERROR - 2013-05-14 12:23:06 --> Severity: Notice  --> Undefined index:  G:\wamp\www\ctshop\application\views\ec\index.php 38
DEBUG - 2013-05-14 12:23:06 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:23:06 --> Final output sent to browser
DEBUG - 2013-05-14 12:23:06 --> Total execution time: 0.1084
DEBUG - 2013-05-14 12:23:06 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:06 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:06 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:06 --> Router Class Initialized
ERROR - 2013-05-14 12:23:06 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:23:40 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:40 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Router Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Output Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Security Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Input Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:23:40 --> Language Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Loader Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Controller Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:23:40 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:23:40 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:23:40 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:23:40 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:23:40 --> Final output sent to browser
DEBUG - 2013-05-14 12:23:40 --> Total execution time: 0.0375
DEBUG - 2013-05-14 12:23:40 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:40 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:40 --> Router Class Initialized
ERROR - 2013-05-14 12:23:40 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:23:41 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:41 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:41 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Router Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Output Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Security Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Input Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:23:41 --> Language Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Loader Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Controller Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:23:41 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:23:41 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:23:41 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:23:41 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:23:41 --> Final output sent to browser
DEBUG - 2013-05-14 12:23:41 --> Total execution time: 0.0686
DEBUG - 2013-05-14 12:23:41 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:41 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:41 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:41 --> Router Class Initialized
ERROR - 2013-05-14 12:23:41 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:23:58 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:58 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:58 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Router Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Output Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Security Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Input Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:23:58 --> Language Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Loader Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Controller Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:23:58 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:23:58 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:23:58 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:23:58 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:23:58 --> Final output sent to browser
DEBUG - 2013-05-14 12:23:58 --> Total execution time: 0.0367
DEBUG - 2013-05-14 12:23:58 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:58 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:58 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:58 --> Router Class Initialized
ERROR - 2013-05-14 12:23:58 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:23:59 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:59 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:59 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Router Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Output Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Security Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Input Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:23:59 --> Language Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Loader Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Controller Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:23:59 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:23:59 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:23:59 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:23:59 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:23:59 --> Final output sent to browser
DEBUG - 2013-05-14 12:23:59 --> Total execution time: 0.0601
DEBUG - 2013-05-14 12:23:59 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:59 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:59 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Router Class Initialized
ERROR - 2013-05-14 12:23:59 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:23:59 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:59 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:59 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Router Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Output Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Security Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Input Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:23:59 --> Language Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Loader Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Controller Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Model Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:23:59 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:23:59 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:23:59 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:23:59 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:23:59 --> Final output sent to browser
DEBUG - 2013-05-14 12:23:59 --> Total execution time: 0.0713
DEBUG - 2013-05-14 12:23:59 --> Config Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:23:59 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:23:59 --> URI Class Initialized
DEBUG - 2013-05-14 12:23:59 --> Router Class Initialized
ERROR - 2013-05-14 12:23:59 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:25:11 --> Config Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:25:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:25:11 --> URI Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Router Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Output Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Security Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Input Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:25:11 --> Language Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Loader Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Controller Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Model Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Model Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:25:11 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:25:11 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:25:11 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:25:11 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:25:11 --> Final output sent to browser
DEBUG - 2013-05-14 12:25:11 --> Total execution time: 0.0467
DEBUG - 2013-05-14 12:25:11 --> Config Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:25:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:25:11 --> URI Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Router Class Initialized
ERROR - 2013-05-14 12:25:11 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:25:11 --> Config Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:25:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:25:11 --> URI Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Router Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Output Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Security Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Input Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:25:11 --> Language Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Loader Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Controller Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Model Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Model Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:25:11 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:25:11 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:25:11 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:25:11 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:25:11 --> Final output sent to browser
DEBUG - 2013-05-14 12:25:11 --> Total execution time: 0.0506
DEBUG - 2013-05-14 12:25:11 --> Config Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:25:11 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:25:11 --> URI Class Initialized
DEBUG - 2013-05-14 12:25:11 --> Router Class Initialized
ERROR - 2013-05-14 12:25:11 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:26:37 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:37 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:37 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:37 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:37 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:37 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:37 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:37 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:37 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:37 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:37 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:37 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:37 --> Total execution time: 0.0485
DEBUG - 2013-05-14 12:26:39 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:39 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:39 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:39 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:39 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:39 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:39 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:39 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:39 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:39 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:39 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:39 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:39 --> Total execution time: 0.0538
DEBUG - 2013-05-14 12:26:40 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:40 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:40 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:40 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:40 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:40 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:40 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:40 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:40 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:40 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:40 --> Total execution time: 0.0545
DEBUG - 2013-05-14 12:26:40 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:40 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:40 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:40 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:40 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:40 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:40 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:40 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:40 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:40 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:40 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:40 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:40 --> Total execution time: 0.0735
DEBUG - 2013-05-14 12:26:41 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:41 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:41 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:41 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:41 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:41 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:41 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:41 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:41 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:41 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:41 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:41 --> Total execution time: 0.0554
DEBUG - 2013-05-14 12:26:41 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:41 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:41 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:41 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:41 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:41 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:41 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:41 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:41 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:41 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:41 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:41 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:41 --> Total execution time: 0.0909
DEBUG - 2013-05-14 12:26:42 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:42 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:42 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:42 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:42 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:42 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:42 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:42 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:42 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:42 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:42 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:42 --> Total execution time: 0.0768
DEBUG - 2013-05-14 12:26:42 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:42 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:42 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:42 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:42 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:42 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:42 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:42 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:42 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:42 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:42 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:42 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:42 --> Total execution time: 0.0622
DEBUG - 2013-05-14 12:26:43 --> Config Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:26:43 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:26:43 --> URI Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Router Class Initialized
DEBUG - 2013-05-14 12:26:43 --> No URI present. Default controller set.
DEBUG - 2013-05-14 12:26:43 --> Output Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Security Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Input Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:26:43 --> Language Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Loader Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Controller Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Model Class Initialized
DEBUG - 2013-05-14 12:26:43 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:26:43 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:26:43 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:26:43 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:26:43 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:26:43 --> Final output sent to browser
DEBUG - 2013-05-14 12:26:43 --> Total execution time: 0.0544
DEBUG - 2013-05-14 12:27:23 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:23 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:23 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:23 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:23 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:23 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:23 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:23 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:23 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:23 --> Total execution time: 0.0469
DEBUG - 2013-05-14 12:27:23 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:23 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:23 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:23 --> Router Class Initialized
ERROR - 2013-05-14 12:27:23 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:26 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:26 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:26 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:26 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:26 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:26 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:26 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:26 --> Total execution time: 0.0604
DEBUG - 2013-05-14 12:27:26 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:26 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Router Class Initialized
ERROR - 2013-05-14 12:27:26 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:26 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:26 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:26 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:26 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:26 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:26 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:26 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:26 --> Total execution time: 0.0657
DEBUG - 2013-05-14 12:27:26 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:26 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Router Class Initialized
ERROR - 2013-05-14 12:27:26 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:26 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:26 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:26 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:26 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:26 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:26 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:26 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:26 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:26 --> Total execution time: 0.0395
DEBUG - 2013-05-14 12:27:26 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:26 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Router Class Initialized
ERROR - 2013-05-14 12:27:26 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:26 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:26 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:26 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:26 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:27 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:27 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:27 --> Total execution time: 0.0529
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
ERROR - 2013-05-14 12:27:27 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:27 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:27 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:27 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:27 --> Total execution time: 0.0374
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
ERROR - 2013-05-14 12:27:27 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:27 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:27 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:27 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:27 --> Total execution time: 0.0768
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
ERROR - 2013-05-14 12:27:27 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:27 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:27 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:27 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:27 --> Total execution time: 0.0368
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
ERROR - 2013-05-14 12:27:27 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:27 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:27 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:27 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:27 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:27 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:27 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:27 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:27 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:27 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:27 --> Total execution time: 0.0583
DEBUG - 2013-05-14 12:27:28 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:28 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Router Class Initialized
ERROR - 2013-05-14 12:27:28 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:28 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:28 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:28 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:28 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:28 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:28 --> Total execution time: 0.0528
DEBUG - 2013-05-14 12:27:28 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:28 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Router Class Initialized
ERROR - 2013-05-14 12:27:28 --> 404 Page Not Found --> ec/flash
DEBUG - 2013-05-14 12:27:28 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:28 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Router Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Output Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Security Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Input Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-05-14 12:27:28 --> Language Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Loader Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Controller Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Model Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Database Driver Class Initialized
INFO  - 2013-05-14 12:27:28 --> SELECT gt_id id, gt_parentId parentId, gt_name name FROM tbl_goodType 
INFO  - 2013-05-14 12:27:28 --> SELECT COUNT(*) count FROM tbl_goodInfo WHERE 1 
INFO  - 2013-05-14 12:27:28 --> SELECT t.gd_id, t.gd_zhName, t.gd_enName, t.gd_model, t.gd_littleImg, t.gd_addDate
		,t2.gt_id, t2.gt_name
		,t3.gp_rmb RMB, t3.gp_euro EURO, t3.gp_dollar USD, t3.gp_pound UKP
		FROM tbl_goodInfo t
		INNER JOIN tbl_goodType t2 ON t.gt_id = t2.gt_id
		LEFT JOIN tbl_goodPrice t3 on t.gd_id = t3.gd_id
		WHERE   1 
		AND gd_del = 0
		ORDER BY gd_zhName  ASC  LIMIT 0 , 12 
DEBUG - 2013-05-14 12:27:28 --> File loaded: application/views/ec/index.php
DEBUG - 2013-05-14 12:27:28 --> Final output sent to browser
DEBUG - 2013-05-14 12:27:28 --> Total execution time: 0.0643
DEBUG - 2013-05-14 12:27:28 --> Config Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Hooks Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Utf8 Class Initialized
DEBUG - 2013-05-14 12:27:28 --> UTF-8 Support Enabled
DEBUG - 2013-05-14 12:27:28 --> URI Class Initialized
DEBUG - 2013-05-14 12:27:28 --> Router Class Initialized
ERROR - 2013-05-14 12:27:28 --> 404 Page Not Found --> ec/flash
