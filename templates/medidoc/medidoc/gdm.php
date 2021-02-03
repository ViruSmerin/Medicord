<?php include('header.php'); ?>

    <div class="app-main__inner">
       
        <div class="app-page-title pt-0 pb-0">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <h5 style="margin-top:16px;font-size: 18px;font-weight: 700;padding-bottom: 10px;">Patients &emsp; <i class="fas fa-angle-right"></i> &emsp;</h5>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link active font-small-14 bold" id="tab-0" data-toggle="tab" href="#patient-overview">
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link font-small-14 bold" id="tab-3" data-toggle="tab" href="#medical-journal">
                                    <span>Medical Journal</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link font-small-14 bold" id="tab-4" data-toggle="tab" href="#prescription">
                                    <span>Prescription</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link font-small-14 bold" id="tab-1" data-toggle="tab" href="#blood-glucose">
                                    <span>Blood Glucose</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link font-small-14 bold" id="tab-2" data-toggle="tab" href="#food-intake">
                                    <span>Food Intake</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 
            </div>
        </div>

        <div class="tab-content pt-20">
            <!-- <div class="tab-pane tabs-animation fade show active" id="patient-overview" role="tabpanel">
                <div class="row">
                    <div class="col-md-4 pr-0">
                        <div class="main-card mb-3 card">
                            <div class="card-body text-center pb-16">
                                <div class="text-left">
                                    <img width="80" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                    <div class="d-inline-block pl-20 v-mid">
                                        <h5 class="card-title mb-0">Celeste Shrestha</h5>
                                        <p class="text-mute">celeste@gmail.com</p>
                                    </div>
                                </div>
                                
                                <div class="card-body pb-0 pl-0 pr-0">
                                    <table class="mb-0 table table-borderless">
                                        <tbody class="gdm-patient-profile">
                                            <th>Blood</th>
                                            <th>Height</th>
                                            <th>Weight</th>

                                            <tr>
                                                <td>B +</td>
                                                <td>170 cm</td>
                                                <td>80 kg</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="card-body pt-0 pb-0 pl-0 pr-0 text-left">
                                    <table class="mb-0 table table-borderless">
                                        <tbody>
                                            <tr>
                                                
                                                <td>
                                                    <p class="bold">Gender</p>
                                                    <p class="text-mute font-12 mt--10">Female</p>
                                                </td>
                                                <td>
                                                    <p class="bold">D.O.B.</p>
                                                    <p class="text-mute font-12 mt--10">Feb 14th 1997</p>
                                                </td>
                                                <td>
                                                    <p class="bold">Phone</p>
                                                    <p class="text-mute font-12 mt--10">9818344862</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="bold">Street Address</p>
                                                    <p class="text-mute font-12 mt--10">New Baneshwor, Kathmandu</p>
                                                </td>
                                                <td>
                                                    <p class="bold">City</p>
                                                    <p class="text-mute font-12 mt--10">Kathmandu</p>
                                                </td>
                                                <td>
                                                    <p class="bold">State</p>
                                                    <p class="text-mute font-12 mt--10">Bagmati</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="bold">Member Status</p>
                                                    <p class="text-mute font-12 mt--10">Active</p>
                                                </td>
                                                <td colspan="2">
                                                    <p class="bold">Registered Date</p>
                                                    <p class="text-mute font-12 mt--10">Feb 24th 2020</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>
                                <div class="card-body pb-0 pl-0 pr-0 text-left">
                                    <h5 class="card-title">File / Documents</h5>
                                    <div style="padding: 0px 20px 20px 20px;">
                                        <table class="mb-0 table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td><i class="fas fa-file-alt" style="color: #CCD1D1;"></i></td>
                                                    <td>Checkup Result PDF</td>
                                                    <td>123 Kb</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-file-alt" style="color: #CCD1D1;"></i></td>
                                                    <td>Checkup Result PDF</td>
                                                    <td>123 Kb</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-file-alt" style="color: #CCD1D1;"></i></td>
                                                    <td>Checkup Result PDF</td>
                                                    <td>123 Kb</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-chart mb-2">
                                    <div class="card-body mb-0 pb-0">
                                        <h4 class="card-title">Steps</h4>
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="weightChart"></div>
                                        </figure>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="fas fa-clock"></i> updated 4 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart mb-2">
                                    <div class="card-body mb-0 pb-0">
                                        <h4 class="card-title">Blood Pressure</h4>
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="bpChart"></div>
                                        </figure>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="fas fa-clock"></i> updated 4 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <figure class="highcharts-figure pt-10 pl-10">
                                <div id="highcharts-container"></div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div> -->

            <div class="tab-pane tabs-animation fade show active" id="patient-overview" role="tabpanel">
                <div class="row">
                    <div class="col-md-8 pr-0">
                        <div class="row">
                            <div class="col-md-4 pr-05">
                                <div class="main-card mb-3 card min-h-300">
                                    <div class="card-body text-center pb-16">
                                        <img width="80" class="rounded-circle" src="./assets/images/avatars/1.png" alt="">
                                        <div class="card-body pb-0 pl-0 pr-0">
                                            <h5 class="card-title mb-0">Celeste Shrestha</h5>
                                            <p class="text-mute">celeste@gmail.com</p>
                                            <table class="mb-0 table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" style="border-right: 2px solid #E5E8E8;">
                                                            <h5 class="bold">15</h5>
                                                            <p class="text-mute font-small mt--10 mb-0">Past</p>
                                                        </td>
                                                        <td width="50%">
                                                            <h5 class="bold">2</h5>
                                                            <p class="text-mute font-small mt--10 mb-0">Upcoming</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a class="btn-transition btn btn-outline-light btn-lg btn-block" style="margin-top: 20px;">
                                                More Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 pl-0">
                                <div class="main-card mb-3 card min-h-300">
                                    <div class="card-body">
                                        <h5 class="card-title">Patient Details</h5>
                                        <table class="mb-0 table table-borderless">
                                            <tbody>
                                            <tr>
                                                
                                                <td>
                                                    <p class="bold">Gender</p>
                                                    <p class="text-mute font-12 mt--10">Female</p>
                                                </td>
                                                <td>
                                                    <p class="bold">D.O.B.</p>
                                                    <p class="text-mute font-12 mt--10">Feb 14th 1997</p>
                                                </td>
                                                <td>
                                                    <p class="bold">Phone</p>
                                                    <p class="text-mute font-12 mt--10">(977) 9818344862</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="bold">Street Address</p>
                                                    <p class="text-mute font-12 mt--10">New Baneshwor, Kathmandu</p>
                                                </td>
                                                <td>
                                                    <p class="bold">City</p>
                                                    <p class="text-mute font-12 mt--10">Kathmandu</p>
                                                </td>
                                                <td>
                                                    <p class="bold">State</p>
                                                    <p class="text-mute font-12 mt--10">Bagmati</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="bold">Member Status</p>
                                                    <p class="text-mute font-12 mt--10">Active</p>
                                                </td>
                                                <td>
                                                    <p class="bold">Registered Date</p>
                                                    <p class="text-mute font-12 mt--10">Feb 24th 2020</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <div class="card-body">
                                <ul class="tabs-animated-shadow tabs-animated nav">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show active" id="tab-c-0" data-toggle="tab" href="#tab-animated-0" aria-selected="true">
                                            <span>Upcoming Appointments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-c-1" data-toggle="tab" href="#tab-animated-1" aria-selected="false">
                                            <span>Past Appointments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-c-2" data-toggle="tab" href="#tab-animated-2" aria-selected="false">
                                            <span>Medical Records</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="scroll-area-md tab-pane show active" id="tab-animated-0" role="tabpanel">
                                        <div class="scrollbar-container ps--active-y ps back-gray">
                                            <ul class="timeline">
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="scroll-area-md tab-pane show" id="tab-animated-1" role="tabpanel">
                                        <div class="scrollbar-container ps--active-y ps back-gray">
                                            <ul class="timeline">
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-group-item">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="row" style="width: 100%;">
                                                                    <div class="col-md-2 text-center">
                                                                        <img width="50" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="col-md-5 pl-0 pt-05">
                                                                        <div class="widget-heading bold">Dr. Ella-Rose Henry</div>
                                                                        <div class="widget-subheading text-mute">Surgery</div>
                                                                    </div>
                                                                    <div class="col-md-5 text-right pt-05">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <h6>26 Dec 2020</h6>
                                                                            <p class="opacity-5 pr-1 font-14 mt--5 mb-0">
                                                                                09:00 AM - 10:00 AM
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        
                                        </div>
                                    </div>
                                    <div class="scroll-area-md tab-pane show" id="tab-animated-2" role="tabpanel">
                                        <div class="scrollbar-container ps--active-y ps">
                                            <h5 class="card-title" style="padding-left: 20px;">File / Documents</h5>
                                            <div style="padding: 20px;">
                                                <table class="mb-0 table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-file-alt" style="color: #CCD1D1;"></i></td>
                                                            <td>Checkup Result PDF</td>
                                                            <td>123 Kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-file-alt" style="color: #CCD1D1;"></i></td>
                                                            <td>Checkup Result PDF</td>
                                                            <td>123 Kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fas fa-file-alt" style="color: #CCD1D1;"></i></td>
                                                            <td>Checkup Result PDF</td>
                                                            <td>123 Kb</td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Notes</h5>
                                <div class="card-body p-0">
                                    <form class="">
                                        <div class="position-relative form-group">
                                            <textarea name="text" id="exampleText" class="form-control"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8" style="margin-top:10px;">
                                                <i class="fas fa-user" style="color: #5DADE2;"></i>&nbsp;&nbsp;
                                                Dr. Ronesh Shrestha
                                            </div>
                                            <div class="col-md-4">
                                                <div style="text-align: right;">
                                                    <button class="mt-1 btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Medical Info</h5>
                                <div id="accordion" class="accordion-wrapper mb-3">
                                    <div class="card">
                                        <div id="headingOne" class="card-header">
                                            <button type="button" data-toggle="collapse" data-target="#medical-problems" aria-expanded="false" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block collapsed font-14">
                                                <i class="fas fa-file-alt" style="color: #3f6ad8;"></i>
                                                &emsp;<span style="color:#616A6B;">Medical Problems</span>
                                            </button>
                                        </div>
                                        <div data-parent="#accordion" id="medical-problems" aria-labelledby="headingOne" class="collapse" style="">
                                            <div class="card-body">
                                                1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                nesciunt
                                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                                VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo" class="b-radius-0 card-header">
                                            <button type="button" data-toggle="collapse" data-target="#allergies" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block font-14">
                                                <i class="fas fa-file-alt" style="color: #3f6ad8;"></i>
                                                &emsp;<span style="color:#616A6B;">Allergies</span>
                                            </button>
                                        </div>
                                        <div data-parent="#accordion" id="allergies" class="collapse">
                                            <div class="card-body">
                                                2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                nesciunt
                                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                                VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingThree" class="card-header">
                                            <button type="button" data-toggle="collapse" data-target="#immunization" aria-expanded="false" aria-controls="collapseThree" class="text-left m-0 p-0 btn btn-link btn-block font-14">
                                                <i class="fas fa-file-alt" style="color: #3f6ad8;"></i>
                                                &emsp;<span style="color:#616A6B;">Immunization</span>
                                            </button>
                                        </div>
                                        <div data-parent="#accordion" id="immunization" class="collapse">
                                            <div class="card-body">
                                                3. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
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

            <div class="tab-pane tabs-animation fade" id="medical-journal" role="tabpanel">
                <div class="row">
                    <div class="col-md-2">
                        <table class="mb-0 table table-borderless">
                            <tr>
                                <td>
                                    <i class="fas fa-calendar-alt font-22"></i>
                                </td>
                                <td class="bold font-12">Upcoming Visits</td>
                            </tr>
                            </tbody>
                        </table>

                        
                        <ul class="timeline ml--12">
                            <li>
                                <h6 class="bold mb-0">10:30 AM</h6>
                                <p class="font-12">21 Aug 2020</p>

                                <p class="mb-0 font-small text-mute">TYPE</p>
                                <p class="bold font-12">Followup</p>

                                <p class="mb-0 font-small text-mute">STATUS</p>
                                <p class="bold font-12">Confirmed</p>

                                <p class="mb-0 font-small text-mute">ATTENDANCE</p>
                                <p class="bold font-12">Clinic Visit</p>

                                <p class="mb-0 font-small text-mute">PAYMENT</p>
                                <p class="bold font-12">Completed</p>
                            </li>

                            <div class="mt-40">
                                <p class="bold font-small">Previous Visits</p>
                            </div>
                            <li>
                                <p class="mb-0 font-small text-mute">18:00 PM</p>
                                <p class="bold font-12">5 July 2020</p>
                            </li>
                            <li>
                                <p class="mb-0 font-small text-mute">16:00 PM</p>
                                <p class="bold font-12">1 June 2020</p>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="col-md-10">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h6 class="bold">Medical Journal Timeline</h6>
                                <hr>
                                <div>
                                    <ul class="timeline">
                                        <li>
                                            <a class="btn-open-options list-a" href="javascript:void(0);">
                                                <div class="mb-3 card card-body bg-gray pb-0">
                                                    <h6 class="mb-0">Asthma Check-up</h6>
                                                    <p>Dr. Sharma, Community Hospital</p>
                                                    <p class="font-small">26 August, 2020</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn-open-options list-a" href="javascript:void(0);">
                                                <div class="mb-3 card card-body bg-gray pb-0">
                                                    <h6 class="mb-0">Asthma Check-up</h6>
                                                    <p>Dr. Sharma, Community Hospital</p>
                                                    <p class="font-small">26 August, 2020</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn-open-options list-a" href="javascript:void(0);">
                                                <div class="mb-3 card card-body bg-gray pb-0">
                                                    <h6 class="mb-0">Asthma Check-up</h6>
                                                    <p>Dr. Sharma, Community Hospital</p>
                                                    <p class="font-small">26 August, 2020</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="tab-pane tabs-animation fade" id="prescription" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="bold">Active Prescriptions</h6>
                        <hr>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 text-center">
                                        <i class="fas fa-file-alt font-22"></i>
                                    </div>
                                    <div class="col-md-8 ml--12">
                                        <h6>Propanol 20mg Tab</h6>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button type="button" data-toggle="collapse" href="#collapse-active1" class="btn btn-primary mt--10" aria-expanded="true">
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="collapse show" id="collapse-active1" style="">
                                    <hr>
                                    <div class="font-12 color-gray">
                                        <i class="fas fa-map-marker-alt"></i>&nbsp; Pharmacy Filled
                                    </div>
                                    <p>Trauma Center</p>

                                    <div class="font-12 color-gray">
                                        <i class="fas fa-calendar-alt"></i>&nbsp; Dispense Date
                                    </div>
                                    <p>Trauma Center</p>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 text-center">
                                        <i class="fas fa-file-alt font-22"></i>
                                    </div>
                                    <div class="col-md-8 ml--12">
                                        <h6>Propanol 20mg Tab</h6>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button type="button" data-toggle="collapse" href="#collapse-active2" class="btn btn-primary collapsed mt--10" aria-expanded="false">
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="collapse" id="collapse-active2" style="">
                                    <hr>
                                    <div class="font-12 color-gray">
                                        <i class="fas fa-map-marker-alt"></i>&nbsp; Pharmacy Filled
                                    </div>
                                    <p>Trauma Center</p>

                                    <div class="font-12 color-gray">
                                        <i class="fas fa-calendar-alt"></i>&nbsp; Dispense Date
                                    </div>
                                    <p>Trauma Center</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="bold">Previous Prescriptions</h6>
                        <hr>
                        
                    </div>
                    <div class="col-md-4">
                        <h6 class="bold">Patient Notes</h6>
                        <hr>
                        
                    </div>
                </div>
            </div>
            
            <div class="tab-pane tabs-animation fade" id="blood-glucose" role="tabpanel">
                <div class="row">
                    <div class="col-md-7">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table id="blood-glucose-table" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Fasting</th>
                                            <th>After breakfast</th>
                                            <th>After lunch</th>
                                            <th>After dinner</th>
                                            <th>Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>2-12-2020</td>
                                            <td>230</td>
                                            <td>214</td>
                                            <td>234</td>
                                            <td>211</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>3-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>4-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>5-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>6-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>7-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>8-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>9-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>10-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>11-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>12-12-2020</td>
                                            <td>230</td>
                                            <td>231</td>
                                            <td>234</td>
                                            <td>235</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Fasting</th>
                                            <th>After breakfast</th>
                                            <th>After lunch</th>
                                            <th>After dinner</th>
                                            <th>Notes</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="card card-chart mb-2">
                            <div class="card-body mb-0 pb-0">
                                <h4 class="card-title">Blood Glucose</h4>
                                <ul class="tabs-animated-shadow tabs-animated nav">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show active" id="tab-g-0" data-toggle="tab" href="#glucose-week" aria-selected="true">
                                            <span>Week</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-g-1" data-toggle="tab" href="#glucose-month" aria-selected="false">
                                            <span>Month</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-g-2" data-toggle="tab" href="#glucose-all" aria-selected="false">
                                            <span>All</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="glucose-week" role="tabpanel">
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="glucoseChartWeek"></div>
                                        </figure>
                                    </div>
                                    <div class="tab-pane show" id="glucose-month" role="tabpanel">
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="glucoseChartMonth"></div>
                                        </figure>
                                    </div>
                                    <div class="tab-pane show" id="glucose-all" role="tabpanel">
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="glucoseChartAll"></div>
                                        </figure>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="fas fa-clock"></i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="tab-pane tabs-animation fade" id="food-intake" role="tabpanel">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="bold">Yesterday</h6>
                                <hr>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <i class="fas fa-file-alt mr-2"></i>Breakfast
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <i data-toggle="collapse" href="#collapse-active1" class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>

                                        <div class="collapse show" id="collapse-active1" style="">
                                            <hr>
                                            <table class="mb-0 table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Cereal
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Milk
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <i class="fas fa-file-alt mr-2"></i>Lunch
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <i data-toggle="collapse" href="#collapse-yactive2" class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>

                                        <div class="collapse" id="collapse-yactive2" style="">
                                            <hr>
                                            <table class="mb-0 table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Rice
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Egg
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <i class="fas fa-file-alt mr-2"></i>Dinner
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <i data-toggle="collapse" href="#collapse-yactive3" class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>

                                        <div class="collapse" id="collapse-yactive3" style="">
                                            <hr>
                                            <table class="mb-0 table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Rice
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Egg
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="bold">Today</h6>
                                <hr>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <i class="fas fa-file-alt mr-2"></i>Breakfast
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <i data-toggle="collapse" href="#collapse-todayactive1" class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>

                                        <div class="collapse" id="collapse-todayactive1" style="">
                                            <hr>
                                            <table class="mb-0 table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Rice
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Egg
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <i class="fas fa-file-alt mr-2"></i>Lunch
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <i data-toggle="collapse" href="#collapse-todayactive2" class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>

                                        <div class="collapse" id="collapse-todayactive2" style="">
                                            <hr>
                                            <table class="mb-0 table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Rice
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="font-12 color-gray">
                                                                <i class="fas fa-dot-circle"></i></i>&nbsp; Egg
                                                            </div>
                                                        </td>
                                                        <td>320 Kcal</td>
                                                        <td>185g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card card-chart mb-2">
                            <div class="card-body mb-0 pb-0">
                                <h4 class="card-title">Food Intake</h4>
                                <ul class="tabs-animated-shadow tabs-animated nav">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show active" id="tab-f-0" data-toggle="tab" href="#foodIntake-week" aria-selected="true">
                                            <span>Week</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-f-1" data-toggle="tab" href="#foodIntake-month" aria-selected="false">
                                            <span>Month</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-f-2" data-toggle="tab" href="#foodIntake-all" aria-selected="false">
                                            <span>All</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="foodIntake-week" role="tabpanel">
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="foodIntakeWeek"></div>
                                        </figure>
                                    </div>
                                    <div class="tab-pane show" id="foodIntake-month" role="tabpanel">
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="foodIntakeMonth"></div>
                                        </figure>
                                    </div>
                                    <div class="tab-pane show" id="foodIntake-all" role="tabpanel">
                                        <figure class="highcharts-figure pt-10 ml--20">
                                            <div id="foodIntakeAll"></div>
                                        </figure>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="fas fa-clock"></i> updated 4 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
                  
    </div>

    <div class="modal-box">
        <div class="modal-box_inner">
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
                            <img width="42" class="rounded-circle" src="./assets/images/avatars/3.png">
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
        Highcharts.chart('highcharts-container', {
            chart: {
                type: 'areaspline'
            },
            title: {
                text: 'Average Weight'
            },
            xAxis: {
                categories: [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                    'Sunday'
                ],
                plotBands: [{ 
                    from: 4.5,
                    to: 6.5,
                    color: 'rgba(68, 170, 213, .2)'
                }]
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: ' units'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.5
                }
            },
            series: [{
                name: 'This Week',
                data: [50, 52, 51, 49, 54, 56, 55]
            }, {
                name: 'Standard Weight',
                data: [49,50,51,50,50,51,49]
            }]
        });
        Highcharts.chart('bpChart', {
        	chart: {
                height: 200,
                width: 380
            },
            title: { text: '' },
        	legend:{ enabled:false },
            xAxis: {
                categories: [
                    'Sun',
                    'Mon',
                    'Tue',
                    'Wed',
                    'Thu',
                    'Fri',
                    'Sat'
                ],
                plotBands: [{ 
                    from: 4.5,
                    to: 6.5,
                    color: 'rgba(68, 170, 213, .2)'
                }]
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: 'units'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.5
                }
            },
            colors: ['#5DADE2', '#F0B27A'],
            exporting: { enabled: false },
            series: [{
                name: 'Systolic BP',
                data: [120, 152, 151, 149, 154, 156, 155]
            }, {
                name: 'Diastolic BP',
                data: [78,82,80,78,76,74,74]
            }]
        });
        Highcharts.chart('weightChart', {
            chart: {
            	type: 'column',
                height: 200,
                width: 380

            },
            title: {
                text: null
            },
            legend:{ enabled:false },
            xAxis: {
                categories: [
                    'Sun',
                    'Mon',
                    'Tue',
                    'Wed',
                    'Thu',
                    'Fri',
                    'Sat'
                ],
                plotBands: [{ 
                    from: 4.5,
                    to: 6.5,
                    color: 'rgba(68, 170, 213, .2)'
                }]
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: 'units'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.5
                }
            },
            exporting: { enabled: false },
            series: [{
                name: 'This Week',
                data: [50, 52, 51, 49, 54, 56, 55]
            }]
        });
        Highcharts.chart('glucoseChartWeek', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: [
                  'Sat',
                  'Sun',
                  'Mon',
                  'Tue',
                  'Wed',
                  'Thur',
                  'Fri',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                  text: 'Blood Glucose Level'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} mm/Hg</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                  pointPadding: 0.2,
                  borderWidth: 0
                }
            },
            series: [{
                name: 'Fasting',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6]

            },{
                name: '2 Hours',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4]

            }]
        });
        Highcharts.chart('glucoseChartMonth', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: [
                  '1',
                  '4',
                  '8',
                  '12',
                  '16',
                  '20',
                  '24',
                  '28',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                  text: 'Blood Glucose Level'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} mm/Hg</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                  pointPadding: 0.2,
                  borderWidth: 0
                }
            },
            series: [{
                name: 'Fasting',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5]

            },{
                name: '2 Hours',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4]

            }]
        });
        Highcharts.chart('glucoseChartAll', {
            chart: {
			    type: 'column'
			},
			title: {
			    text: ''
			},
			xAxis: {
			    categories: [
			      'Jan',
			      'Feb',
			      'Mar',
			      'Apr',
			      'May',
			      'Jun',
			      'Jul',
			      'Aug',
			      'Sep',
			      'Oct',
			      'Nov',
			      'Dec'
			    ],
			    crosshair: true
			},
			yAxis: {
			    min: 0,
			    title: {
			      text: 'Blood Glucose Level'
			    }
			},
			tooltip: {
			    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			      '<td style="padding:0"><b>{point.y:.1f} mm/Hg</b></td></tr>',
			    footerFormat: '</table>',
			    shared: true,
			    useHTML: true
			},
			plotOptions: {
			    column: {
			      pointPadding: 0.2,
			      borderWidth: 0
			    }
			},
			series: [{
			    name: 'Fasting',
			    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

			},{
			    name: '2 Hours',
			    data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

			}]
        });
        Highcharts.chart('foodIntakeWeek', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: [
                  'Sun',
                  'Mon',
                  'Tue',
                  'Wed',
                  'Thur',
                  'Fri',
                  'Sat',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                  text: 'Calorie'
                }
            },
            plotOptions: {
                column: {
                  pointPadding: 0.2,
                  borderWidth: 0
                }
            },
            series: [{
                name: 'Calorie',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6]

            }, {
                name: 'Carbohydrate',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0]

            }]
        });
        Highcharts.chart('foodIntakeMonth', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: [
                  '1',
                  '4',
                  '8',
                  '12',
                  '16',
                  '20',
                  '24',
                  '28',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                  text: 'Calorie'
                }
            },
            plotOptions: {
                column: {
                  pointPadding: 0.2,
                  borderWidth: 0
                }
            },
            series: [{
                name: 'Calorie',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5]

            }, {
                name: 'Carbohydrate',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3]

            }]
        });
        Highcharts.chart('foodIntakeAll', {
            chart: {
			    type: 'column'
			},
			title: {
			    text: ''
			},
			xAxis: {
			    categories: [
			      'Jan',
			      'Feb',
			      'Mar',
			      'Apr',
			      'May',
			      'Jun',
			      'Jul',
			      'Aug',
			      'Sep',
			      'Oct',
			      'Nov',
			      'Dec'
			    ],
			    crosshair: true
			},
			yAxis: {
			    min: 0,
			    title: {
			      text: 'Calorie'
			    }
			},
			plotOptions: {
			    column: {
			      pointPadding: 0.2,
			      borderWidth: 0
			    }
			},
			series: [{
			    name: 'Calorie',
			    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

			}, {
			    name: 'Carbohydrate',
			    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

			}]
        });
    </script>


    <!-- Datatables -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#blood-glucose-table').DataTable();
            $('#intakeTable').DataTable();
        } );
    </script>
<?php include('footer.php'); ?>
        