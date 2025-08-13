<?php include "header.php";



//display list of projects 
$pro = $con->query("SELECT * FROM project");
$pro->execute();
$projects = $pro->fetchAll(PDO::FETCH_OBJ);


?>
<!-- Card Body -->
<div class="card-body">
                                    
                                        <div class="row g-3">
                                            
                                        <div class="col-md-12">
                                        <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">SITENAME</th>
                                                            <th scope="col">USER EMAIL</th>
                                                            <th scope="col">SEND E-MAIL</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php  foreach($projects as $project): ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $project->id ?></th>
                                                            <td><?php echo $project->name ?></td>
                                                            <td><?php echo $project->email ?></td>
                                                            <td><a href="./sendmail.php?id=<?php echo $project->id ?>"  class="btn btn-primary">SEND MAIL</td>
                                                            
                                    
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
<?php include "footer.php"; ?>