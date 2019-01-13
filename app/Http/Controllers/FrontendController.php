<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Textblock;
use App\Models\Service;
use Mail;
use App\Mail\Sendmail;
use App\Mail\Sendmail_service;
use App\Mail\Sendmail_message2;
use App\Mail\Sendmail_vacancy;
use App\Mail\Sendmail_message;
use App\Mail\Sendmail_req;
use App\Mail\Sendmail_cons;
use App\Mail\Sendmail_testi;

class FrontendController extends Controller
{
    public function index( Request $request, $id="" ) {
        $mainSlider = Textblock::where('id', 1)->first()->text;
        $howToPay = Textblock::where('id', 2)->first()->text;
        $services = Textblock::where('id', 3)->first()->text;
        $vacancies = Textblock::where('id', 4)->first()->text;
        $waii = Textblock::where('id', 5)->first()->text;
        $hww = Textblock::where('id', 6)->first()->text;
        $alreadyUsed = Textblock::where('id', 7)->first()->text;
        $ourPartners = Textblock::where('id', 8)->first()->text;
        $otcet = Textblock::where('id', 9)->first()->text;
        $figures = Textblock::where('id', 10)->first()->text;
        $why = Textblock::where('id', 11)->first()->text;
        $pricers = Textblock::where('id', 12)->first()->text;
        $lic = Textblock::where('id', 13)->first()->text;
        $about = Textblock::where('id', 14)->first()->text;
        $testi = Textblock::where('id', 15)->first()->text;
        $quiz = Textblock::where('id', 16)->first()->text;
        $footer = Textblock::where('id', 17)->first()->text;
        $popup_phone = Textblock::where('id', 18)->first()->text;

        // Arman
        $myservices = Service::get();
        $myservice = Service::where('id', $id)->first();
        //dd($myservice);

    	return view('frontend.index')->with([
            'mainSlider' => $mainSlider,
            'howToPay' => $howToPay,
            'services' => $services,
            'vacancies' => $vacancies,
            'waii' => $waii,
            'hww' => $hww,
            'alreadyUsed' => $alreadyUsed,
            'ourPartners' => $ourPartners,
            'ourPartners' => $ourPartners,
            'otcet' => $otcet,
            'figures' => $figures,
            'why' => $why,
            'pricers' => $pricers,
            'lic' => $lic,
            'about' => $about,
            'testi' => $testi,
            'quiz' => $quiz,
            'footer' => $footer,
    		'popup_phone' => $popup_phone,
            'myservices' => $myservices,
            'myservice' => $myservice
    	]);
    }

    public function send_message(Request $request) {

	  $this->validate($request, [
	        'name' => 'required',
	        'phone' => 'required',
	        'text' => 'required'
	    ]);

	  	$message = array_add($request->all(), 'status', 'new');;
	   
	    $user = Message::create($message);

    	return redirect('/');
    }    

    public function mail(Request $request)
    {
        $data = [
            'text' => $request->text,
            'phone' => $request->phone,
            'name' => $request->name,
        ];

        Mail::to(env('MAIL_TO'))->send(new Sendmail($data));
        return redirect('/');
    }

    public function mail_service(Request $request)
    {
        $data = [
            'service-name' => $request->serviceName,
            'name' => $request->name,
            'number' => $request->number,
            'short-description' => $request->shortDescription,
            'city' => $request->cityService,

        ];

        //dd($data);

        Mail::to(env('MAIL_TO'))->send(new Sendmail_service($data));
        return redirect('/');
    }

    public function mail_message_from_mobile_menu(Request $request)
    {
        $data = [
            'name' => $request->name,
            'text' => $request->text,
            'phone' => $request->phone
        ];

        Mail::to(env('MAIL_TO'))->send(new Sendmail_message2($data));
        return redirect('/');
    }

    public function mail_vacancy(Request $request)
    {
        $document = $request->file('document');

        $data = [
            'document' => $document,
            'vacancy' => $request->vacancy
        ];

        Mail::to(env('MAIL_TO'))->send(new Sendmail_vacancy($data));
        return redirect('/');
    }

    public function mail_message(Request $request)
    {
        $data = [
            'name' => $request->name,
            'number' => $request->number,
            'city' => $request->cityCallOrder
        ];

        //dd($data);

        Mail::to(env('MAIL_TO'))->send(new Sendmail_message($data));
        return redirect('/');
    }

    public function mail_req(Request $request)
    {
        $data = [
            'name' => $request->name,
            'when' => $request->when,
            'phone' => $request->phone,
            'lang' => $request->lang,
            'city' => $request->city
        ];


        Mail::to(env('MAIL_TO'))->send(new Sendmail_req($data));
        return redirect('/');
    }

    public function mail_testi(Request $request)
    {
        $data = [
            'name' => $request->name,
            'text' => $request->text,
            'phone' => $request->phone
        ];

        Mail::to(env('MAIL_TO'))->send(new Sendmail_testi($data));
        return redirect('/');
    }

    public function mail_cons(Request $request)
    {
        $data = [
            'name' => $request->name,
            'when' => $request->when,
            'phone' => $request->phone,
            'lang' => $request->lang,
            'city' => $request->city,
            'interest' => $request->interest
        ];

        Mail::to(env('MAIL_TO'))->send(new Sendmail_cons($data));
        return redirect('/');
    }
    
}
