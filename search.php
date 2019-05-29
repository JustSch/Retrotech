<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="search_list.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <title>Search Page</title>
</head>

<body>
<?php $active = '2'; ?>
<?php $currentPage = 'phase2' ?>
<?php include('navbar.php'); ?>

<nav class="navbar navbar-light bg-light">
    <form class="form-inline" action="search.php" method="GET">
      <input class="form-control mr-sm-2 " type="search" placeholder="retrotech youtube" aria-label="Search" disabled>
      <button class="btn searchB btn-outline-success  my-2 my-sm-0 " type="submit" ><i class="fas fa-search" aria-hidden="true"></i></button>
      <button type="button" class="btn btn-primary btn-outline-success  my-2 my-sm-0" data-toggle="modal" data-target="#myUploadModal">
        Upload
      </button>
      <button type="button" class="btn btn-primary btn-outline-success  my-2 my-sm-0" data-toggle="modal" data-target="#myDownloadModal">
        Download
      </button>
    </form>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="searchload.js"></script>

  <div class="container" id="search-results">
    <ul>
      <li class="title"> <a href="https://www.youtube.com/user/nostalgianerdvideos"><div class="name">Nostalgia Nerd YouTube</div>  <div class="url">https://www.youtube.com/user/nostalgianerdvideos</div>
      </a>
        <div class="description"><p>Some dude who shows his love for everything retro by creating videos with his horde of old computers. Everything from Atari to Amstrad expect to find it all on his Channel.</p>
        </div>
      </li>
      <li class="title"> <a href="https://www.youtube.com/user/phreakindee"><div class="name">LGR</div> <div class="url"> https://www.youtube.com/user/phreakindee</div></a>
        <div class="description"><p> Welcome to An LGR Thing. Enjoy Videos About Older Computers And Software From A Man with way too many old computers And Some Weird Obscure Older Tech. I've Never Touched a Zip Drive but i wouldn't be surprised if this man has 20.</p>
        </div>
        </li>
        <li class="title"> <a href="https://www.youtube.com/user/AkBKukU/"><div class="name">AkBKukU</div> <div class="url"> https://www.youtube.com/user/AkBKukU/</div></a>
          <div class="description"><p>Another Channel To Check Out All The Latest (Not Really) Retro Hardware. No I don't know how to pronounce the channel name either</p>
          </div>
        </li>
        <li class="title"> <a href="https://www.retrorgb.com/"><div class="name">RetroRGB</div> <div class="url"> https://www.retrorgb.com/</div></a>
          <div class="description"><p>Information About Mods For Retro Consoles As Well. As Upscalers For Use On Newer TVs and Monitors. No Roms Included Obviously.</p>
          </div>
        </li>
        <li class="title"> <a href="https://electronics.howstuffworks.com/everyday-tech/retro-tech.htm"><div class="name">Retro-Tech HowStuffWorks</div> <div class="url"> https://electronics.howstuffworks.com/everyday-tech/retro-tech.htm</div></a>
          <div class="description"> <p>A General Colection Of Videos Pertaining To RetroTech. Sensing a Theme Here?</p>
          </div>
        </li>
        <li class="title"> <a href="https://www.youtube.com/channel/UCnbvPS_rXp4PC21PG2k1UVg"><div class="name">Gaming Historian</div> <div class="url"> https://www.youtube.com/channel/UCnbvPS_rXp4PC21PG2k1UVg</div></a>
          <div class="description"> <p>Another Channel That Focuses Mostly On Retro Consoles and Games. Expect To see the Best And Worst Of The Atari And Sega Consoles. Anybody Else Waiting For The Sega Dreamcast 2 Cause I Know I Am.</p>
          </div>
        </li>
        <li class="title"> <a href="https://www.youtube.com/user/hard4games"><div class="name">Hard4Games</div> <div class="url"> https://www.youtube.com/user/hard4games</div></a>
          <div class="description"> <p>Everything from Retro Consoles To Actual Prototypes And Debug Versions Of Your Favorite Retro Games. The GameCube Cannot be Retro I'm Not That Old Yet.</p>
          </div>
        </li>
        <li class="title"> <a href="https://www.youtube.com/user/jimako123"><div class="name">Modern Vintage Gamer</div> <div class="url"> https://www.youtube.com/user/jimako123</div></a>
          <div class="description"> <p>Another Retro Gaming and Mod Channel Hosted By Someone Who Made His Own Homebrew For Some Of The Consoles Now Considered Retro. Again The GameCube Can't Be Retro I'm Not That Old Yet.</p>
          </div>
        </li>
        <li class="title"> <a href="https://www.youtube.com/channel/UCwOTvOtoAjiqQx1PCrfmTKw/"><div class="name">Retro Tech</div> <div class="url"> https://www.youtube.com/channel/UCwOTvOtoAjiqQx1PCrfmTKw</div></a>
          <div class="description"> <p>Another Channel That Focuses On Retro Tech But This One's Actually Named Retro Tech.  It Heavily Features Those CRT Televisions We All Know And Love. I Don't Miss Them They Were Too Heavy.</p>
          </div>
        </li>
        <li class="title"> <a href="https://www.youtube.com/user/adric22"><div class="name">The 8-Bit Guy</div> <div class ="url"> https://www.youtube.com/user/adric22</div></a>
          <div class="description"> <p>Another Channel Focusing On Both Older Game Consoles And Computers. As Well As Some Obscure Older Tech.  Best Viewed on Windows 95.</p>
          </div>
        </li>

       
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
          <!-- make accept=".xml" change with javascript or something onchange do something -->
          <input type="file" id="fileUpload" name ="fileUpload" accept=".csv">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id="Upload" onclick="openFile()">Upload</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
          <button type="button" class="btn btn-danger" id="Download" onclick="startDownload()">Download</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

    </div>

</body>
</html>
