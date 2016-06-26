<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 22.06.2016
 * Time: 19:48
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Footer classes/SimpleFooter.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Footer classes/ComplexFooter.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Header classes/SimpleHeader.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Header classes/ComplexHeader.php');
class Page
{
    private $header;
    private $footer;
    public function __construct($isSimple=true,$isCheckOut=false)
    {
        if($isSimple)
        {
            $this->header=new SimpleHeader($isCheckOut);
            $this->footer=new SimpleFooter();
        }
        else
        {
            $this->header=new ComplexHeader($isCheckOut);
            $this->footer=new ComplexFooter();
        }
    }
    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return mixed
     */
    public function getFooter()
    {
        return $this->footer;
    }
}