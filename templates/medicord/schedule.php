<?php include('header.php'); ?>
<style type="text/css">
    .fa{
        padding-right: 10px !important;
    }
</style>
    <div class="app-main__inner">
        <div class="app-page-title pt-0 pb-0">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <h5 style="margin-top:16px;font-size: 18px;font-weight: 700;padding-bottom: 10px;">Schedule</h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="page-title-actions pt-20">
                    <div class="d-inline-block">
                        <a href="./new_patient.php" class="mb-2 mr-2 btn btn-primary color-white">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-plus"></i>
                            </span>
                            Add New Appointment
                        </a>
                    </div>
                </div>    
            </div>
        </div>
                         
        <div class="row">
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="widget widget-reminder">
                    <div class="card-header h-">
                        <h6>Upcoming appointments</h6>
                        <a class="ml-auto" href="#"><i class="fa fa-ellipsis-h right" aria-hidden="true"></i></a>
                    </div>
                    <div class="widget-reminder-header">TODAY, NOV 4</div>
                    <div class="widget-reminder-container">
                        <div class="widget-reminder-time">
                            09:00<br />
                            12:00
                        </div>
                        <div class="widget-reminder-divider bg-success"></div>
                        <div class="widget-reminder-content">
                            <h4 class="widget-title">Meeting with HR</h4>
                            <div class="widget-desc"><i class="fa fa-map-pin"></i> Conference Room</div>
                        </div>
                    </div>
                    <div class="widget-reminder-container">
                        <div class="widget-reminder-time">
                            20:00<br />
                            23:00
                        </div>
                        <div class="widget-reminder-divider bg-primary"></div>
                        <div class="widget-reminder-content">
                            <h4 class="widget-title">Dinner with Richard</h4>
                            <div class="widget-desc"><i class="fa fa-map-pin"></i> Tom's Too Restaurant</div>
                            <div class="m-t-15">
                                <a href="#" class="pull-right">Contact</a>
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="16" class="img-circle pull-left m-r-5" alt="" /> Richard Leong
                            </div>
                        </div>
                    </div>
                    <div class="widget-reminder-header">TOMORROW, NOV 5</div>
                    <div class="widget-reminder-container">
                        <div class="widget-reminder-time">All day</div>
                        <div class="widget-reminder-divider bg-purple"></div>
                        <div class="widget-reminder-content">
                            <h4 class="widget-title"><i class="fa fa-gift text-purple"></i> Terry Birthday</h4>
                        </div>
                    </div>
                    <div class="widget-reminder-container">
                        <div class="widget-reminder-time">
                            00:00<br />
                            00:30
                        </div>
                        <div class="widget-reminder-divider bg-danger"></div>
                        <div class="widget-reminder-content">
                            <h4 class="widget-title">Server Maintenance</h4>
                            <div class="widget-desc"><i class="ti-pin"></i> Data Centre</div>
                        </div>
                    </div>
                </div>
                <div class="upcoming-appointments card mb-3">
                    <div class="card-header">
                        <h6>Appointment Requests</h6>
                        <a class="ml-auto" href="#"><i class="fa fa-ellipsis-h right" aria-hidden="true"></i></a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="appointment">
                            <img class="image" src="https://i.pravatar.cc/150?img=45">
                            <span class="name">Anthony Wagner</span>
                            <span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> 22/07/2018</span>
                            <span class="time"><i class="fas fa-clock"></i> 2:30 PM</span>
                            <a href="#" class="check"><i class="fas fa-check-circle" aria-hidden="true"></i></a>
                            <a href="#" class="times"><i class="fas fa-times-circle" aria-hidden="true"></i></a>
                        </div>
                        <div class="appointment">
                            <img class="image gray" src="https://i.pravatar.cc/150?img=1">
                            <span class="name">Caroline Fields</span>
                            <span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> 22/07/2018</span>
                            <span class="time"><i class="fas fa-clock"></i> 2:30 PM</span>
                            <a href="#" class="check"><i class="fas fa-check-circle" aria-hidden="true"></i></a>
                            <a href="#" class="times"><i class="fas fa-times-circle" aria-hidden="true"></i></a>
                        </div>
                        <div class="appointment">
                            <img class="image red" src="https://i.pravatar.cc/150?img=30">
                            <span class="name">Natalie Smith</span>
                            <span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> 22/07/2018</span>
                            <span class="time"><i class="fas fa-clock"></i> 2:30 PM</span>
                            <a href="#" class="check"><i class="fas fa-check-circle" aria-hidden="true"></i></a>
                            <a href="#" class="times"><i class="fas fa-times-circle" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>
