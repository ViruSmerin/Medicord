<?php include('header.php'); ?>
	<div class="app-main__inner">
        <div class="app-page-title pt-18">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <div class="mr-2 btn-group">
                            <h5 style="font-size: 18px;font-weight: 700;padding-bottom: 10px;">Add New Encounter</h5>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light" href="./gdm_new.php">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            Back to Patient Detail
                        </a>
                    </div>
                </div>  
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Visit Details</h5>
                        <form>
                            <div class="row">

                                <div class="col-md-12 mb-3 form-group">
                                    <label for="exampleSelect" class="">Visit Category</label>
                                    <select name="select" id="exampleSelect" class="form-control">
                                        <option>Select One</option>
                                        <option>New Appointment</option>
                                        <option>Scheduled Appointment</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3 form-group">
                                    <label for="exampleSelect" class="">Sensitivity</label>
                                    <select name="select" id="exampleSelect" class="form-control">
                                        <option>Select One</option>
                                        <option>New Appointment</option>
                                        <option>Scheduled Appointment</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3 form-group">
                                    <label for="article-expiry" class="">Date of Service</label>
                                    <input name="article-expiry" id="article-expiry" type="date" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3 form-group">
                                    <label for="article-expiry" class="">Onset / Hospital Date</label>
                                    <input name="article-expiry" id="article-expiry" type="date" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3 form-group">
                                    <label for="exampleSelect" class="">Encounter Provider</label>
                                    <select name="select" id="exampleSelect" class="form-control">
                                        <option>Select One</option>
                                        <option>New Appointment</option>
                                        <option>Scheduled Appointment</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3 form-group">
                                    <label for="exampleSelect" class="">Class</label>
                                    <select name="select" id="exampleSelect" class="form-control">
                                        <option>Outpatient</option>
                                        <option>Emergency Department</option>
                                        <option>Out In Field</option>
                                        <option>Home Health</option>
                                        <option>Inpatient Encounter</option>
                                        <option>Virtual Encounter</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3 form-group">
                                    <label for="exampleSelect" class="">Facility</label>
                                    <select name="select" id="exampleSelect" class="form-control">
                                        <option>Select One</option>
                                        <option>New Appointment</option>
                                        <option>Scheduled Appointment</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Visit Recordings</h5>
                        <form class="">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="article-description" class="">Reason For Visit</label>
                                    <textarea name="article-description" id="editor" class="form-control" placeholder="Enter Description" required=""></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="article-description" class="">Link / Add Issue to Current Visit</label>
                                    <textarea name="article-description" id="editor" class="form-control" placeholder="Enter Description" required=""></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-right mt--10">
                <button class="mt-1 btn btn-primary pl-pr-40">SAVE AND CONTINUE</button>
            </div>
        </div>

    </div>




<?php include('footer.php'); ?>
