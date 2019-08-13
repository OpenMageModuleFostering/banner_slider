<?php
class Chandan_Banner_Block_Adminhtml_Banner_Edit_Tab_Image extends Varien_Data_Form_Element_Image
{
  protected function _getUrl(){
        $url = false;
        if ($this->getValue()) {
            $url = Mage::getBaseUrl('media').'chandanbanner/'.$this->getValue();
        }
        return $url;
    }
}