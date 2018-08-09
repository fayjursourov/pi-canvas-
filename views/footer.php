<div id="footerwrap">
    <div class="container">
        <h4>Copyright &copy; <?php echo Date('Y') ?></h4>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php if($_GET['is_home']) { ?>
    <?php # js for menu scroll ?>
    <script type="text/javascript">
        $(function () {
            $('ul.nav').find('li').click(function(e){
                e.preventDefault();
                var $target = $(this).find('a').data('target');
//                console.log($target);
                if ($target != undefined
                    && ( $('#' + $target).offset() != undefined
                    && $('#' + $target).offset().top != undefined )) {

                    $('ul.nav').find('li').removeClass('active');
                    $(this).addClass('active');
                    $('html, body').animate({scrollTop: $('#' + $target).offset().top + 5}, 1200);
                }
                return false;
            });

            $('.navbar-header a').on('click', function() {
                $('#menu-home').trigger('click');
            });
        });
    </script>
<?php } ?>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="assets/js/retina.js"></script>-->
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>
</html>
