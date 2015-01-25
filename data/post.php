			
						<!--
						<div class="jumbotron" style="width:100%;left:0px;top:0px;background-color:<?php echo $color; ?>">
								<div class="container" >
									
									<h1 align="middle" style="color:white">Post</h1>
									
								</div>
						</div>
						--->
						
						<div class="container" style="margin-top:20px"   >
						
							
							
							
							<div class="panel  panel-default">
								
								
								
									<div class="panel-heading">
									Allgemeines
									</div>
								
									<div class="panel-body">
									
									
									<div class="row" style="margin-top:1%" >
											<div class="col-md-3" style="margin-bottom:20px;">
											
											 
												<a href="#" class="thumbnail">
												  <div id="thumbimg" style="width:100%;height:200px;background-image:url('img/placeholder.png'); background-size: cover;background-repeat: no-repeat; background-position: 50% 50%"></div>
									  
												  
												</a>
												
													<!-- TEST -->
												  
												 
														
														
															
														<button id="upload-btn" type="button" class="btn btn-danger" >Foto auswählen</button>
															
														<div id="errormsg" class="clearfix redtext">
														</div>	              
														<div id="pic-progress-wrap" class="progress-wrap" style="margin-top:10px;margin-bottom:10px;">
														</div>	
														
														<div id="picbox" class="clear" style="padding-top:0px;padding-bottom:10px;">
														</div>

														<div class="clear-line" style="margin-top:10px;"></div>
														
											
													
												  
												  <!-- END -->
													
												<script>
													$(function() {
													  
														var btn = document.getElementById('upload-btn'),
															  wrap = document.getElementById('pic-progress-wrap'),
															  picBox = document.getElementById('picbox'),
															  errBox = document.getElementById('errormsg');

														var uploader = new ss.SimpleUpload({
															  button: 'upload-btn', // file upload button
															  url: 'php/upload.php', // server side handler
															  name: 'uploadfile', // upload parameter name        
															  progressUrl: 'extras/uploadProgress.php', // enables cross-browser progress support (more info below)
															  responseType: 'json',
															  allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
															  maxSize: 1024 * 10, // kilobytes
															  hoverClass: 'ui-state-hover',
															  focusClass: 'ui-state-focus',
															  disabledClass: 'ui-state-disabled',
															  onSubmit: function(filename, extension) {
																 
																  var prog = document.createElement('div'),
																   outer = document.createElement('div'),
																   bar = document.createElement('div'),
																   size = document.createElement('div'),
																   self = this;     
															
																	prog.className = 'prog';
																	size.className = 'size';
																	outer.className = 'progress';
																	bar.className = 'bar';
																	
																	outer.appendChild(bar);
																	prog.appendChild(size);
																	prog.appendChild(outer);
																	wrap.appendChild(prog); // 'wrap' is an element on the page
																	
																	self.setProgressBar(bar);
																	self.setProgressContainer(prog);
																	self.setFileSizeBox(size);                
																	
																	errBox.innerHTML = '';
																	btn.value = 'Choose another file';

																},         
															  onComplete: function(filename, response) {
																   if (!response) {
																	  errBox.innerHTML = 'Unable to upload file';
																	}     
																	if (response.success === true) {
																		$("#thumbimg").css("background-image" , "url('uploads/" + encodeURIComponent(response.file) + "')");
																		$("#thumbimg").attr("src" , "uploads/" + encodeURIComponent(response.file));
																		setimg();
																	} else {
																	  if (response.msg)  {
																		errBox.innerHTML = response.msg;
																	  } else {
																		errBox.innerHTML = 'Unable to upload file';
																	  }
																	}            
																  // do something with response...
																}
														});   
													 
													});
													</script>
												
												
											 
											</div>
											
												
											<div class="col-md-9">
												<div class="input-group">
												  <span class="input-group-addon" id="sizing-addon2">Titel</span>
												  <input id="ftitle" type="text" class="form-control" placeholder="z.B.: Polynomen Division" aria-describedby="sizing-addon2">
												</div>
												
												<div class="input-group" style="margin-top:20px">
												  <span class="input-group-addon" >Beschreibung</span>
												  <input id="fdesc" type="text" class="form-control" placeholder="z.B.: Polynomen Division ist eine Rechenvorschrift ..." aria-describedby="sizing-addon2">
												</div>
												
												<div class="input-group" style="margin-top:20px">
												  <span class="input-group-addon" id="ftags">Tags</span>
												  <input id="ftags" type="text" class="form-control" placeholder="Tags trennen durch [SPACE]" aria-describedby="sizing-addon2">
												</div>
												
												<div class="dropdown"style="margin-top:20px">
												  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
													Dropdown
													<span class="caret"></span>
												  </button>
												  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
													
													<?php
													
													for ($i = 0; $i < count($subjects); $i++){
														echo '<li  onclick="subdropdown(this)" value="' . $subjects[$i]->tag . '" role="presentation"><a style="color: '. $subjects[$i]->color . '" role="menuitem" tabindex="-1"  >'. $subjects[$i]->name .'</a></li>';
													}
													
													?>
													
													
												  </ul>
												</div>
												
											
											</div>		
										</div> 

								</div>								
							</div>
							
							
							<div class="row" style="margin-top:20px;">
								<div class="col-md-6" >
									<div class="panel panel-default">
										<div class="panel-heading" >Code Editor</div>
								
									<div class="panel-body" style="margin-left:-15px;margin-top:-15px;margin-bottom:-15px;margin-right:-15px" >
								
										<textarea id="yourcode" style="height:auto;">
<!doctype html>
<h1>JO</h1>
<p>
	Hier kann man seinen Artikel schreiben
</p>

<pre>
Und zwar in HTML
</pre>

<code>
  unser editor hilft dir dabei
</code>


<center>
    <img src="http://mirrors.creativecommons.org/presskit/icons/cc.large.png" width="100px" height="100px">
</center>
  
 


										</textarea>

									
									</div>
								</div>
							</div>
							
							
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading" >Vorschau</div>
									
									<div class="panel-body">
										<div style="height:67%;padding: 5 5 5 5"  id="htmlresultbox"></div>
									</div>
							</div>
								
							</div>
							
						
								
						


						
						</div>
						
						
						
									
									<div style="margin-top:20px;margin-bottom:20px" >
										<center >
											<button onclick="post()" type="button" class="btn btn-danger" >Diesen Beitrag hochladen</button>
										</center>
									</div>	
							
						
						<script type="text/javascript"> 

							var mixedMode = {
								name: "htmlmixed",
								scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
											   mode: null},
											   
											  {matches: /(text|application)\/(x-)?vb(a|script)/i,
											   mode: "vbscript"}]
							  };
							  var editor = CodeMirror.fromTextArea(document.getElementById("yourcode"), {
							  mode: mixedMode,
							  theme: "eclipse",
							  lineNumbers: true,
							  styleActiveLine: true,
							  viewportMargin: Infinity,
							  autoCloseBrackets: true,
							  tabSize: 4,
							  extraKeys: {
								"F11": function(cm) {
								  cm.setOption("fullScreen", !cm.getOption("fullScreen"));
								},
								"Esc": function(cm) {
								  if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
								}
							  }
							  
							  });
							  
							  
							editor.on("change", function(from, to, text, removed, origin) {
							
								 document.getElementById('htmlresultbox').innerHTML = editor.getValue();
								
							});
								
							document.getElementById('htmlresultbox').innerHTML = editor.getValue();
							
							
							
						</script>
						
</div>