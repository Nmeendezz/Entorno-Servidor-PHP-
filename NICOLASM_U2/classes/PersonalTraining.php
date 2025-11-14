<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/NICOLASM_U2/classes/Gym.php";
final class PersonalTraining extends Gym
{
    public function __construct(
        $code,
        $name,
        $duration,
        private bool $type
    ) {
        parent::__construct($code, $name, $duration);
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    // Si el tipo es verdadero sera de fuerza, de lo contrario sera de cardio
    public function trainingType()
    {
        if ($this->getType()) {
            return "Fuerza";
        }
        return "Cardio";
    }

    public function __tostring()
    {
        $ret = parent::__tostring();
        $ret .= "<br>- Tipo de entrenamiento: " . $this->trainingType() ."</ul></li>";
        return $ret;
    }
}