<?php

namespace CMSilex\ThoughtRecord\Entities;

use CMSilex\Components\CMSEntity;

/**
 * @Entity
 */
class Record
{

    public function __construct()
    {
        $this->timeOfDay = new \DateTime();
    }

    /** @Column(type="integer") @Id @GeneratedValue */
    protected $id;

    /** @Column(type="datetime") */
    protected $timeOfDay;

    /** @Column(type="text") */
    protected $where;

    /** @Column(type="text") */
    protected $emotionOrFeeling;

    /** @Column(type="integer") */
    protected $strengthOfEmotionOrFeeling;

    /** @Column(type="text") */
    protected $negativeThought;

    /** @Column(type="text") */
    protected $supportingEvidence;

    /** @Column(type="text") */
    protected $unsupportingEvidence;

    /** @Column(type="text") */
    protected $alternativeThought;

    /** @Column(type="text") */
    protected $alternativeEmotionOrFeeling;

    /** @Column(type="integer") */
    protected $strengthOfAlternativeEmotionOrFeeling;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * @param mixed $timeOfDay
     */
    public function setTimeOfDay($timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
    }

    /**
     * @return mixed
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * @param mixed $where
     */
    public function setWhere($where)
    {
        $this->where = $where;
    }

    /**
     * @return mixed
     */
    public function getEmotionOrFeeling()
    {
        return $this->emotionOrFeeling;
    }

    /**
     * @param mixed $emotionOrFeeling
     */
    public function setEmotionOrFeeling($emotionOrFeeling)
    {
        $this->emotionOrFeeling = $emotionOrFeeling;
    }

    /**
     * @return mixed
     */
    public function getStrengthOfEmotionOrFeeling()
    {
        return $this->strengthOfEmotionOrFeeling;
    }

    /**
     * @param mixed $strengthOfEmotionOrFeeling
     */
    public function setStrengthOfEmotionOrFeeling($strengthOfEmotionOrFeeling)
    {
        $this->strengthOfEmotionOrFeeling = $strengthOfEmotionOrFeeling;
    }

    /**
     * @return mixed
     */
    public function getNegativeThought()
    {
        return $this->negativeThought;
    }

    /**
     * @param mixed $negativeThought
     */
    public function setNegativeThought($negativeThought)
    {
        $this->negativeThought = $negativeThought;
    }

    /**
     * @return mixed
     */
    public function getSupportingEvidence()
    {
        return $this->supportingEvidence;
    }

    /**
     * @param mixed $supportingEvidence
     */
    public function setSupportingEvidence($supportingEvidence)
    {
        $this->supportingEvidence = $supportingEvidence;
    }

    /**
     * @return mixed
     */
    public function getUnsupportingEvidence()
    {
        return $this->unsupportingEvidence;
    }

    /**
     * @param mixed $unsupportingEvidence
     */
    public function setUnsupportingEvidence($unsupportingEvidence)
    {
        $this->unsupportingEvidence = $unsupportingEvidence;
    }

    /**
     * @return mixed
     */
    public function getAlternativeThought()
    {
        return $this->alternativeThought;
    }

    /**
     * @param mixed $alternativeThought
     */
    public function setAlternativeThought($alternativeThought)
    {
        $this->alternativeThought = $alternativeThought;
    }

    /**
     * @return mixed
     */
    public function getAlternativeEmotionOrFeeling()
    {
        return $this->alternativeEmotionOrFeeling;
    }

    /**
     * @param mixed $alternativeEmotionOrFeeling
     */
    public function setAlternativeEmotionOrFeeling($alternativeEmotionOrFeeling)
    {
        $this->alternativeEmotionOrFeeling = $alternativeEmotionOrFeeling;
    }

    /**
     * @return mixed
     */
    public function getStrengthOfAlternativeEmotionOrFeeling()
    {
        return $this->strengthOfAlternativeEmotionOrFeeling;
    }

    /**
     * @param mixed $strengthOfAlternativeEmotionOrFeeling
     */
    public function setStrengthOfAlternativeEmotionOrFeeling($strengthOfAlternativeEmotionOrFeeling)
    {
        $this->strengthOfAlternativeEmotionOrFeeling = $strengthOfAlternativeEmotionOrFeeling;
    }
}