<div class="container-fluid">
      <hr>
      <footer>
      <div class="row-fluid">
            <div class="span4">
        <p>&copy; <?= $title ?> Created: <?= date('Y'); ?></p>
            </div>
              <div class="span4">

            </div>
              <div class="span4">
        <p class="pull-right"></p>
            </div>
            </div>
      </footer>
    </div> </div><!--/.fluid-container-->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="<?= base_url()?>/js/bootstrap.js"></script>
      <script type="text/javascript">  
   $(document).ready(function() {
   	$('.carousel').carousel('cycle');
   	});
 </script>
  </body>
</html>