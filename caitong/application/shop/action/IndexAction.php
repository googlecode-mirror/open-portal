<?php
//
//
//

class IndexAction {
	
	public function execute() {
		echo "IndexAction execute ... <br />";
		return array(
			"view" => "index",
			"title" => "title from Index Action"
		);
	}
	
}

