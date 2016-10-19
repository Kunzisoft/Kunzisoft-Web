
<?php
require "vendor/autoload.php";

use Gettext\Translations;
use Gettext\GettextTranslator;

class Language{

  static function getPreferedLanguage() {
    return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //return "fr";
  }

  static function buildMoFile() {
    //import from a .po file:
    $translations = Translations::fromPoFile('locales/fr_FR.po');

    //export to a .mo file
    $translations->toMoFile('Locale/fr_FR/LC_MESSAGES/messages.mo');
  }

  static function loadTranslation($iso6391) {
    //Create the translator instance
    $t = new GettextTranslator();

    switch ($iso6391) {
      case 'fr':
        $language = "fr_FR";
        break;
    
      default:
        $language = "en_US";
        break;
    }

    //Set the language and load the domain
    $t->setLanguage($language);
    $t->loadDomain('messages', 'Locale');
  }

  static function getAvailableLanguages() {
    return ["fr", "en"];
  }

}
?>
