/*
FaMous - Simple (but powerful) RWD Framework
http://FaMous.tapquo.com
Copyright (c) 2011-2013 Tapquo S.L. - Licensed GPLv3, Commercial

@namespace  FaMous
@author     Javier Jimenez Villar <javi@tapquo.com> || @soyjavi
*/


(function() {
  var FaMous,
    __slice = [].slice;

  window.FaMous = FaMous = {};

  FaMous.VERSION = "0.7";

  FaMous.dom = function() {
    var args;

    args = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
    if (typeof $$ !== "undefined" && $$ !== null) {
      return $$.apply(null, args);
    } else {
      return $.apply(null, args);
    }
  };

  FaMous.ready = FaMous.dom().ready;

}).call(this);

(function() {
  FaMous.Box = (function(tk) {
    var box, hide, lock, show;

    lock = void 0;
    box = void 0;
    show = function(box_id) {
      box = tk.dom("[data-famous=boxes] #" + box_id).first();
      box.addClass("active");
      return this;
    };
    hide = function() {
      box.removeClass("active");
      return this;
    };
    return {
      _Instance: (function() {
        tk.dom("[data-famous=boxes] aside.absolute").each(function(index, element) {
          var modal;

          modal = tk.dom(element);
          return modal.html("<div>" + modal.html() + "</div>");
        });
        tk.dom("[data-famous=boxes] [data-box=close]").on("click", function() {
          return FaMous.Box.hide();
        });
        return tk.dom("[data-famous-box]").on("click", function() {
          return FaMous.Box.show(tk.dom(this).attr('data-famous-box'));
        });
      })(),
      show: show,
      hide: hide
    };
  })(FaMous);

}).call(this);

(function() {
  FaMous.Events = (function(tk) {
    return {
      init: (function() {
        return FaMous.dom("[data-control=checkbox]").on("change", function(event) {
          var checked, el, input;

          event.preventDefault();
          el = FaMous.dom(this);
          input = el.find("input");
          checked = input[0].checked;
          input.val(checked.toString());
          el.removeClass("checked");
          if (checked) {
            return el.addClass("checked");
          }
        });
      })()
    };
  })(FaMous);

}).call(this);

(function() {
  var hidebar;

  hidebar = function() {
    var browser, browserRegex, hideURLbar, isMobile;

    browser = navigator.userAgent;
    browserRegex = /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
    isMobile = false;
    if (browser.match(browserRegex)) {
      hideURLbar = function() {
        return window.scrollTo(0, 1);
      };
      isMobile = true;
      return addEventListener("load", (function() {
        return setTimeout(hideURLbar, 0);
      }), false);
    }
  };

}).call(this);

(function() {
  var __slice = [].slice;

  if (!window.FaMous) {
    window.FaMous = {
      dom: function() {
        var args;

        args = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
        if (typeof $$ !== "undefined" && $$ !== null) {
          return $$.apply(null, args);
        } else {
          return $.apply(null, args);
        }
      }
    };
  }

  window.FaMous.Modal = (function(tk) {
    var hide, loading, lock, modal, show;

    lock = void 0;
    modal = void 0;
    /*
        @todo: Describe method
    */

    show = function(modal_id) {
      lock.addClass("active").show();
      this._hideAnyModal();
      modal = tk.dom("[data-famous=modal]#" + modal_id).addClass("active");
      return this;
    };
    /*
        @todo: Describe method
    */

    hide = function() {
      lock.removeClass("active");
      if (modal != null) {
        modal.removeClass("active");
      }
      setTimeout(function() {
        return lock.attr("data-loading", "false").hide();
      }, 250);
      return this;
    };
    /*
        @loading: Describe method
    */

    loading = function(text) {
      this._hideAnyModal();
      lock.attr("data-loading", "true").addClass("active").show();
      return this;
    };
    return {
      _hideAnyModal: function() {
        return tk.dom("[data-famous=modal]").removeClass("active");
      },
      _Instance: (function() {
        tk.dom("[data-famous=modal].side").each(function(index, element) {
          modal = tk.dom(element);
          return modal.html("<div>" + modal.html() + "</div>");
        });
        tk.dom("[data-famous=modal] [data-modal=close]").on("click", function() {
          return FaMous.Modal.hide();
        });
        tk.dom("[data-famous-modal]").on("click", function() {
          return FaMous.Modal.show(tk.dom(this).attr('data-famous-modal'));
        });
        tk.dom(document.body).append("<div data-famous=\"lock\" data-loading=\"false\">\n  <div class=\"loading\">\n    <div class=\"container\">\n        <span class=\"top\"></span>\n        <span class=\"right\"></span>\n        <span class=\"bottom\"></span>\n        <span class=\"left\"></span>\n    </div>\n  </div>\n</div>");
        return lock = tk.dom("[data-famous=lock]").first();
      })(),
      show: show,
      hide: hide,
      loading: loading
    };
  })(FaMous);

}).call(this);
