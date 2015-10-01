@extends('example.master')
@section('page-title','Basic Text Recognition')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Basic Text Recognition</a></li>
@stop
@section('content')
    <script type="text/javascript" src="assets/js/webcam.js"></script>
    <form id="data" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label class="control-label">Select an Image</label>
        <div class="controls">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
                                       <span class="btn btn-file">
                                       <span class="fileupload-new">Select file</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input name="image" type="file" class="default" />
                                       </span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:;" class="btn green button-submit">
        Submit <i class="m-icon-swapright m-icon-white"></i>
    </a>
</form>
    <div class="control-group">
        <label class="control-label">Result</label>
        <div class="controls">
            <textarea class="span6 m-wrap" rows="3"></textarea>
        </div>
    </div>

    <div id="my_camera"></div>
    <!-- A button for taking snaps -->
    <form>
        <input type=button class="btn btn-success" value="Take Snapshot" onClick="take_snapshot()">
    </form>
    <div id="results" class="well">Your captured image will appear here...</div>
    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 100
        });
        Webcam.attach( '#my_camera' );
        function take_snapshot() {
            // take snapshot and get image data
            Webcam.snap( function(data_uri) {
                // display results in page
                document.getElementById('results').innerHTML =
                        '<h2>Here is your image:</h2>' +
                        '<img id="res" src="'+data_uri+'"/>';

console.log(data_uri);
                var Data= new FormData();
                Data.append("saya","yoooooooo");
                Data.append("image",$("#res").attr("src"));
                $.ajax({
                    url: 'uploadFile',
                    type: 'POST',
                    data: Data,
                    success: function (data) {
                        console.log(data)

                    },
                    error: function (data) {
                        console.log(data)

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });

            } );
        }

setInterval(function(){
console.log(Webcam.loaded);
if(Webcam.loaded) {
take_snapshot();
}
},3000);
    </script>

@stop

@section('initial_js')
    jQuery(document).ready(function() {
    App.init();
    });

    $('.button-submit').click(function () {
    console.log("ini");
    $("form#data").submit();
    });

    $("form#data").submit(function(){
    App.blockUI($('#dashboard'));
    var formData = new FormData($(this)[0]);
   // var formData = new FormData();
    formData.append("ini","saya");
    $.ajax({
    url: 'uploadFile',
    type: 'POST',
    data: formData,
    success: function (data) {
    console.log(data)
    $("textarea").val(data[1]);
    App.unblockUI($('#dashboard'));
    },
    error: function (data) {
    console.log(data)
    showError(data.responseText);
    App.unblockUI($('#dashboard'));
    },
    cache: false,
    contentType: false,
    processData: false
    });

    return false;
    });



@stop
@section('js')
    <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>

@stop

@section('css')
    <link href="assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
@stop