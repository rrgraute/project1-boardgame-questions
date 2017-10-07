
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
$(document).foundation();

$(document).ready( function() {

    var questionTitle = $('.question');




    $('.category-select').click( function () {


        var categorySelect = $(this).data('categoryid');

        console.log(categorySelect);

        axios.get('/question/get/' + categorySelect, {
        })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });



    });


});