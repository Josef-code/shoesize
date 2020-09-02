<?php require 'header.php' ?>
<body>
        <!-- <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body text-secondary">
            <h5 class="card-title">Secondary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div> -->
        <div class="container headholder">
        <?php
            function validation(){
                $lengthcheck = $_POST['length'];
                if (is_numeric($lengthcheck)) {
                    echo '<h1>CORRECT!</h1>';
                } else {
                    echo '<div class="alert alert-danger" role="alert"><h3>Sorry system cannot validate your request. Please use a number instead</h3></div>';
                }
            }
            validation(); //check to validate if the user input is a number not a string

           
        ?>

        </div>
        
</body>