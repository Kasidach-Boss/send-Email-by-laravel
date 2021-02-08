<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;
use SendGrid;

class MailController extends Controller{

    // public function basic_email(){
    //     $data = array('name' =>"Kasidach");

    //     Mail::send(['text'=>'mail'], $data, function($message){
    //         $message->to('s5935512088@phuket.psu.ac.th', 'ToPTom')->subject('Lab Laravel 3SB03');
    //         $message->from('kasidachst@gmail.com','Kasidach');
    //     });
    //     echo "Basic Email Sent. Check in your inbox.";
    // }
    // public function sendMail(Request $request){
    //     $validate = $request->validate([
    //         'from' => 'required|email',
    //         'users' => 'required|array',
    //         'user.s' => 'required',
    //         'subject' => 'required|string',
    //         'body' => 'required|string',
    //     ]);
    //     $from = new \SendGrid\Mail\From($validate['from']);

    //     $tos = [];
    //     foreach($validate['users'] as $user){
    //         array_push($tos, new \SendGrid\Mail\To(json_decode($user)->email, json_decode($user)->name));
    //     }

    //     $subject = new \SendGrid\Mail\Subject($validate['subject']);

    //     $htmlContent = new \SendGrid\Mail\HtmlContent($validate['body']);

    //     $email = new \SendGrid\Mail\Mail (
    //         $from,
    //         $tos,
    //         $subject,
    //         null,
    //         $htmlContent
    //     );

    //     $sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));

    //     $response = $sendgrid->send($email);
    //     if ($response->statusCode() == 202) {
    //         return back()->with(['success' =>"E-mail successful send out!"]);
    //     }
    //     return back()->withErrors(json_decode($response->body())->errors);
    // }
    public function basic_email() {
		$data = array('name'=>"Kasidach");
		
		Mail::send(['text'=>'mail'], $data, function($message) {
			$message->to('kasidachst@hotmail.com', 'ToBoss')->subject('Laravel Basic Testing Mail');
			$message->from('s6135512045@phuket.psu.ac.th', 'Kasidach');
		});
		echo "Basic Email Sent. Check your inbox."; 
     }
    
    public function attachment_email() {
		$data = array('name'=>"Kasidach");
		
		Mail::send(['text'=>'mail'], $data, function($message) {
			$message->to('kasidachst@hotmail.com', 'ToTid')->subject('Laravel Testing Mail with Attachment');
			$message->attach('D:\Documents\3SB03-Kasidach\test.txt');
			$message->from('s6135512045h@phuket.psu.ac.th', 'Kasidach');
		});
		echo "Basic Email Sent. Check your inbox."; 
     }
    // public function sendMail(){
    //     $validated = $request->validate([
    //         'from' => 'required|email',
    //         'users' => 'required|array',
    //         'users.*' => 'required',
    //         'subject' => 'required|string',
    //         'body' => 'required|string',
    //     ]);

    //     $from = new \SendGrid\Mail\From($validated['from']);

    //     /* Add selected users email to $tos array */
    //     $tos = [];
    //     array_push($tos, new \SendGrid\Mail\To(json_decode($user)->email, json_decode($user)->name));
        

    //     /* Sent subject of mail */
    //     $subject = new \SendGrid\Mail\Subject($validated['subject']);

    //     /* Set mail body */
    //     $htmlContent = new \SendGrid\Mail\HtmlContent($validated['body']);

    //     $email = new \SendGrid\Mail\Mail(
    //         $from,
    //         $tos,
    //         $subject,
    //         null,
    //         $htmlContent
    //     );

    //     /* Create instance of Sendgrid SDK */
    //     $sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));

    //     /* Send mail using sendgrid instance */
    //     $response = $sendgrid->send($email);
    //     if ($response->statusCode() == 202) {
    //         return back()->with(['success' => "E-mails successfully sent out!!"]);
    //     }

    //     return back()->withErrors(json_decode($response->body())->errors);
    // }
    public function index()
    {
        return view('mail');
    }
    public function send(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required|email',
            'message' => 'required',
        ]);
    }
    
}