<?php
/** no direct access **/
defined('_WPLEXEC') or die('Restricted access');

/** Define Tabs **/
$tabs = array();
$tabs['tabs'] = array();

$content = '<h3>'.__('Add/Edit Listing', 'wpl').'</h3><p>'.__("With this menu you can add a new listing or modify an existing listing.", 'wpl').'</p>';
$tabs['tabs'][] = array('id'=>'wpl_contextual_help_tab_int', 'content'=>$content, 'title'=>__('Introduction', 'wpl'));

if(wpl_users::is_administrator())
{
    $articles  = '';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/556/" target="_blank">'.__("How do I upload multiple videos for a listing and have them appear in a single property page?", 'wpl').'</a></li>';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/587/" target="_blank">'.__("How do I change the maximum file upload size for images, videos and attachments?", 'wpl').'</a></li>';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/528/" target="_blank">'.__('What Does the "Location Data is Mandatory" Error Mean in Add/Edit Listing Menu?', 'wpl').'</a></li>';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/538/" target="_blank">'.__("Bedrooms, Rooms, Price, type etc. is not showing on Listing Wizard or Search Widget!", 'wpl').'</a></li>';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/539/" target="_blank">'.__("How do I create property type and listing type specific fields in WPL?", 'wpl').'</a></li>';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/564/" target="_blank">'.__("How do I adjust the property Geo point?", 'wpl').'</a></li>';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/734/" target="_blank">'.__("How to receive a notification when a new listing submitted by an agent?", 'wpl').'</a></li>';
    $articles .= '<li><a href="https://support.realtyna.com/index.php?/Default/Knowledgebase/Article/View/649/" target="_blank">'.__("How to hide property address?", 'wpl').'</a></li>';

    $content = '<h3>'.__('Related KB Articles', 'wpl').'</h3><p>'.__('Here you will find KB articles with information related to this page. You can come back to this section to find an answer to any questions that may come up.', 'wpl').'</p><p><ul>'.$articles.'</ul></p>';
    $tabs['tabs'][] = array('id'=>'wpl_contextual_help_tab_kb', 'content'=>$content, 'title'=>__('KB Articles', 'wpl'));
}

return $tabs;