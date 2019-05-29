function startDownload() {
    var names = document.getElementsByClassName('name');

    var urls = document.getElementsByClassName('url');

    var descriptions = document.getElementsByClassName('description');
    
    if ($("#fileTypeSelectionDownload").val() == "csv") makeCSV(names, urls, descriptions);
    if ($("#fileTypeSelectionDownload").val() == "json") makeJSON(names, urls, descriptions);
    if ($("#fileTypeSelectionDownload").val() == "xml")makeXML(names, urls, descriptions);
}

function makeCSV(names, urls, descriptions) {

    var csvArray = [];

    if (names.length === urls.length && urls.length === descriptions.length) {
        for (var i = 0; i < names.length; i++) {
            csvArray.push(names[i].textContent);
            csvArray.push(urls[i].textContent);
            csvArray.push(descriptions[i].textContent.trim() + '\n');
        }

        var csvText = new Blob([csvArray], { type: "text/csv" });
        var csvDownload = document.createElement("a");
        csvDownload.download = "results.csv";
        csvDownload.href = window.URL.createObjectURL(csvText);
        document.body.appendChild(csvDownload);
        csvDownload.click();
    }
    else
        alert("I'm Sorry Something Went Wrong With Your Download");
}

function makeJSON(names, urls, descriptions) {
    var JSONStringArray = ['{\"Result\" : ['];
    if (names.length === urls.length && urls.length === descriptions.length) {
        for (var i = 0; i < names.length; i++) {
            JSONStringArray.push("{\"title\":\"" + names[i].textContent + "\",\"url\":\"" + urls[i].textContent + "\",\"description\":\"" + descriptions[i].textContent.trim() + "\"}");
            if (i < names.length - 1) JSONStringArray.push(",\n");
        }

        JSONStringArray.push("]}");
        var JSONString = JSONStringArray.join('');
        var txt = new Blob([JSONString], { type: "application/json" });
        var txtDownload = document.createElement("a");
        txtDownload.download = "results.json";
        txtDownload.href = window.URL.createObjectURL(txt);
        document.body.appendChild(txtDownload);
        txtDownload.click();
    }
    else
        alert("I'm Sorry Something Went Wrong With Your Download");
}
function makeXML(names, urls, descriptions) {
    var XMLStringArray = ['<?xml version="1.0" encoding="UTF-8"?>\n <results>\n'];
    if (names.length === urls.length && urls.length === descriptions.length) {
        for (var i = 0; i < names.length; i++) {
            XMLStringArray.push("<result>\n <title>" + names[i].textContent + "</title>\n <url>" + urls[i].textContent + "</url>\n <description>" + descriptions[i].textContent.trim() + "</description>\n </result>\n ");
        }
        XMLStringArray.push("</results>");
        var XMLString = XMLStringArray.join("");
        var xml = new Blob([XMLString], { type: "application/xml" });
        var xmlDownload = document.createElement("a");
        xmlDownload.download = "results.xml";
        xmlDownload.href = window.URL.createObjectURL(xml);
        document.body.appendChild(xmlDownload);
        xmlDownload.click();
    }
    else
        alert("I'm Sorry Something Went Wrong With Your Download");
}
function openFile() {
    var file = document.getElementById("fileUpload").files[0];
    //console.log(file);
    if($("#fileTypeSelectionUpload option:selected").text() === "CSV") readCSV(file);
    if($("#fileTypeSelectionUpload option:selected").text() === "JSON") readJSON(file);
    if($("#fileTypeSelectionUpload option:selected").text() === "XML")  readXML(file);
}

function readCSV(file){
    //var input = event.target;
    //console.log(file);
    $('.modal-backdrop').remove()
    $(document.body).removeClass("modal-open");
    var searchList = document.getElementById("search-results");
    var reader = new FileReader();
    reader.readAsText(file);
    reader.onload = function () {
        var text = reader.result;
        var splitText = text.split(',');
        console.log(splitText);
        var toBeHtml = [];
        toBeHtml.push("<link rel=\"stylesheet\" href=\"search_list.css\"><ul>");
        for(var i =0; i<splitText.length ; i+=3) {
            toBeHtml.push("<li class=\"title\"> <a href=\""+splitText[i+1]+"\">"+"<div class=\"name\">"+splitText[i]+"</div> <div class=\"url\">"+splitText[i+1]+"</div></a> <div class=\"description\"><p>"+splitText[i+2].trim()+"</p></div></li>");
        }
        toBeHtml.push("</ul></div>");
        //console.log(toBeHtml);
        pendingHtml = toBeHtml.join('');
        searchList.innerHTML=pendingHtml;
    };
    //reader.readAsText(input.files[0]);
}

function readJSON(file){
     //var input = event.target;
     $('.modal-backdrop').remove()
     $(document.body).removeClass("modal-open");
     var searchList = document.getElementById("search-results");
     var reader = new FileReader();
     reader.readAsText(file);

     reader.onload = function () {
        var text = reader.result;
    
        var JSONtext= JSON.parse(text);
   
        var toBeHtml = [];

        toBeHtml.push("<link rel=\"stylesheet\" href=\"search_list.css\"><ul>");

        for(var i =0; i<JSONtext['Result'].length; i++) {
            toBeHtml.push("<li class=\"title\"> <a href=\""+JSONtext['Result'][i]['url']+"\">"+"<div class=\"name\">"+JSONtext['Result'][i]['title']+"</div> <div class=\"url\">"+JSONtext['Result'][i]['url']+"</div></a> <div class=\"description\"><p>"+JSONtext['Result'][i]['description']+"</p></div></li>");
        }
        toBeHtml.push("</ul></div>");
        
        pendingHtml = toBeHtml.join('');
        searchList.innerHTML=pendingHtml;
    };
    //reader.readAsText(input.files[0]);
}



function readXML(file){
    //var input = event.target;
    $('.modal-backdrop').remove()
    $(document.body).removeClass("modal-open");
    var searchList = document.getElementById("search-results");
    var reader = new FileReader();
    reader.readAsText(file);

    reader.onload = function() {
        var text = reader.result;
       
        var XML = new DOMParser().parseFromString(text, "text/xml");

        var toBeHtml = [];

        if (XML.getElementsByTagName("title").length == XML.getElementsByTagName("url").length && XML.getElementsByTagName("description").length){
            toBeHtml.push("<link rel=\"stylesheet\" href=\"search_list.css\"><ul>");
            for (var i =0; i < XML.getElementsByTagName("title").length;i++) {
                toBeHtml.push("<li class=\"title\"> <a href=\""+XML.getElementsByTagName("url")[i].textContent+"\">"+"<div class=\"name\">"+XML.getElementsByTagName("title")[i].textContent+"</div> <div class=\"url\">"+XML.getElementsByTagName("url")[i].textContent+"</div></a> <div class=\"description\"><p>"+XML.getElementsByTagName("description")[i].textContent+"</p></div></li>");
            }
            toBeHtml.push("</ul></div>");
            pendingHtml = toBeHtml.join('');
            searchList.innerHTML=pendingHtml;
        }

        else {
            window.alert("Sorry Something Went Wrong");
        }
        
    };
}

function inputChange() {

    console.log($("#fileTypeSelectionUpload option:selected").text());
    if ($("#fileTypeSelectionUpload option:selected").text() === "CSV") {
        var inputs = document.querySelector("#fileUpload");
        inputs.setAttribute("accept",".csv");
    }
    if ($("#fileTypeSelectionUpload option:selected" ).text() === "JSON") {
        var inputs = document.querySelector("#fileUpload");
        inputs.setAttribute("accept",".json");
        
    }
    if ($("#fileTypeSelectionUpload option:selected" ).text() === "XML") {
        var inputs = document.querySelector("#fileUpload");
        inputs.setAttribute("accept",".xml");
    }
}
