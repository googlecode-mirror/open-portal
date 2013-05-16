<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Knockout demo</title>
<script type="text/javascript" src="<?php echo CTX_PATH ?>static/script/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo CTX_PATH ?>static/script/knockout-2.2.1.js"></script>

</head>
<body>
<h1>This is my ko test !!!</h1>
<div id="test1">
<table>
	<thead>
		<tr>
			<th> </th>
			<th>ID </th>
			<th>name</th>
			<th>sex </th>
			<th>Emal </th>
			<th>phone </th>
			<th> </th>
		</tr>
	</thead>
	<tbody data-bind="foreach: people">
		<tr>
			<td> <input type="checkbox" data-bind="checked: isShow" /> </td>
			<td data-bind="text: id"> </td>
			<td > <input type="text" data-bind="value: name" /> </td>
			<td > <select data-bind="options: $parent.sexes, optionsText: 'name', optionsValue: 'id', value: sex "></select> </td>
			<td > <input type="text" data-bind="value: email" /> </td>
			<td > <input type="text" data-bind="value: phone" /> </td>
			<td> <a href="#" data-bind="click: $parent.removePerson">Delete</a> </td>
		</tr>
	</tbody>
</table>
<input type="checkbox" data-bind="checked: paras"  value="para1"> para1
<input type="checkbox" data-bind="checked: paras"  value="para2"> para2
<input type="checkbox" data-bind="checked: paras"  value="para3"> para3
<br>
<input type="radio" data-bind="checked: para"  name="para" value="para1"> para1
<input type="radio" data-bind="checked: para"  name="para" value="para2"> para2
<input type="radio" data-bind="checked: para"  name="para" value="para3"> para3
<br>
<input type="button" value="Add" data-bind="click: addPerson" />
<input type="button" value="Submit" data-bind="click: saveData" />
<script type="text/javascript">
	function PeopleModel() {
		var self = this;
		self.para = "para2";
		self.paras = ["para1", "para3"];
		
		self.sexes = [{id:"b", name:"boy"}, {id:"g", name:"girl"}];
		self.people = ko.observableArray([
		{isShow:true, id:1, name:"tim", sex:"b", "email": "1313@qq.om", phone:"1234131"},
		{isShow:true, id:2, name:"alice", sex:"g", "email": "1313@qq.om", phone:"1234131"},
		{isShow:false, id:3, name:"tim", sex:"b", "email": "1313@qq.om", phone:"1234131"},
		{isShow:true, id:4, name:"lucy", sex:"g", "email": "1313@qq.om", phone:"1234131"}
			                          		]);
  		self.removePerson = function() {
			self.people.remove(this);
  		};

  		self.addPerson = function() {
			self.people.push({isShow:true, id:0, name:"unknow", sex:"g", email: "", phone:""});
  		};

  		self.saveData = function() {
			var data = JSON.stringify(ko.toJS(self.people), null, 2) + JSON.stringify(self.paras) + " --" + self.para;
			alert(data);
  		};
	};

	ko.applyBindings(new PeopleModel());

</script>
</div>
</body>
</html>