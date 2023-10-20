<?php
class home extends config
{
    public $vistasCont;
    public function index()
    {
        $this->vistasCont->getView($this, "index");
    }
}
?>