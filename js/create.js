var parcel = angular.module('parcel', ['ngResource']);

parcel.controller('CreateCtrl', function ($scope, $resource) {

    var createService = $resource('http://parcel.io/parcel/:parcelId', { parcelId: '@id' });
    var data = createService.get({ parcelId:'a1342ad160f10cd6abda11a26e00009b' }, function () {});

    $scope.parcel = {
        title: data.title,
        text: data.text,
        image: data.image,
        sound: data.sound
    }
});