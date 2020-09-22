<?php
/*
Plugin Name: Bouton Call To Action
Plugin URI: https://mon-siteweb.com/
Description: Utilisez ce bouton pour mettre en avant notre produit phare grâce à ce code : [button url="https://mathildefonitcheff.fr/FeelFree/velos-de-ville/vtc/vintags-coming/"] Voir le produit phare [/button] à placer dans un shortcode.
Author: Mathilde Fonitcheff
Version: 1.0
Author URI: https://mathildefonitcheff.fr/
*/

function button($atts, $content = null){
extract(shortcode_atts(array(
'url' => '',
'text' => ''
), $atts));
return '<div class="cta maw-w-base m-auto" style="max-height : 100%;
max-width: 100%;
text-align:center;
display: flex;
justify-content: space-around;
padding: 1rem;">
<div
style="
max-width: 30rem;
max-height: 10rem;
text-align: left;
"
>'.$text.'</div>
<button
style="
max-width: 20rem;
max-height: 5rem;">
<a style="color: #fff;" href="'.$url.'">' .do_shortcode($content) . '</a>
</button>
</div>';
}
add_shortcode('button', 'button');


