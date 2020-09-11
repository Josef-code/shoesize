<?php require 'header.php' ?>
<body>
    <div class="container  headholder">
            <h4>Shoe Size Conversion Calculator. You can generate the perfect shoe size for your foot</h4>
        <div>
            <div class="dbsection">
                    <button class="formarea">Get Started</button>
<!--                 <div class="formarea">
                    GET STARTED
                </div> -->
                    <button class="helparea">Measurement Guide</button>
<!--                 <div class="helparea"> 
                     MEASUREMENT GUIDE
                </div> -->
            </div>
        </div>
            <hr/>
        <div id="content">
            <div class="form">
                        <form action="results.php" method="post">
                            <label for="gender" name="gender"><h5>Gender</h5></label>
                            <select id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                            <label for="length" name="length"><h5>Foot Length in cm</h5></label>
                            <input type="text" id="length" name="length" placeholder="Input your feet length in cm" required>
                            

                            <input type="submit" value="submit">
                        </form>  
            </div>
            <div class="help">
                <h4>How to measure</h4>
                <ol id="desc">
                    <img src="photos/foot.png" width="100%" height="90%">
                    <li>To measure your feet stand on a level floor with the back of your heels against a straight edge or a wall</li>
                    <li>Measure your foot length by placing a ruler flat on the floor straight alongside the inside of your foot from your heal to your toes</li>
                    <li>Take measurement ( in centimeters ) from the ruler where the flat edge crosses. This is your foot measurement.</li>
                    <li>If your foot measurement is halfway between sizez, select the larger size.</li>
                    <li>Remember to measure both feet, making a note of the longest feet</li>
                </ol>
            </div>
        </div>
    </div>
        <script> //     this secction controls the hide and show sections of the interface.
        $(document).ready(function(){
            $(".form").hide();
            $(".formarea").click(function(){
                // $("#content").show();
                $(".form").fadeIn();
                $(".help").fadeOut();
            })
            $(".help").hide();
            $(".helparea").click(function(){
                // $("#content").show();
                $(".help").fadeIn();
                $(".form").fadeOut();
            });
        });
           
        </script>


</body>
</html>
                       