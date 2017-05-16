'use strict';

angular.module('daxiataojingApp')
    .constant("baseURL", "http://kaitohh.com:" + window.location.port + "/")
    .service('askProblemsFactory', ['$http', 'baseURL', '$q', function ($http, baseURL, $q) {

        this.getPage = function (pageSize, pageId, callback) {
            //console.log(baseURL + "askList.do?" + "pageSize=" + pageSize+"&"+"pageId="+pageId);
            //console.log($http.get(baseURL + "askList.do?" + "pageSize=" + pageSize+"&"+"pageId="+pageId));
            return $http.get(baseURL + "askList.do?" + "pageSize=" + pageSize + "&" + "pageId=" + pageId);
        }

    }])
    .service('answerProblemsFactory', ['$http', 'baseURL', '$q', function ($http, baseURL, $q) {

        this.getPage = function (pageSize, pageId, callback) {
            //console.log(baseURL + "askList.do?" + "pageSize=" + pageSize+"&"+"pageId="+pageId);
            //console.log($http.get(baseURL + "askList.do?" + "pageSize=" + pageSize+"&"+"pageId="+pageId));
            return $http.get(baseURL + "answerList.do?" + "pageSize=" + pageSize + "&" + "pageId=" + pageId);
        }

    }])
    .service('agreeProblemsFactory', ['$http', 'baseURL', '$q', function ($http, baseURL, $q) {

        this.getPage = function (pageSize, pageId, callback) {
            //console.log(baseURL + "askList.do?" + "pageSize=" + pageSize+"&"+"pageId="+pageId);
            //console.log($http.get(baseURL + "askList.do?" + "pageSize=" + pageSize+"&"+"pageId="+pageId));
            return $http.get(baseURL + "askList.do?" + "pageSize=" + pageSize + "&" + "pageId=" + pageId);
        }

    }])

;
