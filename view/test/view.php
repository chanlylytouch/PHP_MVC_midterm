<div class="container">
    <a href="index.php?action=add_form" class="btn btn-success">Add New</a>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Mark</th>
                        <th>Gender</th>
                        
                    </tr>
                </thead>
                <?php
                if (isset($data['information'])) {
                    foreach ($data['information'] as $rows) {

                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $rows['id'];?></td>
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['class'];?></td>
                                <td><?php echo $rows['mark'];?></td>
                                <td><?php echo $rows['sex'];?></td>
                                
                            </tr>
                        </tbody>
                <?php

                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>