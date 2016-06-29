var app = angular.module('StarterApp',['ngMaterial','ngMdIcons']);

app.controller('AppCtrl',['$scope', '$mdBottomSheet','$mdSidenav','$mdDialog', function($scope,$mdBottomSheet,$mdSideNav,$mdDialog) {

	$scope.toggleSidenav = function(menuId) {
		$mdSidenav(menuId).toggle();
	};

	$scope.menu = [
		{
			link: '',
			tittle: 'Inicio',
			icon: 'dashboard'
		},
		{
			link: '',
			tittle: 'Rockers',
			icon: 'group'
		},
		{
			link: '',
			tittle: 'Mensajes',
			icon: 'message'
		}
	];

	$scope.admin = [
		{
			link: '',
			tittle: 'Borrar',
			icon: 'delete'
		},
		{
			link: '',
			tittle: 'Configuracion',
			icon: 'settings'
		}	
	];

}]);