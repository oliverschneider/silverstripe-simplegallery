<?php
class GalleryHolder extends Page {
	function getCMSFields() {
	   		$fields = parent::getCMSFields();
	
	       	$fields->removeByName("Metadata");
	       	$fields->removeByName("GoogleSitemap");
	
			return $fields;
	} 
	
}

class GalleryHolder_Controller extends Page_Controller {
	
	function GalleryPages() {
		$galleryPages = DataObject::get("GalleryPage","ParentID = {$this->ID}");
		return ($galleryPages) ? $galleryPages : null;
	}
	
	public function init() {
		parent::init();

        Requirements::css('simplegallery/css/simplegallery.css'); 
 	}
	
}