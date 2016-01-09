<footer>
    <p class="copyright">
        <?php echo $SID['DBVERSION'] ?>
            &middot; SEQL Version
            <?php echo VERSION ?>
                Copyright &copy; 2009-<?php echo date("Y"); ?> <a target="_blank" href="http://hozakart.com/">Hozakart.com</a>
    </p>
</footer>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-linedtextarea.js"></script>

<script>
    new WOW().init();
</script>

<script>
$(function() {

  // Target all classed with ".lined"
  $("textarea").linedtextarea(
    {selectedLine: 1}
  );
});
</script>

</body>

</html>