<?php
/**
 * @package J2Store
 * @copyright Copyright (c)2014-17 Ramesh Elamathi / J2Store.org
 * @license GNU GPL v3 or later
 */

// No direct access
defined('_JEXEC') or die;
?>

<?php if($this->params->get('list_show_short_desc', 1)): ?>
<div class="j2store-thumbnail-image">
                <?php if(JFile::exists(JPATH_SITE.'/'.JPath::clean($this->product->thumb_image))):?>

                        <?php if($this->params->get('list_image_link_to_product', 1)): ?>
                                <a href="<?php echo $this->product->product_link; ?>">
                        <?php endif;?>  
                        <img itemprop="image" alt="<?php echo $this->product->product_name ;?>" title="<?php echo $this->product->product_name ;?>" class="j2store-img-responsive j2store-product-thumb-image-<?php echo $this->product->j2store_product_id; ?>"  src="<?php echo $image_path.$this->product->thumb_image;?>" />

                        <?php if($this->params->get('list_image_link_to_product', 1)): ?>
                                </a>
                        <?php endif;?>
                <?php elseif(!empty($this->product->thumb_image)):?>
                        <?php echo J2Store::product()->displayImage($this->product,array('type'=>'Thumb','params' => $this->params)); ?>
                <?php endif; ?>
        </div>
<?php endif; ?>

<?php if($this->params->get('list_show_long_desc', 0)): ?>
	<div class="product-long-description"><?php echo $this->product->product_long_desc; ?></div>
<?php endif; ?>
