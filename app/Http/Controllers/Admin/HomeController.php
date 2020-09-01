<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController
{
   protected $mainSql;

   protected $quaterdatesSql;

   protected $firstDateQn;

    public function __construct() {
        $this->mainSql =  "coalesce(sum(total_patients),0) as total_patients, 
        count(total_facilities) as total_facilities,
        coalesce(sum(active),0) as active,
        coalesce((sum(ltfu) - (sum(transferred_out)  + sum(dead))),0) as ltfu_data,
        coalesce(sum(transferred_out),0) as transferred_out,
        coalesce(sum(dead),0) as dead
        ";

        $this->quaterdatesSql =  "SELECT  
        quaterDate.firstDate , DATE_ADD(DATE_ADD(quaterDate.firstDate,  INTERVAL 3 MONTH),  INTERVAL -1 DAY) AS lastday  
        FROM (SELECT   MAKEDATE(YEAR(CURDATE()), 1) + INTERVAL QUARTER(CURDATE()) QUARTER 
        - INTERVAL    1 QUARTER  AS firstDate) AS quaterDate";

        $this->lastEMRSql = "
        SELECT MAX(tbl.`emr_date`) as last_emr_date FROM(

            SELECT * FROM `tbl_perfomance_benue`
            UNION
            SELECT * FROM `tbl_perfomance_ekiti`
            UNION
            SELECT * FROM `tbl_perfomance_ogun`
            UNION
            SELECT * FROM `tbl_perfomance_ondo`
            UNION
            SELECT * FROM `tbl_perfomance_osun`
            UNION
            SELECT * FROM `tbl_perfomance_oyo`
            UNION
            SELECT * FROM `tbl_perfomance_plateau`) AS tbl;
        ";

        $this->txNewSql = "
        SELECT COUNT(`PatientUniqueID/ARTNo`) as tx_new FROM(

            SELECT * FROM `list_benue`  WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
            UNION
            SELECT * FROM `list_ekiti`  WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
            UNION
            SELECT * FROM `list_ogun`  WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
            UNION
            SELECT * FROM `list_ondo`  WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
            UNION
            SELECT * FROM `list_osun`  WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
            UNION
            SELECT * FROM `list_oyo`  WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
            UNION
            SELECT * FROM `list_plateau`  WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
            ) AS listlist";

            $this->firstDateQn = "SELECT  quaterDate.firstDate   FROM
            (SELECT  
            MAKEDATE(YEAR(CURDATE()), 1) + INTERVAL QUARTER(CURDATE()) QUARTER 
                                                  - INTERVAL    1 QUARTER  AS firstDate) AS quaterDate";
     
    }

    public function index()
    {      
        DB::connection()->getpdo()->exec("CALL gen_tbl_performance()"); 
       // $list = \DB::table('tbl_perfomance')->get();
        $states =  DB::table('tblstate')->get();
        $lgas =  DB::table('tbllga')->get();
        $lastEMRDate = '';
        $quaterdates = '';
        $txNew  = '';
        if(Auth::user()->state == "all"){
            $stats = DB::table('tbl_perfomance')
                        ->select(DB::raw($this->mainSql))->get();
            $list = DB::table('tbl_perfomance')
                     ->select( 'state', DB::raw($this->mainSql ))->groupBy('State')->get();  

            $statePerState = DB::table('tblstate')
            ->select( 'statename', DB::raw("
            COALESCE(SUM(active),0) AS active
            "))
            ->leftJoin('tbl_perfomance', 'tbl_perfomance.State', '=', 'tblstate.statename')
            ->groupBy('statename')->get();  
            $lastEMRDate = DB::connection()->getpdo()->query($this->lastEMRSql)->fetch();
            $quaterdates = DB::connection()->getpdo()->query($this->quaterdatesSql)->fetch();
            $txNew = DB::connection()->getpdo()->query($this->txNewSql)->fetch();
        }else{

            $this->txNewStateSql = " SELECT  COUNT(`PatientUniqueID/ARTNo`) AS tx_new  
                          FROM list_". Auth::user()->state ." WHERE `ARTStartDate` BETWEEN '2020-01-01' AND  '2020-03-31'
                        ";
            $this->lastEMRSql = "SELECT MAX(emr_date) as last_emr_date FROM tbl_perfomance_". Auth::user()->state ;
            $txNew = DB::connection()->getpdo()->query($this->txNewStateSql)->fetch();
            $lastEMRDate = DB::connection()->getpdo()->query($this->lastEMRSql)->fetch();
            $stats = DB::table('tbl_perfomance')
            ->select(DB::raw($this->mainSql))->where(['state' =>Auth::user()->state ])->get();
            $list = DB::table('tbl_perfomance')
         ->select( 'state', DB::raw($this->mainSql ))->where(['state' =>Auth::user()->state ])
         ->groupBy('State')
         ->get();  
        }                 
        return view('admin.home', compact('list','states','lgas','stats','statePerState','lastEMRDate', 'txNew'));
    }

    public function treatmentIndicators()
    {      
       

        $states =  DB::table('tblstate')->get();
        $lgas =  DB::table('tbllga')->get();

        $firstDateQn = DB::connection()->getpdo()->query($this->firstDateQn)->fetch();
      

        DB::connection()->getpdo()->exec("CALL gen_tbl_performance()"); 
        if(Auth::user()->state == "all"){
            $lastEMRDate = DB::connection()->getpdo()->query($this->lastEMRSql)->fetch();
            $stats = DB::table('tbl_perfomance')->select(DB::raw($this->mainSql))->get();
            $list = DB::table('tbl_perfomance')
            ->select( 'state', 'lga','facility', DB::raw($this->mainSql))
            ->groupBy('facility')->groupBy('state')->groupBy('lga')->get();
        }else{     
            $this->lastEMRSql = "SELECT MAX(emr_date) as last_emr_date FROM tbl_perfomance_". Auth::user()->state ;
            $lastEMRDate = DB::connection()->getpdo()->query($this->lastEMRSql)->fetch();
            $stats = DB::table('tbl_perfomance_'.Auth::user()->state)
            ->select(DB::raw($this->mainSql))->where(['state' =>Auth::user()->state ])->get();
            $list = DB::table('tbl_perfomance_'.Auth::user()->state)
            ->select( 'state', 'lga','facility', DB::raw($this->mainSql))->where(['state' =>Auth::user()->state ])
            ->groupBy('facility')->groupBy('state')->groupBy('lga')->get();
        }
       
        return view('admin.treament-indicators', compact('list','states','lgas','stats', 'lastEMRDate', 'firstDateQn'));
    }
}