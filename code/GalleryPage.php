<?php
class GalleryPage extends Page {
   static $db = array(
   );
   
   static $has_many = array(
   	  'Images' => 'ImageResource'
   );

   function getCMSFields() {
   		$fields = parent::getCMSFields();

	  	$manager = new ImageDataObjectManager(
        	$this, // Controller
            'Images', // Source name
            'ImageResource', // Source class
            'Attachment', // File name on DataObject
            array(), // Headings 
            'getCMSFields_forPopup' // Detail fields
            // Filter clause
            // Sort clause
            // Join clause
       	);
       	$manager->setUploadFolder('Uploads/Galerie/'.$this->URLSegment);
       	$tabImages = new Tab('Images',$manager);
       	$tabImages->setTitle(_t('GalleryPage.TABIMAGES', "Images"));
       	$fields->addFieldToTab("Root.Content",$tabImages);
       	$fields->removeByName("Metadata");
       	$fields->removeByName("GoogleSitemap");

		return $fields;
   } 
   
   function firstImageResource() {
   		$imageResource = $this->Images()->First();
   		return ($imageResource) ? $imageResource : null;
   }
   
   	public function ImageList($limit=20){
    	$start = isset($_GET['start']) ? (int) $_GET['start'] : 0;
      	$list = DataObject::get("ImageResource", "GalleryPageID = {$this->ID}", "","","$start , $limit");
      	return $list;
	}
	
}
 
class GalleryPage_Controller extends Page_Controller {
	
	public function init() {
		parent::init();
	
		Requirements::javascript("sapphire/thirdparty/jquery/jquery.js");
        Requirements::javascript('simplegallery/javascript/fancybox.js'); 
        Requirements::javascript('simplegallery/javascript/gallery.js'); 
        Requirements::css('simplegallery/css/fancybox.css');
        Requirements::css('simplegallery/css/simplegallery.css'); 
 	}
}
 
?>