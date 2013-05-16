<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<script type="text/javascript" src="<?php echo CTX_PATH ?>static/script/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo CTX_PATH ?>static/script/knockout-2.2.1.js"></script>

<style type="text/css">
  li {list-style:none; font-size:14px;}
  ul {padding-left:25px;}
  .operaterDiv{width:100px; margin-left:100px;; z-index:100px;position:absolute;margin-top:-5px; border:1px solid #000;background-color:#FFF}
  .operaterDiv li{list-style-type:none; padding:1px; margin-left:20px;}
  .operaterDiv a:link {text-decoration: underline; color:blue;}
  .operaterDiv a:visited{text-decoration: underline;; color:blue;}
  .operaterDiv a:hover {text-decoration: none; color:blue;}
  .close{float:right; font-size:5px; color:red;}
  .highLight{background-color:#009; color:#FFF;}
</style>
</head>
<body>


<p> First name: <span data-bind="text:firstName"></span> </p>
<p> Last name: <span data-bind="text:lastName"></span> </p>

<p> First name: <input data-bind="value:firstName" />  </p>
<p> Last name: <input data-bind="value:lastName" />  </p>

<script type="text/javascript">
	var viewModel = {
		firstName: "tim",
		lastName: ko.observable("Luo")
	};

	//ko.applyBindings(viewModel);
</script>

<div id="taskMgr">
<h3>Tasks</h3>

<form data-bind="submit: addTask">
    Add task: <input data-bind="value: newTaskText" placeholder="What needs to be done?" />
    <button type="submit">Add</button>
</form>

<ul data-bind="foreach: tasks, visible: tasks().length > 0">
    <li>
        <input type="checkbox" data-bind="checked: isDone" />
        <input data-bind="value: title, disable: isDone" />
        <a href="#" data-bind="click: $parent.removeTask">Delete</a>
    </li> 
</ul>

You have <b data-bind="text: incompleteTasks().length">&nbsp;</b> incomplete task(s)
<span data-bind="visible: incompleteTasks().length == 0"> - it's beer time!</span>
</div>
<script type="text/javascript">
function Task(data) {
    this.title = ko.observable(data.title);
    this.isDone = ko.observable(data.isDone);
}

function TaskListViewModel() {
    // Data
    var self = this;
    self.tasks = ko.observableArray([]);
    self.newTaskText = ko.observable();
    self.incompleteTasks = ko.computed(function() {
        return ko.utils.arrayFilter(self.tasks(), function(task) { return !task.isDone() });
    });

    // Operations
    self.addTask = function() {
        self.tasks.push(new Task({ title: this.newTaskText() }));
        self.newTaskText("");
    };
    self.removeTask = function(task) { self.tasks.remove(task) };
}

ko.applyBindings(new TaskListViewModel(), document.getElementById("taskMgr"));
</script>

<script type="text/javascript" src="<?php echo CTX_PATH ?>static/script/sampleProductCategories.js"></script>
<div id="cart">
<table width='100%'>
    <thead>
        <tr>
            <th width='25%'>Category</th>
            <th width='25%'>Product</th>
            <th class='price' width='15%'>Price</th>
            <th class='quantity' width='10%'>Quantity</th>
            <th class='price' width='15%'>Subtotal</th>
            <th width='10%'> </th>
        </tr>
    </thead>
    <tbody data-bind='foreach: lines'>
        <tr>
            <td>
                <select data-bind='options: sampleProductCategories, optionsText: "name", optionsCaption: "Select...", value: category'> </select>
            </td>
            <td data-bind="with: category">
                <select data-bind='options: products, optionsText: "name", optionsCaption: "Select...", value: $parent.product'> </select>
            </td>
            <td class='price' data-bind='with: product'>
                <span data-bind='text: formatCurrency(price)'> </span>
            </td>
            <td class='quantity'>
                <input data-bind='visible: product, value: quantity, valueUpdate: "afterkeydown"' />
            </td>
            <td class='price'>
                <span data-bind='visible: product, text: formatCurrency(subtotal())' > </span>
            </td>
            <td>
                <a href='#' data-bind='click: $parent.removeLine'>Remove</a>
            </td>
        </tr>
    </tbody>
</table>
<p class='grandTotal'>
    Total value: <span data-bind='text: formatCurrency(grandTotal())'> </span>
</p>
<button data-bind='click: addLine'>Add product</button>
<button data-bind='click: save'>Submit order</button>
</div>
<script type="text/javascript">
function formatCurrency(value) {
    return "$" + value.toFixed(2);
}
 
var CartLine = function() {
    var self = this;
    self.category = ko.observable();
    self.product = ko.observable();
    self.quantity = ko.observable(1);
    self.subtotal = ko.computed(function() {
        return self.product() ? self.product().price * parseInt("0" + self.quantity(), 10) : 0;
    });
 
    // Whenever the category changes, reset the product selection
    self.category.subscribe(function() {
        self.product(undefined);
    });
};
 
var Cart = function() {
    // Stores an array of lines, and from these, can work out the grandTotal
    var self = this;
    self.lines = ko.observableArray([new CartLine()]); // Put one line in by default
    self.grandTotal = ko.computed(function() {
        var total = 0;
        $.each(self.lines(), function() { total += this.subtotal() })
        return total;
    });
 
    // Operations
    self.addLine = function() { self.lines.push(new CartLine()) };
    self.removeLine = function(line) { self.lines.remove(line) };
    self.save = function() {
        var dataToSave = $.map(self.lines(), function(line) {
            return line.product() ? {
                productName: line.product().name,
                quantity: line.quantity()
            } : undefined
        });
        alert("Could now send this to server: " + JSON.stringify(dataToSave));
    };
};
 
ko.applyBindings(new Cart(), document.getElementById("cart"));
</script>

<div id="twitter">
<div class='configuration'>
    <div class='listChooser'>
        <button data-bind='click: deleteList, enable: editingList.name'>Delete</button>
        <button data-bind='click: saveChanges, enable: hasUnsavedChanges'>Save</button>
        <select data-bind='options: savedLists, optionsValue: "name", value: editingList.name'> </select>
    </div>
 
    <p>Currently viewing <span data-bind='text: editingList.userNames().length'> </span> user(s):</p>
    <div class='currentUsers' data-bind='with: editingList'>
        <ul data-bind='foreach: userNames'>
            <li>
                <button data-bind='click: $root.removeUser'>Remove</button>
                <div data-bind="text: $data"> </div>
            </li>
        </ul>
    </div>
 
    <form data-bind='submit: addUser'>
        <label>Add user:</label>
        <input data-bind='value: userNameToAdd, valueUpdate: "keyup", css: { invalid: !userNameToAddIsValid() }' />
        <button data-bind='enable: canAddUserName' type='submit'>Add</button>
    </form>
</div>
<div class='tweets'>
    <div class='loadingIndicator'>Loading...</div>
    <table width='100%' data-bind="foreach: currentTweets">
        <tr>
            <td><img data-bind='attr: { src: profile_image_url }' /></td>
            <td>
                <a class='twitterUser' data-bind='attr: { href: "http://twitter.com/" + from_user }, text: from_user' href='http://twitter.com/${ from_user }' > </a>
                <span data-bind="text: text"> </span>
                <div class='tweetInfo' data-bind='text: created_at'> </div>
            </td>
        </tr>
    </table>
</div>

</div>

<script type="text/javascript">
window.twitterApi = (function () {
    var throttleFunction = function (fn, throttleMilliseconds) {
        var invocationTimeout;

        return function () {
            var args = arguments;
            if (invocationTimeout)
                clearTimeout(invocationTimeout);

            invocationTimeout = setTimeout(function () {
                invocationTimeout = null;
                fn.apply(window, args);
            }, throttleMilliseconds);
        };
    };

    var getTweetsForUsersThrottled = throttleFunction(function (userNames, callback) {
        if (userNames.length == 0)
            callback([]);
        else {
            var url = "http://search.twitter.com/search.json?callback=?&rpp=100&q=";
            for (var i = 0; i < userNames.length; i++)
                url += "from:" + userNames[i] + (i < userNames.length - 1 ? " OR " : "");
            $.ajax({
                url: url,
                dataType: "jsonp",
                success: function (data) { callback($.grep(data.results || [], function (tweet) { return !tweet.to_user_id; })); }
            });
        }
    }, 50);

    return {
        getTweetsForUser: function (userName, callback) {
            return this.getTweetsForUsers([userName], callback);
        },
        getTweetsForUsers: function (userNames, callback) {
            return getTweetsForUsersThrottled(userNames, callback);
        }
    };
})();

</script>

<script type="text/javascript">
//The view model holds all the state we're working with. It also has methods that can edit it, and it uses
//computed observables to calculate more state in terms of the underlying data
//--
//The view (i.e., the HTML UI) binds to this using data-bind attributes, so it always stays up-to-date with
//the view model, even though the view model does not know or care about any view that binds to it
var savedLists = [
{ name: "Celebrities", userNames: ['JohnCleese', 'MCHammer', 'StephenFry', 'algore', 'StevenSanderson']},
{ name: "Microsoft people", userNames: ['BillGates', 'shanselman', 'ScottGu']},
{ name: "Tech pundits", userNames: ['Scobleizer', 'LeoLaporte', 'techcrunch', 'BoingBoing', 'timoreilly', 'codinghorror']}
];

var TwitterListModel = function(lists, selectedList) {
this.savedLists = ko.observableArray(lists);
this.editingList = {
   name: ko.observable(selectedList),
   userNames: ko.observableArray()
};
this.userNameToAdd = ko.observable("");
this.currentTweets = ko.observableArray([])

this.findSavedList = function(name) {
   var lists = this.savedLists();
   return ko.utils.arrayFirst(lists, function(list) {
       return list.name === name;
   });
};

this.addUser = function() {
   if (this.userNameToAdd() && this.userNameToAddIsValid()) {
       this.editingList.userNames.push(this.userNameToAdd());
       this.userNameToAdd("");
   }
};

this.removeUser = function(userName) { 
   this.editingList.userNames.remove(userName) 
}.bind(this);

this.saveChanges = function() {
   var saveAs = prompt("Save as", this.editingList.name());
   if (saveAs) {
       var dataToSave = this.editingList.userNames().slice(0);
       var existingSavedList = this.findSavedList(saveAs);
       if (existingSavedList) existingSavedList.userNames = dataToSave; // Overwrite existing list
       else this.savedLists.push({
           name: saveAs,
           userNames: dataToSave
       }); // Add new list
       this.editingList.name(saveAs);
   }
};

this.deleteList = function() {
   var nameToDelete = this.editingList.name();
   var savedListsExceptOneToDelete = $.grep(this.savedLists(), function(list) {
       return list.name != nameToDelete
   });
   this.editingList.name(savedListsExceptOneToDelete.length == 0 ? null : savedListsExceptOneToDelete[0].name);
   this.savedLists(savedListsExceptOneToDelete);
};

ko.computed(function() {
   // Observe viewModel.editingList.name(), so when it changes (i.e., user selects a different list) we know to copy the saved list into the editing list
   var savedList = this.findSavedList(this.editingList.name());
   if (savedList) {
       var userNamesCopy = savedList.userNames.slice(0);
       this.editingList.userNames(userNamesCopy);
   } else {
       this.editingList.userNames([]);
   }
}, this);

this.hasUnsavedChanges = ko.computed(function() {
   if (!this.editingList.name()) {
       return this.editingList.userNames().length > 0;
   }
   var savedData = this.findSavedList(this.editingList.name()).userNames;
   var editingData = this.editingList.userNames();
   return savedData.join("|") != editingData.join("|");
}, this);

this.userNameToAddIsValid = ko.computed(function() {
   return (this.userNameToAdd() == "") || (this.userNameToAdd().match(/^\s*[a-zA-Z0-9_]{1,15}\s*$/) != null);
}, this);

this.canAddUserName = ko.computed(function() {
   return this.userNameToAddIsValid() && this.userNameToAdd() != "";
}, this);

// The active user tweets are (asynchronously) computed from editingList.userNames
ko.computed(function() {
   twitterApi.getTweetsForUsers(this.editingList.userNames(), this.currentTweets);
}, this);
};

ko.applyBindings(new TwitterListModel(savedLists, "Tech pundits"), document.getElementById("twitter"));

//Using jQuery for Ajax loading indicator - nothing to do with Knockout
$(".loadingIndicator").ajaxStart(function() {
$(this).fadeIn();
}).ajaxComplete(function() {
$(this).fadeOut();
});

</script>


<div id="Contacts">
<h2>Contacts</h2>
<div id='contactsList'>
    <table class='contactsEditor'>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Phone numbers</th>
        </tr>
        <tbody data-bind="foreach: contacts">
            <tr>
                <td>
                    <input data-bind='value: firstName' />
                    <div><a href='#' data-bind='click: $root.removeContact'>Delete</a></div>
                </td>
                <td><input data-bind='value: lastName' /></td>
                <td>
                    <table>
                        <tbody data-bind="foreach: phones">
                            <tr>
                                <td><input data-bind='value: type' /></td>
                                <td><input data-bind='value: number' /></td>
                                <td><a href='#' data-bind='click: $root.removePhone'>Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href='#' data-bind='click: $root.addPhone'>Add number</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
 
<p>
    <button data-bind='click: addContact'>Add a contact</button>
    <button data-bind='click: save, enable: contacts().length > 0'>Save to JSON</button>
</p>
 
<textarea data-bind='value: lastSavedJson' rows='5' cols='60' disabled='disabled'> </textarea>

</div>

<script type="text/javascript">
var initialData = [
                   { firstName: "Danny", lastName: "LaRusso", phones: [
                       { type: "Mobile", number: "(555) 121-2121" },
                       { type: "Home", number: "(555) 123-4567"}]
                   },
                   { firstName: "Sensei", lastName: "Miyagi", phones: [
                       { type: "Mobile", number: "(555) 444-2222" },
                       { type: "Home", number: "(555) 999-1212"}]
                   }
               ];
                
               var ContactsModel = function(contacts) {
                   var self = this;
                   self.contacts = ko.observableArray(ko.utils.arrayMap(contacts, function(contact) {
                       return { firstName: contact.firstName, lastName: contact.lastName, phones: ko.observableArray(contact.phones) };
                   }));
                
                   self.addContact = function() {
                       self.contacts.push({
                           firstName: "",
                           lastName: "",
                           phones: ko.observableArray()
                       });
                   };
                
                   self.removeContact = function(contact) {
                       self.contacts.remove(contact);
                   };
                
                   self.addPhone = function(contact) {
                       contact.phones.push({
                           type: "",
                           number: ""
                       });
                   };
                
                   self.removePhone = function(phone) {
                       $.each(self.contacts(), function() { this.phones.remove(phone) })
                   };
                
                   self.save = function() {
                       self.lastSavedJson(JSON.stringify(ko.toJS(self.contacts), null, 2));
                   };
                
                   self.lastSavedJson = ko.observable("")
               };
                
               ko.applyBindings(new ContactsModel(initialData), document.getElementById("Contacts"));

</script>

<div id="menu">

<ul  data-bind='template: { name: "guideTmpl", foreach: menus }'></ul>
</div>
<!--菜单项模板-->
<script id="guideTmpl" type="text/html">
    <li >
		<span data-bind='text: name, click:$root.openOrClose'></span>
		<ul data-bind='template: { name: "guideTmpl", foreach: children }, visible:opened'></ul>
	</li>
</script>
<script type="text/javascript">
var Menu = function(name, children, opened) {
    this.name = ko.observable(name);
	this.children = ko.observableArray(children || []);	//下级子菜单
	this.opened = ko.observable(opened); //true:展开  false:折叠
};

var PeopleModel = function() {
    this.menus = ko.observableArray([
	    new Menu("Twitter BootStrap", [
		    new Menu("bootstrap介绍"),
			new Menu("响应式设计"),
			new Menu("JavaScript插件")
		]),
		new Menu("Knockout", [
		    new Menu("监控属性(Observables)"),
			new Menu("控制流绑定(Control flow)"),
			new Menu("表单域绑定(Form fields)"),
			new Menu("自定义绑定(Custom)")
		])
	]);
	//展开、折叠操作
	this.openOrClose = function(source){
	   var opened = source.opened();
	   if(opened)
	      source.opened(false);
	   else
	      source.opened(true);
	};
};

ko.applyBindings(new PeopleModel(), document.getElementById("menu"));
</script>




<div id="editTree">
<ul  data-bind="template: { name: 'guideTmplTree', foreach: menus}"></ul><br/>
<a href="javascript:void(0)"  onClick="getSelectedValues()">查看选中值</a><br/>
</div>

<!--节点模板模板-->
<script id="guideTmplTree" type="text/html">
    <li>	    
	    <img data-bind="attr: {src:imageUrl}, click:$root.openOrClose"/>
		<input type="checkbox" data-bind="checked:selected"/>
		<span data-bind="text: name, visible:switchS, css:{highLight:editOpened}, event:{contextmenu:$root.myContextmenu, click:$root.openOrClose}, clickBubble: false"></span>
		<span data-bind="visible:!switchS()"><input type="text" data-bind="value:name,event:{blur:$root.closeAllOpenedDiv}"/></span>
		<div  data-bind="visible: editOpened" class="operaterDiv">
		    <span class="close" data-bind="click:$root.closeOpenedDiv">关闭</span>
		    <ul style="padding:0;margin:0; margin-top:5px;">
			   <li><a href="#"  data-bind="click:function(){if(confirm('确定要删除吗?')){$parent.children.remove(this)}; this.editOpened(false);}, clickBubble: false">Delete</a></li>
			   <li><a href="#"  data-bind="click:$root.doSwitch, clickBubble: false">Rename</a></li>
			</ul>
		</div>
		<ul data-bind="template: { name: 'guideTmpl', foreach: children }, visible:opened"></ul>		
		
	</li>
</script>
<script type="text/javascript">
var index = 1;//用于模拟value值(实际中应是每个节点的唯一标识)
var Menu = function(name, children, opened, imageUrl, selected, value) {//节点对应的js对象
    this.name = ko.observable(name);
	this.children = ko.observableArray(children || []);	//下级子节点
	this.opened = ko.observable(opened); //true:展开  false:折叠
	this.imageUrl = ko.observable("http://www.dhtmlgoodies.com/scripts/drag-drop-folder-tree/images/dhtmlgoodies_plus.gif"); //true:展开  false:折叠
	this.selected = ko.observable(false);
	this.value = "000" + index++;
	this.editOpened = ko.observable(false);
	this.switchS  = ko.observable(true);
};

var MenuModel = function() {
    var self = this;
    self.menus = ko.observableArray([
	    new Menu("Twitter BootStrap", [
		    new Menu("bootstrap介绍", [new Menu("2222")]),
			new Menu("响应式设计"),
			new Menu("JavaScript插件")
		]),
		new Menu("Knockout", [
		    new Menu("监控属性(Observables)"),
			new Menu("控制流绑定(Control flow)"),
			new Menu("表单域绑定(Form fields)"),
			new Menu("自定义绑定(Custom)")
		])
	]);
	//展开、折叠操作
	self.openOrClose = function(source){
	   self.closeAllOpenedDiv();
	   var opened = source.opened();
	   if(source.children() == 0)
	      return ;
	   if(opened){
	       source.opened(false);
		   source.imageUrl("http://www.dhtmlgoodies.com/scripts/drag-drop-folder-tree/images/dhtmlgoodies_plus.gif");
	   }else{
	       source.opened(true);
		   source.imageUrl("http://www.dhtmlgoodies.com/scripts/drag-drop-folder-tree/images/dhtmlgoodies_minus.gif");
	   }
	   var children = source.children();
	   for (var i in children){
	       if(children[i].children().length == 0 ){//存在子节
		      children[i].imageUrl("http://www.see-source.com/images/dhtmlgoodies_white.gif");
		   }
	   } 	   
	};
	//获得复选框所有选中的value值
	self.selectedValues = function(){
	    var valuesStr = "";
		var menus = self.menus();
		for (var i in menus){
		    if(menus[i].selected()){
			   valuesStr += ",";
			   valuesStr += menus[i].value;			   
			}
			var qiantao = function(child){
			    for (var i in child){
				    if(child[i].selected()){
			           valuesStr += ",";
			           valuesStr += child[i].value;			   
			        } 
					qiantao(child[i].children());
				}
			}
			qiantao(menus[i].children());
		}
		return valuesStr;
	};
	//右键事件(弹出操作层)
	self.myContextmenu = function(source){
	    self.closeAllOpenedDiv();
	    source.editOpened(true);
	};
	//切换
	self.doSwitch = function(source){
	    source.switchS(false);
		source.editOpened(false);
	};
	//关闭所有弹出操作层
	self.closeAllOpenedDiv = function(){
	   var menus = self.menus();
		for (var i in menus){		    
			var qiantao = function(child){
			    for (var i in child){
				    child[i].editOpened(false);
					child[i].switchS(true);
					qiantao(child[i].children());
				}
			}
			qiantao(menus[i].children());
			menus[i].editOpened(false);
			menus[i].switchS(true);			
		}
	};
	//关闭当前弹出操作层
	this.closeOpenedDiv = function(source){
	    source.editOpened(false);
	}
};
var myMenuModel = new MenuModel();
ko.applyBindings(myMenuModel, document.getElementById("editTree"));
var children = myMenuModel.menus();
for (var i in children){
	if(children[i].children().length == 0 ){//存在子节
		 children[i].imageUrl("http://www.see-source.com/images/dhtmlgoodies_white.gif");
	}
} 

</script>

<script type="text/javascript">
function getSelectedValues(){  //查看选中的值列表  
    var values = myMenuModel.selectedValues();
	if(values.length != 0){
	    values = values.substring(1);
	}
    alert(values);
}
</script>

</body>
</html>