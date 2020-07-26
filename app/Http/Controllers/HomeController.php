<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome', [
            'skills' => [
                'Laravel' => 85,
                'PHP' => 90,
                'Tailwind' => 65,
                'Vuejs' => 60,
                'HTML/CSS' => 90,
                'jQuery' => 80,
                'MySQL' => 70,
                'PostGres' => 60
            ],
            'educations' => [
                [
                    'course_name' => 'CERTIFICATE 3 & 4 IN FITNESS',
                    'company' => 'Australian Institute of Fitness',
                    'time_period' => 'NOV 2016 - FEB 2017',
                ],
                [
                    'course_name' => 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY',
                    'company' => 'University of Technology Sydney',
                    'time_period' => '2011 - 2013',
                ],
                [
                    'course_name' => 'DIPLOMA OF INFORMATION TECHNOLOGY',
                    'company' => 'UTS:Insearch',
                    'time_period' => '2010 - 2011',
                ],

            ],
            'experiences' => [
                [
                    'title' => 'FULL STACK WEB DEVELOPER',
                    'company' => 'Blue Glue',
                    'time_period' => 'MARCH 2019 - PRESENT',
                    'description' => [
                        'Utilised version control (GIT/Bitbucket) to manage code base within the team and review eachothers code before deployment',
                        'Demonstrated my eagerness to learn by attending Laracon and working through online training for our technologies',
                        'Demonstrated my customer service skills by quickly resolving clients issues, and seeking extra assistance when required',
                        'Worked within a team of 5 to implement new features for our access control system which is built on Laravel 5.4/5.5'
                    ]
                ],

                [
                    'title' => 'FULL STACK WEB DEVELOPER',
                    'company' => 'Chocolate Coded',
                    'time_period' => 'JUN 2015 - DEC 2016',
                    'description' => [
                        'Developed Web Applications utilising PHP Frameworks such as Zend Framework and Laravel 4/5',
                        'Demonstrated leadership by gathered requirements and managed the workload between a team of 5 developers',
                        'Trained our Junior Developers in developing code with Laravel and other languages',
                        'Hands on experience setting up servers on AWS'
                    ]
                ],
                [
                    'title' => 'SENIOR WEB DEVELOPER',
                    'company' => 'Magicdust',
                    'time_period' => 'MAR 2018 - DEC 2018',
                    'description' => [
                        'Transformed Photoshop Designs into functioning Wordpress Websites',
                        'Developed custom Wordpress plugins to meet the clients requirements',
                        'Worked with other team members to gather requirements and estimate development time for new features',
                    ]
                ],
                [
                    'title' => 'WORDPRESS/PHP DEVELOPER',
                    'company' => 'The Intermedia Group',
                    'time_period' => 'SEP 2013 - MAR 2015',
                    'description' => [
                        'Built custom Wordpress plugins to suit the needs of complex requirements',
                        'Rebuilt websites utilising Wordpress to give our sites a fresh look',
                        'Developed APIs to integrate our old systems with the new websites'
                    ]
                ],

            ]
        ]);
    }
}
