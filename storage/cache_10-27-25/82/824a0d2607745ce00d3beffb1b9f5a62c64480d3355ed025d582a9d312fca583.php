<?php

/* journal2/template/product/product.twig */
class __TwigTemplate_1fb6b8b648e8d00e9ff3e448018aa4911c62d68bf65f7e27e07289c28e78b4f4 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-page-content\" itemscope itemtype=\"http://schema.org/Product\">
      ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "top")) {
            // line 18
            echo "        <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 20
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row product-info ";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "split_ratio"), "method");
        echo "\">
        <div class=\"left\">
          ";
        // line 23
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 24
            echo "            <div class=\"image\">
              ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 26
                echo "                <span class=\"label-";
                echo $context["label"];
                echo "\"><b>";
                echo $context["name"];
                echo "</b></span>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "              <a href=\"";
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
            // line 30
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery"), "method")) {
                // line 31
                echo "              <div class=\"gallery-text\"><span>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_text"), "method");
                echo "</span></div>
            ";
            }
            // line 33
            echo "          ";
        }
        // line 34
        echo "          ";
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 35
            echo "            <div id=\"product-gallery\" class=\"image-additional ";
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) ? ("journal-carousel") : ("image-additional-grid"));
            echo "\">
              ";
            // line 36
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 37
                echo "              <div class=\"swiper\">
                <div class=\"swiper-container\" ";
                // line 38
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                  <div class=\"swiper-wrapper\">
                    ";
            }
            // line 41
            echo "                    ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 42
                echo "                      <a class=\"swiper-slide\" ";
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
            // line 44
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                echo "                      <a class=\"swiper-slide\" ";
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
            // line 47
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 48
                echo "                  </div>
                </div>
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
              </div>
              ";
            }
            // line 54
            echo "            </div>
          ";
            // line 55
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 56
                echo "            <script>
              (function () {
                var opts = {
                  slidesPerView: parseInt('";
                // line 59
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  slidesPerGroup: parseInt('";
                // line 60
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  spaceBetween: parseInt('";
                // line 61
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                  nextButton: \$('#product-gallery .swiper-button-next'),
                  prevButton: \$('#product-gallery .swiper-button-prev'),
                  autoplay: ";
                // line 64
                echo (($this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
                  speed: 400,
                  touchEventsTarget: ";
                // line 66
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 67
                echo "                };

                \$('#product-gallery .swiper-container').swiper(opts);
              })();
            </script>
          ";
            }
            // line 73
            echo "          ";
        }
        // line 74
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_image", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 75
            echo "            <div class=\"journal-custom-tab\">
              ";
            // line 76
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 77
                echo "                <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
              ";
            }
            // line 79
            echo "              ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 80
                echo "                <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
              ";
            }
            // line 82
            echo "              ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "          <div class=\"image-gallery\" style=\"display: none !important;\">
            ";
        // line 86
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 87
            echo "              <a href=\"";
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
        // line 89
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 90
            echo "              <a href=\"";
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
        // line 92
        echo "          </div>
          ";
        // line 93
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "left")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 94
            echo "            <div class=\"social share-this\">
              <div class=\"social-loaded\">
                <script type=\"text/javascript\">var switchTo5x = true;</script>
                <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 98
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "                  <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "              </div>
            </div>
          ";
        }
        // line 105
        echo "          <meta itemprop=\"description\" content=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_description"), "method");
        echo "\"/>
          <div class=\"product-tabs\">
            ";
        // line 107
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "bottom")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 108
            echo "              <div class=\"social share-this\">
                <div class=\"social-loaded\">
                  <script type=\"text/javascript\">var switchTo5x = true;</script>
                  <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                  <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 112
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                  ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 114
                echo "                    <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                </div>
              </div>
            ";
        }
        // line 119
        echo "            <ul id=\"tabs\" class=\"nav nav-tabs htabs\">
              ";
        // line 120
        $context["is_active"] = true;
        // line 121
        echo "              ";
        if (((isset($context["description"]) ? $context["description"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_product_description"), "method"))) {
            // line 122
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#tab-description\" data-toggle=\"tab\">";
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a></li>
              ";
        }
        // line 124
        echo "              ";
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 125
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
              ";
        }
        // line 127
        echo "              ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 128
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
              ";
        }
        // line 130
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_tabs", 1 => array()), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 131
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#additional-product-tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["tab"], "name", array());
            echo "</a></li>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            </ul>
            <div class=\"tabs-content\">
              ";
        // line 135
        $context["is_active"] = true;
        // line 136
        echo "              ";
        if (((isset($context["description"]) ? $context["description"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_product_description"), "method"))) {
            // line 137
            echo "                <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-description\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
              ";
        }
        // line 139
        echo "              ";
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 140
            echo "                <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-specification\">
                  <table class=\"table table-bordered attribute\">
                    ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 143
                echo "                      <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 145
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                      </tr>
                      </thead>
                      <tbody>
                      ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 150
                    echo "                        <tr>
                          <td>";
                    // line 151
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                          <td>";
                    // line 152
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "                      </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                  </table>
                </div>
              ";
        }
        // line 160
        echo "              ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 161
            echo "                <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-review\" ";
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                echo " itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\" ";
            }
            echo ">
                  ";
            // line 162
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                // line 163
                echo "                    <meta itemprop=\"ratingValue\" content=\"";
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\"/>
                    <meta itemprop=\"reviewCount\" content=\"";
                // line 164
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_num_reviews"), "method");
                echo "\"/>
                    <meta itemprop=\"bestRating\" content=\"5\"/>
                    <meta itemprop=\"worstRating\" content=\"1\"/>
                  ";
            }
            // line 168
            echo "                  <form class=\"form-horizontal\" id=\"form-review\">
                    <div id=\"review\"></div>
                    <h2 id=\"review-title\">";
            // line 170
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                    ";
            // line 171
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 172
                echo "                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\" for=\"input-name\">";
                // line 174
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                          <input type=\"text\" name=\"name\" value=\"";
                // line 175
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\" for=\"input-review\">";
                // line 180
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                          <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                          <div class=\"help-block\">";
                // line 182
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\">";
                // line 187
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                          &nbsp;&nbsp;&nbsp; ";
                // line 188
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"1\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"2\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"3\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"4\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"5\"/>
                          &nbsp;";
                // line 198
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                      </div>
                      ";
                // line 200
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                      <div class=\"buttons clearfix\">
                        <div class=\"pull-right\">
                          <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 203
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary button\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                        </div>
                      </div>
                    ";
            } else {
                // line 207
                echo "                      ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                    ";
            }
            // line 209
            echo "                  </form>
                </div>
              ";
        }
        // line 212
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_tabs", 1 => array()), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 213
            echo "                <div id=\"additional-product-tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"tab-pane tab-content journal-custom-tab ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\">";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "</div>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "            </div>
          </div>
        </div>

        TIEMPOS DE ENTREGA
        ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "data_categorias"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 221
            echo "          ";
            if (($this->getAttribute($context["cat"], "category_id", array()) == "76")) {
                // line 222
                echo "              INMEDIATA
          ";
            } elseif (($this->getAttribute(            // line 223
$context["cat"], "category_id", array()) == "77")) {
                // line 224
                echo "              5 a 10 días
          ";
            } elseif (($this->getAttribute(            // line 225
$context["cat"], "category_id", array()) == "85")) {
                // line 226
                echo "              15 a 20 días
          ";
            } elseif (($this->getAttribute(            // line 227
$context["cat"], "category_id", array()) == "92")) {
                // line 228
                echo "              25 a 35 días
          ";
            } else {
                // line 230
                echo "              No está seteado la entrega, consultenos.
          ";
            }
            // line 232
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "

        ";
        // line 235
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 236
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 237
            echo "        ";
        } else {
            // line 238
            echo "          ";
            $context["class"] = "col-sm-4";
            // line 239
            echo "        ";
        }
        // line 240
        echo "        <div class=\"right\">
          ";
        // line 241
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "right")) {
            // line 242
            echo "            <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
          ";
        }
        // line 244
        echo "          <div id=\"product\" class=\"product-options\">
            ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_top", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 246
            echo "              <div class=\"journal-custom-tab\">
                ";
            // line 247
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 248
                echo "                  <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
                ";
            }
            // line 250
            echo "                ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 251
                echo "                  <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
                ";
            }
            // line 253
            echo "                ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "            <ul class=\"list-unstyled description\">
              ";
        // line 257
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method")) {
            // line 258
            echo "                <li class=\"product-views-count\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_views_text"), "method");
            echo ": ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method");
            echo "</li>
              ";
        }
        // line 260
        echo "              ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "manufacturer_image"), "method") == "on")) {
            // line 261
            echo "                <li class=\"brand-logo\">
                  <a href=\"";
            // line 262
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"brand-image\">
                    <img src=\"";
            // line 263
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
            // line 265
            if ((isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null)) {
                // line 266
                echo "                    <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\" class=\"brand-logo-text\">
                      ";
                // line 267
                echo (isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null);
                echo "
                    </a>
                  ";
            }
            // line 270
            echo "                </li>
              ";
        } else {
            // line 272
            echo "                ";
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 273
                echo "                  <li class=\"p-brand\">";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo " <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
                ";
            }
            // line 275
            echo "              ";
        }
        // line 276
        echo "              <li class=\"p-model\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"p-model\" itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
              ";
        // line 277
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 278
            echo "                <li class=\"p-rewards\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"p-rewards\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
              ";
        }
        // line 280
        echo "              <li class=\"p-stock\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"journal-stock ";
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
            </ul>
            ";
        // line 282
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method")) {
            // line 283
            echo "              <div class=\"product-sold-count-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method");
            echo "</div>
            ";
        }
        // line 285
        echo "            ";
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 286
            echo "              <div class=\"countdown-wrapper\">
                <div class=\"expire-text\">";
            // line 287
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_product_page_title"), "method");
            echo "</div>
                <div class=\"countdown\"></div>
              </div>
              <script>Journal.countdown(\$('.right .countdown'), '";
            // line 290
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "');</script>
            ";
        }
        // line 292
        echo "            ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 293
            echo "              <ul class=\"list-unstyled price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
                <meta itemprop=\"itemCondition\" content=\"http://schema.org/NewCondition\"/>
                <meta itemprop=\"priceCurrency\" content=\"";
            // line 295
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price_currency"), "method");
            echo "\"/>
                <meta itemprop=\"price\" content=\"";
            // line 296
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price"), "method");
            echo "\"/>
                ";
            // line 297
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_in_stock"), "method") == "yes")) {
                // line 298
                echo "                  <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
                ";
            }
            // line 300
            echo "                ";
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 301
                echo "                  <li class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                ";
            } else {
                // line 303
                echo "                  <li class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                  <li class=\"price-new\">";
                // line 304
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</li>
                ";
            }
            // line 306
            echo "                ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 307
                echo "                  <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
                ";
            }
            // line 309
            echo "                ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 310
                echo "                  <li class=\"reward\">
                    <small>";
                // line 311
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</small>
                  </li>
                ";
            }
            // line 314
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 315
                echo "                  <li class=\"discounts\">";
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "              </ul>
            ";
        }
        // line 319
        echo "            ";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 320
            echo "              <div class=\"options ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_classes"), "method");
            echo "\">
                <h3>";
            // line 321
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
                ";
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 323
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 324
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 325
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <select name=\"option[";
                    // line 326
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 327
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                        ";
                    // line 328
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 329
                        echo "                          <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 330
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 331
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 332
                        echo " </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 334
                    echo "                      </select>
                    </div>
                  ";
                }
                // line 337
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 338
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 339
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div id=\"input-option";
                    // line 340
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 341
                        echo "                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" name=\"option[";
                        // line 343
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                              ";
                        // line 344
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
                        // line 345
                        echo "                              ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                              ";
                        // line 346
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 347
                            echo "                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                              ";
                        }
                        // line 348
                        echo " </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 350
                    echo " </div>
                    </div>
                  ";
                }
                // line 353
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 354
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 355
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div id=\"input-option";
                    // line 356
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 357
                        echo "                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" name=\"option[";
                        // line 359
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                              ";
                        // line 360
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
                        // line 361
                        echo "                              ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                              ";
                        // line 362
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 363
                            echo "                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                              ";
                        }
                        // line 364
                        echo " </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 366
                    echo " </div>
                    </div>
                  ";
                }
                // line 369
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 370
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 371
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <input type=\"text\" name=\"option[";
                    // line 372
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
                // line 375
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 376
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 377
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <textarea name=\"option[";
                    // line 378
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
                // line 381
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 382
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 383
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <button type=\"button\" id=\"button-upload";
                    // line 384
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                      <input type=\"hidden\" name=\"option[";
                    // line 385
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                    </div>
                  ";
                }
                // line 388
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 389
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 390
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 392
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
                // line 398
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 399
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 400
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 402
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
                // line 408
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 409
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 410
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 412
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
                // line 418
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 419
            echo "              </div>
              <script>Journal.enableSelectOptionAsButtonsList();</script>
            ";
        }
        // line 422
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 423
            echo "              <hr>
              <h3>";
            // line 424
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 427
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 429
                echo "                    <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
            ";
        }
        // line 435
        echo "            <div class=\"form-group cart ";
        if (((isset($context["labels"]) ? $context["labels"] : null) && $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "outofstock", array()))) {
            echo " outofstock ";
        }
        echo "\">
              <div>
                ";
        // line 437
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_add_to_cart_button"), "method")) {
            // line 438
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_enquiry", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 439
                echo "                    <div>";
                echo $this->getAttribute($context["tab"], "content", array());
                echo "</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 441
            echo "                  <input type=\"hidden\" name=\"product_id\" value=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
                ";
        } else {
            // line 443
            echo "                  <span class=\"qty\">
              <label class=\"control-label text-qty\" for=\"input-quantity\">";
            // line 444
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
            // line 445
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" size=\"2\" data-min-value=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 446
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
            // line 473
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"button\"><span class=\"button-cart-text\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
                ";
        }
        // line 475
        echo "              </div>
            </div>
            ";
        // line 477
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 478
            echo "              <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 480
        echo "            <div class=\"wishlist-compare\">
              <span class=\"links\">
                  <a onclick=\"addToWishList('";
        // line 482
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</a>
                  <a onclick=\"addToCompare('";
        // line 483
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</a>
              </span>
            </div>
            ";
        // line 486
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 487
            echo "              <div class=\"rating\">
                <p>";
            // line 488
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 489
                echo "                    ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 490
                echo "                  ";
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
        // line 493
        echo "            ";
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "right")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 494
            echo "              <div class=\"social share-this\">
                <div class=\"social-loaded\">
                  <script type=\"text/javascript\">var switchTo5x = true;</script>
                  <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                  <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 498
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                  ";
            // line 499
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 500
                echo "                    <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            echo "                </div>
              </div>
            ";
        }
        // line 505
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_bottom", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 506
            echo "              <div class=\"journal-custom-tab\">
                ";
            // line 507
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 508
                echo "                  <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
                ";
            }
            // line 510
            echo "                ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 511
                echo "                  <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
                ";
            }
            // line 513
            echo "                ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 516
        echo "          </div>
        </div>
      </div>
      ";
        // line 519
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 520
            echo "        <p class=\"tags\"><b>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</b>
          ";
            // line 521
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 522
                echo "            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
            ";
                } else {
                    // line 523
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 524
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
      ";
        }
        // line 526
        echo "      ";
        if (((isset($context["products"]) ? $context["products"] : null) && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_status"), "method"))) {
            // line 527
            echo "        <div class=\"box related-products ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                echo " journal-carousel ";
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") == "top")) {
                    echo " arrows-top ";
                }
                echo " ";
            }
            echo "\">
          <div>
            <div class=\"box-heading\">";
            // line 529
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</div>
            <div class=\"box-content\">
              ";
            // line 531
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 532
                echo "              <div class=\"swiper\">
                <div class=\"swiper-container\" ";
                // line 533
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                  <div class=\"swiper-wrapper\">
                    ";
            }
            // line 536
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 537
                echo "                      <div class=\"product-grid-item ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo " ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                    echo " swiper-slide ";
                }
                echo " display-";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                echo "\">
                        <div class=\"product-thumb product-wrapper ";
                // line 538
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                          <div class=\"image ";
                // line 539
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                            <a href=\"";
                // line 540
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                              <img class=\"lazy first-image\" width=\"";
                // line 541
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                            </a>
                            ";
                // line 543
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 544
                    echo "                              <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 546
                echo "                            ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 547
                    echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 548
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                            ";
                }
                // line 550
                echo "                          </div>
                          <div class=\"product-details\">
                            <div class=\"caption\">
                              <h4 class=\"name\"><a href=\"";
                // line 553
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                              <p class=\"description\">";
                // line 554
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                              ";
                // line 555
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 556
                    echo "                                <div class=\"price\">
                                  ";
                    // line 557
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 558
                        echo "                                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                                  ";
                    } else {
                        // line 560
                        echo "                                    <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                  ";
                    }
                    // line 562
                    echo "                                </div>
                              ";
                }
                // line 564
                echo "                              ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 565
                    echo "                                <div class=\"rating\">
                                  ";
                    // line 566
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 567
                        echo "                                    ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 568
                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        } else {
                            // line 570
                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        }
                        // line 572
                        echo "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 573
                    echo "                                </div>
                              ";
                }
                // line 575
                echo "                            </div>
                            <div class=\"button-group\">
                              ";
                // line 577
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 578
                    echo "                                <div class=\"cart enquiry-button\">
                                  <a href=\"javascript:Journal.openPopup('";
                    // line 579
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                    echo "', '";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" data-clk=\"addToCart('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                    echo "<span class=\"button-cart-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "</span></a>
                                </div>
                              ";
                } else {
                    // line 582
                    echo "                                <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
                                  <a onclick=\"addToCart('";
                    // line 583
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span><i class=\"button-right-icon\"></i></a>
                                </div>
                              ";
                }
                // line 586
                echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 587
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 593
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 594
                echo "                  </div>
                </div>
                ";
                // line 596
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none"))) {
                    // line 597
                    echo "                  <div class=\"swiper-button-next\"></div>
                  <div class=\"swiper-button-prev\"></div>
                ";
                }
                // line 600
                echo "                ";
            }
            // line 601
            echo "              </div>
              ";
            // line 602
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method"))) {
                // line 603
                echo "                <div class=\"swiper-pagination\"></div>
              ";
            }
            // line 605
            echo "            </div>
          </div>
        </div>

      ";
            // line 609
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
                // line 610
                echo "        <script>
          \$('.related-products .product-grid-item > div').each(function () {
            var \$new = \$(this).find('.price-new');
            if (\$new.length && \$new.attr('data-end-date')) {
              \$(this).find('.image').append('<div class=\"countdown\"></div>');
            }
            Journal.countdown(\$(this).find('.countdown'), \$new.attr('data-end-date'));
          });
        </script>
      ";
            }
            // line 620
            echo "      ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 621
                echo "        ";
                $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_items_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count", 1 => 0), "method"))));
                // line 622
                echo "        ";
                $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(                // line 623
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(                // line 624
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(                // line 625
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(                // line 626
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(                // line 627
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
                // line 629
                echo "        <script>
          (function () {
            var grid = \$.parseJSON('";
                // line 631
                echo twig_jsonencode_filter((isset($context["grid"]) ? $context["grid"] : null));
                echo "');

            var breakpoints = {
              470: {
                slidesPerView: grid[0][1],
                slidesPerGroup: grid[0][1]
              },
              760: {
                slidesPerView: grid[1][1],
                slidesPerGroup: grid[1][1]
              },
              980: {
                slidesPerView: grid[2][1],
                slidesPerGroup: grid[2][1]
              },
              1220: {
                slidesPerView: grid[3][1],
                slidesPerGroup: grid[3][1]
              }
            };

            var opts = {
              slidesPerView: grid[4][1],
              slidesPerGroup: grid[4][1],
              breakpoints: breakpoints,
              spaceBetween: parseInt('";
                // line 656
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "15"), "method");
                echo "', 10),
              pagination: ";
                // line 657
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method")) {
                    echo " \$('.related-products .swiper-pagination') ";
                } else {
                    echo " false ";
                }
                echo ",
              paginationClickable: true,
              nextButton: ";
                // line 659
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-next') ";
                } else {
                    echo " false ";
                }
                echo ",
              prevButton: ";
                // line 660
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-prev') ";
                } else {
                    echo " false ";
                }
                echo ",
              autoplay: ";
                // line 661
                echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_autoplay"), "method") > 0)) ? (4000) : ("false"));
                echo ",
              autoplayStopOnHover: ";
                // line 662
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_pause_on_hover"), "method")) {
                    echo " true ";
                } else {
                    echo " false ";
                }
                echo ",
              speed: 400,
              touchEventsTarget: ";
                // line 664
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 665
                echo "            };

            \$('.related-products .swiper-container').swiper(opts);
          })();
        </script>
      ";
            }
            // line 671
            echo "      ";
        }
        // line 672
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
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
  \$('#button-cart').on('click', function() {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$('#button-cart').button('loading');
      },
      complete: function() {
        \$('#button-cart').button('reset');
      },
      success: function(json) {
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
          if (!Journal.showNotification(json['success'], json['image'], true)) {
            \$('.breadcrumb').after('<div class=\"alert alert-success success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
          }

          \$('#cart-total').html(json['total']);

          if (Journal.scrollToTop) {
            \$('html, body').animate({ scrollTop: 0 }, 'slow');
          }

          \$('#cart ul').load('index.php?route=common/cart/info ul li');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
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
        // line 834
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function () {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 838
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
";
        // line 876
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2411 => 876,  2370 => 838,  2363 => 834,  2197 => 672,  2194 => 671,  2186 => 665,  2180 => 664,  2171 => 662,  2167 => 661,  2159 => 660,  2151 => 659,  2142 => 657,  2138 => 656,  2110 => 631,  2106 => 629,  2104 => 627,  2103 => 626,  2102 => 625,  2101 => 624,  2100 => 623,  2098 => 622,  2095 => 621,  2092 => 620,  2080 => 610,  2078 => 609,  2072 => 605,  2068 => 603,  2066 => 602,  2063 => 601,  2060 => 600,  2055 => 597,  2053 => 596,  2049 => 594,  2046 => 593,  2030 => 587,  2021 => 586,  2011 => 583,  2004 => 582,  1988 => 579,  1985 => 578,  1983 => 577,  1979 => 575,  1975 => 573,  1969 => 572,  1965 => 570,  1961 => 568,  1958 => 567,  1954 => 566,  1951 => 565,  1948 => 564,  1944 => 562,  1936 => 560,  1930 => 558,  1928 => 557,  1925 => 556,  1923 => 555,  1919 => 554,  1913 => 553,  1908 => 550,  1899 => 548,  1890 => 547,  1887 => 546,  1876 => 544,  1872 => 543,  1857 => 541,  1847 => 540,  1841 => 539,  1835 => 538,  1822 => 537,  1817 => 536,  1809 => 533,  1806 => 532,  1804 => 531,  1799 => 529,  1787 => 527,  1784 => 526,  1775 => 524,  1768 => 523,  1758 => 522,  1754 => 521,  1749 => 520,  1747 => 519,  1742 => 516,  1732 => 513,  1726 => 511,  1723 => 510,  1715 => 508,  1713 => 507,  1710 => 506,  1705 => 505,  1700 => 502,  1688 => 500,  1684 => 499,  1680 => 498,  1674 => 494,  1671 => 493,  1657 => 490,  1650 => 489,  1646 => 488,  1643 => 487,  1641 => 486,  1633 => 483,  1627 => 482,  1623 => 480,  1617 => 478,  1615 => 477,  1611 => 475,  1604 => 473,  1574 => 446,  1568 => 445,  1564 => 444,  1561 => 443,  1555 => 441,  1546 => 439,  1541 => 438,  1539 => 437,  1531 => 435,  1525 => 431,  1514 => 429,  1510 => 428,  1506 => 427,  1500 => 424,  1497 => 423,  1494 => 422,  1489 => 419,  1483 => 418,  1470 => 412,  1463 => 410,  1454 => 409,  1451 => 408,  1438 => 402,  1431 => 400,  1422 => 399,  1419 => 398,  1406 => 392,  1399 => 390,  1390 => 389,  1387 => 388,  1379 => 385,  1371 => 384,  1367 => 383,  1358 => 382,  1355 => 381,  1343 => 378,  1337 => 377,  1328 => 376,  1325 => 375,  1313 => 372,  1307 => 371,  1298 => 370,  1295 => 369,  1290 => 366,  1282 => 364,  1275 => 363,  1273 => 362,  1268 => 361,  1252 => 360,  1246 => 359,  1242 => 357,  1236 => 356,  1232 => 355,  1223 => 354,  1220 => 353,  1215 => 350,  1207 => 348,  1200 => 347,  1198 => 346,  1193 => 345,  1177 => 344,  1171 => 343,  1167 => 341,  1161 => 340,  1157 => 339,  1148 => 338,  1145 => 337,  1140 => 334,  1133 => 332,  1126 => 331,  1124 => 330,  1117 => 329,  1113 => 328,  1109 => 327,  1103 => 326,  1097 => 325,  1088 => 324,  1085 => 323,  1081 => 322,  1077 => 321,  1072 => 320,  1069 => 319,  1065 => 317,  1054 => 315,  1049 => 314,  1041 => 311,  1038 => 310,  1035 => 309,  1027 => 307,  1024 => 306,  1019 => 304,  1014 => 303,  1008 => 301,  1005 => 300,  1001 => 298,  999 => 297,  995 => 296,  991 => 295,  987 => 293,  984 => 292,  979 => 290,  973 => 287,  970 => 286,  967 => 285,  961 => 283,  959 => 282,  949 => 280,  941 => 278,  939 => 277,  932 => 276,  929 => 275,  919 => 273,  916 => 272,  912 => 270,  906 => 267,  901 => 266,  899 => 265,  888 => 263,  884 => 262,  881 => 261,  878 => 260,  870 => 258,  868 => 257,  865 => 256,  855 => 253,  849 => 251,  846 => 250,  838 => 248,  836 => 247,  833 => 246,  829 => 245,  826 => 244,  820 => 242,  818 => 241,  815 => 240,  812 => 239,  809 => 238,  806 => 237,  803 => 236,  801 => 235,  797 => 233,  791 => 232,  787 => 230,  783 => 228,  781 => 227,  778 => 226,  776 => 225,  773 => 224,  771 => 223,  768 => 222,  765 => 221,  761 => 220,  754 => 215,  730 => 213,  712 => 212,  707 => 209,  701 => 207,  692 => 203,  686 => 200,  681 => 198,  668 => 188,  664 => 187,  656 => 182,  651 => 180,  643 => 175,  639 => 174,  635 => 172,  633 => 171,  629 => 170,  625 => 168,  618 => 164,  613 => 163,  611 => 162,  599 => 161,  596 => 160,  591 => 157,  584 => 155,  575 => 152,  571 => 151,  568 => 150,  564 => 149,  557 => 145,  553 => 143,  549 => 142,  540 => 140,  537 => 139,  526 => 137,  523 => 136,  521 => 135,  517 => 133,  492 => 131,  474 => 130,  462 => 128,  459 => 127,  447 => 125,  444 => 124,  432 => 122,  429 => 121,  427 => 120,  424 => 119,  419 => 116,  407 => 114,  403 => 113,  399 => 112,  393 => 108,  391 => 107,  385 => 105,  380 => 102,  368 => 100,  364 => 99,  360 => 98,  354 => 94,  352 => 93,  349 => 92,  330 => 90,  325 => 89,  309 => 87,  307 => 86,  304 => 85,  294 => 82,  288 => 80,  285 => 79,  277 => 77,  275 => 76,  272 => 75,  267 => 74,  264 => 73,  256 => 67,  250 => 66,  245 => 64,  239 => 61,  235 => 60,  231 => 59,  226 => 56,  224 => 55,  221 => 54,  213 => 48,  210 => 47,  187 => 45,  182 => 44,  162 => 42,  159 => 41,  151 => 38,  148 => 37,  146 => 36,  141 => 35,  138 => 34,  135 => 33,  129 => 31,  127 => 30,  111 => 28,  100 => 26,  96 => 25,  93 => 24,  91 => 23,  86 => 21,  81 => 20,  75 => 18,  73 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} product-page-content" itemscope itemtype="http://schema.org/Product">*/
/*       {% if journal2.settings.get('product_page_title_position', 'top') == 'top' %}*/
/*         <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="row product-info {{ journal2.settings.get('split_ratio') }}">*/
/*         <div class="left">*/
/*           {% if thumb %}*/
/*             <div class="image">*/
/*               {% for label, name in labels %}*/
/*                 <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*               {% endfor %}*/
/*               <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" id="image" data-largeimg="{{ popup }}" itemprop="image"/></a>*/
/*             </div>*/
/*             {% if journal2.settings.get('product_page_gallery') %}*/
/*               <div class="gallery-text"><span>{{ journal2.settings.get('product_page_gallery_text') }}</span></div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if images %}*/
/*             <div id="product-gallery" class="image-additional {{ journal2.settings.get('product_page_gallery_carousel') ? 'journal-carousel' : 'image-additional-grid' }}">*/
/*               {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*               <div class="swiper">*/
/*                 <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                   <div class="swiper-wrapper">*/
/*                     {% endif %}*/
/*                     {% if thumb %}*/
/*                       <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ popup_fixed ? popup_fixed : popup }}" title="{{ heading_title }}"><img src="{{ thumb_fixed ? thumb_fixed : thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*                     {% endif %}*/
/*                     {% for image in images %}*/
/*                       <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ image.popup }}" title="{{ heading_title }}"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" itemprop="image"/></a>*/
/*                     {% endfor %}*/
/*                     {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="swiper-button-next"></div>*/
/*                 <div class="swiper-button-prev"></div>*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*             <script>*/
/*               (function () {*/
/*                 var opts = {*/
/*                   slidesPerView: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   slidesPerGroup: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   spaceBetween: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                   nextButton: $('#product-gallery .swiper-button-next'),*/
/*                   prevButton: $('#product-gallery .swiper-button-prev'),*/
/*                   autoplay: {{ journal.settings.get('product_page_gallery_carousel_autoplay') ? journal2.settings.get('product_page_gallery_carousel_transition_delay', 4000) : 'false' }},*/
/*                   speed: 400,*/
/*                   touchEventsTarget: {% if journal2.settings.get('product_page_gallery_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*                 };*/
/* */
/*                 $('#product-gallery .swiper-container').swiper(opts);*/
/*               })();*/
/*             </script>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% for tab in journal2.settings.get('additional_product_description_image', []) %}*/
/*             <div class="journal-custom-tab">*/
/*               {% if tab.has_icon %}*/
/*                 <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*               {% endif %}*/
/*               {% if tab.name %}*/
/*                 <h3>{{ tab.name }}</h3>*/
/*               {% endif %}*/
/*               {{ tab.content }}*/
/*             </div>*/
/*           {% endfor %}*/
/*           <div class="image-gallery" style="display: none !important;">*/
/*             {% if thumb %}*/
/*               <a href="{{ popup }}" data-original="{{ original ? original : popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*             {% endif %}*/
/*             {% for image in images %}*/
/*               <a href="{{ image.popup }}" data-original="{{ image.original ? image.original : image.popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'left' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*             <div class="social share-this">*/
/*               <div class="social-loaded">*/
/*                 <script type="text/javascript">var switchTo5x = true;</script>*/
/*                 <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                 <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                 {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                   <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           <meta itemprop="description" content="{{ journal2.settings.get('product_description') }}"/>*/
/*           <div class="product-tabs">*/
/*             {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'bottom' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*               <div class="social share-this">*/
/*                 <div class="social-loaded">*/
/*                   <script type="text/javascript">var switchTo5x = true;</script>*/
/*                   <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                   <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                   {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                     <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <ul id="tabs" class="nav nav-tabs htabs">*/
/*               {% set is_active = true %}*/
/*               {% if description and not journal2.settings.get('hide_product_description') %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*               {% endif %}*/
/*               {% if attribute_groups %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*               {% endif %}*/
/*               {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#additional-product-tab-{{ loop.index }}" data-toggle="tab">{{ tab.name }}</a></li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*             <div class="tabs-content">*/
/*               {% set is_active = true %}*/
/*               {% if description and not journal2.settings.get('hide_product_description') %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-description">{{ description }}</div>*/
/*               {% endif %}*/
/*               {% if attribute_groups %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-specification">*/
/*                   <table class="table table-bordered attribute">*/
/*                     {% for attribute_group in attribute_groups %}*/
/*                       <thead>*/
/*                       <tr>*/
/*                         <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                       </tr>*/
/*                       </thead>*/
/*                       <tbody>*/
/*                       {% for attribute in attribute_group.attribute %}*/
/*                         <tr>*/
/*                           <td>{{ attribute.name }}</td>*/
/*                           <td>{{ attribute.text }}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                       </tbody>*/
/*                     {% endfor %}*/
/*                   </table>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-review" {% if rating %} itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" {% endif %}>*/
/*                   {% if rating %}*/
/*                     <meta itemprop="ratingValue" content="{{ rating }}"/>*/
/*                     <meta itemprop="reviewCount" content="{{ journal2.settings.get('product_num_reviews') }}"/>*/
/*                     <meta itemprop="bestRating" content="5"/>*/
/*                     <meta itemprop="worstRating" content="1"/>*/
/*                   {% endif %}*/
/*                   <form class="form-horizontal" id="form-review">*/
/*                     <div id="review"></div>*/
/*                     <h2 id="review-title">{{ text_write }}</h2>*/
/*                     {% if review_guest %}*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                           <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control"/>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                           <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                           <div class="help-block">{{ text_note }}</div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label">{{ entry_rating }}</label>*/
/*                           &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                           <input type="radio" name="rating" value="1"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="2"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="3"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="4"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="5"/>*/
/*                           &nbsp;{{ entry_good }}</div>*/
/*                       </div>*/
/*                       {{ captcha }}*/
/*                       <div class="buttons clearfix">*/
/*                         <div class="pull-right">*/
/*                           <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary button">{{ button_continue }}</button>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% else %}*/
/*                       {{ text_login }}*/
/*                     {% endif %}*/
/*                   </form>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*                 <div id="additional-product-tab-{{ loop.index }}" class="tab-pane tab-content journal-custom-tab {% if is_active %} active {% set is_active = false %}{% endif %}">{{ tab.content }}</div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         TIEMPOS DE ENTREGA*/
/*         {% for cat in journal2.settings.get('data_categorias') %}*/
/*           {% if cat.category_id == '76' %}*/
/*               INMEDIATA*/
/*           {% elseif cat.category_id == '77' %}*/
/*               5 a 10 días*/
/*           {% elseif cat.category_id == '85' %}*/
/*               15 a 20 días*/
/*           {% elseif cat.category_id == '92' %}*/
/*               25 a 35 días*/
/*           {% else %}*/
/*               No está seteado la entrega, consultenos.*/
/*           {% endif %}*/
/*         {% endfor %}*/
/* */
/* */
/*         {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*           {% set class = 'col-sm-4' %}*/
/*         {% endif %}*/
/*         <div class="right">*/
/*           {% if journal2.settings.get('product_page_title_position', 'top') == 'right' %}*/
/*             <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*           {% endif %}*/
/*           <div id="product" class="product-options">*/
/*             {% for tab in journal2.settings.get('additional_product_description_top', []) %}*/
/*               <div class="journal-custom-tab">*/
/*                 {% if tab.has_icon %}*/
/*                   <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*                 {% endif %}*/
/*                 {% if tab.name %}*/
/*                   <h3>{{ tab.name }}</h3>*/
/*                 {% endif %}*/
/*                 {{ tab.content }}*/
/*               </div>*/
/*             {% endfor %}*/
/*             <ul class="list-unstyled description">*/
/*               {% if journal2.settings.get('product_views') %}*/
/*                 <li class="product-views-count">{{ journal2.settings.get('product_page_options_views_text') }}: {{ journal2.settings.get('product_views') }}</li>*/
/*               {% endif %}*/
/*               {% if journal2.settings.get('manufacturer_image') == 'on' %}*/
/*                 <li class="brand-logo">*/
/*                   <a href="{{ manufacturers }}" class="brand-image">*/
/*                     <img src="{{ manufacturer_image }}" width="{{ manufacturer_image_width }}" height="{{ manufacturer_image_height }}" alt="{{ manufacturer }}"/>*/
/*                   </a>*/
/*                   {% if manufacturer_image_name %}*/
/*                     <a href="{{ manufacturers }}" class="brand-logo-text">*/
/*                       {{ manufacturer_image_name }}*/
/*                     </a>*/
/*                   {% endif %}*/
/*                 </li>*/
/*               {% else %}*/
/*                 {% if manufacturer %}*/
/*                   <li class="p-brand">{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*               <li class="p-model">{{ text_model }} <span class="p-model" itemprop="model">{{ model }}</span></li>*/
/*               {% if reward %}*/
/*                 <li class="p-rewards">{{ text_reward }} <span class="p-rewards">{{ reward }}</span></li>*/
/*               {% endif %}*/
/*               <li class="p-stock">{{ text_stock }} <span class="journal-stock {{ stock_status }}">{{ stock }}</span></li>*/
/*             </ul>*/
/*             {% if journal2.settings.get('product_sold') %}*/
/*               <div class="product-sold-count-text">{{ journal2.settings.get('product_sold') }}</div>*/
/*             {% endif %}*/
/*             {% if date_end and journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*               <div class="countdown-wrapper">*/
/*                 <div class="expire-text">{{ journal2.settings.get('countdown_product_page_title') }}</div>*/
/*                 <div class="countdown"></div>*/
/*               </div>*/
/*               <script>Journal.countdown($('.right .countdown'), '{{ date_end }}');</script>*/
/*             {% endif %}*/
/*             {% if price %}*/
/*               <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*                 <meta itemprop="itemCondition" content="http://schema.org/NewCondition"/>*/
/*                 <meta itemprop="priceCurrency" content="{{ journal2.settings.get('product_price_currency') }}"/>*/
/*                 <meta itemprop="price" content="{{ journal2.settings.get('product_price') }}"/>*/
/*                 {% if journal2.settings.get('product_in_stock') == 'yes' %}*/
/*                   <link itemprop="availability" href="http://schema.org/InStock"/>*/
/*                 {% endif %}*/
/*                 {% if not special %}*/
/*                   <li class="product-price">{{ price }}</li>*/
/*                 {% else %}*/
/*                   <li class="price-old">{{ price }}</li>*/
/*                   <li class="price-new">{{ special }}</li>*/
/*                 {% endif %}*/
/*                 {% if tax %}*/
/*                   <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*                 {% endif %}*/
/*                 {% if points %}*/
/*                   <li class="reward">*/
/*                     <small>{{ text_points }} {{ points }}</small>*/
/*                   </li>*/
/*                 {% endif %}*/
/*                 {% for discount in discounts %}*/
/*                   <li class="discounts">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             {% endif %}*/
/*             {% if options %}*/
/*               <div class="options {{ journal2.settings.get('product_page_options_push_classes') }}">*/
/*                 <h3>{{ text_option }}</h3>*/
/*                 {% for option in options %}*/
/*                   {% if option.type == 'select' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% for option_value in option.product_option_value %}*/
/*                           <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </option>*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'radio' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*                               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                               {{ option_value.name }}*/
/*                               {% if option_value.price %}*/
/*                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                               {% endif %} </label>*/
/*                           </div>*/
/*                         {% endfor %} </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'checkbox' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/*                               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                               {{ option_value.name }}*/
/*                               {% if option_value.price %}*/
/*                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                               {% endif %} </label>*/
/*                           </div>*/
/*                         {% endfor %} </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'text' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'textarea' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'file' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                       <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'date' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group date">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'datetime' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group datetime">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'time' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group time">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <script>Journal.enableSelectOptionAsButtonsList();</script>*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*               <hr>*/
/*               <h3>{{ text_payment_recurring }}</h3>*/
/*               <div class="form-group required">*/
/*                 <select name="recurring_id" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for recurring in recurrings %}*/
/*                     <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 <div class="help-block" id="recurring-description"></div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="form-group cart {% if labels and labels.outofstock %} outofstock {% endif %}">*/
/*               <div>*/
/*                 {% if journal2.settings.get('hide_add_to_cart_button') %}*/
/*                   {% for tab in journal2.settings.get('additional_product_enquiry', []) %}*/
/*                     <div>{{ tab.content }}</div>*/
/*                   {% endfor %}*/
/*                   <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*                 {% else %}*/
/*                   <span class="qty">*/
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
/*                   <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="button"><span class="button-cart-text">{{ button_cart }}</span></button>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*               <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/*             <div class="wishlist-compare">*/
/*               <span class="links">*/
/*                   <a onclick="addToWishList('{{ product_id }}');">{{ button_wishlist }}</a>*/
/*                   <a onclick="addToCompare('{{ product_id }}');">{{ button_compare }}</a>*/
/*               </span>*/
/*             </div>*/
/*             {% if review_status %}*/
/*               <div class="rating">*/
/*                 <p>{% for i in 1..5 %}*/
/*                     {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                   {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'right' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*               <div class="social share-this">*/
/*                 <div class="social-loaded">*/
/*                   <script type="text/javascript">var switchTo5x = true;</script>*/
/*                   <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                   <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                   {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                     <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% for tab in journal2.settings.get('additional_product_description_bottom', []) %}*/
/*               <div class="journal-custom-tab">*/
/*                 {% if tab.has_icon %}*/
/*                   <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*                 {% endif %}*/
/*                 {% if tab.name %}*/
/*                   <h3>{{ tab.name }}</h3>*/
/*                 {% endif %}*/
/*                 {{ tab.content }}*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if tags %}*/
/*         <p class="tags"><b>{{ text_tags }}</b>*/
/*           {% for i in 0..tags|length %}*/
/*             {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*             {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*           {% endfor %} </p>*/
/*       {% endif %}*/
/*       {% if products and journal2.settings.get('related_products_status') %}*/
/*         <div class="box related-products {% if journal2.settings.get('related_products_carousel') %} journal-carousel {% if journal2.settings.get('related_products_carousel_arrows') == 'top' %} arrows-top {% endif %} {% endif %}">*/
/*           <div>*/
/*             <div class="box-heading">{{ text_related }}</div>*/
/*             <div class="box-content">*/
/*               {% if journal2.settings.get('related_products_carousel') %}*/
/*               <div class="swiper">*/
/*                 <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                   <div class="swiper-wrapper">*/
/*                     {% endif %}*/
/*                     {% for product in products %}*/
/*                       <div class="product-grid-item {{ grid_classes }} {% if journal2.settings.get('related_products_carousel') %} swiper-slide {% endif %} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                         <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                           <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                             <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                               <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                             </a>*/
/*                             {% for label, name in product.labels %}*/
/*                               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                             {% endfor %}*/
/*                             {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                           <div class="product-details">*/
/*                             <div class="caption">*/
/*                               <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                               <p class="description">{{ product.description }}</p>*/
/*                               {% if product.price %}*/
/*                                 <div class="price">*/
/*                                   {% if not product.special %}*/
/*                                     {{ product.price }}*/
/*                                   {% else %}*/
/*                                     <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                                   {% endif %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               {% if product.rating %}*/
/*                                 <div class="rating">*/
/*                                   {% for i in 1..5 %}*/
/*                                     {% if product.rating < i %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% else %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% endif %}*/
/*                                   {% endfor %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                             <div class="button-group">*/
/*                               {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                                 <div class="cart enquiry-button">*/
/*                                   <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                                 </div>*/
/*                               {% else %}*/
/*                                 <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                   <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                     {% if journal2.settings.get('related_products_carousel') %}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_arrows') != 'none' %}*/
/*                   <div class="swiper-button-next"></div>*/
/*                   <div class="swiper-button-prev"></div>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_bullets') %}*/
/*                 <div class="swiper-pagination"></div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*       {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*         <script>*/
/*           $('.related-products .product-grid-item > div').each(function () {*/
/*             var $new = $(this).find('.price-new');*/
/*             if ($new.length && $new.attr('data-end-date')) {*/
/*               $(this).find('.image').append('<div class="countdown"></div>');*/
/*             }*/
/*             Journal.countdown($(this).find('.countdown'), $new.attr('data-end-date'));*/
/*           });*/
/*         </script>*/
/*       {% endif %}*/
/*       {% if journal2.settings.get('related_products_carousel') %}*/
/*         {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('related_products_items_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count', 0)]) %}*/
/*         {% set grid = [*/
/*         [0, grid.xs],*/
/*         [470, grid.sm],*/
/*         [760, grid.md],*/
/*         [980, grid.lg],*/
/*         [1100, grid.xl],*/
/*         ] %}*/
/*         <script>*/
/*           (function () {*/
/*             var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*             var breakpoints = {*/
/*               470: {*/
/*                 slidesPerView: grid[0][1],*/
/*                 slidesPerGroup: grid[0][1]*/
/*               },*/
/*               760: {*/
/*                 slidesPerView: grid[1][1],*/
/*                 slidesPerGroup: grid[1][1]*/
/*               },*/
/*               980: {*/
/*                 slidesPerView: grid[2][1],*/
/*                 slidesPerGroup: grid[2][1]*/
/*               },*/
/*               1220: {*/
/*                 slidesPerView: grid[3][1],*/
/*                 slidesPerGroup: grid[3][1]*/
/*               }*/
/*             };*/
/* */
/*             var opts = {*/
/*               slidesPerView: grid[4][1],*/
/*               slidesPerGroup: grid[4][1],*/
/*               breakpoints: breakpoints,*/
/*               spaceBetween: parseInt('{{ journal2.settings.get('product_grid_item_spacing', '15') }}', 10),*/
/*               pagination: {% if journal2.settings.get('related_products_carousel_bullets') %} $('.related-products .swiper-pagination') {% else %} false {% endif %},*/
/*               paginationClickable: true,*/
/*               nextButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-next') {% else %} false {% endif %},*/
/*               prevButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-prev') {% else %} false {% endif %},*/
/*               autoplay: {{ journal2.settings.get('related_products_carousel_autoplay') > 0 ? 4000 : 'false' }},*/
/*               autoplayStopOnHover: {% if journal2.settings.get('related_products_carousel_pause_on_hover') %} true {% else %} false {% endif %},*/
/*               speed: 400,*/
/*               touchEventsTarget: {% if journal2.settings.get('related_products_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*             };*/
/* */
/*             $('.related-products .swiper-container').swiper(opts);*/
/*           })();*/
/*         </script>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* */
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
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-cart').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('#button-cart').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-cart').button('reset');*/
/*       },*/
/*       success: function(json) {*/
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
/*           if (!Journal.showNotification(json['success'], json['image'], true)) {*/
/*             $('.breadcrumb').after('<div class="alert alert-success success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*           }*/
/* */
/*           $('#cart-total').html(json['total']);*/
/* */
/*           if (Journal.scrollToTop) {*/
/*             $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*           }*/
/* */
/*           $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
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
/* //--></script>*/
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
/* //--></script>*/
/* {{ footer }}*/
/* */
