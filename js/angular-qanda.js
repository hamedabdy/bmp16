var app = angular.module('bmpinst', ['ngSanitize']);

app.controller('fetchQuestions', function($scope, $http, $attrs, $element) {
    $http.get('getQuestions.php')
    .success(function(data, status, headers, config) {
        // $scope.response = JSON.stringify(data) + '<br/>' + status + '<br/>';
        $scope.rows = data;
    });
    $scope.thumbsUp = function (){
        spanScore = $( "#score" );
        var score = spanScore.html();
        spanScore.html(++score);
    };
});

app.controller('formCtrl', function($scope, $http){
    $scope.postQuestion = function (){
        $http.post('insertQuestion.php', {"name" : $scope.name, "question" : $scope.question})
        .success(function(data, status, headers, config){
            // $scope.response = data + '<br/>' + status + '<br/>';
            if(status == 200) $scope.response = '<p>Question submitted</p>';
        });
    };
});

app.directive( 'editInPlace', function( $http ){
    return {
        restrict: 'E',
        scope: { value: '='},
        template: '<span ng-click="edit()" ng-bind="value"></span><input name="answer" ng-model="value"></input>',
        link: function ( $scope, element, attrs ) {
            var inputElement = angular.element( element.children()[1] );
            element.addClass( 'edit-in-place' );
            $scope.editing = false;
            $scope.edit = function () {
                $scope.editing = true;
                element.addClass( 'active' );
                inputElement[0].focus();
            };
            inputElement.on( 'blur', function() {
                $scope.editing = false;
                var qid = element.parent().parent().data('question-id');
                inputElement.change( function (){
                    var putReq = $http.put('put-answer.php', {"id" : qid, "answer" : inputElement.val()});
                    putReq.success(function(data, status, headers, config){ 
                        console.log("PUT ", status, "\n", data);
                    });
                });
                element.removeClass( 'active' );
            });
        }
    };
});