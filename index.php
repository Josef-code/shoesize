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
                     <a href="#">MEASUREMENT GUIDE</a>
                </div>
            </div>

        </div>
            <hr/>
        <div class="content">
                        <form action="results.php" method="POST">
                            <label for="name"><h3>Your name:</h3></label>
                            <input type="text" id="username" name="name" placeholder="John Kanu"\>

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
    </div>
        <script>
            $(".formarea").click(function(){
               $(".content").hide();
            })
        </script>


</body>
</html>
                        