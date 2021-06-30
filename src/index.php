<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
</head>

<body>
  <header>
    <div class="main-header">
      <div class="header-test"></div>
      <div class="search-bar"><input id="search-bar" type="text" placeholder="Search"> </div>
      <div class="actions">
        <button id="create-folder" class="circle-icon create-folder">+</button>
        <button id="upload-file" class="circle-icon upload-file">UP</button>

      </div>
    </div>
    <div class="subheader"></div>
  </header>
  <main>
    <aside class="folder-tree-container">
      <ul>
        <pre>
        <?php
        include "fileControll/scanDir.php";
        ?>
        </pre>
      </ul>
    </aside>
    <div class=" main-content">
      <ul class=" main-content-ul">
      </ul>
    </div>
    <!-- info-container-anim -->
    <aside class="file-info-container info-container-anim file-info">
    </aside>

    <!-- CONTEXT MENU -->
    <div class="context-menu">
      <div class="container">
        <div class="rightClick showing">
          <div class="buttons">
            <button class="but new"><img id="create-folder" src="img/addFolder.svg" class="context-menu-icon" /></button>
            <button class="but edit"><img id="edit-folder" src="img/editFolder.svg" class="context-menu-icon" /></button>
            <button class="but help">&#x2753;</button>
          </div>
          <div class="overlap">&#x2190;</div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
<script src="main.js"></script>
<script src="contextMenu/contextMenu.js"></script>


<template id="create-folder-modal">
  <div class="modal-background"></div>
  <div class="modal create-folder-modal">
    <h2>CREATE NEW FOLDER</h2>
    <div style="display: flex;">
      <h4>Location: </h4>
      <p id="session-path"></p>
    </div>
    <form type="post" action="fileControll/createFolder.php">
      <input id="create-folder-name" type="text" placeholder="New folder name" required />
      <button type="submit" id="create-folder-btn">CREATE NEW FOLDER</button>
    </form>
  </div>
</template>

<template id="upload-file-modal">
  <div class="modal-background"></div>
  <div class="modal upload-file-modal">
    <h2>UPLOAD FILE</h2>
    <div style="display: flex;">
      <h4>Location: </h4>
      <p id="session-path-upload"></p>
    </div>
    <form type="post" action="fileControll/uploadFile.php">
      <input id="upload-file-name" type="file" required />
      <button type="submit" id="upload-file-btn">UPLOAD FILE</button>
    </form>
  </div>
</template>

<template id="edit-folder-modal">
  <div class="modal-background"></div>
  <div class="modal edit-folder-modal">
    <h2>EDIT FOLDER NAME</h2>
    <div style="display: flex;">
      <h4>Location: </h4>
      <p id="session-path"></p>
    </div>
    <form type="post" action="fileControll/editFolder.php">
      <input id="edit-folder-name" type="text" placeholder="" required />
      <button type="submit" id="edit-folder-btn">EDIT FOLDER NAME</button>
    </form>
  </div>
</template>