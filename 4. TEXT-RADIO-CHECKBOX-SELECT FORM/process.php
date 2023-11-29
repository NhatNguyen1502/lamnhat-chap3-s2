<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Subject</th>
        <th>Gender</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php echo $_POST['name']; ?></td>
            <td><?php echo $_POST['email']; ?></td>
            <td><?php echo $_POST['password']; ?></td>
            <td><?php echo $_POST['number']; ?></td>
            <td><?php echo $_POST['message']; ?></td>
            <td><?php echo $_POST['province']; ?></td>
            <td>
                <?php 
                    foreach ($_POST['subject'] as $subject)
                        echo $subject . ' | ';
                ?>
            </td>
            <td><?php echo $_POST['gender']; ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>