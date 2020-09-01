@extends('layouts.admin')
@section('content')
<style>
.m-b-0{
    color: #fff;
}
</style>
<section class="content">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body block-header">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-12">
                                    <h2> <?php echo ucfirst(Auth::user()->state) ?> State  Dashoard</h2>
                                    <ul class="breadcrumb p-l-0 p-b-0 ">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px"
                                            data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#706bd1">
                                            3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                                        <small>Page Views</small>
                                    </div>
                                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px"
                                            data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#2196f3">
                                            1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                                        <small>Visitors</small>
                                    </div>
                                    <button
                                        class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create
                                        New</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card l-blue">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0"><?php echo $stats[0]->pending ?></h4>
                        <p class="m-b-0">Pending</p>
                        <div class="sparkline" data-type="line" data-spot-radius="0" data-offset="90" data-width="100%" data-height="40px" data-line-width="1" data-line-color="#fff" data-fill-color="transparent"><canvas width="255" height="40" style="display: inline-block; width: 255px; height: 40px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card l-blush">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0"><?php echo $stats[0]->queued ?></h4>
                        <p class="m-b-0">Queued</p>
                        <div class="sparkline" data-type="line" data-spot-radius="0" data-offset="90" data-width="100%" data-height="40px" data-line-width="1" data-line-color="#fff" data-fill-color="transparent"><canvas width="255" height="40" style="display: inline-block; width: 255px; height: 40px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card l-green">
                    <div class="body">
                        <h4 class="m-t-0 m-b-0"><?php echo $stats[0]->processed ?></h4>
                        <p class="m-b-0">Processed</p>
                        <div class="sparkline" data-type="line" data-spot-radius="0" data-offset="90" data-width="100%" data-height="40px" data-line-width="1" data-line-color="#fff" data-fill-color="transparent"><canvas width="255" height="40" style="display: inline-block; width: 255px; height: 40px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row clearfix">             
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card user-account">
                        <div class="header">
                            <h2>Recent <strong> Uploads</strong></h2>
                            <a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-round float-right hidden-xs m-l-10">Upload Files (only .zip files are allowed)</a>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right float-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                    <th>State</th>
                                        <th>File Name</th>
                                        <th>Uploaded on</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>State</th>
                                        <th>File Name</th>
                                        <th>Uploaded on</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                @foreach($previousUpload as $key => $r)
                                    <tr >
                                        <td>
                                            {{ $r->state?? '' }}
                                        </td>
                                        <td>
                                            {{ $r->file_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ date('d-M-Y',strtotime($r->updated_at ?? '')) }}
                                        </td>
                                        <td>
                                            {{$r->status->status ?? ''}}
                                        </td>
                                    
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- MODAL END -->
@endsection
@section('scripts')
@parent
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/widgets/infobox/infobox-1.js')}}"></script>
<script src="{{asset('assets/js/pages/index.js')}}"></script>


<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>



<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>


<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
Dropzone.autoDiscover = false;
var acceptedFileTypes = ".zip"; //dropzone requires this param be a comma separated list
// imageDataArray variable to set value in crud form
var imageDataArray = new Array;
// fileList variable to store current files index and name
var fileList = new Array;
var i = 0;
$(function(){
    uploader = new Dropzone(".dropzone",{
        url: "{{route('admin.create.uploads')}}",
        paramName : "file",
        uploadMultiple :false,
        acceptedFiles : ".zip",
        addRemoveLinks: true,
        forceFallback: false,
        maxFilesize: 256, // Set the maximum file size to 256 MB
        parallelUploads: 100,
    });//end drop zone
    uploader.on("success", function(file,response) {
        imageDataArray.push(response)
        fileList[i] = {
            "serverFileName": response,
            "fileName": file.name,
            "fileId": i
        };
   
        i += 1;
        $('#item_images').val(imageDataArray);
    });
    uploader.on("error", function(file,response) {
        $(file.previewElement).find('.dz-error-message').text(response.message);
    });
    uploader.on("removedfile", function(file) {
        var rmvFile = "";
        for (var f = 0; f < fileList.length; f++) {
            if (fileList[f].fileName == file.name) {
                // remove file from original array by database image name
                imageDataArray.splice(imageDataArray.indexOf(fileList[f].serverFileName), 1);
                $('#item_images').val(imageDataArray);
                // get removed database file name
                rmvFile = fileList[f].serverFileName;
                // get request to remove the uploaded file from server
                $.get( "{{url('item/image/delete')}}", { file: rmvFile } )
                  .done(function( data ) {
                    //console.log(data)
                  });
                // reset imageDataArray variable to set value in crud form
                
                console.log(imageDataArray)
            }
        }
        
    });
});
</script>

@endsection
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Images</h4>
        </div>
        <div class="modal-body">
          <form action="" class="dropzone" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
           </form>
        </div>
        <div class="modal-footer">
          <a  href="{{route('admin.previousuploads')}}" class="btn btn-default"  >Close</a>
        </div>
      </div>
      
    </div>
</div>