
<?php include "header.php"; ?>

<?php 


//display list of projects 
$pro = $con->query("SELECT * FROM project");
$pro->execute();
$projects = $pro->fetchAll(PDO::FETCH_OBJ);

//count the number of site 
$active = $con->query("SELECT count(*) as active FROM project");
$active->execute();
$active_no = $active->fetch(PDO::FETCH_OBJ);

//count the number of active site 
$active_status = $con->query("SELECT count(*) as active_status FROM project WHERE status='Active'");
$active_status->execute();
$active_stat = $active_status->fetch(PDO::FETCH_OBJ)

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                total Number of sites</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $active_no->active?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Active site</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $active_stat->active_status?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                            
                                   
                                      

                        
<!-- Card Body -->
<div class="card-body">
                                    
                                        <div class="row g-3">
                                            
                                        <div class="col-md-12">
                                        <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">SITENAME</th>
                                                            <th scope="col">VIEW</th>
                                                            <th scope="col">EDIT</th>
                                                            <!-- <th scope="col">DELETE </th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php  foreach($projects as $project): ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $project->id ?></th>
                                                            <td><?php echo $project->name ?></td>
                                                            <td><a href="./view.php?id=<?php echo $project->id ?>"  class="btn btn-primary">VIEW</td>
                                                            <td><a href="./edit.php?update_id=<?php echo $project->id ?>"  class="btn btn-success">EDIT</td>
                                                            <td><a href="./print.php?id=<?php echo $project->id ?>"  class="btn btn-primary">PRINT</td>
                                                            <td><a href="./print.php?id=<?php echo $project->id ?>"  class="btn btn-danger">DELETE</td>
                                                            <!-- <td><a href="#" class="btn btn-danger btn-circle btn-sm">
                                                                <i class="fas fa-trash"></i></td> -->
                                                        </tr>
                                                        <?php endforeach;?>
                                                    </tbody>
                                                </table>
                                        </div>
                                        
                                        </div>
                                    
                                </div>
                    

            <!-- Footer -->
<?php include "footer.php";