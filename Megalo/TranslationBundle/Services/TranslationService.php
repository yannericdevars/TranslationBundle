<?php

/**
 * @author Yann-Eric <yann-eric@live.fr>
 */

namespace Megalo\TranslationBundle\Services;

/**
 * Constructeur de la classe
 */
class TranslationService
{
    /**
     * Constructeur de la classe
     */
    public function __construct()
    {
    }
    
    public function translation($lang = 'fr')
    {
        
        $translations = array();
        
        $valToReturn = null;
        switch ($lang) {
            case 'fr':
                $valToReturn = $this->getFrench();
                break;
            case 'jpn':
                 $valToReturn = $this->getJaponese();
                break;
             case 'en':
                 $valToReturn = $this->getEnglish();
                break;
        }
        
        $stringSaved = json_decode($valToReturn);
        
        foreach ($stringSaved->sectors as $trans) {
            
            $translations[$trans->token] = $trans->translation; 
        }
            
        return $translations;
    }
    
    private function getFrench() 
    {
        return '{"success":true,"locale":"fr_FR","sectors":[{"id":1,"token":"pants","translation":"pantalons","translated":false},{"id":3,"token":"shirts","translation":"chemises","translated":false},{"id":4,"token":"ski","translation":"ski","translated":false},{"id":5,"token":"shoes","translation":"chaussures","translated":false}]}';
    }
    
    private function getJaponese() 
    {
        return '{"success":true,"locale":"jpn_JPN","sectors":[{"id":1,"token":"pants","translation":"sdvqdsvzvze","translated":false},{"id":3,"token":"shirts","translation":"sdvszdzezeez","translated":false},{"id":4,"token":"ski","translation":"sdvzeveaze","translated":false},{"id":5,"token":"shoes","translation":"vvezezvezezazevv","translated":false}]}';
    }
    
    private function getEnglish()
    {
        return '{"success":true,"locale":"en_EN","sectors":[{"id":1,"token":"pants","translation":"pants","translated":false},{"id":3,"token":"shirts","translation":"shirts","translated":false},{"id":4,"token":"ski","translation":"ski","translated":false},{"id":5,"token":"shoes","translation":"shoes","translated":false}]}';
    }

}
