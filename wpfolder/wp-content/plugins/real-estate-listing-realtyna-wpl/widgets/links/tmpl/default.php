<?php   
defined('_WPLEXEC') or die('Restricted access');

$registericon = isset($this->instance['registericon']) ? $this->instance['registericon'] : 'wpl-font-user';
$loginicon = isset($this->instance['loginicon']) ? $this->instance['loginicon'] : 'wpl-font-login';
$forgeticon = isset($this->instance['forgeticon']) ? $this->instance['forgeticon'] : 'wpl-font-forget-password';
$dashboardicon = isset($this->instance['dashboardicon']) ? $this->instance['dashboardicon'] : 'wpl-font-dashboard';
$logouticon = isset($this->instance['logouticon']) ? $this->instance['logouticon'] : 'wpl-font-logout';
$compareicon = isset($this->instance['compareicon']) ? $this->instance['compareicon'] : 'wpl-font-compare2';
$savesearchicon = isset($this->instance['savesearchicon']) ? $this->instance['savesearchicon'] : 'wpl-font-save-search';
$favoriteicon = isset($this->instance['favoriteicon']) ? $this->instance['favoriteicon'] : 'wpl-font-favorite';
?>
<div class="wpl_links_widget_container <?php echo $this->css_class; ?>">
    <?php
        $loginstr = '<div class="wpl-login-box"><ul>';
        if(!is_user_logged_in())
        {
            if($this->login_link) $loginstr .= '<li><a href="'.wp_login_url().'"><i class="'.$loginicon.'" aria-hidden="true"></i> '.__('Login to Account', 'wpl').'</a></li>';
            if($this->forget_password_link) $loginstr .= '<li><a href="'.wp_lostpassword_url().'"><i class="'.$forgeticon.'" aria-hidden="true"></i> '.__('Forget Password', 'wpl').'</a></li>';
            if(get_option('users_can_register') && $this->register_link) $loginstr .= '<li><a href="'.wp_registration_url().'"><i class="'.$registericon.'" aria-hidden="true"></i> '.__('Register', 'wpl').'</a></li>';
        }
        else
        {
            if($this->login_link) $loginstr .= '<li><a href="'.wp_logout_url().'"><i class="'.$logouticon.'" aria-hidden="true"></i> '.__('Logout', 'wpl').'</a></li>';

            if(wpl_global::check_addon('membership') and $this->dashboard_link)
            {
                $membership = new wpl_addon_membership();
                $loginstr .= '<li><a href="'.$membership->URL('dashboard').'"><i class="'.$dashboardicon.'" aria-hidden="true"></i> '.__('Dashboard', 'wpl').'</a></li>';
            }

            if(wpl_global::check_addon('save_searches') and $this->save_search_link) $loginstr .= '<li><a href="'.$this->save_search_url.'"><i class="'.$savesearchicon.'" aria-hidden="true"></i> '.__('Save Searches', 'wpl').'</a></li>';
            if(wpl_global::check_addon('pro') and $this->compare_link) $loginstr .= '<li><a href="'.$this->compare_url.'"><i class="'.$compareicon.'" aria-hidden="true"></i> '.__('Compare', 'wpl').'</a></li>';
            if(wpl_global::check_addon('pro') and $this->favorite_link) $loginstr .= '<li><a href="'.$this->favorite_url.'"><i class="'.$favoriteicon.'" aria-hidden="true"></i> '.__('Favorites', 'wpl').'</a></li>';
        }

        $loginstr .= '</ul></div>';
        echo $loginstr;
    ?>
</div>