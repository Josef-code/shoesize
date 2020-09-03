<?php require 'header.php' ?>
<body>
        <div class="container headholder">
            <div class="messagearea">
            <?php
                function validation(){
                    $lengthcheck = $_POST['length'];
                    if (is_numeric($lengthcheck)) {
                        return result();
                        // echo '<h1>CORRECT!</h1>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert"><h3>Sorry system cannot validate your request. Please use a number instead</h3></div>';
                    }
                }
                validation(); //check to validate if the user input is a number not a string

                function result(){
                         $length = $_POST['length'];
                         switch ($length) {
                            case '23':
                                echo "okay thats nice";
                                break;
                            
                            default:
                                echo "not working well";
                                break;
                        };
                }
               
            ?>
            </div>
        </div>

        <script>
        $(document).ready(function(){
            $('.messagearea').slideLeft();
        })    
        </script>
</body>