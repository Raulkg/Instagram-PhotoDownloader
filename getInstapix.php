   <html>
   <head>
<title>Instagram Downloader</title>
//Downloads thirty images from your instagram account
   <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	  <script type="text/javascript">

// Download a file form a url.
function saveFile(url) {
  // Get file name from url.
  
   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     
    }
  };
  xhttp.open("GET", "http://yourdomain.com/downloader.php?w1=" + url, true);
  xhttp.send();
 
}

var auth = "<Auth code>";
var ClientID = "<Client ID>";
var imgarray = new Array();
$(document).ready(function(){
$.ajax({
  type: "GET",
  dataType: "jsonp",
  url: "https://api.instagram.com/v1/users/1332852833/media/recent/?access_token=<ACCESS_TOKEN>&count=34",
  success: function(data) {
     var imgarray =new Array();
     for (var i = 0; i < 30; i++) {
    imgarray.push(data.data[i].images.standard_resolution.url);
	saveFile(data.data[i].images.standard_resolution.url);

								  }
							}		
  
		});

  })

</script>   

</head>

<body></body>

</html>