
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var correctAnswer;

$(document).foundation();

$(document).ready( function() {

    hideQuestionElements();


    $('.category-select').click( function () {
        hideQuestionElements();
        var categorySelect = $(this).data('categoryid');

        axios.get('/question/get/' + categorySelect, {
        })
            .then(function (response) {
                console.log(response.data);
                setQuestion(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
    });

    $('.button.answer').click( function () {
        var givenAnswer = $(this).data('answer');
        if(givenAnswer == correctAnswer)
        {
            $('.conclusion').text('Je hebt de vraag goed beantwoord!');
            $('.conclusion').fadeIn();
            $('.punishment').hide();
            $('.correct-answer').fadeIn();
        } else {
            $('.conclusion').text('Je hebt de vraag fout beantwoord!');
            $('.conclusion').fadeIn();
            $('.correct-answer').hide();
            $('.punishment').fadeIn();
        }
    });


});

function setQuestion(questionData)
{
    var question = questionData.question;
    var answers = questionData.answers;
    correctAnswer = questionData.correctAnswer;
    var goodAnswerCondition = questionData.correctAnswerCondition;
    var badAnswerCondition = questionData.badAnswerCondition;

    $('.question').text(question);
    $('.correct-answer').text(goodAnswerCondition);
    $('.punishment').text(badAnswerCondition);

    if(questionData.correctAnswer)
    {
        $('.button.answer').each(function(index) {
            $(this).text(answers[index +1]);
        });
        $('.button-group').fadeIn();
    }
    else {
        $('.conclusion').text('Punten voor de vraag');
        $('.conclusion').show();
        $('.correct-answer').fadeIn();
        $('.punishment').fadeIn();
    }

    $('.question').fadeIn();


}

function hideQuestionElements()
{
    $('.conclusion').hide();
    $('.correct-answer').hide();
    $('.punishment').hide();
    $('.button-group').hide();
    $('.question').hide();
}