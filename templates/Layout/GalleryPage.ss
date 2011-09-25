<h2>$Title</h2>
<div class="content">
	<% if Level(2) %>
		<% include BreadCrumbs %>
	<% end_if %>
	$Content
	<% if ImageList %>
	<ul class="imagelist">
		<% control ImageList %>
	  		<li>
  				<a rel="image_group" href="$Attachment.URL" title="$Caption">$thumbnail</a>
  			</li>
  		<% end_control %>
	</ul>
	<% end_if %>
	<div class="clearfix"></div>
	<% if ImageList.MoreThanOnePage %>
		<% if ImageList.NotFirstPage %>
    		<div class="left"><a class="prev" href="$ImageList.PrevLink">&laquo; Zur&uuml;ck</a></div>
		<% end_if %>                
		<% if ImageList.NotLastPage %>
    		<div class="right"><a class="next" href="$ImageList.NextLink">Weiter &raquo;</a></div>
		<% end_if %>
	<% end_if %>
	$Form
	$PageComments
</div>