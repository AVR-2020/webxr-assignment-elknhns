<?php

class Scores extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $score;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("webvr-goalkeeper");
        $this->setSource("scores");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Scores[]|Scores|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Scores|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null): ?Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
