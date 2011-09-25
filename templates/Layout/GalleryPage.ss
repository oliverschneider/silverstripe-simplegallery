<h2>$Title</h2>
<div class="content">
	<% if Level(2) %>
		<% include BreadCrumbs %>
	<% end_if %>
	$Content
	<ul class="imagelist">
		<% control Images %>
	  		<li>
  				<a rel="image_group" href="$Attachment.URL" title="$Caption">$Attachment.SetSize(150,150)</a>
  			</li>
  		<% end_control %>
	</ul>
	$Form
	$PageComments
</div>