<body class="hold-transition sidebar-mini skin-green">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url(); ?>" class="logo bg-primary">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="<?= base_url(); ?>assets/img/rsi.png" class="img-fluid" width="50" height="50"></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <img src="<?= base_url(); ?>assets/img/logo.png" class="img-fluid"> 
                </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="<?= base_url(); ?>assets/AdminLTE/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu ">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="<?= base_url(); ?>assets/AdminLTE/#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if (
                                $this->ion_auth->user()->row()->foto == null 
                                )
                                : ?> 
                                <img src="<?= base_url(); ?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <?php else : ?>
                                    <img src="<?= base_url(); ?>uploads/ttd/<?= $this->ion_auth->user()->row()->id ?>/<?= $this->ion_auth->user()->row()->foto; ?>" class="user-image" alt="User Image"> 
                                <?php endif ?>
                                
                                <span class="hidden-xs"><?= $this->ion_auth->user()->row()->username; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                <?php if (
                                    $this->ion_auth->user()->row()->foto == null 
                                )
                                : ?> 
                                <img src="<?= base_url(); ?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <?php else : ?>
                                    <img src="<?= base_url(); ?>uploads/ttd/<?= $this->ion_auth->user()->row()->id ?>/<?= $this->ion_auth->user()->row()->foto; ?>" class="img-circle" alt="User Image"> 
                                <?php endif ?>
                                    <p>
                                        <?= $this->ion_auth->user()->row()->username; ?>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="pull-left">
                                        <a href="<?= base_url(); ?>profile" class="btn btn-default">Profile</a>
                                        </div>
                                    <div class="pull-right">
                                        <!-- <div class="row"></div> -->
                                        
                                        <a  href="<?= base_url(); ?>auth/logout" class="btn btn-default logout" >Logout</a>

                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <!-- <li>
                            <a href="<?= base_url(); ?>assets/AdminLTE/#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>