<?php
/* Layout for the project "Galacticum"
 * 
 * @author Miguel Gonzalez <miguel-gonzalez@gmx.de>
 * @since 1.0
 * @version 1.0
 * @link http://my-reality.de Website of the author
 * @copyright (c) 2012, Miguel Gonzalez
 */
include_once('PageLayout.php');

class GalacticumLayout extends PageLayout {
    
    function __construct() {
        parent::__construct();
        $this->addStyle('Content');
        $this->addStyle('ProgressBar');
        $this->addStyle('TeamView');
        $this->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
        $this->addScript('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
        $this->addScript('http://dev.my-reality.de/jquery/icebearjs/1.1/jquery.icebearjs.min.js');
    }
    
    
    
    public function setTitle($title) {
        parent::setTitle('Galacticum - ' . $title);
    }
    
    
    /**
     * Template structure for the galacticum website
     */
    protected function generateTemplate($content) {
        
        $links = array(
            array(
                'label' => 'About',
                'href' => 'index.php',
                'class' => 'about'
            ),
            array(
                'label' => 'Patchnotes',
                'href' => '#',
                'class' => 'patchnotes disabled'
            ),
            array(
                'label' => 'Wiki',
                'href' => '#',
                'class' => 'wiki disabled'
            ),
            array(
                'label' => 'Download',
                'href' => '#',
                'class' => 'download disabled'
            )
        );
        
        $result = '<div id="wrapper">
                      <div id="center_container">
                         <div id="banner"></div>                         
                         <div id="main_menu">' . $this->generateMainMenu($links) . '</div>
                         <div id="content">' . $content . '</div>
                         <div id="footer">' . $this->generateFooterMenu() . '</div>
                      </div>
                   </div>';
        return $result;
    }
    
    
    
    private function generateMainMenu($links) {
        
        $result = '<ul>';
        
        foreach ($links as $link) {
            if (isset($link['class']) && !empty($link['class'])) {
                $result .= '<li><a href="' . $link['href'] . '" class="' . $link['class'] . '">' . $link['label'] . '</a></li>';
            } else {
                $result .= '<li><a href="' . $link['href'] . '">' . $link['label'] . '</a></li>';
            }            
        }
        
        $result .= '</ul>';
        return $result;
    }
    
    
    
    private function generateFooterMenu() {
        $links = '<a href="impressum.php">Impressum</a>';
        $links .= '<a href="http://my-reality.de">Dev-Blog</a>';
        return 'Programming and Design by Miguel Gonzalez, &copy; 2013' . $links;
    }
}
?>
