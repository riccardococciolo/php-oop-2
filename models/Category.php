<?php
class Category {
    private $name;
    private $icon;

    public function __construct($_icon, $_name) {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function setIcon($_icon) {
        $this->icon = $_icon;
    }

    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }
}
?>