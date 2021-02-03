<?php include('header.php'); ?>
<style type="text/css">
    .app-wrapper-footer{
        display: none;
    }
    html, body {
	    max-width: 100%;
	    overflow-x: hidden;
	}
	.dock {
	  	width: 350px;
	  	position: absolute;
	  	bottom: 10px;
	  	left: 0;
	  	right: 0;
	  	height: 80px;
	  	/*background-color: #bebebe;*/
	  	margin: auto;
	  	display: -webkit-box;
	  	display: flex;
	  	-webkit-box-align: center;
	    align-items: center;
	    border-radius: 10px;
	}
	.dock .icons {
	  	width: 800px;
	}
	.dock .icons .finder {
	  	width: 40px;
	  	margin-left: 15px;
	  	display: inline-block;
	}
	.dock .icons .finder:after {
	  	content: " ";
	  	height: 5px;
	  	width: 5px;
	  	background-color: #fff;
	  	border-radius: 50%;
	  	position: absolute;
	  	top: 60px;
	  	left: 4.5%;
	}
	.dock .icons .finder img {
	  	width: 50px;
	  	-webkit-transition: 0.2s;
	  	transition: 0.2s;
	}
	.dock .icons .finder img:hover {
	  	-webkit-transform: scale(1.2);
	    transform: scale(1.2);
	}
	.dock .icons .icon {
	  	width: 70px;
	  	margin-left: 12px;
	  	display: inline-block;
	}
	.dock .icons .icon img {
	  	width: 55px;
	    -webkit-transition: 0.2s;
	    transition: 0.2s;
	    background: rgba(256,256, 256, 0.95);
	    border-radius: 35px;
	    padding: 10px;
	}
	.dock .icons .icon img:hover {
	  	-webkit-transform: scale(1.2);
	    transform: scale(1.2);
	}
	.dock .icons .icon.settings {
	  	border-left: 1px solid #fff;
	  	padding-left: 10px;
	}
	#mydiv {
	  	position: absolute;
	  	z-index: 9;
	  	background-color: #f1f1f1;
	  	border: 1px solid #d3d3d3;
	  	text-align: center;
	  	left: 40px;
	  	top: 10px;
	  	border-radius: 10px;
	  	
	}

	#mydivheader {
	  	padding: 10px;
	  	cursor: move;
	  	z-index: 10;
	  	background-color: #2196F3;
	  	color: #fff;
	  	width: 180px;
	  	height: 180px;
	  	border-radius: 10px;
	}
</style>
        <!-- <div class="col-md-12">
            <img class="" src="./assets/images/avatars/doc.jpg">
        </div> -->
        <!-- <div class="col-md-5 pl-0 mob-no-patient-col">
            <div class="card mob-no-patient-card" style="height: 100vh;">
                <div class="row" style="padding: 10px;">
                    <div class="col-md-2">
                        <img width="80" class="boxed-circle" src="assets/images/avatars/1.jpg" alt="">
                    </div>
                    <div class="col-md-7 pl-4">
                        <h6 class="pt-05 bold">Ronesh Shrestha</h6>
                        <p class="mb-0 text-mute">06/12/1993 (26 years)</p>
                        <p class="mt-0 text-mute">+977 981800001</p>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
                <div class="card-header">
                    <ul class="nav nav-justified">
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link show active">Appointments</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link show">Medical History</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link show">Notes</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="tab-eg7-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                            software like Aldus PageMaker
                            including versions of Lorem Ipsum.</p></div>
                        <div class="tab-pane show" id="tab-eg7-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged. </p></div>
                        <div class="tab-pane show" id="tab-eg7-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row" style="margin-left:-30px;margin-right: -25px;">
        	<div class="col-md-12">
                <div class="mob-no-ml--10" style="width:100%;height:100vh;background: #17202A;">
                	<!-- Draggable DIV -->
					<div id="mydiv">
					  	<div id="mydivheader">
					  		Click here to move
					  	</div>
					</div>
                	<div class="dock">
					  	<div class="icons">
					  		<div class="icon">
						    	<a class="btn-open-options" href="javascript:void(0);">
						    		<img src="./assets/img/videocall/note.svg" alt="note"/>
						    	</a>
						    </div>
						    <div class="icon"><img src="./assets/img/videocall/microphone.svg" alt="mute"/></div>
						    <div class="icon"><img src="./assets/img/videocall/end.svg" alt="end"/></div>
						    <div class="icon"><img src="./assets/img/videocall/video.svg" alt="video"/></div>
						    
					  	</div>
					</div>
                </div>
                
        	</div>
        </div>

        <!-- <div class="ui-theme-settings">       
	        <div class="theme-settings__inner" style="border-radius: 20px 0px 0px 20px;">
	            <div class="scrollbar-container">
		            <div class="card mob-no-patient-card" style="height: 100vh;">
		            	
		                <div class="row" style="padding: 10px;padding-top: 20px;">
		                	<div class="col-md-2">
	                            <div class="mb-3 card text-white card-body bg-success card-fa">
	                                <i class="fas fa-file-alt"></i>
	                            </div>
	                        </div>
	                        <div class="col-md-8 mt--10">
	                            <p class="text-muted mb-0">4 August 020</p>
	                            <h5 class="bold">Asthma Checkup</h5>
	                        </div>
	                        <div class="col-md-2">
	                            <a class="btn-open-options" href="javascript:void(0);">
	                                <i class="fas fa-times font-22"></i>
	                            </a>
	                        </div>
		                    <div class="col-md-2">
		                        <img width="80" class="boxed-circle" src="assets/images/avatars/1.jpg" alt="">
		                    </div>
		                    <div class="col-md-7 pl-4">
		                        <h6 class="pt-05 bold">Ronesh Shrestha</h6>
		                        <p class="mb-0 text-mute">06/12/1993 (26 years)</p>
		                        <p class="mt-0 text-mute">+977 981800001</p>
		                    </div>
		                    <div class="col-md-3">
		                        
		                    </div>
		                </div>
		                <div class="card-header">
		                    <ul class="nav nav-justified">
		                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link show active">Appointments</a></li>
		                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link show">Medical History</a></li>
		                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link show">Notes</a></li>
		                    </ul>
		                </div>
		                <div class="card-body">
		                    <div class="tab-content">
		                        <div class="tab-pane show active" id="tab-eg7-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
		                            software like Aldus PageMaker
		                            including versions of Lorem Ipsum.</p></div>
		                        <div class="tab-pane show" id="tab-eg7-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
		                            essentially unchanged. </p></div>
		                        <div class="tab-pane show" id="tab-eg7-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
		                            type specimen book. It has
		                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
		                    </div>
		                </div>
		            </div>
	            </div>
	        </div>
	    </div>   -->

	    <div class="ui-theme-settings">       
	        <div class="theme-settings__inner">
	            <div class="scrollbar-container">
	                <div class="theme-settings__options-wrapper p-20">
	                    <div class="row">
	                        <div class="col-md-2">
	                            <div class="mb-3 card text-white card-body bg-success card-fa">
	                                <i class="fas fa-file-alt"></i>
	                            </div>
	                        </div>
	                        <div class="col-md-8 mt--10">
	                            <p class="text-muted mb-0">4 August 020</p>
	                            <h5 class="bold">Asthma Checkup</h5>
	                        </div>
	                        <div class="col-md-2">
	                            <a class="btn-open-options" href="javascript:void(0);">
	                                <i class="fas fa-times font-22"></i>
	                            </a>
	                        </div>
	                    </div>
	                    <div>
	                        <p>
	                            <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg">
	                            &emsp;<span>Beth Murphy, M.D.</span>
	                        </p>
	                    </div>
	                    <div>
	                        <h6 class="bold pt-10 font-12">Complaint</h6>
	                        <p>
	                            Asthma is a condition in which your airways narrow and swell and may produce extra mucus. This can make breathing difficult and trigger coughing, a whistling sound (wheezing) when you breathe out and shortness of breath. For some people, asthma is a minor nuisance.
	                        </p>

	                        <h6 class="bold pt-10 font-12">Treatment</h6>
	                        <p>
	                            1. Multiple scierosis<br/>
	                            Notes: Followup in 6-months
	                        </p>

	                        <h6 class="bold pt-10 font-12">Follow Up</h6>
	                        <p>
	                            6 months
	                        </p>

	                        <h6 class="bold pt-10 font-12 pb-20">Linked Documents</h6>
	                        <div id="accordion-journal" class="accordion-journal-wrapper mb-3">
	                            <div class="card">
	                                <div id="headingOne" class="card-header" style="height: 40px;">
	                                    <button type="button" data-toggle="collapse" data-target="#medication-list" aria-expanded="false" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block collapsed">
	                                        <div class="row">
	                                            <div class="col-md-2">
	                                                <div class="mb-3 card text-white card-body bg-success card-list">
	                                                    <i class="fas fa-file-alt falist"></i>
	                                                </div>
	                                            </div>
	                                            <div class="col-md-9">
	                                                <p class="med-list-title">Medication List</p>
	                                            </div>
	                                            
	                                        </div>
	                                    </button>
	                                </div>
	                                <div data-parent="#accordion-journal" id="medication-list" aria-labelledby="headingOne" class="collapse" style="">
	                                    <div class="card-body">1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
	                                        nesciunt
	                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
	                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
	                                        VHS.
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </div> 

	    <script type="text/javascript">
	    	// Make the DIV element draggable:
			dragElement(document.getElementById("mydiv"));

			function dragElement(elmnt) {
			  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
			  if (document.getElementById(elmnt.id + "header")) {
			    // if present, the header is where you move the DIV from:
			    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
			  } else {
			    // otherwise, move the DIV from anywhere inside the DIV:
			    elmnt.onmousedown = dragMouseDown;
			  }

			  function dragMouseDown(e) {
			    e = e || window.event;
			    e.preventDefault();
			    // get the mouse cursor position at startup:
			    pos3 = e.clientX;
			    pos4 = e.clientY;
			    document.onmouseup = closeDragElement;
			    // call a function whenever the cursor moves:
			    document.onmousemove = elementDrag;
			  }

			  function elementDrag(e) {
			    e = e || window.event;
			    e.preventDefault();
			    // calculate the new cursor position:
			    pos1 = pos3 - e.clientX;
			    pos2 = pos4 - e.clientY;
			    pos3 = e.clientX;
			    pos4 = e.clientY;
			    // set the element's new position:
			    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
			    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
			  }

			  function closeDragElement() {
			    // stop moving when mouse button is released:
			    document.onmouseup = null;
			    document.onmousemove = null;
			  }
			}
	    </script>
<?php include('footer.php'); ?>
