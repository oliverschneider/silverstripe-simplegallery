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
	
	function GalleryPages($limit=20) {
		$start = isset($_GET['start']) ? (int) $_GET['start'] : 0;
		$galleryPages = DataObject::get("GalleryPage","ParentID = {$this->ID}", "","","$start , $limit");
		return ($galleryPages) ? $galleryPages : null;
	}
	
	public function init() {
		parent::init();

        Requirements::css('simplegallery/css/simplegallery.css'); 
 	}
	
}