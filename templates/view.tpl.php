<?php
/**
 * @category        modules
 * @package         twoclickcontent
 * @author          WBCE Project
 * @copyright       florian
 * @license			WTFPL
 */
//no direct file access
if(count(get_included_files()) ==1){$z="HTTP/1.0 404 Not Found";header($z);die($z);}
?>

<?php if ($sizex!='' && $sizey!='') { ?>
<style type="text/css">
	.mod_twoclickcontent<?php echo $section_id;?>  {
		width: <?php echo $sizex;?>;
		height: <?php echo $sizey;?>;		
	}
	#mod_twoclickcontent_opt-in<?php echo $section_id;?> {
		height:100%;
		overflow-y:auto;
	}
	
	#mod_twoclickcontent_opt-in<?php echo $section_id;?> {
		<?php if ($image!='') { ?>
		background-image:url(<?php echo $image; ?>);
		<?php } else { ?>
		background-image:url(<?php echo WB_URL;?>/modules/twoclickcontent/dsgvo.svg);
		<?php } ?>
		background-size:cover;
		background-position:center;		
	}
	
</style>	
<?php } ?>

<div class="mod_twoclickcontent<?php echo $section_id;?>">
  <div class="mod_twoclickcontent" id="mod_twoclickcontent_opt-in<?php echo $section_id;?>">
    <div class="mod_twoclickcontent_overlay">
		<h3><?php echo $headline; ?></h3>    
		<div class="mod_twoclickcontent_overlay_content">
			<?php echo $content_short; ?>	  		
			<div class="mod_twoclickconent_confirm">
				<button class="mod_twoclickcontent_button"><?php echo $accept; ?></button>
			</div>
		</div>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function() {
    var CookieGet = Cookies.get("tcConsent<?php echo $section_id; ?>");
    if (CookieGet != null) {
      jQuery("#mod_twoclickcontent_opt-in<?php echo $section_id;?>").hide();
      jQuery("#mod_twoclickcontent_opt-in<?php echo $section_id;?>").after('<?php echo $content; ?>');
    }
    else {
      jQuery("#mod_twoclickcontent_opt-in<?php echo $section_id;?> .mod_twoclickcontent_button").click(function() {
        Cookies.set("tcConsent<?php echo $section_id; ?>", "1", { expires: 28, SameSite:'Lax' });
        jQuery("#mod_twoclickcontent_opt-in<?php echo $section_id;?>").hide();
        jQuery("#mod_twoclickcontent_opt-in<?php echo $section_id;?>").after('<?php echo $content; ?>');
      });
    }
  });
</script>
