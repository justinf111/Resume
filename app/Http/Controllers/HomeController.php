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
                        'Demonstrated quality management via using version control (GIT/Bitbucket) to manage the code base within the team and review each other’s code before deployment',
                        'Demonstrated eagerness to learn by attending Laracon and participating in online training for new technologies',
                        'Provided high customer service by attending to client needs, quickly resolving issues and seeking extra assistance as required',
                        'Worked within a team of 5 to implement new features for our access control system which is built on Laravel 5.4/5.5'
                    ]
                ],

                [
                    'title' => 'FULL STACK WEB DEVELOPER',
                    'company' => 'Chocolate Coded',
                    'time_period' => 'JUN 2015 - DEC 2016',
                    'description' => [
                        'Extensive knowledge of PHP Frameworks such as Zend Framework and Laravel 4/5 important in the development of Web Applications',
                        'Demonstrated leadership by managing team of 5 developers and providing team members with training in code development',
                        'Completed basic AWS Training and got direct experience in setting up server infrastructure for our projects',
                    ]
                ],
                [
                    'title' => 'SENIOR WEB DEVELOPER',
                    'company' => 'Magicdust',
                    'time_period' => 'MAR 2018 - DEC 2018',
                    'description' => [
                        'Demonstrated Teamwork by working with UX designers to transform Photoshop Designs into functioning WordPress Websites',
                        'Developed custom WordPress plugins to meet the client’s complex requirements',
                        'Worked with other team members to gather requirements and estimate development time for new features',
                    ]
                ],
                [
                    'title' => 'WORDPRESS/PHP DEVELOPER',
                    'company' => 'The Intermedia Group',
                    'time_period' => 'SEP 2013 - MAR 2015',
                    'description' => [
                        'Demonstrated innovation by building custom WordPress plugins to meet the needs of complex requirements',
                        'Demonstrated creativity by rebuilding websites using WordPress to improve aesthetics/adapt to the evolving needs of the client',
                        'Demonstrated adaptability by developing APIs to integrate our old systems with the new websites',

                    ]
                ],

            ]
        ]);
    }
}
