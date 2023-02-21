<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert the data in the array into the questions table
        Question::insert([
            [
                'question' => 'Votre adresse mail',
                'question_type' => 'B',
                'answer_choice' => null,
                'survey_id' => 1
            ],
            [
                'question' => 'Votre âge',
                'question_type' => 'B',
                'answer_choice' => null,
                'survey_id' => 1
            ],
            [
                'question' => 'Votre sexe',
                'question_type' => 'A',
                'answer_choice' => 'Homme, Femme, Préfère de ne pas répondre',
                'survey_id' => 1
            ],
            [
                'question' => 'Nombre de personnes dans votre foyer (adultes & enfants)',
                'question_type' => 'C',
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Votre profession',
                'question_type' => 'B',
                'answer_choice' => null,
                'survey_id' => 1
            ],
            [
                'question' => 'Quel marque de casque VR utilisez-vous ?',
                'question_type' => 'A',
                'answer_choice' => 'Oculus Rift/s, HTC Vive, Windows Mixed Reality, PSVR',
                'survey_id' => 1
            ],
            [
                'question' => 'Sur quel magasin d’application achetez-vous des contenus VR ?',
                'question_type' => 'A',
                'answer_choice' => 'SteamVR, Occulus store, Viveport, Playstation VR, Google Play, Windows store',
                'survey_id' => 1
            ],
            [
                'question' => 'Quel casque envisagez-vous d’acheter dans un futur proche  ?',
                'question_type' => 'A',
                'answer_choice' => 'Occulus Quest, Occulus Go, HTC Vive Pro, Autre, Aucun',
                'survey_id' => 1
            ],
            [
                'question' => 'Au sein de votre foyer, combien de personnes utilisent votre casque VR pour regarder Bigscreen ?',
                'question_type' => 'C',
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Vous utilisez principalement Bigscreen pour :',
                'question_type' => 'A',
                'answer_choice' => 'regarder des émissions TV en direct, regarder des films, jouer en solo, jouer en team',
                'survey_id' => 1
            ],
            [
                'question' => 'Combien donnez-vous de points pour la qualité de l’image sur Bigscreen ?',
                'question_type' => 'C',
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Combien donnez-vous de points pour le confort d’utilisation de l’interface Bigscreen ?',
                'question_type' => 'C',
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Combien donnez-vous de points pour la connexion réseau de Bigscreen ?',
                'question_type' => 'C',
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Combien donnez-vous de points pour la qualité des graphismes 3D dans Bigscreen ?',
                'question_type' => 'C',
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Combien donnez-vous de points pour la qualité audio dans Bigscreen ?',
                'question_type' => 'C',
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Aimeriez-vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
                'question_type' => 'A',
                'answer_choice' => 'Oui, Non',
                'survey_id' => 1
            ],
            [
                'question' => 'Aimeriez-vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
                'question_type' => 'A',
                'answer_choice' => 'Oui, Non',
                'survey_id' => 1
            ],
            [
                'question' => 'Aimeriez-vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
                'question_type' => 'C', // wrong type? should be a - yes or no question
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Aimeriez-vous jouer à des jeux exclusifs sur votre Bigscreen ?',
                'question_type' => 'C', // wrong type? should be a - yes or no question
                'answer_choice' => ' 1, 2, 3, 4, 5',
                'survey_id' => 1
            ],
            [
                'question' => 'Quelle nouvelle fonctionnalité devrait exister sur Bigscreen ?',
                'question_type' => 'B',
                'answer_choice' => null,
                'survey_id' => 1
            ]
        ]);
    }
}
