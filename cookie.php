<html>
<head>
<script>
var getCookies = function(){
  var pairs = document.cookie.split(";");
  var cookies = {};
  
  for (var i=0; i<pairs.length; i++){
    var pair = pairs[i].split("=");
    cookies[pair[0]] = unescape(pair[1]);
	alert(pair[1]);
  }
  return cookies;
}
var myCookies = getCookies();
alert(myCookies.name);
</script>
</head>
<body>
	
</body>
</html>