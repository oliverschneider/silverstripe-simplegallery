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
	$Form
	$PageComments
</div>