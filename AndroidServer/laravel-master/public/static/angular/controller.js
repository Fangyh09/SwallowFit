'use strict';

angular.module('pet-hospital')
    .controller('AskProblemsController', ['$scope', 'askProblemsFactory',function($scope,askProblemsFactory) {
        $scope.pageSize=2;
        $scope.pageId=0;
        $scope.canLoadMore=true;
        $scope.askProblems=[];
        askProblemsFactory.getPage($scope.pageSize,$scope.pageId)
            .then(
                function(response) {
                    var tmpdata=response.data.data;
                    if(tmpdata.length > 0) {
                        $scope.askProblems=tmpdata;
                        $scope.canLoadMore=true;
                    }
                    else {
                        $scope.canLoadMore=false;
                    }
                    $scope.pageId += 1;
                }
                ,
                function(response) {
                    $scope.message = "Error: "+response.status + " " + response.statusText;
                    console.log($scope.message);
                }
            );


        console.log(1 < parseInt($scope.askProblemsLength));

        $scope.loadPage=function() {
            if ($scope.canLoadMore) {
                askProblemsFactory.getPage($scope.pageSize,$scope.pageId)
                    .then(
                        function(response) {
                            var tmpdata=response.data.data;
                            if(tmpdata.length > 0) {
                                $scope.askProblems=$scope.askProblems.concat(tmpdata);
                                $scope.canLoadMore=true;
                            }
                            else {
                                $scope.canLoadMore=false;
                            }
                            $scope.pageId += 1;
                        }
                        ,
                        function(response) {
                            $scope.message = "Error: "+response.status + " " + response.statusText;
                            console.log($scope.message);
                        }
                    );
            }
        }

    }])

    .controller('AnswerProblemsController', ['$scope', 'answerProblemsFactory',function($scope,answerProblemsFactory) {
        $scope.pageSize=2;
        $scope.pageId=0;
        $scope.canLoadMore=true;
        $scope.answerProblems=[];
        answerProblemsFactory.getPage($scope.pageSize,$scope.pageId)
            .then(
                function(response) {
                    var tmpdata=response.data.data;
                    if(tmpdata.length > 0) {
                        $scope.answerProblems=tmpdata;
                        $scope.canLoadMore=true;
                    }
                    else {
                        $scope.canLoadMore=false;
                    }
                    $scope.pageId += 1;
                }
                ,
                function(response) {
                    $scope.message = "Error: "+response.status + " " + response.statusText;
                    console.log($scope.message);
                }
            );


        console.log(1 < parseInt($scope.answerProblemsLength));

        $scope.loadPage=function() {
            if ($scope.canLoadMore) {
                answerProblemsFactory.getPage($scope.pageSize,$scope.pageId)
                    .then(
                        function(response) {
                            var tmpdata=response.data.data;
                            if(tmpdata.length > 0) {
                                $scope.answerProblems=$scope.answerProblems.concat(tmpdata);
                                $scope.canLoadMore=true;
                            }
                            else {
                                $scope.canLoadMore=false;
                            }
                            $scope.pageId += 1;
                        }
                        ,
                        function(response) {
                            $scope.message = "Error: "+response.status + " " + response.statusText;
                            console.log($scope.message);
                        }
                    );
            }
        }


    }])
    .controller('AgreeProblemsController', ['$scope', 'agreeProblemsFactory',function($scope,agreeProblemsFactory) {
        $scope.pageSize=2;
        $scope.pageId=0;
        $scope.canLoadMore=true;
        $scope.agreeProblems=[];
        agreeProblemsFactory.getPage($scope.pageSize,$scope.pageId)
            .then(
                function(response) {
                    var tmpdata=response.data.data;
                    if(tmpdata.length > 0) {
                        $scope.agreeProblems=tmpdata;
                        $scope.canLoadMore=true;
                    }
                    else {
                        $scope.canLoadMore=false;
                    }
                    $scope.pageId += 1;
                }
                ,
                function(response) {
                    $scope.message = "Error: "+response.status + " " + response.statusText;
                    console.log($scope.message);
                }
            );


        console.log(1 < parseInt($scope.agreeProblemsLength));

        $scope.loadPage=function() {
            if ($scope.canLoadMore) {
                agreeProblemsFactory.getPage($scope.pageSize,$scope.pageId)
                    .then(
                        function(response) {
                            var tmpdata=response.data.data;
                            if(tmpdata.length > 0) {
                                $scope.agreeProblems=$scope.agreeProblems.concat(tmpdata);
                                $scope.canLoadMore=true;
                            }
                            else {
                                $scope.canLoadMore=false;
                            }
                            $scope.pageId += 1;
                        }
                        ,
                        function(response) {
                            $scope.message = "Error: "+response.status + " " + response.statusText;
                            console.log($scope.message);
                        }
                    );
            }
        }


    }])

;