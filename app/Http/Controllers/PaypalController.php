<?php

namespace App\Http\Controllers;

use App\Star;
use App\Http\Requests\StarRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use Paypal;
use Session;

class PaypalController extends Controller
{

    private $_apiContext;

    public function __construct()
    {
        $this->_apiContext = PayPal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));

    }

    public function payPremium()
    {
    	return view('pages/sponsor');
    }

    public function getCheckout(Request $request)
	{
        
        // Store a piece of data in the session...
        $name = $request->input('name');
        $email = $request->input('email');
        $donation = $request->input('donation');
        Session::set('name', $name);
        Session::set('email', $email);
        Session::set('donation', $donation);
        
	    $payer = PayPal::Payer();
	    $payer->setPaymentMethod('paypal');

	    $amount = PayPal:: Amount();
	    $amount->setCurrency('EUR');
	    $amount->setTotal($request->input('donation'));

	    $transaction = PayPal::Transaction();
	    $transaction->setAmount($amount);
	    $transaction->setDescription('Buy Premium '.$request->input('type').' Plan on '.$request->input('pay'));

	    $redirectUrls = PayPal:: RedirectUrls();
	    $redirectUrls->setReturnUrl(route('addStars'));
	    $redirectUrls->setCancelUrl(route('getCancel'));

	    $payment = PayPal::Payment();
	    $payment->setIntent('sale');
	    $payment->setPayer($payer);
	    $payment->setRedirectUrls($redirectUrls);
	    $payment->setTransactions(array($transaction));

	    $response = $payment->create($this->_apiContext);
	    $redirectUrl = $response->links[1]->href;

	    return redirect()->to( $redirectUrl );
	}

	public function getDone(Request $request)
	{
	    $id = $request->get('paymentId');
	    $token = $request->get('token');
	    $payer_id = $request->get('PayerID');

	    $payment = PayPal::getById($id, $this->_apiContext);

	    $paymentExecution = PayPal::PaymentExecution();

	    $paymentExecution->setPayerId($payer_id);
	    $executePayment = $payment->execute($paymentExecution, $this->_apiContext);
        
        
/*        $star = new Star();
        $star->name(Session::get('name'));
        $star->email(Session::get('email'));
        $star->donation(Session::get('donation'));
        $star->save();*/
        
        $star = new Star;

        $star->name = Session::get('name');
        $star->email = Session::get('email');
        $star->donation = Session::get('donation');

        $star->save();


	    
	   // print_r($executePayment);
        return view('pages/addStars', compact('id','star'));
	}

	public function getCancel()
	{
	    return redirect()->route('payPremium');
	}
	public function test()
	{
        $id = 'ddd';
        $star = 'David';
	    return view('pages/test', compact('id','star'));
	}
}
