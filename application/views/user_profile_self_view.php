<!-- Header -->
<?php $this->load->view('template/header'); ?>

<body id="logged_in_body">

    <!-- Navigation -->
    <?php $this->load->view('template/navbar'); ?>
    
    
    <header class="user-header">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left" src="<?php echo $photo; ?>" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name"><?php echo $first_name." ".$last_name; ?></h1>
                <h2 class="desc">Connect with him/her?</h2>  
                <button type="button" class="btn btn-success btn-lg">Yes</button>
                <button type="button" class="btn btn-primary btn-lg">MayBe</button>
                <button type="button" class="btn btn-danger btn-lg">No</button> 
            </div><!--//profileeeee-->
            <!-- <a class="btn btn-cta-primary pull-right" href="http://themes.3rdwavemedia.com/" target="_blank"><i class="fa fa-paper-plane"></i> Contact Me</a> -->              
        </div><!--//container-->
    </header><!--//header-->

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- About -->
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right border-left"><h4><a href="#"><i class="fa fa-pencil-square-o "></i> Edit </a></h4></div>
                        <h4>Basic Info &amp; Lifestyle</h4>
                    </div>
                    <!-- <div class="panel-heading pull-right">
                        <a class="" href="">Edit</a>
                    </div> -->
                    <div class="panel-body basic-info">
                        <ul>
                            <li><span>Age/ Height</span>: <?php echo $age; ?></li>
                            <li><span>Gender</span>: <?php echo $gender; ?></li>
                            <li><span>Star Sign </span>: <?php echo $star_sign; ?></li>
                            <li><span>Marital Status </span>: <?php echo $marital_status; ?></li> 
                            <li><span>Religion </span>: <?php echo $religion; ?></li>
                            <li><span>Mother Tongue </span>: <?php echo $mother_tongue; ?></li>
                            <li><span>Lives in</span>: <?php echo $location_city.",".$location_country;?></li>
                            <li><span>Grew up in Country </span>: <?php echo $grew_up_country; ?></li>
                            <li><span>Profession </span>: <?php echo $profession; ?></li>
                            <li><span>Diet </span>: <?php echo $diet; ?></li>
                            <li><span>Drinker / Smoker </span>: <?php echo $drink."/".$smoke; ?></li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>About</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            Design, build, test, and prototype using Bootstrap in real-time from your Web browser. Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap. Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository. 
                        </p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Background</h4>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Community</li>
                            <li>Religion + details</li>
                            <li>Can Speak Languages</li>
                            <li>Lives in City, State, Country</li>
                            <li>Grew up in Country</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Family</h4>
                    </div>
                    <div class="panel-body">
                        <p><img src="http://placehold.it/100x100" class="img-circle "> <a href="#">The Bootstrap Playground</a></p>
                        <div class="clearfix"></div>
                        <hr>
                        <p>
                            Design, build, test, and prototype using Bootstrap in real-time from your Web browser. Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap. Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository. 
                        </p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Interests &amp; Likings</h4>
                    </div>
                    <div class="panel-body">
                        <p><img src="http://placehold.it/100x100" class="img-circle "> <a href="#">The Bootstrap Playground</a></p>
                        <div class="clearfix"></div>
                        <hr>
                        <p>
                            Design, build, test, and prototype using Bootstrap in real-time from your Web browser. Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap. Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository. 
                        </p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Education &amp; Career</h4>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Community</li>
                            <li>Religion + details</li>
                            <li>Can Speak Languages</li>
                            <li>Lives in City, State, Country</li>
                            <li>Grew up in Country</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Partner Preferences</h4>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Community</li>
                            <li>Religion + details</li>
                            <li>Can Speak Languages</li>
                            <li>Lives in City, State, Country</li>
                            <li>Grew up in Country</li>
                        </ul>
                    </div>
                </div>

                

                <!-- <div class="well">
                           First Blog Post
                           <h2>
                               <a href="#">Blog Post Title</a>
                           </h2>
                           <p class="lead">
                               by <a href="index.php">Start Bootstrap</a>
                           </p>
                           <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                           <hr>
                           <a href="blog-post.html">
                               <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
                           </a>
                           <hr>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                           <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
                       
                           <hr>
                       </div>        -->       

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

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
    <script src="<?php echo base_url() ?>assets/js/jbProfile.js"></script>

</body>

</html>
