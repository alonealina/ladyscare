function clickFile() {
    document.getElementById("sample_file_name").value = 'none';
    var preview = document.getElementById("previewArea");
    var previewImage = document.getElementById("previewImage");
    preview.removeChild(previewImage);
    var img = document.createElement("img");
    img.setAttribute("src", "/img/no_image.png");
    img.setAttribute("id", "previewImage");
    preview.appendChild(img);
    document.getElementById("file_change_flg").value = 1;
  };
  
  
  
  
  
  
  var fileArea = document.getElementById('dragDropArea');
  var fileInput = document.getElementById('fileInput');
  fileArea.addEventListener('dragover', function(evt){
    evt.preventDefault();
    fileArea.classList.add('dragover');
  });
  fileArea.addEventListener('dragleave', function(evt){
      evt.preventDefault();
      fileArea.classList.remove('dragover');
  });
  fileArea.addEventListener('drop', function(evt){
      evt.preventDefault();
      fileArea.classList.remove('dragenter');
      var files = evt.dataTransfer.files;
      console.log("DRAG & DROP");
      console.table(files);
      fileInput.files = files;
      photoPreview('onChenge',files[0]);
  });
  
  
  function photoPreview(event, f = null) {
    var file = f;
    if(file === null){
        file = event.target.files[0];
    }
    var reader = new FileReader();
    var preview = document.getElementById("previewArea");
    var previewImage = document.getElementById("previewImage");
  
    if(previewImage != null) {
      preview.removeChild(previewImage);
    }
    console.log(file);
  
    if(file === undefined){
      var img = document.createElement("img");
      img.setAttribute("src", "/img/no_image.png");
      img.setAttribute("id", "previewImage");
      preview.appendChild(img);
    }
  
    reader.onloadend = function(event) {
      var img = document.createElement("img");
      img.setAttribute("src", reader.result);
      img.setAttribute("id", "previewImage");
      preview.appendChild(img);
    };
    reader.readAsDataURL(file);
  }
  
  