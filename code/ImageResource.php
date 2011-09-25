<?php
class ImageResource extends DataObject {
	static $api_access = true;
 
    static $has_one = array (
        'Attachment' => 'Image', //Needs to be an image
        'GalleryPage' => 'GalleryPage'
    );

    public function getCMSFields_forPopup() {
        return new FieldSet(
            new FileIFrameField('Attachment')
        );
    }
    
    public function thumbnail() {
    	return $this->Attachment()->CroppedImage(150,120);
    }
}