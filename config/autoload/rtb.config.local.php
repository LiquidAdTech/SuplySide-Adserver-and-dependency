<?php
/**
 * NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2016 NginAd Foundation. All Rights Reserved
 * @license GPLv3
 */

/**
 * Rtb Configuration Override
 */

return array (
		'buyside_rtb' => array(

				// supply partners class list
				'supply_partners' => array(
						
					// SPECIAL PARTNER
					// DO NOT REMOVE BuyLoopbackPartner, as it is needed
					'BuyLoopbackPartner' => array(
							'module_name' 		=> 'BuyLoopbackPartner',
							'partner_name' 		=> 'Loopback Partner for Demand Dashboard Campaigns',
							'buyer_id'			=> '99999999',
							'response_seat_id'	=> '88888888',
							'secret_key'		=> '',
							
					),
					
					// SPECIAL PARTNER
					// DO NOT REMOVE BuyHeaderBiddingPartner, as it is needed
					'BuyHeaderBiddingPartner' => array(
							'module_name' 		=> 'HeaderBiddingBuysidePartner',
							'partner_name' 		=> 'BuyHeader Bidding Partner for Live Publisher Campaigns',
							'buyer_id'			=> '7878787',
							'response_seat_id'	=> '6767676',
							'secret_key'		=> '',
									
					),
						
					// This is the default buy side partner
					// You may remove this partner if you do not wish to buy impressions via
					// OpenRTB, or you may set the buyer_id and secret_key to your partner's
					// actual buyer_id and secret_key
					'GenericBuysidePartner' => array(
							'module_name' 		=> 'GenericBuysidePartner',
							'partner_name' 		=> 'My First Sample Generic OpenRTB SSP Partner',
							/*
							 * buyer_id can be used by the SSP partner in two ways
							 * 1. As a GET parameter.
							 * Ex: http://server.nginad.com/bid?rtb_seat_id=0001&secret_key=nginad
							 * 2. As a subdomain
							 * Ex: http://0001.mynginad.com/bid?secret_key=nginad
							 */
							'buyer_id'			=> '0001',	  // can be used by  in as a subdomain
							'secret_key'		=> 'nginad',   // change this key to your own
							/*
							 * This is YOUR seat_id that you are sending back to the partner
							 * in RTB bid responses to your SSPs
							 */
							'response_seat_id'	=> '8181'
					),
					/*
					 * Fidelity RTB SSP integration
					 * 
					 * http://server.nginad.com/bid?rtb_seat_id=9876&secret_key=fid1234y
					 */
					'Fidelity SSP' => array(
							'module_name' 		=> 'FidelityBuysidePartner',
							'partner_name' 		=> 'Fidelity OpenRTB SSP Partner',
							'buyer_id'			=> '9876',
							'secret_key'		=> 'fid1234y',   // change this key to your own
							/*
							 * This is YOUR seat_id that you are sending back to the partner
							 * in RTB bid responses to your SSPs
							 */
							'response_seat_id'	=> '9874'
									
					),
					/* If the buy side partner does not use OpenRTB
					 * and rather they use a proprietary RTB, you will need
					 * to make a new custom module under:
					 * /module/
					 * and they use OpenRTB, you can simply use the existing
					 * buy side module GenericBuysidePartner
					 */
					
					/*
					 * 
					 * 
					'Sample SSP Partner 3' => array(
						'module_name' 		=> 'ProprietaryRTBPartner',
						'partner_name' 		=> 'My First Sample Custom non-OpenRTB, Proprietary RTB SSP Partner',
						'buyer_id'			=> '0003'
						'secret_key'		=> 'nginad'   // change this key to your own
					
					),
					*/
				)
		),
		'sellside_rtb' => array(
				
			// demand partners class list
			'demand_partners' => array(
			
					// SPECIAL PARTNER
					// DO NOT REMOVE LoopbackPartner, as it is needed
					'LoopbackPartner' => array(
							'class_name' 		=> 'LoopbackPartner',
							'ping_enabled'		=> true,
							'timeout_enabled'	=> false
					),
						
					/*
					 * This is a sample sell side DSP partner 
					 * in the case where the DSP is also running 
					 * NginAd OpenRTB Ad Server Software
					 * 
					 * 
					'GenericSellsidePartner' => array(
							'class_name' 		=> 'GenericSellsidePartner',
							'partner_id'		=> '0001',
							'ping_enabled'		=> true,
							'timeout_enabled'	=> false,
							// if you have a rtb_seat_id and secret_key,  add it to the url here
							'partner_rtb_url'	=> 'http://mydomainhere.com/bid?rtb_seat_id=0001&secret_key=nginad'
					),
					*/
					
					/*
					 * As you grow your RTB ad traffic network you will
					 * get more DSPs to sell traffic to.
					 * You must add a new entry for each DSP partner you sign up with.
					 *
					 * If the sell side partner does not have any OpenRTB extensions
					 * and they use OpenRTB, you can simply use the existing
					 * sell side module GenericSellsidePartner
					 * 
					 * 
					'Sample DSP Partner 2' => array(
							'class_name' 		=> 'GenericSellsidePartner',
							'partner_id'		=> '0002',
							'ping_enabled'		=> false,
							'timeout_enabled'	=> false,
							// if you have a rtb_seat_id and secret_key, add it to the url here
							'partner_rtb_url'	=> 'http://www.remote-nginad.com/bid?rtb_seat_id=0002&secret_key=nginad'
					),
					*/
				)
		),	
);
