<body>
    <?php require 'header.php' ?>
    <div class="container  headholder">
            <h2>Shoe Size Conversion Calculator. You can generate the perfect shoe size for your foot</h2>
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
                        <form action="results.php" method="POST">
                            <label for="gender" name="gender"><h3>Gender</h3></label>
                            <select id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                            <label for="length" name="length"><h3>Length of Foot</h3></label>
                            <input type="text" id="length" name="length" placeholder="Input your shoe length">
                            

                            <input type="submit" value="submit">
                        </form>  
            </div>
            <div class="help">
                <h2>How to measure</h2>
                <p>To measure your feet stand on a level floor with the back of your heels against a straight edge or a wall</p>
            </div>
        </div>
    </div>
        <script>
            $(".form").hide();
            $(".formarea").click(function(){
                // $("#content").show();
                $(".form").show();
                $(".help").hide();
            })
            $(".help").hide();
            $(".helparea").click(function(){
                // $("#content").show();
                $(".help").show();
                $(".form").hide();
            })
        </script>


</body>
</html>
                       