<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Testimonial Certificate</title>
        <link href="<?php echo site_url('private/css/printstyle.css'); ?>" rel="stylesheet">
        <style>
        @media print{
        .print{
        display : none;
        }
        }
        </style>
    </head>
    <body>
        <div class="print-area">
            <!-- img class="print-area-img" src="<?php echo site_url('private/images/pring-bg.jpg'); ?>" alt="" -->
            <div class="print-area-content">
                <!-- figure>
                <img src="<?php echo site_url('private/images/banner.jpg'); ?>" alt="">
            </figure -->
            <!-- <pre><?php print_r($student);?></pre> -->
           <!--  <?php
           $address = json_decode($student[0]->address,true);
           ?> -->
            <pre><?php print_r($address);?></pre>
            <!-- span class="serial-no">ক্রমিক নং- <strong><?php //echo $student[0]->id; ?></strong></span -->
            <?php
            //$session=explode('-',$student[0]->session);
            //$start=strtotime($session[0]);
            //$year = date("Y", strtotime(date("Y-m-d", $start) . " + 4 years"));
            ?>
            <style media="screen">
            .main-header, .main-header hr {display: none;}
            @media print {
            .main-header {display: block;}
            }
            </style>
            <div class="main-header">
                <div class="col-xs-2">
                    <figure class="pull-left">
                        <img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
                    </figure>
                </div>
                <div class="col-xs-8">
                    <div class="institute">
                        <h2 class="text-center title" style="margin-top: 40px !importnat; font-weight: bold;">Border Guard Public School and College, MYMENSINGH</h2>
                    </div>
                </div>
                <hr>
            </div>
            <div class="title-1">
                <h2 style="margin: 30px auto; text-align: center; border-bottom: 1px solid #000; width: 215px;">প্রশংসাপত্র</h2>
                <a class="print btn btn-primery pull-right print-custom" style="margin-top: 0;float: right;color: blue;border: 1px solid blue;padding: 5px 15px;font-size: 12px; cursor: pointer;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
            </div>
            <div class="info">
                <h4 class="slno" style="margin: 10px 0;">ক্র:নং: <?php echo $student[0]->id;?></h4>
                <!-- h4 class="date"></h4 -->
            </div>
            <p>&nbsp; &nbsp; &nbsp; এই মর্মে প্রত্যয়ন করা যাচ্ছে যে, <?php echo $student[0]->name; ?>, পিতা: <?php echo $student[0]->father_name; ?>,  মাতা: <?php echo $student[0]->mother_name; ?>, <?php echo $student[0]->address;?>  , রোলঃ <?php echo $student[0]->roll; ?> <!-- ডাকঘরঃ ............, উপজেলা: <?php echo $address['upazila'];?>,  জেলা: <?php echo $address['district'];?> -->  । সে অত্র প্রতিষ্ঠান হইতে <?php echo $student[0]->session;?>  সনে অনিষ্ঠত মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, ঢাকার অধিনে জে.এস.সি/এস.এস.সি/ এইচ.এস.সি পরিক্ষায় মানবিক / বিজ্ঞান / ব্যাবসায় শিক্ষা শাখায় জিপএ  <?php echo $student[0]->gpa;?> পেয়ে কৃতিত্বের সাথে উত্তীর্ণ হয়েছে ।  ভর্তি বহি অনুযায়ী তার জন্ম তারিখ <?php echo $student[0]->birth_date;?> খ্রি।<br>
                &nbsp; &nbsp; &nbsp; আমার জানামতে সে অত্র প্রতিষ্ঠানে অধ্যয়নকালে  রাষ্ট্রবিরোধী বা আইন-শৃঙ্খলা পরিপন্থী কোনো কাজে অংশ গ্রহন করে নি  । <br>
            আমি তার জীবনের সর্বাঙ্গিন উন্নতি কামনা করি ।</p>
            <!-- p>এই মর্মে প্রত্যয়ন করা যাচ্চে যে, <strong><?php echo $student[0]->name; ?></strong> পিতা <strong><?php echo $student[0]->father_name;?></strong> মাতা <strong><?php echo $student[0]->mother_name;?></strong> অত্র ইনস্টিটিউট এর একজন ছাত্র/ছাত্রী। তার বোর্ড রোল নং <strong><?php echo $student[0]->roll;?></strong> রেজিঃ নং <strong><?php echo $student[0]->reg;?></strong>  শিক্ষাবর্ষ <strong><?php echo $student[0]->session;?></strong> ইং। সে ৪(চার) বছর মেয়াদী কৃষি ডিপ্লোমা শিক্ষাক্রমে মুখোমুখি/ দুরশিক্ষণ কোর্সে <strong><?php echo $year;?></strong> সালে অনুষ্ঠিত চূড়ান্ত পরীক্ষায় অংশগ্রহণ করে সিজিপিএ <strong><?php echo $student[0]->gpa;?></strong> (4.00 স্কেল এর মধ্যে) পেয়ে উত্তীর্ণ হয়েছে। আমার জানামতে অত্র ইনস্টিটিউটে অধ্যায়নকালে সে রাষ্ট্র বা আইন শৃঙ্খলা বিরোধী কাজে জড়িত নহে। <br> আমি তার উজ্জল ভবিষ্যৎ কামনা করি।</p -->
            <div class="clearfix">
                <div class="item-2" style="margin-top: 25px;">
                    <h4 class="date">তারিখঃ <?php echo date('Y-m-d');?></h4>
                </div>
                <div class="item-1">
                    <h4 style="font-size: 18px;">অধ্যক্ষ <br> <span style="font-weight: normal;">
                        বর্ডার গার্ড পাবলিক স্কুল অ্যান্ড কলেজ, ময়মনসিংহ।
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>