<?php
//
// class: ViewModel
//

class ViewModel extends BaseModel {
	
	public static function fromArray($array) {
		$viewModel = new ViewModel();
		foreach ($array as $key => $value) {
			$viewModel->$key = $value;
		}
		return $viewModel;
	}
	
}
