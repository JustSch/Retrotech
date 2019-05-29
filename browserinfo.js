window.onload = function documentLoad() {
  if (document.body.contains(document.getElementById("browsertext"))) {
    navigationInfo();
  }
  if (document.body.contains(document.getElementById("windowInfo"))) {
    windowInfo();
  }
  if (document.body.contains(document.getElementById("screentext"))) {
    screenInfo();
  }
  if (document.body.contains(document.getElementById("locationText"))) {
    locationInfo();
  }
  if (document.body.contains(document.getElementById("geolocationText"))) {
    geolocationInfo();
  }
}

function navigationInfo() {
  document.getElementById("browsertext").innerHTML = ("<h1>" + "Here's Some Information About Your Browser:" + "</h1><ul class=\"infoList\">" +
    "<li>" + "Appname is: " + navigator.appName + "</li><li>" +
    "Codename is: " + navigator.appCodeName + "</li><li>" +
    "Browser Engine is: " + navigator.product + "</li><li>" +
    "Browser Version Is: " + navigator.appVersion + "</li><li>" +
    "Brower UserAgent Is: " + navigator.userAgent + "</li><li>" +
    "Are Cookies Enabled: " + navigator.cookieEnabled + "</li></ul>");
}

function windowInfo() {
  document.getElementById("windowInfo").innerHTML = ("<h1>" + "Here's Some Information About Your Browser's Window:" + "</h1><ul class=\"infoList\">" +
    "<li>" +
    "Window Width is: " + (window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth) + "</li><li>" +
    "Window Height is: " + (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight) + "</li></ul>");
}

function screenInfo() {
  document.getElementById("screentext").innerHTML = ("<h1>" + "Here's Some Information About Your Screen:" + "</h1><ul class=\"infoList\">" +
    "<li>" + "Screen Width is: " + screen.width + "</li><li>" +
    "Screen Height Is: " + screen.height + "</li><li>" +
    "Screen Available Width Is: " + screen.availWidth + "</li><li>" +
    "Screen Available Height Is: " + screen.availHeight + "</li><li>" +
    "Screen Color Depth Is: " + screen.colorDepth + "</li><li>" +
    "Screen Pixel Depth: " + screen.pixelDepth + "</li></ul>");
}

function locationInfo() {
  document.getElementById("locationText").innerHTML = ("<h1>" + "Here's Some Information About Your Current Location On The Web:" + "</h1><ul class=\"infoList\">" +
    "<li>" + "The URL Is: " + location.href + "</li><li>" +
    "The Hostname Is: " + location.hostname + "</li><li>" +
    "The Pathname Is: " + location.pathname + "</li><li>" +
    "The Protocol Is: " + location.protocol + "</li></ul>");
}

function geolocationInfo() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showGeolocation);
  } else {
    document.getElementById("locationText").innerHTML = ("<h1>" + "Sorry There Seems To Be An Error:" + "</h1>")
  }


}

function showGeolocation(phyLocation) {
  document.getElementById("geolocationText").innerHTML = ("<h1>" + "Here's Some Information About Your Location:" + "</h1><ul class=\"infoList\">" +
    "<li>" + "Your Latitude Is: " + (phyLocation.coords.latitude) + "</li><li>" +
    "Your Longitude Is: " + (phyLocation.coords.longitude) + "</li></ul>");
}
