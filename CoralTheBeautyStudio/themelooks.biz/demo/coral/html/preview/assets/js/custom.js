/* It's the best idea to write your own JS in custom.js file. So if you want to write JS with your own use this file */
 var script = document.createElement('script');
 script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
 script.type = 'text/javascript';
 document.getElementsByTagName('head')[0].appendChild(script);

 $(function(){
$("#header").load("header.html");
$("#banner_id").load("slider.html");
});