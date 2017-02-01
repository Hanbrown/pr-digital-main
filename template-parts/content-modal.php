<?php
/**
 * Template part for displaying the contact modal.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PR_Digital_Main
 */

?>
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
        <h4 class="modal-title">Contact Me</h4>
      </div>
      <div class="modal-body">
        <?php 
          
          echo do_shortcode("[contact-form-7 id=\"91\" title=\"modal-contact\"]"); 
          //Put the contact form shortcode here. 
        ?>
      </div>
    </div>

  </div>
</div>