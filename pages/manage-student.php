<?php include 'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Manage Student</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $index => $student){?>
                            <tr>
                                <td><?php echo ++$index; ?></td>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['mobile']; ?></td>
                                <td><img src="<?php echo $student['image']; ?>" alt="" class="img-fluid" style="height: 88px">
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'include/footer.php' ?>
