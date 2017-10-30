<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $easyCategory = \App\QuestionGroup::create([
            'name' => 'Makkelijk'
        ]);

        $hardCategory = \App\QuestionGroup::create([
            'name' => 'Moeilijk'
        ]);


        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Van wanneer tot wanneer was de 2e wereldoorlog?",
            'answer_1' => "1940 - 1945",
            'answer_2' => '1945 - 1950',
            'answer_3' => '1930 - 1935',
            'answer_4' => '1940 - 1945',
            'correct_answer' => 1,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wanneer is de koning jarig?",
            'answer_1' => "28 April",
            'answer_2' => '27 Juni',
            'answer_3' => '27 April',
            'answer_4' => '30 April',
            'correct_answer' => 3,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Uit hoeveel provincies bestaat Nederland?",
            'answer_1' => "10",
            'answer_2' => '5',
            'answer_3' => '11',
            'answer_4' => '12',
            'correct_answer' => 4,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Noem de provincies van nederland",
            'answer_1' => "",
            'answer_2' => '',
            'answer_3' => '',
            'answer_4' => '',
            'correct_answer' => null,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wat is de oorsprong van jenever?",
            'answer_1' => "Belgie",
            'answer_2' => 'Nederland',
            'answer_3' => 'Duitsland',
            'answer_4' => 'Rusland',
            'correct_answer' => 2,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wanneer is het homohuwelijk gelegaliseerd?",
            'answer_1' => "2002",
            'answer_2' => '1990',
            'answer_3' => '2000',
            'answer_4' => '2001',
            'correct_answer' => 4,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wat is de hoofdstad van Nederland?",
            'answer_1' => "Rotterdam",
            'answer_2' => 'Den Haag',
            'answer_3' => 'Amsterdam',
            'answer_4' => 'Gouda',
            'correct_answer' => 3,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Welke kleur staat voor het koningshuis?",
            'answer_1' => "Oranje",
            'answer_2' => 'Blauw',
            'answer_3' => 'Rood',
            'answer_4' => 'Wit',
            'correct_answer' => 1,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Welk vervoermiddel wordt in Nederland veel gebruikt vergeleken met andere europese landen?",
            'answer_1' => 'Scooter',
            'answer_2' => 'Fiets',
            'answer_3' => 'Auto',
            'answer_4' => 'Motor',
            'correct_answer' => 2,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wanneer is de nationale herdenkingsdag?",
            'answer_1' => "5 Mei",
            'answer_2' => '4 Mei',
            'answer_3' => '4 Juni',
            'answer_4' => '30 April',
            'correct_answer' => 2,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Door welk geloof is Nederland sterk beïnvloed?",
            'answer_1' => "Moslim",
            'answer_2' => 'Jodendom',
            'answer_3' => 'Hindoeïsme',
            'answer_4' => 'Christendom',
            'correct_answer' => 4,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Hoe wordt oud en nieuw in Nederland gevierd?",
            'answer_1' => "Met cadeautjes",
            'answer_2' => 'Met gezang',
            'answer_3' => 'Met vuurwerk',
            'answer_4' => 'Met bloemen',
            'correct_answer' => 3,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Hoeveel inwoners telt Nederland nu ongeveer?",
            'answer_1' => "12 miljoen",
            'answer_2' => '18 miljoen',
            'answer_3' => '16 miljoen',
            'answer_4' => '17 miljoen',
            'correct_answer' => 4,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wie is de moeder van koning Willem Alexander?",
            'answer_1' => "Juliana",
            'answer_2' => 'Beatrix',
            'answer_3' => 'Wilhelmina',
            'answer_4' => 'Emma',
            'correct_answer' => 2,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Waarin rijdt de koning/lonining op prinjesdag?",
            'answer_1' => "Gouden koets",
            'answer_2' => 'Zilveren koets',
            'answer_3' => 'Glazen koets',
            'answer_4' => 'Berline koets',
            'correct_answer' => 1,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Hoeveel paleizen bezit de koninklijke familie?",
            'answer_1' => "5",
            'answer_2' => '8',
            'answer_3' => '4',
            'answer_4' => '2',
            'correct_answer' => 1,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Uit welke kleuren bestaan de nederlandse vlag en welke volgorde?",
            'answer_1' => "",
            'answer_2' => '',
            'answer_3' => '',
            'answer_4' => '',
            'correct_answer' => null,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "In welke stad bevindt zich het Anne Frank huis",
            'answer_1' => "Rotterdam",
            'answer_2' => 'Vlissingen',
            'answer_3' => 'Wilhelmina',
            'answer_4' => 'Amsterdam',
            'correct_answer' => 4,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wat is typisch nederlands om te doen na het behalen van een examen?",
            'answer_1' => "Vlag buiten hangen",
            'answer_2' => 'Olibollen eten',
            'answer_3' => 'Tas aan de vlag hangen',
            'answer_4' => 'Zingen',
            'correct_answer' => 1,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);



        \App\Question::create([
            'question_group_id' => $easyCategory->id,
            'question' => "Wat trakteren Nederlanders bij de geboorte van een kind?",
            'answer_1' => "Beschuit met hagelslag",
            'answer_2' => 'Beshuit met muisjes',
            'answer_3' => 'Koek',
            'answer_4' => 'Snoep',
            'correct_answer' => 2,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Wanneer was Rotterdam getroffen door bombardementen?",
            'answer_1' => "14 mei 1943",
            'answer_2' => '14 mei 1940',
            'answer_3' => '13 mei 1940',
            'answer_4' => '5 mei 1940',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Wat zijn de 2 officiële talen van Nederland?",
            'answer_1' => "Nederlands en Engels",
            'answer_2' => 'Nederlands en Frans',
            'answer_3' => 'Nederlands en Spaans',
            'answer_4' => 'Nederlands en Fries ',
            'correct_answer' => 4,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Wat is het laagste punt van Nederland?",
            'answer_1' => "Rotterdam",
            'answer_2' => 'Amsterdam',
            'answer_3' => 'Nieuwerkerk a/d IJssel',
            'answer_4' => 'Groningen ',
            'correct_answer' => 3,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Wanneer is konining Beatrix afgetreden?",
            'answer_1' => "30 april 2013",
            'answer_2' => '30 april 2014',
            'answer_3' => '30 april 2012',
            'answer_4' => '30 april 2012',
            'correct_answer' => 1,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Wanneer is de KLM opgericht?",
            'answer_1' => "1921",
            'answer_2' => '1919',
            'answer_3' => '1920',
            'answer_4' => '1900',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Hoeveel officiële feestdagen telt Nederland?",
            'answer_1' => "6",
            'answer_2' => '7',
            'answer_3' => '4',
            'answer_4' => '8 ',
            'correct_answer' => 4,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "In welke stad is de meeste musea?",
            'answer_1' => "Leiden",
            'answer_2' => 'Amsterdam',
            'answer_3' => 'Groningen',
            'answer_4' => 'Utrecht',
            'correct_answer' => 1,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Hoe wordt de Nederlandse vlag ook wel genoemd?",
            'answer_1' => "De vlag van de lagen landen",
            'answer_2' => 'De nationale kleur',
            'answer_3' => 'De nationale driekleur',
            'answer_4' => 'De vlag van de hollanders',
            'correct_answer' => 3,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Wat is het hoogste punt van Nederland?",
            'answer_1' => "Maastricht",
            'answer_2' => 'Vaalseberg',
            'answer_3' => 'Heerlen',
            'answer_4' => 'Geleen',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Hoeveel meter boven de zeespiegel ligt het hoogste punt van Nederland?",
            'answer_1' => "300 meter",
            'answer_2' => '323 meter',
            'answer_3' => '320 meter',
            'answer_4' => '250 meter',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Waar werden vroeger de windmolens voornamelijk voor gebruikt?",
            'answer_1' => "Om water te pompen",
            'answer_2' => 'Om stroom op te wekken',
            'answer_3' => 'Om graan te malen',
            'answer_4' => 'Om te bepalen hoe hard het waait',
            'correct_answer' => 1,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Welke kleuren was de nederlandse vlag eerst?",
            'answer_1' => "Oranje, wit en donkerblauw",
            'answer_2' => 'Oranje, wit en blauw',
            'answer_3' => 'Rood, wit en donkerblauw',
            'answer_4' => 'Oranje, rood en blauw',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Wie heeft Rood, wit en blauw de officiële vlag gemaakt?",
            'answer_1' => "Konining Beatrix",
            'answer_2' => 'Koning Willem 2',
            'answer_3' => 'Koning Willem 1',
            'answer_4' => 'Konining Wilhemina',
            'correct_answer' => 4,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Waar komen tulpen oorspronkelijk vandaan?",
            'answer_1' => "Marokko",
            'answer_2' => 'Turkije',
            'answer_3' => 'Duitsland',
            'answer_4' => 'Luxemburg',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Nederland is het enigste land dat het ... feest viert",
            'answer_1' => "Pasen",
            'answer_2' => 'Kers',
            'answer_3' => 'Sinterklaas',
            'answer_4' => 'Valentijnsdag',
            'correct_answer' => 1,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Hoeveel procent van het Nederlandse oppervlakte bestaat uit water?",
            'answer_1' => "30%",
            'answer_2' => '18%',
            'answer_3' => '25%',
            'answer_4' => '34%',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_group_id' => $hardCategory->id,
            'question' => "Waar is de eerste metrolijn van Nederland geopend?",
            'answer_1' => "Amsterdam",
            'answer_2' => 'Den Haag',
            'answer_3' => 'Rotterdam',
            'answer_4' => 'Delft',
            'correct_answer' => 3,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);



    }
}
