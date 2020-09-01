@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="jumbotron">
                    <form action="~/Api/SaveUploadedFile" method="post" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                            <input type="submit" value="Upload" />
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

<script type="text/javascript">

//File Upload response from the server
Dropzone.options.dropzoneForm = {
    maxFiles: 20,
    init: function () {
        this.on("maxfilesexceeded", function (data) {
            var res = eval('(' + data.xhr.responseText + ')');

        });
        this.on("addedfile", function (file) {

            // Create the remove button
            var removeButton = Dropzone.createElement("<button>Remove file</button>");


            // Capture the Dropzone instance as closure.
            var _this = this;

            // Listen to the click event
            removeButton.addEventListener("click", function (e) {
                // Make sure the button click doesn't submit the form:
                e.preventDefault();
                e.stopPropagation();
                // Remove the file preview.
                _this.removeFile(file);
                // If you want to the delete the file on the server as well,
                // you can do the AJAX request here.
            });

            // Add the button to the file preview element.
            file.previewElement.appendChild(removeButton);
        });
    }
};






</script>

@endsection
