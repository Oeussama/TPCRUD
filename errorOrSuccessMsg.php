<?php

if (isset($_SESSION['success'])) { 
    ?>
       <div class="alert alert-success mt-3 mx-2" role="alert">
       <?php echo $_SESSION['success']; ?>
       </div>
    <?php
    unset($_SESSION['success']);
    }

if (isset($_SESSION['error'])) { 
        ?>
           <div class="alert alert-danger mt-3 mx-3" role="alert">
           <?php echo $_SESSION['error']; ?>
           </div>
        <?php
        unset($_SESSION['error']);
}  
?>