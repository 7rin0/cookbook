/**
 * @fileoverview Compiled template for file
 *
 * 
 *
 * @suppress {checkTypes|fileoverviewTags}
 */

goog.provide('localeTabs');

goog.require('twig');
goog.require('twig.filter');

/**
 * @constructor
 * @param {twig.Environment} env
 * @extends {twig.Template}
 */
localeTabs = function(env) {
    twig.Template.call(this, env);
};
twig.inherits(localeTabs, twig.Template);

/**
 * @inheritDoc
 */
localeTabs.prototype.getParent_ = function(context) {
    return false;
};

/**
 * @inheritDoc
 */
localeTabs.prototype.render_ = function(sb, context, blocks) {
    blocks = typeof(blocks) == "undefined" ? {} : blocks;
    // line 2
    sb.append("<div class=\"locale-tabs\">\n    ");
    // line 3
    context['_parent'] = context;
    var seq = ("locales" in context ? context["locales"] : null);
    twig.forEach(seq, function(v, k) {
        context["locale"] = k;
        context["config"] = v;
        // line 4
        sb.append("        <a href=\"#\"");
        if (((("locale" in context ? context["locale"] : null)) == (("currentLocale" in context ? context["currentLocale"] : null)))) {
            sb.append(" class=\"active\"");
        }
        sb.append(" data-locale=\"");
        sb.append(twig.filter.escape(this.env_, ("locale" in context ? context["locale"] : null), "html", null, true));
        sb.append("\"><img src=\"");
        sb.append(twig.filter.escape(this.env_, twig.attr(("config" in context ? context["config"] : null), "flag"), "html", null, true));
        sb.append("\" title=\"");
        sb.append(twig.filter.escape(this.env_, twig.attr(("config" in context ? context["config"] : null), "label"), "html", null, true));
        sb.append("\" width=\"16\" height=\"11\" \/><\/a>\n    ");
    }, this);
    // line 6
    sb.append("<\/div>\n");
};

/**
 * @inheritDoc
 */
localeTabs.prototype.getTemplateName = function() {
    return "localeTabs";
};

/**
 * Returns whether this template can be used as trait.
 *
 * @return {boolean}
 */
localeTabs.prototype.isTraitable = function() {
    return false;
};
/* {% twig_js name="localeTabs" %}*/
/* <div class="locale-tabs">*/
/*     {% for locale, config in locales %}*/
/*         <a href="#"{% if locale == currentLocale %} class="active"{% endif %} data-locale="{{ locale }}"><img src="{{ config.flag }}" title="{{ config.label }}" width="16" height="11" /></a>*/
/*     {% endfor %}*/
/* </div>*/
/* */
