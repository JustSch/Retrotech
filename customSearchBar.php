<nav class="navbar navbar-light bg-light" hidden>
    <div class="form-inline">
      <input class="form-control mr-sm-2 searchbox" name="q" id="q" type="text" placeholder="retrotech" aria-label="Search" value="retrotech">
      <input type="text" name="orTerms" id="orTerms" value="retro windows 95 windows 98 appleii dos macos9" hidden>
      <button class="btn searchB btn-outline-success  my-2 my-sm-0 " type="submit" onclick="search()" ><i class="fas fa-search" aria-hidden="true"></i></button>
      <button type="button"  class="btn btn-primary btn-outline-success  my-2 my-sm-0" data-toggle="modal" data-target="#myUploadModal">
        Upload
      </button>
      <button type="button" class="btn btn-primary btn-outline-success  my-2 my-sm-0" data-toggle="modal" data-target="#myDownloadModal">
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
          <!-- make accept=".xml" change with javascript or something -->
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