<?php

/* journal2/template/journal2/quickview/quickview.twig */
class __TwigTemplate_6e54b15b67c25b0fd622d013584fa2cc14fa1e14d7a56c95d5b041ee7ffcd67e extends Twig_Template
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
        echo "<html dir=\"";
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"product-page quickview ";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "getAll", array(), "method");
        echo "\" style=\"overflow-y: auto\">
<head>
  <title>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</title>
  <meta name=\"robots\" content=\"noindex\">
  <base href=\"";
        // line 5
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "google_fonts", array()), "getFonts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo $context["font"];
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/j-strap.css"), "method");
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/icons.css"), "method");
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/hint.min.css"), "method");
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/journal.css"), "method");
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/module.css"), "method");
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/features.css"), "method");
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/product.css"), "method");
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/flex.css"), "method");
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/rtl.css"), "method");
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "css", array(), "method");
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "cache", array()), "getDeveloperMode", array(), "method") ||  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "getMinifyCss", array(), "method"))) {
            // line 21
            echo "    <link rel=\"stylesheet\" href=\"index.php?route=journal2/assets/css\"/>
  ";
        }
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => "catalog/view/theme/journal2/js/journal.js", 1 => "header"), "method");
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "js", array(0 => "header"), "method");
        echo "
</head>
<body>
<div id=\"container\">
  <div id=\"content\" class=\"product-page-content\">
    <h1 class=\"heading-title\">";
        // line 29
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <div class=\"product-info\">
      <div class=\"left\">
        ";
        // line 32
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 33
            echo "          <div class=\"image\">
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 35
                echo "              <span class=\"label-";
                echo $context["label"];
                echo "\"><b>";
                echo $context["name"];
                echo "</b></span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" id=\"image\" data-largeimg=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" itemprop=\"image\"/></a>
          </div>
          ";
            // line 39
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery"), "method")) {
                // line 40
                echo "            <div class=\"gallery-text\"><span>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_text"), "method");
                echo "</span></div>
          ";
            }
            // line 42
            echo "        ";
        }
        // line 43
        echo "        ";
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 44
            echo "          <div id=\"product-gallery\" class=\"image-additional ";
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) ? ("journal-carousel") : ("image-additional-grid"));
            echo "\">
            ";
            // line 45
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 46
                echo "            <div class=\"swiper\">
              <div class=\"swiper-container\" ";
                // line 47
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                <div class=\"swiper-wrapper\">
                  ";
            }
            // line 50
            echo "                  ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 51
                echo "                    <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo (((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) ? ((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) ? ((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) : ((isset($context["thumb"]) ? $context["thumb"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></a>
                  ";
            }
            // line 53
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "                    <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" itemprop=\"image\"/></a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                  ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 57
                echo "                </div>
              </div>
              <div class=\"swiper-button-next\"></div>
              <div class=\"swiper-button-prev\"></div>
            </div>
            ";
            }
            // line 63
            echo "          </div>
        ";
            // line 64
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 65
                echo "          <script>
            (function () {
              var opts = {
                slidesPerView: parseInt('";
                // line 68
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                slidesPerGroup: parseInt('";
                // line 69
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                spaceBetween: parseInt('";
                // line 70
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                nextButton: \$('#product-gallery .swiper-button-next'),
                prevButton: \$('#product-gallery .swiper-button-prev'),
                autoplay: ";
                // line 73
                echo (($this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
                speed: parseInt('";
                // line 74
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                touchEventsTarget: ";
                // line 75
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 76
                echo "              };

              \$('#product-gallery .swiper-container').swiper(opts);
            })();
          </script>
        ";
            }
            // line 82
            echo "        ";
        }
        // line 83
        echo "        <div class=\"image-gallery\" style=\"display: none !important;\">
          ";
        // line 84
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 85
            echo "            <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" data-original=\"";
            echo (((isset($context["original"]) ? $context["original"] : null)) ? ((isset($context["original"]) ? $context["original"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>
          ";
        }
        // line 87
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 88
            echo "            <a href=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" data-original=\"";
            echo (($this->getAttribute($context["image"], "original", array())) ? ($this->getAttribute($context["image"], "original", array())) : ($this->getAttribute($context["image"], "popup", array())));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </div>
      </div>
      <div class=\"right\">
        ";
        // line 93
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "right")) {
            // line 94
            echo "          <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
        ";
        }
        // line 96
        echo "        <div id=\"product\" class=\"product-options\">
          <ul class=\"list-unstyled description\">
            ";
        // line 98
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method")) {
            // line 99
            echo "              <li class=\"product-views-count\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_views_text"), "method");
            echo ": ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method");
            echo "</li>
            ";
        }
        // line 101
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "manufacturer_image"), "method") == "on")) {
            // line 102
            echo "              <li class=\"brand-logo\">
                <a href=\"";
            // line 103
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"brand-image\">
                  <img src=\"";
            // line 104
            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
            echo "\" width=\"";
            echo (isset($context["manufacturer_image_width"]) ? $context["manufacturer_image_width"] : null);
            echo "\" height=\"";
            echo (isset($context["manufacturer_image_height"]) ? $context["manufacturer_image_height"] : null);
            echo "\" alt=\"";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\"/>
                </a>
                ";
            // line 106
            if ((isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null)) {
                // line 107
                echo "                  <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\" class=\"brand-logo-text\">
                    ";
                // line 108
                echo (isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null);
                echo "
                  </a>
                ";
            }
            // line 111
            echo "              </li>
            ";
        } else {
            // line 113
            echo "              ";
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 114
                echo "                <li class=\"p-brand\">";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo " <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
              ";
            }
            // line 116
            echo "            ";
        }
        // line 117
        echo "            <li class=\"p-model\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"p-model\" itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
            ";
        // line 118
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 119
            echo "              <li class=\"p-rewards\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"p-rewards\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
            ";
        }
        // line 121
        echo "            <li class=\"p-stock\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"journal-stock ";
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
          </ul>
          ";
        // line 123
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method")) {
            // line 124
            echo "            <div class=\"product-sold-count-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method");
            echo "</div>
          ";
        }
        // line 126
        echo "          ";
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 127
            echo "            <div class=\"countdown-wrapper\">
              <div class=\"expire-text\">";
            // line 128
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_product_page_title"), "method");
            echo "</div>
              <div class=\"countdown\"></div>
            </div>
            <script>Journal.countdown(\$('.right .countdown'), '";
            // line 131
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "');</script>
          ";
        }
        // line 133
        echo "          ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 134
            echo "            <ul class=\"list-unstyled price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
              <meta itemprop=\"itemCondition\" content=\"http://schema.org/NewCondition\"/>
              <meta itemprop=\"priceCurrency\" content=\"";
            // line 136
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price_currency"), "method");
            echo "\"/>
              <meta itemprop=\"price\" content=\"";
            // line 137
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price"), "method");
            echo "\"/>
              ";
            // line 138
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_in_stock"), "method") == "yes")) {
                // line 139
                echo "                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
              ";
            }
            // line 141
            echo "              ";
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 142
                echo "                <li class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
              ";
            } else {
                // line 144
                echo "                <li class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                <li class=\"price-new\">";
                // line 145
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</li>
              ";
            }
            // line 147
            echo "              ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 148
                echo "                <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
              ";
            }
            // line 150
            echo "              ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 151
                echo "                <li class=\"reward\">
                  <small>";
                // line 152
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</small>
                </li>
              ";
            }
            // line 155
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 156
                echo "                <li class=\"discounts\">";
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "            </ul>
          ";
        }
        // line 160
        echo "          ";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 161
            echo "            <div class=\"options ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_classes"), "method");
            echo "\">
              <h3>";
            // line 162
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
              ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 164
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 165
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 166
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <select name=\"option[";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 168
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                      ";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 170
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                          ";
                        // line 171
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 172
                            echo "                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                          ";
                        }
                        // line 173
                        echo " </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                    </select>
                  </div>
                ";
                }
                // line 178
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 179
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 180
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 181
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        echo "                        <div class=\"radio\">
                          <label>
                            <input type=\"radio\" name=\"option[";
                        // line 184
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                            ";
                        // line 185
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 186
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 187
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 188
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 189
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo " </div>
                  </div>
                ";
                }
                // line 194
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 195
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 196
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 197
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 198
                        echo "                        <div class=\"checkbox\">
                          <label>
                            <input type=\"checkbox\" name=\"option[";
                        // line 200
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                            ";
                        // line 201
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 202
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 203
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 204
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 205
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    echo " </div>
                  </div>
                ";
                }
                // line 210
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 211
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 212
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <input type=\"text\" name=\"option[";
                    // line 213
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                  </div>
                ";
                }
                // line 216
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 217
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 218
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <textarea name=\"option[";
                    // line 219
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                  </div>
                ";
                }
                // line 222
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 223
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 224
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <button type=\"button\" id=\"button-upload";
                    // line 225
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                    <input type=\"hidden\" name=\"option[";
                    // line 226
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                  </div>
                ";
                }
                // line 229
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 230
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 231
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 233
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 239
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 240
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 241
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 243
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 249
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 250
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 251
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 253
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 259
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "            </div>
            <script>Journal.enableSelectOptionAsButtonsList();</script>
          ";
        }
        // line 263
        echo "          ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 264
            echo "            <hr>
            <h3>";
            // line 265
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 268
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 270
                echo "                  <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 276
        echo "          <div class=\"form-group cart ";
        if (((isset($context["labels"]) ? $context["labels"] : null) && $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "outofstock", array()))) {
            echo " outofstock ";
        }
        echo "\">
            <div>
              ";
        // line 278
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_add_to_cart_button"), "method")) {
            // line 279
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_enquiry", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 280
                echo "                  <div>";
                echo $this->getAttribute($context["tab"], "content", array());
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "                <input type=\"hidden\" name=\"product_id\" value=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
              ";
        } else {
            // line 284
            echo "                <span class=\"qty\">
              <label class=\"control-label text-qty\" for=\"input-quantity\">";
            // line 285
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
            // line 286
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" size=\"2\" data-min-value=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 287
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
              <script>
                /* quantity buttons */
                var \$input = \$('.cart input[name=\"quantity\"]');
                function up() {
                  var val = parseInt(\$input.val(), 10) + 1 || parseInt(\$input.attr('data-min-value'), 10);
                  \$input.val(val);
                }
                function down() {
                  var val = parseInt(\$input.val(), 10) - 1 || 0;
                  var min = parseInt(\$input.attr('data-min-value'), 10) || 1;
                  \$input.val(Math.max(val, min));
                }
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">-</a>').insertBefore(\$input).click(down);
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">+</a>').insertAfter(\$input).click(up);
                \$input.keydown(function (e) {
                  if (e.which === 38) {
                    up();
                    return false;
                  }
                  if (e.which === 40) {
                    down();
                    return false;
                  }
                });
              </script>
              </span>
                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 314
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"button\"><span class=\"button-cart-text\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
              ";
        }
        // line 316
        echo "            </div>
          </div>
          ";
        // line 318
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 319
            echo "            <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
          ";
        }
        // line 321
        echo "          <div class=\"wishlist-compare\">
              <span class=\"links\">
                  <a onclick=\"parent.addToWishList('";
        // line 323
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</a>
                  <a onclick=\"parent.addToCompare('";
        // line 324
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</a>
              </span>
          </div>
          ";
        // line 327
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 328
            echo "            <div class=\"rating\">
              <p>";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 330
                echo "                  ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 331
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
            </div>
          ";
        }
        // line 334
        echo "        </div>
      </div>
    </div>
    ";
        // line 337
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_description_position"), "method") == "bottom")) {
            // line 338
            echo "      <div id=\"tab-description\" class=\"tab-content\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
    ";
        }
        // line 340
        echo "  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
    \$.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
      dataType: 'json',
      beforeSend: function () {
        \$('#recurring-description').html('');
      },
      success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();

        if (json['success']) {
          \$('#recurring-description').html(json['success']);
        }
      }
    });
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('#button-cart').on('click', function () {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function () {
        \$('#button-cart').button('loading');
      },
      complete: function () {
        \$('#button-cart').button('reset');
      },
      success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();
        \$('.form-group').removeClass('has-error');

        if (json['error']) {
          if (json['error']['option']) {
            for (i in json['error']['option']) {
              var element = \$('#input-option' + i.replace('_', '-'));

              if (element.parent().hasClass('input-group')) {
                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              } else {
                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              }
            }
          }

          if (json['error']['recurring']) {
            \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
          }

          // Highlight any found errors
          \$('.text-danger').parent().addClass('has-error');
        }

        if (json['success']) {
          if (!parent.Journal.showNotification(json['success'], json['image'], true)) {
            parent.\$('#notification').html('<div class=\"success\" style=\"display: none;\">' + json['success'] + '<img src=\"catalog/view/theme/default/image/close.png\" alt=\"\" class=\"close\" /></div>');
          }

          \$('.success').fadeIn('slow');

          parent.\$('#cart-total').html(json['total']);

          \$('html, body').animate({scrollTop: 0}, 'slow');

          if (json['redirect']) {
            top.location.href = json['redirect'];
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: false
  });

  \$('button[id^=\\'button-upload\\']').on('click', function () {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function () {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function () {
            \$(node).button('loading');
          },
          complete: function () {
            \$(node).button('reset');
          },
          success: function (json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input').val(json['code']);
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 502
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function () {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 506
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function () {
        \$('#button-review').button('loading');
      },
      complete: function () {
        \$('#button-review').button('reset');
      },
      success: function (json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });

  \$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
  });
  //--></script>
<script>
  Journal.productPage();
  ";
        // line 546
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_auto_update_price", 1 => "1"), "method") == "1")) {
            // line 547
            echo "  Journal.enableProductOptions();
  Journal.updatePrice = true;
  ";
        }
        // line 550
        echo "  ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_cloud_zoom"), "method") == "1")) {
            // line 551
            echo "  Journal.enableCloudZoom('inner');
  ";
        }
        // line 553
        echo "  \$('.image > a').live('click', function () {
    top.location.href = \"index.php?route=product/product&product_id=";
        // line 554
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\";
    return false;
  });
  ";
        // line 557
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_js"), "method");
        echo "
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/quickview/quickview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1389 => 557,  1383 => 554,  1380 => 553,  1376 => 551,  1373 => 550,  1368 => 547,  1366 => 546,  1323 => 506,  1316 => 502,  1152 => 340,  1146 => 338,  1144 => 337,  1139 => 334,  1125 => 331,  1118 => 330,  1114 => 329,  1111 => 328,  1109 => 327,  1101 => 324,  1095 => 323,  1091 => 321,  1085 => 319,  1083 => 318,  1079 => 316,  1072 => 314,  1042 => 287,  1036 => 286,  1032 => 285,  1029 => 284,  1023 => 282,  1014 => 280,  1009 => 279,  1007 => 278,  999 => 276,  993 => 272,  982 => 270,  978 => 269,  974 => 268,  968 => 265,  965 => 264,  962 => 263,  957 => 260,  951 => 259,  938 => 253,  931 => 251,  922 => 250,  919 => 249,  906 => 243,  899 => 241,  890 => 240,  887 => 239,  874 => 233,  867 => 231,  858 => 230,  855 => 229,  847 => 226,  839 => 225,  835 => 224,  826 => 223,  823 => 222,  811 => 219,  805 => 218,  796 => 217,  793 => 216,  781 => 213,  775 => 212,  766 => 211,  763 => 210,  758 => 207,  750 => 205,  743 => 204,  741 => 203,  736 => 202,  720 => 201,  714 => 200,  710 => 198,  704 => 197,  700 => 196,  691 => 195,  688 => 194,  683 => 191,  675 => 189,  668 => 188,  666 => 187,  661 => 186,  645 => 185,  639 => 184,  635 => 182,  629 => 181,  625 => 180,  616 => 179,  613 => 178,  608 => 175,  601 => 173,  594 => 172,  592 => 171,  585 => 170,  581 => 169,  577 => 168,  571 => 167,  565 => 166,  556 => 165,  553 => 164,  549 => 163,  545 => 162,  540 => 161,  537 => 160,  533 => 158,  522 => 156,  517 => 155,  509 => 152,  506 => 151,  503 => 150,  495 => 148,  492 => 147,  487 => 145,  482 => 144,  476 => 142,  473 => 141,  469 => 139,  467 => 138,  463 => 137,  459 => 136,  455 => 134,  452 => 133,  447 => 131,  441 => 128,  438 => 127,  435 => 126,  429 => 124,  427 => 123,  417 => 121,  409 => 119,  407 => 118,  400 => 117,  397 => 116,  387 => 114,  384 => 113,  380 => 111,  374 => 108,  369 => 107,  367 => 106,  356 => 104,  352 => 103,  349 => 102,  346 => 101,  338 => 99,  336 => 98,  332 => 96,  326 => 94,  324 => 93,  319 => 90,  300 => 88,  295 => 87,  279 => 85,  277 => 84,  274 => 83,  271 => 82,  263 => 76,  257 => 75,  253 => 74,  249 => 73,  243 => 70,  239 => 69,  235 => 68,  230 => 65,  228 => 64,  225 => 63,  217 => 57,  214 => 56,  191 => 54,  186 => 53,  166 => 51,  163 => 50,  155 => 47,  152 => 46,  150 => 45,  145 => 44,  142 => 43,  139 => 42,  133 => 40,  131 => 39,  115 => 37,  104 => 35,  100 => 34,  97 => 33,  95 => 32,  89 => 29,  81 => 24,  79 => 23,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  53 => 10,  51 => 9,  42 => 7,  38 => 6,  34 => 5,  29 => 3,  19 => 1,);
    }
}
/* <html dir="{{ direction }}" lang="{{ lang }}" class="product-page quickview {{ journal2.html_classes.getAll() }}" style="overflow-y: auto">*/
/* <head>*/
/*   <title>{{ heading_title }}</title>*/
/*   <meta name="robots" content="noindex">*/
/*   <base href="{{ base }}"/>*/
/*   {% for font in journal2.google_fonts.getFonts() %}*/
/*     <link rel="stylesheet" href="{{ font }}"/>*/
/*   {% endfor %}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/j-strap.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/javascript/font-awesome/css/font-awesome.min.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/icons.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/hint.min.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/journal.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/module.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/features.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/product.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/flex.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/rtl.css') -}}*/
/*   {{- journal2.minifier.css() -}}*/
/*   {% if journal2.cache.getDeveloperMode() or not journal2.minifier.getMinifyCss() %}*/
/*     <link rel="stylesheet" href="index.php?route=journal2/assets/css"/>*/
/*   {% endif %}*/
/*   {{- journal2.minifier.addScript('catalog/view/theme/journal2/js/journal.js', 'header') -}}*/
/*   {{ journal2.minifier.js('header') }}*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*   <div id="content" class="product-page-content">*/
/*     <h1 class="heading-title">{{ heading_title }}</h1>*/
/*     <div class="product-info">*/
/*       <div class="left">*/
/*         {% if thumb %}*/
/*           <div class="image">*/
/*             {% for label, name in labels %}*/
/*               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*             {% endfor %}*/
/*             <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" id="image" data-largeimg="{{ popup }}" itemprop="image"/></a>*/
/*           </div>*/
/*           {% if journal2.settings.get('product_page_gallery') %}*/
/*             <div class="gallery-text"><span>{{ journal2.settings.get('product_page_gallery_text') }}</span></div>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*         {% if images %}*/
/*           <div id="product-gallery" class="image-additional {{ journal2.settings.get('product_page_gallery_carousel') ? 'journal-carousel' : 'image-additional-grid' }}">*/
/*             {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*             <div class="swiper">*/
/*               <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% endif %}*/
/*                   {% if thumb %}*/
/*                     <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ popup_fixed ? popup_fixed : popup }}" title="{{ heading_title }}"><img src="{{ thumb_fixed ? thumb_fixed : thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*                   {% endif %}*/
/*                   {% for image in images %}*/
/*                     <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ image.popup }}" title="{{ heading_title }}"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" itemprop="image"/></a>*/
/*                   {% endfor %}*/
/*                   {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-button-next"></div>*/
/*               <div class="swiper-button-prev"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*           <script>*/
/*             (function () {*/
/*               var opts = {*/
/*                 slidesPerView: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                 slidesPerGroup: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                 spaceBetween: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                 nextButton: $('#product-gallery .swiper-button-next'),*/
/*                 prevButton: $('#product-gallery .swiper-button-prev'),*/
/*                 autoplay: {{ journal.settings.get('product_page_gallery_carousel_autoplay') ? journal2.settings.get('product_page_gallery_carousel_transition_delay', 4000) : 'false' }},*/
/*                 speed: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                 touchEventsTarget: {% if journal2.settings.get('product_page_gallery_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*               };*/
/* */
/*               $('#product-gallery .swiper-container').swiper(opts);*/
/*             })();*/
/*           </script>*/
/*         {% endif %}*/
/*         {% endif %}*/
/*         <div class="image-gallery" style="display: none !important;">*/
/*           {% if thumb %}*/
/*             <a href="{{ popup }}" data-original="{{ original ? original : popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*           {% endif %}*/
/*           {% for image in images %}*/
/*             <a href="{{ image.popup }}" data-original="{{ image.original ? image.original : image.popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="right">*/
/*         {% if journal2.settings.get('product_page_title_position', 'top') == 'right' %}*/
/*           <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*         <div id="product" class="product-options">*/
/*           <ul class="list-unstyled description">*/
/*             {% if journal2.settings.get('product_views') %}*/
/*               <li class="product-views-count">{{ journal2.settings.get('product_page_options_views_text') }}: {{ journal2.settings.get('product_views') }}</li>*/
/*             {% endif %}*/
/*             {% if journal2.settings.get('manufacturer_image') == 'on' %}*/
/*               <li class="brand-logo">*/
/*                 <a href="{{ manufacturers }}" class="brand-image">*/
/*                   <img src="{{ manufacturer_image }}" width="{{ manufacturer_image_width }}" height="{{ manufacturer_image_height }}" alt="{{ manufacturer }}"/>*/
/*                 </a>*/
/*                 {% if manufacturer_image_name %}*/
/*                   <a href="{{ manufacturers }}" class="brand-logo-text">*/
/*                     {{ manufacturer_image_name }}*/
/*                   </a>*/
/*                 {% endif %}*/
/*               </li>*/
/*             {% else %}*/
/*               {% if manufacturer %}*/
/*                 <li class="p-brand">{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*             <li class="p-model">{{ text_model }} <span class="p-model" itemprop="model">{{ model }}</span></li>*/
/*             {% if reward %}*/
/*               <li class="p-rewards">{{ text_reward }} <span class="p-rewards">{{ reward }}</span></li>*/
/*             {% endif %}*/
/*             <li class="p-stock">{{ text_stock }} <span class="journal-stock {{ stock_status }}">{{ stock }}</span></li>*/
/*           </ul>*/
/*           {% if journal2.settings.get('product_sold') %}*/
/*             <div class="product-sold-count-text">{{ journal2.settings.get('product_sold') }}</div>*/
/*           {% endif %}*/
/*           {% if date_end and journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*             <div class="countdown-wrapper">*/
/*               <div class="expire-text">{{ journal2.settings.get('countdown_product_page_title') }}</div>*/
/*               <div class="countdown"></div>*/
/*             </div>*/
/*             <script>Journal.countdown($('.right .countdown'), '{{ date_end }}');</script>*/
/*           {% endif %}*/
/*           {% if price %}*/
/*             <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*               <meta itemprop="itemCondition" content="http://schema.org/NewCondition"/>*/
/*               <meta itemprop="priceCurrency" content="{{ journal2.settings.get('product_price_currency') }}"/>*/
/*               <meta itemprop="price" content="{{ journal2.settings.get('product_price') }}"/>*/
/*               {% if journal2.settings.get('product_in_stock') == 'yes' %}*/
/*                 <link itemprop="availability" href="http://schema.org/InStock"/>*/
/*               {% endif %}*/
/*               {% if not special %}*/
/*                 <li class="product-price">{{ price }}</li>*/
/*               {% else %}*/
/*                 <li class="price-old">{{ price }}</li>*/
/*                 <li class="price-new">{{ special }}</li>*/
/*               {% endif %}*/
/*               {% if tax %}*/
/*                 <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*               {% endif %}*/
/*               {% if points %}*/
/*                 <li class="reward">*/
/*                   <small>{{ text_points }} {{ points }}</small>*/
/*                 </li>*/
/*               {% endif %}*/
/*               {% for discount in discounts %}*/
/*                 <li class="discounts">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           {% endif %}*/
/*           {% if options %}*/
/*             <div class="options {{ journal2.settings.get('product_page_options_push_classes') }}">*/
/*               <h3>{{ text_option }}</h3>*/
/*               {% for option in options %}*/
/*                 {% if option.type == 'select' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/*                       {% for option_value in option.product_option_value %}*/
/*                         <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                           {% if option_value.price %}*/
/*                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                           {% endif %} </option>*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'radio' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="radio">*/
/*                           <label>*/
/*                             <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'checkbox' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="checkbox">*/
/*                           <label>*/
/*                             <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'text' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'textarea' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'file' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'date' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'datetime' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'time' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*             <script>Journal.enableSelectOptionAsButtonsList();</script>*/
/*           {% endif %}*/
/*           {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                   <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*           {% endif %}*/
/*           <div class="form-group cart {% if labels and labels.outofstock %} outofstock {% endif %}">*/
/*             <div>*/
/*               {% if journal2.settings.get('hide_add_to_cart_button') %}*/
/*                 {% for tab in journal2.settings.get('additional_product_enquiry', []) %}*/
/*                   <div>{{ tab.content }}</div>*/
/*                 {% endfor %}*/
/*                 <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*               {% else %}*/
/*                 <span class="qty">*/
/*               <label class="control-label text-qty" for="input-quantity">{{ entry_qty }}</label>*/
/*               <input type="text" name="quantity" value="{{ minimum }}" size="2" data-min-value="{{ minimum }}" id="input-quantity" class="form-control"/>*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*               <script>*/
/*                 /* quantity buttons *//* */
/*                 var $input = $('.cart input[name="quantity"]');*/
/*                 function up() {*/
/*                   var val = parseInt($input.val(), 10) + 1 || parseInt($input.attr('data-min-value'), 10);*/
/*                   $input.val(val);*/
/*                 }*/
/*                 function down() {*/
/*                   var val = parseInt($input.val(), 10) - 1 || 0;*/
/*                   var min = parseInt($input.attr('data-min-value'), 10) || 1;*/
/*                   $input.val(Math.max(val, min));*/
/*                 }*/
/*                 $('<a href="javascript:;" class="journal-stepper">-</a>').insertBefore($input).click(down);*/
/*                 $('<a href="javascript:;" class="journal-stepper">+</a>').insertAfter($input).click(up);*/
/*                 $input.keydown(function (e) {*/
/*                   if (e.which === 38) {*/
/*                     up();*/
/*                     return false;*/
/*                   }*/
/*                   if (e.which === 40) {*/
/*                     down();*/
/*                     return false;*/
/*                   }*/
/*                 });*/
/*               </script>*/
/*               </span>*/
/*                 <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="button"><span class="button-cart-text">{{ button_cart }}</span></button>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% if minimum > 1 %}*/
/*             <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*           {% endif %}*/
/*           <div class="wishlist-compare">*/
/*               <span class="links">*/
/*                   <a onclick="parent.addToWishList('{{ product_id }}');">{{ button_wishlist }}</a>*/
/*                   <a onclick="parent.addToCompare('{{ product_id }}');">{{ button_compare }}</a>*/
/*               </span>*/
/*           </div>*/
/*           {% if review_status %}*/
/*             <div class="rating">*/
/*               <p>{% for i in 1..5 %}*/
/*                   {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                 {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% if journal2.settings.get('quickview_description_position') == 'bottom' %}*/
/*       <div id="tab-description" class="tab-content">{{ description }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/getRecurringDescription',*/
/*       type: 'post',*/
/*       data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#recurring-description').html('');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/* */
/*         if (json['success']) {*/
/*           $('#recurring-description').html(json['success']);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-cart').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#button-cart').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button-cart').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/*         $('.form-group').removeClass('has-error');*/
/* */
/*         if (json['error']) {*/
/*           if (json['error']['option']) {*/
/*             for (i in json['error']['option']) {*/
/*               var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*               if (element.parent().hasClass('input-group')) {*/
/*                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               } else {*/
/*                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               }*/
/*             }*/
/*           }*/
/* */
/*           if (json['error']['recurring']) {*/
/*             $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*           }*/
/* */
/*           // Highlight any found errors*/
/*           $('.text-danger').parent().addClass('has-error');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           if (!parent.Journal.showNotification(json['success'], json['image'], true)) {*/
/*             parent.$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');*/
/*           }*/
/* */
/*           $('.success').fadeIn('slow');*/
/* */
/*           parent.$('#cart-total').html(json['total']);*/
/* */
/*           $('html, body').animate({scrollTop: 0}, 'slow');*/
/* */
/*           if (json['redirect']) {*/
/*             top.location.href = json['redirect'];*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: false*/
/*   });*/
/* */
/*   $('button[id^=\'button-upload\']').on('click', function () {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function () {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function () {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function () {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function (json) {*/
/*             $('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(node).parent().find('input').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function (xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#review').delegate('.pagination a', 'click', function (e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function () {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).ready(function () {*/
/*     $('.thumbnails').magnificPopup({*/
/*       type: 'image',*/
/*       delegate: 'a',*/
/*       gallery: {*/
/*         enabled: true*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script>*/
/*   Journal.productPage();*/
/*   {% if journal2.settings.get('product_page_auto_update_price', '1') == '1' %}*/
/*   Journal.enableProductOptions();*/
/*   Journal.updatePrice = true;*/
/*   {% endif %}*/
/*   {% if journal2.settings.get('quickview_cloud_zoom') == '1' %}*/
/*   Journal.enableCloudZoom('inner');*/
/*   {% endif %}*/
/*   $('.image > a').live('click', function () {*/
/*     top.location.href = "index.php?route=product/product&product_id={{ product_id }}";*/
/*     return false;*/
/*   });*/
/*   {{ journal2.settings.get('custom_js') }}*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
