<?php

	class mediaManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getList($intLimit=NULL){
            $strQuery = "SELECT * FROM Medias";
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();
            if($intLimit!=NULL){
                $strQuery .=   " LIMIT " . $intLimit;
            }
            return $arrResult;
		}
		
		public function get($intId){
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
		}		
	}
	