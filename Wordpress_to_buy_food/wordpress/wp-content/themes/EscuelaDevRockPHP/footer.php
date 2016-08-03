<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	            <div class="footer">
                <div class="footer-content">
                    <div class="footer-main">
                    
                        <div class="clearfix"> </div>  
                    </div> 
                    <div class="social-icons">
                            <ul class="top-social-icons" list-unstyled>
                                        <li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="https://www.facebook.com/escueladevrock"> </a></li>
                                        <li> <a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="https://twitter.com/escueladevrock"> </a></li>
                                        <!-- <li> <a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#"> </a> </li> -->
                                        <li> <a class="youtube simptip-position-bottom simptip-movable" data-tooltip="Youtube" href="https://www.youtube.com/channel/UCWbXy_PK2I6fmJjD3NqSnRQ"> </a> </li>
                                        <!-- <li> <a class="vimeo simptip-position-bottom simptip-movable" data-tooltip="Vimeo" href="#"> </a> </li> -->
                                            <div class="clearfix"> </div>  
                                    </ul>
                    </div>
                            <div class="col-md-12 copy-right">
                                <p> Escuela Dev Rock &#169; 2016 Todos los derechos reservados.</p>
                            </div>
                </div>
            </div> 






<button type="button" id='onlines' data-toggle="modal" data-target="#myModal-online"></button>



<div class="modal fade" id="myModal-online" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close cierra" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">Consultar Modalidad online de </h4>
      </div>
      <div class="modal-body">
        <form>
  <fieldset class="form-group">
      <fieldset class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" required?  >
  </fieldset>
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
  </fieldset>

  <fieldset class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="number" class="form-control" id="inputTelefono" placeholder="Telefono" required>
  </fieldset>

  <div class="g-recaptcha" data-sitekey="6LdIqBwTAAAAAIu6i1VN7wplMCJnNq4pR8Li0cfj"></div>

  <button type="submit" class="btn btn-primary consul" data-nombre='' data-modal='' >Consultar</button>
</form>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
