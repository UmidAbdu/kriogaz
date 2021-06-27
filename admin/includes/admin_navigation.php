<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php">HOMEPAGE</a></li>



        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$_SESSION['admin_firstname']," ", $_SESSION['admin_lastname']?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-newspaper-o"></i> News <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="news.php">View all news</a>
                    </li>
                    <li>
                        <a href="news.php?source=add_news">Add news</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-briefcase"></i> Projects <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo1" class="collapse">
                    <li>
                        <a href="projects.php">View all projects</a>
                    </li>
                    <li>
                        <a href="projects.php?source=add_projects">Add projects</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-users"></i> Admins <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo2" class="collapse">
                    <li>
                        <a href="admins.php">View all admins</a>
                    </li>
                    <li>
                        <a href="admins.php?source=add_admin">Create new admin</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>