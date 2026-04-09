{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:
--}}

<link rel="stylesheet" href="{{themeAsset('your.css')}}">
<style>
body{background-image: url('{{themeAsset('background.png')}}'); 
background-size: cover; 
background-position: center; 
background-attachment: fixed;}





html {
    font-size: 100%; }
      body {
        font-size: 18px;
        line-height: 24px;
        font-weight: 400;
        color: #F1F1F1  !important;
        font-family: "sottext", sans-serif;
        text-transform: uppercase;
        background:
        linear-gradient(
          rgba(0, 0, 0, 0.7), 
          rgba(0, 0, 0, 0.7)
        ),
		url({{themeAsset('background.png')}});
        background-size: cover;
        color: #222; }
</style>