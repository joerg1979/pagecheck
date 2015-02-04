<div class="container-fluid" id="cnt01_01" style="text-align: center; border: 1px black dashed">
            <div class="navbar-header">
              <!-- New -->  
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./index.php">HOME</a>
             <!-- END New -->  
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <!-- New -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login.php">LogIn</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Optionen <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="./myaccount.php">Mein Konto (username)</a></li>
                        <li><a href="./dashboard.php">Mein Dashboard</a></li>
                        <li class="divider"></li>
                        <p style="text-align: center">DEMO-ACCOUNT</p>
                        <li class="divider"></li>
                        <li><a href="./upgrade.php">Account erweitern</a></li>
                        <li class="divider"></li>
                        <li><a href="./logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search" action="./index.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Database Search" name="searchesQuery" id="searchesQuery">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <!-- END New -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    <!---- END of CONTAINER cnt01_01 ----> 
<?php