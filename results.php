<?php require 'header.php' ?>
<body onload="loadin()" style="margin:0;">

        <div id="loader"></div>

        <div class="container headholder animate-bottom" id="myDiv">
            <div class="messagearea">
            <?php
                function validation(){      //This function checks for user errors on the input field
                    $lengthcheck = $_POST['length'];
                    if (is_numeric($lengthcheck)) {
                        return result();
                    } else {
                        echo '<div class="alert alert-danger" role="alert"><h4>Sorry system cannot validate your request. Please use a number instead</h4></div>';
                    }
                }
                validation(); //check to validate if the user input is a number not a string

                function result(){          // This function stores user results and shoesizes
                         $length = $_POST['length'];
                         switch ($length) {
                            case 23 :
                            echo '<div class="alert alert-dark msg" role="alert">
                                    <h1>39</h1><p>is your shoe size</p>
                                </div>';
                            break;

                            case 24:
                            echo '<div class="alert alert-dark msg" role="alert">
                                <h1>40</h1><p>is your shoe size</p>
                            </div>';
                            break;

                            case 25:
                            echo '<div class="alert alert-dark msg" role="alert">
                            <h1>41</h1><p>is your shoe size</p>
                        </div>';
                            break;

                            case 26:
                            echo '<div class="alert alert-dark msg" role="alert">
                            <h1>42</h1><p>is your shoe size</p>
                        </div>'; 
                            break;
                            
                            case 27:
                            echo '<div class="alert alert-dark msg" role="alert">
                            <h1>43</h1><p>is your shoe size</p>
                        </div>'; 
                            break;

                            case 28:
                            echo '<div class="alert alert-dark msg" role="alert">
                            <h1>44 - 45</h1><p>is your shoe size</p>
                        </div>'; 
                            break;

                            case 29:
                            echo '<div class="alert alert-dark msg" role="alert">
                            <h1>47</h1><p>is your shoe size</p>
                        </div>'; 
                            break;

                            case 30:
                            echo '<div class="alert alert-dark msg" role="alert">
                            <h1>48</h1><p>is your shoe size</p>
                        </div>'; 
                            break;

                            case 31:
                            echo '<div class="alert alert-dark msg" role="alert">
                            <h1>49</h1><p>is your shoe size</p>
                        </div>'; 
                            break;
                            default:
                                echo "Oops!!! sorry cannot validate your shoe size. Try another measurement!";
                                break;
                        };
                }
               
            ?>
            </div>
        </div>

                <script>
                var myVar;

                function loadin() {
                  myVar = setTimeout(showPage, 2000);
                }

                function showPage() {
                  document.getElementById("loader").style.display = "none";
                  document.getElementById("myDiv").style.display = "block";
                }   
                </script>
</body>