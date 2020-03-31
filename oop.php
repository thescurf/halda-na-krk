<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Vrzoň_Vojtěch{

    protected $napeti_Vrzoň_Vojtěch;
    //nastavení napeti
    public function setNapeti_Vrzoň_Vojtěch($napeti_Vrzoň_Vojtěch){
        $this->napeti_Vrzoň_Vojtěch = $napeti_Vrzoň_Vojtěch;
    }
    //precteni napeti
    public function getNapeti_Vrzoň_Vojtěch() {
        return $this-> napeti_VrzoŇ_Vojtěch;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Vrzoň_Vojtěch extends ustredny_Vrzoň_Vojtěch{
   public $Napeti_Vrzoň_Vojtěch= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
interface iustredna_Vrzoň_Vojtěch extends ustredny_Vrzoň_Vojtěch{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Vrzoň_Vojtěch);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Vrzoň_Vojtěch::TYPE);
 var_dump ($Napeti_Vrzoň_Vojtěch);
?>
