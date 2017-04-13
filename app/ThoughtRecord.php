<?php

namespace CMSilex\ThoughtRecord;

use CMSilex\Components\CMSEntity;
use CMSilex\ThoughtRecord\Entities\Record;
use CMSilex\ThoughtRecord\Forms\Types\RecordType;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Api\BootableProviderInterface;
use Silex\Application;

class ThoughtRecord implements ServiceProviderInterface, BootableProviderInterface
{
    public function register(Container $container)
    {
        $container->extend('orm.paths', function ($paths) {
            $paths = array_merge($paths, [
                __DIR__ . "/Entities"
            ]);
            return $paths;
        });
    }

    public function boot(Application $app)
    {
        $thoughtEntity = new CMSEntity(Record::class, RecordType::class);
        $thoughtEntity->setDefaultPageLimit(100);
        $thoughtEntity->addColumn('Where were you?', 'where');
        $thoughtEntity->addColumn('Emotion or Feeling', 'emotionOrFeeling');
        $thoughtEntity->addColumn('Strength of Emotion or Feeling', 'strengthOfEmotionOrFeeling');
        $thoughtEntity->addColumn('Evidence that supports the thought', 'supportingEvidence');
        $thoughtEntity->addColumn('Evidence that does not support the thought', 'unsupportingEvidence');
        $thoughtEntity->addColumn('Alternative Thought', 'alternativeThought');
        $thoughtEntity->addColumn('Alternative Emotion or Feeling', 'alternativeEmotionOrFeeling');
        $thoughtEntity->addColumn('Strength of Alternative Emotion or Feeling', 'strengthOfAlternativeEmotionOrFeeling');
        $thoughtEntity->addColumn('Time of day', function (Record $record) {
            return $record->getTimeOfDay()->format('Y-m-d H:i:s');
        });

        $app['cms']->addCMSEntity($thoughtEntity);
    }
}