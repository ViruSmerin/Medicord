<?php include('header.php'); ?>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css'>
    <style type="text/css">
        #dropzone {
            background: white;
            border-radius: 5px;
            border: 2px dashed rgb(0, 135, 247);
            border-image: none;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            min-height: 200px;
        }
        .pt-140{
            padding-top: 80px;
        }
    </style>

	<div class="app-main__inner">
        <div class="app-page-title pt-18">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="card-body p-0">
                        <div class="mr-2 btn-group">
                            <h5 style="font-size: 18px;font-weight: 700;padding-bottom: 10px;">Add New Article</h5>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block">
                        <a class="mb-2 mr-2 btn btn-light" href="./read.php">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            Back to Articles
                        </a>
                    </div>
                </div>  
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Article Details</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="article-title">Article Title</label>
                                    <input type="text" class="form-control" id="article-title" placeholder="Enter article title" required="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="article-description" class="">Description</label>
                                    <textarea name="article-description" id="editor" class="form-control" placeholder="Enter Description" required=""></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Article Images</label>
                                    <div id="dropzone">
                                        <form class="dropzone needsclick" id="demo-upload" action="/upload">
                                            <div class="dz-message needsclick pt-140">    
                                                Drop files here or click to upload.
                                            </div>
                                        </form>
                                    </div>
                                    <div id="preview-template" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail=""></div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                <div class="dz-filename">
                                                    <span data-dz-name=""></span>
                                                </div>
                                            </div>
                                            <div class="dz-progress">
                                                <span class="dz-upload" data-dz-uploadprogress=""></span>
                                            </div>
                                            <div class="dz-error-message">
                                                <span data-dz-errormessage=""></span>
                                            </div>
                                            <div class="dz-success-mark">
                                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                    <title>Check</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dz-error-mark">
                                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                    <title>error</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Article Availability</h5>
                        <form class="">
                            <div class="position-relative form-group">
                                <p class="mb-0">Available to push to live site</p>
                                <br/>
                                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                    <div class="handle"></div>
                              	</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Article Meta</h5>
                        <form class="">
                            <div class="position-relative form-group">
                                <label for="categories" class="">Categories</label>
                                <select name="categories" id="categories" class="form-control">
                                    <option>Medicine</option>
                                    <option>Safe Motherhood</option>
                                    <option>ANC</option>
                                    <option>PNC</option>
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <label for="article-owner" class="">Writer</label>
                                <input name="owner" id="article-owner" placeholder="Ronesh" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="article-tags" class="">Tags</label>
                                <input name="article-tags" id="article-tags" placeholder="Enter tags" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="article-expiry" class="">Expiry Date</label>
                                <input name="article-expiry" id="article-expiry" type="date" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleText" class="">Warnings (if any)</label>
                                <textarea name="text" id="exampleText" class="form-control" style="height: 90px;"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col-md-12 text-right mt--10">
                <button class="mt-1 btn btn-primary pl-pr-40">SAVE AND CONTINUE</button>
            </div>
        </div>
        


    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js'></script>
    <script type="text/javascript">
        var dropzone = new Dropzone('#demo-upload', {
          previewTemplate: document.querySelector('#preview-template').innerHTML,
          parallelUploads: 2,
          thumbnailHeight: 120,
          thumbnailWidth: 120,
          maxFilesize: 3,
          filesizeBase: 1000,
          thumbnail: function(file, dataUrl) {
            if (file.previewElement) {
              file.previewElement.classList.remove("dz-file-preview");
              var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
              for (var i = 0; i < images.length; i++) {
                var thumbnailElement = images[i];
                thumbnailElement.alt = file.name;
                thumbnailElement.src = dataUrl;
              }
              setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
            }
          }

        });

        var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;

        dropzone.uploadFiles = function(files) {
          var self = this;

          for (var i = 0; i < files.length; i++) {

            var file = files[i];
            totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

            for (var step = 0; step < totalSteps; step++) {
              var duration = timeBetweenSteps * (step + 1);
              setTimeout(function(file, totalSteps, step) {
                return function() {
                  file.upload = {
                    progress: 100 * (step + 1) / totalSteps,
                    total: file.size,
                    bytesSent: (step + 1) * file.size / totalSteps
                  };

                  self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                  if (file.upload.progress == 100) {
                    file.status = Dropzone.SUCCESS;
                    self.emit("success", file, 'success', null);
                    self.emit("complete", file);
                    self.processQueue();
                  }
                };
              }(file, totalSteps, step), duration);
            }
          }
        }
    </script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>



<?php include('footer.php'); ?>
