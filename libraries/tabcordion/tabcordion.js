// Generated by CoffeeScript 1.3.3

/*
- Currently only supports data-target on the tabs, not href
*/

(function ($) {
  "use strict";
(function() {

  var Tabcordion;

  $.fn.tabcordion = function(option) {
    return this.each(function() {
      var $this, data, options;
      $this = $(this);
      options = typeof option === 'object' && option;
      data = $this.data('tabcordion') || new Tabcordion(this, options);
      if (typeof option === 'string') {
        return data[option]();
      } else if (typeof option === 'number') {
        return data.index(option);
      }
    });
  };

  $.fn.tabcordion.defaults = {
    resizeEl: null,
    onResize: true,
    delay: 500,
    breakWidth: 768,
    tabs: {
      minWidth: null,
      "class": 'tabbable',
      listClass: 'nav nav-tabs',
      itemClass: '',
      bodyClass: 'tab-pane'
    },
    accordion: {
      maxWidth: null,
      "class": 'accordion',
      listClass: 'nav',
      itemClass: 'accordion-group',
      bodyClass: 'accordion-body collapse'
    },
    activeClass: 'active in',
    scheduler: null
  };

  Tabcordion = (function() {

    function Tabcordion(el, options) {
      var listClass;
      this.$el = $(el);
      this.options = $.extend({}, $.fn.tabcordion.defaults, {
        resizeEl: this.$el
      }, options);
      if (this.options.tabs.minWidth == null) {
        this.options.tabs.minWidth = this.options.breakWidth;
      }
      if (this.options.accordion.maxWidth == null) {
        this.options.accordion.maxWidth = this.options.breakWidth;
      }
      this.$el.addClass(this.options.tabs["class"]).find('> .tab-content > *').addClass(this.options.tabs.bodyClass);
      this.$el.find('> ul > li > a').attr('data-toggle', 'tab');
      this.$el.data('tabcordion', this);
      if (listClass = this.$el.find('> ul').attr('class')) {
        this.options.tabs.listClass += ' ' + listClass;
      }
      if (this.options.onResize) {
        this.proxy = $.proxy(this.eventHandler, this);
        $(window).on('resize', this.proxy);
      }
      this.onResize();
      this.initialized = true;
    }

    Tabcordion.prototype.index = function(i) {
      var $item, $items, set, _i, _len, _ref, _results;
      if (this.$el.hasClass(this.options.tabs["class"])) {
        _ref = [this.$el.find('.tab-content > *'), this.$el.find('.nav-tabs > *')];
        _results = [];
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          set = _ref[_i];
          if (set.length > i) {
            _results.push(set.removeClass('active').slice(i, i + 1).addClass('active'));
          } else {
            _results.push(void 0);
          }
        }
        return _results;
      } else {
        this.$el.find('.accordion-body, .accordion-toggle').removeClass('active in');
        $items = this.$el.find('.accordion-group').removeClass('active');
        $item = $items.slice(i, i + 1);
        return $item.addClass(this.options.activeClass).find('.accordion-heading > .accordion-toggle').addClass(this.options.activeClass);
      }
    };

    Tabcordion.prototype.eventHandler = function(e) {
      var _this = this;
      if (this.timeout) {
        clearTimeout(this.timeout);
      }
      return this.timeout = setTimeout(function() {
        if (_this.options.scheduler) {
          return _this.options.scheduler(function() {
            return _this.onResize(e);
          });
        } else {
          return _this.onResize(e);
        }
      }, this.options.delay);
    };

    Tabcordion.prototype.onResize = function() {
      var width;
      width = $(this.options.resizeEl).width();
      if (width < this.options.tabs.minWidth) {
        return this.accordion();
      } else if (width > this.options.accordion.maxWidth) {
        return this.tabs();
      }
    };

    Tabcordion.prototype.tabs = function() {
      var $list, $tabContent,
        _this = this;
      if (!this.initialized) {
        return this.$el.find('> ul.nav a').tab().on('click', function() {
          return $(this).tab('show');
        });
      }
      if (this.$el.hasClass(this.options.tabs["class"])) {
        return;
      }
      this.$el.removeClass(this.options.accordion["class"]).addClass(this.options.tabs["class"]);
      $list = this.$el.find('> ul.nav').removeClass(this.options.accordion.listClass).addClass(this.options.tabs.listClass);
      $tabContent = this.$el.find('.tab-content').css('display', 'block');
      $list.parent().append($tabContent);
      return $list.children().removeClass(this.options.accordion.itemClass).addClass(this.options.tabs.itemClass).each(function(i, el) {
        var $content, $inner, $link, $navItem;
        $navItem = $(el);
        $link = $navItem.find('.accordion-heading a');
        $link.attr('data-toggle', 'tab');
        $content = $($link.attr('data-target')).removeClass('fade');
        $inner = $content.find('> .accordion-inner').remove();
        $content.append($inner.children());
        $navItem.children().remove().end().append($link);
        $tabContent.append($content);
        _this.switchContent($link, $content, _this.options.accordion, _this.options.tabs);
        return $link.tab();
      });
    };

    Tabcordion.prototype.accordion = function() {
      var $list, $navItems, $tabContent,
        _this = this;
      if (this.$el.hasClass(this.options.accordion["class"])) {
        return;
      }
      this.$el.removeClass(this.options.tabs["class"]).addClass(this.options.accordion["class"]);
      $list = this.$el.find('> ul.nav').removeClass(this.options.tabs.listClass).addClass(this.options.accordion.listClass);
      $list.parent().append($list);
      $tabContent = this.$el.find('.tab-content').css('display', 'none');
      $navItems = $list.children();
      return $navItems.removeClass(this.options.tabs.itemClass).addClass(this.options.accordion.itemClass).each(function(i, el) {
        var $content, $heading, $link, $navItem;
        $navItem = $(el);
        $link = $navItem.find('a');
        $content = $($link.attr('data-target'));
        $heading = $('<div class="accordion-heading" />').append($link);
        $content.append($('<div class="accordion-inner" />').append($content.children()));
        if (!$content.attr('id')) {
          $content.attr('id', Tabcordion.generateId('body'));
        }
        $link.addClass('accordion-toggle');
        $link.attr('data-toggle', 'collapse');
        $link.attr('data-target', '#' + $content.attr('id'));
        $link.data('parent', _this.$el);
        $navItem.append($heading).append($content);
        _this.switchContent($link, $content, _this.options.tabs, _this.options.accordion);
        return true;
      });
    };

    Tabcordion.prototype.switchContent = function($link, $content, from, to) {
      var isActive, switchToTab;
      switchToTab = to.bodyClass === this.options.tabs.bodyClass;
      isActive = $content.hasClass('active');
      $content.removeClass(from.bodyClass).addClass(to.bodyClass);
      if (isActive) {
        $link.addClass(this.options.activeClass);
        $content.addClass(this.options.activeClass);
      } else {
        $link.removeClass(this.options.activeClass);
        $content.removeClass(this.options.activeClass);
      }
      $link.on('click', function(e) {
        return e.preventDefault();
      });
      $content.collapse({
        parent: this.$el.find('> ul'),
        toggle: false
      });
      if (!switchToTab) {
        $content.height(isActive ? 'auto' : 0);
        $content.collapse();
      }
      return isActive;
    };

    Tabcordion.prototype.getItems = function() {
      return this.$el.find('.nav > li a[data-target]');
    };

    Tabcordion.prototype.destroy = function() {
      if (this.proxy) {
        return $(window).off('resize', this.proxy);
      }
    };

    return Tabcordion;

  })();

  $.extend(Tabcordion, {
    idSuffix: 1,
    generateId: function(suffix) {
      var id;
      while (true) {
        id = "tabcordion-" + suffix + "-" + (Tabcordion.idSuffix++);
        if ($('#' + id).length === 0) {
          break;
        }
      }
      return id;
    }
  });

}).call(this);
})(jQuery);
