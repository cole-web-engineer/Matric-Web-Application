<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Applicant;
use http\Url;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminMessage;
use App\Notifications\ApplicantMessage;
use App\Notifications\Admin;
use Psr\Log\NullLogger;
use Exception;


class ApplicantController extends Controller
{
    // Getting_data 

    public function post(Request $request)
    {

    	// 1st Upload Sort
        if($request->hasFile('scannedidpassport')){
            //get filename with ext
            $filenameWithExt = $request->file('scannedidpassport')->getClientOriginalName();
            //remove-white-space
            $filenameWithExt = str_replace(' ', '', $filenameWithExt);
            //get just the filename
            $name = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('scannedidpassport')->getClientOriginalExtension();
            // filename to store
            $filenameToStore = $name.'_'.time().'.'.$extension;
            //Upload the file
            $path = $request->file('scannedidpassport')->storeAs('public/uploads/ids', $filenameToStore);
        }
        else {
            $filenameToStore = 'No_ScannedIDpassport.jpg';
        }
        // 2nd-Upload-Sort
        if($request->hasFile('childbirth_cert')){
            //get filename with ext
            $filenameWithExt = $request->file('childbirth_cert')->getClientOriginalName();
            //remove-white-space
            $filenameWithExt = str_replace(' ', '', $filenameWithExt);
            //get just the filename
            $name = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('childbirth_cert')->getClientOriginalExtension();
            // filename to store
            $filenameToStore1 = $name.'_'.time().'.'.$extension;
            //Upload the file
            $path = $request->file('childbirth_cert')->storeAs('public/uploads/childbirth_cert', $filenameToStore1);
        }
        else {
            $filenameToStore1 = 'No_Childbirth_Cert.jpg';
        }


        // Saving Data to schema

        Applicant::create([

        	// details_of_applicant

        	'fullname' => $request['fullname'],
        	'email' => $request['email'],
        	'gender' => $request['gender'],
        	'mobile' => $request['mobile'],
        	'address' => $request['address'],
        	'branch' => $request['branch'],
        	'matric_year' => $request['matric_year'],
        	'matric_interest' => $request['matric_interest'],

        	// subject_choices

        	'groupOne' => $request['groupOne'],
        	'groupTwo' => $request['groupTwo'],
        	'groupThree' => $request['groupThree'],

        	// parent_details

        	'parent_name' =>$request['parent_name'],
        	'relation' =>$request['relation'],
        	'occupation' =>$request['occupation'],
        	'employer_name' =>$request['employer_name'],
        	'parent_mobile' =>$request['parent_mobile'],
        	'parent_address' =>$request['parent_address'],
        	

        	// Uploads_FileNames

        	'scannedidpassport' => $filenameToStore,
        	'childbirth_cert' => $filenameToStore1,

        ]);


        // Notifiable_Setup

        $app_info = [

        	// details_of_applicant

        	'fullname' => $request['fullname'],
        	'email' => $request['email'],
        	'gender' => $request['gender'],
        	'mobile' => $request['mobile'],
        	'address' => $request['address'],
        	'branch' => $request['branch'],
        	'matric_year' => $request['matric_year'],
        	'matric_interest' => $request['matric_interest'],

        	// subject_choices

        	'groupOne' => $request['groupOne'],
        	'groupTwo' => $request['groupTwo'],
        	'groupThree' => $request['groupThree'],

        	// parent_details

        	'parent_name' =>$request['parent_name'],
        	'relation' =>$request['relation'],
        	'occupation' =>$request['occupation'],
        	'employer_name' =>$request['employer_name'],
        	'parent_mobile' =>$request['parent_mobile'],
        	'parent_address' =>$request['parent_address'],
        	

        	// Uploads_FileNames

        	'scannedidpassport' => $filenameToStore,
        	'childbirth_cert' => $filenameToStore1,

        ];

        $app_infoo = [

        	// details_of_applicant

        	'fullname' => $request['fullname'],
        	'email' => $request['email'],
        	'gender' => $request['gender'],
        	'mobile' => $request['mobile'],
        	'address' => $request['address'],
        	'branch' => $request['branch'],
        	'matric_year' => $request['matric_year'],
        	'matric_interest' => $request['matric_interest'],


        	// subject_choices

        	'groupOne' => $request['groupOne'],
        	'groupTwo' => $request['groupTwo'],
        	'groupThree' => $request['groupThree'],

        ];

        // Notify_URL_Action  - Below (".")

        // admin_typa_message

        $when = now()->addMinutes(2);

        Notification::route('mail', 'applications@taalct.co.za')->notify(new AdminMessage($app_info));
        Notification::route('mail', 'justin@taalct.co.za')->notify((new AdminMessage($app_info))->delay($when));
        Notification::route('mail', 'info@taalct.co.za')->notify((new AdminMessage($app_info))->delay($when));

        // admin_message_

        Notification::route('mail', $request['email'])->notify((new ApplicantMessage($app_infoo))->delay($when));

        // Conditional

        

        switch ($request['branch']) {
        	case 'kempton_park':
        		# code...
        		Notification::route('mail', 'kemptonreception@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;
        	
        	case 'pretoria':
        		Notification::route('mail', 'pretoria@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;

        	case 'randburg':
        		Notification::route('mail', 'randburg@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;

        	case 'joburg':
        		Notification::route('mail', 'accountsturffontein@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;

        	case 'hazyview':
        		Notification::route('mail', 'hazyview@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;

        	case 'roodepoort':
        		Notification::route('mail', 'roodepoort@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;

        	case 'virtual':
        		Notification::route('mail', 'online@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;

        	case 'distance_learning':
        		Notification::route('mail', 'distancelearning@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;

        	default:
        		Notification::route('mail', 'info@taalct.co.za')->notify( new AdminMessage($app_info));
        		break;
        }

      

        // close_it_up - le_finale

        return $this->success();

    }

    public function success()
    {
    	// return_success_route

    	return redirect()->route('paymentPage');
    }
}
