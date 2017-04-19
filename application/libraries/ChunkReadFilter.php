<?php

if(!defined('BASEPATH')) exit("No direct script access allowed");

require_once APPPATH . "/third_party/Classes/PHPExcel.php";
/**
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 09/11/2016
 * Time: 9:42 PM
 */
class ChunkReadFilter implements PHPExcel_Reader_IReadFilter{
    private $_startRow = 0;
    private $_endRow = 0;

    public function setRows($startRow, $chunkSize){
        $this->_startRow = $startRow;
        $this->_endRow = $startRow + $chunkSize;
    }

    public function startRow(){
        return $this->_startRow;
    }

    public function endRow(){
        return $this->_endRow;
    }

    public function readCell($column, $row, $worksheetName = ''){
        if(($row == 1) || ($row >= $this->_startRow && $row < $this->_endRow )){
            return true;
        }
        return false;
    }
}