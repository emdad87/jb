<!-- Header -->
<?php $this->load->view('template/header'); ?>

<body id="logged_in_body">

    <!-- Navigation -->
    <?php $this->load->view('template/navbar'); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="page-header jb-page-header">
            <div class="col-md-10 col-md-offset-1">
                <div class="progress progress-line">
                    <div class="progress-bar progress-animate" data-level="0" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        <div class="progress-checkpoint" style="left: 0%;">
                        <div>0%</div>
                    </div>
                    <div class="progress-checkpoint" style="left: 20%;">
                        <div>20%</div>
                    </div>
                    <div class="progress-checkpoint" style="left: 40%;">
                        <div>40%</div>
                    </div>
                    <div class="progress-checkpoint" style="left: 60%;">
                        <div>60%</div>
                    </div>
                    <div class="progress-checkpoint" style="left: 80%;">
                        <div>80%</div>
                    </div>
                    <div class="progress-checkpoint" style="left: 100%;">
                        <div>100%</div>
                    </div>
                    </div>
                </div>             
            </div>
        </div>
        
        <!-- <div class="row stacked">
        
        </div> -->

        <div class="row stacked-on-top">
            <div class="col-md-8 col-md-offset-2">

                <!-- Left Navigation Button -->
                <button type="button" class="btn btn-default dead-center previous">&larr;</button>
                <!-- Right Navigation Button -->
                <button type="button" class="btn btn-default dead-center next">&rarr;</button>

                <!-- Physique Panel -->
                <div class="panel panel-default data-panel" id="physique-panel">
                    <div class="panel-heading">
                        <h4>Physique</h4>
                    </div>
                    <div class="panel-body basic-info">
                        <ul class="list-group row">
                            <li class="list-group-item">Build </li>
                            <li class="list-group-item">Complexion </li>
                            <li class="list-group-item">Height </li>
                            <li class="list-group-item">Weight </li>
                            <li class="list-group-item">Disabilities (if any)</li>
                        </ul>
                    </div>
                </div>
                <!-- EO Physique Panel -->

                <!-- Background Panel -->                
                <div class="panel panel-default data-panel" id="background-panel">
                    <div class="panel-heading">
                        <h4>Background</h4>
                    </div>
                    <div class="panel-body basic-info" id="background-panel">
                        <ul class="list-group row">
                            <li class="list-group-item"><span>Community</span>: </li>
                            <li class="list-group-item"><span>Languages Spoken</span>: </li>
                            <li class="list-group-item"><span>Country Grew Up In</span>: </li>
                        </ul>
                    </div>
                </div>
                <!-- EO Background Panel -->

                <!-- Beliefs Panel -->
                <div class="panel panel-default data-panel" id="beliefs-panel">
                    <div class="panel-heading">
                        <h4>Beliefs</h4>
                    </div>
                    <div class="panel-body basic-info">
                        <ul class="list-group row">
                            <li class="list-group-item"><span>Religion</span>: </li>
                            <li class="list-group-item"><span>Sect</span>: </li>
                            <li class="list-group-item"><span>Views</span>: </li>
                            <li class="list-group-item"><span>Practise</span>: </li>
                        </ul>
                    </div>
                </div>
                <!-- EO Beliefs Panel --> 
                
                <!-- Family Panel -->
                <div class="panel panel-default data-panel" id="family-panel">
                    <div class="panel-heading">
                        <h4>Family</h4>
                    </div>
                    <div class="panel-body basic-info">
                        <ul class="list-group row">
                            <li class="list-group-item"><span>Father's Profession</span>: </li>
                            <li class="list-group-item"><span>Mother's Profession</span>: </li>
                            <!-- 4 dropdowns for 1. brother and 2. sister 3&4. [x] of whom are married -->
                            <li class="list-group-item"><span>Number of Siblings</span>: </li>
                        </ul>
                    </div>
                </div>
                <!-- EO Family Panel -->
                
                <!-- Education & Career Panel -->
                <div class="panel panel-default data-panel" id="education-panel">
                    <div class="panel-heading">
                        <h4>Education &amp; Career</h4>
                    </div>
                    <div class="panel-body basic-info">
                        <ul class="list-group row">
                            <li class="list-group-item">Currently employed as: </li>
                            <li class="list-group-item">Company name: </li>
                            <li class="list-group-item">Highest achieved qualification: </li>
                            <li class="list-group-item">High school: </li>
                        </ul>
                    </div>
                </div>
                <!-- Education & Career Panel -->

                <!-- Physique Panel -->
                <div class="panel panel-default data-panel" id="partner-panel">
                    <div class="panel-heading">
                        <h4>Partner Preferences</h4>
                    </div>
                    <div class="panel-body basic-info">
                        <ul class="list-group row">
                            <li class="list-group-item">Build </li>
                            <li class="list-group-item">Complexion </li>
                            <li class="list-group-item">Height </li>
                            <li class="list-group-item">Weight </li>
                            <li class="list-group-item">Disabilities (if any)</li>
                        </ul>
                    </div>
                </div>
                <!-- EO Physique Panel -->      

                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php $this->load->view('template/footer'); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/user_details_form_js.js"></script>

</body>

</html>
