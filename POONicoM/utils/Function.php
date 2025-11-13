<?php
function findUserDni(User $users, $dni) {
    foreach ($users as $user) {
        if ($user->getDni() === $dni) {
            return $user;
        }
    }
    return null;
}
function findMaterialId(Material $materials, $id) {
    foreach ($materials as $material) {
        if ($material->getId() === $id){
            return $material;
        } 
    }
    return null;
}