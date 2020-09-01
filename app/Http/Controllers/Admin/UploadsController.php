<?php

namespace App\Http\Controllers\Admin;
use DB;
use Zip;
use App\PreviousUploads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
use Excel;

class UploadsController extends Controller
{    
   
    protected $mainSql;

    public function __construct() {
        $this->mainSql =   'coalesce(sum(status_id =1),0) as pending, 
        coalesce(sum(status_id =2),0) as queued,
        coalesce(sum(status_id =3),0) as processed
        ';
    }

    public function create()
    {
        if(Auth::user()->state == "all"){
            $previousUpload = PreviousUploads::get();   
            $stats = \DB::table('previous_uploads')->select(DB::raw( $this->mainSql ))->get();
        } else{
            $previousUpload = PreviousUploads::where(['state' =>Auth::user()->state ])->get();   
            $stats = \DB::table('previous_uploads')->select(DB::raw( $this->mainSql ))->where(['state' =>Auth::user()->state ])->get();
        }
        return view('admin.uploads.create', compact('previousUpload','stats') );
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function fileUpload(Request $request)
    {
        $_IMAGE = $request->file('file');
        $newCsvFile = '';
        $state = Auth::user()->state;
        $filename = $_IMAGE->getClientOriginalName();
        if( $filename != Auth::user()->state.".zip"){
        return response()->json([
        'message' => 'Please upload correct file'], 404);
        }
        $uploadPath = public_path().'/linelist/';
        $_IMAGE->move($uploadPath,$filename);

        $zip = Zip::open(addslashes($uploadPath. $filename));
        if($zip->extract($uploadPath) == 1){
        $uploadedFile = explode('.', $filename);
        $newCsvFile = $uploadedFile[0].'.xlsx';           
        }
        $filePath =addslashes($uploadPath. $newCsvFile);
      
        $previousUpload = new PreviousUploads;
        $previousUpload->state = $state;
        $previousUpload->file_name = $newCsvFile;
        $previousUpload->status_id = 1;        
        $previousUpload->save();
        $client = new \GuzzleHttp\Client();
        $response = $client->post('http://localhost:89/api/sms/queueList', [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'Url' => "http://127.0.0.1:8000/api/importdata?processId=".$previousUpload->id,
                'time' => 1,
            ])
        ]);
        echo json_encode($filename);
    }

    public function fileUploadV1(Request $request)
    {
        $_IMAGE = $request->file('file');
        $newCsvFile = '';
        $state = Auth::user()->state;
        $filename = $_IMAGE->getClientOriginalName();
        if( $filename != Auth::user()->state.".zip"){
        return response()->json([
        'message' => 'Please upload correct file'], 404);
        }
        $uploadPath = public_path().'/linelist/';
        $_IMAGE->move($uploadPath,$filename);

        $zip = Zip::open(addslashes($uploadPath. $filename));
        if($zip->extract($uploadPath) == 1){
        $uploadedFile = explode('.', $filename);
        $newCsvFile = $uploadedFile[0].'.csv';           
        }
        $filePath =addslashes($uploadPath. $newCsvFile);
        $query = "LOAD DATA LOCAL INFILE '" . $filePath . "'
        INTO TABLE list_".$state."
        FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'
        LINES TERMINATED BY '\n'
        IGNORE 1 LINES;
        ";
        DB::connection()->getpdo()->exec($query); 

        $generateStats = "CALL generate_tbl_perfomance('tbl_perfomance_".$state. "', 'list_".$state ."' )";
        DB::connection()->getpdo()->exec($generateStats); 
        $previousUpload = new PreviouUploads;
        $previousUpload->state = $state;
        $previousUpload->file_name = $newCsvFile;
        $previousUpload->status = 1;        
        $previousUpload->save();
        echo json_encode($filename);
    }

    public function removeUpload(Request $request)
    {   
       
        try{

            $image = str_replace('"', '', $request->file);
            $directory = public_path().'/linelist/' . $image;
            @unlink($directory );

        }
        catch(Exception $e) {

            //echo 'Message: ' .$e->getMessage();

        }
        finally{

            $message = "success";

        }

        return json_encode($image); 
        
    }
    public function test(Request $request)
    {
     $data = Excel::load('C:/wamp64/www/k4action/public/linelist/dd.xls')->get();
     dump( $data );
    }

}
