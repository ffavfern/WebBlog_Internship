</div>
    <!--footer 2-->
    <div class="row justify-content-center bg-footer1 p-4 g-0">
        <div class="col-xxl-12">
            <div class="bg-footer1 text-white" style="font-size: 18px;">
                Copyright © All rights reserved.| CoverNews by AF themes. </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up icon-scoll"></i></button>
    </div>
</body>

</html>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.css' id='slick-js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.marquee.js' id='marquee-js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/script.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/search.js'></script>
<script>
    $(window).bind('mousewheel DOMMouseScroll', function (event) {
        if (event.originalEvent.wheelDelta > 0) {
            console.log('scrolling up !');
            $('#navposition').removeClass("scoll-navbar")
        }
        else {
            console.log('scrolling down !');
            $('#navposition').addClass("scoll-navbar");
        }
    });
</script>