<?php

/* viewforum_body.html */
class __TwigTemplate_968533f9c9e70ebd34e8a92cfb75a324ba3d40478c90ffd201b35feab331640b extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 6
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 8
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 9
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 14
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 29
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 30
                echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
                // line 31
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"mark-read rightside\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t</div>
";
            }
            // line 34
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 36
        echo "
";
        // line 37
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 38
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 40
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 41
                echo "\t\t\t";
                // line 42
                echo "
\t\t<a href=\"";
                // line 43
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 44
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 45
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 49
                echo "\t\t</a>
\t\t\t";
                // line 50
                // line 51
                echo "\t";
            }
            // line 52
            echo "
\t";
            // line 53
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 54
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 55
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 58
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 59
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 61
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 62
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t\t";
                // line 64
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 69
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 71
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 72
            echo "\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 73
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 74
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 74)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 75
                echo "\t\t";
            } else {
                // line 76
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 78
            echo "\t</div>

\t</div>
";
        }
        // line 82
        echo "
";
        // line 83
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 84
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 87
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 91
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 92
                echo "
\t\t<form action=\"";
                // line 93
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 99
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 103
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 104
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 107
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 109
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 110
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 114
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 116
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 126
            echo "
";
        }
        // line 128
        echo "
";
        // line 129
        // line 130
        echo "
";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 132
            echo "
\t";
            // line 133
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 134
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 138
            echo "
\t";
            // line 139
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 140
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt";
                // line 145
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 146
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 147
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 148
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 154
            echo "
\t\t";
            // line 155
            // line 156
            echo "\t\t<li class=\"row";
            if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " pbwow reported";
            }
            echo "\">
\t\t\t";
            // line 157
            // line 158
            echo "\t\t\t<dl class=\"row-item ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", array());
            echo "\">
\t\t\t\t<dt";
            // line 159
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t";
            // line 160
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array()) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" class=\"row-item-link\"></a>";
            }
            // line 161
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 162
            // line 163
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array()) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 164
                echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 165
                echo ($context["NEW_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</a>
\t\t\t\t\t\t";
            // line 169
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                // line 170
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 171
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                // line 175
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 176
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 179
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                // line 180
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 181
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
            // line 185
            // line 186
            echo "
\t\t\t\t\t\t";
            // line 187
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 188
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 189
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 190
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 191
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 192
                if ($this->getAttribute($context["topicrow"], "REPLIES", array())) {
                    // line 193
                    echo "\t\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                    echo "</strong></span>
\t\t\t\t\t\t";
                }
                // line 195
                echo "
\t\t\t\t\t\t";
            }
            // line 197
            echo "
\t\t\t\t\t\t<div class=\"topic-poster responsive-hide\">
\t\t\t\t\t\t\t";
            // line 199
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 200
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 201
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t";
            // line 202
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 203
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 205
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                // line 206
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 209
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 211
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 212
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 213
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 214
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a class=\"button\" href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 216
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 220
            echo "
\t\t\t\t\t\t";
            // line 221
            // line 222
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 224
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 225
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t<span><dfn>";
            // line 227
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t\t";
            // line 228
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 229
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 230
                echo ($context["VIEW_LATEST_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t\t<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "
\t\t\t\t\t</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 237
            // line 238
            echo "\t\t</li>
\t\t";
            // line 239
            // line 240
            echo "
\t";
            // line 241
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 242
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 246
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 248
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 249
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 251
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "
";
        // line 257
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 258
            echo "\t<div class=\"action-bar bar-bottom\">
\t\t";
            // line 259
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 260
                echo "\t\t\t";
                // line 261
                echo "
\t\t\t<a href=\"";
                // line 262
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 263
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 264
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 266
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 268
                echo "\t\t\t</a>

\t\t\t";
                // line 270
                // line 271
                echo "\t\t";
            }
            // line 272
            echo "
\t\t";
            // line 273
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 274
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["S_FORUM_ACTION"] ?? null);
                echo "\">
\t\t\t";
                // line 275
                $location = "display_options.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("display_options.html", "viewforum_body.html", 275)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 276
                echo "\t\t\t</form>
\t\t";
            }
            // line 278
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 280
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 281
            echo "\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 282
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 283
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 283)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 284
                echo "\t\t\t";
            } else {
                // line 285
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 287
            echo "\t\t</div>
\t</div>
";
        }
        // line 290
        echo "
";
        // line 291
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 291)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 292
        echo "
";
        // line 293
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 294
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 295
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 296
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 299
        echo "
";
        // line 300
        if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
            // line 301
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 302
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", array());
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 306
        echo "
";
        // line 307
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 307)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  991 => 307,  988 => 306,  974 => 303,  970 => 302,  967 => 301,  965 => 300,  962 => 299,  956 => 296,  950 => 295,  947 => 294,  945 => 293,  942 => 292,  930 => 291,  927 => 290,  922 => 287,  916 => 285,  913 => 284,  900 => 283,  898 => 282,  893 => 281,  885 => 280,  881 => 278,  877 => 276,  865 => 275,  860 => 274,  858 => 273,  855 => 272,  852 => 271,  851 => 270,  847 => 268,  841 => 266,  835 => 264,  833 => 263,  823 => 262,  820 => 261,  818 => 260,  816 => 259,  813 => 258,  811 => 257,  808 => 256,  797 => 251,  793 => 249,  790 => 248,  784 => 246,  778 => 242,  776 => 241,  773 => 240,  772 => 239,  769 => 238,  768 => 237,  760 => 233,  754 => 230,  747 => 229,  745 => 228,  737 => 227,  730 => 225,  724 => 224,  720 => 222,  719 => 221,  716 => 220,  711 => 217,  705 => 216,  695 => 214,  693 => 213,  687 => 212,  680 => 211,  677 => 210,  673 => 209,  668 => 206,  666 => 205,  662 => 203,  652 => 202,  643 => 201,  638 => 200,  634 => 199,  630 => 197,  626 => 195,  617 => 193,  615 => 192,  612 => 191,  600 => 190,  586 => 189,  583 => 188,  581 => 187,  578 => 186,  577 => 185,  574 => 184,  568 => 181,  561 => 180,  558 => 179,  552 => 176,  545 => 175,  542 => 174,  536 => 171,  529 => 170,  527 => 169,  520 => 168,  514 => 165,  509 => 164,  506 => 163,  505 => 162,  502 => 161,  496 => 160,  485 => 159,  480 => 158,  479 => 157,  458 => 156,  457 => 155,  454 => 154,  445 => 148,  441 => 147,  437 => 146,  423 => 145,  412 => 140,  410 => 139,  407 => 138,  401 => 134,  399 => 133,  396 => 132,  391 => 131,  388 => 130,  387 => 129,  384 => 128,  380 => 126,  367 => 116,  362 => 114,  354 => 110,  348 => 109,  342 => 107,  336 => 104,  331 => 103,  314 => 99,  305 => 93,  302 => 92,  300 => 91,  293 => 87,  288 => 84,  286 => 83,  283 => 82,  277 => 78,  271 => 76,  268 => 75,  255 => 74,  253 => 73,  248 => 72,  240 => 71,  236 => 69,  228 => 64,  223 => 62,  217 => 61,  212 => 59,  208 => 58,  204 => 57,  199 => 55,  196 => 54,  194 => 53,  191 => 52,  188 => 51,  187 => 50,  184 => 49,  178 => 47,  172 => 45,  170 => 44,  160 => 43,  157 => 42,  155 => 41,  153 => 40,  149 => 38,  147 => 37,  144 => 36,  130 => 34,  122 => 31,  119 => 30,  117 => 29,  115 => 28,  112 => 27,  106 => 23,  101 => 21,  96 => 20,  88 => 18,  86 => 17,  77 => 14,  75 => 13,  72 => 12,  68 => 10,  54 => 9,  48 => 8,  44 => 6,  42 => 5,  41 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewforum_body.html", "");
    }
}
