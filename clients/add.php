<?php include "header.php"; ?>

<?php

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
}

?>




<div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"> Hello <?php echo $username; ?> Mark your Attendance</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form form action="../handler.php?action=add-project" method="post">
                                        <!-- <div class="row g-3">
                                            <h3>Personal Details</h3>
                                        <div class="col-md-3">
                                        <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Fullname" aria-label="First name">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="email" aria-label="Last name">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="Phone" class="form-label">Phone No.</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" aria-label="Last name">
                                        </div> -->

                                        
                                        <div class="col-md-3">
                                        <label for="expires" class="form-label">Time</label>
                                            <input type="date" class="form-control" name="expires" placeholder="Time" aria-label="Last name">
                                        </div>

                                        <div class="col-md-3">
                                        <label for="creation_date" class="form-label">Date</label>
                                            <input type="date" class="form-control" name="creation_date" placeholder="Date" aria-label="Last name">
                                        </div>
                                        </div>
                                </div>                                           
                                        <div class="" style="text-align: center">
                                        <button type="submit" name="addProject" class="btn btn-primary my-1">Sign in</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


















 <?php include "footer.php";?>