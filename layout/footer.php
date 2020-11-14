<footer>
        
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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