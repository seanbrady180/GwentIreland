// reference for this code http://www.xul.fr/ajax/ajax-image-gallery.php 
function localFilename(url)	// removing path
{
	var x = url.lastIndexOf("/");
	url = url.slice(x + 1);
	return url;		
}







function enlarge(element)
{
	var name = element.src;
	
	name = localFilename(name);
	name = name.slice(6);   // remove the "thumb-" part
	name = "Images/big-" + name;  // restore path and add the new "big-" prefix
		
	// building a string to display the image
	
	var str = "<img src='" + name + "' >";
	document.getElementById("bigview").innerHTML = str;

}
