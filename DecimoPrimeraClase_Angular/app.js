var app = angular.module('StarterApp',['ngMaterial','ngMdIcons']);

app.controller('AppCtrl',['$scope', '$mdBottomSheet','$mdSidenav','$mdDialog', function($scope,$mdBottomSheet,$mdSideNav,$mdDialog) {

	$scope.toggleSidenav = function(menuId) {
		$mdSidenav(menuId).toggle();
	};

	$scope.menu = [
		{
			link: '',
			title: 'Inicio',
			icon: 'dashboard'
		},
		{
			link: '',
			title: 'Rockers',
			icon: 'group'
		},
		{
			link: '',
			title: 'Mensajes',
			icon: 'message'
		}
	];

	$scope.admin = [
		{
			link: '',
			title: 'Borrar',
			icon: 'delete'
		},
		{
			link: '',
			title: 'Configuracion',
			icon: 'settings'
		}	
	];

	$scope.activity = [
		{
			what: 'Hola que tal?',
			who: 'Yo',
			notes: 'si que tal.'
		},
		{
			what: 'Hola que tal?',
			who: 'Yo',
			notes: 'si que tal.'
		},
		{
			what: 'Hola que tal?',
			who: 'Yo',
			notes: 'si que tal.'
		}
	];

}]);