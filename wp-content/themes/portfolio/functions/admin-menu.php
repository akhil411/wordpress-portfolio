<?php 
    add_action('admin_menu', 'create_theme_options_page');
    function create_theme_options_page() {
        add_options_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'build_options_page');
    }

    function build_options_page() {
?>  
    <div id="theme-options-wrap">
        <div class="icon32" id="icon-tools">
            <br />
        </div>
        <h2>My Theme Options</h2>
        <p>Take control of your theme, by overriding the default settings with your own specific preferences.</p>
        <form method="post" action="options.php" enctype="multipart/form-data">  <?php settings_fields('plugin_options'); ?>  <?php do_settings_sections(__FILE__); ?>  <p class="submit">    <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />  </p></form>
    </div>
<?php }
    add_action('admin_init', 'register_and_build_fields');function register_and_build_fields() {
           register_setting('plugin_options', 'plugin_options', 'validate_setting');
           add_settings_section('main_section', 'Main Settings', 'section_cb', __FILE__);
           add_settings_field('banner_heading', 'Banner Heading:', 'banner_heading_setting', __FILE__, 'main_section');
        }
    function validate_setting($plugin_options) {  return $plugin_options;}
    function section_cb() {}
    function banner_heading_setting() { 
         $options = get_option('plugin_options');  echo "<input name='plugin_options[banner_heading]' type='text' value='{$options['banner_heading']}' />";
}
?>

