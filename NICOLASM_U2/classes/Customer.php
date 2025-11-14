<?php

class Customer
{
    public function __construct(
        private string $id,
        private string $name,
        private array $activities = []
    ) {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

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

    public function getActivities()
    {
        return $this->activities;
    }

    public function setActivities($activities)
    {
        $this->activities = $activities;

        return $this;
    }

    public function addActivitie(Gym $activitieToAdd){
        foreach($this->activities as $activitie){
            if($activitie === $activitieToAdd){
                return null;
            }
        }
        $this->activities[] = $activitieToAdd;
    }

    public function findActiviteCode($code){
        foreach($this->activities as $activitie){
            if($activitie->getCode() === $code){
                return "SÍ está inscrito a la actividad con el codigo $code";
            }
        }
        return "NO está inscrito a la actividad con el codigo $code";
    }

    public function __tostring(){
        return "- ID: " . $this->getId() .
        "<br>- Nombre completo: " . $this->getName() . 
        "<br>- Actividades inscrito: " . implode("",$this->getActivities());
    }
}