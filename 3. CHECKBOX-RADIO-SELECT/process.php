<?php require_once('./templates/header.php') ?>
<?php
// YOUR CODE HERE
?>
<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $_POST['province'] ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">

        <?php
        $src = $_POST['gender'] == "Male" ? 'https://img.freepik.com/premium-vector/avatar-portrait-young-caucasian-boy-man-round-frame-vector-cartoon-flat-illustration_551425-19.jpg' : 'https://thptnguyenquannho.edu.vn/wp-content/uploads/2022/12/1670630673_251_Anh-Avatar-Nu-Cuc-Dep-Cuc-Xinh-%E2%80%93-Hinh-Dai.jpg';
        ?>
        <img src="<?= $src ?>" class="rounded-circle w-25">
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        foreach ($_POST["subject"] as $subject) {
            echo "<span class=\"bg-primary rounded-3 text-white me-3 p-2\"> $subject</span>";
        }
        ?>
    </div>
</div>

<?php require_once('./templates/footer.php') ?>