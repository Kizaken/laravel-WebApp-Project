var app = angular.module("guessingGames", []);
app.controller('guessNumbersCtrl', guessNumbersCtrl);
function guessNumbersCtrl($scope){
	$scope.verifyGuess = function(){

		$scope.deviation = $scope.original - $scope.guess;
		$scope.noofTries = $scope.noofTries + 1;
	}
	$scope.initializeGame = function(){

		$scope.noofTries = 0;
		$scope.original = Math.floor((Math.random() * 100) + 1);
		$scope.guess = null;
		$scope.deviation = null;

	}
	$scope.initializeGame();

}
