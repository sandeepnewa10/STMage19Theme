<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
/**
 * @var Mage_Page_Block_Html_Header $this
 */
?>

<div class="shadow"></div>
<div class="swipe-left"></div>
<div class="swipe">
        <div class="swipe-menu"> <a href="<?php echo $this->getUrl('') ?>" title="<?php echo $this->__('Home') ?>" class="home-link"><?php echo $this->__('Home') ?></a> <?php echo $this->getChildHtml('topLinks') ?> <?php echo $this->getChildHtml('currency_2') ?> <?php echo $this->getChildHtml('store_language_2') ?> <?php echo $this->getChildHtml('footer_links') ?> <?php echo $this->getChildHtml('cms_footer_links') ?> <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('cms_footer_links')->toHtml() ?>
                <div class="footer-links-menu"> <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('footer_links')->toHtml() ?> <?php echo $this->getLayout()->createBlock('core/template')->setTemplate('page/template/custum_link_header.phtml')->toHtml(); ?> </div>
        </div>
</div>
<div class="top-icon-menu">
        <div class="swipe-control"><i class="fa fa-align-justify"></i></div>
        <div class="top-search"><i class="fa fa-search"></i></div>
        <span class="clear"></span> </div>
<div class="top-bar hidden-xs">
        <div class="container">
                <div class="header-panel-left">
                        <div class="skip-links"> <span href="#header-account" class="skip-link skip-account"></span></div>
                        <div class="social-icons">
                                <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-square"></i></a></li>
                                </ul>
                        </div>
                </div>
                <div class="header-panel-right">
                        <div class="welcome-msg"><?php echo $this->getWelcome() ?>
                                <p><?php echo $this->getAdditionalHtml() ?></p>
                        </div>
                        <?php echo $this->getChildHtml('currency') ?>
                        <div class="quick-access"> <?php echo $this->getChildHtml('topLinks') ?> </div>
                        <?php echo $this->getChildHtml('store_language') ?> </div>
        </div>
</div>
</div>
<div class="nav-container">
        <div class="container">
                <div class="row">
                        <?php if ($this->getIsHomePage()):?>
                        <div class="header-logo">
                                <h1><a href="<?php echo $this->getUrl('') ?>" title="<?php echo $this->getLogoAlt() ?>" class="logo"><img src="<?php echo $this->getLogoSrc() ?>" alt="<?php echo $this->getLogoAlt() ?>" /></a></h1>
                        </div>
                        <?php else:?>
                        <div class="header-logo"> <a href="<?php echo $this->getUrl('') ?>" title="<?php echo $this->getLogoAlt() ?>" class="logo"><img src="<?php echo $this->getLogoSrc() ?>" alt="<?php echo $this->getLogoAlt() ?>" /></a> </div>
                        <?php endif?>
                        <?php echo $this->getChildHtml('topMenu') ?> <?php echo $this->getChildHtml('topContainer'); ?>
                        <div class="header-search"> <?php echo $this->getChildHtml('topSearch') ?> </div>
                        <div class="header-minicart"><?php echo $this->getChildHtml('cart_header'); ?></div>
                </div>
        </div>
</div>
<?php if(Mage::getSingleton('cms/page')->getIdentifier() == 'home'  && Mage::app()->getFrontController()->getRequest()->getRouteName() == 'cms' ) :  ?>
<?php  //echo ($this->getLayout()->createBlock('cms/block')->setBlockId('slider_1')->toHtml()); ?>
<?php endif;  ?>
