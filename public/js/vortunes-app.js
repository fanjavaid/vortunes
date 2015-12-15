var vtApp = angular.module('vtApp', []);

vtApp.controller('DetailAngsuranController', function($scope) {
	$scope.datas = [];
	$scope.tglSimulasi = '';
	$scope.harga = 0;
	$scope.tenor = 0;
	$scope.percentDP = 0;

	$scope.resultDP = 0;

	$scope.generateDP = function(harga, percentDP) {
		$scope.resultDP = harga * (percentDP/100);
		console.log($scope.resultDP);
	}

	$scope.generateAngsuran = function(pTenor, pCicilan) {
		$scope.datas = [];
		var tenor = Math.ceil(pTenor);

		// console.log('Tanggal : ' + document.getElementById('tgl_simulasi').value);
		var dateParam = document.getElementById('tgl_simulasi').value.split('-');


		for (var i = 0; i < tenor; i++) {
			var startDate = new Date(dateParam[0], dateParam[1], dateParam[2], 0, 0, 0, 0);
			startDate.setMonth(startDate.getMonth()-1);
			startDate.setMonth(startDate.getMonth() + (i+1));

			var data = {
				'angsuran_ke' : (i+1),
				'tgl_jatuh_temp' : startDate,
				'nilai': pCicilan
			}

			$scope.datas.push(data);
		};

		console.log($scope.datas);
	}
});