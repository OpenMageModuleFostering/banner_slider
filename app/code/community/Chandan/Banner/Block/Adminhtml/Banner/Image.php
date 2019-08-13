<?php

class Chandan_Banner_Block_Adminhtml_Banner_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row)
    {
		$name = $this->_getvalue($row);
		$val = Mage::getBaseUrl('media').'chandanbanner/'.$name;
		$out = "<img src=". $val ." width='200px' heigh='100px'/>";
		return $out;
    }
}