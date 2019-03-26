
<div class="clear"></div>
<div class='overlay-footer overlay'></div>

<footer id="footer" role="contentinfo" class='pad-top-20 pad-bottom-20 margin-top-auto'>
  <div class='container overflow '>
    <div id="copyright" class='white-text'>
      &copy; Copyright <?php echo date('Y'); ?>
    </div>
    <div class='margin-left-auto  align-items'>
      <?php
      $phone = '012786786867';
      $email = 'stevefurley@gmail.com';
      ?>
      <a class=' white-text no-decoration' href='tel:<?php echo $phone ?  preg_replace("/[^0-9]/", "", $phone) : ""; ?>'><?php echo $phone; ?></a>
      <span class='white-text pad-left-5 pad-right-5'> | </span> <a class='  white-text no-decoration' href='tel:<?php echo $email ?  preg_replace("/[^0-9]/", "", $email) : ""; ?>'><?php echo $email; ?></a>
    </div>
  </div>

</footer>
</div><!-- closing div from header-->


<div class='overlay'></div>
<?php wp_footer(); ?>
</body>
</html>
