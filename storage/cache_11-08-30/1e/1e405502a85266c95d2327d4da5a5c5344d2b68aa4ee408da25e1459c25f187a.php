<?php

/* journal2/template/journal2/menu/main.twig */
class __TwigTemplate_42bc064d207f22582a1a3b5b8d9e0c42a1d6c8f581a9a44edf981997cd2cca45 extends Twig_Template
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
        // line 18
        echo "
<style>";
        // line 19
        echo twig_join_filter((isset($context["color_styles"]) ? $context["color_styles"] : null), " ");
        echo "</style>

<div class=\"mobile-trigger\">";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_text"), "method");
        echo "</div>

<ul class=\"super-menu mobile-menu menu-";
        // line 23
        echo (isset($context["display"]) ? $context["display"] : null);
        echo "\" style=\"table-layout: ";
        echo (isset($context["table_css_style"]) ? $context["table_css_style"] : null);
        echo "\">
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_items"]) ? $context["menu_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 25
            echo "    <li id=\"";
            echo $this->getAttribute($context["menu_item"], "id", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["menu_item"], "type", array());
            echo " ";
            echo $this->getAttribute($context["menu_item"], "class", array());
            echo "\">
      ";
            // line 26
            if ($this->getAttribute($context["menu_item"], "href", array())) {
                // line 27
                echo "        <a href=\"";
                echo $this->getAttribute($context["menu_item"], "href", array());
                echo "\" ";
                echo $this->getAttribute($context["menu_item"], "target", array());
                echo ">";
                echo $this->getAttribute($context["menu_item"], "icon", array());
                if ( !$this->getAttribute($context["menu_item"], "hide_text", array())) {
                    echo "<span class=\"main-menu-text\">";
                    echo $this->getAttribute($context["menu_item"], "name", array());
                    echo "</span>";
                }
                echo "</a>
      ";
            } else {
                // line 29
                echo "        <a>";
                echo $this->getAttribute($context["menu_item"], "icon", array());
                if ( !$this->getAttribute($context["menu_item"], "hide_text", array())) {
                    echo "<span class=\"main-menu-text\">";
                    echo $this->getAttribute($context["menu_item"], "name", array());
                    echo "</span>";
                }
                echo "</a>
      ";
            }
            // line 31
            echo "
      ";
            // line 32
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-categories") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 33
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                    // line 36
                    echo "              <div class=\"mega-menu-item ";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo " ";
                    echo $this->getAttribute($context["menu_item"], "show_class", array());
                    echo "\">
                <div>
                  <h3><a href=\"";
                    // line 38
                    echo $this->getAttribute($context["submenu_item"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["submenu_item"], "name", array());
                    echo "</a></h3>
                  <div>
                    ";
                    // line 40
                    if (twig_in_filter($this->getAttribute($context["menu_item"], "show", array()), array(0 => "image", 1 => "both"))) {
                        // line 41
                        echo "                      <a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\"><img width=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_height", array());
                        echo "\" class=\"lazy\" src=\"";
                        echo $this->getAttribute($context["submenu_item"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" data-default-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "\"/></a>
                    ";
                    }
                    // line 43
                    echo "                    ";
                    if (twig_in_filter($this->getAttribute($context["menu_item"], "show", array()), array(0 => "links", 1 => "both"))) {
                        // line 44
                        echo "                      <ul>
                        ";
                        // line 45
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                            // line 46
                            echo "                          ";
                            if ((($this->getAttribute($context["menu_item"], "limit", array()) == 0) || (($this->getAttribute($context["menu_item"], "limit", array()) > 0) && ($this->getAttribute($context["menu_item"], "limit", array()) > $this->getAttribute($context["loop"], "index", array()))))) {
                                // line 47
                                echo "                            <li data-image=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                echo "\"><a href=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                echo "</a></li>
                          ";
                            } elseif ((($this->getAttribute(                            // line 48
$context["menu_item"], "limit", array()) > 0) && ($this->getAttribute($context["menu_item"], "limit", array()) == $this->getAttribute($context["loop"], "index", array())))) {
                                // line 49
                                echo "                            <li class=\"view-more\"><a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "view_more_text"), "method");
                                echo "</a></li>
                          ";
                            }
                            // line 51
                            echo "                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                      </ul>
                    ";
                    }
                    // line 54
                    echo "                  </div>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
        <span class=\"clearfix\"></span>
      ";
            }
            // line 63
            echo "
      ";
            // line 64
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-products") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 65
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 68
                    echo "              ";
                    if ((($this->getAttribute($context["menu_item"], "limit", array()) == 0) || (($this->getAttribute($context["menu_item"], "limit", array()) > 0) && ($this->getAttribute($context["menu_item"], "limit", array()) > $this->getAttribute($context["loop"], "index", array()))))) {
                        // line 69
                        echo "                <div class=\"mega-menu-item product-grid-item ";
                        echo $this->getAttribute($context["menu_item"], "classes", array());
                        echo " display-";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                        echo " ";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                        echo "\">
                  <div class=\"product-wrapper ";
                        // line 70
                        if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                            echo " outofstock ";
                        }
                        echo "\">
                    <div class=\"image\">
                      <a href=\"";
                        // line 72
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
                        <img class=\"lazy\" src=\"";
                        // line 73
                        echo $this->getAttribute($context["product"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["product"], "image", array());
                        echo "\" width=\"";
                        echo $this->getAttribute($context["product"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["product"], "image_height", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"/>
                      </a>
                      ";
                        // line 75
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                        foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                            // line 76
                            echo "                        <span class=\"label-";
                            echo $context["label"];
                            echo "\"><b>";
                            echo $context["name"];
                            echo "</b></span>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "                      ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                            // line 79
                            echo "                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "</span></a></div>
                        <div class=\"compare\"><a onclick=\"addToCompare('";
                            // line 80
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "</span></a></div>
                      ";
                        }
                        // line 82
                        echo "                    </div>
                    <div class=\"product-details\">
                      <div class=\"caption\">
                        <div class=\"name\"><a href=\"";
                        // line 85
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a></div>
                        ";
                        // line 86
                        if ($this->getAttribute($context["product"], "price", array())) {
                            // line 87
                            echo "                          <div class=\"price\">
                            ";
                            // line 88
                            if ( !$this->getAttribute($context["product"], "special", array())) {
                                // line 89
                                echo "                              ";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "
                            ";
                            } else {
                                // line 91
                                echo "                              <span class=\"price-old\">";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "</span> <span class=\"price-new\">";
                                echo $this->getAttribute($context["product"], "special", array());
                                echo "</span>
                            ";
                            }
                            // line 93
                            echo "                          </div>
                        ";
                        }
                        // line 95
                        echo "                        ";
                        if ($this->getAttribute($context["product"], "rating", array())) {
                            // line 96
                            echo "                          <div class=\"rating\">
                            ";
                            // line 97
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 98
                                echo "                              ";
                                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                    // line 99
                                    echo "                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                              ";
                                } else {
                                    // line 101
                                    echo "                                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                              ";
                                }
                                // line 103
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 104
                            echo "                          </div>
                        ";
                        }
                        // line 106
                        echo "                      </div>
                      <div class=\"button-group\">
                        ";
                        // line 108
                        if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                            // line 109
                            echo "                          <div class=\"cart enquiry-button\">
                            <a href=\"javascript:Journal.openPopup('";
                            // line 110
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
                            // line 113
                            echo "                          <div class=\"cart ";
                            if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                echo " outofstock ";
                            }
                            echo "\">
                            <a onclick=\"addToCart('";
                            // line 114
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"button hint--top\" data-hint=\"";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span><i class=\"button-right-icon\"></i></a>
                          </div>
                        ";
                        }
                        // line 117
                        echo "                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" class=\"hint--top\" data-hint=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></a></div>
                        <div class=\"compare\"><a onclick=\"addToCompare('";
                        // line 118
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
                    // line 124
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
        <span class=\"clearfix\"></span>
      ";
            }
            // line 130
            echo "
      ";
            // line 131
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-brands") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 132
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                    // line 135
                    echo "              <div class=\"mega-menu-item ";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo "\">
                <div>
                  ";
                    // line 137
                    if ((($this->getAttribute($context["submenu_item"], "show", array()) != "image") && $this->getAttribute($context["submenu_item"], "name", array()))) {
                        // line 138
                        echo "                    <h3><a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "</a></h3>
                  ";
                    }
                    // line 140
                    echo "                  <div>
                    ";
                    // line 141
                    if (($this->getAttribute($context["submenu_item"], "show", array()) != "text")) {
                        // line 142
                        echo "                      <a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\"> <img width=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_height", array());
                        echo "\" class=\"lazy\" src=\"";
                        echo $this->getAttribute($context["submenu_item"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "\"/></a>
                    ";
                    }
                    // line 144
                    echo "                    <ul>
                      ";
                    // line 145
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                        // line 146
                        echo "                        <li data-image=\"";
                        echo $this->getAttribute($context["sub2menu_item"], "image", array());
                        echo "\"><a href=\"";
                        echo $this->getAttribute($context["sub2menu_item"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sub2menu_item"], "name", array());
                        echo "</a></li>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                    </ul>
                  </div>
                  <span class=\"clearfix\"></span>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
      ";
            }
            // line 158
            echo "
      ";
            // line 159
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "drop-down") && (twig_length_filter($this->env, $this->getAttribute($context["menu_item"], "subcategories", array())) > 0))) {
                // line 160
                echo "        <ul>
          ";
                // line 161
                echo $this->getAttribute($this, "renderMultiLevelMenu", array(0 => $context["menu_item"]), "method");
                echo "
        </ul>
      ";
            }
            // line 164
            echo "
      ";
            // line 165
            if (($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-html")) {
                // line 166
                echo "        <div class=\"mega-menu\">
          <div>
            ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "html_blocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                    // line 169
                    echo "              <div class=\"mega-menu-item ";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo "\">
                <div>
                  ";
                    // line 171
                    if ($this->getAttribute($context["block"], "title", array())) {
                        // line 172
                        echo "                    ";
                        if ($this->getAttribute($context["block"], "link", array())) {
                            // line 173
                            echo "                      <h3><a href=\"";
                            echo $this->getAttribute($context["block"], "link", array());
                            echo "\">";
                            echo $this->getAttribute($context["block"], "title", array());
                            echo "</a></h3>
                    ";
                        } else {
                            // line 175
                            echo "                      <h3>";
                            echo $this->getAttribute($context["block"], "title", array());
                            echo "</h3>
                    ";
                        }
                        // line 177
                        echo "                  ";
                    }
                    // line 178
                    echo "                  ";
                    if ($this->getAttribute($context["block"], "text", array())) {
                        // line 179
                        echo "                    <div class=\"wrapper\">
                      ";
                        // line 180
                        echo $this->getAttribute($context["block"], "text", array());
                        echo "
                    </div>
                  ";
                    }
                    // line 183
                    echo "                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
      ";
            }
            // line 190
            echo "
      ";
            // line 191
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-mixed") && $this->getAttribute($context["menu_item"], "mixed_columns", array()))) {
                // line 192
                echo "        <div class=\"mega-menu\">
          ";
                // line 193
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "mixed_columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["menu_column"]) {
                    // line 194
                    echo "            ";
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-categories") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 195
                        echo "
              <div class=\"mega-menu-column mega-menu-categories ";
                        // line 196
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 197
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 198
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 200
                        echo "                <div>
                  ";
                        // line 201
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                            // line 202
                            echo "                    <div class=\"mega-menu-item ";
                            echo $this->getAttribute($context["menu_column"], "classes", array());
                            echo " ";
                            echo $this->getAttribute($context["menu_column"], "show_class", array());
                            echo "\">
                      <div>
                        <h3><a href=\"";
                            // line 204
                            echo $this->getAttribute($context["submenu_item"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu_item"], "name", array());
                            echo "</a></h3>
                        <div>
                          ";
                            // line 206
                            if (twig_in_filter($this->getAttribute($context["menu_column"], "show", array()), array(0 => "image", 1 => "both"))) {
                                // line 207
                                echo "                            <a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\"><img width=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_height", array());
                                echo "\" class=\"lazy\" src=\"";
                                echo $this->getAttribute($context["submenu_item"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" data-default-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "\"/></a>
                          ";
                            }
                            // line 209
                            echo "                          ";
                            if (twig_in_filter($this->getAttribute($context["menu_column"], "show", array()), array(0 => "links", 1 => "both"))) {
                                // line 210
                                echo "                            <ul>
                              ";
                                // line 211
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
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
                                foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                                    // line 212
                                    echo "                                ";
                                    if ((($this->getAttribute($context["menu_column"], "limit", array()) == 0) || (($this->getAttribute($context["menu_column"], "limit", array()) > 0) && ($this->getAttribute($context["menu_column"], "limit", array()) > $this->getAttribute($context["loop"], "index", array()))))) {
                                        // line 213
                                        echo "                                  <li data-image=\"";
                                        echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                        echo "\"><a href=\"";
                                        echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                        echo "</a></li>
                                ";
                                    } elseif ((($this->getAttribute(                                    // line 214
$context["menu_column"], "limit", array()) > 0) && ($this->getAttribute($context["menu_column"], "limit", array()) == $this->getAttribute($context["loop"], "index", array())))) {
                                        // line 215
                                        echo "                                  <li class=\"view-more\"><a href=\"";
                                        echo $this->getAttribute($context["submenu_item"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "view_more_text"), "method");
                                        echo "</a></li>
                                ";
                                    }
                                    // line 217
                                    echo "                              ";
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
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 218
                                echo "                            </ul>
                          ";
                            }
                            // line 220
                            echo "                        </div>
                        <span class=\"clearfix\"></span>
                      </div>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 225
                        echo "                </div>
                ";
                        // line 226
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 227
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 229
                        echo "              </div>
            ";
                    }
                    // line 231
                    echo "
            ";
                    // line 232
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-products") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 233
                        echo "              <div class=\"mega-menu-column mega-menu-products ";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 234
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 235
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 237
                        echo "                <div>
                  ";
                        // line 238
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 239
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>
                  ";
                        }
                        // line 241
                        echo "                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 242
                            echo "                    ";
                            if ((($this->getAttribute($context["menu_item"], "limit", array()) == 0) || (($this->getAttribute($context["menu_item"], "limit", array()) > 0) && ($this->getAttribute($context["menu_item"], "limit", array()) > $this->getAttribute($context["loop"], "index", array()))))) {
                                // line 243
                                echo "                      <div class=\"mega-menu-item product-grid-item ";
                                echo $this->getAttribute($context["menu_column"], "classes", array());
                                echo " display-";
                                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                                echo " ";
                                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                                echo "\">
                        <div class=\"product-wrapper ";
                                // line 244
                                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                    echo " outofstock ";
                                }
                                echo "\">
                          <div class=\"image\">
                            <a href=\"";
                                // line 246
                                echo $this->getAttribute($context["product"], "href", array());
                                echo "\">
                              <img class=\"lazy\" src=\"";
                                // line 247
                                echo $this->getAttribute($context["product"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["product"], "image", array());
                                echo "\" width=\"";
                                echo $this->getAttribute($context["product"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["product"], "image_height", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "\"/>
                            </a>
                            ";
                                // line 249
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                                    // line 250
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
                                // line 252
                                echo "                            ";
                                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                                    // line 253
                                    echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"hint--top\" data-hint=\"";
                                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                    echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                                    // line 254
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"hint--top\" data-hint=\"";
                                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                    echo "</span></a></div>
                            ";
                                }
                                // line 256
                                echo "                          </div>
                          <div class=\"product-details\">
                            <div class=\"caption\">
                              <div class=\"name\"><a href=\"";
                                // line 259
                                echo $this->getAttribute($context["product"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "</a></div>
                              ";
                                // line 260
                                if ($this->getAttribute($context["product"], "price", array())) {
                                    // line 261
                                    echo "                                <div class=\"price\">
                                  ";
                                    // line 262
                                    if ( !$this->getAttribute($context["product"], "special", array())) {
                                        // line 263
                                        echo "                                    ";
                                        echo $this->getAttribute($context["product"], "price", array());
                                        echo "
                                  ";
                                    } else {
                                        // line 265
                                        echo "                                    <span class=\"price-old\">";
                                        echo $this->getAttribute($context["product"], "price", array());
                                        echo "</span> <span class=\"price-new\">";
                                        echo $this->getAttribute($context["product"], "special", array());
                                        echo "</span>
                                  ";
                                    }
                                    // line 267
                                    echo "                                </div>
                              ";
                                }
                                // line 269
                                echo "                              ";
                                if ($this->getAttribute($context["product"], "rating", array())) {
                                    // line 270
                                    echo "                                <div class=\"rating\">
                                  ";
                                    // line 271
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                        // line 272
                                        echo "                                    ";
                                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                            // line 273
                                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                                        } else {
                                            // line 275
                                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                                        }
                                        // line 277
                                        echo "                                  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 278
                                    echo "                                </div>
                              ";
                                }
                                // line 280
                                echo "                            </div>
                            <div class=\"button-group\">
                              ";
                                // line 282
                                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                                    // line 283
                                    echo "                                <div class=\"cart enquiry-button\">
                                  <a href=\"javascript:Journal.openPopup('";
                                    // line 284
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
                                    // line 287
                                    echo "                                <div class=\"cart ";
                                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                        echo " outofstock ";
                                    }
                                    echo "\">
                                  <a onclick=\"addToCart('";
                                    // line 288
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"button hint--top\" data-hint=\"";
                                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                                    echo "</span><i class=\"button-right-icon\"></i></a>
                                </div>
                              ";
                                }
                                // line 291
                                echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo "');\" class=\"hint--top\" data-hint=\"";
                                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                                // line 292
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
                            // line 298
                            echo "                  ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 299
                        echo "                </div>
                ";
                        // line 300
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 301
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 303
                        echo "              </div>
            ";
                    }
                    // line 305
                    echo "            ";
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-brands") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 306
                        echo "              <div class=\"mega-menu-column mega-menu-brands ";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 307
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 308
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 310
                        echo "                <div>
                  ";
                        // line 311
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 312
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>
                  ";
                        }
                        // line 314
                        echo "                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                            // line 315
                            echo "                    <div class=\"mega-menu-item ";
                            echo $this->getAttribute($context["menu_column"], "classes", array());
                            echo "\">
                      <div>
                        ";
                            // line 317
                            if ((($this->getAttribute($context["submenu_item"], "show", array()) != "image") && $this->getAttribute($context["submenu_item"], "name", array()))) {
                                // line 318
                                echo "                          <h3><a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "</a></h3>
                        ";
                            }
                            // line 320
                            echo "                        <div>
                          ";
                            // line 321
                            if (($this->getAttribute($context["submenu_item"], "show", array()) != "text")) {
                                // line 322
                                echo "                            <a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\"> <img width=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_height", array());
                                echo "\" class=\"lazy\" src=\"";
                                echo $this->getAttribute($context["submenu_item"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "\"/></a>
                          ";
                            }
                            // line 324
                            echo "                          <ul>
                            ";
                            // line 325
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                                // line 326
                                echo "                              <li data-image=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                echo "\"><a href=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                echo "</a></li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 328
                            echo "                          </ul>
                        </div>
                        <span class=\"clearfix\"></span>
                      </div>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 334
                        echo "                </div>
                ";
                        // line 335
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 336
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 338
                        echo "              </div>
            ";
                    }
                    // line 340
                    echo "
            ";
                    // line 341
                    if (($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-html-block")) {
                        // line 342
                        echo "              <div class=\"mega-menu-column mega-menu-html mega-menu-html-block ";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width: ";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">
                ";
                        // line 343
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 344
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 346
                        echo "                <div>
                  ";
                        // line 347
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 348
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>
                  ";
                        }
                        // line 350
                        echo "                  <div class=\"wrapper\">
                    ";
                        // line 351
                        echo $this->getAttribute($context["menu_column"], "html_text", array());
                        echo "
                  </div>
                </div>
                ";
                        // line 354
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 355
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 357
                        echo "              </div>
            ";
                    }
                    // line 359
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "        </div>
      ";
            }
            // line 362
            echo "
      <span class=\"mobile-plus\">+</span>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "</ul>
";
    }

    // line 1
    public function getrenderMultiLevelMenu($__menu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "    ";
                $context["submenu"] = $this->getAttribute($this, "renderMultiLevelMenu", array(0 => $context["item"]), "method");
                // line 4
                echo "    <li>
      <a ";
                // line 5
                if ($this->getAttribute($context["item"], "href", array())) {
                    echo " href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "target", array())) {
                        echo " ";
                        echo $this->getAttribute($context["item"], "target", array());
                        echo " ";
                    }
                    echo " ";
                }
                echo " class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">
        ";
                // line 6
                echo $this->getAttribute($context["item"], "name", array());
                echo "
        ";
                // line 7
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 8
                    echo "          <i class=\"menu-plus\"></i>
        ";
                }
                // line 10
                echo "      </a>
      ";
                // line 11
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0)) {
                    // line 12
                    echo "        <span class=\"mobile-plus\">+</span>
        <ul> ";
                    // line 13
                    echo (isset($context["submenu"]) ? $context["submenu"] : null);
                    echo "</ul>
      ";
                }
                // line 15
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/menu/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1362 => 15,  1357 => 13,  1354 => 12,  1352 => 11,  1349 => 10,  1345 => 8,  1343 => 7,  1339 => 6,  1323 => 5,  1320 => 4,  1317 => 3,  1312 => 2,  1300 => 1,  1295 => 366,  1286 => 362,  1282 => 360,  1276 => 359,  1272 => 357,  1263 => 355,  1259 => 354,  1253 => 351,  1250 => 350,  1244 => 348,  1242 => 347,  1239 => 346,  1230 => 344,  1226 => 343,  1219 => 342,  1217 => 341,  1214 => 340,  1210 => 338,  1201 => 336,  1197 => 335,  1194 => 334,  1183 => 328,  1170 => 326,  1166 => 325,  1163 => 324,  1147 => 322,  1145 => 321,  1142 => 320,  1134 => 318,  1132 => 317,  1126 => 315,  1121 => 314,  1115 => 312,  1113 => 311,  1110 => 310,  1101 => 308,  1097 => 307,  1090 => 306,  1087 => 305,  1083 => 303,  1074 => 301,  1070 => 300,  1067 => 299,  1053 => 298,  1040 => 292,  1031 => 291,  1021 => 288,  1014 => 287,  998 => 284,  995 => 283,  993 => 282,  989 => 280,  985 => 278,  979 => 277,  975 => 275,  971 => 273,  968 => 272,  964 => 271,  961 => 270,  958 => 269,  954 => 267,  946 => 265,  940 => 263,  938 => 262,  935 => 261,  933 => 260,  927 => 259,  922 => 256,  913 => 254,  904 => 253,  901 => 252,  890 => 250,  886 => 249,  873 => 247,  869 => 246,  862 => 244,  853 => 243,  850 => 242,  832 => 241,  826 => 239,  824 => 238,  821 => 237,  812 => 235,  808 => 234,  801 => 233,  799 => 232,  796 => 231,  792 => 229,  783 => 227,  779 => 226,  776 => 225,  766 => 220,  762 => 218,  748 => 217,  740 => 215,  738 => 214,  729 => 213,  726 => 212,  709 => 211,  706 => 210,  703 => 209,  685 => 207,  683 => 206,  676 => 204,  668 => 202,  664 => 201,  661 => 200,  652 => 198,  648 => 197,  642 => 196,  639 => 195,  636 => 194,  632 => 193,  629 => 192,  627 => 191,  624 => 190,  618 => 186,  610 => 183,  604 => 180,  601 => 179,  598 => 178,  595 => 177,  589 => 175,  581 => 173,  578 => 172,  576 => 171,  570 => 169,  566 => 168,  562 => 166,  560 => 165,  557 => 164,  551 => 161,  548 => 160,  546 => 159,  543 => 158,  537 => 154,  526 => 148,  513 => 146,  509 => 145,  506 => 144,  490 => 142,  488 => 141,  485 => 140,  477 => 138,  475 => 137,  469 => 135,  465 => 134,  461 => 132,  459 => 131,  456 => 130,  449 => 125,  435 => 124,  422 => 118,  413 => 117,  403 => 114,  396 => 113,  380 => 110,  377 => 109,  375 => 108,  371 => 106,  367 => 104,  361 => 103,  357 => 101,  353 => 99,  350 => 98,  346 => 97,  343 => 96,  340 => 95,  336 => 93,  328 => 91,  322 => 89,  320 => 88,  317 => 87,  315 => 86,  309 => 85,  304 => 82,  295 => 80,  286 => 79,  283 => 78,  272 => 76,  268 => 75,  255 => 73,  251 => 72,  244 => 70,  235 => 69,  232 => 68,  215 => 67,  211 => 65,  209 => 64,  206 => 63,  199 => 58,  190 => 54,  186 => 52,  172 => 51,  164 => 49,  162 => 48,  153 => 47,  150 => 46,  133 => 45,  130 => 44,  127 => 43,  109 => 41,  107 => 40,  100 => 38,  92 => 36,  88 => 35,  84 => 33,  82 => 32,  79 => 31,  68 => 29,  53 => 27,  51 => 26,  42 => 25,  38 => 24,  32 => 23,  27 => 21,  22 => 19,  19 => 18,);
    }
}
/* {% macro renderMultiLevelMenu(menu) %}*/
/*   {% for item in menu.subcategories %}*/
/*     {% set submenu = _self.renderMultiLevelMenu(item) %}*/
/*     <li>*/
/*       <a {% if item.href %} href="{{ item.href }}" {% if item.target %} {{ item.target }} {% endif %} {% endif %} class="{{ item.class }}">*/
/*         {{ item.name }}*/
/*         {% if item.subcategories | length > 0 %}*/
/*           <i class="menu-plus"></i>*/
/*         {% endif %}*/
/*       </a>*/
/*       {% if item.subcategories | length > 0 %}*/
/*         <span class="mobile-plus">+</span>*/
/*         <ul> {{ submenu }}</ul>*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* */
/* <style>{{ color_styles | join(' ') }}</style>*/
/* */
/* <div class="mobile-trigger">{{ journal2.settings.get('mobile_menu_text') }}</div>*/
/* */
/* <ul class="super-menu mobile-menu menu-{{ display }}" style="table-layout: {{ table_css_style }}">*/
/*   {% for menu_item in menu_items %}*/
/*     <li id="{{ menu_item.id }}" class="{{ menu_item.type }} {{ menu_item.class }}">*/
/*       {% if menu_item.href %}*/
/*         <a href="{{ menu_item.href }}" {{ menu_item.target }}>{{ menu_item.icon }}{% if not menu_item.hide_text %}<span class="main-menu-text">{{ menu_item.name }}</span>{% endif %}</a>*/
/*       {% else %}*/
/*         <a>{{ menu_item.icon }}{% if not menu_item.hide_text %}<span class="main-menu-text">{{ menu_item.name }}</span>{% endif %}</a>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-categories' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for submenu_item in menu_item.items %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }} {{ menu_item.show_class }}">*/
/*                 <div>*/
/*                   <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                   <div>*/
/*                     {% if menu_item.show in ['image', 'both'] %}*/
/*                       <a href="{{ submenu_item.href }}"><img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" data-default-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                     {% endif %}*/
/*                     {% if menu_item.show in ['links', 'both'] %}*/
/*                       <ul>*/
/*                         {% for sub2menu_item in submenu_item.items %}*/
/*                           {% if menu_item.limit == 0 or (menu_item.limit > 0 and menu_item.limit > loop.index) %}*/
/*                             <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                           {% elseif menu_item.limit > 0 and menu_item.limit == loop.index %}*/
/*                             <li class="view-more"><a href="{{ submenu_item.href }}">{{ journal2.settings.get('view_more_text') }}</a></li>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*         <span class="clearfix"></span>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-products' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for product in menu_item.items %}*/
/*               {% if menu_item.limit == 0 or (menu_item.limit > 0 and menu_item.limit > loop.index) %}*/
/*                 <div class="mega-menu-item product-grid-item {{ menu_item.classes }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                   <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                     <div class="image">*/
/*                       <a href="{{ product.href }}">*/
/*                         <img class="lazy" src="{{ product.dummy }}" data-src="{{ product.image }}" width="{{ product.image_width }}" height="{{ product.image_height }}" alt="{{ product.name }}"/>*/
/*                       </a>*/
/*                       {% for label, name in product.labels %}*/
/*                         <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                       {% endfor %}*/
/*                       {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="product-details">*/
/*                       <div class="caption">*/
/*                         <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                         {% if product.price %}*/
/*                           <div class="price">*/
/*                             {% if not product.special %}*/
/*                               {{ product.price }}*/
/*                             {% else %}*/
/*                               <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product.rating %}*/
/*                           <div class="rating">*/
/*                             {% for i in 1..5 %}*/
/*                               {% if product.rating < i %}*/
/*                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                               {% else %}*/
/*                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                           </div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       <div class="button-group">*/
/*                         {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                           <div class="cart enquiry-button">*/
/*                             <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                           </div>*/
/*                         {% else %}*/
/*                           <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                             <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*         <span class="clearfix"></span>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-brands' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for submenu_item in menu_item.items %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }}">*/
/*                 <div>*/
/*                   {% if submenu_item.show != 'image' and submenu_item.name %}*/
/*                     <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                   {% endif %}*/
/*                   <div>*/
/*                     {% if submenu_item.show != 'text' %}*/
/*                       <a href="{{ submenu_item.href }}"> <img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                     {% endif %}*/
/*                     <ul>*/
/*                       {% for sub2menu_item in submenu_item.items %}*/
/*                         <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                   </div>*/
/*                   <span class="clearfix"></span>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'drop-down' and menu_item.subcategories | length > 0 %}*/
/*         <ul>*/
/*           {{ _self.renderMultiLevelMenu(menu_item) }}*/
/*         </ul>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-html' %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for block in menu_item.html_blocks %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }}">*/
/*                 <div>*/
/*                   {% if block.title %}*/
/*                     {% if block.link %}*/
/*                       <h3><a href="{{ block.link }}">{{ block.title }}</a></h3>*/
/*                     {% else %}*/
/*                       <h3>{{ block.title }}</h3>*/
/*                     {% endif %}*/
/*                   {% endif %}*/
/*                   {% if block.text %}*/
/*                     <div class="wrapper">*/
/*                       {{ block.text }}*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-mixed' and menu_item.mixed_columns %}*/
/*         <div class="mega-menu">*/
/*           {% for menu_column in menu_item.mixed_columns %}*/
/*             {% if menu_column.type == 'mega-menu-categories' and menu_column.items %}*/
/* */
/*               <div class="mega-menu-column mega-menu-categories {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% for submenu_item in menu_column.items %}*/
/*                     <div class="mega-menu-item {{ menu_column.classes }} {{ menu_column.show_class }}">*/
/*                       <div>*/
/*                         <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                         <div>*/
/*                           {% if menu_column.show in ['image', 'both'] %}*/
/*                             <a href="{{ submenu_item.href }}"><img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" data-default-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                           {% endif %}*/
/*                           {% if menu_column.show in ['links', 'both'] %}*/
/*                             <ul>*/
/*                               {% for sub2menu_item in submenu_item.items %}*/
/*                                 {% if menu_column.limit == 0 or (menu_column.limit > 0 and menu_column.limit > loop.index) %}*/
/*                                   <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                                 {% elseif menu_column.limit > 0 and menu_column.limit == loop.index %}*/
/*                                   <li class="view-more"><a href="{{ submenu_item.href }}">{{ journal2.settings.get('view_more_text') }}</a></li>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/*                             </ul>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         <span class="clearfix"></span>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             {% if menu_column.type == 'mega-menu-products' and menu_column.items %}*/
/*               <div class="mega-menu-column mega-menu-products {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   {% for product in menu_column.items %}*/
/*                     {% if menu_item.limit == 0 or (menu_item.limit > 0 and menu_item.limit > loop.index) %}*/
/*                       <div class="mega-menu-item product-grid-item {{ menu_column.classes }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                         <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                           <div class="image">*/
/*                             <a href="{{ product.href }}">*/
/*                               <img class="lazy" src="{{ product.dummy }}" data-src="{{ product.image }}" width="{{ product.image_width }}" height="{{ product.image_height }}" alt="{{ product.name }}"/>*/
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
/*                               <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
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
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if menu_column.type == 'mega-menu-brands' and menu_column.items %}*/
/*               <div class="mega-menu-column mega-menu-brands {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   {% for submenu_item in menu_column.items %}*/
/*                     <div class="mega-menu-item {{ menu_column.classes }}">*/
/*                       <div>*/
/*                         {% if submenu_item.show != 'image' and submenu_item.name %}*/
/*                           <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                         {% endif %}*/
/*                         <div>*/
/*                           {% if submenu_item.show != 'text' %}*/
/*                             <a href="{{ submenu_item.href }}"> <img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                           {% endif %}*/
/*                           <ul>*/
/*                             {% for sub2menu_item in submenu_item.items %}*/
/*                               <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                         </div>*/
/*                         <span class="clearfix"></span>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             {% if menu_column.type == 'mega-menu-html-block' %}*/
/*               <div class="mega-menu-column mega-menu-html mega-menu-html-block {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   <div class="wrapper">*/
/*                     {{ menu_column.html_text }}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <span class="mobile-plus">+</span>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
