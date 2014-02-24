var parcel = angular.module('parcel', ['ngResource'], function ($locationProvider) {
    $locationProvider.html5Mode(true);
});

parcel.controller('ViewCtrl', function ($scope, $resource, $location) {
    var id = $location.search().id;
    var dataService = $resource('http://parcel.io/parcel/:parcelId', { parcelId: '@id' });
    $scope.data = dataService.get({ parcelId: id }, function () {});
});