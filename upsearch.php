<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="index_css.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <title>RetroTech Upload Search</title>
</head>

<body>
<?php $active = '2'; ?>
<?php $currentPage = 'phase3' ?>
<?php include('navbar.php'); ?>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="search_list.css">
  <script src="customSearch.js"></script>
  <script src="searchload.js"></script>
  <?php include('customSearchBar.php'); ?>
 
  <nav class="navbar navbar-light bg-light">
    <div class="form-inline">
      <input class="form-control mr-sm-2 searchbox" name="q" id="q" type="text" placeholder="retrotech" aria-label="Search" value="retrotech">
      <input type="text" name="orTerms" id="orTerms" value="retro" hidden>
      <button class="btn searchB btn-outline-success  my-2 my-sm-0 " type="submit" onclick="searchOpen()" ><i class="fas fa-search" aria-hidden="true"></i></button>
      <button type="button"  class="btn btn-primary btn-outline-success  my-2 my-sm-0 btns" data-toggle="modal" data-target="#myUploadModal">
        Upload
      </button>
      <button type="button" class="btn btn-primary btn-outline-success  my-2 my-sm-0 btns" data-toggle="modal" data-target="#myDownloadModal">
        Download
    </button>
</div>
  </nav>


  <div class="modal" id="myUploadModal">
          <div class="modal-dialog">
            <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Upload</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <div class="form-group">
          <label for="exampleFormControlSelect1">Choose A FileType</label>
          <select class="form-control" id="fileTypeSelectionUpload" onchange="inputChange()"> 
            <option id="csvU">CSV</option>
            <option id="jsonU">JSON</option>
            <option id="xmlU">XML</option>
          </select>
          <input type='file' id="fileUpload" name ="fileUpload" accept=".csv">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger btns" id="Upload" onclick="openFile()">Upload</button>
          <button type="button" class="btn btn-danger btns" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <div class="modal" id="myDownloadModal">
          <div class="modal-dialog">
            <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Download</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <div class="form-group">
          <label for="fileTypeSelectionDownload">Choose A FileType</label>
          <select class="form-control" id="fileTypeSelectionDownload">
            <option value="csv" id="csvD">CSV</option>
            <option value="json" id="jsonD">JSON</option>
            <option value="xml" id="xmlD">XML</option>

          </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger btns" id="Download" onclick="startDownload()">Download</button>
          <button type="button" class="btn btn-danger btns" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <div class="container" id="search-results">
  </div>
                  
</body>

</html>
