<?php
/**
* @version		2.0
* @package		Fiyo CMS
* @copyright	Copyright (C) 2014 Fiyo CMS.
* @license		GNU/GPL, see LICENSE.
**/

defined('_FINDEX_') or die('Access Denied');
printAlert();
?>
<form method="post">
	<div id="app_header">
		<div class="warp_app_header">		
			<div class="app_title"><?php echo Edit_Contact; ?></div>			
			<div class="app_link">			
				<button type="submit" class="btn btn-success" title="<?php echo Save; ?>" value="<?php echo Save; ?>" name="apply_edit"><i class="icon-check"></i> <?php echo Save; ?></button>	
				<button type="submit"  name="save_edit" class="btn btn-metis-2" title="<?php echo Save_and_Quit; ?>" value="<?php echo Save_and_Quit; ?>"><i class="icon-check-circle"></i> <?php echo Save_and_Quit; ?></button>					
				<a class="danger btn btn-default" href="?app=contact" title="<?php echo Cancel; ?>">
				<i class="icon-remove-sign"></i> <?php echo Cancel; ?></a>			
			</div>
		 </div>			 
	</div>
		
	<?php 
		require('field_contact.php');
	?>	
</form>