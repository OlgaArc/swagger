<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();


$app->POST('/OlgaArc/Olga_test_api/1.0.0/auth/register/', function(Application $app, Request $request) {
            
            $name = $request->get('name');    $surname = $request->get('surname');    $middle_name = $request->get('middle_name');    $phone = $request->get('phone');    $email = $request->get('email');    $is_legal_entity = $request->get('is_legal_entity');    $organization_name = $request->get('organization_name');    $inn = $request->get('inn');    
            return new Response('How about implementing authRegisterPost as a POST method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/personal/info/', function(Application $app, Request $request) {
            $domain = $request->get('domain');    
            
            return new Response('How about implementing personalInfoGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/client/address/{address_id}', function(Application $app, Request $request, $address_id) {
            
            
            return new Response('How about implementing clientAddressAddressIdGet as a GET method ?');
            });


$app->PUT('/OlgaArc/Olga_test_api/1.0.0/client/address/{address_id}', function(Application $app, Request $request, $address_id) {
            
            $country = $request->get('country');    $kladr_code = $request->get('kladr_code');    $address = $request->get('address');    $specification = $request->get('specification');    $contact_name = $request->get('contact_name');    $contact_phone = $request->get('contact_phone');    $contact_email = $request->get('contact_email');    
            return new Response('How about implementing clientAddressAddressIdPut as a PUT method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/client/address/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing clientAddressGet as a GET method ?');
            });


$app->POST('/OlgaArc/Olga_test_api/1.0.0/client/address/', function(Application $app, Request $request) {
            
            $country = $request->get('country');    $kladr_code = $request->get('kladr_code');    $address = $request->get('address');    $specification = $request->get('specification');    $contact_name = $request->get('contact_name');    $contact_phone = $request->get('contact_phone');    $contact_email = $request->get('contact_email');    
            return new Response('How about implementing clientAddressPost as a POST method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/client/basket/count/', function(Application $app, Request $request) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing clientBasketCountGet as a GET method ?');
            });


$app->DELETE('/OlgaArc/Olga_test_api/1.0.0/client/basket/', function(Application $app, Request $request) {
            $shop_id = $request->get('shop_id');    
            $products = $request->get('products');    
            return new Response('How about implementing clientBasketDelete as a DELETE method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/client/basket/', function(Application $app, Request $request) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing clientBasketGet as a GET method ?');
            });


$app->PUT('/OlgaArc/Olga_test_api/1.0.0/client/basket/', function(Application $app, Request $request) {
            $shop_id = $request->get('shop_id');    
            $products = $request->get('products');    
            return new Response('How about implementing clientBasketPut as a PUT method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/client/order/', function(Application $app, Request $request) {
            $client_id = $request->get('client_id');    $date_start = $request->get('date_start');    $date_end = $request->get('date_end');    $status = $request->get('status');    
            
            return new Response('How about implementing clientOrderGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/client/order/{order_id}', function(Application $app, Request $request, $order_id) {
            
            
            return new Response('How about implementing clientOrderOrderIdGet as a GET method ?');
            });


$app->POST('/OlgaArc/Olga_test_api/1.0.0/client/order/', function(Application $app, Request $request) {
            
            $address_id = $request->get('address_id');    $shop_id = $request->get('shop_id');    $payment_id = $request->get('payment_id');    
            return new Response('How about implementing clientOrderPost as a POST method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/catalog/product/{product_id}/analog/', function(Application $app, Request $request, $product_id) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing catalogProductProductIdAnalogGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/catalog/product/{product_id}/certification/', function(Application $app, Request $request, $product_id) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing catalogProductProductIdCertificationGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/catalog/product/{product_id}', function(Application $app, Request $request, $product_id) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing catalogProductProductIdGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/catalog/product/{product_id}/photo/', function(Application $app, Request $request, $product_id) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing catalogProductProductIdPhotoGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/catalog/product/{product_id}/similar/', function(Application $app, Request $request, $product_id) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing catalogProductProductIdSimilarGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/catalog/section/', function(Application $app, Request $request) {
            $shop_id = $request->get('shop_id');    $section_id = $request->get('section_id');    
            
            return new Response('How about implementing catalogSectionGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/catalog/sections/', function(Application $app, Request $request) {
            $shop_id = $request->get('shop_id');    $section_id = $request->get('section_id');    
            
            return new Response('How about implementing catalogSectionsGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/geo/country/{country_id}', function(Application $app, Request $request, $country_id) {
            
            
            return new Response('How about implementing geoCountryCountryIdGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/geo/country/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing geoCountryGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/geo/location/', function(Application $app, Request $request) {
            $shop_id = $request->get('shop_id');    
            
            return new Response('How about implementing geoLocationGet as a GET method ?');
            });


$app->POST('/OlgaArc/Olga_test_api/1.0.0/geo/location/', function(Application $app, Request $request) {
            
            $city_id = $request->get('city_id');    
            return new Response('How about implementing geoLocationPost as a POST method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/client/info/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing clientInfoGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/shop/', function(Application $app, Request $request) {
            $city_id = $request->get('city_id');    
            
            return new Response('How about implementing shopGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/shop/{shop_id}', function(Application $app, Request $request, $shop_id) {
            
            
            return new Response('How about implementing shopShopIdGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/list/clientprice/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing listClientpriceGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/list/clientstatus/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing listClientstatusGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/list/orderstatus/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing listOrderstatusGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/list/paymenttype/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing listPaymenttypeGet as a GET method ?');
            });


$app->POST('/OlgaArc/Olga_test_api/1.0.0/partner/product/{product_id}', function(Application $app, Request $request, $product_id) {
            
            $include = $request->get('include');    $percent_from_purchase = $request->get('percent_from_purchase');    $my_price = $request->get('my_price');    
            return new Response('How about implementing partnerProductProductIdPost as a POST method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/section/{section_id}', function(Application $app, Request $request, $section_id) {
            
            
            return new Response('How about implementing partnerSectionSectionIdGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/sections/', function(Application $app, Request $request) {
            $section_id = $request->get('section_id');    
            
            return new Response('How about implementing partnerSectionsGet as a GET method ?');
            });


$app->POST('/OlgaArc/Olga_test_api/1.0.0/partner/sections/', function(Application $app, Request $request) {
            
            $section_id = $request->get('section_id');    $include = $request->get('include');    $percent_from_purchase = $request->get('percent_from_purchase');    
            return new Response('How about implementing partnerSectionsPost as a POST method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/client/{client_id}', function(Application $app, Request $request, $client_id) {
            
            
            return new Response('How about implementing partnerClientClientIdGet as a GET method ?');
            });


$app->PUT('/OlgaArc/Olga_test_api/1.0.0/partner/client/{client_id}', function(Application $app, Request $request, $client_id) {
            
            $manager_id = $request->get('manager_id');    $client_price = $request->get('client_price');    $status = $request->get('status');    
            return new Response('How about implementing partnerClientClientIdPut as a PUT method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/client/', function(Application $app, Request $request) {
            $date_start = $request->get('date_start');    $date_end = $request->get('date_end');    $status = $request->get('status');    $manager = $request->get('manager');    
            
            return new Response('How about implementing partnerClientGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/client/short/', function(Application $app, Request $request) {
            $date_start = $request->get('date_start');    $date_end = $request->get('date_end');    $status = $request->get('status');    $manager = $request->get('manager');    
            
            return new Response('How about implementing partnerClientShortGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/managers/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing partnerManagersGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/info/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing partnerInfoGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/rcmanagers/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing partnerRcmanagersGet as a GET method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/order/{order_id}', function(Application $app, Request $request, $order_id) {
            
            
            return new Response('How about implementing partnerOrderOrderIdGet as a GET method ?');
            });


$app->PUT('/OlgaArc/Olga_test_api/1.0.0/partner/order/{order_id}', function(Application $app, Request $request, $order_id) {
            
            $status = $request->get('status');    
            return new Response('How about implementing partnerOrderOrderIdPut as a PUT method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/orderlist/', function(Application $app, Request $request) {
            $client_id = $request->get('client_id');    $date_start = $request->get('date_start');    $date_end = $request->get('date_end');    $status = $request->get('status');    $manager = $request->get('manager');    
            
            return new Response('How about implementing partnerOrderlistGet as a GET method ?');
            });


$app->POST('/OlgaArc/Olga_test_api/1.0.0/partner/sendtobasket/{order_id}', function(Application $app, Request $request, $order_id) {
            
            $products = $request->get('products');    
            return new Response('How about implementing partnerSendtobasketOrderIdPost as a POST method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/shop/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing partnerShopGet as a GET method ?');
            });


$app->PUT('/OlgaArc/Olga_test_api/1.0.0/partner/shop/', function(Application $app, Request $request) {
            
            $name = $request->get('name');    $logo = $request->get('logo');    $color_logo = $request->get('color_logo');    $color_scheme = $request->get('color_scheme');    $about_company = $request->get('about_company');    $about_delivery = $request->get('about_delivery');    $about_payment = $request->get('about_payment');    $price_type = $request->get('price_type');    $show_stock = $request->get('show_stock');    $domain_name = $request->get('domain_name');    
            return new Response('How about implementing partnerShopPut as a PUT method ?');
            });


$app->GET('/OlgaArc/Olga_test_api/1.0.0/partner/tradepoint/', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing partnerTradepointGet as a GET method ?');
            });


$app->POST('/OlgaArc/Olga_test_api/1.0.0/partner/tradepoint/', function(Application $app, Request $request) {
            
            $date_start = $request->get('date_start');    $date_end = $request->get('date_end');    $holiday_date_start = $request->get('holiday_date_start');    $holiday_date_end = $request->get('holiday_date_end');    $work_days = $request->get('work_days');    $contact_phone = $request->get('contact_phone');    $country = $request->get('country');    $kladr_code = $request->get('kladr_code');    $address = $request->get('address');    $specification = $request->get('specification');    
            return new Response('How about implementing partnerTradepointPost as a POST method ?');
            });


$app->PUT('/OlgaArc/Olga_test_api/1.0.0/partner/tradepoint/', function(Application $app, Request $request) {
            
            $date_start = $request->get('date_start');    $date_end = $request->get('date_end');    $holiday_date_start = $request->get('holiday_date_start');    $holiday_date_end = $request->get('holiday_date_end');    $work_days = $request->get('work_days');    $contact_phone = $request->get('contact_phone');    $country = $request->get('country');    $kladr_code = $request->get('kladr_code');    $address = $request->get('address');    $specification = $request->get('specification');    
            return new Response('How about implementing partnerTradepointPut as a PUT method ?');
            });


$app->DELETE('/OlgaArc/Olga_test_api/1.0.0/partner/tradepoint/{tradepoint_id}', function(Application $app, Request $request, $tradepoint_id) {
            
            
            return new Response('How about implementing partnerTradepointTradepointIdDelete as a DELETE method ?');
            });


$app->PUT('/OlgaArc/Olga_test_api/1.0.0/partner/tradepoint/{tradepoint_id}', function(Application $app, Request $request, $tradepoint_id) {
            
            $date_start = $request->get('date_start');    $date_end = $request->get('date_end');    $holiday_date_start = $request->get('holiday_date_start');    $holiday_date_end = $request->get('holiday_date_end');    $work_days = $request->get('work_days');    $contact_phone = $request->get('contact_phone');    $country = $request->get('country');    $kladr_code = $request->get('kladr_code');    $address = $request->get('address');    $specification = $request->get('specification');    
            return new Response('How about implementing partnerTradepointTradepointIdPut as a PUT method ?');
            });


$app->run();
