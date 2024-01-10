<?php
class gadget extends Product {
    private $type;

    public function __construct($_name, $_price, $_category, $_image, $_type) {
        parent::__construct($_name, $_price, $_category, $_image);
        $this->type = $_type;
    }

    public function getType() {
        return $this->type;
    }
};