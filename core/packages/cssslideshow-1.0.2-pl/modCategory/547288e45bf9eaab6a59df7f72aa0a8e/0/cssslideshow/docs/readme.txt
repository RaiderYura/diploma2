Modx Revolution CSS Slide Show Snippet
====================
Version 1.0.2-pl
Author: J. Mercer <jm@ultravision.net> jerry325
Date:   Oct. 20 2016
====================
cssSlideShow

DESCRIPTION:
This Snippet retrieves image files from a directory, processes them through 
template chunks and returns a pure CSS Slide Show.

PARAMETERS:
folder string - The name of the image folder to search, taken from URL.
&folder string - The name of the image folder to search. Uncomment to use.
&ext string - The extension(s) of the images. optional. Default: 'jpg,gif,png,JPG,GIF,PNG'.
&cell_tpl string - Chunk to process animation cells optional. Default: cSS_Cell_Tpl
&image_tpl string - Chunk to process image links optional. Default: cSS_Image_Tpl
&style_tpl string - Chunk to process <style> section optional. Default: cSS_Style_Tpl
&page_tpl string - Chunk to process page optional. Default: cSS_Page_Tpl
&cSS_Width integer - A number representing the width images to return. optional. Default: 300
&cSS_Height integer - A number representing the height images to return. optional. Default: 225
&cSS_Id string - An id name to pass. optional. Default: ''
&cSS_Class string - A class name to pass. optional. Default: ''
&cSS_ImgTime integer - A number representing the time to display each image. optional. Default: 4
&cSS_CfTime integer - A number representing the time for each cross-fade. optional. Default: 2

USAGE:
[[!cssSlideShow]]

USAGE - Advanced:
[[!cssSlideShow? 
&folder=`assets/photos` 
&ext =`cSS_Ext =`jpg,gif,png,JPG,GIF,PNG`
&cell_tpl=`cSS_Cell_Tpl`
&image_tpl=`cSS_Image_Tpl`
&style_tpl=`cSS_Style_Tpl`
&page_tpl=`cSS_Page_Tpl`
&cSS_Width=`300`
&cSS_Height=`225`
&cSS_Id=`imgCells`
&cSS_Class=`slideShow`
&cSS_ImgTime=`4`
&cSS_CfTime=`2`
]]

Release Notes
This version is a re-write to change from the mask and slide of the original to a simpler stack and fade 
approach. I believe I first saw this method on Mark Lee's Blog and other parts on codepen. You will need 
to use the respond.js script to make this behave on some browsers.
This snippet started from an article by Alessio Atzeni at smashingmagazine.com . He put together a little
5 image slide show as a proof of concept and I was intrigued. I wanted to see if I could use what I had 
learned in creating getImages to make a CSS slide Show of any size. The CSS3 animations do not work
in IE 9 but work in both Firefox and Chrome. I would also like a more standards compliant way to create 
the CSS but this was all I could think of. I feel sure there are a hundred better ways to do this...
* Note: the example2_cSS_Image_Tpl chunk makes use of jgrant's great pThumb snippet to create thumbnails 
on the fly (this takes some time on first use with larger numbers of images). I then have the link point to a 
full sized Image for downloading. Also I link to the Slide Show from my getImages page so I already have a 
folder reference in the page but you can either use the folder variable in the snippet call or put the folder 
path onto the end of the URL with ?folder= .
As always I would be grateful for any and all suggestions for improvements.

