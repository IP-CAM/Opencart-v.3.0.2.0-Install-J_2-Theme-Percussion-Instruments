<?php

/* journal2/template/journal2/assets/css.twig */
class __TwigTemplate_3700ea52b00737988efa565f27dbef5fe1a876424cfec930553c4a16941c8caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/* Control Panel Settings */
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectors"]) ? $context["selectors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["selector"]) {
            // line 3
            echo "  ";
            if ($this->getAttribute($context["selector"], "properties", array())) {
                // line 4
                echo "    ";
                echo $this->getAttribute($context["selector"], "selector", array());
                echo " { ";
                echo twig_join_filter($this->getAttribute($context["selector"], "properties", array()), ";");
                echo " }
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
/* Swipebox Loader */
";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method")) {
            // line 10
            echo "  #swipebox-slider .slide {
  background-image: url('image/";
            // line 11
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  }
  .mfp-iframe-scaler iframe {
  background-image: url('image/";
            // line 14
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  background-repeat: no-repeat;
  background-position: center;
  }
  .social {
  background-image: url('image/";
            // line 19
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "ajax-loader"), "method");
            echo "');
  }
";
        }
        // line 22
        echo "
@media only screen and (min-width: 760px){
.ui-pnotify{
width: ";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_width", 1 => 350), "method");
        echo "px !important;
}
}

";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "leading_element"), "method")) {
            // line 30
            echo "  .home-page #container:before{
  content: url('image/";
            // line 31
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "leading_element"), "method");
            echo "');
  }
";
        }
        // line 34
        echo "
";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_qty_status", 1 => "on"), "method") == "off")) {
            // line 36
            echo "  .product-info .right .cart div .qty{
  display:none;
  }
  .product-info .right .cart div .button{
  width:100%;
  }
  .quickview #button-cart {
  width: calc(98% - 40px);
  }
";
        }
        // line 46
        echo "
";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_cart", 1 => "off"), "method") == "on")) {
            // line 48
            echo "  .journal-cart{
  display:none;
  }
";
        }
        // line 52
        echo "
/* Site width */
#container, #header, #footer, .bottom-footer > div, .bottom-footer.boxed-bar {
max-width: ";
        // line 55
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}


";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_status", 1 => "block"), "method") == "none")) {
            // line 60
            echo "  ul.breadcrumb,
  .extended-container::before{
  display:none !important;
  }
";
        }
        // line 65
        echo "

";
        // line 67
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_caption", 1 => "on"), "method") == "off")) {
            // line 68
            echo "  div.lg-sub-html{
  top:0;
  bottom:auto;
  background-color:";
            // line 71
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "gallery_bars_bg"), "method");
            echo ";
  }
  .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{
  bottom:auto;
  }
  .lg-toolbar{
  background-color:transparent;
  }
";
        }
        // line 80
        echo "
";
        // line 81
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_bottom_caption", 1 => "on"), "method") == "off")) {
            // line 82
            echo "  .product-page div.lg-sub-html{
  top:0;
  bottom:auto;
  padding: 13px 95px 13px 70px;
  background-color:";
            // line 86
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_bars_bg"), "method");
            echo ";
  }
  .product-page .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{
  bottom:auto;
  }
  .product-page .lg-toolbar{
  background-color:transparent;
  }
";
        }
        // line 95
        echo "
";
        // line 96
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_bottom_caption", 1 => "on"), "method") == "on")) {
            // line 97
            echo "  .product-page div.lg-sub-html{
  top:auto;
  bottom:0;
  padding: 13px 70px;
  background-color:";
            // line 101
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_caption_bar_bg"), "method");
            echo ";
  }
  .product-page .lg-toolbar{
  background-color:";
            // line 104
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_bars_bg"), "method");
            echo ";
  }
";
        }
        // line 107
        echo "
";
        // line 108
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_sold_count_position", 1 => "none"), "method") == "inline-block")) {
            // line 109
            echo "  .product-sold-count.ps-left{
  display:none;
  }
";
        }
        // line 113
        echo "
";
        // line 114
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_overflow", 1 => "on"), "method") == "off")) {
            // line 115
            echo "  .product-page .heading-title{
  white-space:normal;
  height:auto;
  min-height:40px;
  line-height:1.2;
  padding-bottom:10px;
  padding-top:10px;
  }
";
        }
        // line 124
        echo "
";
        // line 125
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_page_title_overflow", 1 => "on"), "method") == "off")) {
            // line 126
            echo "  .category-page .heading-title{
  white-space:normal;
  height:auto;
  min-height:40px;
  line-height:1.2;
  padding-bottom:10px;
  padding-top:10px;
  }
";
        }
        // line 135
        echo "

";
        // line 137
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_category_image", 1 => "1"), "method") == "0")) {
            // line 138
            echo "  .category-info .image{
  display:none;
  }
";
        }
        // line 142
        echo "

/*Notification Position*/

";
        // line 146
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-left")) {
            // line 147
            echo "  .ui-pnotify{
  left:20px;
  }
  html[dir=\"rtl\"] .ui-pnotify{
  right:20px;
  left:auto;
  }
";
        }
        // line 155
        echo "
";
        // line 156
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-center")) {
            // line 157
            echo "  .ui-pnotify{
  left:50%;
  transform: translateX(-50%);
  }
";
        }
        // line 162
        echo "
";
        // line 163
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "top-right")) {
            // line 164
            echo "  .ui-pnotify{
  right:20px;
  }
  html[dir=\"rtl\"] .ui-pnotify{
  left:20px;
  right:auto;
  }
";
        }
        // line 172
        echo "
";
        // line 173
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_position", 1 => "top-right"), "method") == "center")) {
            // line 174
            echo "  .ui-pnotify{
  left:50%;
  top:50% !important;
  transform: translate(-50%, -50%);
  }
  html[dir=\"rtl\"] .ui-pnotify{
  right:auto !important;
  }
";
        }
        // line 183
        echo "
";
        // line 184
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_shadow", 1 => "0"), "method") == "1")) {
            // line 185
            echo "  .ui-pnotify{
  box-shadow:0px 1px 12px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 189
        echo "


";
        // line 192
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "hover")) {
            // line 193
            echo "  .ui-pnotify:hover .ui-pnotify-closer{
  opacity:1;
  }
";
        }
        // line 197
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "always")) {
            // line 198
            echo "  .ui-pnotify-closer{
  opacity:1;
  }
";
        }
        // line 202
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_show_close", 1 => "hover"), "method") == "never")) {
            // line 203
            echo "  .ui-pnotify-closer:hover{
  display:none;
  }
";
        }
        // line 207
        echo "

";
        // line 209
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "left")) {
            // line 210
            echo "  .breadcrumb{
  text-align:left;
  }
";
        }
        // line 214
        echo "
";
        // line 215
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "center")) {
            // line 216
            echo "  .breadcrumb{
  text-align:center
  }
  html[dir=\"rtl\"] .breadcrumb{
  text-align:center;
  }
";
        }
        // line 223
        echo "
";
        // line 224
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "breadcrumb_align", 1 => "left"), "method") == "right")) {
            // line 225
            echo "  .breadcrumb{
  text-align:right;
  }
  html[dir=\"rtl\"] .breadcrumb{
  text-align:left;
  }
";
        }
        // line 232
        echo "

/* Product Grid Shadow */

";
        // line 236
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 237
            echo "  .product-grid-item:hover .product-wrapper{
  box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);
  }
";
        }
        // line 241
        echo "
";
        // line 242
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 243
            echo "  .product-grid-item  .product-wrapper{
  box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);
  }
";
        }
        // line 247
        echo "

";
        // line 249
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 250
            echo "  .product-grid-item  .product-wrapper{
  box-shadow: ";
            // line 251
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 254
        echo "
";
        // line 255
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 256
            echo "  .product-grid-item:hover .product-wrapper{
  box-shadow: ";
            // line 257
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 260
        echo "

";
        // line 262
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 263
            echo "  .journal-carousel .product-grid-item:hover .product-wrapper{
  box-shadow: ";
            // line 264
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 267
        echo "
";
        // line 268
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 269
            echo "  .journal-carousel .product-grid-item .product-wrapper{
  box-shadow: ";
            // line 270
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 273
        echo "
";
        // line 274
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_product_grid_box_shadow", 1 => "inherit"), "method") == "none")) {
            // line 275
            echo "  .journal-carousel .product-grid-item .product-wrapper{
  box-shadow: none !important;
  }
";
        }
        // line 279
        echo "


";
        // line 282
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 283
            echo "  .custom-sections .product-grid-item .product-wrapper:hover{
  box-shadow: ";
            // line 284
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 287
        echo "
";
        // line 288
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 289
            echo "  .custom-sections .product-grid-item .product-wrapper{
  box-shadow: ";
            // line 290
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 293
        echo "
  ";
        // line 294
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_product_grid_box_shadow", 1 => "inherit"), "method") == "none")) {
            // line 295
            echo "    .custom-sections .product-grid-item .product-wrapper{
    box-shadow: none !important;
    }
  ";
        }
        // line 299
        echo "



  ";
        // line 303
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_latest_label_status", 1 => "block"), "method") == "none")) {
            // line 304
            echo "    .product-grid-item .image .label-latest + .label-sale{
    top: 5px;
    margin-top: 0;
    }
  ";
        }
        // line 309
        echo "
  ";
        // line 310
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_on_tablet", 1 => "on"), "method") == "off")) {
            // line 311
            echo "    @media only screen and (min-width : 760px) and (max-width: 1024px) {
    #column-left{
    display: none;
    }
    #column-left + #content,
    #column-left + #column-right + #content {
    margin-left:0 !important;
    }
    }
  ";
        }
        // line 321
        echo "
  ";
        // line 322
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_on_tablet", 1 => "on"), "method") == "off")) {
            // line 323
            echo "    @media only screen and (min-width : 760px) and (max-width: 1024px) {
    #column-right{
    display: none;
    }
    #column-right + #content,
    #column-left + #column-right + #content {
    margin-right:0 !important;
    }
    }
  ";
        }
        // line 333
        echo "

  ";
        // line 335
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 336
            echo "    .product-grid-item .cart .button-left-icon:before{
    display:none;
    }
  ";
        }
        // line 340
        echo "
.product-grid-item .enquiry-button .button i{
color:";
        // line 342
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon:color"), "method");
        echo ";
}
.product-list-item .enquiry-button .button i{
color:";
        // line 345
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon:color"), "method");
        echo ";
}

footer .contacts > div > span .contact-icon:hover{
background-color:";
        // line 349
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "contacts_icon_bg_hover"), "method");
        echo ";
}


";
        // line 353
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 354
            echo "  .product-grid-item .cart .button-left-icon:before{
  float:none;
  }
  .product-grid-item .cart .button-right-icon:before{
  margin-left:0;
  }
  .product-grid-item .cart .button-cart-text{
  display:none;
  }
  .product-grid-item .cart .button[data-hint]:after,
  .product-grid-item .cart .hint--top:before{
  display:block;
  }
  .product-grid-item .cart .hint--top:before{
  border-top-color: ";
            // line 368
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .cart .hint--right:before{
  border-right-color: ";
            // line 371
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .cart .hint--left:before{
  border-left-color: ";
            // line 374
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 377
        echo "
";
        // line 378
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 379
            echo "  .product-grid-item .cart .button-left-icon::before,
  .product-grid-item .enquiry-button i::before{
  margin-right: 6px;
  }
";
        }
        // line 384
        echo "
";
        // line 385
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 386
            echo "  .product-grid-item .cart .button-right-icon{
  display:none !important;
  }
";
        }
        // line 390
        echo "
";
        // line 391
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 392
            echo "  .product-grid-item .cart .button-left-icon{
  display:none !important;
  }
  .button-right-icon:before{
  margin-left: 6px;
  }
";
        }
        // line 399
        echo "

/* BLOG */

";
        // line 403
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_icon_position", 1 => "left"), "method") == "right") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_button_icon_position", 1 => "left"), "method") == "right"))) {
            // line 404
            echo "  .post-button-left-icon{
  display:none;
  }
  .post-button-right-icon{
  display:inline;
  }
";
        }
        // line 411
        echo "
";
        // line 412
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_title_status", 1 => "on"), "method") == "off")) {
            // line 413
            echo "  .one-page-checkout h1.heading-title{
  display:none;
  }
";
        }
        // line 417
        echo "
";
        // line 418
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "none")) {
            // line 419
            echo "  .post-wrapper{
  box-shadow: none;
  }
";
        }
        // line 423
        echo "
";
        // line 424
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 425
            echo "  .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 429
        echo "
";
        // line 430
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 431
            echo "  .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 435
        echo "
";
        // line 436
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 437
            echo "  .post-wrapper:hover{
  box-shadow: ";
            // line 438
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 441
        echo "
";
        // line 442
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 443
            echo "  .post-wrapper{
  box-shadow: ";
            // line 444
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 447
        echo "

";
        // line 449
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "none")) {
            // line 450
            echo "  .post-item .post-wrapper{
  box-shadow: none !important;
  }
";
        }
        // line 454
        echo "
";
        // line 455
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 456
            echo "  .post-item .post-wrapper{
  box-shadow: none;
  }
  .post-item .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 463
        echo "
";
        // line 464
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 465
            echo "  .post-item .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 469
        echo "
";
        // line 470
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 471
            echo "  .post-item .post-wrapper{
  box-shadow: none;
  }
  .post-item .post-wrapper:hover{
  box-shadow: ";
            // line 475
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 478
        echo "
";
        // line 479
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 480
            echo "  .post-item .post-wrapper{
  box-shadow: ";
            // line 481
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "posts_grid_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 484
        echo "


";
        // line 487
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "none")) {
            // line 488
            echo "  .blog-list-view .post-wrapper{
  box-shadow: none !important;
  }
";
        }
        // line 492
        echo "
";
        // line 493
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 494
            echo "  .blog-list-view .post-wrapper{
  box-shadow:none;
  }
  .blog-list-view .post-wrapper:hover{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 501
        echo "
";
        // line 502
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "default") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 503
            echo "  .blog-list-view .post-wrapper{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  }
";
        }
        // line 507
        echo "
";
        // line 508
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "hover"))) {
            // line 509
            echo "  .blog-list-view .post-wrapper{
  box-shadow:none;
  }
  .blog-list-view .post-wrapper:hover{
  box-shadow: ";
            // line 513
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 516
        echo "
";
        // line 517
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_box_shadow", 1 => "none"), "method") == "custom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_2", 1 => "hover"), "method") == "always"))) {
            // line 518
            echo "  .blog-list-view .post-wrapper{
  box-shadow: ";
            // line 519
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_shadow_custom"), "method");
            echo ";
  }
";
        }
        // line 522
        echo "

";
        // line 524
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_details_tip", 1 => "always"), "method") == "hover")) {
            // line 525
            echo "  .product-details:before {
  visibility:hidden;
  opacity:0;
  transition: all 0.2s;
  }
  .product-grid-item:hover .product-details:before {
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 535
        echo "
";
        // line 536
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_details_tip", 1 => "always"), "method") == "never")) {
            // line 537
            echo "  .product-details:before {
  display:none;
  }
";
        }
        // line 541
        echo "

/* Product Grid Quickview*/

";
        // line 545
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "hover")) {
            // line 546
            echo "  .product-grid-item:hover .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 551
        echo "
";
        // line 552
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "always")) {
            // line 553
            echo "  .product-grid-item .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 558
        echo "
";
        // line 559
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "never")) {
            // line 560
            echo "  .product-grid-item .quickview-button {
  display:none;
  }
";
        }
        // line 564
        echo "

";
        // line 566
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "hover"))) {
            // line 567
            echo "  .product-grid-item:hover .rating{
  margin-top:-28px;
  transition: all 0.1s ease-out;
  }
";
        }
        // line 572
        echo "
";
        // line 573
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_status", 1 => "hover"), "method") == "always"))) {
            // line 574
            echo "  .product-grid-item .rating{
  margin-top:-28px;
  }
";
        }
        // line 578
        echo "
";
        // line 579
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 580
            echo "  .product-grid-item .quickview-button .button-right-icon{
  display:none;
  }
";
        }
        // line 584
        echo "
";
        // line 585
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 586
            echo "  .product-grid-item .quickview-button .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 6px;
  }
";
        }
        // line 593
        echo "
";
        // line 594
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 595
            echo "  .product-grid-item .quickview-button .button-left-icon:before,
  .product-grid-item .quickview-button .button-right-icon:before{
  display:none;
  }
";
        }
        // line 600
        echo "
";
        // line 601
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 602
            echo "  .product-grid-item .quickview-button .button-left-icon:before{
  float:none;
  }
  .product-grid-item .quickview-button .button-right-icon:before{
  margin-left:0;
  }
  .product-grid-item .quickview-button .button-cart-text{
  display:none;
  }
  .product-grid-item .quickview-button [data-hint]:after,
  .product-grid-item .quickview-button .hint--top:before{
  display:block;
  }
  .product-grid-item .quickview-button .hint--top:before{
  border-top-color: ";
            // line 616
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .quickview-button .hint--right:before{
  border-right-color: ";
            // line 619
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-grid-item .quickview-button .hint--left:before{
  border-left-color: ";
            // line 622
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 625
        echo "
";
        // line 626
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 627
            echo "  .product-grid-item .quickview-button .button-left-icon:before{
  margin-right: 6px;
  }
";
        }
        // line 631
        echo "

/* Product Grid Wishlist/Compare */

";
        // line 635
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "text")) {
            // line 636
            echo "  .product-grid-item .wishlist a i,
  .product-grid-item .compare a i{
  display:none;
  }
";
        }
        // line 641
        echo "
";
        // line 642
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "icon")) {
            // line 643
            echo "  .product-grid-item .button-wishlist-text,
  .product-grid-item .button-compare-text{
  display: none;
  }
  .product-grid-item .wishlist [data-hint]:after,
  .product-grid-item .wishlist .hint--top:before,
  .product-grid-item .compare [data-hint]:after,
  .product-grid-item .compare .hint--top:before{
  display:block;
  }

  .product-grid-item .wishlist .hint--top:before,
  .product-grid-item .compare .hint--top:before{
  border-top-color: ";
            // line 656
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
  .product-grid-item .wishlist .hint--right:before,
  .product-grid-item .compare .hint--right:before{
  border-right-color: ";
            // line 660
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
  .product-grid-item .wishlist .hint--left:before,
  .product-grid-item .compare .hint--left:before{
  border-left-color: ";
            // line 664
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_tip_bg"), "method");
            echo ";
  }
";
        }
        // line 667
        echo "
";
        // line 668
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "text"), "method") == "both")) {
            // line 669
            echo "  .product-grid-item .wishlist a i,
  .product-grid-item .compare a i{
  border:0;
  background-color:transparent !important;
  padding:0 5px;
  }
  .product-grid-item .wishlist a i:before,
  .product-grid-item .compare a i:before{
  line-height:100%;
  }
";
        }
        // line 680
        echo "

";
        // line 682
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "icon"), "method") == "icon"))) {
            // line 683
            echo "  .product-grid-item .product-details .wishlist,
  .product-grid-item .product-details .compare,
  .product-list-item .image .wishlist,
  .product-list-item .image .compare,
  .product-grid-item .image .button-wishlist-text,
  .product-grid-item .image .button-compare-text{
  display:none !important;
  }
";
        }
        // line 692
        echo "


";
        // line 695
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_on_hover", 1 => "on"), "method") == "on") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "image")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => ""), "method") == "icon"))) {
            // line 696
            echo "  .product-grid-item .image .wishlist,
  .product-grid-item .image .compare{
  visibility:hidden;
  opacity:0;
  }
  .product-grid-item:hover .image .wishlist,
  .product-grid-item:hover .image .compare{
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 707
        echo "

";
        // line 709
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 710
            echo "  .product-list-item .cart .button{
  width:";
            // line 711
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_width_px"), "method");
            echo "px;
  height:";
            // line 712
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 713
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_height_px"), "method");
            echo "px;
  padding:0;
  }
";
        }
        // line 717
        echo "
";
        // line 718
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 719
            echo "  .product-list-item .quickview-button .button{
  width:";
            // line 720
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_width_px"), "method");
            echo "px;
  height:";
            // line 721
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 722
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_height_px"), "method");
            echo "px;
  padding:0;
  }
";
        }
        // line 726
        echo "


";
        // line 729
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 730
            echo "  .product-grid-item .cart .button{
  width:";
            // line 731
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_width_px"), "method");
            echo "px;
  height:";
            // line 732
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 733
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  padding:0;
  }
  .product-grid-item .cart{
  height:";
            // line 737
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_height_px"), "method");
            echo "px;
  }
";
        }
        // line 740
        echo "
";
        // line 741
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_icon_display", 1 => "icon"), "method") == "icon")) {
            // line 742
            echo "  .product-grid-item .quickview-button .button{
  width:";
            // line 743
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_width_px"), "method");
            echo "px;
  height:";
            // line 744
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_height_px"), "method");
            echo "px;
  line-height:";
            // line 745
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_button_height_px"), "method");
            echo "px;
  padding:0;
  }
";
        }
        // line 749
        echo "

/* Product List */

";
        // line 753
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "hover")) {
            // line 754
            echo "  .product-list-item:hover{
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
  }
";
        }
        // line 758
        echo "
";
        // line 759
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "always")) {
            // line 760
            echo "  .product-list-item{
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
  }
";
        }
        // line 764
        echo "
";
        // line 765
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_shadow", 1 => "never"), "method") == "never")) {
            // line 766
            echo "  .product-list-item{
  box-shadow: none;
  }
";
        }
        // line 770
        echo "


";
        // line 773
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 774
            echo "  .product-list-item .cart .button-left-icon:before{
  display:none;
  }
";
        }
        // line 778
        echo "
";
        // line 779
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 780
            echo "  .product-list-item .cart .button-left-icon:before{
  float:none;
  }
  .product-list-item .cart .button-right-icon:before{
  margin-left:0;
  }
  .product-list-item .cart .button-cart-text{
  display:none;
  }
  .product-list-item .cart .button[data-hint]:after,
  .product-list-item .cart .hint--top:before{
  display:block;
  }
  .product-list-item .cart .hint--top:before{
  border-top-color: ";
            // line 794
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .cart .hint--right:before{
  border-right-color: ";
            // line 797
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .cart .hint--left:before{
  border-left-color: ";
            // line 800
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 803
        echo "
";
        // line 804
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 805
            echo "  .product-list-item .cart .button-left-icon:before,
  .product-list-item .enquiry-button i:before{
  margin-right: 8px;
  }
";
        }
        // line 810
        echo "
";
        // line 811
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 812
            echo "  .product-list-item .cart .button-right-icon{
  display:none;
  }
";
        }
        // line 816
        echo "
";
        // line 817
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 818
            echo "  .product-list-item .cart .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 8px;
  }
";
        }
        // line 825
        echo "

/* Product List Quickview*/
";
        // line 828
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "hover")) {
            // line 829
            echo "  .product-list-item:hover .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 834
        echo "
";
        // line 835
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "always")) {
            // line 836
            echo "  .product-list-item .quickview-button {
  opacity: 1;
  visibility: visible;
  }
";
        }
        // line 841
        echo "
";
        // line 842
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_status", 1 => "hover"), "method") == "never")) {
            // line 843
            echo "  .product-list-item .quickview-button {
  display:none;
  }
";
        }
        // line 847
        echo "
";
        // line 848
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 849
            echo "  .product-list-item .quickview-button .button-right-icon{
  display:none;
  }
";
        }
        // line 853
        echo "
";
        // line 854
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 855
            echo "  .product-list-item .quickview-button .button-left-icon{
  display:none;
  }
  .button-right-icon:before{
  margin-left: 8px;
  }
";
        }
        // line 862
        echo "
";
        // line 863
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "text")) {
            // line 864
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  display:none;
  }
";
        }
        // line 868
        echo "
";
        // line 869
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "icon")) {
            // line 870
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  float:none;
  }
  .product-list-item .quickview-button .button-right-icon:before{
  margin-left:0;
  }
  .product-list-item .quickview-button .button-cart-text{
  display:none;
  }
  .product-list-item .quickview-button .button[data-hint]:after,
  .product-list-item .quickview-button .hint--top:before{
  display:block;
  }
  .product-list-item .quickview-button .hint--top:before{
  border-top-color: ";
            // line 884
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .quickview-button .hint--right:before{
  border-right-color: ";
            // line 887
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
  .product-list-item .quickview-button .hint--left:before{
  border-left-color: ";
            // line 890
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_tooltip_bg_color"), "method");
            echo ";
  }
";
        }
        // line 893
        echo "
";
        // line 894
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_quickview_button_icon_display", 1 => "text"), "method") == "both")) {
            // line 895
            echo "  .product-list-item .quickview-button .button-left-icon:before{
  margin-right: 8px;
  }
";
        }
        // line 899
        echo "

/* Product Page */

#product-gallery.image-additional-grid a{
width: ";
        // line 904
        echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
        echo "%;
}

";
        // line 907
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel", 1 => "1"), "method") == "0")) {
            // line 908
            echo "  .product-info .left .image-additional{
  margin-right: -";
            // line 909
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing"), "method");
            echo "px;
  }
";
        }
        // line 912
        echo "
";
        // line 913
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_button_icon_position", 1 => "left"), "method") == "left")) {
            // line 914
            echo "  #button-cart .button-cart-text:after{
  display:none;
  }
";
        }
        // line 918
        echo "
";
        // line 919
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_button_icon_position", 1 => "left"), "method") == "right")) {
            // line 920
            echo "  #button-cart .button-cart-text:before{
  display:none;
  }
";
        }
        // line 924
        echo "
";
        // line 925
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows", 1 => "hover"), "method") == "hover")) {
            // line 926
            echo "  .product-info .left .image-additional .swiper-button-prev,
  .product-info .left .image-additional .swiper-button-next{
  display:none;
  }
  .product-info .left .image-additional:hover .swiper-button-prev,
  .product-info .left .image-additional:hover .swiper-button-next{
  display:block;
  }
";
        }
        // line 935
        echo "
";
        // line 936
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_header", 1 => "0"), "method") == "1") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_header_above", 1 => "on"), "method") == "off"))) {
            // line 937
            echo "  @media only screen and (min-width: 980px){
  #top-modules > div:first-of-type.journal2_slider{
  margin-top:-";
            // line 939
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_top_spacing"), "method") + 120);
            echo "px;
  position:relative;
  }
  }
";
        }
        // line 944
        echo "
.compare-info td{
border-right-style:";
        // line 946
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
table.list{
border-bottom-style:";
        // line 949
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
border-left-style:";
        // line 950
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
table.list td{
border-right-style:";
        // line 953
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
border-top-style:";
        // line 954
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}


/* Product Labels*/

.label-latest + .label-sale{
top: ";
        // line 961
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_height"), "method");
        echo "px;
}

";
        // line 964
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_status", 1 => "always"), "method") == "hover")) {
            // line 965
            echo "  .label-latest{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-latest, .product-list-item:hover .label-latest, .product-info .image:hover .label-latest{
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 974
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_latest_status", 1 => "always"), "method") == "never")) {
            // line 975
            echo "  .label-latest{
  display:none !important;
  }
";
        }
        // line 979
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "label_special_status", 1 => "always"), "method") == "hover")) {
            // line 980
            echo "  .label-sale{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-sale, .product-list-item:hover .label-sale, .product-info .image:hover .label-sale{
  visibility:visible;
  opacity:1;
  }


";
        }
        // line 991
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_status", 1 => "always"), "method") == "hover")) {
            // line 992
            echo "  .label-outofstock{
  visibility:hidden;
  opacity:0;
  }
  .product-wrapper:hover .label-outofstock, .product-list-item:hover .label-outofstock, .product-info .image:hover .label-outofstock{
  visibility:visible;
  opacity:1;
  }
";
        }
        // line 1001
        echo "
";
        // line 1002
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_status", 1 => "always"), "method") == "never")) {
            // line 1003
            echo "  .label-outofstock{
  display:none !important;
  }
";
        }
        // line 1007
        echo "
";
        // line 1008
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "out_of_stock_style", 1 => "diagonal"), "method") == "normal")) {
            // line 1009
            echo "  span.label-outofstock {
  padding: .4em .55em .3em;
  transform: translate(5px, 5px) rotate(0deg);
  min-width:inherit;
  }
  html[dir=\"rtl\"] span.label-outofstock {
  padding: .4em .55em .3em;
  transform: translate(-5px, 5px) rotate(0deg);
  min-width:inherit;
  }
";
        }
        // line 1020
        echo "

";
        // line 1022
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_list_latest_label_status", 1 => "block"), "method") == "none")) {
            // line 1023
            echo "  .product-list-item .image .label-latest + .label-sale{
  top: 5px;
  margin-top: 0;
  }
";
        }
        // line 1028
        echo "
#more-details.hint--top:before{
border-top-color: ";
        // line 1030
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details_tip_bg"), "method");
        echo ";
}

.boxed-header header{
max-width:";
        // line 1034
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
}
.boxed-header .super-menu > li:first-of-type{
border-left-width:0;
}
.boxed-header .super-menu > li:last-of-type{
border-right-width:0;
}

";
        // line 1043
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_menu_off", 1 => "1"), "method") == "0")) {
            // line 1044
            echo "  @media only screen and (min-width: 760px){
  .boxed-header .is-sticky header .header{
  max-width:";
            // line 1046
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
            echo "px;
  left: 50%;
  transform: translateX(-50%);
  }
  }
  .is-sticky .header {
  box-shadow: none;
  background: transparent;
  }
  .is-sticky .journal-menu-bg {
  background-color:transparent;
  background-image:none;
  }
";
        }
        // line 1060
        echo "

";
        // line 1062
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_name_overflow", 1 => "on"), "method") == "off")) {
            // line 1063
            echo "  div.lg-sub-html > span{
  white-space:normal;
  }
  div.lg-sub-html {
  padding: 20px;
  }
";
        }
        // line 1070
        echo "
@media only screen and (max-width: 760px){
.journal-language .dropdown-toggle,
.journal-currency .dropdown-toggle{
color:";
        // line 1074
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "full_text_font_phone"), "method");
        echo ";
}
.journal-header-center #language,
.journal-header-center #currency{
border-color:";
        // line 1078
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "lang_divider_phone"), "method");
        echo ";
}
}

.sticky-menu .is-sticky .journal-header-default .header{
background-color: ";
        // line 1083
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_bg_color"), "method");
        echo ";
}

";
        // line 1086
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_phone_required", 1 => "block"), "method") == "none")) {
            // line 1087
            echo "  .phone-input label::before{
  display:none;
  }
";
        }
        // line 1091
        echo "
";
        // line 1092
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_phone_required", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_show_phone", 1 => "block"), "method") == "none"))) {
            // line 1093
            echo "  #content.one-page-checkout div fieldset > div.phone-input{
  display:none !important;
  }
";
        }
        // line 1097
        echo "
html[dir=\"rtl\"] .journal-carousel .htabs a:last-of-type{
border-left-color:";
        // line 1099
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_title_divider"), "method");
        echo ";
}

.boxed-header .journal-header-center .journal-links{
padding-left: 10px;
}
.boxed-header .journal-header-center .journal-search{
padding-left: 20px;
}
.boxed-header .journal-header-center .journal-secondary{
padding-right: 10px;
}


";
        // line 1113
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_header_shadow", 1 => "none"), "method") == "none")) {
            // line 1114
            echo "  #cart{
  box-shadow:none;
  }
";
        }
        // line 1118
        echo "
.journal-header-center .journal-center-bg{
top:";
        // line 1120
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}

";
        // line 1123
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_header_shadow", 1 => "none"), "method") == "default")) {
            // line 1124
            echo "  #cart {
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1128
        echo "

";
        // line 1130
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_shadow", 1 => "none"), "method") == "none")) {
            // line 1131
            echo "  #cart .cart-wrapper{
  box-shadow:none;
  }
";
        }
        // line 1135
        echo "
";
        // line 1136
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_shadow", 1 => "none"), "method") == "default")) {
            // line 1137
            echo "  #cart .cart-wrapper {
  box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1141
        echo "

";
        // line 1143
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_shadow", 1 => "none"), "method") == "none")) {
            // line 1144
            echo "  #search input{
  box-shadow:none;
  }
";
        }
        // line 1148
        echo "
";
        // line 1149
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_shadow", 1 => "none"), "method") == "default")) {
            // line 1150
            echo "  #search input{
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1154
        echo "
";
        // line 1155
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autosuggest_shadow", 1 => "none"), "method") == "none")) {
            // line 1156
            echo "  .autocomplete2-suggestions{
  box-shadow:none;
  }
";
        }
        // line 1160
        echo "
";
        // line 1161
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autosuggest_shadow", 1 => "none"), "method") == "default")) {
            // line 1162
            echo "  .autocomplete2-suggestions{
  box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);
  }
";
        }
        // line 1166
        echo "

@media only screen and (max-width: 760px) {
ul.super-menu > li > a,
ul.super-menu > li:hover > a{
color:";
        // line 1171
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_color_phone"), "method");
        echo ";
}
ul.super-menu > li,
ul.super-menu > li:hover{
background-color:";
        // line 1175
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_bg_phone"), "method");
        echo ";
}
.boxed-header .journal-header-center .journal-search,
.boxed-header .journal-header-center .journal-links{
padding-left: 0;
}
.boxed-header .journal-header-center .journal-cart,
.boxed-header .journal-header-center .journal-secondary{
padding-right: 0;
}
.button-search{
background-color:";
        // line 1186
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_button_bg_mobile"), "method");
        echo ";
}
.button-search i:before{
color:";
        // line 1189
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_icon_color_mobile"), "method");
        echo " !important;
}
}


";
        // line 1194
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_compare", 1 => "inline-block"), "method") == "inline-block")) {
            // line 1195
            echo "  .product-filter .product-compare {
  display: flex;
  }
";
        }
        // line 1199
        echo "
";
        // line 1200
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_compare_link_status", 1 => "on"), "method") == "off")) {
            // line 1201
            echo "  .product-filter .product-compare{
  display:none;
  }
";
        }
        // line 1205
        echo "

@media only screen and (max-width: 980px) {
.mobile-menu-on-tablet ul.super-menu > li > a,
.mobile-menu-on-tablet ul.super-menu > li:hover > a{
color:";
        // line 1210
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_color_phone"), "method");
        echo ";
}
.mobile-menu-on-tablet ul.super-menu > li,
.mobile-menu-on-tablet ul.super-menu > li:hover{
background-color:";
        // line 1214
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_item_bg_phone"), "method");
        echo ";
}
}

";
        // line 1218
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "responsive_design"), "method") == "1")) {
            // line 1219
            echo "  @media only screen and (min-width:760px) and (max-width:";
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
            echo "px) {
  .journal-header-center .journal-search{
  padding-left: 15px;
  }
  .journal-header-center .journal-cart{
  padding-right: 15px;
  }
  .journal-header-center .journal-cart{
  width:calc(25% - 20px);
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-header-center .journal-search{
  padding-right: 15px;
  }
  }
  @media only screen and (max-width:760px) {
  .journal-header-center .journal-search,
  html[dir=\"rtl\"] .journal-header-center .journal-search{
  padding-left: 0;
  padding-right: 0;
  }
  .journal-header-center .journal-cart,
  html[dir=\"rtl\"] .journal-header-center .journal-cart{
  padding-right: 0;
  padding-left: 0;
  }
  }
";
        }
        // line 1247
        echo "

@media only screen and (min-width: 760px){
.boxed-header .journal-header-center .journal-cart{
padding-right:15px;
}
html[dir=\"rtl\"] .boxed-header .journal-header-center .journal-cart{
padding-right:0;
padding-left:15px;
}
}

@media only screen and (min-width: ";
        // line 1259
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px) {
.sticky-menu:not(.boxed-header) .is-sticky .journal-header-compact #header .journal-menu .super-menu > li:first-of-type > a {
margin-left: 0;
}
.skin-16 .journal-header-mega .journal-search {
padding-right: 0;
}
}

@media only screen and (max-width: ";
        // line 1268
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.super-menu, .mega-menu, .html-menu{
border-radius:0;
}
.bottom-footer.fullwidth-bar .copyright{
padding-left: 15px;
}
.bottom-footer.fullwidth-bar .payments{
padding-right: 15px;
}

#top-modules > div:not(.gutter),
#bottom-modules > div:not(.gutter){
padding-left: 20px;
padding-right: 20px;
}

#top-modules .journal2_slider,
#bottom-modules .journal2_slider,
#top-modules .journal2_headline_rotator{
padding-left: 0 !important;
padding-right: 0 !important;
}

.no-secondary .journal-header-center #currency{
border-right-width:0;
}
.no-secondary .journal-header-center #language{
border-left-width:0;
}
html[dir=\"rtl\"].no-secondary .journal-header-center #currency{
border-left-width:0;
border-right-width:1px;
}
html[dir=\"rtl\"].no-secondary .journal-header-center #language{
border-right-width:0;
border-left-width:1px;
}
.journal-header-compact #header .journal-search {
padding-right:15px !important;
}
html[dir=\"rtl\"] .journal-header-compact #header .journal-search {
padding-right:0 !important;
padding-left:15px !important;
}
.sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:first-of-type{
border-left-width:0;
}
.sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:last-of-type{
border-right-width:0;
}
.boxed-header body{
padding:0;
}
.fullwidth-footer .columns{
padding-left: 15px;
}
.copyright{
padding-left: 15px;
}
.journal-header-mega .journal-logo{
padding-left:15px;
}
html[dir=\"rtl\"] .journal-header-mega .journal-logo{
padding-left:0;
padding-right:15px;
}
}

@media only screen and (max-width: 760px){
.journal-header-mega .journal-logo{
padding-left:0;
}
html[dir=\"rtl\"] .journal-header-mega .journal-logo{
padding-left:0;
padding-right:0;
}
}

.boxed-header .journal-header-mega .journal-logo{
padding-left:15px;
}
html[dir=\"rtl\"].boxed-header .journal-header-mega .journal-logo{
padding-left:0;
padding-right:15px;
}

@media only screen and (min-width : 760px) {
.side-blocks-active .journal-fullwidth-slider .tp-leftarrow,
.side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {
left: 60px !important;
}
.side-blocks-active .journal-fullwidth-slider .tp-rightarrow,
.side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {
right: 60px !important;
}
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow,
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {
right: 60px !important;
left: auto !important;
}
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow,
html[dir=\"rtl\"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {
left: 60px !important;
right: auto !important;
}
}

";
        // line 1376
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details", 1 => "1"), "method") == "0")) {
            // line 1377
            echo "  .quickview #more-details{
  display:none;
  }
  .quickview #button-cart{
  width:63%;
  }
";
        }
        // line 1384
        echo "

";
        // line 1386
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_header_align_2", 1 => "center"), "method") == "left")) {
            // line 1387
            echo "  @media only screen and (min-width: 760px){
  .journal-header-mega #logo a img{
  left: 0;
  transform: translate(0, -50%);
  }
  }
";
        }
        // line 1394
        echo "
";
        // line 1395
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_header_align_2", 1 => "center"), "method") == "left")) {
            // line 1396
            echo "  @media only screen and (min-width: 760px){
  html[dir=\"rtl\"] .journal-header-mega #logo a img{
  left: auto;
  right:0;
  }
  }
";
        }
        // line 1403
        echo "
";
        // line 1404
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_shadow", 1 => "none"), "method") == "none")) {
            // line 1405
            echo "  header .links a,
  header .links .no-link{
  border-bottom-color:#e4e4e4;
  }
";
        }
        // line 1410
        echo "
.boxed-header.default-header .journal-top-header{
clip: rect(0px,";
        // line 1412
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px,45px,0px);
}

.journal-header-default .links .no-link{
border-color:";
        // line 1416
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo "
}

.journal-header-center #cart .content:before,
.oc2 #cart .content .cart-wrapper:before{
color:";
        // line 1421
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_content_bg"), "method");
        echo "
}

.journal-header-center .autocomplete2-suggestions:before{
color:";
        // line 1425
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "autosuggest_bg"), "method");
        echo "
}

";
        // line 1428
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_icons_display", 1 => "inline"), "method") == "block")) {
            // line 1429
            echo "  header .links a i,
  .links .no-link i,
  .journal-header-default #header .journal-links .top-menu > li > a{
  display:block;
  }
  header .links a i,
  .links .no-link i{
  margin-top:3px;
  }
  header .links .top-menu-link{
  position:relative;
  top:-2px;
  }
  .has-dropdown::after {
  margin-left: 2px;
  top: -3px;
  }
";
        }
        // line 1447
        echo "
.journal-language .dropdown-menu:before,
.journal-currency .dropdown-menu:before{
color:";
        // line 1450
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "lang_drop_bg"), "method");
        echo "
}

#header .top-menu .top-dropdown li:first-of-type {
border-top-left-radius: ";
        // line 1454
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
border-top-right-radius: ";
        // line 1455
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
}
#header .top-menu .top-dropdown li:last-of-type {
border-bottom-left-radius: ";
        // line 1458
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
border-bottom-right-radius: ";
        // line 1459
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_radius"), "method");
        echo "px;
}
#header .top-menu .top-dropdown li:first-of-type::before{
color:";
        // line 1462
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo "
}

#search ::-webkit-input-placeholder {
color:";
        // line 1466
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search :-moz-placeholder {
color:";
        // line 1470
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search ::-moz-placeholder {
color:";
        // line 1474
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
#search :-ms-input-placeholder {
color:";
        // line 1478
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color"), "method");
        echo ";
font-family: inherit;
}
.compare-info tbody td{
border-left-style:";
        // line 1482
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "shopping_divider_style"), "method");
        echo ";
}
@media only screen and (max-width: 760px){
#search ::-webkit-input-placeholder {
color:";
        // line 1486
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search :-moz-placeholder {
color:";
        // line 1490
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search ::-moz-placeholder {
color:";
        // line 1494
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
#search :-ms-input-placeholder {
color:";
        // line 1498
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_color_mobile"), "method");
        echo ";
font-family: inherit;
}
}

.button-search{
border-right-style:";
        // line 1504
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
        echo ";
border-right-color:";
        // line 1505
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}
html[dir=\"rtl\"] .button-search{
border-left-style:";
        // line 1508
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
        echo ";
border-left-color:";
        // line 1509
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-left{
border-left-style: ";
        // line 1513
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

";
        // line 1516
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_divider_phone", 1 => "off"), "method") == "on")) {
            // line 1517
            echo "  @media only screen and (max-width: 760px){
  .center-header #search, .default-header #search{
  border-top-width:1px;
  border-top-style:";
            // line 1520
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-top-color:";
            // line 1521
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
  }
";
        }
        // line 1525
        echo "
";
        // line 1526
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_button_pos", 1 => "left"), "method") == "right")) {
            // line 1527
            echo "  .button-search {
  right: 0;
  }
  html[dir=\"rtl\"] .button-search {
  right: auto;
  left:0;
  }
  #search input {
  padding-left: 12px;
  padding-right: 50px;
  }
  .button-search{
  border-right-width:0;
  border-left-width:1px;
  border-left-style:";
            // line 1541
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-left-color:";
            // line 1542
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
  html[dir=\"rtl\"] .button-search{
  border-left-width:0;
  border-right-width:1px;
  border-right-style:";
            // line 1547
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider_type"), "method");
            echo ";
  border-right-color:";
            // line 1548
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
            echo ";
  }
";
        }
        // line 1551
        echo "

header .journal-login{
border-bottom-color:";
        // line 1554
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_divider"), "method");
        echo ";
}


.super-menu > li:last-of-type{
border-right-color:";
        // line 1559
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-right-style:";
        // line 1560
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

@media only screen and (max-width: 760px) {
.default-header .journal-login{
background-color: ";
        // line 1565
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_menu_bg_color_mobile"), "method");
        echo "
}
.journal-header-center #search input,
.journal-header-center .button-search{
border-radius:0;
}
.center-header #search input, .default-header #search input{
background-color:";
        // line 1572
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_bg_mobile"), "method");
        echo ";
}
.center-header header #cart, .default-header header #cart{
background-color:";
        // line 1575
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg_mobile"), "method");
        echo ";
}
.journal-menu .mobile-menu > li{
border-color:";
        // line 1578
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-style:";
        // line 1579
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}
}

.inline-button .product-details{
padding-bottom:0;
}

";
        // line 1587
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button", 1 => "block-button"), "method") == "inline-button") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "block"))) {
            // line 1588
            echo "  .product-grid-item .cart{
  display:inline-block !important;
  }
";
        }
        // line 1592
        echo "
";
        // line 1593
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none")) {
            // line 1594
            echo "  .mega-menu .product-grid-item .cart{
  display:none !important;
  }
";
        }
        // line 1598
        echo "
";
        // line 1599
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none")) {
            // line 1600
            echo "  .product-grid-item .cart{
  display:none !important;
  }
";
        }
        // line 1604
        echo "
";
        // line 1605
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_cart", 1 => "block"), "method") == "none")) {
            // line 1606
            echo "  .quickview .product-info .right .cart{
  display:table;
  }
  .product-info .right .cart div .qty,
  .product-info .right .cart div #button-cart{
  display:none;
  }
";
        }
        // line 1614
        echo "
";
        // line 1615
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none")) {
            // line 1616
            echo "  .custom-sections .product-grid-item .product-details .cart{
  display:none !important;
  }
";
        }
        // line 1620
        echo "
";
        // line 1621
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none")) {
            // line 1622
            echo "  .side-column .product-grid-item .product-details .cart{
  display:none !important;
  }
";
        }
        // line 1626
        echo "
";
        // line 1627
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none")) {
            // line 1628
            echo "  #content .journal-carousel .product-grid-item .product-details .cart,
  #top-modules .journal-carousel .product-grid-item .product-details .cart,
  #bottom-modules .journal-carousel .product-grid-item .product-details .cart{
  display:none !important;
  }
";
        }
        // line 1634
        echo "
";
        // line 1635
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_status", 1 => "1"), "method") == "0")) {
            // line 1636
            echo "  .product-info .right .options h3{
  display:none;
  }
  .product-info .right .option-image:first-of-type{
  margin-top:0;
  }
";
        }
        // line 1643
        echo "
.product-info .right .options.push-1 .option-image li.selected span img{
border-color:";
        // line 1645
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_image_border_hover"), "method");
        echo ";
}

.mega-menu-categories .mega-menu-item,
.mega-menu-brands .mega-menu-item,
.mega-menu-html .mega-menu-item,
#header .mega-menu .product-grid-item{
margin-bottom:";
        // line 1652
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-right:last-of-type{
border-right-style:";
        // line 1656
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

html[dir=\"rtl\"].journal-desktop .menu-floated .float-right:last-of-type{
border-color:";
        // line 1660
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
}

.mega-menu > div{
margin-bottom:-";
        // line 1664
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px !important;
margin-right:-";
        // line 1665
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

html[dir=\"rtl\"] .mega-menu-item > div,
html[dir=\"rtl\"] #header .mega-menu .product-wrapper{
margin-right:0;
margin-left:";
        // line 1671
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.mega-menu .mega-menu-column:last-of-type > div{
margin-right:-";
        // line 1675
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu .mega-menu-column.mega-menu-products > div{
margin-left:-";
        // line 1678
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.mega-menu-column > div > h3, .mega-menu .mega-menu-column .menu-cms-block{
margin-right:";
        // line 1682
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu-column > div > h3, html[dir=\"rtl\"] .mega-menu .mega-menu-column .menu-cms-block{
margin-right:0;
margin-left:";
        // line 1686
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
.mega-menu .mega-menu-column:last-of-type > h3,
.mega-menu .mega-menu-column:last-of-type > div > h3,
.mega-menu .mega-menu-column:last-of-type > .menu-cms-block,
.mega-menu .mega-menu-column.mega-menu-html-block > div{
margin-right:0;
}

@media only screen and (max-width: 760px) {
.super-menu{
border-width:0;
}
.mega-menu .mega-menu-column > div{
margin-right:-";
        // line 1700
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}
html[dir=\"rtl\"] .mega-menu .mega-menu-column > div{
margin-left:-";
        // line 1703
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
margin-right:0;
}
}

.journal-sf .sf-image .box-content ul{
margin-bottom:-";
        // line 1709
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_section_margin_bottom"), "method");
        echo "px;
margin-right:-";
        // line 1710
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_section_margin_right"), "method");
        echo "px;
}

";
        // line 1713
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_author", 1 => "on"), "method") == "off")) {
            // line 1714
            echo "  .p-author, .p-posted{
  display:none !important;
  }
";
        }
        // line 1718
        echo "
";
        // line 1719
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_date", 1 => "on"), "method") == "off")) {
            // line 1720
            echo "  .p-date{
  display:none !important;
  }
";
        }
        // line 1724
        echo "
";
        // line 1725
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_comments", 1 => "on"), "method") == "off")) {
            // line 1726
            echo "  .p-comment{
  display:none !important;
  }
";
        }
        // line 1730
        echo "
";
        // line 1731
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_author", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_date", 1 => "on"), "method") == "off")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_show_comments", 1 => "on"), "method") == "off"))) {
            // line 1732
            echo "  .comment-date{
  display:none !important;
  }
";
        }
        // line 1736
        echo "




";
        // line 1741
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off")) {
            // line 1742
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-voucher{
  padding-right: 12px;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  margin-top:0;
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-checkout .coupon-voucher .cvr div.checkout-voucher{
  padding-right:0;
  padding-left: 12px;
  }
";
        }
        // line 1757
        echo "
";
        // line 1758
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off")) {
            // line 1759
            echo "  .journal-checkout .coupon-voucher .cvr .checkout-voucher{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  margin-top:0;
  padding-right:0;
  }
  html[dir=\"rtl\"] .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  padding-right:0;
  padding-left: 12px;
  }
";
        }
        // line 1771
        echo "
";
        // line 1772
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off")) {
            // line 1773
            echo "  .journal-checkout .coupon-voucher .cvr .checkout-reward{
  display:none;
  }
";
        }
        // line 1777
        echo "


";
        // line 1780
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off"))) {
            // line 1781
            echo "  .journal-checkout .coupon-voucher div.checkout-voucher,
  .journal-checkout .coupon-voucher div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-reward {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }
";
        }
        // line 1791
        echo "
";
        // line 1792
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1793
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-reward,
  .journal-checkout .coupon-voucher .cvr div.checkout-coupon{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-voucher {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }
";
        }
        // line 1803
        echo "
";
        // line 1804
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1805
            echo "  .journal-checkout .coupon-voucher .cvr div.checkout-voucher,
  .journal-checkout .coupon-voucher .cvr div.checkout-reward{
  display:none;
  }
  .journal-checkout .coupon-voucher .cvr div.checkout-coupon {
  padding-right: 0;
  margin-top: 0;
  width:100%;
  }
";
        }
        // line 1815
        echo "
";
        // line 1816
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_coupon_status", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_voucher_status", 1 => "on"), "method") == "off")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_reward_status", 1 => "on"), "method") == "off"))) {
            // line 1817
            echo "  .journal-checkout .coupon-voucher{
  display:none;
  }
";
        }
        // line 1821
        echo "



";
        // line 1825
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "dropdown_shadow", 1 => "none"), "method") == "none")) {
            // line 1826
            echo "  .drop-down ul{
  box-shadow:none !important;
  }
";
        }
        // line 1830
        echo "
";
        // line 1831
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_wishlist", 1 => "inline-block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_product_page_compare", 1 => "inline-block"), "method") == "none"))) {
            // line 1832
            echo "  .product-info .right .wishlist-compare{
  display:none;
  }
";
        }
        // line 1836
        echo "
";
        // line 1837
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_name", 1 => "table"), "method") == "none") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_name", 1 => "table"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_name", 1 => "table"), "method") == "none"))) {
            // line 1838
            echo "  .product-details{
  padding-top:13px;
  }
";
        }
        // line 1842
        echo "
";
        // line 1843
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none") || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none")) || ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none"))) {
            // line 1844
            echo "  .product-grid-item .price + hr,
  .product-grid-item .price + .rating + hr{
  display:block;
  }
";
        }
        // line 1849
        echo "

";
        // line 1851
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_name", 1 => "table"), "method") == "none"))) {
            // line 1852
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1856
        echo "
";
        // line 1857
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_carousel_name", 1 => "table"), "method") == "none"))) {
            // line 1858
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1862
        echo "
";
        // line 1863
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_side_carousel_name", 1 => "table"), "method") == "none"))) {
            // line 1864
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1868
        echo "
";
        // line 1869
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_cs_name", 1 => "table"), "method") == "none"))) {
            // line 1870
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1874
        echo "
";
        // line 1875
        if (((((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_cart", 1 => "block"), "method") == "none") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_wishlist", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_compare", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_price", 1 => "inline-block"), "method") == "none")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_grid_main_menu_name", 1 => "table"), "method") == "none"))) {
            // line 1876
            echo "  .product-details{
  display:none;
  }
";
        }
        // line 1880
        echo "

";
        // line 1882
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "contacts_display", 1 => "off"), "method") == "on")) {
            // line 1883
            echo "  footer .contacts{
  text-align:center;
  }
  footer .contacts-left,
  html[dir=\"rtl\"] footer .contacts-left{
  float: none;
  }
  footer .contacts-right{
  display: none;
  }
";
        }
        // line 1894
        echo "
.has-cta .rotator-tex{
line-height:";
        // line 1896
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cta_button_height"), "method");
        echo "px;
}

footer .contacts .hint--top:before{
border-top-color: ";
        // line 1900
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_tooltip_bg_color"), "method");
        echo ";
}


.side-column .box-category,
.side-column .box-content,
.side-column .box-content > div,
.side-column .box-content > ul > li:last-of-type,
.side-column .oc-module .product-grid-item:last-of-type{
border-bottom-left-radius: inherit;
border-bottom-right-radius: inherit;
border-radius:inherit;
}


.journal-sf ul li label:hover{
color:";
        // line 1916
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_active_text"), "method");
        echo ";
}
.sf-icon:before{
border-top-color:";
        // line 1919
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "reset_tip_bg"), "method");
        echo ";
}

/*
.journal-sf ul li label:hover img{
border-color:";
        // line 1924
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_active_border"), "method");
        echo ";
} */

.sf-price .value:after{
border-bottom-color:";
        // line 1928
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_price_tip"), "method");
        echo ";
}

.mobile-trigger{
background-color:";
        // line 1932
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_bg_color"), "method");
        echo ";
}


.journal-header-default .links > a{
border-bottom-color: transparent;
}

@media only screen and (max-width: 760px) {
.super-menu{
background-color:";
        // line 1942
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_bg"), "method");
        echo ";
}
.journal-header-default .links > a{
border-bottom-color: ";
        // line 1945
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo ";
}
}
.nav-numbers a:hover,
.nav-numbers li.active a{
-webkit-backface-visibility: hidden;
-webkit-transform: scale(";
        // line 1951
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
-moz-transform: scale(";
        // line 1952
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
-ms-transform: scale(";
        // line 1953
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
transform: scale(";
        // line 1954
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "text_rotator_bullet_scale"), "method");
        echo ");
}
.headline-mode .nav-numbers a:hover,
.headline-mode .nav-numbers li.active a{
-webkit-backface-visibility: hidden;
-webkit-transform: scale(";
        // line 1959
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
-moz-transform: scale(";
        // line 1960
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
-ms-transform: scale(";
        // line 1961
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
transform: scale(";
        // line 1962
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "headline_bullet_scale"), "method");
        echo ");
}
.tp-bullets.simplebullets.round .bullet.selected,
.tp-bullets.simplebullets.round .bullet:hover,
.journal-simple-slider .owl-controls .owl-page.active span,
.journal-simple-slider .owl-controls.clickable .owl-page:hover span{
transform: scale(";
        // line 1968
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "slider_bullet_scale"), "method");
        echo ");
}

.swiper-pagination-bullet:hover, .swiper-pagination-bullet-active{
transform: scale(";
        // line 1972
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_bullet_scale"), "method");
        echo ");
}

@media only screen and (max-width: 980px) {
.journal-header-default .mega-menu{
width: 100%;
}
}

@media only screen and (max-width: 760px) {
.journal-header-center .journal-secondary{
background-color:";
        // line 1983
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_bg_color"), "method");
        echo ";
}
}

.mega-menu{
max-width:";
        // line 1988
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
}

@media only screen and (max-width: 760px){
.bottom-menu-bar #header .top-menu > li{
border-color:";
        // line 1993
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_border_color"), "method");
        echo ";
}
.bottom-menu-bar #header .journal-links{
background-color:";
        // line 1996
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menu_bg_color"), "method");
        echo ";
}
.bottom-menu-bar .journal-header-center .journal-secondary {
border-top-width: 0;
}
.bottom-menu-bar #header .journal-links ul.top-menu > li{
border-color:";
        // line 2002
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_border_color"), "method");
        echo ";
}
.bottom-menu-bar #header div.journal-links, .bottom-menu-bar #header .journal-links a:hover{
background-color:";
        // line 2005
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_bg_color"), "method");
        echo ";
}
.bottom-menu-bar #header .journal-links ul.top-menu > li > a,
.bottom-menu-bar #header .journal-links ul.top-menu > li > a:hover,
.bottom-menu-bar #header .journal-links ul.top-menu > li > .no-link{
color:";
        // line 2010
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "bottom_bar_color"), "method");
        echo ";
}
}

.boxed-header .is-sticky .header {
max-width:";
        // line 2015
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method");
        echo "px;
left: 50%;
transform: translateX(-50%);
}

";
        // line 2020
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_style", 1 => "default"), "method") == "menu")) {
            // line 2021
            echo "  .is-sticky .super-menu, .is-sticky .journal-menu-bg {
  box-shadow: none;
  }
";
        }
        // line 2025
        echo "
";
        // line 2026
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_style", 1 => "default"), "method") == "menu") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_menu_off", 1 => "0"), "method") == "1"))) {
            // line 2027
            echo "  html.boxed-header .is-sticky .header {
  max-width:100%;
  left:0;
  transform: translateX(0);
  }
";
        }
        // line 2033
        echo "

.bottom-menu-bar #header .journal-links .top-menu .top-dropdown li:last-of-type::after{
color:";
        // line 2036
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo ";
}

@media only screen and (min-width : 760px) and (max-width: 980px) {
.mobile-menu-on-tablet .mobile-menu > li > ul,
.mobile-menu-on-tablet .mobile-menu > li > .mega-menu{
border-style:";
        // line 2042
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_type"), "method");
        echo ";
border-color:";
        // line 2043
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_color"), "method");
        echo ";
}
.mobile-menu-on-tablet ul.menu-centered{
height:auto;
}
}

@media only screen and (max-width: 760px){
.mobile-menu > li > ul,
.mobile-menu > li > .mega-menu{
border-style:";
        // line 2053
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_type"), "method");
        echo ";
border-color:";
        // line 2054
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_mobile_border_color"), "method");
        echo ";
}
}

@media only screen and (min-width: 760px) {
.journal-header-mega #search {
max-width: ";
        // line 2060
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_width", 1 => "100"), "method");
        echo "%;
left: ";
        // line 2061
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_offset", 1 => "0"), "method");
        echo "px;
}
.journal-header-center .j-100{
height:";
        // line 2064
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method");
        echo "px;
}
.journal-header-center .journal-menu-bg{
top:";
        // line 2067
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method") + 40) + $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method")) - 40);
        echo "px;
}
.journal-header-center .top-bar > .j-min, .journal-header-center .top-menu > li > .m-item, .journal-header-center .journal-top-header{
height:";
        // line 2070
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .journal-menu,
.journal-header-center .journal-menu-bg,
.journal-header-center .mobile-trigger,
ul.menu-centered{
height:";
        // line 2076
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .mobile-trigger,
.journal-header-center .super-menu > li > a{
line-height:";
        // line 2080
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_menu_height", 1 => "40"), "method");
        echo "px;
}
.journal-header-center .journal-language form .dropdown-menu,
.journal-header-center .journal-currency form .dropdown-menu{
top:";
        // line 2084
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_height", 1 => "40"), "method");
        echo "px;
}

.sticky-default.center-header .is-sticky .journal-header-center .j-100{
height:";
        // line 2088
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_height_input", 1 => ""), "method");
        echo "px;
}
.sticky-default.center-header .is-sticky .journal-menu-bg{
top:";
        // line 2091
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_height_input", 1 => ""), "method");
        echo "px;
}

.is-sticky .journal-header-center .journal-menu,
.is-sticky .journal-header-center .journal-menu-bg,
.is-sticky .journal-header-center .mobile-trigger{
height:";
        // line 2097
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_main_menu_height", 1 => "40"), "method");
        echo "px;
}
.is-sticky .journal-header-center .mobile-trigger,
.is-sticky .journal-header-center .super-menu > li > a{
line-height:";
        // line 2101
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_main_menu_height", 1 => "40"), "method");
        echo "px;
}
}

@media only screen and (max-width: 760px){
#header .journal-logo{
height:";
        // line 2107
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input_phone", 1 => ""), "method");
        echo "px !important;
}
}

.center-header body.is-sticky .header-assets.top-bar{
background-color:";
        // line 2112
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_bg_color"), "method");
        echo ";
}

";
        // line 2115
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "logo_on_phone", 1 => "on"), "method") == "off")) {
            // line 2116
            echo "  @media only screen and (max-width: 760px){
  #header .journal-logo {
  display: none;
  }
  .journal-header-center .journal-secondary {
  border-bottom-width: 0;
  }
  }
";
        }
        // line 2125
        echo "

";
        // line 2127
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_animate", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_on", 1 => "phone"), "method") == "tablet"))) {
            // line 2128
            echo "  @media only screen and (min-width: 980px){
  .super-menu>li:hover .mega-menu,
  .super-menu>li:hover > ul{
  display:block !important;
  }
  }
";
        }
        // line 2135
        echo "
";
        // line 2136
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mega_menu_animate", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_on", 1 => "phone"), "method") == "phone"))) {
            // line 2137
            echo "  @media only screen and (min-width: 760px){
  .super-menu>li:hover .mega-menu,
  .super-menu>li:hover > ul{
  display:block !important;
  }
  }
";
        }
        // line 2144
        echo "
";
        // line 2145
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_box_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2146
            echo "  .header{
  box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
  }
";
        }
        // line 2150
        echo "
@media only screen and (min-width : 760px) and (max-width: 980px) {
.mobile-menu-on-tablet .journal-header-center .journal-menu{
height:auto;
}
.mobile-menu-on-tablet .journal-header-center .super-menu > li > a{
line-height:40px;
}
}

";
        // line 2160
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_show_category_images", 1 => "on"), "method") == "off")) {
            // line 2161
            echo "  @media only screen and (max-width: 760px){
  .mega-menu-categories .mega-menu-item ul,
  .mega-menu-categories .mega-menu-item.menu-image-left ul{
  width:100%;
  }
  .mega-menu-categories .mega-menu-item img {
  display: none !important;
  }
  }
";
        }
        // line 2171
        echo "
";
        // line 2172
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "remove_top_bar", 1 => "on"), "method") == "off")) {
            // line 2173
            echo "  @media only screen and (min-width: 760px){
  .header-assets.top-bar,
  .journal-top-header{
  display:none;
  }
  .journal-header-center .journal-menu-bg{
  top:";
            // line 2179
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "header_height_input", 1 => "100"), "method");
            echo "px;
  }
  }
";
        }
        // line 2183
        echo "

";
        // line 2185
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_modules_margin", 1 => "on"), "method") == "off")) {
            // line 2186
            echo "  .side-column .box{
  margin-bottom:0;
  }
";
        }
        // line 2190
        echo "

";
        // line 2192
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_price_full", 1 => "inline-block"), "method") == "block")) {
            // line 2193
            echo "  .product-grid-item .price{
  width:100%;
  }
";
        }
        // line 2197
        echo "
";
        // line 2198
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_image_size", 1 => "medium"), "method") == "tiny")) {
            // line 2199
            echo "  .product-grid-item .price{
  width:100%;
  }
";
        }
        // line 2203
        echo "
";
        // line 2204
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_two_per_row", 1 => "on"), "method") == "off")) {
            // line 2205
            echo "  @media only screen and (max-width: 760px){
  .box-sections ul li {
  width: 100%;
  border-right-width: 0;
  }
  .box-sections ul li:nth-last-child(2):nth-child(odd) {
  border-bottom-width: 1px;
  }
  html[dir=\"rtl\"] .box-sections ul li {
  border-right-width: 0 !important;
  }
  }
";
        }
        // line 2218
        echo "

#tabs{
top:";
        // line 2221
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_tabs_content_border:border-width"), "method");
        echo ";
}

.product-grid-item.display-icon .wishlist-icon:before,
.product-grid-item.display-icon .compare-icon:before{
line-height:";
        // line 2226
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_bg_height"), "method");
        echo "px;
}

.journal-header-center #cart .heading i{
height:";
        // line 2230
        echo (40 - ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_border:border-width", 1 => 0), "method") * 2));
        echo "px;
}

.journal-desktop .menu-floated .float-left{
border-right-style:";
        // line 2234
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type"), "method");
        echo ";
}

.column.products > h3{
margin-bottom:";
        // line 2238
        echo (12 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_product_padding"), "method"));
        echo "px;
}
.column.products{
padding-bottom:";
        // line 2241
        echo (12 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_product_padding"), "method"));
        echo "px;
}

.side-column .journal-gallery .box-heading{
margin-bottom:";
        // line 2245
        echo (10 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_gallery_padding"), "method"));
        echo "px;
}

.side-column .box-category > ul li ul li a{
padding-left: ";
        // line 2249
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method"));
        echo "px;
}
.side-column .box-category > ul li ul li ul li a{
padding-left: ";
        // line 2252
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (2 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li a{
padding-left: ";
        // line 2255
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (3 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li ul li a{
padding-left: ";
        // line 2258
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (4 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}
.side-column .box-category > ul li ul li ul li ul li ul li ul li a{
padding-left: ";
        // line 2261
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_link_padding_left"), "method") + (5 * $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_category_sub_left_padding"), "method")));
        echo "px;
}

@media only screen and (max-width: ";
        // line 2264
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.breadcrumb{
padding-left:10px;
}
.super-menu > li:first-of-type{
border-left-width:0;
}
.super-menu > li:last-of-type{
border-right-width:0;
}
html[dir=\"rtl\"] .super-menu > li:first-of-type{
border-left-width:1px;
border-right-width:0;
}
html[dir=\"rtl\"] .super-menu > li:last-of-type{
border-left-width:0;
}
html[dir=\"rtl\"] .super-menu.menu-floated > li:first-of-type
border-right-width:0;
}
}

.super-menu.menu-floated{
border-right-width:1px;
border-left-width:1px;
border-color:";
        // line 2289
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider"), "method");
        echo ";
border-style:";
        // line 2290
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_divider_type", 1 => "solid"), "method");
        echo ";
}

";
        // line 2293
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_fullwidth_divider", 1 => "off"), "method") == "on")) {
            // line 2294
            echo "  .custom-sections .box-heading.box-sections{
  border-left-width:1px;
  border-right-width:1px;
  }
";
        }
        // line 2299
        echo "
";
        // line 2300
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_unite", 1 => "1"), "method") == "0") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display", 1 => "icon"), "method") == "icon")) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position", 1 => "button"), "method") == "button"))) {
            // line 2301
            echo "
  .product-grid-item .wishlist,
  .product-grid-item .compare{
  padding:0;
  }
  .product-grid-item .button-group{
  display: flex;
  justify-content: center;
  }
";
        }
        // line 2311
        echo "

.custom-sections .box-heading.box-sections{
border-left-style:";
        // line 2314
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cs_title_divider_type"), "method");
        echo ";
}

.journal-carousel:not(.journal-gallery) .box-content .swiper-container{
padding: ";
        // line 2318
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
margin: -";
        // line 2319
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
}

.journal-carousel.arrows-top .swiper-button-prev,
.journal-carousel.arrows-top .swiper-button-next{
margin-top:";
        // line 2324
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_shadow_mask", 1 => ""), "method");
        echo "px;
}

.side-column .journal-carousel.arrows-top .swiper-button-prev,
.side-column .journal-carousel.arrows-top .swiper-button-next,
.related-products.journal-carousel.arrows-top .swiper-button-prev,
.related-products.journal-carousel.arrows-top .swiper-button-next{
margin-top:0;
}

";
        // line 2334
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_top_margin", 1 => "0"), "method") == "20")) {
            // line 2335
            echo "  div#footer{
  margin-top:";
            // line 2336
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_top_margin", 1 => "20"), "method");
            echo "px;
  }
";
        }
        // line 2339
        echo "
";
        // line 2340
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_bottom_margin", 1 => "0"), "method") == "20")) {
            // line 2341
            echo "  div#footer{
  margin-bottom:";
            // line 2342
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_bottom_margin", 1 => "20"), "method");
            echo "px;
  }
";
        }
        // line 2345
        echo "
.extended-container + .boxed-footer #footer{
margin-top:";
        // line 2347
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_custom_top_margin"), "method") - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "container_bottom_spacing"), "method"));
        echo "px;
}


";
        // line 2351
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_title_side_margin", 1 => "on"), "method") == "off")) {
            // line 2352
            echo "  .side-column .journal-carousel .htabs {
  margin-bottom: 0;
  }
  .side-column .arrows-top:not(.journal-gallery) .swiper-button-prev,
  .side-column .arrows-top:not(.journal-gallery) .swiper-button-next {
  margin-top:20px;
  }
";
        }
        // line 2360
        echo "

";
        // line 2362
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_brands_title_align", 1 => "left"), "method") == "center")) {
            // line 2363
            echo "  .mega-menu-brands div > h3 {
  justify-content: center;
  }
";
        }
        // line 2367
        echo "
";
        // line 2368
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_brands_title_align", 1 => "left"), "method") == "right")) {
            // line 2369
            echo "  .mega-menu-brands div > h3 {
  justify-content: flex-end;
  }
";
        }
        // line 2373
        echo "
.side-column .journal-carousel .box-content .swiper-container{
padding:0;
margin:0;
}
html[dir=\"rtl\"] .journal-carousel.arrows-top .swiper-button-next{
right:auto;
left:";
        // line 2380
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_icon_offset_left", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel.arrows-top .swiper-button-prev{
right:auto;
left:";
        // line 2385
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_icon_offset_right", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel:not(.arrows-top) .swiper-button-next{
right:auto;
left:";
        // line 2390
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_side_icon_offset_left", 1 => ""), "method");
        echo "px;
}

html[dir=\"rtl\"] .journal-carousel:not(.arrows-top) .swiper-button-prev{
left:auto;
right:";
        // line 2395
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "carousel_side_icon_offset_right", 1 => ""), "method");
        echo "px;
}

";
        // line 2398
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_align", 1 => "left"), "method") == "center")) {
            // line 2399
            echo "  html[dir=\"rtl\"] .post-button{
  text-align:center;
  }
";
        }
        // line 2403
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_button_align", 1 => "left"), "method") == "right")) {
            // line 2404
            echo "  html[dir=\"rtl\"] .post-button{
  text-align:left;
  }
";
        }
        // line 2408
        echo "
";
        // line 2409
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_module_button_align", 1 => "left"), "method") == "center")) {
            // line 2410
            echo "  html[dir=\"rtl\"] .post-module .post-button{
  text-align:center;
  }
";
        }
        // line 2414
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_module_button_align", 1 => "left"), "method") == "right")) {
            // line 2415
            echo "  html[dir=\"rtl\"] .post-module .post-button{
  text-align:left;
  }
";
        }
        // line 2419
        echo "
";
        // line 2420
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_title_align", 1 => "left"), "method") == "center")) {
            // line 2421
            echo "  html[dir=\"rtl\"] .mega-menu-categories .mega-menu-item h3 a{
  text-align:center;
  justify-content: center;
  }
  .mega-menu-categories .mega-menu-item h3 a{
  justify-content: center;
  }
";
        }
        // line 2429
        echo "
";
        // line 2430
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_title_align", 1 => "left"), "method") == "right")) {
            // line 2431
            echo "  html[dir=\"rtl\"] .mega-menu-categories .mega-menu-item h3 a{
  text-align:left;
  justify-content: flex-start;
  }
  .mega-menu-categories .mega-menu-item h3 a{
  justify-content: flex-end;
  }
";
        }
        // line 2439
        echo "
";
        // line 2440
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "left")) {
            // line 2441
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:right;
  }
";
        }
        // line 2445
        echo "
";
        // line 2446
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "right")) {
            // line 2447
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:left;
  }
";
        }
        // line 2451
        echo "
";
        // line 2452
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_links_align", 1 => "left"), "method") == "center")) {
            // line 2453
            echo "  html[dir=\"rtl\"] footer .column-menu-wrap > ul li{
  text-align:center;
  }
";
        }
        // line 2457
        echo "
";
        // line 2458
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "left")) {
            // line 2459
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:right;
  }
";
        }
        // line 2463
        echo "
";
        // line 2464
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "right")) {
            // line 2465
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:left;
  }
";
        }
        // line 2469
        echo "
";
        // line 2470
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_titles_align", 1 => "left"), "method") == "center")) {
            // line 2471
            echo "  html[dir=\"rtl\"] footer .column>h3{
  text-align:center;
  }
";
        }
        // line 2475
        echo "

";
        // line 2477
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_title_overflow", 1 => "on"), "method") == "off")) {
            // line 2478
            echo "  .blog-post .heading-title{
  white-space:normal;
  height:auto;
  line-height:1.2;
  padding:8px 0;
  }
";
        }
        // line 2485
        echo "
";
        // line 2486
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "module_title_overflow", 1 => "on"), "method") == "off")) {
            // line 2487
            echo "  .post-module .box-heading{
  white-space:normal;
  height:auto;
  line-height:1.2;
  padding-top:8px;
  padding-bottom:8px;
  }
";
        }
        // line 2495
        echo "
.posts.blog-list-view .post-item-details{
width: ";
        // line 2497
        echo (100 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_list_image_width", 1 => "33.333333"), "method"));
        echo "%;
}

.side-column .box.cms-blocks .box-heading{
margin-bottom:";
        // line 2501
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "side_cms_margin"), "method");
        echo "px;
}

@media only screen and (min-width: ";
        // line 2504
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.safari5 #footer,
.safari5.boxed-header header{
width: ";
        // line 2507
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}
.tp-banner{
height:100% !important;
}
}

";
        // line 2514
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "logo_ratio", 1 => "on"), "method") == "off")) {
            // line 2515
            echo "  #logo a img{
  height:auto;
  }
";
        }
        // line 2519
        echo "
@media only screen and (max-width: ";
        // line 2520
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {

.tp-banner-container{
height:auto !important;
}

.side-column .oc-module .product-details {
max-width: 130px;
}
.checkout-page #content {
padding-left: 20px;
padding-right: 20px;
}
}

@media only screen and (max-width: 760px){
.product-grid-item .has-countdown + .product-details .rating{
top:-50px;
}
.product-grid-item .image.has-countdown .wishlist,
.product-grid-item .image.has-countdown .compare{
margin-bottom:42px;
}
}

";
        // line 2545
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "always")) {
            // line 2546
            echo "  .product-grid-item .countdown,
  .product-list-item .countdown {
  opacity: 1;
  visibility: visible;
  }
  .product-grid-item .has-countdown + .product-details .rating{
  top:-70px;
  }
  .product-grid-item .image.has-countdown .wishlist,
  .product-grid-item .image.has-countdown .compare{
  margin-bottom:42px;
  }
";
        }
        // line 2559
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "hover")) {
            // line 2560
            echo "  .product-grid-item:hover .countdown,
  .product-list-item:hover .countdown {
  opacity: 1;
  visibility: visible;
  }
  .product-grid-item:hover .has-countdown + .product-details .rating{
  top:-70px;
  }
  .product-grid-item:hover .image.has-countdown .wishlist,
  .product-grid-item:hover .image.has-countdown .compare{
  margin-bottom:42px;
  }
";
        }
        // line 2573
        echo "
";
        // line 2574
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "hidden")) {
            // line 2575
            echo "  .product-grid-item .countdown,
  .product-list-item .countdown {
  display:none;
  }
";
        }
        // line 2580
        echo "
    
";
        // line 2582
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "hover"), "method") == "hover"))) {
            // line 2583
            echo "  .product-grid-item:hover .has-countdown .quickview-button{
  margin-top:-40px;
  }
";
        }
        // line 2587
        echo "
";
        // line 2588
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "hover"), "method") == "always"))) {
            // line 2589
            echo "  .product-grid-item .has-countdown .quickview-button{
  margin-top:-40px;
  }
";
        }
        // line 2593
        echo "


";
        // line 2596
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_cloud_zoom_inner"), "method") == "0")) {
            // line 2597
            echo "  .zm-viewer{
  display:none;
  border-left:1px solid white;
  }
";
        }
        // line 2602
        echo "
.option li.hint--top:before{
border-top-color:";
        // line 2604
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_push_tooltip_bg"), "method");
        echo ";
}

";
        // line 2607
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "on")) {
            // line 2608
            echo "  @media only screen and (max-width: 470px) {
  .journal-cart{
  background-color:";
            // line 2610
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg"), "method");
            echo ";
  background-color:";
            // line 2611
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg_mobile"), "method");
            echo ";
  }
  }
";
        }
        // line 2615
        echo "
";
        // line 2616
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_header_cart2", 1 => "visible"), "method") == "visible"))) {
            // line 2617
            echo "  @media only screen and (max-width: 470px) {
  .phone-sticky-cart.menu-cart-off .journal-menu .mobile-trigger{
  width:100%;
  }
  header .journal-menu .mobile-trigger {
  width: 50%;
  margin-top: -40px;
  z-index: 3;
  background-color:transparent;
  }
  .journal-cart{
  z-index:2;
  background-color:";
            // line 2629
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_heading_bg"), "method");
            echo "
  }
  }
";
        }
        // line 2633
        echo "
.phone-sticky-cart.phone-sticky-menu:not(.menu-cart-off) .journal-menu{
z-index:1;
}

";
        // line 2638
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "catalog_header_search", 1 => "block"), "method") == "block"))) {
            // line 2639
            echo "  @media only screen and (max-width: 470px){
  div.mobile-trigger, .mobile-menu-on-tablet div.mobile-trigger{
  color:";
            // line 2641
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_trigger_text_color_cart_same_line"), "method");
            echo ";
  }
  div.mobile-trigger:before, .mobile-menu-on-tablet div.mobile-trigger:before{
  color:";
            // line 2644
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_trigger_icon_color_cart_same_line"), "method");
            echo ";
  }
  }
";
        }
        // line 2648
        echo "
.journal-header-center #header .menu-dropdown::before{
border-bottom-color:";
        // line 2650
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_menus_dropdown_bg_color"), "method");
        echo "
}

.header-notice > div{
max-width:";
        // line 2654
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method");
        echo "px;
}

@media only screen and (max-width:";
        // line 2657
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method") + 15);
        echo "px){
.header-notice > div{
padding-left:15px;
padding-right: 15px;
}
.header-notice.floated-icon > div{
padding-bottom:10px;
}
button.close-notice {
right: 8px;
}
html[dir=\"rtl\"] button.close-notice {
right: auto;
left: 8px;
}
}

";
        // line 2674
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "top")) {
            // line 2675
            echo "  .product-grid-item .quickview-button{
  top:0;
  transform: translate(-50%, 0);
  }
";
        }
        // line 2680
        echo "
";
        // line 2681
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_align", 1 => "left"), "method") == "center")) {
            // line 2682
            echo "  .post-item-details .comment-date{
  margin:0 auto;
  }
  .blog-grid-view .post-button{
  align-self:center;
  }
";
        }
        // line 2689
        echo "
";
        // line 2690
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "post_grid_align", 1 => "left"), "method") == "right")) {
            // line 2691
            echo "  .post-item-details .comment-date{
  width:100%;
  }
  .blog-grid-view .post-button{
  align-self:flex-end;
  }
  html[dir=\"rtl\"] .blog-grid-view .post-button{
  align-self:flex-start;
  }
";
        }
        // line 2701
        echo "
";
        // line 2702
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_quickview_align", 1 => "center"), "method") == "bottom")) {
            // line 2703
            echo "  .product-grid-item .quickview-button{
  top:100%;
  transform: translate(-50%, -100%);
  }
";
        }
        // line 2708
        echo "
";
        // line 2709
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_title_align", 1 => "left"), "method") == "center")) {
            // line 2710
            echo "  html[dir=\"rtl\"] .heading-title, html[dir=\"rtl\"] .box-heading:not(.box-sections), html[dir=\"rtl\"] #blogArticle
  .articleHeader h1, html[dir=\"rtl\"] .journal-carousel .htabs.single-tab a, html[dir=\"rtl\"] .oc-filter .panel-heading, html[dir=\"rtl\"] .post-module .box-heading, html[dir=\"rtl\"] #content h1.heading-title{
  text-align:center;
  }
";
        }
        // line 2715
        echo "
";
        // line 2716
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "main_title_align", 1 => "left"), "method") == "right")) {
            // line 2717
            echo "  html[dir=\"rtl\"] .heading-title, html[dir=\"rtl\"] .box-heading:not(.box-sections), html[dir=\"rtl\"] #blogArticle
  .articleHeader h1, html[dir=\"rtl\"] .journal-carousel .htabs.single-tab a, html[dir=\"rtl\"] .oc-filter .panel-heading, html[dir=\"rtl\"] .post-module .box-heading, html[dir=\"rtl\"] #content h1.heading-title{
  text-align:left;
  }
";
        }
        // line 2722
        echo "
";
        // line 2723
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_title_align", 1 => "left"), "method") == "center")) {
            // line 2724
            echo "  html[dir=\"rtl\"] .secondary-title, html[dir=\"rtl\"] #content #review-title{
  text-align:center;
  }
";
        }
        // line 2728
        echo "
";
        // line 2729
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "secondary_title_align", 1 => "left"), "method") == "right")) {
            // line 2730
            echo "  html[dir=\"rtl\"] .secondary-title, html[dir=\"rtl\"] #content #review-title{
  text-align:left;
  }
";
        }
        // line 2734
        echo "

";
        // line 2736
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_to_top_pos", 1 => "right"), "method") == "left")) {
            // line 2737
            echo "  .scroll-top{
  left:5px;
  right:auto;
  }
";
        }
        // line 2742
        echo "
";
        // line 2743
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_side_margin", 1 => "15"), "method") == "0")) {
            // line 2744
            echo "  footer .columns {
  padding-left:0;
  }
  html[dir=\"rtl\"] footer .columns {
  padding-right:0;
  }
";
        }
        // line 2751
        echo "
";
        // line 2752
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2753
            echo "  footer{
  box-shadow: 0 -2px 15px -3px rgba(0, 0, 0, 0.3);
  }
";
        }
        // line 2757
        echo "
";
        // line 2758
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "footer_shadow_type", 1 => "none"), "method") == "none")) {
            // line 2759
            echo "  footer{
  box-shadow: none;
  }
";
        }
        // line 2763
        echo "
";
        // line 2764
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") == "default")) {
            // line 2765
            echo "  .journal-top-header{
  box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
  }
";
        }
        // line 2769
        echo "
";
        // line 2770
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") == "none")) {
            // line 2771
            echo "  .journal-top-header{
  box-shadow:none;
  }
";
        }
        // line 2775
        echo "
";
        // line 2776
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "top_bar_shadow_type", 1 => "none"), "method") != "none")) {
            // line 2777
            echo "  .journal-header-default .links a, .journal-header-default .links .no-link {
  border-bottom-width: 0;
  }
";
        }
        // line 2781
        echo "
/* Content Margin */

@media only screen and (min-width: 760px){
#column-left + #content {
margin-left: ";
        // line 2786
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
}
#column-right + #content {
margin-right: ";
        // line 2789
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
        echo "px;
}

#column-left + #column-right + #content{
margin-left: ";
        // line 2793
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
margin-right: ";
        // line 2794
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
        echo "px;
}
}

/* Tablet Column Width + Content Margin */

@media only screen and (min-width:760px) and (max-width:980px) {
#column-left {
width: ";
        // line 2802
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-right{
width: ";
        // line 2805
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-left + #content {
margin-left: ";
        // line 2808
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-right + #content {
margin-right: ";
        // line 2811
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
#column-left + #column-right + #content{
margin-left: ";
        // line 2814
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
        echo "px;
margin-right: ";
        // line 2815
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
        echo "px;
}
}

/* Extended Layout Margins */

@media only screen and (min-width:760px) and (max-width: ";
        // line 2821
        echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
        echo "px) {
.skin-16 .journal-header-center .journal-search {
padding-left: 30px;
}
.extended-layout #column-left{
padding-left:20px;
}
.extended-layout #column-right{
padding-right:20px;
}
.extended-layout #content,
.extended-layout #column-left + #content,
.extended-layout #column-right + #content{
padding-left:20px;
padding-right:20px;
}
html[dir=\"rtl\"].extended-layout #column-left{
padding-right:20px!important;
}
html[dir=\"rtl\"].extended-layout #column-right{
padding-left:20px !important;
}
html[dir=\"rtl\"].extended-layout #column-left + #content {
margin-right: ";
        // line 2844
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
        echo "px;
margin-left: 0;

}
html[dir=\"rtl\"].extended-layout #column-right + #content {
margin-right: 0;
}
}

.mega-menu .mega-menu-column .menu-cms-block{
margin-bottom:";
        // line 2854
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "menu_categories_item_margin"), "method");
        echo "px;
}

.fly-drop-down ul li{
min-height:";
        // line 2858
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "flyout_menu_item_height", 1 => 40), "method");
        echo "px;
}

@media only screen and (max-width: 760px){
.product-grid-item .rating{
margin-left:";
        // line 2863
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rating_offset_x_phone"), "method");
        echo "px;
}
.product-grid-item .rating{
top:";
        // line 2866
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rating_offset_y_phone"), "method");
        echo "px;
}
}

/* RTL Columns */

";
        // line 2872
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl_columns", 1 => "1"), "method") == "1")) {
            // line 2873
            echo "
  html[dir=\"rtl\"] .flyout-left .fly-mega-menu,
  html[dir=\"rtl\"] .flyout-left .fly-drop-down > ul {
  left: auto;
  right: 100%;
  }
  html[dir=\"rtl\"] .flyout-right .fly-mega-menu,
  html[dir=\"rtl\"] .flyout-right .fly-drop-down > ul {
  left: 100% !important;
  right: auto;
  }
  html[dir=\"rtl\"] .flyout-menu .flyout > ul > li > a i.menu-plus {
  left: 5px;
  right: auto;
  transform: scale(-1);
  }
  html[dir=\"rtl\"] #column-right .flyout-menu .flyout > ul > li > a i.menu-plus {
  left: auto;
  right: 8px;
  transform: scale(1);
  }
  html[dir=\"rtl\"] .flyout-menu .flyout > ul > li > a {
  padding: 7px 12px 7px 25px;
  }
  html[dir=\"rtl\"] #column-right .flyout-menu .flyout > ul > li > a {
  padding: 7px 25px 7px 12px;
  text-align:left;
  }


  html[dir=\"rtl\"] #column-left {
  float: right;
  }
  html[dir=\"rtl\"] #column-right {
  float: left;
  }


  @media only screen and (min-width: 760px){

  html[dir=\"rtl\"] #column-left {
  padding: 20px 20px 20px 0;
  }
  html[dir=\"rtl\"] #column-right {
  padding: 20px 0 20px 20px;
  }

  html[dir=\"rtl\"] #column-left + #content {
  margin-right: ";
            // line 2921
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
            echo "px;
  margin-left: 0;

  }
  html[dir=\"rtl\"] #column-right + #content {
  margin-left: ";
            // line 2926
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
            echo "px;
  margin-right: 0;
  }

  html[dir=\"rtl\"] #column-left + #column-right + #content{
  margin-right: ";
            // line 2931
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => 220), "method");
            echo "px;
  margin-left: ";
            // line 2932
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => 220), "method");
            echo "px;
  }

  }

  @media only screen and (min-width : 760px) and (max-width: 980px) {

  html[dir=\"rtl\"] #column-left + #content {
  margin-right: ";
            // line 2940
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left:0;
  }
  html[dir=\"rtl\"] #column-right + #content {
  margin-left: ";
            // line 2944
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-right:0;
  }
  html[dir=\"rtl\"] #column-left + #column-right + #content{
  margin-right: ";
            // line 2948
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left: ";
            // line 2949
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width_tablet", 1 => 220), "method");
            echo "px;
  }

  html[dir=\"rtl\"].extended-layout #column-left + #content {
  margin-right: ";
            // line 2953
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width_tablet", 1 => 220), "method");
            echo "px;
  margin-left: 0;

  }
  }

  @media only screen and (min-width: ";
            // line 2959
            echo ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width"), "method") + 15);
            echo "px) {
  html[dir=\"rtl\"].extended-layout #column-left{
  padding-right:0;
  }
  html[dir=\"rtl\"].extended-layout #column-right{
  padding-left:0;
  }
  html[dir=\"rtl\"].extended-layout #column-right + #content {
  padding-left: 20px;
  padding-right: 0;
  }
  html[dir=\"rtl\"].extended-layout #column-left + #content {
  padding-right: 20px;
  padding-left: 0;
  }
  }

";
        }
        // line 2977
        echo "

.refine-images::before,
#refine-images::before,
.category-list::before{
content:\"";
        // line 2982
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_text", 1 => ""), "method");
        echo "\";
margin-right:";
        // line 2983
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => ""), "method");
        echo "px;
}
";
        // line 2985
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_text_status", 1 => "none"), "method") == "none")) {
            // line 2986
            echo "  .refine-images::before,
  #refine-images::before,
  .category-list::before{
  display:none;
  }
";
        }
        // line 2992
        echo ".refine-image {
padding-right: ";
        // line 2993
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
margin-bottom: ";
        // line 2994
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
}
.refine-images {
margin-right: -";
        // line 2997
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
        echo "px;
margin-bottom: ";
        // line 2998
        echo (15 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method"));
        echo "px;;
}

.product-grid-item {
margin-bottom: ";
        // line 3002
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}
.product-wrapper,
.ias-button,
.ias-loader,
.ias-noneleft{
margin-right: ";
        // line 3008
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}
.ias-button,
.ias-loader,
.ias-noneleft{
margin-top: ";
        // line 3013
        echo (20 - $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method"));
        echo "px;
}
.product-grid, #content .box-product{
margin-right: -";
        // line 3016
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "20"), "method");
        echo "px;
}

/* Mobile Product Spacing */

@media only screen and (max-width: 760px){
#cart .heading i::before{
color:";
        // line 3023
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_icon_mobile"), "method");
        echo ";
}
#cart .heading i{
background-color:";
        // line 3026
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "cart_icon_bg_mobile"), "method");
        echo ";
}
div#container,
.home-page div#container {
margin-top: 0;
margin-bottom: 0;
box-shadow:none;
}
.product-grid-item:not(.swiper-slide) {
margin-bottom: ";
        // line 3035
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
.product-grid-item:not(.swiper-slide) .product-wrapper,
.ias-button,
.ias-loader,
.ias-noneleft{
margin-right: ";
        // line 3041
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
.product-grid, #content .box-product{
margin-right: -";
        // line 3044
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing_mobile", 1 => "20"), "method");
        echo "px;
}
}

.button:active{
box-shadow:";
        // line 3049
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "button_shadow_active"), "method");
        echo ";
}

#column-left .oc-module .product-details{
max-width:";
        // line 3053
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "left_column_width", 1 => "220"), "method") - 220) + 145);
        echo "px;
}

#column-right .oc-module .product-details{
max-width:";
        // line 3057
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "right_column_width", 1 => "220"), "method") - 220) + 145);
        echo "px;
}


";
        // line 3061
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-image"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-attachment"), "method") == "fixed"))) {
            // line 3062
            echo "  .mobile body,
  .tablet body{
  background-image:none;
  }
  .mobile body::before,
  .tablet body::before{
  content: \"\";
  top: 0;
  left: 0;
  right: 0;
  bottom:0;
  width: 100%;
  height: 100vh;
  position: fixed;
  background-image: ";
            // line 3076
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image:background-image"), "method");
            echo ";
  background-attachment: scroll;
  background-size: initial;
  background-repeat: inherit;
  background-position: center top;
  z-index:-1;
  }
";
        }
        // line 3084
        echo "
";
        // line 3085
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-image"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-attachment"), "method") == "fixed"))) {
            // line 3086
            echo "  .mobile.home-page body,
  .tablet.home-page body{
  background-image:none;
  }
  .mobile.home-page body::before,
  .tablet.home-page body::before{
  content: \"\";
  top: 0;
  left: 0;
  right: 0;
  bottom:0;
  width: 100%;
  height: 100vh;
  position: fixed;
  background-image: ";
            // line 3100
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "body_bg_image_home:background-image"), "method");
            echo ";
  background-attachment: scroll;
  background-size: initial;
  background-repeat: inherit;
  background-position: center top;
  z-index:-1;
  }
";
        }
        // line 3108
        echo "
/* Custom CSS */
";
        // line 3110
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_css"), "method");
        echo "

";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/assets/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5024 => 3110,  5020 => 3108,  5009 => 3100,  4993 => 3086,  4991 => 3085,  4988 => 3084,  4977 => 3076,  4961 => 3062,  4959 => 3061,  4952 => 3057,  4945 => 3053,  4938 => 3049,  4930 => 3044,  4924 => 3041,  4915 => 3035,  4903 => 3026,  4897 => 3023,  4887 => 3016,  4881 => 3013,  4873 => 3008,  4864 => 3002,  4857 => 2998,  4853 => 2997,  4847 => 2994,  4843 => 2993,  4840 => 2992,  4832 => 2986,  4830 => 2985,  4825 => 2983,  4821 => 2982,  4814 => 2977,  4793 => 2959,  4784 => 2953,  4777 => 2949,  4773 => 2948,  4766 => 2944,  4759 => 2940,  4748 => 2932,  4744 => 2931,  4736 => 2926,  4728 => 2921,  4678 => 2873,  4676 => 2872,  4667 => 2866,  4661 => 2863,  4653 => 2858,  4646 => 2854,  4633 => 2844,  4607 => 2821,  4598 => 2815,  4594 => 2814,  4588 => 2811,  4582 => 2808,  4576 => 2805,  4570 => 2802,  4559 => 2794,  4555 => 2793,  4548 => 2789,  4542 => 2786,  4535 => 2781,  4529 => 2777,  4527 => 2776,  4524 => 2775,  4518 => 2771,  4516 => 2770,  4513 => 2769,  4507 => 2765,  4505 => 2764,  4502 => 2763,  4496 => 2759,  4494 => 2758,  4491 => 2757,  4485 => 2753,  4483 => 2752,  4480 => 2751,  4471 => 2744,  4469 => 2743,  4466 => 2742,  4459 => 2737,  4457 => 2736,  4453 => 2734,  4447 => 2730,  4445 => 2729,  4442 => 2728,  4436 => 2724,  4434 => 2723,  4431 => 2722,  4424 => 2717,  4422 => 2716,  4419 => 2715,  4412 => 2710,  4410 => 2709,  4407 => 2708,  4400 => 2703,  4398 => 2702,  4395 => 2701,  4383 => 2691,  4381 => 2690,  4378 => 2689,  4369 => 2682,  4367 => 2681,  4364 => 2680,  4357 => 2675,  4355 => 2674,  4335 => 2657,  4329 => 2654,  4322 => 2650,  4318 => 2648,  4311 => 2644,  4305 => 2641,  4301 => 2639,  4299 => 2638,  4292 => 2633,  4285 => 2629,  4271 => 2617,  4269 => 2616,  4266 => 2615,  4259 => 2611,  4255 => 2610,  4251 => 2608,  4249 => 2607,  4243 => 2604,  4239 => 2602,  4232 => 2597,  4230 => 2596,  4225 => 2593,  4219 => 2589,  4217 => 2588,  4214 => 2587,  4208 => 2583,  4206 => 2582,  4202 => 2580,  4195 => 2575,  4193 => 2574,  4190 => 2573,  4175 => 2560,  4173 => 2559,  4158 => 2546,  4156 => 2545,  4128 => 2520,  4125 => 2519,  4119 => 2515,  4117 => 2514,  4107 => 2507,  4101 => 2504,  4095 => 2501,  4088 => 2497,  4084 => 2495,  4074 => 2487,  4072 => 2486,  4069 => 2485,  4060 => 2478,  4058 => 2477,  4054 => 2475,  4048 => 2471,  4046 => 2470,  4043 => 2469,  4037 => 2465,  4035 => 2464,  4032 => 2463,  4026 => 2459,  4024 => 2458,  4021 => 2457,  4015 => 2453,  4013 => 2452,  4010 => 2451,  4004 => 2447,  4002 => 2446,  3999 => 2445,  3993 => 2441,  3991 => 2440,  3988 => 2439,  3978 => 2431,  3976 => 2430,  3973 => 2429,  3963 => 2421,  3961 => 2420,  3958 => 2419,  3952 => 2415,  3950 => 2414,  3944 => 2410,  3942 => 2409,  3939 => 2408,  3933 => 2404,  3931 => 2403,  3925 => 2399,  3923 => 2398,  3917 => 2395,  3909 => 2390,  3901 => 2385,  3893 => 2380,  3884 => 2373,  3878 => 2369,  3876 => 2368,  3873 => 2367,  3867 => 2363,  3865 => 2362,  3861 => 2360,  3851 => 2352,  3849 => 2351,  3842 => 2347,  3838 => 2345,  3832 => 2342,  3829 => 2341,  3827 => 2340,  3824 => 2339,  3818 => 2336,  3815 => 2335,  3813 => 2334,  3800 => 2324,  3792 => 2319,  3788 => 2318,  3781 => 2314,  3776 => 2311,  3764 => 2301,  3762 => 2300,  3759 => 2299,  3752 => 2294,  3750 => 2293,  3744 => 2290,  3740 => 2289,  3712 => 2264,  3706 => 2261,  3700 => 2258,  3694 => 2255,  3688 => 2252,  3682 => 2249,  3675 => 2245,  3668 => 2241,  3662 => 2238,  3655 => 2234,  3648 => 2230,  3641 => 2226,  3633 => 2221,  3628 => 2218,  3613 => 2205,  3611 => 2204,  3608 => 2203,  3602 => 2199,  3600 => 2198,  3597 => 2197,  3591 => 2193,  3589 => 2192,  3585 => 2190,  3579 => 2186,  3577 => 2185,  3573 => 2183,  3566 => 2179,  3558 => 2173,  3556 => 2172,  3553 => 2171,  3541 => 2161,  3539 => 2160,  3527 => 2150,  3521 => 2146,  3519 => 2145,  3516 => 2144,  3507 => 2137,  3505 => 2136,  3502 => 2135,  3493 => 2128,  3491 => 2127,  3487 => 2125,  3476 => 2116,  3474 => 2115,  3468 => 2112,  3460 => 2107,  3451 => 2101,  3444 => 2097,  3435 => 2091,  3429 => 2088,  3422 => 2084,  3415 => 2080,  3408 => 2076,  3399 => 2070,  3393 => 2067,  3387 => 2064,  3381 => 2061,  3377 => 2060,  3368 => 2054,  3364 => 2053,  3351 => 2043,  3347 => 2042,  3338 => 2036,  3333 => 2033,  3325 => 2027,  3323 => 2026,  3320 => 2025,  3314 => 2021,  3312 => 2020,  3304 => 2015,  3296 => 2010,  3288 => 2005,  3282 => 2002,  3273 => 1996,  3267 => 1993,  3259 => 1988,  3251 => 1983,  3237 => 1972,  3230 => 1968,  3221 => 1962,  3217 => 1961,  3213 => 1960,  3209 => 1959,  3201 => 1954,  3197 => 1953,  3193 => 1952,  3189 => 1951,  3180 => 1945,  3174 => 1942,  3161 => 1932,  3154 => 1928,  3147 => 1924,  3139 => 1919,  3133 => 1916,  3114 => 1900,  3107 => 1896,  3103 => 1894,  3090 => 1883,  3088 => 1882,  3084 => 1880,  3078 => 1876,  3076 => 1875,  3073 => 1874,  3067 => 1870,  3065 => 1869,  3062 => 1868,  3056 => 1864,  3054 => 1863,  3051 => 1862,  3045 => 1858,  3043 => 1857,  3040 => 1856,  3034 => 1852,  3032 => 1851,  3028 => 1849,  3021 => 1844,  3019 => 1843,  3016 => 1842,  3010 => 1838,  3008 => 1837,  3005 => 1836,  2999 => 1832,  2997 => 1831,  2994 => 1830,  2988 => 1826,  2986 => 1825,  2980 => 1821,  2974 => 1817,  2972 => 1816,  2969 => 1815,  2957 => 1805,  2955 => 1804,  2952 => 1803,  2940 => 1793,  2938 => 1792,  2935 => 1791,  2923 => 1781,  2921 => 1780,  2916 => 1777,  2910 => 1773,  2908 => 1772,  2905 => 1771,  2891 => 1759,  2889 => 1758,  2886 => 1757,  2869 => 1742,  2867 => 1741,  2860 => 1736,  2854 => 1732,  2852 => 1731,  2849 => 1730,  2843 => 1726,  2841 => 1725,  2838 => 1724,  2832 => 1720,  2830 => 1719,  2827 => 1718,  2821 => 1714,  2819 => 1713,  2813 => 1710,  2809 => 1709,  2800 => 1703,  2794 => 1700,  2777 => 1686,  2770 => 1682,  2763 => 1678,  2757 => 1675,  2750 => 1671,  2741 => 1665,  2737 => 1664,  2730 => 1660,  2723 => 1656,  2716 => 1652,  2706 => 1645,  2702 => 1643,  2693 => 1636,  2691 => 1635,  2688 => 1634,  2680 => 1628,  2678 => 1627,  2675 => 1626,  2669 => 1622,  2667 => 1621,  2664 => 1620,  2658 => 1616,  2656 => 1615,  2653 => 1614,  2643 => 1606,  2641 => 1605,  2638 => 1604,  2632 => 1600,  2630 => 1599,  2627 => 1598,  2621 => 1594,  2619 => 1593,  2616 => 1592,  2610 => 1588,  2608 => 1587,  2597 => 1579,  2593 => 1578,  2587 => 1575,  2581 => 1572,  2571 => 1565,  2563 => 1560,  2559 => 1559,  2551 => 1554,  2546 => 1551,  2540 => 1548,  2536 => 1547,  2528 => 1542,  2524 => 1541,  2508 => 1527,  2506 => 1526,  2503 => 1525,  2496 => 1521,  2492 => 1520,  2487 => 1517,  2485 => 1516,  2479 => 1513,  2472 => 1509,  2468 => 1508,  2462 => 1505,  2458 => 1504,  2449 => 1498,  2442 => 1494,  2435 => 1490,  2428 => 1486,  2421 => 1482,  2414 => 1478,  2407 => 1474,  2400 => 1470,  2393 => 1466,  2386 => 1462,  2380 => 1459,  2376 => 1458,  2370 => 1455,  2366 => 1454,  2359 => 1450,  2354 => 1447,  2334 => 1429,  2332 => 1428,  2326 => 1425,  2319 => 1421,  2311 => 1416,  2304 => 1412,  2300 => 1410,  2293 => 1405,  2291 => 1404,  2288 => 1403,  2279 => 1396,  2277 => 1395,  2274 => 1394,  2265 => 1387,  2263 => 1386,  2259 => 1384,  2250 => 1377,  2248 => 1376,  2137 => 1268,  2125 => 1259,  2111 => 1247,  2079 => 1219,  2077 => 1218,  2070 => 1214,  2063 => 1210,  2056 => 1205,  2050 => 1201,  2048 => 1200,  2045 => 1199,  2039 => 1195,  2037 => 1194,  2029 => 1189,  2023 => 1186,  2009 => 1175,  2002 => 1171,  1995 => 1166,  1989 => 1162,  1987 => 1161,  1984 => 1160,  1978 => 1156,  1976 => 1155,  1973 => 1154,  1967 => 1150,  1965 => 1149,  1962 => 1148,  1956 => 1144,  1954 => 1143,  1950 => 1141,  1944 => 1137,  1942 => 1136,  1939 => 1135,  1933 => 1131,  1931 => 1130,  1927 => 1128,  1921 => 1124,  1919 => 1123,  1913 => 1120,  1909 => 1118,  1903 => 1114,  1901 => 1113,  1884 => 1099,  1880 => 1097,  1874 => 1093,  1872 => 1092,  1869 => 1091,  1863 => 1087,  1861 => 1086,  1855 => 1083,  1847 => 1078,  1840 => 1074,  1834 => 1070,  1825 => 1063,  1823 => 1062,  1819 => 1060,  1802 => 1046,  1798 => 1044,  1796 => 1043,  1784 => 1034,  1777 => 1030,  1773 => 1028,  1766 => 1023,  1764 => 1022,  1760 => 1020,  1747 => 1009,  1745 => 1008,  1742 => 1007,  1736 => 1003,  1734 => 1002,  1731 => 1001,  1720 => 992,  1718 => 991,  1705 => 980,  1703 => 979,  1697 => 975,  1695 => 974,  1684 => 965,  1682 => 964,  1676 => 961,  1666 => 954,  1662 => 953,  1656 => 950,  1652 => 949,  1646 => 946,  1642 => 944,  1634 => 939,  1630 => 937,  1628 => 936,  1625 => 935,  1614 => 926,  1612 => 925,  1609 => 924,  1603 => 920,  1601 => 919,  1598 => 918,  1592 => 914,  1590 => 913,  1587 => 912,  1581 => 909,  1578 => 908,  1576 => 907,  1570 => 904,  1563 => 899,  1557 => 895,  1555 => 894,  1552 => 893,  1546 => 890,  1540 => 887,  1534 => 884,  1518 => 870,  1516 => 869,  1513 => 868,  1507 => 864,  1505 => 863,  1502 => 862,  1493 => 855,  1491 => 854,  1488 => 853,  1482 => 849,  1480 => 848,  1477 => 847,  1471 => 843,  1469 => 842,  1466 => 841,  1459 => 836,  1457 => 835,  1454 => 834,  1447 => 829,  1445 => 828,  1440 => 825,  1431 => 818,  1429 => 817,  1426 => 816,  1420 => 812,  1418 => 811,  1415 => 810,  1408 => 805,  1406 => 804,  1403 => 803,  1397 => 800,  1391 => 797,  1385 => 794,  1369 => 780,  1367 => 779,  1364 => 778,  1358 => 774,  1356 => 773,  1351 => 770,  1345 => 766,  1343 => 765,  1340 => 764,  1334 => 760,  1332 => 759,  1329 => 758,  1323 => 754,  1321 => 753,  1315 => 749,  1308 => 745,  1304 => 744,  1300 => 743,  1297 => 742,  1295 => 741,  1292 => 740,  1286 => 737,  1279 => 733,  1275 => 732,  1271 => 731,  1268 => 730,  1266 => 729,  1261 => 726,  1254 => 722,  1250 => 721,  1246 => 720,  1243 => 719,  1241 => 718,  1238 => 717,  1231 => 713,  1227 => 712,  1223 => 711,  1220 => 710,  1218 => 709,  1214 => 707,  1201 => 696,  1199 => 695,  1194 => 692,  1183 => 683,  1181 => 682,  1177 => 680,  1164 => 669,  1162 => 668,  1159 => 667,  1153 => 664,  1146 => 660,  1139 => 656,  1124 => 643,  1122 => 642,  1119 => 641,  1112 => 636,  1110 => 635,  1104 => 631,  1098 => 627,  1096 => 626,  1093 => 625,  1087 => 622,  1081 => 619,  1075 => 616,  1059 => 602,  1057 => 601,  1054 => 600,  1047 => 595,  1045 => 594,  1042 => 593,  1033 => 586,  1031 => 585,  1028 => 584,  1022 => 580,  1020 => 579,  1017 => 578,  1011 => 574,  1009 => 573,  1006 => 572,  999 => 567,  997 => 566,  993 => 564,  987 => 560,  985 => 559,  982 => 558,  975 => 553,  973 => 552,  970 => 551,  963 => 546,  961 => 545,  955 => 541,  949 => 537,  947 => 536,  944 => 535,  932 => 525,  930 => 524,  926 => 522,  920 => 519,  917 => 518,  915 => 517,  912 => 516,  906 => 513,  900 => 509,  898 => 508,  895 => 507,  889 => 503,  887 => 502,  884 => 501,  875 => 494,  873 => 493,  870 => 492,  864 => 488,  862 => 487,  857 => 484,  851 => 481,  848 => 480,  846 => 479,  843 => 478,  837 => 475,  831 => 471,  829 => 470,  826 => 469,  820 => 465,  818 => 464,  815 => 463,  806 => 456,  804 => 455,  801 => 454,  795 => 450,  793 => 449,  789 => 447,  783 => 444,  780 => 443,  778 => 442,  775 => 441,  769 => 438,  766 => 437,  764 => 436,  761 => 435,  755 => 431,  753 => 430,  750 => 429,  744 => 425,  742 => 424,  739 => 423,  733 => 419,  731 => 418,  728 => 417,  722 => 413,  720 => 412,  717 => 411,  708 => 404,  706 => 403,  700 => 399,  691 => 392,  689 => 391,  686 => 390,  680 => 386,  678 => 385,  675 => 384,  668 => 379,  666 => 378,  663 => 377,  657 => 374,  651 => 371,  645 => 368,  629 => 354,  627 => 353,  620 => 349,  613 => 345,  607 => 342,  603 => 340,  597 => 336,  595 => 335,  591 => 333,  579 => 323,  577 => 322,  574 => 321,  562 => 311,  560 => 310,  557 => 309,  550 => 304,  548 => 303,  542 => 299,  536 => 295,  534 => 294,  531 => 293,  525 => 290,  522 => 289,  520 => 288,  517 => 287,  511 => 284,  508 => 283,  506 => 282,  501 => 279,  495 => 275,  493 => 274,  490 => 273,  484 => 270,  481 => 269,  479 => 268,  476 => 267,  470 => 264,  467 => 263,  465 => 262,  461 => 260,  455 => 257,  452 => 256,  450 => 255,  447 => 254,  441 => 251,  438 => 250,  436 => 249,  432 => 247,  426 => 243,  424 => 242,  421 => 241,  415 => 237,  413 => 236,  407 => 232,  398 => 225,  396 => 224,  393 => 223,  384 => 216,  382 => 215,  379 => 214,  373 => 210,  371 => 209,  367 => 207,  361 => 203,  359 => 202,  353 => 198,  351 => 197,  345 => 193,  343 => 192,  338 => 189,  332 => 185,  330 => 184,  327 => 183,  316 => 174,  314 => 173,  311 => 172,  301 => 164,  299 => 163,  296 => 162,  289 => 157,  287 => 156,  284 => 155,  274 => 147,  272 => 146,  266 => 142,  260 => 138,  258 => 137,  254 => 135,  243 => 126,  241 => 125,  238 => 124,  227 => 115,  225 => 114,  222 => 113,  216 => 109,  214 => 108,  211 => 107,  205 => 104,  199 => 101,  193 => 97,  191 => 96,  188 => 95,  176 => 86,  170 => 82,  168 => 81,  165 => 80,  153 => 71,  148 => 68,  146 => 67,  142 => 65,  135 => 60,  133 => 59,  126 => 55,  121 => 52,  115 => 48,  113 => 47,  110 => 46,  98 => 36,  96 => 35,  93 => 34,  87 => 31,  84 => 30,  82 => 29,  75 => 25,  70 => 22,  64 => 19,  56 => 14,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* /* Control Panel Settings *//* */
/* {% for selector in selectors %}*/
/*   {% if selector.properties %}*/
/*     {{ selector.selector }} { {{ selector.properties | join(';') }} }*/
/*   {% endif %}*/
/* {% endfor %}*/
/* */
/* /* Swipebox Loader *//* */
/* {% if journal2.settings.get('ajax-loader') %}*/
/*   #swipebox-slider .slide {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   }*/
/*   .mfp-iframe-scaler iframe {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   background-repeat: no-repeat;*/
/*   background-position: center;*/
/*   }*/
/*   .social {*/
/*   background-image: url('image/{{ journal2.settings.get('ajax-loader') }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (min-width: 760px){*/
/* .ui-pnotify{*/
/* width: {{ journal2.settings.get('notification_width', 350) }}px !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('leading_element') %}*/
/*   .home-page #container:before{*/
/*   content: url('image/{{ journal2.settings.get("leading_element") }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_qty_status', 'on') == 'off' %}*/
/*   .product-info .right .cart div .qty{*/
/*   display:none;*/
/*   }*/
/*   .product-info .right .cart div .button{*/
/*   width:100%;*/
/*   }*/
/*   .quickview #button-cart {*/
/*   width: calc(98% - 40px);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('hide_cart', 'off') == 'on' %}*/
/*   .journal-cart{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Site width *//* */
/* #container, #header, #footer, .bottom-footer > div, .bottom-footer.boxed-bar {*/
/* max-width: {{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('breadcrumb_status', 'block') == 'none' %}*/
/*   ul.breadcrumb,*/
/*   .extended-container::before{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('bottom_caption', 'on') == 'off' %}*/
/*   div.lg-sub-html{*/
/*   top:0;*/
/*   bottom:auto;*/
/*   background-color:{{ journal2.settings.get('gallery_bars_bg') }};*/
/*   }*/
/*   .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{*/
/*   bottom:auto;*/
/*   }*/
/*   .lg-toolbar{*/
/*   background-color:transparent;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('pp_bottom_caption', 'on') == 'off' %}*/
/*   .product-page div.lg-sub-html{*/
/*   top:0;*/
/*   bottom:auto;*/
/*   padding: 13px 95px 13px 70px;*/
/*   background-color:{{ journal2.settings.get('pp_gallery_bars_bg') }};*/
/*   }*/
/*   .product-page .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{*/
/*   bottom:auto;*/
/*   }*/
/*   .product-page .lg-toolbar{*/
/*   background-color:transparent;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('pp_bottom_caption', 'on') == 'on' %}*/
/*   .product-page div.lg-sub-html{*/
/*   top:auto;*/
/*   bottom:0;*/
/*   padding: 13px 70px;*/
/*   background-color:{{ journal2.settings.get('pp_gallery_caption_bar_bg') }};*/
/*   }*/
/*   .product-page .lg-toolbar{*/
/*   background-color:{{ journal2.settings.get('pp_gallery_bars_bg') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_options_sold_count_position', 'none') == 'inline-block' %}*/
/*   .product-sold-count.ps-left{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_overflow', 'on') == 'off' %}*/
/*   .product-page .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   min-height:40px;*/
/*   line-height:1.2;*/
/*   padding-bottom:10px;*/
/*   padding-top:10px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('category_page_title_overflow', 'on') == 'off' %}*/
/*   .category-page .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   min-height:40px;*/
/*   line-height:1.2;*/
/*   padding-bottom:10px;*/
/*   padding-top:10px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('hide_category_image', '1') == '0' %}*/
/*   .category-info .image{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /*Notification Position*//* */
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-left' %}*/
/*   .ui-pnotify{*/
/*   left:20px;*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   right:20px;*/
/*   left:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-center' %}*/
/*   .ui-pnotify{*/
/*   left:50%;*/
/*   transform: translateX(-50%);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'top-right' %}*/
/*   .ui-pnotify{*/
/*   right:20px;*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   left:20px;*/
/*   right:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_position', 'top-right') == 'center' %}*/
/*   .ui-pnotify{*/
/*   left:50%;*/
/*   top:50% !important;*/
/*   transform: translate(-50%, -50%);*/
/*   }*/
/*   html[dir="rtl"] .ui-pnotify{*/
/*   right:auto !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('notification_shadow', '0') == '1' %}*/
/*   .ui-pnotify{*/
/*   box-shadow:0px 1px 12px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'hover' %}*/
/*   .ui-pnotify:hover .ui-pnotify-closer{*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'always' %}*/
/*   .ui-pnotify-closer{*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('notification_show_close', 'hover') == 'never' %}*/
/*   .ui-pnotify-closer:hover{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'left' %}*/
/*   .breadcrumb{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'center' %}*/
/*   .breadcrumb{*/
/*   text-align:center*/
/*   }*/
/*   html[dir="rtl"] .breadcrumb{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('breadcrumb_align', 'left') == 'right' %}*/
/*   .breadcrumb{*/
/*   text-align:right;*/
/*   }*/
/*   html[dir="rtl"] .breadcrumb{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Shadow *//* */
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'default' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'default' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .product-grid-item  .product-wrapper{*/
/*   box-shadow: 0 0 18px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .product-grid-item  .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('carousel_product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .journal-carousel .product-grid-item:hover .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('carousel_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('carousel_product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .journal-carousel .product-grid-item .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('carousel_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('carousel_product_grid_box_shadow', 'inherit') == 'none' %}*/
/*   .journal-carousel .product-grid-item .product-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('cs_product_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .custom-sections .product-grid-item .product-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('cs_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'custom' and journal2.settings.get('cs_product_grid_shadow_2', 'hover') == 'always' %}*/
/*   .custom-sections .product-grid-item .product-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('cs_product_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/*   {% if journal2.settings.get('cs_product_grid_box_shadow', 'inherit') == 'none' %}*/
/*     .custom-sections .product-grid-item .product-wrapper{*/
/*     box-shadow: none !important;*/
/*     }*/
/*   {% endif %}*/
/* */
/* */
/* */
/* */
/*   {% if journal2.settings.get('product_grid_latest_label_status', 'block') == 'none' %}*/
/*     .product-grid-item .image .label-latest + .label-sale{*/
/*     top: 5px;*/
/*     margin-top: 0;*/
/*     }*/
/*   {% endif %}*/
/* */
/*   {% if journal2.settings.get('left_column_on_tablet', 'on') == 'off' %}*/
/*     @media only screen and (min-width : 760px) and (max-width: 1024px) {*/
/*     #column-left{*/
/*     display: none;*/
/*     }*/
/*     #column-left + #content,*/
/*     #column-left + #column-right + #content {*/
/*     margin-left:0 !important;*/
/*     }*/
/*     }*/
/*   {% endif %}*/
/* */
/*   {% if journal2.settings.get('right_column_on_tablet', 'on') == 'off' %}*/
/*     @media only screen and (min-width : 760px) and (max-width: 1024px) {*/
/*     #column-right{*/
/*     display: none;*/
/*     }*/
/*     #column-right + #content,*/
/*     #column-left + #column-right + #content {*/
/*     margin-right:0 !important;*/
/*     }*/
/*     }*/
/*   {% endif %}*/
/* */
/* */
/*   {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'text' %}*/
/*     .product-grid-item .cart .button-left-icon:before{*/
/*     display:none;*/
/*     }*/
/*   {% endif %}*/
/* */
/* .product-grid-item .enquiry-button .button i{*/
/* color:{{ journal2.settings.get('product_grid_button_icon:color') }};*/
/* }*/
/* .product-list-item .enquiry-button .button i{*/
/* color:{{ journal2.settings.get('product_list_button_icon:color') }};*/
/* }*/
/* */
/* footer .contacts > div > span .contact-icon:hover{*/
/* background-color:{{ journal2.settings.get('contacts_icon_bg_hover') }};*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .cart .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-grid-item .cart .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-grid-item .cart .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-grid-item .cart .button[data-hint]:after,*/
/*   .product-grid-item .cart .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-grid-item .cart .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .cart .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .cart .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .cart .button-left-icon::before,*/
/*   .product-grid-item .enquiry-button i::before{*/
/*   margin-right: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_position', 'left') == 'left' %}*/
/*   .product-grid-item .cart .button-right-icon{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_icon_position', 'left') == 'right' %}*/
/*   .product-grid-item .cart .button-left-icon{*/
/*   display:none !important;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* BLOG *//* */
/* */
/* {% if journal2.settings.get('post_grid_button_icon_position', 'left') == 'right' or journal2.settings.get('posts_grid_button_icon_position', 'left') == 'right' %}*/
/*   .post-button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .post-button-right-icon{*/
/*   display:inline;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_title_status', 'on') == 'off' %}*/
/*   .one-page-checkout h1.heading-title{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'none' %}*/
/*   .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'default' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'default' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('post_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('post_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('post_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'none' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'default' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/*   .post-item .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'default' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'hover' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: none;*/
/*   }*/
/*   .post-item .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('posts_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('posts_grid_box_shadow', 'none') == 'custom' and journal2.settings.get('posts_grid_shadow_2', 'hover') == 'always' %}*/
/*   .post-item .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('posts_grid_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'none' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'default' and journal2.settings.get('post_list_shadow_2', 'hover') == 'hover' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/*   .blog-list-view .post-wrapper:hover{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'default' and journal2.settings.get('post_list_shadow_2', 'hover') == 'always' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'custom' and journal2.settings.get('post_list_shadow_2', 'hover') == 'hover' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/*   .blog-list-view .post-wrapper:hover{*/
/*   box-shadow: {{ journal2.settings.get('post_list_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_list_box_shadow', 'none') == 'custom' and journal2.settings.get('post_list_shadow_2', 'hover') == 'always' %}*/
/*   .blog-list-view .post-wrapper{*/
/*   box-shadow: {{ journal2.settings.get('post_list_shadow_custom') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_details_tip', 'always') == 'hover' %}*/
/*   .product-details:before {*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   transition: all 0.2s;*/
/*   }*/
/*   .product-grid-item:hover .product-details:before {*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_details_tip', 'always') == 'never' %}*/
/*   .product-details:before {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Quickview*//* */
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'always' %}*/
/*   .product-grid-item .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_status', 'hover') == 'never' %}*/
/*   .product-grid-item .quickview-button {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('product_grid_quickview_status', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .rating{*/
/*   margin-top:-28px;*/
/*   transition: all 0.1s ease-out;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('product_grid_quickview_status', 'hover') == 'always' %}*/
/*   .product-grid-item .rating{*/
/*   margin-top:-28px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_position', 'left') == 'left' %}*/
/*   .product-grid-item .quickview-button .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_position', 'left') == 'right' %}*/
/*   .product-grid-item .quickview-button .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'text' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before,*/
/*   .product-grid-item .quickview-button .button-right-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-grid-item .quickview-button .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-grid-item .quickview-button .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-grid-item .quickview-button [data-hint]:after,*/
/*   .product-grid-item .quickview-button .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-grid-item .quickview-button .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .quickview-button .button-left-icon:before{*/
/*   margin-right: 6px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Grid Wishlist/Compare *//* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'text' %}*/
/*   .product-grid-item .wishlist a i,*/
/*   .product-grid-item .compare a i{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'icon' %}*/
/*   .product-grid-item .button-wishlist-text,*/
/*   .product-grid-item .button-compare-text{*/
/*   display: none;*/
/*   }*/
/*   .product-grid-item .wishlist [data-hint]:after,*/
/*   .product-grid-item .wishlist .hint--top:before,*/
/*   .product-grid-item .compare [data-hint]:after,*/
/*   .product-grid-item .compare .hint--top:before{*/
/*   display:block;*/
/*   }*/
/* */
/*   .product-grid-item .wishlist .hint--top:before,*/
/*   .product-grid-item .compare .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/*   .product-grid-item .wishlist .hint--right:before,*/
/*   .product-grid-item .compare .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/*   .product-grid-item .wishlist .hint--left:before,*/
/*   .product-grid-item .compare .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_grid_wishlist_icon_tip_bg') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_display', 'text') == 'both' %}*/
/*   .product-grid-item .wishlist a i,*/
/*   .product-grid-item .compare a i{*/
/*   border:0;*/
/*   background-color:transparent !important;*/
/*   padding:0 5px;*/
/*   }*/
/*   .product-grid-item .wishlist a i:before,*/
/*   .product-grid-item .compare a i:before{*/
/*   line-height:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .product-details .wishlist,*/
/*   .product-grid-item .product-details .compare,*/
/*   .product-list-item .image .wishlist,*/
/*   .product-list-item .image .compare,*/
/*   .product-grid-item .image .button-wishlist-text,*/
/*   .product-grid-item .image .button-compare-text{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_grid_wishlist_icon_on_hover', 'on') == 'on' and journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display', '') == 'icon' %}*/
/*   .product-grid-item .image .wishlist,*/
/*   .product-grid-item .image .compare{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-grid-item:hover .image .wishlist,*/
/*   .product-grid-item:hover .image .compare{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-list-item .cart .button{*/
/*   width:{{ journal2.settings.get('product_list_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_list_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_list_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-list-item .quickview-button .button{*/
/*   width:{{ journal2.settings.get('product_list_quickview_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_list_quickview_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_list_quickview_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_grid_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .cart .button{*/
/*   width:{{ journal2.settings.get('product_grid_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/*   .product-grid-item .cart{*/
/*   height:{{ journal2.settings.get('product_grid_button_height_px') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_button_icon_display', 'icon') == 'icon' %}*/
/*   .product-grid-item .quickview-button .button{*/
/*   width:{{ journal2.settings.get('product_grid_quickview_button_width_px') }}px;*/
/*   height:{{ journal2.settings.get('product_grid_quickview_button_height_px') }}px;*/
/*   line-height:{{ journal2.settings.get('product_grid_quickview_button_height_px') }}px;*/
/*   padding:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product List *//* */
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'hover' %}*/
/*   .product-list-item:hover{*/
/*   box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'always' %}*/
/*   .product-list-item{*/
/*   box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_shadow', 'never') == 'never' %}*/
/*   .product-list-item{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'text' %}*/
/*   .product-list-item .cart .button-left-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'icon' %}*/
/*   .product-list-item .cart .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-list-item .cart .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-list-item .cart .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-list-item .cart .button[data-hint]:after,*/
/*   .product-list-item .cart .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-list-item .cart .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .cart .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .cart .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_list_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_display', 'text') == 'both' %}*/
/*   .product-list-item .cart .button-left-icon:before,*/
/*   .product-list-item .enquiry-button i:before{*/
/*   margin-right: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_position', 'left') == 'left' %}*/
/*   .product-list-item .cart .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_button_icon_position', 'left') == 'right' %}*/
/*   .product-list-item .cart .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product List Quickview*//* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'hover' %}*/
/*   .product-list-item:hover .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'always' %}*/
/*   .product-list-item .quickview-button {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_status', 'hover') == 'never' %}*/
/*   .product-list-item .quickview-button {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_position', 'left') == 'left' %}*/
/*   .product-list-item .quickview-button .button-right-icon{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_position', 'left') == 'right' %}*/
/*   .product-list-item .quickview-button .button-left-icon{*/
/*   display:none;*/
/*   }*/
/*   .button-right-icon:before{*/
/*   margin-left: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'text' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'icon' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   float:none;*/
/*   }*/
/*   .product-list-item .quickview-button .button-right-icon:before{*/
/*   margin-left:0;*/
/*   }*/
/*   .product-list-item .quickview-button .button-cart-text{*/
/*   display:none;*/
/*   }*/
/*   .product-list-item .quickview-button .button[data-hint]:after,*/
/*   .product-list-item .quickview-button .hint--top:before{*/
/*   display:block;*/
/*   }*/
/*   .product-list-item .quickview-button .hint--top:before{*/
/*   border-top-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .quickview-button .hint--right:before{*/
/*   border-right-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/*   .product-list-item .quickview-button .hint--left:before{*/
/*   border-left-color: {{ journal2.settings.get('product_list_quickview_button_tooltip_bg_color') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_list_quickview_button_icon_display', 'text') == 'both' %}*/
/*   .product-list-item .quickview-button .button-left-icon:before{*/
/*   margin-right: 8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* /* Product Page *//* */
/* */
/* #product-gallery.image-additional-grid a{*/
/* width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%;*/
/* }*/
/* */
/* {% if journal2.settings.get('product_page_gallery_carousel', '1') == '0' %}*/
/*   .product-info .left .image-additional{*/
/*   margin-right: -{{ journal2.settings.get('product_page_additional_spacing') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_button_icon_position', 'left') == 'left' %}*/
/*   #button-cart .button-cart-text:after{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_button_icon_position', 'left') == 'right' %}*/
/*   #button-cart .button-cart-text:before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_gallery_carousel_arrows', 'hover') == 'hover' %}*/
/*   .product-info .left .image-additional .swiper-button-prev,*/
/*   .product-info .left .image-additional .swiper-button-next{*/
/*   display:none;*/
/*   }*/
/*   .product-info .left .image-additional:hover .swiper-button-prev,*/
/*   .product-info .left .image-additional:hover .swiper-button-next{*/
/*   display:block;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('boxed_header', '0') == '1' and journal2.settings.get('boxed_header_above', 'on') == 'off' %}*/
/*   @media only screen and (min-width: 980px){*/
/*   #top-modules > div:first-of-type.journal2_slider{*/
/*   margin-top:-{{ journal2.settings.get('boxed_top_spacing') + 120 }}px;*/
/*   position:relative;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .compare-info td{*/
/* border-right-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* table.list{*/
/* border-bottom-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* border-left-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* table.list td{*/
/* border-right-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* border-top-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* */
/* */
/* /* Product Labels*//* */
/* */
/* .label-latest + .label-sale{*/
/* top: {{ journal2.settings.get('label_latest_height') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('label_latest_status', 'always') == 'hover' %}*/
/*   .label-latest{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-latest, .product-list-item:hover .label-latest, .product-info .image:hover .label-latest{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('label_latest_status', 'always') == 'never' %}*/
/*   .label-latest{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('label_special_status', 'always') == 'hover' %}*/
/*   .label-sale{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-sale, .product-list-item:hover .label-sale, .product-info .image:hover .label-sale{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* */
/* */
/* {% endif %}*/
/* {% if journal2.settings.get('out_of_stock_status', 'always') == 'hover' %}*/
/*   .label-outofstock{*/
/*   visibility:hidden;*/
/*   opacity:0;*/
/*   }*/
/*   .product-wrapper:hover .label-outofstock, .product-list-item:hover .label-outofstock, .product-info .image:hover .label-outofstock{*/
/*   visibility:visible;*/
/*   opacity:1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('out_of_stock_status', 'always') == 'never' %}*/
/*   .label-outofstock{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('out_of_stock_style', 'diagonal') == 'normal' %}*/
/*   span.label-outofstock {*/
/*   padding: .4em .55em .3em;*/
/*   transform: translate(5px, 5px) rotate(0deg);*/
/*   min-width:inherit;*/
/*   }*/
/*   html[dir="rtl"] span.label-outofstock {*/
/*   padding: .4em .55em .3em;*/
/*   transform: translate(-5px, 5px) rotate(0deg);*/
/*   min-width:inherit;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_list_latest_label_status', 'block') == 'none' %}*/
/*   .product-list-item .image .label-latest + .label-sale{*/
/*   top: 5px;*/
/*   margin-top: 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* #more-details.hint--top:before{*/
/* border-top-color: {{ journal2.settings.get('quickview_more_details_tip_bg') }};*/
/* }*/
/* */
/* .boxed-header header{*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* }*/
/* .boxed-header .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .boxed-header .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('boxed_menu_off', '1') == '0' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .boxed-header .is-sticky header .header{*/
/*   max-width:{{ journal2.settings.get('site_width') }}px;*/
/*   left: 50%;*/
/*   transform: translateX(-50%);*/
/*   }*/
/*   }*/
/*   .is-sticky .header {*/
/*   box-shadow: none;*/
/*   background: transparent;*/
/*   }*/
/*   .is-sticky .journal-menu-bg {*/
/*   background-color:transparent;*/
/*   background-image:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('pp_gallery_name_overflow', 'on') == 'off' %}*/
/*   div.lg-sub-html > span{*/
/*   white-space:normal;*/
/*   }*/
/*   div.lg-sub-html {*/
/*   padding: 20px;*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .journal-language .dropdown-toggle,*/
/* .journal-currency .dropdown-toggle{*/
/* color:{{ journal2.settings.get('full_text_font_phone') }};*/
/* }*/
/* .journal-header-center #language,*/
/* .journal-header-center #currency{*/
/* border-color:{{ journal2.settings.get('lang_divider_phone') }};*/
/* }*/
/* }*/
/* */
/* .sticky-menu .is-sticky .journal-header-default .header{*/
/* background-color: {{ journal2.settings.get('main_menu_bg_color') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('one_page_phone_required', 'block') == 'none' %}*/
/*   .phone-input label::before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_phone_required', 'block') == 'none' and journal2.settings.get('one_page_show_phone', 'block') == 'none' %}*/
/*   #content.one-page-checkout div fieldset > div.phone-input{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* html[dir="rtl"] .journal-carousel .htabs a:last-of-type{*/
/* border-left-color:{{ journal2.settings.get('carousel_title_divider') }};*/
/* }*/
/* */
/* .boxed-header .journal-header-center .journal-links{*/
/* padding-left: 10px;*/
/* }*/
/* .boxed-header .journal-header-center .journal-search{*/
/* padding-left: 20px;*/
/* }*/
/* .boxed-header .journal-header-center .journal-secondary{*/
/* padding-right: 10px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('cart_header_shadow', 'none') == 'none' %}*/
/*   #cart{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-header-center .journal-center-bg{*/
/* top:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('cart_header_shadow', 'none') == 'default' %}*/
/*   #cart {*/
/*   box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('cart_content_shadow', 'none') == 'none' %}*/
/*   #cart .cart-wrapper{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cart_content_shadow', 'none') == 'default' %}*/
/*   #cart .cart-wrapper {*/
/*   box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('search_shadow', 'none') == 'none' %}*/
/*   #search input{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_shadow', 'none') == 'default' %}*/
/*   #search input{*/
/*   box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_autosuggest_shadow', 'none') == 'none' %}*/
/*   .autocomplete2-suggestions{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_autosuggest_shadow', 'none') == 'default' %}*/
/*   .autocomplete2-suggestions{*/
/*   box-shadow: 0 3px 15px -3px rgba(0, 0, 0, 0.25);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (max-width: 760px) {*/
/* ul.super-menu > li > a,*/
/* ul.super-menu > li:hover > a{*/
/* color:{{ journal2.settings.get('mobile_menu_item_color_phone') }};*/
/* }*/
/* ul.super-menu > li,*/
/* ul.super-menu > li:hover{*/
/* background-color:{{ journal2.settings.get('mobile_menu_item_bg_phone') }};*/
/* }*/
/* .boxed-header .journal-header-center .journal-search,*/
/* .boxed-header .journal-header-center .journal-links{*/
/* padding-left: 0;*/
/* }*/
/* .boxed-header .journal-header-center .journal-cart,*/
/* .boxed-header .journal-header-center .journal-secondary{*/
/* padding-right: 0;*/
/* }*/
/* .button-search{*/
/* background-color:{{ journal2.settings.get('search_button_bg_mobile') }};*/
/* }*/
/* .button-search i:before{*/
/* color:{{ journal2.settings.get('search_icon_color_mobile') }} !important;*/
/* }*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('catalog_grid_compare', 'inline-block') == 'inline-block' %}*/
/*   .product-filter .product-compare {*/
/*   display: flex;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_compare_link_status', 'on') == 'off' %}*/
/*   .product-filter .product-compare{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (max-width: 980px) {*/
/* .mobile-menu-on-tablet ul.super-menu > li > a,*/
/* .mobile-menu-on-tablet ul.super-menu > li:hover > a{*/
/* color:{{ journal2.settings.get('mobile_menu_item_color_phone') }};*/
/* }*/
/* .mobile-menu-on-tablet ul.super-menu > li,*/
/* .mobile-menu-on-tablet ul.super-menu > li:hover{*/
/* background-color:{{ journal2.settings.get('mobile_menu_item_bg_phone') }};*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('responsive_design') == '1' %}*/
/*   @media only screen and (min-width:760px) and (max-width:{{ journal2.settings.get('site_width') + 15 }}px) {*/
/*   .journal-header-center .journal-search{*/
/*   padding-left: 15px;*/
/*   }*/
/*   .journal-header-center .journal-cart{*/
/*   padding-right: 15px;*/
/*   }*/
/*   .journal-header-center .journal-cart{*/
/*   width:calc(25% - 20px);*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-header-center .journal-search{*/
/*   padding-right: 15px;*/
/*   }*/
/*   }*/
/*   @media only screen and (max-width:760px) {*/
/*   .journal-header-center .journal-search,*/
/*   html[dir="rtl"] .journal-header-center .journal-search{*/
/*   padding-left: 0;*/
/*   padding-right: 0;*/
/*   }*/
/*   .journal-header-center .journal-cart,*/
/*   html[dir="rtl"] .journal-header-center .journal-cart{*/
/*   padding-right: 0;*/
/*   padding-left: 0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* @media only screen and (min-width: 760px){*/
/* .boxed-header .journal-header-center .journal-cart{*/
/* padding-right:15px;*/
/* }*/
/* html[dir="rtl"] .boxed-header .journal-header-center .journal-cart{*/
/* padding-right:0;*/
/* padding-left:15px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (min-width: {{ journal2.settings.get('site_width') }}px) {*/
/* .sticky-menu:not(.boxed-header) .is-sticky .journal-header-compact #header .journal-menu .super-menu > li:first-of-type > a {*/
/* margin-left: 0;*/
/* }*/
/* .skin-16 .journal-header-mega .journal-search {*/
/* padding-right: 0;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .super-menu, .mega-menu, .html-menu{*/
/* border-radius:0;*/
/* }*/
/* .bottom-footer.fullwidth-bar .copyright{*/
/* padding-left: 15px;*/
/* }*/
/* .bottom-footer.fullwidth-bar .payments{*/
/* padding-right: 15px;*/
/* }*/
/* */
/* #top-modules > div:not(.gutter),*/
/* #bottom-modules > div:not(.gutter){*/
/* padding-left: 20px;*/
/* padding-right: 20px;*/
/* }*/
/* */
/* #top-modules .journal2_slider,*/
/* #bottom-modules .journal2_slider,*/
/* #top-modules .journal2_headline_rotator{*/
/* padding-left: 0 !important;*/
/* padding-right: 0 !important;*/
/* }*/
/* */
/* .no-secondary .journal-header-center #currency{*/
/* border-right-width:0;*/
/* }*/
/* .no-secondary .journal-header-center #language{*/
/* border-left-width:0;*/
/* }*/
/* html[dir="rtl"].no-secondary .journal-header-center #currency{*/
/* border-left-width:0;*/
/* border-right-width:1px;*/
/* }*/
/* html[dir="rtl"].no-secondary .journal-header-center #language{*/
/* border-right-width:0;*/
/* border-left-width:1px;*/
/* }*/
/* .journal-header-compact #header .journal-search {*/
/* padding-right:15px !important;*/
/* }*/
/* html[dir="rtl"] .journal-header-compact #header .journal-search {*/
/* padding-right:0 !important;*/
/* padding-left:15px !important;*/
/* }*/
/* .sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .sticky-menu .is-sticky .journal-header-default .journal-menu .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* .boxed-header body{*/
/* padding:0;*/
/* }*/
/* .fullwidth-footer .columns{*/
/* padding-left: 15px;*/
/* }*/
/* .copyright{*/
/* padding-left: 15px;*/
/* }*/
/* .journal-header-mega .journal-logo{*/
/* padding-left:15px;*/
/* }*/
/* html[dir="rtl"] .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:15px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* }*/
/* html[dir="rtl"] .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:0;*/
/* }*/
/* }*/
/* */
/* .boxed-header .journal-header-mega .journal-logo{*/
/* padding-left:15px;*/
/* }*/
/* html[dir="rtl"].boxed-header .journal-header-mega .journal-logo{*/
/* padding-left:0;*/
/* padding-right:15px;*/
/* }*/
/* */
/* @media only screen and (min-width : 760px) {*/
/* .side-blocks-active .journal-fullwidth-slider .tp-leftarrow,*/
/* .side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {*/
/* left: 60px !important;*/
/* }*/
/* .side-blocks-active .journal-fullwidth-slider .tp-rightarrow,*/
/* .side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {*/
/* right: 60px !important;*/
/* }*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow,*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-leftarrow.default {*/
/* right: 60px !important;*/
/* left: auto !important;*/
/* }*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow,*/
/* html[dir="rtl"].side-blocks-active .journal-fullwidth-slider .tp-rightarrow.default {*/
/* left: 60px !important;*/
/* right: auto !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('quickview_more_details', '1') == '0' %}*/
/*   .quickview #more-details{*/
/*   display:none;*/
/*   }*/
/*   .quickview #button-cart{*/
/*   width:63%;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('mega_header_align_2', 'center') == 'left' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .journal-header-mega #logo a img{*/
/*   left: 0;*/
/*   transform: translate(0, -50%);*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mega_header_align_2', 'center') == 'left' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   html[dir="rtl"] .journal-header-mega #logo a img{*/
/*   left: auto;*/
/*   right:0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_menu_shadow', 'none') == 'none' %}*/
/*   header .links a,*/
/*   header .links .no-link{*/
/*   border-bottom-color:#e4e4e4;*/
/*   }*/
/* {% endif %}*/
/* */
/* .boxed-header.default-header .journal-top-header{*/
/* clip: rect(0px,{{ journal2.settings.get('site_width') }}px,45px,0px);*/
/* }*/
/* */
/* .journal-header-default .links .no-link{*/
/* border-color:{{ journal2.settings.get('top_menu_border_color') }}*/
/* }*/
/* */
/* .journal-header-center #cart .content:before,*/
/* .oc2 #cart .content .cart-wrapper:before{*/
/* color:{{ journal2.settings.get('cart_content_bg') }}*/
/* }*/
/* */
/* .journal-header-center .autocomplete2-suggestions:before{*/
/* color:{{ journal2.settings.get('autosuggest_bg') }}*/
/* }*/
/* */
/* {% if journal2.settings.get('top_menu_icons_display', 'inline') == 'block' %}*/
/*   header .links a i,*/
/*   .links .no-link i,*/
/*   .journal-header-default #header .journal-links .top-menu > li > a{*/
/*   display:block;*/
/*   }*/
/*   header .links a i,*/
/*   .links .no-link i{*/
/*   margin-top:3px;*/
/*   }*/
/*   header .links .top-menu-link{*/
/*   position:relative;*/
/*   top:-2px;*/
/*   }*/
/*   .has-dropdown::after {*/
/*   margin-left: 2px;*/
/*   top: -3px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-language .dropdown-menu:before,*/
/* .journal-currency .dropdown-menu:before{*/
/* color:{{ journal2.settings.get('lang_drop_bg') }}*/
/* }*/
/* */
/* #header .top-menu .top-dropdown li:first-of-type {*/
/* border-top-left-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* border-top-right-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* }*/
/* #header .top-menu .top-dropdown li:last-of-type {*/
/* border-bottom-left-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* border-bottom-right-radius: {{ journal2.settings.get('top_menu_radius') }}px;*/
/* }*/
/* #header .top-menu .top-dropdown li:first-of-type::before{*/
/* color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }}*/
/* }*/
/* */
/* #search ::-webkit-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search ::-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-ms-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color') }};*/
/* font-family: inherit;*/
/* }*/
/* .compare-info tbody td{*/
/* border-left-style:{{ journal2.settings.get('shopping_divider_style') }};*/
/* }*/
/* @media only screen and (max-width: 760px){*/
/* #search ::-webkit-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search ::-moz-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* #search :-ms-input-placeholder {*/
/* color:{{ journal2.settings.get('search_placeholder_color_mobile') }};*/
/* font-family: inherit;*/
/* }*/
/* }*/
/* */
/* .button-search{*/
/* border-right-style:{{ journal2.settings.get('search_divider_type') }};*/
/* border-right-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* html[dir="rtl"] .button-search{*/
/* border-left-style:{{ journal2.settings.get('search_divider_type') }};*/
/* border-left-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-left{*/
/* border-left-style: {{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('top_divider_phone', 'off') == 'on' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .center-header #search, .default-header #search{*/
/*   border-top-width:1px;*/
/*   border-top-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-top-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('search_button_pos', 'left') == 'right' %}*/
/*   .button-search {*/
/*   right: 0;*/
/*   }*/
/*   html[dir="rtl"] .button-search {*/
/*   right: auto;*/
/*   left:0;*/
/*   }*/
/*   #search input {*/
/*   padding-left: 12px;*/
/*   padding-right: 50px;*/
/*   }*/
/*   .button-search{*/
/*   border-right-width:0;*/
/*   border-left-width:1px;*/
/*   border-left-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-left-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/*   html[dir="rtl"] .button-search{*/
/*   border-left-width:0;*/
/*   border-right-width:1px;*/
/*   border-right-style:{{ journal2.settings.get('search_divider_type') }};*/
/*   border-right-color:{{ journal2.settings.get('search_divider') }};*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* header .journal-login{*/
/* border-bottom-color:{{ journal2.settings.get('search_divider') }};*/
/* }*/
/* */
/* */
/* .super-menu > li:last-of-type{*/
/* border-right-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .default-header .journal-login{*/
/* background-color: {{ journal2.settings.get('secondary_menu_bg_color_mobile') }}*/
/* }*/
/* .journal-header-center #search input,*/
/* .journal-header-center .button-search{*/
/* border-radius:0;*/
/* }*/
/* .center-header #search input, .default-header #search input{*/
/* background-color:{{ journal2.settings.get('search_bg_mobile') }};*/
/* }*/
/* .center-header header #cart, .default-header header #cart{*/
/* background-color:{{ journal2.settings.get('cart_heading_bg_mobile') }};*/
/* }*/
/* .journal-menu .mobile-menu > li{*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* }*/
/* */
/* .inline-button .product-details{*/
/* padding-bottom:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('product_grid_button_block_button', 'block-button') == 'inline-button' and journal2.settings.get('catalog_grid_cart', 'block') == 'block' %}*/
/*   .product-grid-item .cart{*/
/*   display:inline-block !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' %}*/
/*   .mega-menu .product-grid-item .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' %}*/
/*   .product-grid-item .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_product_page_cart', 'block') == 'none' %}*/
/*   .quickview .product-info .right .cart{*/
/*   display:table;*/
/*   }*/
/*   .product-info .right .cart div .qty,*/
/*   .product-info .right .cart div #button-cart{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' %}*/
/*   .custom-sections .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' %}*/
/*   .side-column .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' %}*/
/*   #content .journal-carousel .product-grid-item .product-details .cart,*/
/*   #top-modules .journal-carousel .product-grid-item .product-details .cart,*/
/*   #bottom-modules .journal-carousel .product-grid-item .product-details .cart{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_title_status', '1') == '0' %}*/
/*   .product-info .right .options h3{*/
/*   display:none;*/
/*   }*/
/*   .product-info .right .option-image:first-of-type{*/
/*   margin-top:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* .product-info .right .options.push-1 .option-image li.selected span img{*/
/* border-color:{{ journal2.settings.get('product_page_options_push_image_border_hover') }};*/
/* }*/
/* */
/* .mega-menu-categories .mega-menu-item,*/
/* .mega-menu-brands .mega-menu-item,*/
/* .mega-menu-html .mega-menu-item,*/
/* #header .mega-menu .product-grid-item{*/
/* margin-bottom:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-right:last-of-type{*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* html[dir="rtl"].journal-desktop .menu-floated .float-right:last-of-type{*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* }*/
/* */
/* .mega-menu > div{*/
/* margin-bottom:-{{ journal2.settings.get('menu_categories_item_margin') }}px !important;*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .mega-menu-item > div,*/
/* html[dir="rtl"] #header .mega-menu .product-wrapper{*/
/* margin-right:0;*/
/* margin-left:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .mega-menu .mega-menu-column:last-of-type > div{*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu .mega-menu-column.mega-menu-products > div{*/
/* margin-left:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .mega-menu-column > div > h3, .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-right:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu-column > div > h3, html[dir="rtl"] .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-right:0;*/
/* margin-left:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* .mega-menu .mega-menu-column:last-of-type > h3,*/
/* .mega-menu .mega-menu-column:last-of-type > div > h3,*/
/* .mega-menu .mega-menu-column:last-of-type > .menu-cms-block,*/
/* .mega-menu .mega-menu-column.mega-menu-html-block > div{*/
/* margin-right:0;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .super-menu{*/
/* border-width:0;*/
/* }*/
/* .mega-menu .mega-menu-column > div{*/
/* margin-right:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* html[dir="rtl"] .mega-menu .mega-menu-column > div{*/
/* margin-left:-{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* margin-right:0;*/
/* }*/
/* }*/
/* */
/* .journal-sf .sf-image .box-content ul{*/
/* margin-bottom:-{{ journal2.settings.get('filter_image_section_margin_bottom') }}px;*/
/* margin-right:-{{ journal2.settings.get('filter_image_section_margin_right') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('blog_show_author', 'on') == 'off' %}*/
/*   .p-author, .p-posted{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_date', 'on') == 'off' %}*/
/*   .p-date{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_comments', 'on') == 'off' %}*/
/*   .p-comment{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('blog_show_author', 'on') == 'off' and journal2.settings.get('blog_show_date', 'on') == 'off' and journal2.settings.get('blog_show_comments', 'on') == 'off' %}*/
/*   .comment-date{*/
/*   display:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher{*/
/*   padding-right: 12px;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   margin-top:0;*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-checkout .coupon-voucher .cvr div.checkout-voucher{*/
/*   padding-right:0;*/
/*   padding-left: 12px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_voucher_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr .checkout-voucher{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   margin-top:0;*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"] .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   padding-right:0;*/
/*   padding-left: 12px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr .checkout-reward{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_voucher_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher div.checkout-voucher,*/
/*   .journal-checkout .coupon-voucher div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward,*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_voucher_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-voucher,*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-reward{*/
/*   display:none;*/
/*   }*/
/*   .journal-checkout .coupon-voucher .cvr div.checkout-coupon {*/
/*   padding-right: 0;*/
/*   margin-top: 0;*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('one_page_coupon_status', 'on') == 'off' and journal2.settings.get('one_page_voucher_status', 'on') == 'off' and journal2.settings.get('one_page_reward_status', 'on') == 'off' %}*/
/*   .journal-checkout .coupon-voucher{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* {% if journal2.settings.get('dropdown_shadow', 'none') == 'none' %}*/
/*   .drop-down ul{*/
/*   box-shadow:none !important;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_product_page_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_product_page_compare', 'inline-block') == 'none' %}*/
/*   .product-info .right .wishlist-compare{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_name', 'table') == 'none' or journal2.settings.get('catalog_grid_carousel_name', 'table') == 'none' or journal2.settings.get('catalog_grid_side_carousel_name', 'table') == 'none' or journal2.settings.get('catalog_grid_cs_name', 'table') == 'none' or journal2.settings.get('catalog_grid_main_menu_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   padding-top:13px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' or journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' %}*/
/*   .product-grid-item .price + hr,*/
/*   .product-grid-item .price + .rating + hr{*/
/*   display:block;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('catalog_grid_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_carousel_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_carousel_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_carousel_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_side_carousel_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_side_carousel_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_cs_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_cs_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_cs_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('catalog_grid_main_menu_cart', 'block') == 'none' and journal2.settings.get('catalog_grid_main_menu_wishlist', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_compare', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_price', 'inline-block') == 'none' and journal2.settings.get('catalog_grid_main_menu_name', 'table') == 'none' %}*/
/*   .product-details{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('contacts_display', 'off') == 'on' %}*/
/*   footer .contacts{*/
/*   text-align:center;*/
/*   }*/
/*   footer .contacts-left,*/
/*   html[dir="rtl"] footer .contacts-left{*/
/*   float: none;*/
/*   }*/
/*   footer .contacts-right{*/
/*   display: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* .has-cta .rotator-tex{*/
/* line-height:{{ journal2.settings.get('cta_button_height') }}px;*/
/* }*/
/* */
/* footer .contacts .hint--top:before{*/
/* border-top-color: {{ journal2.settings.get('footer_tooltip_bg_color') }};*/
/* }*/
/* */
/* */
/* .side-column .box-category,*/
/* .side-column .box-content,*/
/* .side-column .box-content > div,*/
/* .side-column .box-content > ul > li:last-of-type,*/
/* .side-column .oc-module .product-grid-item:last-of-type{*/
/* border-bottom-left-radius: inherit;*/
/* border-bottom-right-radius: inherit;*/
/* border-radius:inherit;*/
/* }*/
/* */
/* */
/* .journal-sf ul li label:hover{*/
/* color:{{ journal2.settings.get('filter_active_text') }};*/
/* }*/
/* .sf-icon:before{*/
/* border-top-color:{{ journal2.settings.get('reset_tip_bg') }};*/
/* }*/
/* */
/* /**/
/* .journal-sf ul li label:hover img{*/
/* border-color:{{ journal2.settings.get('filter_active_border') }};*/
/* } *//* */
/* */
/* .sf-price .value:after{*/
/* border-bottom-color:{{ journal2.settings.get('filter_price_tip') }};*/
/* }*/
/* */
/* .mobile-trigger{*/
/* background-color:{{ journal2.settings.get('main_menu_bg_color') }};*/
/* }*/
/* */
/* */
/* .journal-header-default .links > a{*/
/* border-bottom-color: transparent;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .super-menu{*/
/* background-color:{{ journal2.settings.get('mega_menu_bg') }};*/
/* }*/
/* .journal-header-default .links > a{*/
/* border-bottom-color: {{ journal2.settings.get('top_menu_border_color') }};*/
/* }*/
/* }*/
/* .nav-numbers a:hover,*/
/* .nav-numbers li.active a{*/
/* -webkit-backface-visibility: hidden;*/
/* -webkit-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* -moz-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* -ms-transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* transform: scale({{ journal2.settings.get('text_rotator_bullet_scale') }});*/
/* }*/
/* .headline-mode .nav-numbers a:hover,*/
/* .headline-mode .nav-numbers li.active a{*/
/* -webkit-backface-visibility: hidden;*/
/* -webkit-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* -moz-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* -ms-transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* transform: scale({{ journal2.settings.get('headline_bullet_scale') }});*/
/* }*/
/* .tp-bullets.simplebullets.round .bullet.selected,*/
/* .tp-bullets.simplebullets.round .bullet:hover,*/
/* .journal-simple-slider .owl-controls .owl-page.active span,*/
/* .journal-simple-slider .owl-controls.clickable .owl-page:hover span{*/
/* transform: scale({{ journal2.settings.get('slider_bullet_scale') }});*/
/* }*/
/* */
/* .swiper-pagination-bullet:hover, .swiper-pagination-bullet-active{*/
/* transform: scale({{ journal2.settings.get('carousel_bullet_scale') }});*/
/* }*/
/* */
/* @media only screen and (max-width: 980px) {*/
/* .journal-header-default .mega-menu{*/
/* width: 100%;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px) {*/
/* .journal-header-center .journal-secondary{*/
/* background-color:{{ journal2.settings.get('top_bar_bg_color') }};*/
/* }*/
/* }*/
/* */
/* .mega-menu{*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .bottom-menu-bar #header .top-menu > li{*/
/* border-color:{{ journal2.settings.get('top_menu_border_color') }};*/
/* }*/
/* .bottom-menu-bar #header .journal-links{*/
/* background-color:{{ journal2.settings.get('top_menu_bg_color') }};*/
/* }*/
/* .bottom-menu-bar .journal-header-center .journal-secondary {*/
/* border-top-width: 0;*/
/* }*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li{*/
/* border-color:{{ journal2.settings.get('bottom_bar_border_color') }};*/
/* }*/
/* .bottom-menu-bar #header div.journal-links, .bottom-menu-bar #header .journal-links a:hover{*/
/* background-color:{{ journal2.settings.get('bottom_bar_bg_color') }};*/
/* }*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > a,*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > a:hover,*/
/* .bottom-menu-bar #header .journal-links ul.top-menu > li > .no-link{*/
/* color:{{ journal2.settings.get('bottom_bar_color') }};*/
/* }*/
/* }*/
/* */
/* .boxed-header .is-sticky .header {*/
/* max-width:{{ journal2.settings.get('site_width') }}px;*/
/* left: 50%;*/
/* transform: translateX(-50%);*/
/* }*/
/* */
/* {% if journal2.settings.get('sticky_header_style', 'default') == 'menu' %}*/
/*   .is-sticky .super-menu, .is-sticky .journal-menu-bg {*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('sticky_header_style', 'default') == 'menu' and journal2.settings.get('boxed_menu_off', '0') == '1' %}*/
/*   html.boxed-header .is-sticky .header {*/
/*   max-width:100%;*/
/*   left:0;*/
/*   transform: translateX(0);*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* .bottom-menu-bar #header .journal-links .top-menu .top-dropdown li:last-of-type::after{*/
/* color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }};*/
/* }*/
/* */
/* @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* .mobile-menu-on-tablet .mobile-menu > li > ul,*/
/* .mobile-menu-on-tablet .mobile-menu > li > .mega-menu{*/
/* border-style:{{ journal2.settings.get('main_menu_mobile_border_type') }};*/
/* border-color:{{ journal2.settings.get('main_menu_mobile_border_color') }};*/
/* }*/
/* .mobile-menu-on-tablet ul.menu-centered{*/
/* height:auto;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .mobile-menu > li > ul,*/
/* .mobile-menu > li > .mega-menu{*/
/* border-style:{{ journal2.settings.get('main_menu_mobile_border_type') }};*/
/* border-color:{{ journal2.settings.get('main_menu_mobile_border_color') }};*/
/* }*/
/* }*/
/* */
/* @media only screen and (min-width: 760px) {*/
/* .journal-header-mega #search {*/
/* max-width: {{ journal2.settings.get('search_width', '100') }}%;*/
/* left: {{ journal2.settings.get('search_offset', '0') }}px;*/
/* }*/
/* .journal-header-center .j-100{*/
/* height:{{ journal2.settings.get('header_height_input', '100') }}px;*/
/* }*/
/* .journal-header-center .journal-menu-bg{*/
/* top:{{ journal2.settings.get('header_height_input', '100') + 40 + journal2.settings.get('top_bar_height', '40') - 40 }}px;*/
/* }*/
/* .journal-header-center .top-bar > .j-min, .journal-header-center .top-menu > li > .m-item, .journal-header-center .journal-top-header{*/
/* height:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* .journal-header-center .journal-menu,*/
/* .journal-header-center .journal-menu-bg,*/
/* .journal-header-center .mobile-trigger,*/
/* ul.menu-centered{*/
/* height:{{ journal2.settings.get('main_menu_height', '40') }}px;*/
/* }*/
/* .journal-header-center .mobile-trigger,*/
/* .journal-header-center .super-menu > li > a{*/
/* line-height:{{ journal2.settings.get('main_menu_height', '40') }}px;*/
/* }*/
/* .journal-header-center .journal-language form .dropdown-menu,*/
/* .journal-header-center .journal-currency form .dropdown-menu{*/
/* top:{{ journal2.settings.get('top_bar_height', '40') }}px;*/
/* }*/
/* */
/* .sticky-default.center-header .is-sticky .journal-header-center .j-100{*/
/* height:{{ journal2.settings.get('sticky_header_height_input', '') }}px;*/
/* }*/
/* .sticky-default.center-header .is-sticky .journal-menu-bg{*/
/* top:{{ journal2.settings.get('sticky_header_height_input', '') }}px;*/
/* }*/
/* */
/* .is-sticky .journal-header-center .journal-menu,*/
/* .is-sticky .journal-header-center .journal-menu-bg,*/
/* .is-sticky .journal-header-center .mobile-trigger{*/
/* height:{{ journal2.settings.get('sticky_main_menu_height', '40') }}px;*/
/* }*/
/* .is-sticky .journal-header-center .mobile-trigger,*/
/* .is-sticky .journal-header-center .super-menu > li > a{*/
/* line-height:{{ journal2.settings.get('sticky_main_menu_height', '40') }}px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* #header .journal-logo{*/
/* height:{{ journal2.settings.get('header_height_input_phone', '') }}px !important;*/
/* }*/
/* }*/
/* */
/* .center-header body.is-sticky .header-assets.top-bar{*/
/* background-color:{{ journal2.settings.get('top_bar_bg_color') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('logo_on_phone', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   #header .journal-logo {*/
/*   display: none;*/
/*   }*/
/*   .journal-header-center .journal-secondary {*/
/*   border-bottom-width: 0;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('mega_menu_animate', 'on') == 'off' and journal2.settings.get('mobile_menu_on', 'phone') == 'tablet' %}*/
/*   @media only screen and (min-width: 980px){*/
/*   .super-menu>li:hover .mega-menu,*/
/*   .super-menu>li:hover > ul{*/
/*   display:block !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mega_menu_animate', 'on') == 'off' and journal2.settings.get('mobile_menu_on', 'phone') == 'phone' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .super-menu>li:hover .mega-menu,*/
/*   .super-menu>li:hover > ul{*/
/*   display:block !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('header_box_shadow_type', 'none') == 'default' %}*/
/*   .header{*/
/*   box-shadow:0 0 5px rgba(0, 0, 0, 0.4);*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* .mobile-menu-on-tablet .journal-header-center .journal-menu{*/
/* height:auto;*/
/* }*/
/* .mobile-menu-on-tablet .journal-header-center .super-menu > li > a{*/
/* line-height:40px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_show_category_images', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .mega-menu-categories .mega-menu-item ul,*/
/*   .mega-menu-categories .mega-menu-item.menu-image-left ul{*/
/*   width:100%;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item img {*/
/*   display: none !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('remove_top_bar', 'on') == 'off' %}*/
/*   @media only screen and (min-width: 760px){*/
/*   .header-assets.top-bar,*/
/*   .journal-top-header{*/
/*   display:none;*/
/*   }*/
/*   .journal-header-center .journal-menu-bg{*/
/*   top:{{ journal2.settings.get('header_height_input', '100') }}px;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('side_modules_margin', 'on') == 'off' %}*/
/*   .side-column .box{*/
/*   margin-bottom:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_grid_price_full', 'inline-block') == 'block' %}*/
/*   .product-grid-item .price{*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('filter_image_size', 'medium') == 'tiny' %}*/
/*   .product-grid-item .price{*/
/*   width:100%;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('cs_two_per_row', 'on') == 'off' %}*/
/*   @media only screen and (max-width: 760px){*/
/*   .box-sections ul li {*/
/*   width: 100%;*/
/*   border-right-width: 0;*/
/*   }*/
/*   .box-sections ul li:nth-last-child(2):nth-child(odd) {*/
/*   border-bottom-width: 1px;*/
/*   }*/
/*   html[dir="rtl"] .box-sections ul li {*/
/*   border-right-width: 0 !important;*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* #tabs{*/
/* top:{{ (journal2.settings.get('product_page_tabs_content_border:border-width')) }};*/
/* }*/
/* */
/* .product-grid-item.display-icon .wishlist-icon:before,*/
/* .product-grid-item.display-icon .compare-icon:before{*/
/* line-height:{{ journal2.settings.get('product_grid_wishlist_icon_bg_height') }}px;*/
/* }*/
/* */
/* .journal-header-center #cart .heading i{*/
/* height:{{ 40 - (journal2.settings.get('cart_heading_border:border-width', 0) * 2) }}px;*/
/* }*/
/* */
/* .journal-desktop .menu-floated .float-left{*/
/* border-right-style:{{ journal2.settings.get('menu_divider_type') }};*/
/* }*/
/* */
/* .column.products > h3{*/
/* margin-bottom:{{ 12 - journal2.settings.get('footer_product_padding') }}px;*/
/* }*/
/* .column.products{*/
/* padding-bottom:{{ 12 - journal2.settings.get('footer_product_padding') }}px;*/
/* }*/
/* */
/* .side-column .journal-gallery .box-heading{*/
/* margin-bottom:{{ 10 - journal2.settings.get('side_gallery_padding') }}px;*/
/* }*/
/* */
/* .side-column .box-category > ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 2 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 3 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 4 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* .side-column .box-category > ul li ul li ul li ul li ul li ul li a{*/
/* padding-left: {{ journal2.settings.get('side_category_link_padding_left') + 5 * journal2.settings.get('side_category_sub_left_padding') }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .breadcrumb{*/
/* padding-left:10px;*/
/* }*/
/* .super-menu > li:first-of-type{*/
/* border-left-width:0;*/
/* }*/
/* .super-menu > li:last-of-type{*/
/* border-right-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu > li:first-of-type{*/
/* border-left-width:1px;*/
/* border-right-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu > li:last-of-type{*/
/* border-left-width:0;*/
/* }*/
/* html[dir="rtl"] .super-menu.menu-floated > li:first-of-type*/
/* border-right-width:0;*/
/* }*/
/* }*/
/* */
/* .super-menu.menu-floated{*/
/* border-right-width:1px;*/
/* border-left-width:1px;*/
/* border-color:{{ journal2.settings.get('menu_divider') }};*/
/* border-style:{{ journal2.settings.get('menu_divider_type', 'solid') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('cs_fullwidth_divider', 'off') == 'on' %}*/
/*   .custom-sections .box-heading.box-sections{*/
/*   border-left-width:1px;*/
/*   border-right-width:1px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_button_unite', '1') == '0' and journal2.settings.get('product_grid_wishlist_icon_display', 'icon') == 'icon' and journal2.settings.get('product_grid_wishlist_icon_position', 'button') == 'button' %}*/
/* */
/*   .product-grid-item .wishlist,*/
/*   .product-grid-item .compare{*/
/*   padding:0;*/
/*   }*/
/*   .product-grid-item .button-group{*/
/*   display: flex;*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* .custom-sections .box-heading.box-sections{*/
/* border-left-style:{{ journal2.settings.get('cs_title_divider_type') }};*/
/* }*/
/* */
/* .journal-carousel:not(.journal-gallery) .box-content .swiper-container{*/
/* padding: {{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* margin: -{{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* }*/
/* */
/* .journal-carousel.arrows-top .swiper-button-prev,*/
/* .journal-carousel.arrows-top .swiper-button-next{*/
/* margin-top:{{ journal2.settings.get('carousel_shadow_mask', '') }}px;*/
/* }*/
/* */
/* .side-column .journal-carousel.arrows-top .swiper-button-prev,*/
/* .side-column .journal-carousel.arrows-top .swiper-button-next,*/
/* .related-products.journal-carousel.arrows-top .swiper-button-prev,*/
/* .related-products.journal-carousel.arrows-top .swiper-button-next{*/
/* margin-top:0;*/
/* }*/
/* */
/* {% if journal2.settings.get('footer_top_margin', '0') == '20' %}*/
/*   div#footer{*/
/*   margin-top:{{ journal2.settings.get('footer_custom_top_margin', '20') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_bottom_margin', '0') == '20' %}*/
/*   div#footer{*/
/*   margin-bottom:{{ journal2.settings.get('footer_custom_bottom_margin', '20') }}px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .extended-container + .boxed-footer #footer{*/
/* margin-top:{{ journal2.settings.get('footer_custom_top_margin') - journal2.settings.get('container_bottom_spacing') }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('carousel_title_side_margin', 'on') == 'off' %}*/
/*   .side-column .journal-carousel .htabs {*/
/*   margin-bottom: 0;*/
/*   }*/
/*   .side-column .arrows-top:not(.journal-gallery) .swiper-button-prev,*/
/*   .side-column .arrows-top:not(.journal-gallery) .swiper-button-next {*/
/*   margin-top:20px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('menu_brands_title_align', 'left') == 'center' %}*/
/*   .mega-menu-brands div > h3 {*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_brands_title_align', 'left') == 'right' %}*/
/*   .mega-menu-brands div > h3 {*/
/*   justify-content: flex-end;*/
/*   }*/
/* {% endif %}*/
/* */
/* .side-column .journal-carousel .box-content .swiper-container{*/
/* padding:0;*/
/* margin:0;*/
/* }*/
/* html[dir="rtl"] .journal-carousel.arrows-top .swiper-button-next{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_icon_offset_left', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel.arrows-top .swiper-button-prev{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_icon_offset_right', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel:not(.arrows-top) .swiper-button-next{*/
/* right:auto;*/
/* left:{{ journal2.settings.get('carousel_side_icon_offset_left', '') }}px;*/
/* }*/
/* */
/* html[dir="rtl"] .journal-carousel:not(.arrows-top) .swiper-button-prev{*/
/* left:auto;*/
/* right:{{ journal2.settings.get('carousel_side_icon_offset_right', '') }}px;*/
/* }*/
/* */
/* {% if journal2.settings.get('post_grid_button_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .post-button{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('post_grid_button_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .post-button{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_module_button_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .post-module .post-button{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('post_module_button_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .post-module .post-button{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_categories_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .mega-menu-categories .mega-menu-item h3 a{*/
/*   text-align:center;*/
/*   justify-content: center;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item h3 a{*/
/*   justify-content: center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('menu_categories_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .mega-menu-categories .mega-menu-item h3 a{*/
/*   text-align:left;*/
/*   justify-content: flex-start;*/
/*   }*/
/*   .mega-menu-categories .mega-menu-item h3 a{*/
/*   justify-content: flex-end;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'left' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:right;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_links_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] footer .column-menu-wrap > ul li{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'left' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:right;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_titles_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] footer .column>h3{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('post_title_overflow', 'on') == 'off' %}*/
/*   .blog-post .heading-title{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   line-height:1.2;*/
/*   padding:8px 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('module_title_overflow', 'on') == 'off' %}*/
/*   .post-module .box-heading{*/
/*   white-space:normal;*/
/*   height:auto;*/
/*   line-height:1.2;*/
/*   padding-top:8px;*/
/*   padding-bottom:8px;*/
/*   }*/
/* {% endif %}*/
/* */
/* .posts.blog-list-view .post-item-details{*/
/* width: {{ 100 - journal2.settings.get('post_list_image_width', '33.333333') }}%;*/
/* }*/
/* */
/* .side-column .box.cms-blocks .box-heading{*/
/* margin-bottom:{{ journal2.settings.get('side_cms_margin') }}px;*/
/* }*/
/* */
/* @media only screen and (min-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .safari5 #footer,*/
/* .safari5.boxed-header header{*/
/* width: {{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* .tp-banner{*/
/* height:100% !important;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('logo_ratio', 'on') == 'off' %}*/
/*   #logo a img{*/
/*   height:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* @media only screen and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* */
/* .tp-banner-container{*/
/* height:auto !important;*/
/* }*/
/* */
/* .side-column .oc-module .product-details {*/
/* max-width: 130px;*/
/* }*/
/* .checkout-page #content {*/
/* padding-left: 20px;*/
/* padding-right: 20px;*/
/* }*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .product-grid-item .has-countdown + .product-details .rating{*/
/* top:-50px;*/
/* }*/
/* .product-grid-item .image.has-countdown .wishlist,*/
/* .product-grid-item .image.has-countdown .compare{*/
/* margin-bottom:42px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('show_countdown', 'never') == 'always' %}*/
/*   .product-grid-item .countdown,*/
/*   .product-list-item .countdown {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/*   .product-grid-item .has-countdown + .product-details .rating{*/
/*   top:-70px;*/
/*   }*/
/*   .product-grid-item .image.has-countdown .wishlist,*/
/*   .product-grid-item .image.has-countdown .compare{*/
/*   margin-bottom:42px;*/
/*   }*/
/* {% endif %}*/
/* {% if journal2.settings.get('show_countdown', 'never') == 'hover' %}*/
/*   .product-grid-item:hover .countdown,*/
/*   .product-list-item:hover .countdown {*/
/*   opacity: 1;*/
/*   visibility: visible;*/
/*   }*/
/*   .product-grid-item:hover .has-countdown + .product-details .rating{*/
/*   top:-70px;*/
/*   }*/
/*   .product-grid-item:hover .image.has-countdown .wishlist,*/
/*   .product-grid-item:hover .image.has-countdown .compare{*/
/*   margin-bottom:42px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('show_countdown', 'never') == 'hidden' %}*/
/*   .product-grid-item .countdown,*/
/*   .product-list-item .countdown {*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* */
/*     */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('show_countdown', 'hover') == 'hover' %}*/
/*   .product-grid-item:hover .has-countdown .quickview-button{*/
/*   margin-top:-40px;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' and journal2.settings.get('show_countdown', 'hover') == 'always' %}*/
/*   .product-grid-item .has-countdown .quickview-button{*/
/*   margin-top:-40px;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if journal2.settings.get('product_page_cloud_zoom_inner') == '0' %}*/
/*   .zm-viewer{*/
/*   display:none;*/
/*   border-left:1px solid white;*/
/*   }*/
/* {% endif %}*/
/* */
/* .option li.hint--top:before{*/
/* border-top-color:{{ journal2.settings.get('product_page_push_tooltip_bg') }};*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'on' %}*/
/*   @media only screen and (max-width: 470px) {*/
/*   .journal-cart{*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg') }};*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg_mobile') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' and journal2.settings.get('catalog_header_cart2', 'visible') == 'visible' %}*/
/*   @media only screen and (max-width: 470px) {*/
/*   .phone-sticky-cart.menu-cart-off .journal-menu .mobile-trigger{*/
/*   width:100%;*/
/*   }*/
/*   header .journal-menu .mobile-trigger {*/
/*   width: 50%;*/
/*   margin-top: -40px;*/
/*   z-index: 3;*/
/*   background-color:transparent;*/
/*   }*/
/*   .journal-cart{*/
/*   z-index:2;*/
/*   background-color:{{ journal2.settings.get('cart_heading_bg') }}*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .phone-sticky-cart.phone-sticky-menu:not(.menu-cart-off) .journal-menu{*/
/* z-index:1;*/
/* }*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' and journal2.settings.get('catalog_header_search', 'block') == 'block' %}*/
/*   @media only screen and (max-width: 470px){*/
/*   div.mobile-trigger, .mobile-menu-on-tablet div.mobile-trigger{*/
/*   color:{{ journal2.settings.get('mobile_trigger_text_color_cart_same_line') }};*/
/*   }*/
/*   div.mobile-trigger:before, .mobile-menu-on-tablet div.mobile-trigger:before{*/
/*   color:{{ journal2.settings.get('mobile_trigger_icon_color_cart_same_line') }};*/
/*   }*/
/*   }*/
/* {% endif %}*/
/* */
/* .journal-header-center #header .menu-dropdown::before{*/
/* border-bottom-color:{{ journal2.settings.get('top_menus_dropdown_bg_color') }}*/
/* }*/
/* */
/* .header-notice > div{*/
/* max-width:{{ journal2.settings.get('site_width', 1024) }}px;*/
/* }*/
/* */
/* @media only screen and (max-width:{{ journal2.settings.get('site_width', 1024) + 15 }}px){*/
/* .header-notice > div{*/
/* padding-left:15px;*/
/* padding-right: 15px;*/
/* }*/
/* .header-notice.floated-icon > div{*/
/* padding-bottom:10px;*/
/* }*/
/* button.close-notice {*/
/* right: 8px;*/
/* }*/
/* html[dir="rtl"] button.close-notice {*/
/* right: auto;*/
/* left: 8px;*/
/* }*/
/* }*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'top' %}*/
/*   .product-grid-item .quickview-button{*/
/*   top:0;*/
/*   transform: translate(-50%, 0);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_align', 'left') == 'center' %}*/
/*   .post-item-details .comment-date{*/
/*   margin:0 auto;*/
/*   }*/
/*   .blog-grid-view .post-button{*/
/*   align-self:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('post_grid_align', 'left') == 'right' %}*/
/*   .post-item-details .comment-date{*/
/*   width:100%;*/
/*   }*/
/*   .blog-grid-view .post-button{*/
/*   align-self:flex-end;*/
/*   }*/
/*   html[dir="rtl"] .blog-grid-view .post-button{*/
/*   align-self:flex-start;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_grid_quickview_align', 'center') == 'bottom' %}*/
/*   .product-grid-item .quickview-button{*/
/*   top:100%;*/
/*   transform: translate(-50%, -100%);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('main_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .heading-title, html[dir="rtl"] .box-heading:not(.box-sections), html[dir="rtl"] #blogArticle*/
/*   .articleHeader h1, html[dir="rtl"] .journal-carousel .htabs.single-tab a, html[dir="rtl"] .oc-filter .panel-heading, html[dir="rtl"] .post-module .box-heading, html[dir="rtl"] #content h1.heading-title{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('main_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .heading-title, html[dir="rtl"] .box-heading:not(.box-sections), html[dir="rtl"] #blogArticle*/
/*   .articleHeader h1, html[dir="rtl"] .journal-carousel .htabs.single-tab a, html[dir="rtl"] .oc-filter .panel-heading, html[dir="rtl"] .post-module .box-heading, html[dir="rtl"] #content h1.heading-title{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('secondary_title_align', 'left') == 'center' %}*/
/*   html[dir="rtl"] .secondary-title, html[dir="rtl"] #content #review-title{*/
/*   text-align:center;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('secondary_title_align', 'left') == 'right' %}*/
/*   html[dir="rtl"] .secondary-title, html[dir="rtl"] #content #review-title{*/
/*   text-align:left;*/
/*   }*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('scroll_to_top_pos', 'right') == 'left' %}*/
/*   .scroll-top{*/
/*   left:5px;*/
/*   right:auto;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_side_margin', '15') == '0' %}*/
/*   footer .columns {*/
/*   padding-left:0;*/
/*   }*/
/*   html[dir="rtl"] footer .columns {*/
/*   padding-right:0;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_shadow_type', 'none') == 'default' %}*/
/*   footer{*/
/*   box-shadow: 0 -2px 15px -3px rgba(0, 0, 0, 0.3);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('footer_shadow_type', 'none') == 'none' %}*/
/*   footer{*/
/*   box-shadow: none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') == 'default' %}*/
/*   .journal-top-header{*/
/*   box-shadow:0 0 5px rgba(0, 0, 0, 0.4);*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') == 'none' %}*/
/*   .journal-top-header{*/
/*   box-shadow:none;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('top_bar_shadow_type', 'none') != 'none' %}*/
/*   .journal-header-default .links a, .journal-header-default .links .no-link {*/
/*   border-bottom-width: 0;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Content Margin *//* */
/* */
/* @media only screen and (min-width: 760px){*/
/* #column-left + #content {*/
/* margin-left: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* }*/
/* #column-right + #content {*/
/* margin-right: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/* }*/
/* */
/* #column-left + #column-right + #content{*/
/* margin-left: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* margin-right: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/* }*/
/* }*/
/* */
/* /* Tablet Column Width + Content Margin *//* */
/* */
/* @media only screen and (min-width:760px) and (max-width:980px) {*/
/* #column-left {*/
/* width: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-right{*/
/* width: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-left + #content {*/
/* margin-left: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-right + #content {*/
/* margin-right: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* #column-left + #column-right + #content{*/
/* margin-left: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/* margin-right: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/* }*/
/* }*/
/* */
/* /* Extended Layout Margins *//* */
/* */
/* @media only screen and (min-width:760px) and (max-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/* .skin-16 .journal-header-center .journal-search {*/
/* padding-left: 30px;*/
/* }*/
/* .extended-layout #column-left{*/
/* padding-left:20px;*/
/* }*/
/* .extended-layout #column-right{*/
/* padding-right:20px;*/
/* }*/
/* .extended-layout #content,*/
/* .extended-layout #column-left + #content,*/
/* .extended-layout #column-right + #content{*/
/* padding-left:20px;*/
/* padding-right:20px;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-left{*/
/* padding-right:20px!important;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-right{*/
/* padding-left:20px !important;*/
/* }*/
/* html[dir="rtl"].extended-layout #column-left + #content {*/
/* margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/* margin-left: 0;*/
/* */
/* }*/
/* html[dir="rtl"].extended-layout #column-right + #content {*/
/* margin-right: 0;*/
/* }*/
/* }*/
/* */
/* .mega-menu .mega-menu-column .menu-cms-block{*/
/* margin-bottom:{{ journal2.settings.get('menu_categories_item_margin') }}px;*/
/* }*/
/* */
/* .fly-drop-down ul li{*/
/* min-height:{{ journal2.settings.get('flyout_menu_item_height', 40) }}px;*/
/* }*/
/* */
/* @media only screen and (max-width: 760px){*/
/* .product-grid-item .rating{*/
/* margin-left:{{ journal2.settings.get('rating_offset_x_phone') }}px;*/
/* }*/
/* .product-grid-item .rating{*/
/* top:{{ journal2.settings.get('rating_offset_y_phone') }}px;*/
/* }*/
/* }*/
/* */
/* /* RTL Columns *//* */
/* */
/* {% if journal2.settings.get('rtl_columns', '1') == '1' %}*/
/* */
/*   html[dir="rtl"] .flyout-left .fly-mega-menu,*/
/*   html[dir="rtl"] .flyout-left .fly-drop-down > ul {*/
/*   left: auto;*/
/*   right: 100%;*/
/*   }*/
/*   html[dir="rtl"] .flyout-right .fly-mega-menu,*/
/*   html[dir="rtl"] .flyout-right .fly-drop-down > ul {*/
/*   left: 100% !important;*/
/*   right: auto;*/
/*   }*/
/*   html[dir="rtl"] .flyout-menu .flyout > ul > li > a i.menu-plus {*/
/*   left: 5px;*/
/*   right: auto;*/
/*   transform: scale(-1);*/
/*   }*/
/*   html[dir="rtl"] #column-right .flyout-menu .flyout > ul > li > a i.menu-plus {*/
/*   left: auto;*/
/*   right: 8px;*/
/*   transform: scale(1);*/
/*   }*/
/*   html[dir="rtl"] .flyout-menu .flyout > ul > li > a {*/
/*   padding: 7px 12px 7px 25px;*/
/*   }*/
/*   html[dir="rtl"] #column-right .flyout-menu .flyout > ul > li > a {*/
/*   padding: 7px 25px 7px 12px;*/
/*   text-align:left;*/
/*   }*/
/* */
/* */
/*   html[dir="rtl"] #column-left {*/
/*   float: right;*/
/*   }*/
/*   html[dir="rtl"] #column-right {*/
/*   float: left;*/
/*   }*/
/* */
/* */
/*   @media only screen and (min-width: 760px){*/
/* */
/*   html[dir="rtl"] #column-left {*/
/*   padding: 20px 20px 20px 0;*/
/*   }*/
/*   html[dir="rtl"] #column-right {*/
/*   padding: 20px 0 20px 20px;*/
/*   }*/
/* */
/*   html[dir="rtl"] #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/*   margin-left: 0;*/
/* */
/*   }*/
/*   html[dir="rtl"] #column-right + #content {*/
/*   margin-left: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/*   margin-right: 0;*/
/*   }*/
/* */
/*   html[dir="rtl"] #column-left + #column-right + #content{*/
/*   margin-right: {{ journal2.settings.get('left_column_width', 220) }}px;*/
/*   margin-left: {{ journal2.settings.get('right_column_width', 220) }}px;*/
/*   }*/
/* */
/*   }*/
/* */
/*   @media only screen and (min-width : 760px) and (max-width: 980px) {*/
/* */
/*   html[dir="rtl"] #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left:0;*/
/*   }*/
/*   html[dir="rtl"] #column-right + #content {*/
/*   margin-left: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/*   margin-right:0;*/
/*   }*/
/*   html[dir="rtl"] #column-left + #column-right + #content{*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left: {{ journal2.settings.get('right_column_width_tablet', 220) }}px;*/
/*   }*/
/* */
/*   html[dir="rtl"].extended-layout #column-left + #content {*/
/*   margin-right: {{ journal2.settings.get('left_column_width_tablet', 220) }}px;*/
/*   margin-left: 0;*/
/* */
/*   }*/
/*   }*/
/* */
/*   @media only screen and (min-width: {{ journal2.settings.get('site_width') + 15 }}px) {*/
/*   html[dir="rtl"].extended-layout #column-left{*/
/*   padding-right:0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-right{*/
/*   padding-left:0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-right + #content {*/
/*   padding-left: 20px;*/
/*   padding-right: 0;*/
/*   }*/
/*   html[dir="rtl"].extended-layout #column-left + #content {*/
/*   padding-right: 20px;*/
/*   padding-left: 0;*/
/*   }*/
/*   }*/
/* */
/* {% endif %}*/
/* */
/* */
/* .refine-images::before,*/
/* #refine-images::before,*/
/* .category-list::before{*/
/* content:"{{ journal2.settings.get('refine_text', '') }}";*/
/* margin-right:{{ journal2.settings.get('refine_grid_item_spacing', '') }}px;*/
/* }*/
/* {% if journal2.settings.get('refine_text_status', 'none') == 'none' %}*/
/*   .refine-images::before,*/
/*   #refine-images::before,*/
/*   .category-list::before{*/
/*   display:none;*/
/*   }*/
/* {% endif %}*/
/* .refine-image {*/
/* padding-right: {{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* margin-bottom: {{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* }*/
/* .refine-images {*/
/* margin-right: -{{ journal2.settings.get('refine_grid_item_spacing', '15') }}px;*/
/* margin-bottom: {{ 15 - journal2.settings.get('refine_grid_item_spacing', '15') }}px;;*/
/* }*/
/* */
/* .product-grid-item {*/
/* margin-bottom: {{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .product-wrapper,*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-right: {{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-top: {{ 20 - journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* .product-grid, #content .box-product{*/
/* margin-right: -{{ journal2.settings.get('product_grid_item_spacing', '20') }}px;*/
/* }*/
/* */
/* /* Mobile Product Spacing *//* */
/* */
/* @media only screen and (max-width: 760px){*/
/* #cart .heading i::before{*/
/* color:{{ journal2.settings.get('cart_icon_mobile') }};*/
/* }*/
/* #cart .heading i{*/
/* background-color:{{ journal2.settings.get('cart_icon_bg_mobile') }};*/
/* }*/
/* div#container,*/
/* .home-page div#container {*/
/* margin-top: 0;*/
/* margin-bottom: 0;*/
/* box-shadow:none;*/
/* }*/
/* .product-grid-item:not(.swiper-slide) {*/
/* margin-bottom: {{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* .product-grid-item:not(.swiper-slide) .product-wrapper,*/
/* .ias-button,*/
/* .ias-loader,*/
/* .ias-noneleft{*/
/* margin-right: {{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* .product-grid, #content .box-product{*/
/* margin-right: -{{ journal2.settings.get('product_grid_item_spacing_mobile', '20') }}px;*/
/* }*/
/* }*/
/* */
/* .button:active{*/
/* box-shadow:{{ journal2.settings.get('button_shadow_active') }};*/
/* }*/
/* */
/* #column-left .oc-module .product-details{*/
/* max-width:{{ journal2.settings.get('left_column_width', '220') - 220 + 145 }}px;*/
/* }*/
/* */
/* #column-right .oc-module .product-details{*/
/* max-width:{{ journal2.settings.get('right_column_width', '220') - 220 + 145 }}px;*/
/* }*/
/* */
/* */
/* {% if journal2.settings.get('body_bg_image:background-image') and journal2.settings.get('body_bg_image:background-attachment') == 'fixed' %}*/
/*   .mobile body,*/
/*   .tablet body{*/
/*   background-image:none;*/
/*   }*/
/*   .mobile body::before,*/
/*   .tablet body::before{*/
/*   content: "";*/
/*   top: 0;*/
/*   left: 0;*/
/*   right: 0;*/
/*   bottom:0;*/
/*   width: 100%;*/
/*   height: 100vh;*/
/*   position: fixed;*/
/*   background-image: {{ journal2.settings.get('body_bg_image:background-image') }};*/
/*   background-attachment: scroll;*/
/*   background-size: initial;*/
/*   background-repeat: inherit;*/
/*   background-position: center top;*/
/*   z-index:-1;*/
/*   }*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('body_bg_image_home:background-image') and journal2.settings.get('body_bg_image_home:background-attachment') == 'fixed' %}*/
/*   .mobile.home-page body,*/
/*   .tablet.home-page body{*/
/*   background-image:none;*/
/*   }*/
/*   .mobile.home-page body::before,*/
/*   .tablet.home-page body::before{*/
/*   content: "";*/
/*   top: 0;*/
/*   left: 0;*/
/*   right: 0;*/
/*   bottom:0;*/
/*   width: 100%;*/
/*   height: 100vh;*/
/*   position: fixed;*/
/*   background-image: {{ journal2.settings.get('body_bg_image_home:background-image') }};*/
/*   background-attachment: scroll;*/
/*   background-size: initial;*/
/*   background-repeat: inherit;*/
/*   background-position: center top;*/
/*   z-index:-1;*/
/*   }*/
/* {% endif %}*/
/* */
/* /* Custom CSS *//* */
/* {{ journal2.settings.get('custom_css') }}*/
/* */
/* */
