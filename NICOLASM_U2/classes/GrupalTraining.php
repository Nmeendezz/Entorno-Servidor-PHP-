<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/NICOLASM_U2/classes/Gym.php";

final class GrupalTraining extends Gym
{
    public function __construct(
        $code,
        $name,
        $duration,
        private string $teacherName
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

    public function getTeacherName()
    {
        return $this->teacherName;
    }

    public function setTeacherName($teacherName)
    {
        $this->teacherName = $teacherName;

        return $this;
    }

    public function __tostring(){
        $ret = parent::__tostring();
        $ret .= "<br>- Nombre del profesor: " . $this->getTeacherName() . "</ul></li>";
        return $ret;
    }
}