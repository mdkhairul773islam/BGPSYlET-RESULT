<style>
   td {
   vertical-align: middle !important;
   }
   .attendance tr th{
   text-align: center;
   }
   .attendance label{
   display: block;
   }
   .reg-publish td{
   padding: 0 !important;
   border:  1px solid #bcb9b9 !important;
   }
   .reg-publish td input[type="text"]{
   border: 1px solid transparent;
   }
   @media print{
   aside{
   display: none !important;
   }
   nav{
   display: none;
   }
   .panel{
   border: 1px solid transparent;
   left: 0px;
   position: absolute;
   top: 0px;
   width: 100%;
   }
   .box-width{
   width: 50%;
   }
   .none{
   display: none;
   }
   .panel-heading{
   display: none;
   }
   .panel-footer{
   display: none;
   }
   .hide{
   display: block !important;
   }
   .title{
   font-size:  25px;
   }
   .reg-publish tr th:nth-of-type(1){
   width: 6%;
   }
   .reg-publish tr th:nth-of-type(3){
   width: 8%;
   }
   }
</style>
<div class="container-fluid">
   <div class="row">
      <div class="panel panel-default none">
         <div class="panel-heading">
            <div class="panal-header-title pull-left">
               <h1>Search Result</h1>
            </div>
         </div>
         <div class="panel-body">
            <?php
               echo $confirmation;
               ?>
            <?php
               $attribute = array(
                   "class" => "form-horizontal"
               );
               echo form_open("", $attribute);
               $data_all_s = array();
               $position_abccc = array();
               ?>
            <div class="form-group">
               <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
               <div class="col-md-5">
                  <select name="exam_id" class="form-control" required>
                     <option value="" selected> -- Select Exam Name -- </option>
                     <?php
                        if ($exam != null) {
                            foreach ($exam as $row) {
                        ?>
                     <option value="<?php
                        echo $row->exam_id;
                        ?>">
                        <?php
                           echo $row->title;
                           ?>
                     </option>
                     <?php
                        }
                        }
                        ?>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-2 control-label">Year/Session <span class="req">*</span></label>
               <div class="col-md-5">
                  <select name="year" class="form-control" required >
                     <option value="">-- Select Year/Session --</option>
                     <?php
                        foreach ($session_list as $key => $value) {
                        ?>
                     <option value="<?php
                        echo $value->session;
                        ?>"><?php
                        echo $value->session;
                        ?></option>
                     <?php
                        }
                        ?>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-2 control-label">Class <span class="req">*</span></label>
               <div class="col-md-5">
                  <select name="class" class="form-control" required >
                     <option value="">-- Select Class --</option>
                     <?php
                        foreach (config_item('classes') as $key => $value) {
                        ?>
                     <option value="<?php
                        echo $key;
                        ?>"><?php
                        echo $value;
                        ?></option>
                     <?php
                        }
                        ?>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-2 control-label">Section <span class="req">*</span></label>
               <div class="col-md-5">
                  <select name="section" class="form-control" required >
                     <option value="">-- Select Section --</option>
                     <?php
                        foreach (config_item('section') as $value) {
                        ?>
                     <option value="<?php
                        echo $value;
                        ?>"><?php
                        echo $value;
                        ?></option>
                     <?php
                        }
                        ?>
                  </select>
               </div>
            </div>
            <div class="col-md-7">
               <div class="btn-group pull-right">
                  <input type="submit" value="Show" name="show" class="btn btn-primary">
               </div>
            </div>
            <?php
               echo form_close();
               ?>
         </div>
         <div class="panel-footer">&nbsp;</div>
      </div>
      <?php
         if ($students != null) {
         ?>
      <div class="panel panel-default" ng-init="active=true">
         <div class="panel-heading">
            <div class="panal-header-title">
               <h1 class="pull-left">Tabulation Sheet</h1>
               <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
            </div>
         </div>
         <!--pre><?php // print_r($students); 
            ?></pre-->
         <div class="panel-body">
            <img style="margin: 25px 0px; width: 100%;" src="<?php
               echo site_url('public/banner/banner.jpg');
               ?>">
            <p class="text-center hide">
               Session : 2017 - 2018 &nbsp; <!--<?php
                  echo $this->input->post("year");
                  ?><br/>-->
               Class : <?php
                  echo $this->input->post("class");
                  ?><br/>
               Exam : <?php
                  $ex_info = $this->action->read("exam", array(
                      "exam_id" => $this->input->post("exam_id")
                  ));
                  if ($ex_info != NULL) {
                      echo $ex_info[0]->title;
                  }
                  ?><br/>
            </p>
            <table class="table table-bordered reg-publish">
               <tr>
                  <th class="text-center" width="10px">SL</th>
                  <th width="180px">Student Name</th>
                  <th class="text-center" width="100px">Roll </th>
                  <th class="text-center" width="450px">Subjective Marks</th>
                  <th class="text-center">GPA</th>
                  <th class="text-center">Grade</th>
                  <th class="text-center">Position</th>
               </tr>
               <?php
                  function getGPA($marks = NULL)
                  {
                      if ($marks >= 80) {
                          return 5;
                      } elseif ($marks >= 70) {
                          return 4;
                      } elseif ($marks >= 60) {
                          return 3.5;
                      } elseif ($marks >= 50) {
                          return 3;
                      } elseif ($marks >= 40) {
                          return 2;
                      } elseif ($marks >= 33) {
                          return 1;
                      } else {
                          return 0;
                      }
                  }
                  
                  
                  function letter_grade($gpa = NULL)
                  {
                      if ($gpa >= 5.00) {
                          return "A+";
                      } elseif ($gpa >= 4.00) {
                          return "A";
                      } elseif ($gpa >= 3.50) {
                          return "A-";
                      } elseif ($gpa >= 3.00) {
                          return "B";
                      } elseif ($gpa >= 2.00) {
                          return "C";
                      } elseif ($gpa >= 1.00) {
                          return "D";
                      } else {
                          return "F";
                      }
                  }
                  
                  $counter      = 0;
                  $stu_position = array();
                  //echo 'aaaaaaaaaaaaaaaaaa';
                  
                  
                  $key_index = 0;
                  $is_fail = 0;
                  $all_gpas = null;
                  foreach ($students as $key => $row) {
                  $key_index += 1;
                      $whereM = array(
                          "roll" => $row->roll,
                          "class" => $row->class,
                          "exam_id" => $exam_id,
                          "year" => $this->input->post('year'),
                          "section" => $_POST['section']
                      );
                      
                      $marks = $this->retrieve->read("marks", $whereM);
                      
                      $his_marks = 0;
                      foreach($marks as $ky => $mark) {
                          $all_gpas[$mark->roll][$mark->subject_name] = getGPA($mark->total);
                          if($mark->letter == 'F' && $mark->subject_name != $all_students_optional[$mark->roll]){
                              $is_fail = '1';
                          }
                          $his_marks += $mark->total;
                          $his_roll = $mark->roll;
                      }
                      //$all_gpas[$mark->roll]['fourth'] = $all_students_optional[$mark->roll];
                      $data_all_s[$his_roll] = $his_marks;
                      
                      $subject_count = count($all_gpas[$mark->roll]) - 1;
                      foreach($all_gpas as $his_roll_gpa => $gpa_s) {
                          
                          $his_total_gpa[$his_roll_gpa] = 0;
                          
                          foreach($gpa_s as $his_subject_name => $gpa_) {
                              if($all_students_optional[$his_roll_gpa] == $his_subject_name && $gpa_ >= 2) {
                                  $his_total_gpa[$his_roll_gpa] += $gpa_;
                                  $his_total_gpa[$his_roll_gpa] = $his_total_gpa[$his_roll_gpa] - 2;
                              } else {
                                  $his_total_gpa[$his_roll_gpa] += $gpa_;
                              }
                              
                          }
                          if($his_total_gpa[$his_roll_gpa] / $subject_count < 1){
                              $his__gpa[$his_roll_gpa] = 0;
                          } else {
                              $his__gpa[$his_roll_gpa] = sprintf('%0.2f', $his_total_gpa[$his_roll_gpa] / $subject_count);
                          }
                      }
                      foreach($data_all_s as $key => $data_all) {
                          $position_abccc[$key_index] = array(
                              'failed' => $is_fail,
                              'roll' => $key,
                              'gpa' => $his__gpa[$his_roll]*100,
                              'total' => $data_all
                              );
                      }
                      if($is_fail == 1){
                          $position_abccc[$key_index]['total'] = 0;
                          $position_abccc[$key_index]['gpa'] = 0;
                      }
                      $is_fail = '0';
                      $data_all_s = $position_abccc;
                  }
                  
                  usort($data_all_s, function($a, $b) {
                      return $a['gpa'] - $b['gpa'];
                  });
                  
                  $mylist = $data_all_s;
                  $sort = array();
                  foreach($mylist as $k=>$v) {
                      $sort['gpa'][$k] = $v['gpa'];
                      $sort['total'][$k] = $v['total'];
                  }
                  
                  array_multisort($sort['gpa'], SORT_ASC, $sort['total'], SORT_ASC, $mylist);
                  
                  
                  $final_result = array();
                  $count_ = count($mylist);
                  $total_student = count($mylist);
                  foreach($mylist as $key => $data_all) {
                      if($data_all['failed'] == 1){
                          $final_result[$data_all['roll']] = array(
                              'position' => 0,
                              'failed' => $data_all['failed'],
                              'gpa' => $data_all['gpa'],
                              'total' => $data_all['total']
                          );
                      } else {
                          
                          $final_result[$data_all['roll']] = array(
                              'position' => $count_,
                              'failed' => $data_all['failed'],
                              'gpa' => $data_all['gpa'],
                              'total' => $data_all['total']
                          );
                      }
                      $count_ = $count_ - 1;
                  }
                  
                  //echo "<pre>";
                  //print_r($his_35);
                  //print_r($mylist);
                  //print_r($his_total_gpa);
                  //echo "</pre>";
                  
                  foreach ($students as $key => $row) {
                      
                      $counter++;
                      
                      $finalSubject = array();
                      $allMarks     = $allPoints = $passPoints = array();
                      
                      $where = array(
                          "roll" => $row->roll,
                          "class" => $row->class,
                          "section" => $_POST['section']
                      );
                      
                      $whereM = array(
                          "roll" => $row->roll,
                          "class" => $row->class,
                          "exam_id" => $exam_id,
                          "year" => $this->input->post('year'),
                          "section" => $_POST['section']
                      );
                      
                      
                      $total = $gpa = 0;
                      $marks = $this->retrieve->read("marks", $whereM);
                      
                      // get optional subject
                      $optional    = $this->action->read("admission", $where);
                      $optionalSub = ($optional) ? $optional[0]->optional : '';
                      
                      
                      // get subject
                      $subjects = $this->retrieve->read("subject", array(
                          "class" => $row->class
                      ));
                      
                      
                      
                      /*echo "<pre>";
                      print_r($marks);
                      echo "</pre>";*/
                      
                      
                      // $his_marks = 0;
                      // foreach($marks as $ky => $mark) {
                      //     $his_marks += $mark->total;
                      //     $his_roll = $mark->roll;
                      // }
                      // $data_all_s[$his_roll] = $his_marks;
                      // $key_index = 0;
                      // foreach($data_all_s as $key => $data_all) {
                      //     $key_index += 1;
                      //     $position_abccc[$key_index] = array(
                      //         'roll' => $key,
                      //         'total' => $data_all
                      //         );
                      // }
                      // $data_all_s = $position_abccc;
                      
                      $optTotalMarks = 0.00;
                      foreach ($marks as $key => $val) {
                          if ($val->objective > 0 || $val->written > 0 || $val->practical > 0) {
                              $subInfo       = $this->action->read("subject", array(
                                  "class" => $_POST['class'],
                                  "subject_name" => $val->subject
                              ));
                              $totalSubMarks = ($subInfo) ? $subInfo[0]->objective + $subInfo[0]->written + $subInfo[0]->practical : 0.00;
                              $total += $val->total;
                              
                              
                              $totalValue = ($totalSubMarks <= 50) ? $val->total * 2 : $val->total;
                              
                              if ($optionalSub == $val->subject_name) {
                                  $optTotalMarks += $totalValue;
                                  
                                  if ($_POST['class'] != "Eleven" || $_POST['class'] != "Tweleve") {
                                      if (getGPA($totalValue) > 2) {
                                          
                                          $gpa += (getGPA($totalValue) - 2);
                                      }
                                  }
                              } else {
                                  if (in_array($val->subject_name, $finalSubject)) {
                                      $allMarks[$val->subject_name] = ($allMarks[$val->subject_name] + $totalValue) / 2;
                                  } else {
                                      $finalSubject[]                 = $val->subject_name;
                                      $allMarks[$val->subject_name]   = $totalValue;
                                      $passPoints[$val->subject_name] = $val->point;
                                  }
                              }
                          }
                      }
                      
                      //echo "<pre>"; print_r($allMarks);    echo "</pre>";
                      
                      
                      /*
                       ** calculate total point
                       */
                      foreach ($allMarks as $key => $val) {
                          $allPoints[$key] = getGPA($val);
                      }
                      
                      //echo "<pre>"; print_r($allPoints);    echo "</pre>";
                      // echo "<pre>"; print_r($passPoints);    echo "</pre>";
                      
                      /*
                       ** check either a student fails in a compulsory subject
                       */
                      
                      foreach ($allPoints as $point) {
                          if ($point == 0.00) {
                              $gpa = 0.00;
                              break;
                          } else {
                              $gpa += $point;
                          }
                      }
                      if ($_POST['class'] == "Eleven" || $_POST['class'] == "Tweleve") {
                          if (getGPA(($optTotalMarks / 2)) > 2) {
                              $gpa += (getGPA(($optTotalMarks / 2)) - 2);
                          }
                      }
                      
                      // calculate total gpa
                      if ($allMarks != NULL) {
                          if (($gpa / count($allMarks)) > 5) {
                              $gpa = "5.00";
                          } else {
                              $gpa = round($gpa / count($allMarks), 2);
                          }
                      }
                      
                      
                      
                      /*
                       ** check either a student fails in a compulsory subject then his/her gpa 0.00
                       */
                      if ($this->input->post('exam_id') == "1512477873") {
                          foreach ($allPoints as $value) {
                              if ($value == 0.00) {
                                  $gpa = 0.00;
                                  break;
                              }
                          }
                      } else {
                          foreach ($passPoints as $value) {
                              if ($value == 0.00) {
                                  $gpa = 0.00;
                                  break;
                              }
                          }
                      }
                      
                      
                      
                      // get student name
                      /* $where = array("admission.roll" => $row->roll, "admission.class" => $row->class,'admission.section'=>$this->input->post('section'));
                      $details = array(
                      "admission" => array("condition" => "registration.reg_id=admission.student_id")
                      );
                      $info = $this->action->multipleJoinAndRead("registration", $details, $where);*/
                      
                      
                      // get student name
                      $where = array(
                          "admission.session" => $_POST['year'],
                          "admission.roll" => $row->roll,
                          "admission.class" => $row->class,
                          'admission.section' => $_POST['section']
                      );
                      
                      if ($row->class != "Eleven" || $row->class != "Twelve") {
                          unset($where['admission.session']);
                      }
                      
                      //print_r($where);
                      
                      
                      $details = array(
                          "admission" => array(
                              "condition" => "registration.reg_id=admission.student_id"
                          )
                      );
                      
                      $info = $this->action->multipleJoinAndRead("registration", $details, $where);
                  ?>
               <tr>
                  <td  width="80px"><input type="text" class="text-center lh-50 form-control" readonly value="<?php
                     echo $counter;
                     ?>"></td>
                  <td width="235px"><input type="text" class="form-control lh-50" readonly value="<?php
                     echo $info[0]->name;
                     ?>"></td>
                  <td><input type="text" class="text-center form-control lh-50" readonly value="<?php
                     echo $row->roll;
                     ?>"></td>
                  <td style="text-align:justify;">
                     <?php
                        //get all subjective marks
                        
                        $where    = array(
                            "year" => $this->input->post("year"),
                            "exam_id" => $this->input->post("exam_id"),
                            "class" => $this->input->post("class"),
                            "roll" => $row->roll,
                            "section" => $_POST['section']
                        );
                        $sub_mark = "";
                        
                        $marks = $this->retrieve->read("marks", $where);
                        foreach ($marks as $key => $value) {
                            if ($value->objective > 0 || $value->written > 0 || $value->practical > 0) {
                                if($value->letter == 'F'){
                                    $fail_check = 'red';
                                } else {
                                    $fail_check = '';
                                }
                                $sub_mark .= $value->subject . " = <strong style='color:".$fail_check."'>" . $value->letter . "</strong> &nbsp;&nbsp;";
                            }
                        }
                        echo $sub_mark;
                        ?>
                  </td>
                  <td  width="60px" ><input type="text" class="text-center form-control lh-50" readonly value="<?php printf("%.2f", $gpa); ?>"></td>
                  <td width="60px"><input style="<?php if(letter_grade($gpa) == 'F'){ echo 'color:black; font-weight: bold; background:#ffeffe;'; } ?>" type="text" class="text-center form-control lh-50" readonly value="<?php echo letter_grade($gpa); ?>"></td>
                  <td style="text-align:center; vertical-align: middle; font-weight: bold;">
                     <?php
                        echo $final_result[$row->roll]['position'];
                        
                        // $total_marks = array();
                        // $total_gpa   = array();
                        
                        // $cond       = array(
                        //     "class" => $_POST['class'],
                        //     "year" => $_POST['year'],
                        //     "exam_id" => $_POST['exam_id'],
                        //     "group" => $info[0]->group,
                        //     "section" => $_POST['section']
                        // );
                        // //print_r($cond);
                        // $where      = array(
                        //     "class" => $_POST['class'],
                        //     "YEAR(date)" => $_POST['year'],
                        //     "session" => $_POST['year'] . "-" . ($_POST['year'] + 1),
                        //     "group" => $info[0]->group,
                        //     "section" => $_POST['section']
                        // );
                        // //print_r($where);
                        // $no_Student = $this->retrieve->read("admission", $where);
                        // $position   = $this->retrieve->read("result", $cond, "desc");
                        
                        // //echo "<pre>"; print_r( $position); echo "</pre>";
                        
                        // $allGPA = $marksGPA = array();
                        // foreach ($position as $key => $value) {
                        //     if ($value->gpa > "0.00") {
                        //         $total_marks[$value->roll] = $value->total;
                        //         $total_gpa[$value->roll]   = $value->gpa;
                        
                        //         $allGPA[] = $value->gpa;
                        //     }
                        // }
                        // arsort($total_marks);
                        // arsort($total_gpa);
                        
                        // //echo "<pre>"; print_r($total_marks); echo "</pre>";
                        // //echo "<pre>"; print_r($total_gpa); echo "</pre>";
                        // //echo "<pre>"; print_r($allGPA); echo "</pre>";
                        
                        // $counts = array_count_values($allGPA);
                        // // echo "<pre>"; print_r($counts); echo "</pre>";
                        
                        // $gpa = sprintf("%.2f", $gpa);
                        // if ($gpa > 0.00) {
                        //     if (array_key_exists((string) $gpa, $counts)) {
                        //         if ($counts[(string) $gpa] > 1) {
                        //             // 2nd test the marks
                        //             $student_temp_pos = $total_marks_array = $finalStuPos = array();
                        //             foreach ($total_gpa as $sroll => $sgpa) {
                        //                 if ($gpa == $sgpa) {
                        //                     $temp_pos            = (array_search($sroll, array_keys($total_gpa)));
                        //                     $student_temp_pos[]  = $temp_pos;
                        //                     $total_marks_array[] = $total_marks[$sroll];
                        //                 }
                        //             }
                        //             rsort($total_marks_array);
                        //             foreach ($total_marks_array as $sl => $mark) {
                        //                 $finalStuPos[$mark] = $student_temp_pos[$sl];
                        //             }
                        //             $totalMarksN = $total_marks[$info[0]->roll];
                        //             $pos         = $finalStuPos[$totalMarksN] + 1;
                        //         } else {
                        //             // 1st test the gpa
                        //             $pos = (array_search($info[0]->roll, array_keys($total_gpa)) + 1);
                        //         }
                        //     } else {
                        //         $pos = (array_search($info[0]->roll, array_keys($total_marks)) + 1);
                        //     }
                        //     $stu_position[$info[0]->roll] = $pos;
                        //     echo "<strong>" . $pos . "</strong>";
                        // }
                        ?>
                  </td>
               </tr>
               <?php
                  }
                  /* echo "<pre>"; print_r(array_count_values($stu_position)); echo "</pre>"; */
                  ?>
            </table>
            <style>
               .principal_main {
               position: relative;
               }
               .principal_sign {
               position: absolute;
               top: -55px;
               left: 0;
               }
            </style>
            <div class="pull-right principal_main hide" style="width: 200px; margin: 60px 0px 0px; text-align: center; border-top: 1px solid #bfbaba;">
               <img class="principal_sign img-responsive" src="<?php echo base_url('public/img/hs.jpg');?>" alt="Sign Not Found !">
               <strong>Principal</strong>
            </div>
         </div>
         <div class="panel-footer">&nbsp;</div>
      </div>
      <?php
         }
         ?>
   </div>
</div>