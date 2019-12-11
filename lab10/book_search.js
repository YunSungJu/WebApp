window.onload = function() {
    $("b_xml").onclick=function(){
    	    //construct a Prototype Ajax.request object
			var cate =  getCheckedRadio($$("input[name='category']"));
		
			new Ajax.Request("books.php", {
    	    method: "get",
    	    parameters: {category : cate},
    	    onSuccess: showBooks_XML,
    	    onFailure: ajaxFailed,
    	    onException: ajaxFailed
    	});
    }
    $("b_json").onclick=function(){
    	    //construct a Prototype Ajax.request object
			var cate =  getCheckedRadio($$("input[name='category']"));
    	
			new Ajax.Request("books_json.php", {
    	    method: "get",
    	    parameters: {category : cate},
    	    onSuccess: showBooks_JSON,
    	    onFailure: ajaxFailed,
    	    onException: ajaxFailed
    	});
    }
};

function getCheckedRadio(radio_button){
	for (var i = 0; i < radio_button.length; i++) {
		if(radio_button[i].checked){
			return radio_button[i].value;
		}
	}
	return undefined;
}

function showBooks_XML(ajax) {
	alert(ajax.responseText);
	
	$("books").innerHTML = "";
	
	var books = ajax.responseXML.getElementsByTagName("book");
	var result = "";
	
	for (var i = 0; i < books.length; i++) {
		
	    var category = books[i].getAttribute("category");
		var li = document.createElement("li");
	    
	    var title = books[i].getElementsByTagName("title")[0].firstChild.nodeValue;
	    var author = books[i].getElementsByTagName("author")[0].firstChild.nodeValue;
	    var year = books[i].getElementsByTagName("year")[0].firstChild.nodeValue;
	    
        li.innerHTML = title + ", by " + author + "(" + year + ") ";
        $("books").appendChild(li);
	}
}

function showBooks_JSON(ajax) {
	alert(ajax.responseText);
	
	$("books").innerHTML = "";
	
	var data = JSON.parse(ajax.responseText);
    for (var i = 0; i < data.books.length; i++) {
        var li = document.createElement("li");
        li.innerHTML = data.books[i].title + ", by " + data.books[i].author + "(" + data.books[i].year + ") ";
        $("books").appendChild(li);
    }
}

function ajaxFailed(ajax, exception) {
	var errorMessage = "Error making Ajax request:\n\n";
	if (exception) {
		errorMessage += "Exception: " + exception.message;
	} else {
		errorMessage += "Server status:\n" + ajax.status + " " + ajax.statusText + 
		                "\n\nServer response text:\n" + ajax.responseText;
	}
	alert(errorMessage);
}
