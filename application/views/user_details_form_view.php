<!-- Header -->
<?php $this->load->view('template/header'); ?>

<body id="logged_in_body">

    <!-- Navigation -->
    <?php $this->load->view('template/navbar'); ?>

    <!-- Page Content -->
    <div class="container">

        <div class=" page-header jb-page-header">
            <div class="col-md-10 col-md-offset-1">
                <div class="progress progress-line">
                    <div class="progress-bar progress-animate" data-level="0" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        <!-- <span class="sr-only">70% Complete</span> -->
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

        <div class="row">



            <div class="col-md-2">
            </div>
            


            <div class="col-md-8">
                <!-- Physique Panel -->
                <div class="panel panel-default">
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
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Background</h4>
                    </div>
                    <div class="panel-body basic-info">
                        <ul class="list-group row">
                            <li class="list-group-item"><span>Community</span>: </li>
                            <li class="list-group-item"><span>Languages Spoken</span>: </li>
                            <li class="list-group-item"><span>Country Grew Up In</span>: </li>
                        </ul>
                    </div>
                </div>  -->
                <!-- EO Background Panel -->

                <!-- Beliefs Panel -->
                <!-- <div class="panel panel-default">
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
                </div> -->
                <!-- EO Beliefs Panel --> 
                
                <!-- Family Panel -->
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Family</h4>
                    </div>
                    <div class="panel-body basic-info">
                        <ul class="list-group row">
                            <li class="list-group-item"><span>Father's Profession</span>: </li>
                            <li class="list-group-item"><span>Mother's Profession</span>: </li>
                            4 dropdowns for 1. brother and 2. sister 3&4. [x] of whom are married
                            <li class="list-group-item"><span>Number of Siblings</span>: </li>
                        </ul>
                    </div>
                </div> -->
                <!-- EO Family Panel -->
                
                <!-- Education & Career Panel -->
                <!-- <div class="panel panel-default">
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
                </div> -->
                <!-- Education & Career Panel -->

                <!-- Physique Panel -->
                <!-- <div class="panel panel-default">
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
                </div> -->
                <!-- EO Physique Panel -->      

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a >&larr; Previous</a>
                    </li>
                    <li class="next">
                        <a >Next &rarr;</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
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
