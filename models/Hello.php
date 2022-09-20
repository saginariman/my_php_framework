<?php
namespace Models;
use \Core\Model;

class Hello extends Model {
    public function getById($id) {
        return $this->findOne("SELECT * FROM `news` WHERE `id` = '$id'");
    }

    public function getAll() {
        return $this->findMany("SELECT * FROM `news`");
    }
}