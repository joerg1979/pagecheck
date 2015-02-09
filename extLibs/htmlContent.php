<!-- Begin CONTAINER cnt01   -->
<!-- Begin of TOP-NAVIGATION Area --> 
<?php include_once PROJECT_DOCUMENT_ROOT.'/extLibs/cnt01.php';?>
<!-- END of TOP-NAVIGATION --> 
<!-- END OF CONTAINER cnt01  --> 

<!-- Begin CONTAINER cnt02   -->
<!-- Begin of LEFT-NAVIGATION Area -->
<div class="container" id="cnt02" style="text-align: center; border: 1px black solid"">
    <!--Begin of section ROW-->
    <section class="row" style="text-align: center; border: 1px red solid">
        <aside class="col col-md-3">
            <hr />
            <h2>Navigation</h2>
            <hr />
                <p>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active"><a href="./index.php">Home</a></li>
                        <li role="presentation"><a href="./index.php">My Account</a></li>
                         <li role="presentation"><a href="./index.php">Dashboard</a></li>
                        <li role="presentation"><a href="./index.php">Something else</a></li>
                        <li role="presentation"><a href="./index.php">Informations</a></li>
                         <li role="presentation"><a href="./index.php">Descriptions</a></li>
                        <li role="presentation"><a href="./index.php">User Settings</a></li>
                        <li role="presentation"><a href="./index.php">Other Links</a></li>
                    
                    </ul>
                </p>
                <hr />
            
        </aside><!--ende LEFT NAVIGATION -->
        <!-- END of LEFT-NAVIGATION Area --> 
        <!---- Begin CONTAINER cnt02_01 (included)---->
       <?php
            include_once PROJECT_DOCUMENT_ROOT.'/extLibs/cnt02_01.php';
            include_once PROJECT_DOCUMENT_ROOT.'/extLibs/inc.PDOPreparedStatement.php';
            include_once PROJECT_DOCUMENT_ROOT.'/extLibs/cnt02_01_end.php';
        ?>
        <!---- END CONTAINER cnt02_01 (included)---->
    </section><!--/.section row -->   
</div><!-- /.container cnt02 -->
 <!-- END of CONTAINER cnt02 --> 
 <!-- END of Content Area-->   

 <!-- Begin CONTAINER cnt03 -->  
 <!-- Beginnn Footer Area-->
    <!---- Begin CONTAINER cnt03 (included)---->
        <?php include_once PROJECT_DOCUMENT_ROOT.'/extLibs/cnt03.php';?>
    <!---- END CONTAINER cnt02_01 (included)---->       