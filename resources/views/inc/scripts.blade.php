    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.mixitup.js"></script>
    <script src="/js/nivo-lightbox.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.nav.js"></script>
    <script src="/js/scrolling-nav.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/jquery.vide.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/form-validator.min.js"></script>
    <script src="/js/contact-form-script.js"></script>
    <script src="/js/main.js"></script>

    {{-- auto fill for forms --}}
    <script>
        jQuery(document).ready(function($){
    $("#counts > div > div:nth-child(1) > div > div.plan-button > a").on("click", function(){
        setTimeout(function(){
        $("#subject").val($("#counts > div > div:nth-child(1) > div > div.pricing-details > h2").text());
    }, 500);
    });
    // second button
    $("#counts > div > div:nth-child(2) > div > div.plan-button > a").on("click", function(){
        setTimeout(function(){
        $("#subject").val($("#counts > div > div:nth-child(2) > div > div.pricing-details > h2").text());
    }, 500);
    });
    // third button
    $("#counts > div > div:nth-child(3) > div > div.plan-button > a").on("click", function(){
        setTimeout(function(){
        $("#subject").val($("#counts > div > div:nth-child(3) > div > div.pricing-details > h2").text());
    }, 500);
    });
    // web dev form page

    $("#counts > div > div:nth-child(1) > div > div.plan-button > a").on("click", function(){
        setTimeout(function(){
        $("#subjects").val($("#counts > div > div:nth-child(1) > div > div.pricing-details > h2").text());
    }, 500);
    });
    $("#counts > div > div:nth-child(2) > div > div.plan-button > a").on("click", function(){
        setTimeout(function(){
        $("#subjects").val($("#counts > div > div:nth-child(2) > div > div.pricing-details > h2").text());
    }, 500);
    });
    $("#counts > div > div:nth-child(3) > div > div.plan-button > a").on("click", function(){
        setTimeout(function(){
        $("#subjects").val($("#counts > div > div:nth-child(3) > div > div.pricing-details > h2").text());
    }, 500);
    });
        });


    </script>
