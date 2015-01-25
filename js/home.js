function error(title, text){

 $.magnificPopup.open({
				  items: {
					src: '<div class="white-popup" >	<center style="margin-top:auto; margin-bottom:auto;" >	<h1>' + title + '</h1><p>' + text + '</p></center></div>'
				  },
				  
				   removalDelay: 300,
				   mainClass: 'mfp-fade',
				   type: 'inline'
				});

}

