<?php require 'header.php' ?>
<body>
    <div class="container  headholder">
            <h3>Shoe Size Conversion Calculator. You can generate the perfect shoe size for your foot</h3>
        <div>
            <div class="dbsection">
                <div class="formarea">
                    GET STARTED
                </div>
                <div class="helparea">
                     MEASUREMENT GUIDE
                </div>
            </div>

        </div>
            <hr/>
        <div id="content">
            <div class="form">
                        <form action="results.php" method="post">
                            <label for="gender" name="gender"><h3>Gender</h3></label>
                            <select id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                            <label for="length" name="length"><h3>Length of Foot in cm</h3></label>
                            <input type="text" id="length" name="length" placeholder="Input your feet length in centimeters" required>
                            

                            <input type="submit" value="submit">
                        </form>  
            </div>
            <div class="help">
                <h2>How to measure</h2>
                <ol id="desc">
                    <li>To measure your feet stand on a level floor with the back of your heels against a straight edge or a wall</li>
                    <li>Remember to measure both feet, making a note of the longest feet</li>
                    <li>Measure your foot length by placing a ruler flat on the floor straight alongside the inside of your foot from your heal to your toes</li>
                    <li>Place an object with a flat edge straight across your toes with the edge touching the tip of your longest toe. Take measurement ( in centimeters ) from the ruler where the flat edge crosses. This is your foot measurement.</li>
                    <li>If your foot measurement is halfway between sizez, select the larger size.</li>
                </ol>
            </div>
        </div>
    </div>
        <script>
            $(".form").hide();
            $(".formarea").click(function(){
                // $("#content").show();
                $(".form").fadeIn(1000);
                $(".help").fadeOut(1000);
            })
            $(".help").hide();
            $(".helparea").click(function(){
                // $("#content").show();
                $(".help").fadeIn(1000);
                $(".form").fadeOut(1000);
            })
        </script>


</body>
</html>
                       