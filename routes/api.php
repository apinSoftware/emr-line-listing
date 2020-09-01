<?php
use App\User;
use GuzzleHttp\Client;
use App\ApointmentTemp;
use App\PreviousUploads;
use App\Imports\BooksImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/importdata', function (Request $request) {  
    $previousUpload = PreviousUploads::where(['id'=> $request->input('processId')])->first(); 
    $previousUpload->id =  $request->input('processId');  
    $previousUpload->status_id = 2;        
    $previousUpload->save();   
    ini_set('max_execution_time', 0);
    ini_set('memory_limit', '-1');
    $uploadedFileName = explode('.', $previousUpload->file_name);
    DB::connection()->getpdo()->exec("CALL setup_table('list_".$uploadedFileName[0]."')"); 
    DB::connection()->getpdo()->exec("CALL setup_table('tbl_perfomance_".$uploadedFileName[0]."')"); 
    Excel::import(new BooksImport($uploadedFileName[0]),'C:/wamp64/www/k4action/public/linelist/'.$previousUpload->file_name); 
    DB::connection()->getpdo()->exec( "CALL generate_tbl_perfomance('tbl_perfomance_".$uploadedFileName[0]. "', 'list_".$uploadedFileName[0] ."' )"); 
    $previousUpload->id =  $request->input('processId');  
    $previousUpload->status_id = 3;        
    $previousUpload->save();     
})->name('importdata');

Route::get('/generate-appointments', function (Request $request) {
    return DB::select("CALL gen_appointments()");

})->name('appointments');

Route::get('/sendSMS', function (Request $request) {
    /*    $client = new \GuzzleHttp\Client();
       $request = $client->get('https://cloud.nuobjects.com/api/send/?
       user=Adpay&pass=wonder123456789&to=2347038122917&from=APIN&msg=Testing');
       $response = $request->getBody(); */
       $appointments =  (array)  DB::table('appointments_temp')->where(['sent'=>0])->pluck('PhoneNumber')->toArray();
       $appointmentsGet =   DB::table('appointments_temp')->where(['sent'=>0])->get();
       $finalNumbers = implode (", ",$appointments ); 
   
       //https://github.com/mavinoo/laravelBatch batch updates of nos
   
       $userInstance = new ApointmentTemp;
       $sent = [];
       $ids = [];
       foreach($appointmentsGet as $key => $app){
           $ids[$key]['id'] =  $app->id;
           $ids[$key]['sent'] =  1;
           $sent[$key]['PepID'] =  $app->PepID;
           $sent[$key]['VisitDate'] =   $app->MaxDate;
           $sent[$key]['PhoneNumber'] =   $app->PhoneNumber;
           $sent[$key]['AppointmentDate'] =   $app->MaxDate;
           $sent[$key]['AppointmentOffice'] =   'P';
           $sent[$key]['AppointmentData'] =   array('DrugToCollect'=>'AZT/3TC/NVP', 'NextApptDate'=>$app->MaxDate);
       }

       $client = new \GuzzleHttp\Client();
       $response = $client->post('http://pbs.apin.org.ng/Integration/MessageDeliveryRequest/PushNextAppointment', [
           'headers' => ['Content-Type' => 'application/json'],
           'body' => json_encode( $sent)
       ]);
       $res = $response->getBody();
       Batch::update($userInstance, $ids, 'id');
       return $res;
   
   })->name('appointments');
   
   

Route::get('/sendSMS2', function (Request $request) {
 /*    $client = new \GuzzleHttp\Client();
    $request = $client->get('https://cloud.nuobjects.com/api/send/?
    user=Adpay&pass=wonder123456789&to=2347038122917&from=APIN&msg=Testing');
    $response = $request->getBody(); */
    $appointments =  (array)  DB::table('appointments_temp')->where(['sent'=>0])->pluck('PhoneNumber')->toArray();
    $appointmentsGet =   DB::table('appointments_temp')->where(['sent'=>0])->get();
    $finalNumbers = implode (", ",$appointments );

    $guzzleClient = new \GuzzleHttp\Client([
        'base_uri' => 'https://cloud.nuobjects.com',
        'verify' => base_path('public/cacert.pem'),
    ]);

    $response = $guzzleClient->get('api/send/', [
        'query' => [
            'user' => 'Adpay',
            'pass' => 'wonder123456789',
            'to' =>  $finalNumbers,
            'from'=>'APIN',
            'msg'=>"Testing"
        ]
    ]);

    $res = $response->getBody();

    //https://github.com/mavinoo/laravelBatch batch updates of nos

    $userInstance = new ApointmentTemp;
    $sent = [];
    foreach($appointmentsGet as $key => $app){
        $sent[$key]['id'] =  $app->id;
        $sent[$key]['sent'] =  1;
    }
    Batch::update($userInstance, $sent, 'id');

    return $res;

})->name('appointments2');




Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Categories
    Route::apiResource('categories', 'CategoriesApiController');

    // Tags
    Route::apiResource('tags', 'TagsApiController');

    // Articles
    Route::apiResource('articles', 'ArticlesApiController');

    // Faq Categories
    Route::apiResource('faq-categories', 'FaqCategoryApiController');

    // Faq Questions
    Route::apiResource('faq-questions', 'FaqQuestionApiController');
});



Route::post('/findPatient', function (Request $request) {



   $res = DB::table('list_ekiti')
                     ->select(DB::raw("
                      `Facility`,
                     `ARTStartDate`,
                     Firstname,
                    `PatientUniqueID/ARTNo` AS pepid, 
                    DATE_FORMAT(`NextAppointment`,'%D %b %Y') as NextAppointment, 
                    TIMESTAMPDIFF(MONTH,NOW() ,DATE_ADD(`LastPickupDate`, INTERVAL DaysOfARVRefil DAY)) AS DaysInterval,
                    `DaysOfARVRefil`, 
                    `CurrentViralLoad(c/ml)` AS vl,
                    DATE_FORMAT(`DateofCurrentViralLoad(dd/mm/yy)`, '%D %b %Y') AS vlDate,
                    -1 * TIMESTAMPDIFF(MONTH,NOW() ,`DateofCurrentViralLoad(dd/mm/yy)`) AS VLInterval,
                    DATE_FORMAT(DATE_ADD(`DateofCurrentViralLoad(dd/mm/yy)`, INTERVAL 6 MONTH), '%D %b %Y') AS nextvl,
                    Weight
                      "))
                     ->where(['PatientUniqueID/ARTNo'=> $request->input('pepid')])
                     ->get()->toArray();

  /*  $res = DB::table("basetable")->where(['PatientUniqueID/ARTNo'=> 'AB-11-0268'])->get([
      'PatientUniqueID/ARTNo',
      'NextAppointment',
      'DateofCurrentViralLoad(dd/mm/yy)',
      'CurrentViralLoad(c/ml)',
      'DaysOfARVRefil'
      ])->toArray();*/
    return (array)$res[0];

})->name('find.patient');


Route::post('/rescheduleAppointments', function (Request $request) {


$values = array(
  'pepid' => $request->input('pepid'),
  'datim_code' => $request->input('datim_code'),
  'appointment_date' => date('Y-m-d' ,strtotime($request->input('appointment_date'))),
  );
  DB::table('reschedule_appointment')->insert($values);

echo json_encode($values);
})->name('reschedule.appointments');

Route::post('/articles', function (Request $request) {



   $res = DB::table('articles')
                     ->select(DB::raw("
                      imageurl,
                      title, 
                  short_text, 
                  short_text as full_text 
                      "))                    
                     ->get();

  /*  $res = DB::table("basetable")->where(['PatientUniqueID/ARTNo'=> 'AB-11-0268'])->get([
      'PatientUniqueID/ARTNo',
      'NextAppointment',
      'DateofCurrentViralLoad(dd/mm/yy)',
      'CurrentViralLoad(c/ml)',
      'DaysOfARVRefil'
      ])->toArray();*/
    return $res;

})->name('find.articles');

