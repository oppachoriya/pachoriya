<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $data['default_title'] = "Ads Cottage, online platform for Outdoor advertising online.";

        $data['meta_data'] = [
            ["name" => "VIEWPORT", "content" => "width=device-width, initial-scale=1.0"],
            ["name" => "COPYRIGHT", "content" => "Ads Cottage"],
            ["name" => "ABSTRACT", "content" => "Outdoor Advertising Online  "],
            ["name" => "DESCRIPTION", "content" => "Ads Cottage, online platform."],
            ["name" => "KEYWORDS", "content" => "Online, Outdoor, Advertising, Free, Ad,"],
            ["name" => "ROBOTS", "content" => "index, follow"],
            ["name" => "GOOGLEBOT", "content" => "index, follow"],
            ["name" => "GOOGLE-SITE-VERIFICATION", "content" => ""],
            ["name" => "REVISIT-AFTER", "content" => "2 days"],
            ["name" => "LANGUAGE", "content" => "en"],
            ["name" => "WEB_AUTHOR", "content" => "Pachoriya"],
            ["name" => "DISTRIBUTION", "content" => "global"],
            ["name" => "AUTHOR", "content" => "O.P. Pachoriya"]
        ];

        $data['css_data'] = [
            "/css/adscottage.css",
            "/css/bootstrap.min.css",
            "/css/font-awesome.min.css",
            "/css/map.css"
        ];

        $data['js_data'] = [
            "/js/jquery.js",
            "/js/adscottage.js",
            "/js/bootstrap.min.js"
        ];

        $data['contacts'] = [
            'social' => ["facebook" => "",
                "linkedin" => "",
                "twitter" => "",
                "googleplus" => ""],
            'phone' => ['+91 7769871184',
                '+91 8600378752'],
            'address' => ['Yugal Nadala, Baner, Pune, Maharashtra (India)'],
            'email' => ['info@adscottage.com']
        ];

        $data['tab_list'] = ['Home' => '/home',
            'Inventory' => ['Map Based' => '/explore/map',
                'Gallery' => '/explore/gallery'],
            'Services' => ['Services' => '/info/services',
                'Planning' => '/info/planning',
                'Research' => '/info/research',
                'Advertisers' => '/info/advertisers',
                'Ad Site Owners' => '/info/adsiteowner',
                'Creative Makers' => '/info/creativemaker'],
            'Why Us' => ['Features' => '/info/feature',
                'Pricing' => '/info/pricing'],
            'About' => [
                'About' => '/info/about',
                'Testimonial' => '/info/testimonial',
                'Team' => '/info/team'],
            'Join Us' => ['Advertisers' => '/joinus/advertisers',
                'Ad Site Owners' => '/joinus/adsiteowner',
                'Creative Makers' => '/joinus/creativemaker',
                'Sales' => '/joinus/sales',
                'Technology' => '/joinus/tech',
                /*'Culture' => '/info/culture'*/],
            'Contact Us' => '/info/contact',
        ];

        $data['pricing_info'] = [
            ["name" => 'Basic', "price" => "3", "period" => "per month", "user" => "1 User", "project" => "1  projects", "info_1" => "info 1", "info_2" => "info 2", "info_4" => "info 4", "info_3" => "info 3", "isbest" => false, "link" => "#"],
            ["name" => 'Moderate', "price" => "5", "period" => "per month", "user" => "2 User", "project" => "3  projects", "info_1" => "info 1", "info_2" => "info 2", "info_4" => "info 4", "info_3" => "info 3", "isbest" => true, "link" => "#"],
            ["name" => 'Ultra', "price" => "10", "period" => "per month", "user" => "5 User", "project" => "10  projects", "info_1" => "info 1", "info_2" => "info 2", "info_4" => "info 4", "info_3" => "info 3", "isbest" => false, "link" => "#"],
            ["name" => 'Advance', "price" => "100", "period" => "per month", "user" => "60 User", "project" => "120 projects", "info_1" => "info 1", "info_2" => "info 2", "info_4" => "info 4", "info_3" => "info 3", "isbest" => false, "link" => "#"]
        ];
        $data['page_content'] = 'explore/map';
        $this->load->view('layout/default', $data);
    }
}
