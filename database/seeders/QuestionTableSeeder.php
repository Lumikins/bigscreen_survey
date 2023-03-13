<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Answer;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\Type;
use Illuminate\Support\Facades\DB;


class questionTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // creating the questions and attaching the different possible answers

    Question::create([
      'body' => 'Votre adresse mail',
      'type_id' => 2,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    Question::create([
      'body' => 'Votre âge',
      'type_id' => 2,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    $question3 = Question::create([
      'body' => 'Votre sexe',
      'type_id' => 1,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question3_answers = array();
    array_push($question3_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Homme'
    ]));
    array_push($question3_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Femme'
    ]));
    array_push($question3_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Préfère de ne pas répondre'
    ]));
    $question3->questionAnswers()->attach($question3_answers);

    $question4 = Question::create([
      'body' => 'Nombre de personnes dans votre foyer (adultes & enfants)',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $numbered_questions_answers = array();
    array_push($numbered_questions_answers, QuestionAnswer::insertGetId([
      'question_answer' => '1'
    ]));
    array_push($numbered_questions_answers, QuestionAnswer::insertGetId([
      'question_answer' => '2'
    ]));
    array_push($numbered_questions_answers, QuestionAnswer::insertGetId([
      'question_answer' => '3'
    ]));
    array_push($numbered_questions_answers, QuestionAnswer::insertGetId([
      'question_answer' => '4'
    ]));
    array_push($numbered_questions_answers, QuestionAnswer::insertGetId([
      'question_answer' => '5'
    ]));
    $question4->questionAnswers()->attach($numbered_questions_answers);

    Question::create([
      'body' => 'Votre profession',
      'type_id' => 2,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    $question6 = Question::create([
      'body' => 'Quel marque de casque VR utilisez-vous ?',
      'type_id' => 1,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question6_answers = array();
    array_push($question6_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Oculus Rift/s'
    ]));
    array_push($question6_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'HTC Vive'
    ]));
    array_push($question6_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Windows Mixed Reality'
    ]));
    array_push($question6_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'PSVR'
    ]));
    $question6->questionAnswers()->attach($question6_answers);

    $question7 = Question::create([
      'body' => 'Sur quel magasin d’application achetez-vous des contenus VR ?',
      'type_id' => 1,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question7_answers = array();
    array_push($question7_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'SteamVR'
    ]));
    array_push($question7_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Occulus store'
    ]));
    array_push($question7_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Viveport'
    ]));
    array_push($question7_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Playstation VR'
    ]));
    array_push($question7_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Google Play'
    ]));
    array_push($question7_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Windows store'
    ]));
    $question7->questionAnswers()->attach($question7_answers);

    $question8 = Question::create([
      'body' => 'Quel casque envisagez-vous d’acheter dans un futur proche ?',
      'type_id' => 1,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question8_answers = array();
    array_push($question8_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Occulus Quest'
    ]));
    array_push($question8_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Occulus Go'
    ]));
    array_push($question8_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'HTC Vive Pro'
    ]));
    array_push($question8_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Autre'
    ]));
    array_push($question8_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Aucun'
    ]));
    $question8->questionAnswers()->attach($question8_answers);

    $question9 = Question::create([
      'body' => 'Au sein de votre foyer, combien de personnes utilisent votre casque VR pour regarder Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question9->questionAnswers()->attach($numbered_questions_answers);

    $question10 = Question::create([
      'body' => 'Vous utilisez principalement Bigscreen pour :',
      'type_id' => 1,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question10_answers = array();
    array_push($question10_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Regarder des émissions TV en direct'
    ]));
    array_push($question10_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Regarder des films'
    ]));
    array_push($question10_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Jouer en solo'
    ]));
    array_push($question10_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Jouer en team'
    ]));
    $question10->questionAnswers()->attach($question10_answers);

    $question11 = Question::create([
      'body' => 'Combien donnez-vous de points pour la qualité de l’image sur Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question11->questionAnswers()->attach($numbered_questions_answers);

    $question12 = Question::create([
      'body' => 'Combien donnez-vous de points pour le confort d’utilisation de l’interface Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question12->questionAnswers()->attach($numbered_questions_answers);

    $question13 = Question::create([
      'body' => 'Combien donnez-vous de points pour la connexion réseau de Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question13->questionAnswers()->attach($numbered_questions_answers);

    $question14 = Question::create([
      'body' => 'Combien donnez-vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question14->questionAnswers()->attach($numbered_questions_answers);

    $question15 = Question::create([
      'body' => 'Combien donnez-vous de points pour la qualité audio dans Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question15->questionAnswers()->attach($numbered_questions_answers);

    $question16 = Question::create([
      'body' => 'Aimeriez-vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $yes_no_questions_answers = array();
    array_push($yes_no_questions_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Oui'
    ]));
    array_push($yes_no_questions_answers, QuestionAnswer::insertGetId([
      'question_answer' => 'Non'
    ]));
    $question16->questionAnswers()->attach($yes_no_questions_answers);

    $question17 = Question::create([
      'body' => 'Aimeriez-vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question17->questionAnswers()->attach($yes_no_questions_answers);

    $question18 = Question::create([
      'body' => 'Aimeriez-vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question18->questionAnswers()->attach($yes_no_questions_answers);

    $question19 = Question::create([
      'body' => 'Aimeriez-vous jouer à des jeux exclusifs sur votre Bigscreen ?',
      'type_id' => 3,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
    $question19->questionAnswers()->attach($yes_no_questions_answers);

    Question::create([
      'body' => 'Quelle nouvelle fonctionnalité devrait exister sur Bigscreen ?',
      'type_id' => 2,
      'survey_id' => 1,
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
