<?php include "header.php"; ?>

<?php

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
}

$id = $_GET['update_id'];

//updating the info
$show = $con->query("SELECT * FROM project WHERE id='$id'");
$show->execute();

$single = $show->fetch(PDO::FETCH_OBJ);





?>




<div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"> Hello <?php echo $username; ?> Edit project</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form form action="../handler.php?action=update-project" method="post">
                                        <div class="row g-3">
                                            <h3>Personal Details</h3>
                                        <div class="col-md-3">
                                        <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Fullname" aria-label="First name" value="<?php echo $single->name ?>" >
                                        </div>
                                        <div class="col-md-3">
                                        <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" value="<?php echo $single->email ?>"  name="email" placeholder="email" aria-label="Last name">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="Phone" class="form-label">Phone No.</label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $single->Phone ?>"  placeholder="Phone Number" aria-label="Last name">
                                        </div>

                                        <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" value="<?php echo $single->location ?>"  name="location" placeholder="Address" aria-label="Last name">
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row g-3">
                                                                                <h3>Business Details</h3>
                                        <div class="col-md-3">
                                        <label for="site_name" class="form-label">Site Name</label>
                                            <input type="text" class="form-control" value="<?php echo $single->site_name ?>" name="site_name" placeholder="Fullname" aria-label="First name">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="site_url" class="form-label">Site Url</label>
                                            <input type="text" class="form-control" value="<?php echo $single->site_url ?>" name="site_url" placeholder="email" aria-label="Last name">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="expires" class="form-label">expire Date</label>
                                            <input type="date" class="form-control" value="<?php echo $single->expires ?>"  name="expires" placeholder="expire Date" aria-label="Last name">
                                        </div>

                                        <div class="col-md-3">
                                        <label for="creation_date" class="form-label">creation_date</label>
                                            <input type="date" class="form-control" value="<?php echo $single->created ?>"  name="creation_date" placeholder="creation_date" aria-label="Last name">
                                        </div>
                                        </div>
                                                                                        <hr >
                                                                                        <div class="row g-3">
                                                                                <h3>Website Login</h3>
                                        <div class="col-md-3">
                                        <label for="site_name" class="form-label">Site Password</label>
                                            <input type="text" class="form-control" value="<?php echo $single->site_pass ?>"  name="site_pass" placeholder="site password" aria-label="First name">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="site_url" class="form-label">Site username</label>
                                            <input type="text" class="form-control" value="<?php echo $single->site_username ?>" name="site_username" placeholder=" siteusername" aria-label="Last name">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="site_email" class="form-label">site_email</label>
                                            <input type="text" class="form-control" value="<?php echo $single->site_email ?>" name="site_email" placeholder="site email" aria-label="Last name">
                                        </div>

                                        <div class="col-md-3">
                                        <label for="creation_date" class="form-label">status</label>
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="status" placeholder="status" aria-label="Last name">
                                            <option selected>Select</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="" style="text-align: center">
                                        <button type="submit" name="addProject" class="btn btn-primary my-1">SAVE</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


















 <?php include "footer.php";?>