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

// edit form for twoclickcontent

?>

<form name="tcc<?php echo $section_id; ?>" action="<?php echo WB_URL; ?>/modules/twoclickcontent/save.php" enctype="multipart/form-data" method="post">

	<input type="hidden" name="page_id" value="<?php echo $page_id; ?>" />
	<input type="hidden" name="section_id" value="<?php echo $section_id; ?>" />
	<?php echo $admin->getFTAN()."\n";?>
	
	<div class="cpForm">
		<div class="formRow">
			<div class="settingName">
				<?php echo $TCC['HEADLINE']?>:
			</div>
			<div class="settingValue">
				<input type="text" id="headline<?php echo $section_id?>" name="headline<?php echo $section_id?>" value="<?php echo $headline ?>" />
			</div>			
		</div>
	
		<div class="formRow">
			<div class="settingName">
				<?php echo $TCC['CONTENT_SHORT']?>:
			</div>
			<div class="settingValue">
				<textarea id="content_short<?php echo $section_id?>" name="content_short<?php echo $section_id?>"><?php echo $content_short?></textarea>
			</div>			
		</div>

		<div class="formRow">
			<div class="settingName">
				<?php echo $TCC['CONTENT']?>:
			</div>
			<div class="settingValue">
				<textarea id="content<?php echo $section_id?>" name="content<?php echo $section_id?>"><?php echo $content?></textarea>
			</div>			
		</div>
	
		<div class="formRow">
			<div class="settingName">
				<?php echo $TCC['SIZEX']?>:
			</div>
			<div class="settingValue">
				<input type="text" id="sizex<?php echo $section_id?>" name="sizex<?php echo $section_id?>" value="<?php echo $sizex ?>" />
			</div>			
		</div>
	
		<div class="formRow">
			<div class="settingName">
				<?php echo $TCC['SIZEY']?>:
			</div>
			<div class="settingValue">
				<input type="text" id="sizey<?php echo $section_id?>" name="sizey<?php echo $section_id?>" value="<?php echo $sizey ?>" />
			</div>			
		</div>
		
		<div class="formRow">
			<div class="settingName">
				<?php echo $TCC['IMAGE']?>:
			</div>
			<div class="settingValue">
				<input type="file" id="image<?php echo $section_id?>" name="image<?php echo $section_id?>"  value="" /><br/><br/>
				<img src="<?php echo $image?>" title="" alt="" class="mod_twoclickcontent_image_backend"><br/>
				<input type="checkbox" id="delete<?php echo $section_id?>" name="delete<?php echo $section_id?>" value="Delete" <?php echo $image_delete_disabled; ?> ><label for="delete<?php echo $section_id?>"><?php echo $TCC['IMAGE_DELETE']?></label>
			</div>			
		</div>
		
	

		
		<div class="formRow">
			<div class="buttonRow">
				<input name="modify" type="submit" value="<?php echo $TEXT['SAVE']; ?>" />
				<input name="pagetree" type="submit" value="<?php echo $TEXT['SAVE'].' &amp; '.$TEXT['BACK']; ?>" />
				<input name="cancel" type="button" value="<?php echo $TEXT['CANCEL']; ?>" onclick="javascript: window.location = 'index.php';" />
			</div>
		</div>
	</div>
	

</form>

