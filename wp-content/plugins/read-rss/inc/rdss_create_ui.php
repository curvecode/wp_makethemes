
<?php 
  /**
   * Tao trang cai dat cho plugin
   * ============================
   */
  function register_mysetting() {
    register_setting('rdss-setting', 'rdss_option_name');
  }

  function rdss_create_menu() {
    add_menu_page('Read RSS', 'RDSS Settings', 'administrator', __FILE__, 'rdss_setting_page', null, 0);
    // add_menu_page('Read RSS', 'RDSS Settings', 'administrator', __FILE__, 'rdss_setting_page', plugins_url('images/icon.png', __FILE__), 1);
    add_action('admin_init', 'register_mysetting');
    // wp_register_script( 'custom-script', plugins_url( '/read-rss/js/main.js', __FILE__ ), array( 'jquery', 'jquery-ui-core' ), '20120208', true );
  }

  // add_action('admin_menu', 'rdss_create_menu');

  /**
   * Function setting page
   */
  function rdss_setting_page() {
    ?>

    <div class="wrap">
      <h2>Add RSS Link</h2>
    
    <?php if (isset($_GET['setting-updated'])) { ?> 
      <div id="message" class="updated">
        <p><strong><?php _e('Setting saved.') ?></strong></p>
      </div>
    <?php } 
      // $plugin_dir_ur = $plugin_dir_url(dirname(__FILE__));
      // echo $plugin_dir_path;
      $url = plugins_url();
    ?>
    <form method="post" <?php echo "action=". $url . "/read-rss/inc/rdss_view_feed.php"; ?> >
      <?php settings_fields('rdss-setting-group'); ?>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">RSS Url : </th>
          <td><input type="text" name="rdss_option_name value="<?php echo get_option('rdss_option_name'); ?>"></td>
        </tr>
      </table>
      <?php submit_button("Add"); ?>
    </form>
    </div>

    <div id="list_rss">
      <?php 
        function getFeed($url = "") {
          $content = file_get_contents($url);
          $objSimpleXML = new SimpleXMLElement($content);
          $feed = $objSimpleXML->entry;
          echo "<h2>List of title : </h3>";
          echo "<ul>";
          foreach($feed as $node) {
            $nodeContent = $node->content;
            // if (strlen($nodeContent) > 50) {
            //   $nodeContent = substr($nodeContent, 0, 50) . '...';
            // }
            echo "<li><h3>".$node->title."</h3><a href='". $node->link[2]->attributes()['href'] ."' target='_blank'>".$node->link[2]->attributes()['title']."</a>";
            // echo $nodeContent;
            echo "</li>";
          }
          echo "</ul>";
        }

        function fetchLink($link) {
          // foreach()
        }
        $rssUrl = "http://blog.piala.co.jp/feeds/posts/default?max-result=999";
        getFeed($rssUrl);
        /**
         * function fetch data from url
         */
        
      ?>
    </div>
    <script type="text/javascript">
      
    </script>
  <?php } 
  /**
   * END tao trang cho Plugin
   * ===============================
   */

?>