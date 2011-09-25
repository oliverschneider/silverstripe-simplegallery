<h2>$Title</h2>
<div class="content">
	<% if Level(2) %>
		<% include BreadCrumbs %>
	<% end_if %>
	$Content
	<ul class="gallerylist">
		<% control GalleryPages %>
	  		<a href="$Link" class="li"><li>
	  			<div class="image"><% control firstImageResource %>$thumbnail<% end_control %></div>
	  			<div class="title">$MenuTitle.XML</div>
  			</li></a>
  		<% end_control %>
	</ul>
	<% if GalleryPages.MoreThanOnePage %>
		<% if GalleryPages.NotFirstPage %>
    		<div class="left"><a class="prev" href="$GalleryPages.PrevLink">&laquo; Zur&uuml;ck</a></div>
		<% end_if %>                
		<% if GalleryPages.NotLastPage %>
    		<div class="right"><a class="next" href="$GalleryPages.NextLink">Weiter &raquo;</a></div>
		<% end_if %>
	<% end_if %>
	$Form
	$PageComments
</div>