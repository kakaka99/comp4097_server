<?php
/**
 * TatFW
 *
 * @package INDZZ
 * @author  tat@indzz.com
 */

class PayPal {
	protected $username  ;
	protected $password  ;
	protected $signature ;

	protected $isSandbox ;

	public function __construct($username, $password, $signature, $sandbox)
	{
		$this->curl = new Curl();
		$this->username = $username;
		$this->password = $password;
		$this->signature = $signature ;
		if($sandbox==0) {
			$this->isSandbox = true;
		}else{
			$this->isSandbox = false;
		}
	}

	public function post($fields) {
		$url = "https://api-3t" . ( $this->isSandbox ? '.sandbox' : '' ) . ".paypal.com/nvp";

		$this->curl->setOpt( CURLOPT_POST, true );
		$this->curl->setOpt( CURLOPT_RETURNTRANSFER, true );
		$this->curl->setOpt( CURLOPT_SSL_VERIFYPEER, false );
		$this->curl->setOpt( CURLOPT_SSL_VERIFYHOST, false );
		$this->curl->setOpt( CURLOPT_SSLVERSION, 6 );

		$fields['USER'] = $this->username;
		$fields['PWD'] = $this->password;
		$fields['SIGNATURE'] = $this->signature;
		$fields['VERSION'] = '109';

		parse_str($this->curl->post( $url, $fields ), $parsedResponse);

		return $parsedResponse;
	}

	public function setExpressCheckout($fields) {
		$response = $this->post(array_merge(array(
			'METHOD' => 'SetExpressCheckout',
			'BRANDNAME' => 'AUSTRALIA TRAVAL authorization SERVICES',
		), $fields));

	//	var_dump($response);exit;

		if ($response['ACK'] != 'Success') {
			redirect('apply/error');
		}

		return "https://www" . ( $this->isSandbox ? '.sandbox' : '' ) . ".paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=".$response['TOKEN'];
	}

	public function setExpressCheckoutPreapproval($fields) {
		$response = $this->post(array_merge(array(
			'METHOD' => 'SetExpressCheckout',
			'BRANDNAME' => 'AUSTRALIA TRAVAL authorization SERVICES',
		), $fields));

		//var_dump($response);exit;


		if ($response['ACK'] != 'Success') {
			return false;
		}
		return "https://www" . ( $this->isSandbox ? '.sandbox' : '' ) . ".paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=".$response['TOKEN'];
	}

	public function getExpressCheckoutDetails($token, $fields = array()) {
		return $this->post(array_merge(array(
			'METHOD' => 'GetExpressCheckoutDetails',
			'TOKEN' => $token,
		), $fields));
	}
}