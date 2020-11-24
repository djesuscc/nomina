<footer>
        
</footer>
</div>
<script src="..assets/js/jquery.min.js"></script>
<script src="..assets/js/bootstrap.min.js"></script>
<script>
    $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    })
    $('nav ul li').click(function() {
        $(this).addClass('active').siblings().removeClass("active");
    })
</script>
</body>
</html>