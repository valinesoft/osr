<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;
use Log;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMessage;
use Spatie\Browsershot\Browsershot;

class ScreenshortController extends Notification
{
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function ss_view(Request $request)
    {
    	$first_digit = rand(1,50);
        //$first_digit =$first_digit*5;

    	$amount = $first_digit.',000';
        //$amount = '40,800';
    	$bank_details = [
    		
    		['name'=>'ICICI BANK','logo_name'=>'assets/images/icici.png','format'=>'png'],
    		['name'=>'AXIS BANK','logo_name'=>'assets/images/axisbank.jpg','format'=>'jpg'],
    		['name'=>'STATE BANK OF INDIA','logo_name'=>'assets/images/sbi.png','format'=>'png'],
    		['name'=>'UNION BANK','logo_name'=>'assets/images/unionbank.png','format'=>'png'],
    		['name'=>'BANK OF BARODA','logo_name'=>'assets/images/baroda.webp','format'=>'png'],
    		//['name'=>'YES BANK','logo_name'=>'assets/images/yesbank.png','format'=>'png'],
    		['name'=>'HDFC BANK','logo_name'=>'assets/images/hdfc.png','format'=>'png'],
    		
    		['name'=>'RBL BANK','logo_name'=>'assets/images/rbl.jpg','format'=>'png'],
    		['name'=>'KOTAK MAHINDRA BANK','logo_name'=>'assets/images/kotak.png','format'=>'png'],
    		['name'=>'STANDARD CHARTERED BANK','logo_name'=>'assets/images/sc.webp','format'=>'png'],
    	];

    	$random_bank_index = array_rand($bank_details );
    	$ref_number = "03".rand(1000000000,9999999999);
    	
    	//$date = '12:09 PM, 23 Nov 2020';
    	$todays_date = date('d M Y');
        
        $current_hour = date('H') - 1 ;

        
    	$hours = rand($current_hour,$current_hour);
    	$minutes = rand(10,59);
    	
    	if($hours<10){
    		$date = '0'.$hours.':'.$minutes.' AM, '.$todays_date;
    	}elseif ($hours>9 && $hours < 12 ) {
    		$date = $hours.':'.$minutes.' AM, '.$todays_date;
    	}elseif ($hours>11) {
    		$hours = $hours - 12;
    		if($hours<10){
    			$hours = '0'.$hours;
    		}
            if($hours == '00'){
                $hours = 12;
            }
    		$date = $hours.':'.$minutes.' PM, '.$todays_date;
    	}
    	
    	//dd($date,$hours); 


    	return view('screenshort',['amount'=>$amount,'bank'=>$bank_details[$random_bank_index],'ref_number'=>$ref_number,'date'=> $date]);
    }




    public function auto_ss(Request $request)
    {
        /*

        Browsershot::url('https://www.google.com') 

                    ->setNodeBinary('/usr/local/bin/node')
                    ->setNpmBinary('/usr/local/bin/npm')
                    //->setChromePath('/usr/local/lib/node_modules/puppeteer/.local-chromium/linux-818858')

                    ->save('example.pdf');*/

        $chat_id = '@test_bot_2701';
        $bot_url = "https://api.telegram.org/bot1415735937:AAHsFZmQWn0BrLfa6EzuNZkscNG0NvC53H4/";
        $url  = $bot_url . "sendPhoto?chat_id=" . $chat_id ;

        $post_fields = array('chat_id'   => $chat_id,
            
            'photo'     => new \CURLFile(realpath("storage/default/1.png"))
        );

        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type:multipart/form-data"
        ));
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
        $output = curl_exec($ch);

        //https://api.telegram.org/bot1415735937:AAHsFZmQWn0BrLfa6EzuNZkscNG0NvC53H4/sendMessage?chat_id=@test_bot_2701&text=Yugal


    }

    public function toTelegram()
    {
        return TelegramFile::create()
           // ->to($notifiable->telegram_user_id) // Optional
            ->to('@test_bot_2701') // Optional
            ->content('Awesome *bold* text and [inline URL](http://www.example.com/)')
            ->file('/storage/default/1.png', 'photo'); // local photo

            // OR using a helper method with or without a remote file.
            // ->photo('https://file-examples.com/wp-content/uploads/2017/10/file_example_JPG_1MB.jpg');
    }

    public function check_for_telegram(Request $request){

       // $response = Http::get('https://api.telegram.org/bot1415735937:AAHsFZmQWn0BrLfa6EzuNZkscNG0NvC53H4/sendMessage?chat_id=@test_bot_2701&text=Yugal%20Sinha');

        $chat_id = '@test_bot_2701';
        $bot_url = "https://api.telegram.org/bot1415735937:AAHsFZmQWn0BrLfa6EzuNZkscNG0NvC53H4/";
        $url  = $bot_url . "sendPhoto?chat_id=" . $chat_id ;

       //$url  = 'https://webhook.site/f8c299bd-c3fe-4b44-8a5c-870982583a09' ;

     //  dd($url);
        $filePath =public_path('/assets/ss/1.png');

        //$files = \File::files($filePath);
       // dd($files);
       
        $photo =  fopen($filePath, 'r');
       // $photo =  file_get_contents(public_path('assets/ss/1.png'));
        //$photo = \File::get(public_path('assets/ss/1.png'));

        //$photo = file_get_contents($file->getRealPath());


        //dd(gettype($photo));

        //echo '<img src="assets/ss/1.png" alt="icon" />';


        //$photo = \Storage::disk('public')->get('1.png');
        //dd($photo);
        
        $response = Http::attach(
                    'attachment', $photo, '1.png'
                )->post($url);

        
        Log::info($response->json());
        dd('end of the lins');
    }
}

//,