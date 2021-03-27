<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverDimension;
use Illuminate\Http\Request;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome\ChromeProcess;
use Spatie\Browsershot\Browsershot;
use Tests\DuskTestCase;

class TakeScreenShortController extends Controller
{
     public function takeScreenshot(Request $request){

     	/*
     	 try {
	        // create the API client instance
	        $client = new \Pdfcrowd\HtmlToImageClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");

	        // configure the conversion
	        $client->setOutputFormat("png");

	        // run the conversion and store the result into the "image" variable
	        $image = $client->convertUrl("http://google.com/");

	        // send the result and set HTTP response headers
	        return response($image)
	            ->header('Content-Type', 'image/png')
	            ->header('Cache-Control', 'no-cache')
	            ->header('Accept-Ranges', 'none')
	            ->header('Content-Disposition', 'attachment; filename="result.png"');
	    }
	    catch(\Pdfcrowd\Error $why) {
	        // send the error in the HTTP response
	        return response($why->getMessage(), $why->getCode())
	            ->header('Content-Type', 'text/plain');
	    }
	    */
        /*
     	
     		 $this->browse(function (Browser $browser) {
	            $browser->visit('http://google.com/')
	                    ->screenshot('screen_short')
	                    ->resize(300,400)
	                    ->assertSee('Reference');
	        });

	        */


            
	        $filename = date('Y-m-d-H-i-s') . '.png';
            //$url = "http://google.com";
            //$url = "https://makitweb.com/take-screenshot-of-webpage-with-html2canvas/";
            $url = "http://localhost:8000/ss";

     		Browsershot::url($url)
                         ->waitUntilNetworkIdle()
                         ->setDelay('1000')
                          ->userAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1')
                            ->windowSize(375, 400)
                            //->deviceScaleFactor(3)
                            ->mobile()
                            ->touch()
                            ->landscape(false)
                            ->dismissDialogs()
                            ->timeout(120)
                            ->noSandbox()
                            //->setNodeBinary('/usr/local/bin/node')
                            //->setNpmBinary('/usr/local/bin/npm')
     					->save(public_path('ss/'. $filename));

			
            echo "Generated";

     		/*
     		
     		//$url = "http://localhost:8000/screen_short/";
            //$url = "http://youtube.com/";
            //$url = "http://google.com";
            $url = "https://makitweb.com/take-screenshot-of-webpage-with-html2canvas/";
        
            //Make a chrome browser
            $process = (new ChromeProcess)->toProcess();
            $process->start();
            $options = (new ChromeOptions)->addArguments(['--disable-gpu', '--headless']);
            $capabilities = DesiredCapabilities::chrome()->setCapability(ChromeOptions::CAPABILITY, $options);
            $driver = retry(5, function () use($capabilities) {
                return RemoteWebDriver::create('http://localhost:9515', $capabilities);
            }, 50);
            $browser = new Browser($driver);
            
            //Start by setting your full desired width and an arbitrary height
            $size = new WebDriverDimension(375, 400);
            $browser->driver->manage()->window()->setSize($size);

            $browser->visit($url);

            //Resize to full height for a complete screenshot
            $body = $browser->driver->findElement(WebDriverBy::tagName('body'));
            if (!empty($body)) {
                $currentSize = $body->getSize();
                
                //optional: scroll to bottom and back up, to trigger image lazy loading
                $browser->driver->executeScript('window.scrollTo(0, ' . $currentSize->getHeight() . ');');
                $browser->pause(1000); //wait a sec
                $browser->driver->executeScript('window.scrollTo(0, 0);'); //scroll back to top of the page

                //set window to full height
                $size = new WebDriverDimension(375, $currentSize->getHeight()); //make browser full height for complete screenshot
                $browser->driver->manage()->window()->setSize($size);
            }

            $browser->pause(10000); //wait for 3s to give everything time to finish loading - probably better to actually check

            $image = $browser->driver->TakeScreenshot(); //$image is now the image data in PNG format
            
            //save the image somewhere useful
            $filename = date('Y-m-d-H-i-s') . '.png'; //timestamp as a filename
            file_put_contents(public_path('ss/') . $filename, $image);
            
            return file_exists(public_path('ss/')  . $filename) ? public_path('ss/') . $filename : false;  
            */
            
        
        }

}
