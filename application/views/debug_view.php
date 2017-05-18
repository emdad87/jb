<!-- Header -->
<?php $this->load->view('template/header'); ?>

<body>
    <div class="container">
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">JB Pages</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><a href="<?php echo site_url('welcome/showLanding'); ?>">Landing</a></li>
                    <li><a href="<?php echo site_url('welcome/showUserDash'); ?>">User Dashboard</a></li>
                    <li><a href="<?php echo site_url('welcome/showUserProfile'); ?>">User Profile</a></li>
                    <li><a href="<?php echo site_url('welcome/showUserProfileEdit'); ?>">Edit Profile</a></li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- jQuery -->
    <!-- <script src="<?php /*echo base_url()*/ ?>assets/js/jquery.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <script src="<?php echo base_url() ?>assets/js/jbRegister.js"></script>

</body>

</html>
