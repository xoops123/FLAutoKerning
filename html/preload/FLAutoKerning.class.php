<?php
/**
 * @file FLAutoKerning.class.php
 * @package For legacy Cube Legacy 2.2
 * @version $Id: FLAutoKerning.class.php ver0.01 2013/9/15  00:00:00 marine  $
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class FLAutoKerning extends XCube_ActionFilter
{
	public function preBlockFilter()
	{
		$this->mRoot->mDelegateManager->add('Site.JQuery.AddFunction',array(&$this, 'addScript'));
	}

	public function addScript(&$jQuery)
	{
		$jQuery->addLibrary('/common/FLAutoKerning/FLAutoKerning.js', true);
	   	$jQuery->addScript('
				 jQuery(function(){
						jQuery("h1:not(.no)").FLAutoKerning();
						jQuery("h2:not(.no)").FLAutoKerning();
						jQuery("h3:not(.no)").FLAutoKerning();
						jQuery("h4:not(.no)").FLAutoKerning();
						jQuery("p:not(.no)").FLAutoKerning();
					});
			');
	}
//class END
}
?>
