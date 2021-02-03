<?php include('header.php'); ?>
<script src="https://use.fontawesome.com/d0aa6505a3.js"></script>
	<div class="app-main__inner">
        <div class="app-page-title pt-18">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <div class="mr-2 btn-group">
                            <h5 style="font-size: 18px;font-weight: 700;padding-bottom: 10px;">Add New Patient</h5>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light" href="./patient.php">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            Back to Patients
                        </a>
                    </div>
                </div>  
            </div>
        </div>

        <div class="container-fluid">
		    <div class="row justify-content-center">
		        <div class="col-8 text-center p-0 mb-2">
		            <div class="card px-0 pb-0 mb-3">
		                <form id="msform">
		                    <ul id="progressbar">
		                        <li class="active" id="account"><strong>Patient Information</strong></li>
		                        <li id="personal"><strong>Health Information</strong></li>
		                        <li id="payment"><strong>Contact Information</strong></li>
		                        <li id="confirm"><strong>Finish</strong></li>
		                    </ul>
		                    <br>
		                    <fieldset>
		                        <div class="form-card">
		                            <div class="row">
		                            	<div class="col-md-12 ">
		                            		<h5 class="card-title">Patient Information</h5>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">First Name</label>
                                    		<input type="text" class="form-control" placeholder="Enter first name" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Middle Name</label>
                                    		<input type="text" class="form-control" placeholder="Enter middle name" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Last Name</label>
                                    		<input type="text" class="form-control" placeholder="Enter last name" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
			                                <label for="article-expiry" class="">Date of Birth</label>
			                                <input name="article-expiry" id="article-expiry" type="date" class="form-control">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Patient Identifier</label>
                                    		<input type="text" class="form-control" placeholder="DH-01AY" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">License / ID Number</label>
                                    		<input type="text" class="form-control" placeholder="DH-01AY" required="">
		                            	</div>
		                            	<div class="col-md-6">
		                            		<div class="position-relative form-group">
		                            			<label for="exampleFile" class="">ID Verification File</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                <small class="form-text text-muted">** Maximum upload size of verification ID is 2MB.</small>
                                            </div>
		                            	</div>



		                            	<div class="col-md-6">
		                            		<label>Gender at Birth</label>
		                            		<div class="custom-radio custom-control">
                                            	<input type="radio" id="g-male" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="g-male">Male</label>
                                            </div>
                                            <div class="custom-radio custom-control">
                                            	<input type="radio" id="g-femlae" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="g-femlae">Female</label>
                                            </div>
		                            	</div>

		                            	<div class="col-md-12 pt-20">
		                            		<h5 class="card-title">Address Information</h5>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
                                			<label for="country" class="">Country</label>
                            				<select name="select" id="country" class="form-control">
                                                <option>Nepal</option>
                                            </select>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
                                			<label for="province" class="">Province</label>
                            				<select name="select" id="province" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
                                			<label for="district" class="">District</label>
                            				<select name="select" id="district" class="form-control">
                                                <option>Kathmandu</option>
                                                <option>Kavre</option>
                                                <option>Lalitpur</option>
                                                <option>Bhaktapur</option>
                                            </select>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="municipality" class="">Municipality</label>
                            				<select name="select" id="municipality" class="form-control">
                                                <option>Dhulikhel</option>
                                                <option>Kathmandu</option>
                                                <option>Lalitpur</option>
                                                <option>Bhaktapur</option>
                                            </select>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Ward</label>
                                    		<input type="number" class="form-control" placeholder="1" required="">
		                            	</div>
		                            </div>
		                        </div>
		                        <input type="button" name="next" class="next action-button" value="Next" />
		                    </fieldset>
		                    <fieldset>
		                        <div class="form-card">
		                            <div class="row">
		                            	<div class="col-md-12 ">
		                            		<h5 class="card-title">Health Information</h5>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="lmp">Last Menstrual Period</label>
                                    		<input type="date" class="form-control" id="lmp" placeholder="Enter LMP" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="previous_birth">Number of previous birth</label>
                                    		<input type="number" class="form-control" id="previous_birth" placeholder="Enter number of previous birth" required="">
		                            	</div>
		                            	<div class="col-md-4"></div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="other_health_condition">
		                            			Other health condition
	                            				<a class="ml-auto" data-toggle="modal" data-target=".other_health_condition" href="#">
	                                                <i class="fas fa-plus right" aria-hidden="true"></i>
	                                            </a>
		                            		</label>
                                    		<input type="text" class="tagged form-control" id="other_health_condition" value="" required="">
		                            	</div>

		                            	<div class="col-md-4 pb-20">
		                            		<label for="other_medication">Other Medications</label>
                                    		<input type="text" class="form-control" id="other_medication" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="other_medication_taken">Other Medications Taken For</label>
                                    		<input type="text" class="form-control" id="other_medication_taken" required="">
		                            	</div>
		                            	
		                            	<div class="col-md-12 pt-20">
		                            		<h5 class="card-title">GDM Information</h5>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">GDM Screening OGTT Value</label>
                                    		<input type="text" class="form-control" placeholder="Enter OGTT value" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">GDM Diagnosis Fasting Value</label>
                                    		<input type="text" class="form-control" placeholder="Enter fasting value" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">GDM Daignosis 1-hour value</label>
                                    		<input type="text" class="form-control" placeholder="Enter 1-hour value" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">GDM Diagnosis 2-hour value</label>
                                    		<input type="text" class="form-control" placeholder="Enter 2-hour value" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">GDM Diagnosis 3-hour value</label>
                                    		<input type="text" class="form-control" placeholder="Enter 3-hour value" required="">
		                            	</div>
		                            	<div class="col-md-6 pb-20">
		                            		<label>Met with nutritionist</label>
		                            		<div class="custom-radio custom-control">
                                            	<input type="radio" id="nutritionist0" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="nutritionist0">Yes</label>
                                            </div>
                                            <div class="custom-radio custom-control">
                                            	<input type="radio" id="nutritionist1" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="nutritionist1">No</label>
                                            </div>
		                            	</div>
		                            	<div class="col-md-6 pb-20">
		                            		<label>Met with physical therapist</label>
		                            		<div class="custom-radio custom-control">
                                            	<input type="radio" id="therapist" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="therapist">Yes</label>
                                            </div>
                                            <div class="custom-radio custom-control">
                                            	<input type="radio" id="therapist2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="therapist2">No</label>
                                            </div>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Diet Plan</label>
                                    		<input type="text" class="form-control" placeholder="Enter diet plan" required="">
		                            	</div>	
		                            </div>
		                        </div>
		                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
		                    </fieldset>
		                    <fieldset>
		                        <div class="form-card">
		                            <div class="row">
		                            	<div class="col-md-12 ">
		                            		<h5 class="card-title">Contact Information</h5>
		                            	</div>
		                            	<div class="col-md-6 pb-20">
		                            		<label for="article-title">Contact Number</label>
                                    		<input type="text" class="form-control" placeholder="Enter contact number" required="">
		                            	</div>
		                            	<div class="col-md-6 pb-20">
		                            		<label for="article-title">Alternate Contact Number</label>
                                    		<input type="text" class="form-control" placeholder="Enter alternate number" required="">
		                            	</div>
		                            	

		                            	<div class="col-md-12 pt-20">
		                            		<h5 class="card-title">Emergency Contact Information</h5>
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">First  Name</label>
                                    		<input type="text" class="form-control" placeholder="Enter first name" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Middle Name</label>
                                    		<input type="text" class="form-control" placeholder="Enter middle name" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Last Name</label>
                                    		<input type="text" class="form-control" placeholder="Enter last name" required="">
		                            	</div>

		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Relationship</label>
                                    		<input type="text" class="form-control" placeholder="Enter relationship" required="">
		                            	</div>
		                            	<div class="col-md-4 pb-20">
		                            		<label for="article-title">Emergency Contact Number</label>
                                    		<input type="text" class="form-control" placeholder="Enter contact number" required="">
		                            	</div>
		                            	 
		                            	<div class="col-md-12 pb-20">
		                            		<label>Use of glucometer</label>
		                            		<div class="custom-radio custom-control">
                                            	<input type="radio" id="glucometer" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="glucometer">Yes</label>
                                            </div>
                                            <div class="custom-radio custom-control">
                                            	<input type="radio" id="glucometer2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="glucometer2">No</label>
                                            </div>
		                            	</div>
		                            </div>
		                        </div>
		                        <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
		                    </fieldset>
		                    <fieldset>
		                        <div class="form-card">
		                        	<br>
		                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
		                            
		                            <div class="row justify-content-center">
		                                <div class="col-12 text-center"> 
		                                	<img src="https://image.freepik.com/free-vector/portfolio-concept-illustration_114360-126.jpg"style="height: 300px;width: auto;"> 
		                                </div>
		                            </div>
		                            <br><br>
		                            <div class="row justify-content-center">
		                                <div class="col-7 text-center">
		                                    <h5 class="purple-text text-center font-14">The user has been successfully created.</h5>
		                                </div>
		                            </div>
		                        </div>
		                    </fieldset>
		                </form>
		            </div>
		        </div>
		        <div class="col-4">
		        	<div class="main-card mb-3 card" style="background-color: #D6EAF8;">
	                    <div class="card-body">
	                    	<p>Please note that user creation will create a new user and will be verified about the GDM application.</p>
	                    </div>
	                </div>    
		        	<div class="main-card mb-3 card">
	                    <div class="card-body">
	                        <h5 class="card-title">User Creator</h5>
	                        <form class="">
	                            <div class="position-relative form-group">
	                                <label for="article-owner" class="">Creator</label>
	                                <input name="owner" id="article-owner" disabled="" placeholder="Ronesh" type="text" class="form-control">
	                            </div>
	                            <div class="position-relative form-group">
	                                <label class="">Creator Hospital</label>
	                                <input disabled="" placeholder="Dhulikhel Hospital" type="text" class="form-control">
	                            </div>
	                            <div class="position-relative form-group">
	                                <label class="">Hospital ID</label>
	                                <input disabled="" placeholder="DH-001" type="text" class="form-control">
	                            </div>
	                            
	                            <div class="position-relative form-group">
	                                <label for="exampleText" class="">Notes (if any)</label>
	                                <textarea name="text" id="exampleText" class="form-control" style="height: 90px;"></textarea>
	                            </div>
	                        </form>
	                    </div>
	                </div>
		        </div>
		    </div>
		</div>

    </div>

<div>
	<button class="hide" id="destroy">destroy</button>
	<button class="hide" id="addArr">add tags array</button>
	<button class="hide" id="clear">clear tags</button>
	<button class="hide" id="get">get taggs</button>
</div>

<div class="modal fade other_health_condition" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-14" id="exampleModalLongTitle">Select Diagnosis Code</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="icdten" class="display" style="width:100%">
			        <thead>
			            <tr>
			            	<th></th>
			                <th>Code</th>
			                <th>Description</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			            	<td></td>
			                <td>A00.0</td>
			                <td>Cholera due to Vibrio Cholerae 01, biovar cholerae</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A00.1</td>
			                <td>Cholera due to Vibrio Cholerae 01, biovar eltor</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A00.9</td>
			                <td>Cholera, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.00</td>
			                <td>Typhoid fever, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A101.01</td>
			                <td>Typhoid Meningitis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.02</td>
			                <td>Typhoid Fever with heart involvement</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.03</td>
			                <td>Typhoid pneumonia</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.04</td>
			                <td>Typhoid arthritis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.05</td>
			                <td>Typhoid osteomyelitis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.09</td>
			                <td>Typhoid Fever with other complications</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.1</td>
			                <td>Paratyphoid fever A</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.2</td>
			                <td>Paratyphoid fever B</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.3</td>
			                <td>Paratyphoid fever C</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.4</td>
			                <td>Paratyphoid fever, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			            	<td>A02.0</td>
			                <td>Salmonella enteritis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A00.0</td>
			                <td>Cholera due to Vibrio Cholerae 01, biovar cholerae</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A00.1</td>
			                <td>Cholera due to Vibrio Cholerae 01, biovar eltor</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A00.9</td>
			                <td>Cholera, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.00</td>
			                <td>Typhoid fever, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A101.01</td>
			                <td>Typhoid Meningitis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.02</td>
			                <td>Typhoid Fever with heart involvement</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.03</td>
			                <td>Typhoid pneumonia</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.04</td>
			                <td>Typhoid arthritis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.05</td>
			                <td>Typhoid osteomyelitis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.09</td>
			                <td>Typhoid Fever with other complications</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.1</td>
			                <td>Paratyphoid fever A</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.2</td>
			                <td>Paratyphoid fever B</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.3</td>
			                <td>Paratyphoid fever C</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.4</td>
			                <td>Paratyphoid fever, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			            	<td>A02.0</td>
			                <td>Salmonella enteritis</td>
			            </tr>
			            
			            <tr>
			            	<td></td>
			                <td>A00.0</td>
			                <td>Cholera due to Vibrio Cholerae 01, biovar cholerae</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A00.1</td>
			                <td>Cholera due to Vibrio Cholerae 01, biovar eltor</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A00.9</td>
			                <td>Cholera, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.00</td>
			                <td>Typhoid fever, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A101.01</td>
			                <td>Typhoid Meningitis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.02</td>
			                <td>Typhoid Fever with heart involvement</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.03</td>
			                <td>Typhoid pneumonia</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.04</td>
			                <td>Typhoid arthritis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.05</td>
			                <td>Typhoid osteomyelitis</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.09</td>
			                <td>Typhoid Fever with other complications</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.1</td>
			                <td>Paratyphoid fever A</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.2</td>
			                <td>Paratyphoid fever B</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.3</td>
			                <td>Paratyphoid fever C</td>
			            </tr>
			            <tr>
			            	<td></td>
			                <td>A01.4</td>
			                <td>Paratyphoid fever, unspecified</td>
			            </tr>
			            <tr>
			            	<td></td>
			            	<td>A02.0</td>
			                <td>Salmonella enteritis</td>
			            </tr>
			            
			            
			        </tbody>
			        <tfoot>
			            <tr>
			            	<th></th>
			                <th>Code</th>
			                <th>Description</th>
			            </tr>
			        </tfoot>
			    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="add" class="btn btn-primary">Add Code</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){

		var current_fs, next_fs, previous_fs; //fieldsets
		var opacity;
		var current = 1;
		var steps = $("fieldset").length;

		setProgressBar(current);

		$(".next").click(function(){

		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//Add Class Active
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
		step: function(now) {
		// for making fielset appear animation
		opacity = 1 - now;

		current_fs.css({
		'display': 'none',
		'position': 'relative'
		});
		next_fs.css({'opacity': opacity});
		},
		duration: 500
		});
		setProgressBar(++current);
		});

		$(".previous").click(function(){

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//Remove class active
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

		//show the previous fieldset
		previous_fs.show();

		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
		step: function(now) {
		// for making fielset appear animation
		opacity = 1 - now;

		current_fs.css({
		'display': 'none',
		'position': 'relative'
		});
		previous_fs.css({'opacity': opacity});
		},
		duration: 500
		});
		setProgressBar(--current);
		});

		function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
		.css("width",percent+"%")
		}

		$(".submit").click(function(){
		return false;
		})

	});
</script>
<script type="text/javascript">
	(function() {

	    'use strict';

	    function $$(selectors, context) {
	        return (typeof selectors === 'string') ? (context || document).querySelectorAll(selectors) : [selectors];
	    }

	    function $(selector, context) {
	        return (typeof selector === 'string') ? (context || document).querySelector(selector) : selector;
	    }

	    function create(tag, attr) {
	        var element = document.createElement(tag);
	        if (attr) {
	            for (var name in attr) {
	                if (element[name] !== undefined) {
	                    element[name] = attr[name];
	                }
	            }
	        }
	        return element;
	    }

	    function whichTransitionEnd() {
	        var root = document.documentElement;
	        var transitions = {
	            'transition': 'transitionend',
	            'WebkitTransition': 'webkitTransitionEnd',
	            'MozTransition': 'mozTransitionEnd',
	            'OTransition': 'oTransitionEnd otransitionend'
	        };

	        for (var t in transitions) {
	            if (root.style[t] !== undefined) {
	                return transitions[t];
	            }
	        }
	        return false;
	    }

	    function oneListener(el, type, fn, capture) {
	        capture = capture || false;
	        el.addEventListener(type, function handler(e) {
	            fn.call(this, e);
	            el.removeEventListener(e.type, handler, capture)
	        }, capture);
	    }

	    function hasClass(cls, el) {
	        return new RegExp('(^|\\s+)' + cls + '(\\s+|$)').test(el.className);
	    }

	    function addClass(cls, el) {
	        if (!hasClass(cls, el))
	            return el.className += (el.className === '') ? cls : ' ' + cls;
	    }

	    function removeClass(cls, el) {
	        el.className = el.className.replace(new RegExp('(^|\\s+)' + cls + '(\\s+|$)'), '');
	    }

	    function toggleClass(cls, el) {
	        (!hasClass(cls, el)) ? addClass(cls, el): removeClass(cls, el);
	    }

	    function Tags(tag) {

	        var el = $(tag);

	        if (el.instance) return;
	        el.instance = this;

	        var type = el.type;
	        var transitionEnd = whichTransitionEnd();

	        var tagsArray = [];
	        var KEYS = {
	            ENTER: 13,
	            COMMA: 188,
	            BACK: 8
	        };
	        var isPressed = false;

	        var timer;
	        var wrap;
	        var field;

	        function init() {

	            wrap = create('div', {
	                'className': 'tags-container',
	            });
	            field = create('input', {
	                'type': 'text',
	                'className': 'tag-input',
	                'placeholder': el.placeholder || ''
	            });

	            wrap.appendChild(field);

	            if (el.value.trim() !== '') {
	                hasTags();
	            }

	            el.type = 'hidden';
	            el.parentNode.insertBefore(wrap, el.nextSibling);

	            wrap.addEventListener('click', btnRemove, false);
	            wrap.addEventListener('keydown', keyHandler, false);
	            wrap.addEventListener('keyup', backHandler, false);
	        }

	        function hasTags() {
	            var arr = el.value.trim().split(',');
	            arr.forEach(function(item) {
	                item = item.trim();
	                if (~tagsArray.indexOf(item)) {
	                    return;
	                }
	                var tag = createTag(item);
	                tagsArray.push(item);
	                wrap.insertBefore(tag, field);
	            });
	        }

	        function createTag(name) {
	            var tag = create('div', {
	                'className': 'tag',
	                'innerHTML': '<span class="tag__name">' + name + '</span>' + '<button class="tag__remove">&times;</button>'
	            });
	            return tag;
	        }

	        function btnRemove(e) {
	            e.preventDefault();
	            if (e.target.className === 'tag__remove') {
	                var tag = e.target.parentNode;
	                var name = $('.tag__name', tag);
	                wrap.removeChild(tag);
	                tagsArray.splice(tagsArray.indexOf(name.textContent), 1);
	                el.value = tagsArray.join(',')
	            }
	            field.focus();
	        }

	        function keyHandler(e) {

	            if (e.target.tagName === 'INPUT' && e.target.className === 'tag-input') {

	                var target = e.target;
	                var code = e.which || e.keyCode;

	                if (field.previousSibling && code !== KEYS.BACK) {
	                    removeClass('tag--marked', field.previousSibling);
	                }

	                var name = target.value.trim();
	                if (code === KEYS.ENTER) {
	                    target.blur();
	                    addTag(name);
	                    if (timer) clearTimeout(timer);
	                    timer = setTimeout(function() {
	                        target.focus();
	                    }, 10);
	                } else if (code === KEYS.BACK) {
	                    if (e.target.value === '' && !isPressed) {
	                        isPressed = true;
	                        removeTag();
	                    }
	                }
	            }
	        }

	        function backHandler(e) {
	            isPressed = false;
	        }

	        function addTag(name) {
	            name = name.toString().replace(/,/g, '').trim();

	            if (name === '') return field.value = '';

	            if (~tagsArray.indexOf(name)) {

	                var exist = $$('.tag', wrap);

	                Array.prototype.forEach.call(exist, function(tag) {
	                    if (tag.firstChild.textContent === name) {

	                        addClass('tag--exists', tag);

	                        if (transitionEnd) {
	                            oneListener(tag, transitionEnd, function() {
	                                removeClass('tag--exists', tag);
	                            });
	                        } else {
	                            removeClass('tag--exists', tag);
	                        }


	                    }

	                });

	                return field.value = '';
	            }

	            var tag = createTag(name);
	            wrap.insertBefore(tag, field);
	            tagsArray.push(name);
	            field.value = '';
	            el.value += (el.value === '') ? name : ',' + name;
	        }

	        function removeTag() {
	            if (tagsArray.length === 0) return;

	            var tags = $$('.tag', wrap);
	            var tag = tags[tags.length - 1];

	            if (!hasClass('tag--marked', tag)) {
	                addClass('tag--marked', tag);
	                return;
	            }

	            tagsArray.pop();

	            wrap.removeChild(tag);

	            el.value = tagsArray.join(',');
	        }

	        init();

	        this.getTags = function() {
	            return tagsArray;
	        }

	        this.clearTags = function() {
	            if (!el.instance) return;
	            tagsArray.length = 0;
	            el.value = '';
	            wrap.innerHTML = '';
	            wrap.appendChild(field);
	        }

	        this.addTags = function(name) {
	            if (!el.instance) return;
	            if (Array.isArray(name)) {
	                for (var i = 0, len = name.length; i < len; i++) {
	                    addTag(name[i])
	                }
	            } else {
	                addTag(name);
	            }
	            return tagsArray;
	        }

	        this.destroy = function() {
	            if (!el.instance) return;

	            wrap.removeEventListener('click', btnRemove, false);
	            wrap.removeEventListener('keydown', keyHandler, false);
	            wrap.removeEventListener('keyup', keyHandler, false);

	            wrap.parentNode.removeChild(wrap);

	            tagsArray = null;
	            timer = null;
	            wrap = null;
	            field = null;
	            transitionEnd = null;

	            delete el.instance;
	            el.type = type;
	        }
	    }

	    window.Tags = Tags;
	})();

	$(document).ready(function() {
	    icdten = $('#icdten').DataTable( {
	        columnDefs: [ {
	            orderable: false,
	            className: 'select-checkbox',
	            targets:   0
	        } ],
	        select: {
	            style:    'os',
	        },
	        order: [[ 1, 'asc' ]]
	    } );
	} );

	

	var tags = new Tags('.tagged');

	document.getElementById('get').addEventListener('click', function(e) {
	    e.preventDefault();
	    alert(tags.getTags());
	});
	document.getElementById('clear').addEventListener('click', function(e) {
	    e.preventDefault();
	    tags.clearTags();
	});
	document.getElementById('add').addEventListener('click', function(e) {
	    e.preventDefault();
	    var idArray = icdten.rows( { selected: true } ).data().toArray();
	    var idVal = idArray[0][1];
	    tags.addTags(idVal);
	});
	document.getElementById('addArr').addEventListener('click', function(e) {
	    e.preventDefault();
	    tags.addTags(['Steam Machines', 'Nintendo Wii U', 'Shield Portable']);
	});
	document.getElementById('destroy').addEventListener('click', function(e) {
	    e.preventDefault();
	    if (this.textContent === 'destroy') {
	        tags.destroy();
	        this.textContent = 'reinit';
	    } else {
	        this.textContent = 'destroy';
	        tags = new Tags('.tagged');
	    }

	});
</script>
<?php include('footer.php'); ?>
