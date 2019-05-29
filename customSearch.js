function search() {
    var requestData = {
      q: $("#q").val(),
      cx: CUSTOMSEARCHENGINEID,
      key: APIKEY,
      orTerms: $("#orTerms").val()

    };
    $.get("https://www.googleapis.com/customsearch/v1", requestData, function(data) {searchResult(data)}, "json");
  }

  function rsearch() {
    var requestData = {
      q: $("#q1").val()
      
    };
    console.log($("#q1").val());
    $.get("searching.php", requestData, function(data) {rsearchrResult(data)}, "json");
  }

 function searchResult(data) {
      
       var toBeHtml = [];
       
       toBeHtml.push("<link rel=\"stylesheet\" href=\"search_list.css\">");
       toBeHtml.push("<ul>");

       for(var i =0; i<data.items.length; i++) {
           toBeHtml.push("<li class=\"title\"> <a href=\""+data.items[i]['link']+"\">"+"<div class=\"name\">"+data.items[i]['title']+"</div> <div class=\"url\">"+data.items[i]['link']+"</div></a> <div class=\"description\"><p>"+data.items[i]['snippet']+"</p></div></li>");
       }
       toBeHtml.push("</ul></div>");
       
       pendingHtml = toBeHtml.join('');

       $(".searchbox").val($("#q").val());
       $(".navbar").removeAttr('hidden');
       $(".container").html(pendingHtml);

       document.styleSheets[1].disabled = true;
 
}

function rsearchrResult(data) {
  console.log(data);
  var toBeHtml = [];
  
  toBeHtml.push("<link rel=\"stylesheet\" href=\"search_list.css\">");
  toBeHtml.push("<ul>");
  console.log(data.length);

  for(var i =0; i<data.length; i++) {
      toBeHtml.push("<li class=\"title\"> <a href=\""+data[i]['Url']+"\">"+"<div class=\"name\">"+data[i]['Title']+"</div> <div class=\"url\">"+data[i]['Url']+"</div></a> <div class=\"description\"><p>"+data[i]['Description']+"</p></div></li>");
  }
  toBeHtml.push("</ul></div>");
  
  pendingHtml = toBeHtml.join('');

  $(".searchbox").val($("#q").val());
  $(".navbar").removeAttr('hidden');
  $(".container").html(pendingHtml);

  document.styleSheets[1].disabled = true;

}

var input = document.getElementById("q");
if (input) {
  input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("sButton").click();
    }
  });

  function searchOpen() {
    window.location.href = 'customSearch.php'
  }
}
