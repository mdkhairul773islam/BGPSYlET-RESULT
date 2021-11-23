<?php
// set site name
$config['site_name'] = 'Border Guard Public School and College';

$CI = & get_instance();
$CI->load->model('action');
$CI->load->database('default');
$total_sms = $CI->action->read_sum("recharge_sms","sms");
$config['total_sms'] = ($total_sms[0]->sms == null ? 0 : $total_sms[0]->sms);

// $config['total_sms']=16000;

//set databasename
$config['my_database'] = 'wwwbgpscedu_final';

// site info 
$config['header'] = array(
     "title"    => "Border Guard Public School and College",
     "place"    => "Sylhet"
);

// all month
$config['months'] = array(
    'January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December'
);

$config['month_with_number'] = array(
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December'
);

// privilege
$config['privilege'] = array('super', 'admin', 'user');


// set class
$config['classes'] = array(
    'KG'     => 'KG',
    'One'    => 'One',
    'Two'    => 'Two',
    'Three'  => 'Three',
    'Four'   => 'Four',
    'Five'   => 'Five',
    'Six'    => 'Six',
    'Seven'  => 'Seven',
    'Eight'  => 'Eight',
    'Nine'   => 'Nine',
    'Ten'    => 'Ten',
    'Eleven' => 'Eleven',
    'Twelve' => 'Twelve'
);

// set class with index
$config['class'] = array(
    'KG'     => '00',
    'One'    => '01',
    'Two'    => '02',
    'Three'  => '03',
    'Four'   => '04',
    'Five'   => '05',
    'Six'    => '06',
    'Seven'  => '07',
    'Eight'  => '08',
    'Nine'   => '09',
    'Ten'    => '10',
    'Eleven' => '11',
    'Twelve' => '12'
);

//Use Primary School Result
$config['class_for_one_to_five'] = array(
    'KG'     => 'KG',
    'One'    => 'One',
    'Two'    => 'Two',
    'Three'  => 'Three',
    'Four'   => 'Four',
    'Five'   => 'Five',
);

//Use High School Result
$config['class_for_six_to_ten'] = array(
    'Six'    => 'Six',
    'Seven'  => 'Seven',
    'Eight'  => 'Eight',
    'Nine'   => 'Nine',
    'Ten'    => 'Ten'
);

// set group
$config['group'] = array(
    'None'             => 'None',
    'Science'          => 'Science',
    'Humanities'       => 'Humanities',
    'Business-Studies' => 'Business Studies'
);

// set blood_group
$config['blood_group'] = array(
    'A+',
    'A-',
    'B+',
    'B',
    'AB+',
    'AB-',
    '0+',
    '0-',
);

// set section
$config['section'] = array(
    'A',
    'B',
    'C',
    'D',
    'E',
    'F',
    'G',
);

// set batch
$config['batch'] = array(
    'batch_1'   => 'Batch 1',
    'batch_2'   => 'Batch 2',
    'batch_3'   => 'Batch 3',
    'batch_4'   => 'Batch 4'
);

// set shift
$config['shift'] = array(
    'None'    => 'None',
    'Day'     => 'Day',
    'Morning' => 'Morning'
);

// set version
$config['version'] = array(
    'Bangla'  => 'Bangla',
    'English' => 'English',
    'Other'   => 'Other'
);

// set type
$config['type'] = array(
    'bgb'               => 'BGB',
    'civil'             => 'Civil',
    'scholarship_bgb'   => 'Scholarship BGB',
    'scholarship_civil' => 'Scholarship Civil'
);

//set religion
$config['religion']=array(
    'Islam'     => 'Islam',
    'Hindu'     => 'Hindu',
    'Buddhist'  => 'Buddhist',
    'Christian' => 'Christian',
    'Others'    => 'Others',
);

//Set Gender
$config['gender']=array(
    'male'    => 'Male',
    'female'  => 'Female',
    'other'   => 'Other',
);

// set subject
$config['subject'] = array(
    'Six' => array(
        'BANGLA',
        'ENGLISH',
        'MATHEMATICS',
        'GENERAL SCIENCE',
        'RELIGION AND MORAL EDUCATION',
        'BANGLADESH AND GLOBAL STUDIES',
        'INFORMATION AND COMMUNICATION TECHNOLOGY',
        'AGRICULTURE STUDIES'
    ),
    'Seven' => array(
        'BANGLA',
        'ENGLISH',
        'MATHEMATICS',
        'GENERAL SCIENCE',
        'RELIGION AND MORAL EDUCATION',
        'BANGLADESH AND GLOBAL STUDIES',
        'INFORMATION AND COMMUNICATION TECHNOLOGY',
        'AGRICULTURE STUDIES'
    ),
    'Eight' => array(
        'BANGLA',
        'ENGLISH',
        'MATHEMATICS',
        'GENERAL SCIENCE',
        'RELIGION AND MORAL EDUCATION',
        'BANGLADESH AND GLOBAL STUDIES',
        'INFORMATION AND COMMUNICATION TECHNOLOGY',
        'AGRICULTURE STUDIES'
    ),
    'Nine' => array(
        "BANGLA",
        "ENGLISH",
        "MATHEMATICS",
        "RELIGION AND MORAL EDUCATION",
        "INFORMATION AND COMMUNICATION TECHNOLOGY",
        "CAREER EDUCATION",
        "PHYSICAL EDUCATION",
        "PHYSICS",
        "CHEMISTRY",
        "HIGHER MATHEMATICS",
        "AGRICULTURE STUDIES",
        "BANGLADESH AND GLOBAL STUDIES",
        "GENERAL SCIENCE",
        "ECONOMICS",
        "BIOLOGY",
        "HISTORY OF BANGLADESH AND WORLD CIVILISATION",
        "GEOGRAPHY AND ENVIRONMENT"
    ),
    'Ten' => array(
        "BANGLA",
        "ENGLISH",
        "MATHEMATICS",
        "RELIGION AND MORAL EDUCATION",
        "INFORMATION AND COMMUNICATION TECHNOLOGY",
        "CAREER EDUCATION",
        "PHYSICAL EDUCATION",
        "PHYSICS",
        "CHEMISTRY",
        "HIGHER MATHEMATICS",
        "AGRICULTURE STUDIES",
        "BANGLADESH AND GLOBAL STUDIES",
        "GENERAL SCIENCE",
        "ECONOMICS",
        "BIOLOGY",
        "HISTORY OF BANGLADESH AND WORLD CIVILISATION",
        "GEOGRAPHY AND ENVIRONMENT"
    ),
    'Eleven' => array(
        "BANGLA",
        "ENGLISH",
        "ICT",
        "PHYSICS",
        "CHEMISTRY",
        "BIOLOGY",
        "HIGHER MATHEMATICS",
        "HISTORY",
        "SOCIAL WORK",
        "ECONOMICS",
        "AGRICULTURE STUDIES"
    ),
    'Twelve' => array(
        "BANGLA",
        "ENGLISH",
        "ICT",
        "PHYSICS",
        "CHEMISTRY",
        "BIOLOGY",
        "HIGHER MATHEMATICS",
        "HISTORY",
        "SOCIAL WORK",
        "ECONOMICS",
        "AGRICULTURE STUDIES"
    )
);

$config["optional"] = array(
        "None",
        "BIOLOGY",
        "HIGHER MATHEMATICS",
        "STATISTICS",
        "AGRICULTURE STUDIES",
        "HOME SCIENCE"
);

// set subject Customize
$config['subjects'] = array(
	'compolsury' => array(
		array('BANGLA', 'বাংলা', '101'),
		array('ENGLISH', 'ইংরেজী', '107'),
		array('ICT', 'তথ্য ও যোগাযোগ প্রযুক্তি', '275'),
	),
	'Science' => array(
		'compolsury' => array(
			array(
	            array('PHYSICS', 'পদার্থবিজ্ঞান', '174'),
	            array('CHEMISTRY', 'রসায়ন', '176'),
	            array('BIOLOGY', 'জীববিজ্ঞান', '178'),
                array('HIGHER MATH', 'উচ্চতর গণিত', '265')
            )
		),
		'optional' => array(
			array('BIOLOGY', 'জীববিজ্ঞান', '178'),
            array('HIGHER MATH', 'উচ্চতর গণিত', '265')
		)
	),
	'Humanities' => array(
		'compolsury' => array(
			array(
			    array('CIVICS & GOOD GOVERNANCE','পৌরনীতি ও সুশাসন','269'),
                array('SOCIOLOGY', 'সমাজ বিজ্ঞান', '117'),
                array('ISLAM HISTORY AND CULTURE', 'ইসলামের ইতিহাস ও সংস্কৃতি', '267'),
                array('ECONOMICS', 'অর্থনীতি', '109'),
                /*  array('LOGIC', 'যুক্তিবিদ্যা', '121'),
                    array('Social Work', 'Social Work', '271'),
    			    array('History', 'History', '304'),
    			    array('Geography', 'Geography', '125'),
                */
			)
		),
		'optional' => array(
            // array('Agriculture Education', 'Agriculture Education', '239'),
            // array('Psychology', 'Psychology', '123'),
            // array('Islamic Studies', 'Islamic Studies', '249'),
            array('CIVICS & GOOD GOVERNANCE','পৌরনীতি ও সুশাসন','269'),
            array('SOCIOLOGY', 'সমাজ বিজ্ঞান', '117'),
            array('ISLAM HISTORY AND CULTURE', 'ইসলামের ইতিহাস ও সংস্কৃতি', '267'),
            array('ECONOMICS', 'অর্থনীতি', '109')
		)
	),
	'Business-Studies' => array(
		'compolsury' => array(
			array(
	            array('Finance, Banking, and Insurance', 'Finance, Banking, and Insurance', '292'),
	            //array('Production Management and Marketing', 'Production Management and Marketing', '286'),
			)
		),
		'optional' => array(
            //array('Statistics', 'Statistics', '129'),
            array('ECONOMICS', 'অর্থনীতি', '109')
		)
	),
);

$config['edit_optional_subject'] = array(
    'BIOLOGY'       => '178',
    'HIGHER MATH'   => '265',
    'ECONOMICS'     => '109',
    'LOGIC'         => '121',
    'Social Work'   => '272',
    'Geography'     => '125',
    'Finance'       => '292',
    'Statistics'    => '129',
    
);   

//server configuration
 $config['configuration'] = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'mail.bgpscsylhet.edu.bd',
    'smtp_port' =>  26,
    'smtp_user' => 'support@bgpscsylhet.edu.bd',
    'smtp_pass' => 'ay9YEkFdVRf^',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);

$config['domain'] = array("www.bgpscsylhet.edu.bd");