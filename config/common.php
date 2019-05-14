<?php

return [
	'translator' => [
        'translations' => [
            'Adminator' => [
                '__class' => \yii\i18n\PhpMessageSource::class,
                'sourceLanguage' => $params['translator.sourceLanguage'],
                'basePath' => $params['translator.basePath'],
            ],
        ],
    ],
];
