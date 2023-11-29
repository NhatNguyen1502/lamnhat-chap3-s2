<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
?>
    <div class="card">
        
        <div class="card-body">
            <?php
                foreach ($_POST['subject'] as $subject){
                    $color = $colors[mt_rand(0,6)];
                    echo  "<span style='background-color: $subject;' class='bg-$color rounded-3 text-white me-3 p-2'>$subject</span>";
                }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>