<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserExperience;
use App\Models\UserReference;
use App\Models\UserDocument;
use App\Models\Quiz;
use App\Models\QuizAnswer;
use Validator;
use Mail;
use App\Mail\SendMail;
use Carbon\Carbon;

class AuthController extends Controller
{
    // public function ex(Request $req){
    //     echo "kjhkj h s  sdf";
    // }
    public function register(Request $request)
    {
        try {
            DB::beginTransaction();
            $rules = [
                'full_name' => 'required',
                'email' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'device_token' => 'required',
            ];

            $validated = Validator::make($request->all(), $rules);
            if ($validated->fails()) {
                return response()->json(['status' => false, 'data' => [], 'error' => $validated->errors()]);
            }
            $otp = rand(1000, 9999);
            $user = new User;
            $user->full_name     = $request->full_name;
            $user->email         = $request->email;
            $user->password      = Hash::make($request->password);
            $user->device_token  = $request->device_token;
            $user->otp           = $otp;
            $user->step          = 2;
            $user->save();

            $testMailData = [
                'body' => 'This is the body of test email.' . $otp
            ];
            Mail::to($request->email)->send(new SendMail($testMailData));
            $token = $user->createToken('apiToken')->plainTextToken;


            return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => new UserResource($user)], 'error' => []]);
        } catch (\Exception $e) {
            return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
        } finally {
            DB::commit();
        }
    }

    public function verifyOTP(Request $request)
    {
        // **** Request Validations ****
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'otp' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 400);
        }
        // **** Request Validations End****
        $authUser = User::where('email', $request->email)->where('otp', $request->otp)->first();
        if ($authUser) {
            $user = User::where('id', $authUser->id)->first();
            if ($user) {
                $user->otp_verified_at = Carbon::now();
                $user->otp = null;
                $user->save();
                $token = $user->createToken('apiToken')->plainTextToken;
                return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => new UserResource($user)], 'error' => []]);
            } else {
                return response()->json(['error' => 'User not found'], 400);
            }
        } else {
            return response()->json(['error' => 'Invalid Credentials'], 400);
        }
    }

    public function login(Request $request)
    {
        try {
            $rules = [
                'email' => 'required',
                'password' => 'required',

            ];

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {

                return response([
                    'status' => true,
                    'message' => 'incorrect username or password'
                ], 401);
            }

            $token = $user->createToken('apiToken')->plainTextToken;


            return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => $user], 'error' => []]);
        } catch (\Exception $e) {
            return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
        }
    }

    public function profile(Request $request)
    {
        //return json_encode(auth()->user()->id);
        try {
            DB::beginTransaction();

            //$data =  $request->media;
            //echo $data->getClientOriginalName();
            //print_r($request->all());
            if ($request->has('media')) {


                $file = $request->file('media');

                $fileName = $file->getClientOriginalName(); //time().'_'.$file->getClientOriginalName();

                $destinationPath = 'uploads/' . auth()->user()->id . '/' . 'profile';
                $file->move($destinationPath, $file->getClientOriginalName());

                // $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                // $fileModel->file_path = '/storage/' . $filePath;
                // $fileModel->save();
            } else {
                $fileName = 'defaultavatar.jpg';
            }

            $rules = [
                'name' => 'required',
                'phone_number' => 'required',
                'address' => 'required',
                'city' => 'required',
                'zipcode' => 'required',
                'other' => 'required',
                'device_token' => 'required',
            ];

            $validated = Validator::make($request->all(), $rules);
            if ($validated->fails()) {
                return response()->json(['status' => false, 'data' => [], 'error' => $validated->errors()]);
            }
            $user = User::find(auth()->user()->id);
            $user->name         = $request->name;
            $user->phone_number = $request->phone_number;
            $user->address      = $request->address;
            $user->city         = $request->city;
            $user->zipcode      = $request->zipcode;
            $user->other        = $request->other;
            $user->step         = 3;
            $user->avatar       = $fileName;
            $user->save();

            $token = auth('sanctum')->user()->tokens();

            return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => new UserResource($user)], 'error' => []]);
        } catch (\Exception $e) {
            return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
        } finally {
            DB::commit();
        }
    }

    public function addDocument(Request $request)
    {
        $rules = [
            'ppd' => 'required|mimes:pdf|max:10000',
            'resume' => 'required|mimes:pdf|max:10000',
            'driving_licence' => 'required|mimes:pdf|max:10000',
            'physical' => 'required|mimes:pdf|max:10000',
            'cpr' => 'required|mimes:pdf|max:10000',
            'covid_card' => 'required|mimes:pdf|max:10000'
        ];

        $validated = Validator::make($request->all(), $rules);
        if ($validated->fails()) {
            return response()->json(['status' => false, 'data' => [], 'error' => $validated->errors()]);
        }

        $data = $request->all();
        $doc = array();
        foreach ($data as $key => $value) {

            $fileName = $value->getClientOriginalName(); //time().'_'.$file->getClientOriginalName();

            $destinationPath = 'uploads/' . auth()->user()->id . '/' . 'document';
            $value->move($destinationPath, $value->getClientOriginalName());
            $doc = ['user_id' => auth()->user()->id, 'document' => $fileName];
            UserDocument::create($doc);
        }

        $user = User::find(auth()->user()->id);
        $user->step  = 4;
        $user->save();

        return response()->json(['status' => true, 'data' => ['message' => 'Document Successfully added'], 'error' => []]);
    }

    public function addExperience(Request $request)
    {

        $data = $request->data;
        for ($i = 0; $i < count($data); $i++) {
            UserExperience::create([
                'user_id' => auth()->user()->id,
                'title' => $data[$i]['title'],
                'employment' => $data[$i]['employment'],
                'company_name' => $data[$i]['company_name'],
                'location' => $data[$i]['location'],
                'currently_working_at' => $data[$i]['currently_working_at'],
                'skills' => $data[$i]['skills'],
                'start_date' => $data[$i]['start_date'],
                'end_date' => $data[$i]['end_date']
            ]);
        }

        $user = User::find(auth()->user()->id);
        $user->step  = 5;
        $user->save();

        return response()->json(['status' => true, 'data' => ['message' => 'Successfully add expirence'], 'error' => []]);
    }

    public function addReference(Request $request)
    {
        $data = $request->data;

        // $rules = [
        //     'name' => 'required',
        //     'job_title' => 'required',
        //     'phone_number' => 'required',
        //     'workplace' => 'required',
        //     'start_date' => 'required'
        // ];

        // print_r($data);
        // $validated = Validator::make($data[1], $rules);
        // if ($validated->fails()) {
        //     return response()->json(['status' => false, 'data' => [], 'error' => $validated->errors()]);
        // }

        for ($i = 0; $i < count($data); $i++) {
            UserReference::create([
                'user_id' => auth()->user()->id,
                'name' => $data[$i]['name'],
                'job_title' => $data[$i]['job_title'],
                'phone_number' => $data[$i]['phone_number'],
                'workplace' => $data[$i]['workplace'],
                'start_date' => $data[$i]['start_date'],
                'end_date' => $data[$i]['end_date']

            ]);
        }



        $user = User::find(auth()->user()->id);
        $user->step  = 6;
        $user->save();

        return response()->json(['status' => true, 'data' => ['message' => 'Successfully add reference'], 'error' => []]);
    }

    public function getQuiz(Request $request)
    {
        $data = Quiz::with(['option:id,question_id,answer'])->get()->toArray();
        return response()->json(['status' => true, 'data' => ['message' => $data], 'error' => []]);
    }

    public function logout(Request $request)
    {

        auth('sanctum')->user()->tokens()->delete();

        return response()->json(['status' => true, 'data' => ['message' => 'Successfully logged out.'], 'error' => []]);
    }

    public function forgotPassword(Request $request)
    {

        ///return response()->json(['status' => true, 'data' => ['message' => 'Successfully logged out.'], 'error' => []]);// $otp = rand(1000,9999);
        $otp = rand(1000, 9999);
        $user = User::where('email', '=', $request->email)->update(['otp' => $otp]);

        if ($user) {

            $testMailData = [
                'body' => 'This is the body of test email.' . $otp
            ];
            Mail::to($request->email)->send(new SendMail($testMailData));

            // dd('Success! Email has been sent successfully.');


            return response()->json(['status' => true, 'data' => ['message' => 'Successfully otp sent'], 'error' => []]);
        } else {
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            $password = Hash::make($request->password);

            $user = User::where([['email', '=', $request->email], ['otp', '=', $request->otp]])
                ->update(['password' => $password, 'otp' => null]);
            //print_r($user);
            if ($user) {
                return response()->json(['status' => true, 'data' => ['message' => 'Password reset successfully'], 'error' => []]);
            } else {
                return response()->json(['status' => true, 'data' => ['message' => 'Otp or email invalid'], 'error' => []]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
        }
    }

    public function quizSubmit(Request $request){
        //echo "sdf";
        //print_r($request->answers);
        //die;
        $quiz = Quiz::where('status',1)->get();
        $quizCount = $quiz->count();
        $data = $request->answers;
        //print_r($data);
        //$id = array();
        if($quizCount== count($data)){
            for($i=0; $i<count($data); $i++){
                $id[] = $data[$i]['key'];
            }

            $result = QuizAnswer::select('id','flag')->whereIn('id', $id)->where('flag','1')->get();

            echo ($result->count());
        }else{

            return response()->json(['status' => true, 'message' => 'Please attepmt all questions']);
        }

    }
}
