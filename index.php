<?php
/** 
 * Start page
 * 
 * @author Miguel Gonzalez <miguel-gonzalez@gmx.de>
 * @since 1.0
 * @version 1.0
 * @link http://my-reality.de Website of the author
 * @copyright (c) 2012, Miguel Gonzalez
 */

include_once('Core/Core.php');

$description = '<h2>2D space game</h2>';
$description .= '<p>Galacticum is a space game written in Java ('
              . '<a href="http://slick2d.org">Slick2D</a> and '
              . '<a href="http://dev.my-reality.de/chronos">Chronos</a>).
                This game is still under development.</p>';
$description .= 'The following features are planned:';
$description .= '<ul>
                    <li>2D game with fancy pixel graphics</li>
                    <li>Infinite 2D space with generated space backgrounds</li>
                    <li>Random generated enemies, items and regions</li>
                    <li>Many different boss enemies with strong abilities</li>
                    <li>Collect resources to build your own ships and weapons</li>
                    <li>Full generated planets with own research level and resources</li>
                    <li>Single parts of ships like weapons or shields are destroyable</li>
                    <li>Features like leveling, skilling and weapon-building</li>
                 </ul>';

$prototype = '<h2>Prototype</h2>';
$prototype .= '<p>The prototype has reached a playable state. You can see space battles,'
            . ' many different enemies and a full working shield system in the video below.</p>';
$prototype .= '<div align="left"><iframe width="800" height="600" src="https://www.youtube.com/embed/sGOPboD2_CA" 
                     frameborder="0" allowfullscreen></iframe></div>';
$progress = '<h2>Progress</h2>';

$progress .= '<div class="progress"><span class=".cell">Loading progress...</span></div>';


$progress .= "<script type='text/javascript'>
$('.progress').icebearProgress({
    datasource : 'proxy.php?url=https://raw.github.com/MyRealityCoding/galacticum/master/res/meta.json',
    duration : 2500,
    onEnterPhase : function(element) {
        element.find('.caption').animate({
            color: '#eda743'
        }, 650);
    },
    onLeavePhase : function(element) {
        element.find('.caption').animate({
            color : '#fff'
        }, 1000);
    }
});
</script>";

$team = '<h2>Team</h2>';
$teamView = new GalacticumTeam();
$team .= $teamView;

$technologies = '<h2>Used technologies</h2>';
$technologies .= '<ul>';
$technologies .= '<li><a href="http://slick2d.org">Slick2D</a></li>';
$technologies .= '<li><a href="http://dev.my-reality.de/chronos">Chronos</a></li>';
$technologies .= '<li><a href="http://phys2d.cokeandcode.com">Phys2D</a></li>';
$technologies .= '</ul>';

$layout->setTitle('A dark journey');
$layout->addContent($progress);
$layout->addContent($description);
$layout->addContent($prototype);
$layout->addContent($team);
$layout->addContent($technologies);
$layout->render();
?>