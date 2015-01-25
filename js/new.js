var sub = "";
var subtag = "";
var cid = -1;
var tim = -1;
var thumbnail = '';


//SOME SHIMS
if (!Date.now) {
    Date.now = function() { return new Date().getTime(); }
}

//CODE

function setimg(){
thumbnail = $("#thumbimg").attr("src");
if (thumbnail == "img/placeholder.png"){
	thumbnail = "none";
}
alert(thumbnail);
}

function post(){
	
	var title = $("#ftitle").val();
	var desc = $("#fdesc").val();
	var tags = $("#ftags").val();
	
	
	var content = editor.getValue();

	
	$.ajax({ 
		url: 'php/counter.php' 
	}).done(function(msg) {
		cid = parseInt(msg);
		tim = new Date().getTime();
		
		if (cid != -1){
	
			$.ajax({ 
				url: 'php/newpost.php',
				dataType: "text",
				type: "POST",
				data: {timestamp: tim, currentid: cid, title: title, desc: desc, tags: tags, subject: subtag, thumbnail: thumbnail, content: content }
					
					
			}).done(function(msg) {
				alert(msg);	
			});

	
		}
	});
	
	

}

function subdropdown(e){
	sub = $(e).html();
	subtag = $(e).attr("value");
	$("#dropdownMenu1").html(sub);
}

