<?php

namespace Wirecore\Dynadot;

class DynadotApi {
    
	protected $token;
	
	public function __construct($token){
        $this->token = $token;
    }
	
	// search
	public function search($additionalParams = array()){
		$url = $this->buildUrl("search",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// register
	public function register($additionalParams = array()){
		$url = $this->buildUrl("register",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// delete
	public function delete($additionalParams = array()){
		$url = $this->buildUrl("delete",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// renew
	public function renew($additionalParams = array()){
		$url = $this->buildUrl("renew",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// transfer
	public function transfer($additionalParams = array()){
		$url = $this->buildUrl("transfer",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// domain_info
	public function domain_info($additionalParams = array()){
		$url = $this->buildUrl("domain_info",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_whois
	public function set_whois($additionalParams = array()){
		$url = $this->buildUrl("set_whois",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_ns
	public function set_ns($additionalParams = array()){
		$url = $this->buildUrl("set_ns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_parking
	public function set_parking($additionalParams = array()){
		$url = $this->buildUrl("set_parking",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_forwarding
	public function set_forwarding($additionalParams = array()){
		$url = $this->buildUrl("set_forwarding",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_stealth
	public function set_stealth($additionalParams = array()){
		$url = $this->buildUrl("set_stealth",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_hosting
	public function set_hosting($additionalParams = array()){
		$url = $this->buildUrl("set_hosting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_dns
	public function set_dns($additionalParams = array()){
		$url = $this->buildUrl("set_dns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_dns2
	public function set_dns2($additionalParams = array()){
		$url = $this->buildUrl("set_dns2",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_free_hosting
	public function set_free_hosting($additionalParams = array()){
		$url = $this->buildUrl("set_free_hosting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_email_forward
	public function set_email_forward($additionalParams = array()){
		$url = $this->buildUrl("set_email_forward",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_clear_domain_setting
	public function set_clear_domain_setting($additionalParams = array()){
		$url = $this->buildUrl("set_clear_domain_setting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder
	public function set_folder($additionalParams = array()){
		$url = $this->buildUrl("set_folder",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_note
	public function set_note($additionalParams = array()){
		$url = $this->buildUrl("set_note",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_renew_option
	public function set_renew_option($additionalParams = array()){
		$url = $this->buildUrl("set_renew_option",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_privacy
	public function set_privacy($additionalParams = array()){
		$url = $this->buildUrl("set_privacy",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// list_domain
	public function list_domain(){
		$url = $this->buildUrl("list_domain");
		$result = $this->run($url);
		return $result;	
	}
	
	// create_contact
	public function create_contact($additionalParams = array()){
		$url = $this->buildUrl("create_contact",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// edit_contact
	public function edit_contact($additionalParams = array()){
		$url = $this->buildUrl("edit_contact",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// delete_contact
	public function delete_contact($additionalParams = array()){
		$url = $this->buildUrl("delete_contact",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// contact_list
	public function contact_list($additionalParams = array()){
		$url = $this->buildUrl("contact_list",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_contact
	public function get_contact($additionalParams = array()){
		$url = $this->buildUrl("get_contact",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_transfer_auth_code
	public function get_transfer_auth_code($additionalParams = array()){
		$url = $this->buildUrl("get_transfer_auth_code",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// add_ns
	public function add_ns($additionalParams = array()){
		$url = $this->buildUrl("add_ns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// register_ns
	public function register_ns($additionalParams = array()){
		$url = $this->buildUrl("register_ns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_ns_ip
	public function set_ns_ip($additionalParams = array()){
		$url = $this->buildUrl("set_ns_ip",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// delete_ns
	public function delete_ns($additionalParams = array()){
		$url = $this->buildUrl(delete_ns);
		$result = $this->run($url);
		return $result;	
	}
	
	// server_list
	public function server_list($additionalParams = array()){
		$url = $this->buildUrl("server_list",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// account_info
	public function account_info($additionalParams = array()){
		$url = $this->buildUrl("account_info",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_whois
	public function set_default_whois($additionalParams = array()){
		$url = $this->buildUrl("set_default_whois",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_ns
	public function set_default_ns($additionalParams = array()){
		$url = $this->buildUrl("set_default_ns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_parking
	public function set_default_parking($additionalParams = array()){
		$url = $this->buildUrl("set_default_parking",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_forwarding
	public function set_default_forwarding($additionalParams = array()){
		$url = $this->buildUrl("set_default_forwarding",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_stealth
	public function set_default_stealth($additionalParams = array()){
		$url = $this->buildUrl("set_default_stealth",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_hosting
	public function set_default_hosting($additionalParams = array()){
		$url = $this->buildUrl("set_default_hosting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_dns
	public function set_default_dns($additionalParams = array()){
		$url = $this->buildUrl("set_default_dns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_dns2
	public function set_default_dns2($additionalParams = array()){
		$url = $this->buildUrl("set_default_dns2",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_free_hosting
	public function set_default_free_hosting($additionalParams = array()){
		$url = $this->buildUrl("set_default_free_hosting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_email_forward
	public function set_default_email_forward($additionalParams = array()){
		$url = $this->buildUrl("set_default_email_forward",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_clear_default_setting
	public function set_clear_default_setting($additionalParams = array()){
		$url = $this->buildUrl("set_clear_default_setting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_default_renew_option
	public function set_default_renew_option($additionalParams = array()){
		$url = $this->buildUrl("set_default_renew_option",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// create_folder
	public function create_folder($additionalParams = array()){
		$url = $this->buildUrl("create_folder",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// delete_folder
	public function delete_folder($additionalParams = array()){
		$url = $this->buildUrl("delete_folder",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_whois
	public function set_folder_whois($additionalParams = array()){
		$url = $this->buildUrl("set_folder_whois",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_ns
	public function set_folder_ns($additionalParams = array()){
		$url = $this->buildUrl("set_folder_ns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_parking
	public function set_folder_parking($additionalParams = array()){
		$url = $this->buildUrl("set_folder_parking",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_forwarding
	public function set_folder_forwarding($additionalParams = array()){
		$url = $this->buildUrl("set_folder_forwarding",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_stealth
	public function set_folder_stealth($additionalParams = array()){
		$url = $this->buildUrl("set_folder_stealth",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_hosting
	public function set_folder_hosting($additionalParams = array()){
		$url = $this->buildUrl("set_folder_hosting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_dns
	public function set_folder_dns($additionalParams = array()){
		$url = $this->buildUrl("set_folder_dns",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_dns2
	public function set_folder_dns2($additionalParams = array()){
		$url = $this->buildUrl("set_folder_dns2",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_free_hosting
	public function set_folder_free_hosting($additionalParams = array()){
		$url = $this->buildUrl("set_folder_free_hosting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_email_forward
	public function set_folder_email_forward($additionalParams = array()){
		$url = $this->buildUrl("set_folder_email_forward",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_clear_folder_setting
	public function set_clear_folder_setting($additionalParams = array()){
		$url = $this->buildUrl("set_clear_folder_setting",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_name
	public function set_folder_name($additionalParams = array()){
		$url = $this->buildUrl("set_folder_name",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// set_folder_renew_option
	public function set_folder_renew_option($additionalParams = array()){
		$url = $this->buildUrl("set_folder_renew_option",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// folder_list
	public function folder_list($additionalParams = array()){
		$url = $this->buildUrl("folder_list",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// add_backorder_request
	public function add_backorder_request($additionalParams = array()){
		$url = $this->buildUrl("add_backorder_request",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// delete_backorder_request
	public function delete_backorder_request($additionalParams = array()){
		$url = $this->buildUrl("delete_backorder_request",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// backorder_request_list
	public function backorder_request_list($additionalParams = array()){
		$url = $this->buildUrl("backorder_request_list",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_open_auctions
	public function get_open_auctions($additionalParams = array()){
		$url = $this->buildUrl("get_open_auctions",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_auction_details
	public function get_auction_details($additionalParams = array()){
		$url = $this->buildUrl("get_auction_details",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// place_auction_bid
	public function place_auction_bid($additionalParams = array()){
		$url = $this->buildUrl("place_auction_bid",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_closed_auctions
	public function get_closed_auctions($additionalParams = array()){
		$url = $this->buildUrl("get_closed_auctions",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// is_processing
	public function is_processing($additionalParams = array()){
		$url = $this->buildUrl("is_processing",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_open_backorder_auctions
	public function get_open_backorder_auctions($additionalParams = array()){
		$url = $this->buildUrl("get_open_backorder_auctions",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_backorder_auction_details
	public function get_backorder_auction_details($additionalParams = array()){
		$url = $this->buildUrl("get_backorder_auction_details",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// place_backorder_auction_bid
	public function place_backorder_auction_bid($additionalParams = array()){
		$url = $this->buildUrl("place_backorder_auction_bid",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// get_closed_backorder_auctions
	public function get_closed_backorder_auctions($additionalParams = array()){
		$url = $this->buildUrl("get_closed_backorder_auctions",$additionalParams);
		$result = $this->run($url);
		return $result;	
	}
	
	// internal functions
	private function buildUrl($command,$additionalParams = array()){
		
		//$url = $this->RequestUrl;
		$url = "https://api.dynadot.com/api3.xml?";
		
		// build query
		$params = array("key" => $this->token,"command" => $command);
		$params = array_merge($params,$additionalParams);
		
		$url = $url.http_build_query($params);
		
		return $url;
		
	}
	
	private function run($url){
		
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url
		]);
		
		// Send the request & save response to $resp
		$resp = curl_exec($curl);
		// Close request to clear up some resources
		curl_close($curl);
		
		$xml = simplexml_load_string($resp);
		$json = json_encode($xml);
		$array = json_decode($json,TRUE);	
		
		return $array;
		
	}

}
