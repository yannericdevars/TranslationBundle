<?php

namespace Megalo\TranslationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($lang = 'fr') {
        $translations = $this->get('megalo_translation')->translation($lang);

        return $this->render
                        ('MegaloTranslationBundle:Default:index.html.twig', array(
                    'lang' => $lang,
                    'translation' => $translations
                        )
        );
    }

}
