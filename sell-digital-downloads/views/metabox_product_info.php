<?php
if (!current_user_can('edit_posts')) wp_die( __('You do not have sufficient permissions to access this page.') );

?>

<table class="form-table">
	<input type="hidden" name="product_token" />
	<tr valign="top">
       <th scope="row"><strong><label for="product_name"><?php echo __('Product Name:','sell-digital-downloads'); ?></label><strong></th>
       <td>
       		<input type="text" value="<?php echo get_post_meta($post_id,'product_name',true); ?>" id="product_name" name="product_name" required class="regular-text" />
       		<p class="description"><?php echo __('The name of your product','sell-digital-downloads'); ?></p>
        </td>
    </tr>
    <tr valign="top">
       <th scope="row"><strong><label for="product_price"><?php echo __('Product Price:','sell-digital-downloads'); ?></label><strong></th>
       <td>
       		<input type="text" value="<?php echo get_post_meta($post_id,'product_price',true); ?>" id="product_price" name="product_price"  required  /> <span class="currency" style="font-weight:bold"><?php echo $currency; ?></span>
       		<p class="description"><?php echo __('The price of this product. Enter a numeric value only (Example: 27.50)','sell-digital-downloads'); ?></p>
        </td>
    </tr>
		<tr valign="top">
        <th scope="row"><strong><label for="product_thumbnail_url"><?php echo __('Thumbnail:','sell-digital-downloads'); ?></label><strong></th>
        <td>
            <input type="text" value="<?php echo get_post_meta($post_id,'product_thumbnail_url',true); ?>" id="product_thumbnail_url" name="product_thumbnail_url" size="90" />
            <input class="button" id="product_thumbnail_upload_button" type="button" value="<?php echo __('Upload File','sell-digital-downloads'); ?>" />
            <p class="description"><?php echo __('Enter the URL of your product thumbnail file or upload one','sell-digital-downloads'); ?></p>
        </td>
    </tr>
    <tr valign="top">
       <th scope="row"><strong><label for="product_url" id="product_url_label"><?php echo __('Buy Now URL:','sell-digital-downloads'); ?></label><strong></th>
       <td>
          <input type="text" disabled value="<?php echo isell_generate_product_url($post_id); ?>" id="product_url" name="product_url" min="0" required  class="regular-text disabled"/>
          <p class="description"><?php echo __('This link can be used to sell this item. Use this link in your call to action button.','sell-digital-downloads'); ?></p>
        </td>
    </tr>
    <tr valign="top">
       <th scope="row"><strong><label for="product_button_shortcode" id="product_button_shortcode_label"><?php echo __('Button Shortcode:','sell-digital-downloads'); ?></label><strong></th>
       <td>
          <input type="text" disabled value="[isell_buy_now id=&quot;<?php echo $post_id; ?>&quot;]" id="product_button_shortcode" name="product_button_shortcode" min="0" required  class="regular-text disabled"/>
          <p class="description">
              <?php echo __('You can use this shortcode to show Buy Now button for this product. Just copy and paste it on any page you want the button to appear on.','sell-digital-downloads'); ?>
              <br />
              <?php echo __('You can customize button using following shortcode parameters:','sell-digital-downloads'); ?>
              <br />
              <?php echo __('button_text="Buy Now": lets you specify custom text displayed on the button.','sell-digital-downloads'); ?>
              <br />
              <?php echo __('new_window="1": opens PayPal payment in new window on button click.','sell-digital-downloads'); ?>
              <br />
              <?php echo __('class="my-css-class": specified CSS class would be applied to the button for styling purposes.','sell-digital-downloads'); ?>
              <br />
              <?php echo __('Example: [isell_buy_now id="'. $post_id.'" button_text="Buy Me" new_window="1"]','sell-digital-downloads'); ?>
          </p>
        </td>
    </tr>   
    <tr valign="top">
       <th scope="row"><strong><label for="product_thanks_page_url" id="product_thanks_page_url_label"><?php echo __('Custom Thanks Page URL:','sell-digital-downloads'); ?></label><strong></th>
       <td>
          <input type="text" value="<?php echo get_post_meta($post_id,'product_thanks_page_url',true); ?>" id="product_thanks_page_url" name="product_thanks_page_url" min="0" class="regular-text"/>
          <p class="description"><?php echo __('URL of the page customers will be sent to after successful purchase.<br />Leave this field empty to use default page specified in settings.','sell-digital-downloads'); ?></p>
        </td>
    </tr>    

</table>

<style>
#normal-sortables,#post-preview{
  display:none;
}
</style>