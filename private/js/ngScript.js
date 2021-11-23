var app = angular.module("MainApp",  ['angularUtils.directives.dirPagination','ngSanitize']);

app.constant("appConfig", {
	"marks": [80, 70, 60, 50, 40, 33, 0],
	"letterToPoint": {"A+": 5, "A": 4, "A-": 3.5, "B": 3, "C": 2, "D": 1, "F": 0}
});

// var url = window.location.origin + '/sbgpsc/ajax/';
// var siteurl = window.location.origin + '/sbgpsc/';

var url = window.location.origin + '/ajax/';
var siteurl = window.location.origin + '/';


//remove underscore and ucwords
app.filter("textBeautify", function(){
	return function (str) {
		var str = str.replace(/_/gi, " ").toLowerCase(),
        	txt = str.replace(/\b[a-z]/g, function(letter) {
        		return letter.toUpperCase();
    		});

    	return txt;
    }
});

//remove dash and ucwords
app.filter("removeDash",function(){
	return function (str) {
	  var str = str.replace(/-/gi, " ").toLowerCase();
          txt = str.replace(/\b[a-z]/g, function(letter) {
         return letter.toUpperCase();
     });
    return txt;
   }
});


app.controller('PaginationDemoCtrl', function ($scope, $log) {
	$scope.totalItems = 64;
	$scope.currentPage = 4;

	$scope.setPage = function (pageNo) {
		$scope.currentPage = pageNo;
	};

	$scope.pageChanged = function() {
		$log.log('Page changed to: ' + $scope.currentPage);
	};

	$scope.maxSize = 5;
	$scope.bigTotalItems = 175;
	$scope.bigCurrentPage = 1;
	$scope.numPages = 18;
});


//SMS Controller
app.controller("CustomSMSCtrl", ["$scope", "$log", function($scope, $log){
	$scope.msgContant = "";
	$scope.totalChar = 0;
	$scope.msgSize = 1;

	$scope.$watch(function(){
	$scope.totalChar = 0;

		var charLength = $scope.msgContant.length,
		message = $scope.msgContant,
		messLen = 0;




	var english = /^[~!@#$%^&*(){},.:/-_=+A-Za-z0-9 ]*$/;

	if (english.test(message)){
	        if( charLength <= 160){ messLen = 1; }
		else if( charLength <= 306){ messLen = 2; }
		else if( charLength <= 459){ messLen = 3; }
		else if( charLength <= 612){ messLen = 4; }
		else if( charLength <= 765){ messLen = 5; }
		else if( charLength <= 918){ messLen = 6; }
		else if( charLength <= 1071){ messLen = 7; }
		else if( charLength <= 1080){ messLen = 8; }
		else { messLen = "Equal to an MMS!"; }

	}else{
	        if( charLength <= 63){ messLen = 1; }
		else if( charLength <= 126){ messLen = 2; }
		else if( charLength <= 189){ messLen = 3; }
		else if( charLength <= 252){ messLen = 4; }
		else if( charLength <= 315){ messLen = 5; }
		else if( charLength <= 378){ messLen = 6; }
		else if( charLength <= 441){ messLen = 7; }
		else if( charLength <= 504){ messLen = 8; }
		else { messLen = "Equal to an MMS!"; }
	}



		$scope.totalChar = charLength;
		$scope.msgSize = messLen;
	});


}]);





//stock register controller start here
app.controller("stockRegCtrl",['$scope','$http',function($scope,$http){

    $scope.perPage = "10";
    $scope.reverse = false;
    $scope.fields = [];

	var obj = {
		table : "stock_reg_field"
	};

	$http({
		method : "POST",
		url : url + "read",
		data : obj
	}).success(function(response){
		if(response.length>0){
			angular.forEach(response,function(values,index){
				values['sl'] = index + 1;
				$scope.fields.push(values);
			});
			console.log($scope.fields);
		}else{
			$scope.fields = [];
		}
	});
}]);


//Room No controller start here
app.controller("roomNoCtrl",['$scope','$http',function($scope,$http){

    $scope.perPage = "10";
    $scope.reverse = false;
    $scope.fields = [];

	var obj = {
		table : "room_no"
	};

	$http({
		method : "POST",
		url : url + "read",
		data : obj
	}).success(function(response){
		if(response.length>0){
			angular.forEach(response,function(values,index){
				values['sl'] = index + 1;
				$scope.fields.push(values);
			});
			console.log($scope.fields);
		}else{
			$scope.fields = [];
		}
	});
}]);






// setSectorCtrl Controller
app.controller('setSectorCtrl',function($scope,$http){
        $scope.sectors = [];

        var where = {
            table : "sector"
        }

        $http({
            method  : "POST",
            url     : url + "read",
            data    : where
        }).success(function(response){
            if(response.length > 0){
                $scope.sectors = response;
            }
        });



	$scope.set_sector=function(class_name){
        $scope.purpose = [];
        var where = {
            table : "class_sectors",
            cond  : {
                class: class_name
            }
        }

        $http({
            method  : "POST",
            url     : url + "read",
            data    : where
        }).success(function(response){
            if(response.length == 1){
               $scope.purpose = JSON.parse(response[0].purpose);
            }
            console.log($scope.purpose);
        });

	}


	$scope.isChecked = function(purpose1,purpose2){
	    if(typeof purpose1 !="undefined"){
            if(purpose1 == purpose2){
                return true;
            }else{
             return false;
            }
	    }else{
	       return false;
	    }
	}



});


// Registration Controller
app.controller('registrationCtrl',function($scope,$http){
	$scope.chose_1 = $scope.chose_2 = $scope.chose_3 = $scope.optional = [];
	$scope.code = {};
	
	
	$scope.existsStudentId = false;
	$scope.isDisable = true;
	
	// check exists registration id
	$scope.checkExistsRegIdFn  = function(student_id){
	    
	    if(typeof student_id !== 'undefined'){
    	    $http({
    	        method: 'post',
    	        url   : url + 'result',
    	        data  : {
    	            table: 'registration',
    	            cond : {reg_id: student_id},
    	            select: ['reg_id']
    	        }
    	    }).success(function(regInfo){
    	            
    	        if(regInfo.length > 0 && student_id.length >= 6){
    	            $scope.existsStudentId = true;
    	        }else{ 
    	            $scope.existsStudentId = false; 
    	        }
    	    });
	    }else{
	        $scope.existsStudentId = false; 
	    }
	};

	// check if present & permanent address are same or not
	$scope.sameAddressFn = function(){
		var value = $scope.checkbox;

		if(value){
			$scope.permanent = $scope.present;
		} else {
			$scope.permanent = {};
		}
	}
	
	
	$scope.getSubjectFn = function() {
		$scope.code = {};
		var where = {group: $scope.group};

		$http({
			method: 'POST',
			url: siteurl + 'registration/regi_validation/getSubject',
			data: where
		}).success(function(response){
			$scope.chose_1 = [];
			angular.forEach(response.chose_1, function(item, index){$scope.chose_1.push(item);});
			
			$scope.chose_2 = [];
			angular.forEach(response.chose_2, function(item, index){$scope.chose_2.push(item);});
			
			$scope.chose_3 = [];
			angular.forEach(response.chose_3, function(item, index){$scope.chose_3.push(item);});
			
			$scope.optional = [];
			angular.forEach(response.optional, function(item, index){$scope.optional.push(item);});
			
		});
	}
	

	$scope.getSubjectCodeFn = function(index){
		if(index == 'chose_1'){
			$scope.code['chose1st'] = ($scope.chose1st) ? $scope.chose1st[2] : '';
		} else if(index == 'chose_2') {
			$scope.code['chose2nd'] = ($scope.chose2nd) ? $scope.chose2nd[2] : '';
		} else if(index == 'chose_3') {
			$scope.code['chose3rd'] = ($scope.chose3rd) ? $scope.chose3rd[2] : '';
		} else {
			$scope.code['optional'] = ($scope.optional_chose) ? $scope.optional_chose[2] : '';
		}
		
	}

});

// Edit Controller
app.controller('editCtrl',function($scope){

  // check if present & permanent address are same or not
	$scope.check=function(){
	  var value=$scope.checkbox;
	  if(value){
	  	$scope.permanent_address=$scope.present_address;
	  }	else{
	  	$scope.permanent_address=" ";
	  }
	}

});

//testimonial
/*app.controller('testimonialCtrl', ['$scope', '$http', '$log', function($scope, $http, $log){

	$scope.student = [];
	$scope.getstudentinfoforTestimonialfn = function(){
		var where = {
			table:'registration',
			cond:$scope.search
		};

		$http({
			method:'POST',
			url:url+'read',
			data:where
		}).success(function(response){
			if(response.length>0) {
				$scope.active=false;
				$scope.student=response[0];
			} else {
				$scope.active=true;
				$scope.student="";
			}
		});
    };
    console.log($scope.student);
}]);

// all testimonial
app.controller('allTestimonialController',['$scope','$http','$log',function($scope,$http,$log){

 $scope.tcInfo=[];

 var where={table:'testimonial'};
	 $http({
		method:'POST',
		url:url+'read',
		data:where
	}).success(function(response){
		if(response != ""){
		  $scope.active=false;
	      $scope.tcInfo=response;
	      $log.log($scope.tcInfo);
	   }else{
	   	  $scope.active=true;
	      $scope.tcInfo=[];
	   }
	});

  $scope.getTCinfoFn=function(){
		var where={
		   table:'testimonial',
           cond: {student_id : $scope.student_id}
		  };
		  $log.log(where);

		 $http({
			method:'POST',
			url:url+'read',
			data:where
		}).success(function(response){
			if(response != ""){
			  $scope.active=false;
		      $scope.tcInfo=response;
		      $log.log($scope.tcInfo);
		   }
		});
    };

}]);*/



//testimonial
app.controller('testimonialCtrl', ['$scope', '$http', '$log', function($scope, $http, $log) {

    $scope.getstudentInfofn = function() {

        var where = {
            table: 'passed_student',
            cond: { roll: $scope.roll }
        };

        $http({
            method: 'POST',
            url: url + 'read',
            data: where
        }).success(function(response) {
            console.log(response);
            if (response.length > 0) {
                $scope.reg_id = response[0].reg_id;
                $scope.name = response[0].name;
            } else {
                $scope.reg_id = '';
                $scope.name = '';
            }
        });
    };


    $scope.student = [];
    $scope.getstudentinfoforTestimonialfn = function() {
        var where = {
            table: 'registration',
            cond: $scope.search
        };

        $http({
            method: 'POST',
            url: url + 'read',
            data: where
        }).success(function(response) {
            if (response.length > 0) {
                $scope.active = false;
                $scope.student = response[0];
            } else {
                $scope.active = true;
                $scope.student = "";
            }
        });
    };
    //console.log($scope.student);
}]);


// all testimonial
app.controller('allTestimonialController', ['$scope', '$http', '$log', function($scope, $http, $log) {

    $scope.tcInfo = [];

    var where = { table: 'testimonial' };
    $http({
        method: 'POST',
        url: url + 'read',
        data: where
    }).success(function(response) {
        if (response != "") {
            $scope.active = false;
            $scope.tcInfo = response;
            $log.log($scope.tcInfo);
        } else {
            $scope.active = true;
            $scope.tcInfo = [];
        }
    });

    $scope.getTCinfoFn = function() {
        var where = {
            table: 'testimonial',
            cond: { student_id: $scope.student_id }
        };
        $log.log(where);

        $http({
            method: 'POST',
            url: url + 'read',
            data: where
        }).success(function(response) {
            if (response != "") {
                $scope.active = false;
                $scope.tcInfo = response;
                $log.log($scope.tcInfo);
            }
        });
    };

}]);


// show all student Controller

app.controller('ShowAllStudentCtrl', function($scope, $http){
	$scope.reverse = false;

	$scope.getAllStudentsFn = function(){
	    let where = {
            'registration.status'  :    'admitted'
		};
		
	    if($scope.class !== undefined && $scope.class != '') where['admission.class'] = $scope.class;
	    if($scope.session !== undefined && $scope.session != '') where['admission.session'] = $scope.session;
	    if($scope.type !== undefined && $scope.type != '') where['admission.type'] = $scope.type;
	    if($scope.section !== undefined && $scope.section != '') where['admission.section'] = $scope.section;
	    if($scope.group !== undefined && $scope.group != '') where['admission.group'] = $scope.group;
	    
	    if($scope.class !== undefined && $scope.class != '') where['registration.class'] = $scope.class;
	    if($scope.session !== undefined && $scope.session != '') where['registration.session'] = $scope.session;
	    if($scope.gender !== undefined && $scope.gender != '') where['registration.gender'] = $scope.gender;
	    if($scope.section !== undefined && $scope.section != '') where['registration.section'] = $scope.section;
	    if($scope.group !== undefined && $scope.group != '') where['registration.group'] = $scope.group;
	    if($scope.reg_id !== undefined && $scope.reg_id != '') where['registration.reg_id'] = $scope.reg_id;
		
		var condition = {
			from    : 'registration',
			join    : 'admission',
			cond    : 'registration.reg_id = admission.student_id',
			where   : where,
			by      : "admission.roll",
			type    : "asc"
		};

		 console.log(condition);

		$http({
				method : 'POST',
				url    : url+'readJoinDataOrderBy',
				data   : condition
		   }).success(function(response){
			console.log('response');
			if(response.length>0){
				$scope.active = false;
				$scope.allStudents = response;
			}else{
				$scope.active = true;
			}
		   //console.log(response);
		});
	 }
});


// get admission student info Ctrl
app.controller("getStudentInfoCtrl", function($scope, $http){
	$scope.$watch("student_id", function(){
		var where = {
			table:'registration',
			cond:{'reg_id':$scope.student_id}
		};

		$http({
			method:'POST',
			url:url+'read',
			data:where
		}).success(function(response){
			if(response.length==1){
				$scope.class=response[0].class;
				$scope.group=response[0].group;
				$scope.session=response[0].session;
				$scope.section=response[0].section;
				$scope.photo=response[0].photo;
			}else{
				$scope.class="";
				$scope.group="";
				$scope.session="";
				$scope.photo="";
			}
			console.log(response);
		});
	});
});


// show all subject Controller

app.controller('allSubjectCtrl',function($scope,$http){

    $scope.reverse=true;

	$scope.allsubjectFn=function(){

	  var where={
	  	 table:'subject',
	  	 cond:$scope.search
	   };

      $http({
      	 method:'POST',
      	 url:url+'read',
      	 data:where
      }).success(function(response){
      	 if(response.length>0){
      	 	$scope.active=false;
      	 	$scope.allSubjects=response;
      	 }else{
      	 	$scope.active=true;
      	 }

      	console.log(response);
      });
	}

});






app.controller("SetExamCtrl", function($scope, $log,$http){
	$scope.totalFn = function(o, w, p, assignment, cleanliness){
		return (o + w + p + assignment + cleanliness);
	}


	$scope.getExamInfo = function(){
		 var where = {
			 table : "all_exam",
			 cond  :{
				 code : $scope.exam_name
			 }
		 };

		 $http({
			 method : "POST",
			 url    : url + "read",
			 data   : where
		 }).success(function(response){
			 if(response.length == 1){
				 $scope.exam_date = response[0].start_at;
			 }else{
				$scope.exam_date = "";
			 }
		 });
	};
});

app.controller("EditExamCtrl", function($scope, $log){
	$scope.totalFn = function(o, w, p, assignment, cleanliness){
		return (o + w + p + assignment + cleanliness);
	}
});

app.controller("MarksCtrl", function($scope, $log, $http, appConfig){
	
	$scope.students = [];
	$scope.subject = {};
	$scope.sort = "roll";
	
   $scope.getExamTypeInfoFn = function(){
	   	var where = {
	   		table : "exam",
	   		cond : {exam_id : $scope.examID}
	   	};

	   	$http({
	   		method : "POST",
	   		url : url + "read",
	   		data : where
	   	}).success(function(response){
	   		var type = response[0].type;
	   		$scope.exam_type = response[0].type;

	   		if(type === "final" || type === "half_yearly"){
	   		  $scope.row_active = false;
	   		}else{
	   		  $scope.row_active = true;
	   		}

	   	});
   };

	// get students
	$scope.getAllStudents = function(){

		var whereCond = {
			tableFrom: "admission",
			tableTo: "registration",
			joinCond:'admission.student_id=registration.reg_id',
			cond:{},
			select:['admission.*', 'registration.name']
		};

		if($scope.group != undefined && $scope.group != ""){
			whereCond.cond['admission.group'] = $scope.group;
		}

		if($scope.reg_id!= undefined && $scope.reg_id!= ""){
			whereCond.cond['admission.student_id']= $scope.reg_id;
		}

		if($scope.class!= undefined && $scope.class!= ""){
			whereCond.cond['admission.class']= $scope.class;
		}
		
		if($scope.year!= undefined && $scope.year!= ""){
			whereCond.cond['admission.session']= $scope.year;
		}
		
		if($scope.section!= undefined && $scope.section!= ""){
			whereCond.cond['admission.section']= $scope.section;
		}

		$http({
			method: "POST",
			url: url + "join",
			data: whereCond
		}).success(function(response) {
		    
			$scope.students = [];
			if(response.length > 0){
			    
			    console.log(response);
				angular.forEach(response, function(row){
					
					row.roll            = parseInt(row.roll);
					row.attendance      = 0.00;
					row.monthlyTest     = 0.00;
					row.objective       = 0.00;
					row.written         = 0.00;
					row.assignment      = 0.00;
					row.cleanliness     = 0.00;
					row.practical       = 0.00;
					
					$scope.students.push(row);
				});
				
				$scope.active = false;
			} else {
				$scope.active = true;
				$scope.students = [];
			}

			$scope.totalStudent = $scope.students.length;
			
		});

            

		// get subject info
		var sub=$scope.subjectName, part=$scope.paper, subject_name;
		if(part=="1st"){
			subject_name=sub+" "+part;
		}else if(part=="2nd"){
			subject_name=sub+" "+part;
		}else{
			subject_name=sub;
		}
		var where = {
			table: "exam",
			cond: {
				"exam_id": $scope.examID,
				"subject": subject_name,
				"class": $scope.class,
			}
		};

		//console.log(where);

		$http({
			method: "POST",
			url: url + "read",
			data: where
		}).success(function(response){
		    
		    //console.log('exam', response);
		    
			var obj = {
				objective: parseFloat(response[0].objective),
				objectivePassMark: parseFloat(response[0].objective_pass_mark),
				written: parseFloat(response[0].written),
				writtenPassMark: parseFloat(response[0].written_pass_mark),
				
				assignment: parseFloat(response[0].assignment),
				assignmentPassMark: parseFloat(response[0].assignment_pm),
				
				cleanliness: parseFloat(response[0].cleanliness),
				cleanlinessPassMark: parseFloat(response[0].cleanliness_pm),
				
				practical: parseFloat(response[0].practical),
				practicalPassMark: parseFloat(response[0].practical_pass_mark),
				total: (parseFloat(response[0].objective) + parseFloat(response[0].written) + parseFloat(response[0].practical) + parseFloat(response[0].assignment) + parseFloat(response[0].cleanliness))
			};

			$scope.subject = obj;
			$scope.subjectCode = response[0].subject_code;
			//console.log($scope.subject);

		});
	}

	$scope.totalMarksFn = function(roll){
		var at = mt = ft = 0.00;
		var i = $scope.students.map(function (student) { return student.roll; }).indexOf(roll);

		if($scope.exam_type === "final" || $scope.exam_type == "half_yearly"){
		    ft = $scope.students[i].objective + $scope.students[i].written + $scope.students[i].practical + $scope.students[i].assignment + $scope.students[i].cleanliness;
		    //ft = parseFloat((ft * 89)/100);
		    at = parseFloat($scope.students[i].attendance);
		    
		    //mt = parseFloat(($scope.students[i].monthlyTest * 20)/100);
		    mt = parseFloat($scope.students[i].monthlyTest);
		    
		    $scope.students[i].total = (at + mt + ft).toFixed(2);
		    
		}else{
			var result = $scope.students[i].objective + $scope.students[i].written + $scope.students[i].practical + $scope.students[i].assignment + $scope.students[i].cleanliness;
		    $scope.students[i].total = (result).toFixed(2);
		}
		
	    
	  return $scope.students[i].total;
	}



	$scope.letterGradeFn = function(roll){
		var i = $scope.students.map(function (student) { return student.roll; }).indexOf(roll);
		var total = ($scope.students[i].total * 100) / $scope.subject.total,
			objectiveStatus = ($scope.students[i].objective >= $scope.subject.objectivePassMark) ? true : false,
			writtenStatus = ($scope.students[i].written >= $scope.subject.writtenPassMark) ? true : false,
			practicalStatus = ($scope.students[i].practical >= $scope.subject.practicalPassMark) ? true : false,
			assignmentlStatus = ($scope.students[i].assignment >= $scope.subject.assignmentPassMark) ? true : false,
			cleanlinessStatus = ($scope.students[i].cleanliness >= $scope.subject.cleanlinessPassMark) ? true : false,
			letter;

		if(total >= 80 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "A+"; }
		else if(total >= 70 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "A"; }
		else if(total >= 60 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "A-"; }
		else if(total >= 50 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "B"; }
		else if(total >= 40 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "C"; }
		else if(total >= 33 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "D"; }
		else { letter = "F"; }

		$scope.students[i].letter = letter;

		return $scope.students[i].letter;

	}

	$scope.gradePointFn = function(roll){
		var i = $scope.students.map(function (student) { return student.roll; }).indexOf(roll);
		var letter = $scope.students[i].letter;
		return appConfig.letterToPoint[letter];
	}
});




app.controller("AllMarksCtrl", function($scope, $http, $log){
	$scope.marks = [];

	$scope.getMarksFn = function(){
	$scope.search.subject = $scope.search.subject_name;
    	if(typeof $scope.paper != "undefined"){
    		$scope.search.subject = $scope.search.subject_name + " " + $scope.paper;
    	}
		var where = {
			table: "marks",
			cond: $scope.search
		};
        
        /*if($scope.search.class == 'Eleven' || $scope.search.class == 'Twelve'){
            delete $scope.search.year;
        }*/
		console.log(where);

		$http({
			method: "POST",
			url: url + "read",
			data: where
		}).success(function(response){
			$scope.marks = [];
			if(response.length > 0){
				angular.forEach(response, function(obj){
					$scope.marks.push(obj);
				});
				$scope.active = false;
			} else {
				$scope.active = true;
				$scope.marks = [];
			}
		});
	}

});


app.controller("EditMarksCtrl", function($scope, $http, $log, appConfig){
	$scope.marks = [];

	$scope.$watch("id", function(){
		var where = {
			table: "marks",
			cond: {
				"id": $scope.id
			}
		};

		$http({
			method: "POST",
			url: url + "read",
			data: where
		}).success(function(response){
		    
		    console.log(response);
		    
			angular.forEach(response, function(row){
			    row.attendance= parseFloat(row.at);
			    row.monthlyTest= parseFloat(row.mt);
				row.objective = parseFloat(row.objective);
				row.written = parseFloat(row.written);
				row.assignment = parseFloat(row.assignment);
				row.cleanliness = parseFloat(row.cleanliness);
				row.practical = parseFloat(row.practical);

				// get subject
				var where = {table: "exam", cond: {"exam_id": row.exam_id, "subject": row.subject}};
				$http({
					method: "POST",
					url: url + "read",
					data: where
				}).success(function(response){
					if(response[0].type === "final" || response[0].type === "half_yearly"){
			   		  $scope.row_active = false;
			   		}else{
			   		  $scope.row_active = true;
			   		}

					row.type = response[0].type;


					row.objectiveMark = parseFloat(response[0].objective);
					row.objectivePassMark = parseFloat(response[0].objective_pass_mark);
					
					row.writtenMark = parseFloat(response[0].written);
					row.writtenPassMark = parseFloat(response[0].written_pass_mark);
					
					row.assignmentMark= parseFloat(response[0].assignment);
				    row.assignmentPassMark= parseFloat(response[0].assignment_pm);
				
				    row.cleanlinessMark= parseFloat(response[0].cleanliness);
				    row.cleanlinessPassMark= parseFloat(response[0].cleanliness_pm);
				
					row.practicalMark = parseFloat(response[0].practical);
					row.practicalPassMark = parseFloat(response[0].practical_pass_mark);
					row.totalMark = (parseFloat(response[0].objective) + parseFloat(response[0].written) + parseFloat(response[0].practical));
				});

				$scope.marks.push(row);

			});
		});

		 $scope.totalMarksFn = function(i){
		        var at = mt = ft = 0.00;

		        if($scope.marks[i].type === "final" || $scope.marks[i].type === "half_yearly"){
		           ft = $scope.marks[i].objective + $scope.marks[i].written + $scope.marks[i].practical;
		           //ft = parseFloat((ft * 89)/100);
		           at = parseFloat($scope.marks[i].attendance);
		           
		           //mt = parseFloat(($scope.marks[i].monthlyTest * 20)/100);
		           mt = parseFloat($scope.marks[i].monthlyTest);
		           
		           $scope.marks[i].total = (at + mt + ft).toFixed(2);
		        }else{
		          var result = $scope.marks[i].objective + $scope.marks[i].written + $scope.marks[i].practical;
		          $scope.marks[i].total = result;
		        }


			return $scope.marks[i].total;
		}






		$scope.letterGradeFn = function(i){
			var total = ($scope.marks[i].total * 100) / $scope.marks[i].totalMark,
				objectiveStatus = ($scope.marks[i].objective >= $scope.marks[i].objectivePassMark) ? true : false,
				writtenStatus = ($scope.marks[i].written >= $scope.marks[i].writtenPassMark) ? true : false,

				assignmentlStatus = ($scope.marks[i].assignment >= $scope.marks[i].assignmentPassMark) ? true : false,
			    cleanlinessStatus = ($scope.marks[i].cleanliness >= $scope.marks[i].cleanlinessPassMark) ? true : false,
				
				practicalStatus = ($scope.marks[i].practical >= $scope.marks[i].practicalPassMark) ? true : false,
				letter;
				
				

			if(total >= 80 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "A+"; }
			else if(total >= 70 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "A"; }
			else if(total >= 60 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "A-"; }
			else if(total >= 50 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "B"; }
			else if(total >= 40 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "C"; }
			else if(total >= 33 && objectiveStatus && writtenStatus && practicalStatus && assignmentlStatus && cleanlinessStatus){ letter = "D"; }
			else { letter = "F"; }

			$scope.marks[i].letter = letter;

			return $scope.marks[i].letter;
		}

		$scope.gradePointFn = function(i){
			var letter = $scope.marks[i].letter;
			$scope.marks[i].point = appConfig.letterToPoint[letter];

			return $scope.marks[i].point;
		}
	});
});





//updatemarks for individual student
app.controller("updateMarksCtrl", function($scope, $http, appConfig){
	$scope.details = {};




  $scope.active = true;
  $scope.getAllMarks = function(){
    $scope.allMarks = [];

	   var where = {
	     table : "marks",
	     cond : $scope.search
	   };

	   console.log(where);

	   $http({
	     method : "POST",
	     url    : url + "read",
	     data   : where
	   }).success(function(response){
	        console.log(response);
	        if(response.length > 0){
		        angular.forEach(response, function(item,index){
		        	item.student_ai_id = response[0].student_id;
		        	$scope.details.roll = response[0].roll;

		        	// get student information
		        	var where = {
		        		table: "registration",
		        		cond: {id: response[0].student_id}
		        	};

		        	//console.log(where);

		        	$http({
		        		method: "POST",
		        		url: url + "read",
		        		data: where
		        	}).success(function(regResponse) {
		        		$scope.details.student_name = regResponse[0].en_student_name;
		        		$scope.details.student_photo = regResponse[0].students_photo;
		        		$scope.details.reg_id = regResponse[0].reg_id;
		        		$scope.details.class = regResponse[0].class;
		        	});

			// get subject info
			 var where = {
			    table: "exam",
			      cond: {
				"exam_id" : item.exam_id,
				"class"   : item.class,
				"subject" : item.subject
			      }
			  };


			$http({
				method: "POST",
				url: url + "read",
				data: where
			}).success(function(response){
				//console.log(response);

				    if(response[0].type === "final" || response[0].type === "half_yearly"){
			   	 	  $scope.row_active = false;
			   		}else{
			   		  $scope.row_active = true;
			   		}


				item.type			         =  response[0].type;


				item.exam_objective			 =  parseFloat(response[0].objective);
				item.exam_objectivePassMark		 =  parseFloat(response[0].objective_pass_mark);
				item.exam_written 			 =  parseFloat(response[0].written);
				item.exam_writtenPassMark		 =  parseFloat(response[0].written_pass_mark);
				item.exam_practical			 =  parseFloat(response[0].practical);
				item.exam_practicalPassMark		 =  parseFloat(response[0].practical_pass_mark);
				item.exam_total				 =  (parseFloat(response[0].objective) + parseFloat(response[0].written) + parseFloat(response[0].practical));

				item.attendance                          =  parseFloat(item.at);
				item.monthlyTest                         =  parseFloat(item.mt);
				item.objective 				 =  parseFloat(item.objective);
				item.written				 =  parseFloat(item.written);
				item.practical				 =  parseFloat(item.practical);

		          $scope.allMarks.push(item);
			});

		     });
	        $scope.active = false;
	      }else{
	        $scope.allMarks = [];
	        $scope.active = true;
	      }
	      console.log($scope.allMarks);
	   });

   };

           $scope.totalMarksFn = function(i){
		        var at = mt = ft = 0.00;

		        if($scope.allMarks[i].type === "final" || $scope.allMarks[i].type === "half_yearly"){
		           ft = $scope.allMarks[i].objective + $scope.allMarks[i].written + $scope.allMarks[i].practical;
		           ft = parseFloat((ft * 89)/100);
		           at = parseFloat($scope.allMarks[i].attendance);
		           
		           //mt = parseFloat(($scope.allMarks[i].monthlyTest * 20)/100);
		           mt = parseFloat($scope.allMarks[i].monthlyTest);
		           
		           $scope.allMarks[i].total = (at + mt + ft).toFixed(2);
		        }else{
		          var result = $scope.allMarks[i].objective + $scope.allMarks[i].written + $scope.allMarks[i].practical;
		          $scope.allMarks[i].total = result;
		        }


			return $scope.allMarks[i].total;
		}


		$scope.letterGradeFn = function(i){
			var total = ($scope.allMarks[i].total * 100) / $scope.allMarks[i].exam_total,
				objectiveStatus = ($scope.allMarks[i].objective >= $scope.allMarks[i].exam_objectivePassMark) ? true : false,
				writtenStatus = ($scope.allMarks[i].written >= $scope.allMarks[i].exam_writtenPassMark) ? true : false,
				practicalStatus = ($scope.allMarks[i].practical >= $scope.allMarks[i].exam_practicalPassMark) ? true : false,
				letter;

			if(total >= 80 && objectiveStatus && writtenStatus && practicalStatus){ letter = "A+"; }
			else if(total >= 70 && objectiveStatus && writtenStatus && practicalStatus){ letter = "A"; }
			else if(total >= 60 && objectiveStatus && writtenStatus && practicalStatus){ letter = "A-"; }
			else if(total >= 50 && objectiveStatus && writtenStatus && practicalStatus){ letter = "B"; }
			else if(total >= 40 && objectiveStatus && writtenStatus && practicalStatus){ letter = "C"; }
			else if(total >= 33 && objectiveStatus && writtenStatus && practicalStatus){ letter = "D"; }
			else { letter = "F"; }

			$scope.allMarks[i].letter = letter;

			return $scope.allMarks[i].letter;
		}

		$scope.gradePointFn = function(i){
			var letter = $scope.allMarks[i].letter;
			$scope.allMarks[i].point = appConfig.letterToPoint[letter];

			return $scope.allMarks[i].point;
		}


});




//cost controller start here
app.controller("costCtrl",['$scope','$http',function($scope,$http){

    $scope.perPage = "10";
    $scope.reverse = false;
    $scope.fields = [];

	var obj = {
		table : "cost_field"
	};

	$http({
		method : "POST",
		url : url + "read",
		data : obj
	}).success(function(response){
		if(response.length>0){
			angular.forEach(response,function(values,index){
				values['sl'] = index + 1;
				$scope.fields.push(values);
			});
			console.log($scope.fields);
		}else{
			$scope.fields = [];
		}
	});
}]);


//paymentFieldCtrl controller start here
app.controller("paymentFieldCtrl",['$scope','$http',function($scope,$http){

    $scope.perPage = "30";
    $scope.reverse = false;
    $scope.fields = [];

	var obj = {
		table : "payment_field"
	};

	$http({
		method : "POST",
		url : url + "read",
		data : obj
	}).success(function(response){
		if(response.length>0){
			angular.forEach(response,function(values,index){
				values['sl'] = index + 1;
				$scope.fields.push(values);
			});
		}else{
			$scope.fields = [];
		}
	});
}]);




// payment set controller
app.controller("paymentSetCtrl",['$scope','$http',function($scope,$http){
  $scope.active  = true;
  $scope.allFields = [];

   $scope.getPaymentInfoFn = function(){
   	if(typeof $scope.search.class != "undefined" && typeof $scope.search.section != "undefined" && typeof $scope.search.type != "undefined") {
   	  /*
   	  var where = {
   	  	table  : "set_payment",
   	  	cond   : $scope.search
   	  };

   	  $http({
   	  	method   : "POST",
   	  	url      : url + "read",
   	  	data     : where
   	  }).success(function(response){
   	  	if(response.length > 0){
   	  		$scope.active = false;
   	  		$scope.allFields = response;
   	  		//console.log($scope.allFields[0]['field_name']);
   	  		//angular.forEach(function());
   	  		
   	  		var where = { table  : "payment_field" };

	   	    $http({
    	   	  	method   : "POST",
    	   	  	url      : url + "read",
    	   	  	data     : where
    	   	  }).success(function(response){
    	   	  	if(response.length > 0){
    	   	  	    angular.forEach(response,function(field,index){
    	   	  	       //console.log(field.field_name) ;
    	   	  	       
    	   	  	    });
    	   	  	}
    	   	 });
   	  		
   	  		
   	  		
   	  		
   	  	}else{
	  	 var where = { table  : "payment_field" };

	   	  $http({
	   	  	method   : "POST",
	   	  	url      : url + "read",
	   	  	data     : where
	   	  }).success(function(response){
	   	  	if(response.length > 0){
	   	  		$scope.active = false;
	  			$scope.allFields = response;
	   	  	}
	   	  });
   	  	}
   	  });
   	  
   	  */
   	  
   	  // new test code start here
   	  
   	  var where = { table  : "payment_field" };
	  $http({
   	  	method   : "POST",
   	  	url      : url + "read",
   	  	data     : where
   	  }).success(function(response){
   	  	if(response.length > 0){
   	  		$scope.active = false;
  			$scope.allFields = response;
  			
  			var where = {
           	  	table  : "set_payment",
           	  	cond   : $scope.search
           	};
           	
           	$http({
           	    method : "POST",
           	    url    : url + "read",
           	    data   : where
           	}).success(function(records){
           	    if(records.length > 0){
           	        //console.log(response);
           	        angular.forEach(records,function(value,index){
           	           if(response[index].field_name.indexOf(value.field_name) != -1 ){
           	               response[index].field_name = value.field_name;
           	               response[index].amount = parseFloat(value.amount);
           	           };
           	        });
           	        
           	        //console.log(response);
           	       
           	    }
           	});
   	  	}
   	  });
   	  
   	  // new test code end here
   	  
   	  
   	  
   	 }
   };

}]);


// payment Field Setting controller
app.controller("paymentFieldSettingCtrl",['$scope','$http',function($scope,$http){
  $scope.active  = true;
  $scope.allFields = [];

   $scope.getPaymentFieldInfoFn = function(){
   	$scope.allFields = [];
   	if(typeof $scope.search.class != "undefined" && typeof $scope.search.section != "undefined" && typeof $scope.search.type != "undefined" && typeof $scope.month != "undefined") {
   	  var where = {
   	  	table  : "set_payment",
   	  	cond   : $scope.search
   	  };

   	  $http({
   	  	method   : "POST",
   	  	url      : url + "read",
   	  	data     : where
   	  }).success(function(response){
   	  	if(response.length > 0){
   	  		$scope.active = false;
   	  		angular.forEach(response, function(row,index){
   	  			// Check payment field already set up or not
   	  			
   	  			row['sl'] = ++index;

	   	  		$http({
	   	  			method : "POST",
	   	  			url    : url + "read",
	   	  			data   : {
   	  			    	table : "payment_setting",
    					cond  : {
    						'set_payment_id': row.id,
    						'month'			: $scope.month
    					}
	   	  			}
	   	  		}).success(function(item){
	   	  			if (item.length > 0) {
	   	  				row['check'] = true;
	   	  			}else{
	   	  				row['check'] = false;
	   	  			}

	   	  			$scope.allFields.push(row);
	   	  		});
   	  		});
   	  		
   	  		console.log($scope.allFields);
   	  	 }else{
	  	 	$scope.active = true;
   	  		$scope.allFields = [];
   	  	}

   	  	//console.log($scope.allFields);
   	  });
   	 }
   };

}]);



app.controller("studentPaymentCtrl",['$scope','$http',function($scope,$http){
    
	$scope.allMonths = ['January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December'];
	$scope.paymentMonths = {"0":"0","1":"0","2":"0","3":"0","4":"0","5":"0","6":"0","7":"0","8":"0","9":"0","10":"0","11":"0"};
	
	$scope.active                = true;
	$scope.active1               = true;
	$scope.studentsInfo          = [];
	$scope.studentsPaymentInfo   = [];
	$scope.studentsPaymentFields = [];


	// set student global info
	$scope.class = $scope.section = $scope.type = "";

	// fetch student basic info
	$scope.getStudentInfoFn = function (){
	    
		var condition = {
			from : "admission",
			join : "registration",
			cond : "admission.student_id = registration.reg_id",
			where  :{
				'admission.student_id' : $scope.student_id
			}
		};

		$http({
			method: "POST",
			url: url + "readJoinData",
			data: condition
		}).success(function(response){
		    
		    //console.log(response);
		    
			if (response.length > 0 ) {
				$scope.active  = false;
				$scope.studentsInfo = response;

				$scope.class = response[0].class;
				$scope.section = response[0].section;
				$scope.type = response[0].type;
			}else{
				$scope.active  = true;
				$scope.studentsInfo = [];

				$scope.class = "";
				$scope.section = "";
				$scope.type = "";
			}
		});
	};

	// Fetch Student Payment history
	$scope.getStudentPaymentsInfoFn = function (){

		if (typeof $scope.year !="undefined" && typeof $scope.student_id != "undefined") {
		    
			var where = {
				table: "payment",
				cond: {
                 'student_id' : $scope.student_id,
                 'type'       : $scope.type,
                 'year'       : $scope.year,
                 'status'     : 'approved',
                 'trash'      : '0'
				},
				column : "month"
			};

			$http({
				method : "POST",
				url    : url + "readGroupBy",
				data   : where
			}).success(function(response) {
			    
				if (response.length > 0) {
					$scope.studentsPaymentInfo = response;
				}else{
					$scope.studentsPaymentInfo = [];
				}

			    if($scope.studentsPaymentInfo.length > 0){
			        angular.forEach($scope.studentsPaymentInfo, function(row,key){
			            var position = $scope.allMonths.indexOf(row.month);
			            $scope.paymentMonths[position] = "1";
			        });
			    }
				 // console.log($scope.studentsPaymentInfo);
				 // console.log($scope.paymentMonths);

			});


		}


	}

	// Fetch Student Available payment Field
	$scope.getStudentPaymentFieldsFn = function(){
	    
		// Table: payment_setting, set_payment
		
		if ($scope.class != "" && $scope.section != "" && $scope.month != "" && $scope.type != '' && $scope.year != "") {
	
			var condition = {
					from : "set_payment",
					join : "payment_setting",
					cond : "set_payment.id = payment_setting.set_payment_id",
					where : {
						"set_payment.class"     : $scope.class,
						"set_payment.section"   : $scope.section,
						"set_payment.type"      : $scope.type,
						"payment_setting.month" : $scope.month
					}
				};


				$http({
					method : "POST",
					url    : url + "readJoinData",
					data   : condition
				}).success(function(response){
				    
					if (response.length > 0 ) {
						$scope.active1  = false;
						$scope.studentsPaymentFields = response;

						var total = 0.00;
						angular.forEach(response,function(row){
							total += parseFloat(row.amount);
						});
						$scope.studentsPaymentFields['total'] = parseFloat(total);
					}else{
						$scope.active1  = true;
						$scope.studentsPaymentFields = [];
					}

			});
		}
	}
}]);

app.controller("classWiseReceiveCtrl",["$scope","$http",function($scope,$http){
    
	$scope.active1               = true;
	$scope.studentsPaymentFields = [];

    
    
    // Fetch Student Available payment Field
	$scope.getStudentPaymentFieldsFn = function(){
		// Table: payment_setting,set_payment

		if (typeof $scope.session != "undefined" && typeof $scope.class != "undefined" && typeof $scope.section != "undefined" && typeof $scope.type != "undefined" && typeof $scope.month != "undefined" && typeof $scope.year != "undefined") {
			
			var condition = {
    			from  : "admission",
    			join  : "registration",
    			cond  : "admission.student_id=registration.reg_id",
    			where :{
                    "admission.class"      : $scope.class,
                    "admission.session"    : $scope.session,
                    "admission.type"       : $scope.type,
                    "admission.section"    : $scope.section,
                    "registration.class"   : $scope.class,
                    "registration.session" : $scope.session,
                    "registration.section" : $scope.section,
    			}
    		};
    		//console.log(condition);
		
    		$http({
    			method : "POST",
    			url    : url + "readJoinData",
    			data   : condition
    		}).success(function(allStudents){
    		    //console.log(allStudents);
    		    
			    if(allStudents.length > 0 ){
			        
			        // set payment fields for every student
			        angular.forEach(allStudents,function(info,index){
			            var condition2 = {
    						from  : "set_payment",
    						join  : "payment_setting",
    						cond  : "set_payment.id=payment_setting.set_payment_id",
    						where : {
    							"set_payment.class"     : info.class,
    							"set_payment.section"   : info.section,
    							"set_payment.type"      : info.type,
    							"payment_setting.month" : $scope.month
    						}
    					};
    					//console.log(condition2);
    
    					$http({
    						method : "POST",
    						url    : url + "readJoinData",
    						data   : condition2
    					}).success(function(response){
    					    //console.log(response);
    					    
    						if (response.length > 0) {
    						    
    							$scope.active1  = false;
    							//set student_id for every student
    							//$scope.studentsPaymentFields[index].student_id = info.student_id;
    							
    							angular.forEach(response,function(row,key){
    							    var total = 0.00;
    							    response[key].name = info.name;
    							    response[key].roll = info.roll;
    							    response[key].student_id = info.student_id;
    							    response[key].guardian_mobile = info.guardian_mobile;
    								total += parseFloat(row.amount);
    								response[key].total= parseFloat(total);
    							});
    							
    							$scope.studentsPaymentFields.push(response);
    							
    						}else{
    							//$scope.active1  = true;
    							$scope.studentsPaymentFields= [];
    						}
    				    });
			            //console.log($scope.studentsPaymentFields);
			        }); 
			        // set payment fields for every student end here
			     }
    		});
		}
	}
	
	$scope.getFieldsTotalFn = function(i){
	    var total = 0.00;
	    angular.forEach($scope.studentsPaymentFields[i],function(item){
	        total += parseFloat(item.amount);
	    });
	    return total.toFixed(2);
	}
    
}]);



// All Payment
app.controller("AllPaymentCtrl", ["$scope", "$http", function($scope, $http) {
	$scope.resultset = [];
	$scope.active = false;
	$scope.perPage = 10;

	$scope.getSalaryRecordFn = function() {
		var where = {
			"Year(date)": $scope.where.year,
			"Month(date)": $scope.where.month
		};

		//console.log(where);

		$http({
			method: "POST",
			url: siteurl + "salary/payment/read_salary",
			data: where
		}).success(function(response) {
			if (response.length > 0) {
				$scope.active = true;

				angular.forEach(response, function(row, index) {
					row.sl = index + 1;
				});

				$scope.resultset = response;
			} else {
				$scope.active = false;
				$scope.resultset = [];
			}

		});
	}
}]);


//payment Edit 
app.controller("editPaymentSlipCtrl",["$scope","$http",function($scope,$http){
    
    $scope.$watch("invoice",function(){
        $scope.total = 0.00;    
        //fetch info from `payment` table
       
        var where = {
            table : 'payment',
            cond  : {
                'invoice_no':   $scope.invoice_no
            }
        };
        
        $http({
            method: 'POST',
            url : url + 'read',
            data: where
        }).success(function(response){
            if(response.length > 0){
                angular.forEach(response,function(value,index){
                    //console.log(value);
                    $scope.total += parseFloat(value.amount);
                });
            }
        });
        
    });
    
    
}]);

// payroll controller
app.controller("PayrollCtrl", ["$scope", "$http","$window","$interval", function($scope, $http,$window,$interval){
	$scope.profile = {
		image: siteurl + "private/images/default.png",
		active: false
	};

	$scope.basic_salary = "";
    $scope.msg = {active: true, content: ""};

	$scope.getProfileFn = function() {
		var where = {
			table: "employee",
			cond: {"employee_emp_id": $scope.data.eid}
		};

		$http({
			method: "POST",
			url: url + 'read',
			data: where
		}).success(function(response){
			// get data
			if(response.length == 1){
				$scope.profile.eid     = response[0].employee_emp_id;
				$scope.profile.post    = response[0].employee_designation;
				$scope.profile.mobile  = response[0].employee_mobile;
				$scope.profile.joining = response[0].employee_joining;
				$scope.profile.name    = response[0].employee_name;
				$scope.profile.email   = response[0].employee_email;
				$scope.profile.image   = siteurl + response[0].employee_photo;
				$scope.profile.active  = true;

				$scope.basic_salary = parseFloat(response[0].employee_salary);
			} else {
				//console.log("Employee not found!");
				$scope.msg.active = false;
				//$scope.msg.content = "Employee not found!";
				$scope.profile = {};
				$scope.profile.image = siteurl + "private/images/default.png";
				$scope.profile.active = false;
				$scope.basic_salary = "";
			}

		});
	}

	$scope.saveDataFn = function(basic_salary) {
		// chack existance
		var transmit = {
			table: "salary_structure",
			where: {eid: $scope.data.eid}
		};
		$scope.data.basic = basic_salary;


		$http({
			method: "POST",
			url: siteurl + 'payroll/addBasicSalaryCtrl/exists',
			data: transmit
		}).success(function(response) {
			var transmit = {
				table: "salary_structure",
				dataset: $scope.data
			};

			// store the info
			if(parseInt(response) === 1){
				transmit.dataset = { basic: basic_salary };
				transmit.where =   { eid: $scope.data.eid };
			}

			$http({
				method: "POST",
				url: siteurl + 'payroll/addBasicSalaryCtrl/save',
				data: transmit
			}).success(function(response) {
				$scope.msg.active = true;
				$scope.msg.content = response;
				$interval(function(){$window.location.reload();},5000);
			});
		});
	}
}]);



// Bonus Controller
app.controller("BonusCtrl", ["$scope", "$http", function($scope, $http){
	$scope.bonuses = [{fields: "", percentage: 0, remarks: ""}];
	$scope.profile = {
		image: siteurl + "private/images/default.png",
		active: false
	};

	$scope.getProfileFn = function() {
		var where = {
			table: "employee",
			cond: {"employee_emp_id": $scope.eid}
		};

		$http({
			method: "POST",
			url: url + 'read',
			data: where
		}).success(function(response){
			// get data
			if(response.length > 0){
				$scope.profile.eid     = response[0].employee_emp_id;
				$scope.profile.name    = response[0].employee_name;
				$scope.profile.post    = response[0].employee_designation;
				$scope.profile.mobile  = response[0].employee_mobile;
				$scope.profile.email   = response[0].employee_email;
				$scope.profile.joining = response[0].employee_joining;
				$scope.profile.image   = siteurl + response[0].employee_photo;

				$scope.profile.active = true;
				//console.log(response);

				// get bonus info
				var transmit = {
					table: "salary_structure",
					cond: {eid: $scope.eid}
				};

				$http({
					method: "POST",
					url: url + "read",
					data: transmit
				}).success(function(response) {
					if(response.length > 0) {
						if(response[0].bonus === "yes") {
							// get bonus records
							var transmit = {
								table: "bonus_structure",
								cond: {eid: $scope.eid}
							};

							$http({
								method: "POST",
								url: url + "read",
								data: transmit
							}).success(function(response) {
								if(response.length > 0){
									angular.forEach(response, function(row, index) {
										response[index].percentage = parseFloat(row.percentage);
									});

									$scope.bonuses = response;
								} else {
									$scope.bonuses = [{fields: "", percentage: 0, remarks: ""}];
								}
							});
						}
					}
				});
			} else {
				//console.log("Employee not found!");
				$scope.profile = {};
				$scope.profile.image = siteurl + "private/images/default.png";
				$scope.profile.active = false;
			}

		});
	}

	$scope.createRowFn = function() {
		var obj = {fields: "", percentage: 0, remarks: ""};
		$scope.bonuses.push(obj);
	}

	$scope.deleteRowFn = function(index) {
		$scope.bonuses.splice(index, 1);
	}

}]);


// Deduction Controller
app.controller("DeductionCtrl", ["$scope", "$http", function($scope, $http){

	$scope.profile = {
		image: siteurl + "private/images/default.png",
		active: false
	};

	$scope.deductions = [
		{fields: "Advanced Pay",       percentage : 0},
		{fields: "Professional Tax",   percentage : 0},
		{fields: "Loan",               percentage : 0},
		{fields: "Provident Fund",     percentage : 0}
	];

	$scope.amount  = 0.00;

	$scope.getProfileFn = function() {
		var where = {
			table: "employee",
			cond: {"employee_emp_id": $scope.eid}
		};

		$http({
			method: "POST",
			url: url + 'read',
			data: where
		}).success(function(response) {
			// get data
			if(response.length > 0){
				$scope.profile.eid     = response[0].employee_emp_id;
				$scope.profile.name    = response[0].employee_name;
				$scope.profile.post    = response[0].employee_designation;
				$scope.profile.mobile  = response[0].employee_mobile;
				$scope.profile.email   = response[0].employee_email;
				$scope.profile.joining = response[0].employee_joining;
				$scope.profile.image   = siteurl + response[0].employee_photo;
				$scope.profile.active  = true;

				// check deduction active or not
				var transmit = {
					table: "salary_structure",
					cond: {"eid": $scope.eid}
				};

				$http({
					method: "POST",
					url: url + "read",
					data: transmit
				}).success(function(response) {
					if(response.length > 0){
						$scope.amount = parseFloat(response[0].basic);

						if(response[0].deduction === "yes"){
							var transmit = {
								table: "deduction_structure",
								cond: {eid: $scope.eid}
							};

							$http({
								method: "POST",
								url: url + "read",
								data: transmit
							}).success(function(response) {
								angular.forEach(response, function(row, index){
									response[index].percentage = parseFloat(response[index].percentage);
								});
								$scope.deductions = response;
							});
						}
				   }
				});

			} else {
				$scope.profile = {};
				$scope.profile.image = siteurl + "private/images/default.png";
				$scope.profile.active = false;
			}

		});
	}


	$scope.totalFn = function(i) {
		var total = 0.00;
		total = $scope.amount * ($scope.deductions[i].percentage / 100);
		total = total.toFixed(2);
		return total;
	}

}]);


app.controller("PaymentCtrl", ["$scope", "$http", function($scope, $http) {
	$scope.basic_salary = 0.00;
	$scope.profile = {
		image: siteurl + "private/images/default.png",
		active: false,
		incentive: false,
		deduction: false,
		bonus: false
	};

	$scope.insentives = [];
	$scope.deductions = [];
	$scope.bonuses = [];

	$scope.amount = {
		insentives: {extra: 0.00},
		deductions: {extra: 0.00},
		bonuses: {extra: 0.00}
	};

	$scope.getEmployeeInfoFn = function() {
		var where = {
			table: "employee",
			cond: {employee_emp_id: $scope.eid}
		};

		$http({
			method: "POST",
			url: url + "read",
			data: where
		}).success(function(response) {
			if(response.length > 0){
				$scope.profile.eid     = response[0].employee_emp_id;
				$scope.profile.name    = response[0].employee_name;
				$scope.profile.post    = response[0].employee_designation;
				$scope.profile.mobile  = response[0].employee_mobile;
				$scope.profile.email   = response[0].employee_email;
				$scope.profile.joining = response[0].employee_joining;
				$scope.profile.image   = siteurl + response[0].employee_photo;

				$scope.profile.active = true;

				// get basic salary
				var transmit = {
					table: "salary_structure",
					cond: {eid: $scope.eid}
				};

				$http({
					method: "POST",
					url: url + "read",
					data: transmit
				}).success(function(response) {
					if(response.length > 0) {
						$scope.basic_salary = parseInt(response[0].basic);

						// incentives
						if(response[0].incentive === "yes"){
							// active incentives
							$scope.profile.incentive = true;

							// get incentives
							var transmit = {
								table: "incentive_structure",
								cond: {eid: $scope.eid}
							};

							$http({
								method: "POST",
								url: url + "read",
								data: transmit
							}).success(function(response) {
								if(response.length > 0) {
									angular.forEach(response, function(row, index) {
										response[index].percentage = parseFloat(row.percentage);
										response[index].amount = ((parseFloat(row.percentage) * $scope.basic_salary) / 100);
										$scope.amount.insentives[response[index].fields] = ((parseFloat(row.percentage) * $scope.basic_salary) / 100);
									});

									$scope.insentives = response;
								} else {
									$scope.insentives = [];
									$scope.amount.insentives = {};
									$scope.amount.insentives.extra = 0.00;
								}

							});
						}

						// deduction
						if(response[0].deduction === "yes"){
							// active deduction
							$scope.profile.deduction = true;

							// get deduction
							var transmit = {
								table: "deduction_structure",
								cond: {eid: $scope.eid}
							};

							$http({
								method: "POST",
								url: url + "read",
								data: transmit
							}).success(function(response) {
								if(response.length > 0) {
									angular.forEach(response, function(row, index) {
										response[index].amount = parseFloat(row.amount);
										$scope.amount.deductions[response[index].fields] = parseFloat(row.amount);
									});

									$scope.deductions = response;
								} else {
									$scope.deductions = [];
									$scope.amount.deductions = {};
									$scope.amount.deductions.extra = 0.00;
								}

							});
						}

						// deduction
						if(response[0].bonus === "yes"){
							// active deduction
							$scope.profile.bonus = true;

							// get deduction
							var transmit = {
								table: "bonus_structure",
								cond: {eid: $scope.eid}
							};

							$http({
								method: "POST",
								url: url + "read",
								data: transmit
							}).success(function(response) {
								if(response.length > 0) {
									angular.forEach(response, function(row, index) {
										response[index].percentage = parseFloat(row.percentage);
										response[index].amount = ((parseFloat(row.percentage) * $scope.basic_salary) / 100);
										$scope.amount.bonuses[response[index].fields] = ((parseFloat(row.percentage) * $scope.basic_salary) / 100);
									});

									$scope.bonuses = response;
								} else {
									$scope.bonuses = [];
									$scope.amount.bonuses = {};
									$scope.amount.bonuses.extra = 0.00;
								}

							});
						}
					} else {
						alert("This employee's basic info not found!");
						$scope.basic_salary = 0.00;
					}
				});
			} else {
				$scope.profile = {};

				$scope.profile.image = siteurl + "private/images/default.png";
				$scope.profile.active = false;
				$scope.profile.incentive = false;
				$scope.profile.deduction = false;
			}

		});
	}

	$scope.totalFn = function() {
		var total = 0.00;
		var insentives = 0.00;
		var deductions = 0.00;
		var bonuses = 0.00;

		angular.forEach($scope.amount.insentives, function(value){
			insentives += value;
		});

		angular.forEach($scope.amount.deductions, function(value){
			deductions += value;
		});

		angular.forEach($scope.amount.bonuses, function(value){
			bonuses += value;
		});

		total = ($scope.basic_salary + insentives + bonuses) - deductions;

		return total;
	}

}]);



// Incentive Controller
app.controller("IncentiveCtrl", ["$scope", "$http", function($scope, $http){
	$scope.profile = {
		image: siteurl + "private/images/default.png",
		active: false
	};

	$scope.incentives = [
		{fields: "HRA", percentage: 0},
		{fields: "DA", percentage: 0},
		{fields: "TA", percentage: 0},
		{fields: "CCA", percentage: 0},
		{fields: "Medical", percentage: 0},
		{fields: "Provident Fund", percentage: 0}
	];

	$scope.getProfileFn = function() {
		var where = {
			table: "employee",
			cond: {"employee_emp_id": $scope.eid}
		};

		$http({
			method: "POST",
			url: url + 'read',
			data: where
		}).success(function(response){
			// get data
			if(response.length > 0){
				$scope.profile.eid = response[0].employee_emp_id;
				$scope.profile.name = response[0].employee_name;
				$scope.profile.post = response[0].employee_designation;
				$scope.profile.mobile = response[0].employee_mobile;
				$scope.profile.email = response[0].employee_email;
				$scope.profile.joining = response[0].employee_joining;
				$scope.profile.image = siteurl + response[0].employee_photo;

				$scope.profile.active = true;

				// get basic salary
				var transmit = {
					table: "salary_structure",
					cond: {eid: $scope.eid}
				};

				$http({
					method: "POST",
					url: url + "read",
					data: transmit
				}).success(function(response) {
					if(response.length > 0){
						$scope.amount = parseFloat(response[0].basic);
					} else {
						alert("This employee's basic info not found!");
					}
				});

				// check incentive active or not
				var transmit = {
					table: "salary_structure",
					cond: {"eid": $scope.eid}
				};

				$http({
					method: "POST",
					url: url + "read",
					data: transmit
				}).success(function(response) {
					if(response[0].incentive === "yes"){
						var transmit = {
							table: "incentive_structure",
							cond: {eid: $scope.eid}
						};

						$http({
							method: "POST",
							url: url + "read",
							data: transmit
						}).success(function(response) {
							angular.forEach(response, function(row, index){
								response[index].percentage = parseFloat(response[index].percentage);
							});

							$scope.incentives = response;
						});
					}
				});

			} else {
				$scope.profile = {};
				$scope.profile.image = siteurl + "private/images/default.png";
				$scope.profile.active = false;
				$scope.amount = 0.00;
			}

		});
	}

	$scope.totalFn = function(i) {
		var total = 0.00;
		total = $scope.amount * ($scope.incentives[i].percentage / 100);
		total = total.toFixed(2);
		return total;
	}
}]);


// Salary Report
app.controller("SalaryReportCtrl", ["$scope", "$http", function($scope, $http) {
	$scope.resultset = [];
	$scope.active = false;
	$scope.perPage = 10;

	$scope.getSalaryRecordFn = function() {
		var where = {
			"Year(date)": $scope.where.year,
			"Month(date)": $scope.where.month
		};

		$http({
			method: "POST",
			url: siteurl + "salary/salary/read_salary",
			data: where
		}).success(function(response) {
			if (response.length > 0) {
				$scope.active = true;

				angular.forEach(response, function(row, index) {
					row.sl = index + 1;
				});

				$scope.resultset = response;
			} else {
				$scope.active = false;
				$scope.resultset = [];
			}

			console.log(response);
		});
	}
}]);

//student validaty date Set

app.controller("studentValidity", ["$scope", "$http", function($scope, $http){

		$scope.student = [];
		$scope.validity = "";
		$scope.getStudentFn = function() {

		 if($scope.studentClass != null) {
			var where = {
				table: "admission",
				column: "class",
				cond: {class: $scope.studentClass}
			};

			$http({
				method: "POST",
				url: url + "readGroupBy",
				data: where
			}).success(function(response) {
				if(response.length > 0) {
					$scope.validity = response[0].validity;
		console.log(response);
				}
			});
		}

	}


}]);

// edit Registration Controller
app.controller('edit_registrationCtrl', function($scope, $http) {
    
    $scope.chose_1 = $scope.chose_2 = $scope.chose_3 = $scope.optional = [];
    $scope.code = {};

    // check if present & permanent address are same or not
    $scope.sameAddressFn = function() {
        var value = $scope.checkbox;

        if (value) {
            $scope.permanent = $scope.present;
        } else {
            $scope.permanent = {};
        }
    }

    $scope.$watch('group', function(group){

        $scope.code = {};
        var where = { group: group };

        $http({
            method: 'POST',
            url: siteurl + 'home/getSubject',
            data: where
        }).success(function(response) {
            
            //console.log(response);
            
            $scope.chose_1 = [];
            angular.forEach(response.chose_1, function(item, index) { $scope.chose_1.push(item); });

            $scope.chose_2 = [];
            angular.forEach(response.chose_2, function(item, index) { $scope.chose_2.push(item); });

            $scope.chose_3 = [];
            angular.forEach(response.chose_3, function(item, index) { $scope.chose_3.push(item);});

            $scope.optional = [];
            angular.forEach(response.optional, function(item, index) { $scope.optional.push(item); });
            
            var whereStudent = { student_id: $scope.student_id };
        
            $http({
                method: 'POST',
                url: siteurl + 'home/getStudentInformation',
                data: whereStudent
            }).success(function(responseItem) {
                
                console.log(whereStudent);
                console.log(responseItem);

                // Chose3rd Start
                
                var chose_3_index       = $scope.chose_3;
                var chose_3_subject     = (responseItem.student_subjects).compulsory_subject_four;
                $scope.code.chose3rd    = (responseItem.student_subjects).compulsory_code_four;
                var get_index_3 = '';
                
                chose_3_index.filter(function(chose_3_data, index_3){
                    chose_3_data.forEach(function(y){
                        if(y==chose_3_subject){
                            get_index_3=index_3;
                        }
                    });
                });
                
                $scope.chose3rd = $scope.chose_3[get_index_3];
                
                // Chose3rd End
                
                // Chose2nd Start
                
                var chose_2_index       = $scope.chose_2;
                var chose_2_subject     = (responseItem.student_subjects).compulsory_subject_five;
                $scope.code.chose2nd    = (responseItem.student_subjects).compulsory_code_five;
                var get_index_2 = '';
                
                chose_2_index.filter(function(chose_2_data, index_2){
                    chose_2_data.forEach(function(y){
                        if(y==chose_2_subject){
                            get_index_2=index_2;
                        }
                    });
                });
                
                $scope.chose2nd = $scope.chose_2[get_index_2];
                
                // Chose2nd End
                
                // Chose1st Start
                
                var chose_1_index       = $scope.chose_1;
                var chose_1_subject     = (responseItem.student_subjects).compulsory_subject_six;
                $scope.code.chose1st    = (responseItem.student_subjects).compulsory_code_six;
                var get_index_1 = '';
                
                chose_1_index.filter(function(chose_1_data, index_1){
                    chose_1_data.forEach(function(y){
                        if(y==chose_1_subject){
                            get_index_1=index_1;
                        }
                    });
                });
                
                $scope.chose1st = $scope.chose_1[get_index_1];
                
                // Chose1st End
                
                //Optional_chose Start
                
                var optional_index       = $scope.optional;
                var optional_subject     = (responseItem.student_subjects).optional_subject;
                $scope.code.optional    = (responseItem.student_subjects).optional_code;
                var get_index_optional_chose = '';
                
                optional_index.filter(function(optional_data, index_1){
                    optional_data.forEach(function(y){
                        if(y==optional_subject){
                            get_index_optional_chose=index_1;
                        }
                    });
                });
                
                $scope.optional_chose = $scope.optional[get_index_optional_chose];
                
                //Optional_chose End
            
            });
            
        });
        
        
        $scope.getSubjectCodeFn = function(index) {

            if (index == 'chose_1') {
                $scope.code['chose1st'] = ($scope.chose1st) ? $scope.chose1st[2] : '';
            } else if (index == 'chose_2') {
                $scope.code['chose2nd'] = ($scope.chose2nd) ? $scope.chose2nd[2] : '';
            } else if (index == 'chose_3') {
                $scope.code['chose3rd'] = ($scope.chose3rd) ? $scope.chose3rd[2] : '';
            } else {
                $scope.code['optional'] = ($scope.optional_chose) ? $scope.optional_chose[2] : '';
            }
        }
        
    });
    
});
// Client transaction controller 
app.controller('bankTransaction', ['$scope', '$http', function($scope, $http) {
    $scope.totalAmount = 0.0;
    $scope.initial_balance = 0.00;
    $scope.total_credit = 0.00;
    $scope.total_debit = 0.00;
    
    
	$scope.getclientInfo = function(){
	  
		var condition = {
		   	table : "bank_account",
			cond :{
				account_number : $scope.accountNumber
			}
	   	};

	   	$http({
	   		method : 'POST',
	   		url    : url + 'read',
	   		data   : condition
	   	}).success(function(response){
	   		if (response.length > 0) {
	   		    
	   			$scope.initial_balance = response[0].init_balance;
	   			var conditionTransaction = {
        		   	table : "transaction",
        			cond :{
        				account_number : $scope.accountNumber,
        			}
        			
        	   	};
        
        	   	$http({
        	   		method : 'POST',
        	   		url    : url + 'read',
        	   		data   : conditionTransaction
        	   	}).success(function(transaction){
        	   	    
        	   		if (transaction.length > 0) {
        	   		    
        	   			total = 0;
        	   			totalC = 0;
        	   			angular.forEach(transaction,function(record,sl){
        	   			    if(record.transaction_type=='Debit' || record.transaction_type=='bank_to_TT'){
    							total += parseFloat(record.amount);
            	   			}
            	   			
            	   			if(record.transaction_type=='Credit'){
    							totalC += parseFloat(record.amount);
            	   			}

						});
						
						$scope.total_debit = total;
						$scope.total_credit = totalC;
						
						$scope.totalAmount =  (parseFloat($scope.initial_balance) + parseFloat($scope.total_credit)) - $scope.total_debit;
					
        	   		}
                
        	   	});
        	   	
        	   	
	   		}
	   		
	   	});
	   
	};
	
	$scope.type = '';
	$scope.paidAmount = 0;
	$scope.totalBalance = 0;
	$scope.getTotalAmount = function(){
        total = 0;
        
      if($scope.transaction_type=='Debit' || $scope.transaction_type=='bank_to_TT'){
          total = $scope.totalAmount - $scope.paidAmount;
      }
      if($scope.transaction_type=='Credit'){
          total = parseFloat($scope.totalAmount) + parseFloat($scope.paidAmount);
      }
      
      $scope.totalBalance = total.toFixed(2);
      
	}
	
}]);
// All Bank Transaction Ctrl
app.controller("bankLedger", ["$scope", "$http", function($scope, $http) {
	$allAccount = [];

	$scope.getAccountFn = function() {
		var where = {
			table: 'bank_account',
			cond: {bank_name: $scope.bank}
		};

		$http({
			method: "POST",
			url: url + 'read',
			data: where
		}).success(function(response) {
			if(response.length > 0) {
				$scope.allAccount = response;
			}

			//console.log(response);
		});
	}

}]);



app.controller('attendanceCtrl', function ($scope, $http) {
    $scope.list     = [];
    $scope.nameInfo = [];
    $scope.$watch('dept', function (dept) {
        if (typeof dept !== 'undefined'){
            // party where
            var where = {
                table   : 'access_ctrl_attendance',
                cond    : {department: dept, trash: '0'},
                select  : ['name', 'ac_id'],
                groupBy : ['name']
            };
            // get client lists
            $http({
                method: 'post',
                url: url + 'result',
                data: where
            }).success(function (nameInfo) {
                $scope.list = [];
                if (nameInfo.length > 0) {
                    $scope.list = nameInfo;
                    console.log($scope.list);
                    
                }
            });
        }
    });
});