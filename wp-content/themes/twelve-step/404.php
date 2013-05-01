    <?php get_header(); ?>
    <div id="my-body">
        <div class="error">Ooops! whatever you are looking for is not here...sorry<br><a href="<?php bloginfo("url") ?>">Go back to Home page</a></div>
        <div id="timer"></div>
        <script type="text/javascript">
            var timerbox = document.getElementById("timer");
            timerbox.innerHTML = " ";
            var counter = 10;
            var timertext;
            setInterval(function(){
                if(counter == 0){
                    window.location = "<?php bloginfo("url"); ?>";
                    clearInterval(this);
                }
                    counter = counter - 1;
                    timertext = "redirecting in " + counter;
                    timerbox.innerHTML = timertext;
            },1000);
        </script>
    </div>
    <?php get_footer(); ?>