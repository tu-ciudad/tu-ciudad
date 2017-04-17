//OWL js carousels

! function (a, b, c, d) {
    function e(b, c) {
        this.settings = null, this.options = a.extend({}, e.Defaults, c), this.$element = a(b), this._handlers = {}, this._plugins = {}, this._supress = {}, this._current = null, this._speed = null, this._coordinates = [], this._breakpoint = null, this._width = null, this._items = [], this._clones = [], this._mergers = [], this._widths = [], this._invalidated = {}, this._pipe = [], this._drag = {
            time: null,
            target: null,
            pointer: null,
            stage: {
                start: null,
                current: null
            },
            direction: null
        }, this._states = {
            current: {},
            tags: {
                initializing: ["busy"],
                animating: ["busy"],
                dragging: ["interacting"]
            }
        }, a.each(["onResize", "onThrottledResize"], a.proxy(function (b, c) {
            this._handlers[c] = a.proxy(this[c], this)
        }, this)), a.each(e.Plugins, a.proxy(function (a, b) {
            this._plugins[a.charAt(0).toLowerCase() + a.slice(1)] = new b(this)
        }, this)), a.each(e.Workers, a.proxy(function (b, c) {
            this._pipe.push({
                filter: c.filter,
                run: a.proxy(c.run, this)
            })
        }, this)), this.setup(), this.initialize()
    }
    e.Defaults = {
        items: 3,
        loop: !1,
        center: !1,
        rewind: !1,
        mouseDrag: !0,
        touchDrag: !0,
        pullDrag: !0,
        freeDrag: !1,
        margin: 0,
        stagePadding: 0,
        merge: !1,
        mergeFit: !0,
        autoWidth: !1,
        startPosition: 0,
        rtl: !1,
        smartSpeed: 250,
        fluidSpeed: !1,
        dragEndSpeed: !1,
        responsive: {},
        responsiveRefreshRate: 200,
        responsiveBaseElement: b,
        fallbackEasing: "swing",
        info: !1,
        nestedItemSelector: !1,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab"
    }, e.Width = {
        Default: "default",
        Inner: "inner",
        Outer: "outer"
    }, e.Type = {
        Event: "event",
        State: "state"
    }, e.Plugins = {}, e.Workers = [{
        filter: ["width", "settings"],
        run: function () {
            this._width = this.$element.width()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function (a) {
            a.current = this._items && this._items[this.relative(this._current)]
        }
    }, {
        filter: ["items", "settings"],
        run: function () {
            this.$stage.children(".cloned").remove()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function (a) {
            var b = this.settings.margin || "",
                c = !this.settings.autoWidth,
                d = this.settings.rtl,
                e = {
                    width: "auto",
                    "margin-left": d ? b : "",
                    "margin-right": d ? "" : b
                };
            !c && this.$stage.children().css(e), a.css = e
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function (a) {
            var b = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                c = null,
                d = this._items.length,
                e = !this.settings.autoWidth,
                f = [];
            for (a.items = {
                    merge: !1,
                    width: b
                }; d--;) c = this._mergers[d], c = this.settings.mergeFit && Math.min(c, this.settings.items) || c, a.items.merge = c > 1 || a.items.merge, f[d] = e ? b * c : this._items[d].width();
            this._widths = f
        }
    }, {
        filter: ["items", "settings"],
        run: function () {
            var b = [],
                c = this._items,
                d = this.settings,
                e = Math.max(2 * d.items, 4),
                f = 2 * Math.ceil(c.length / 2),
                g = d.loop && c.length ? d.rewind ? e : Math.max(e, f) : 0,
                h = "",
                i = "";
            for (g /= 2; g--;) b.push(this.normalize(b.length / 2, !0)), h += c[b[b.length - 1]][0].outerHTML, b.push(this.normalize(c.length - 1 - (b.length - 1) / 2, !0)), i = c[b[b.length - 1]][0].outerHTML + i;
            this._clones = b, a(h).addClass("cloned").appendTo(this.$stage), a(i).addClass("cloned").prependTo(this.$stage)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function () {
            for (var a = this.settings.rtl ? 1 : -1, b = this._clones.length + this._items.length, c = -1, d = 0, e = 0, f = []; ++c < b;) d = f[c - 1] || 0, e = this._widths[this.relative(c)] + this.settings.margin, f.push(d + e * a);
            this._coordinates = f
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function () {
            var a = this.settings.stagePadding,
                b = this._coordinates,
                c = {
                    width: Math.ceil(Math.abs(b[b.length - 1])) + 2 * a,
                    "padding-left": a || "",
                    "padding-right": a || ""
                };
            this.$stage.css(c)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function (a) {
            var b = this._coordinates.length,
                c = !this.settings.autoWidth,
                d = this.$stage.children();
            if (c && a.items.merge)
                for (; b--;) a.css.width = this._widths[this.relative(b)], d.eq(b).css(a.css);
            else c && (a.css.width = a.items.width, d.css(a.css))
        }
    }, {
        filter: ["items"],
        run: function () {
            this._coordinates.length < 1 && this.$stage.removeAttr("style")
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function (a) {
            a.current = a.current ? this.$stage.children().index(a.current) : 0, a.current = Math.max(this.minimum(), Math.min(this.maximum(), a.current)), this.reset(a.current)
        }
    }, {
        filter: ["position"],
        run: function () {
            this.animate(this.coordinates(this._current))
        }
    }, {
        filter: ["width", "position", "items", "settings"],
        run: function () {
            var a, b, c, d, e = this.settings.rtl ? 1 : -1,
                f = 2 * this.settings.stagePadding,
                g = this.coordinates(this.current()) + f,
                h = g + this.width() * e,
                i = [];
            for (c = 0, d = this._coordinates.length; d > c; c++) a = this._coordinates[c - 1] || 0, b = Math.abs(this._coordinates[c]) + f * e, (this.op(a, "<=", g) && this.op(a, ">", h) || this.op(b, "<", g) && this.op(b, ">", h)) && i.push(c);
            this.$stage.children(".active").removeClass("active"), this.$stage.children(":eq(" + i.join("), :eq(") + ")").addClass("active"), this.settings.center && (this.$stage.children(".center").removeClass("center"), this.$stage.children().eq(this.current()).addClass("center"))
        }
    }], e.prototype.initialize = function () {
        if (this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading")) {
            var b, c, e;
            b = this.$element.find("img"), c = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : d, e = this.$element.children(c).width(), b.length && 0 >= e && this.preloadAutoWidthImages(b)
        }
        this.$element.addClass(this.options.loadingClass), this.$stage = a("<" + this.settings.stageElement + ' class="' + this.settings.stageClass + '"/>').wrap('<div class="' + this.settings.stageOuterClass + '"/>'), this.$element.append(this.$stage.parent()), this.replace(this.$element.children().not(this.$stage.parent())), this.$element.is(":visible") ? this.refresh() : this.invalidate("width"), this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass), this.registerEventHandlers(), this.leave("initializing"), this.trigger("initialized")
    }, e.prototype.setup = function () {
        var b = this.viewport(),
            c = this.options.responsive,
            d = -1,
            e = null;
        c ? (a.each(c, function (a) {
            b >= a && a > d && (d = Number(a))
        }), e = a.extend({}, this.options, c[d]), "function" == typeof e.stagePadding && (e.stagePadding = e.stagePadding()), delete e.responsive, e.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + d))) : e = a.extend({}, this.options), this.trigger("change", {
            property: {
                name: "settings",
                value: e
            }
        }), this._breakpoint = d, this.settings = e, this.invalidate("settings"), this.trigger("changed", {
            property: {
                name: "settings",
                value: this.settings
            }
        })
    }, e.prototype.optionsLogic = function () {
        this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1)
    }, e.prototype.prepare = function (b) {
        var c = this.trigger("prepare", {
            content: b
        });
        return c.data || (c.data = a("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(b)), this.trigger("prepared", {
            content: c.data
        }), c.data
    }, e.prototype.update = function () {
        for (var b = 0, c = this._pipe.length, d = a.proxy(function (a) {
                return this[a]
            }, this._invalidated), e = {}; c > b;)(this._invalidated.all || a.grep(this._pipe[b].filter, d).length > 0) && this._pipe[b].run(e), b++;
        this._invalidated = {}, !this.is("valid") && this.enter("valid")
    }, e.prototype.width = function (a) {
        switch (a = a || e.Width.Default) {
            case e.Width.Inner:
            case e.Width.Outer:
                return this._width;
            default:
                return this._width - 2 * this.settings.stagePadding + this.settings.margin
        }
    }, e.prototype.refresh = function () {
        this.enter("refreshing"), this.trigger("refresh"), this.setup(), this.optionsLogic(), this.$element.addClass(this.options.refreshClass), this.update(), this.$element.removeClass(this.options.refreshClass), this.leave("refreshing"), this.trigger("refreshed")
    }, e.prototype.onThrottledResize = function () {
        b.clearTimeout(this.resizeTimer), this.resizeTimer = b.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
    }, e.prototype.onResize = function () {
        return this._items.length ? this._width === this.$element.width() ? !1 : this.$element.is(":visible") ? (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized"))) : !1 : !1
    }, e.prototype.registerEventHandlers = function () {
        a.support.transition && this.$stage.on(a.support.transition.end + ".owl.core", a.proxy(this.onTransitionEnd, this)), this.settings.responsive !== !1 && this.on(b, "resize", this._handlers.onThrottledResize), this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass), this.$stage.on("mousedown.owl.core", a.proxy(this.onDragStart, this)), this.$stage.on("dragstart.owl.core selectstart.owl.core", function () {
            return !1
        })), this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", a.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", a.proxy(this.onDragEnd, this)))
    }, e.prototype.onDragStart = function (b) {
        var d = null;
        3 !== b.which && (a.support.transform ? (d = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","), d = {
            x: d[16 === d.length ? 12 : 4],
            y: d[16 === d.length ? 13 : 5]
        }) : (d = this.$stage.position(), d = {
            x: this.settings.rtl ? d.left + this.$stage.width() - this.width() + this.settings.margin : d.left,
            y: d.top
        }), this.is("animating") && (a.support.transform ? this.animate(d.x) : this.$stage.stop(), this.invalidate("position")), this.$element.toggleClass(this.options.grabClass, "mousedown" === b.type), this.speed(0), this._drag.time = (new Date).getTime(), this._drag.target = a(b.target), this._drag.stage.start = d, this._drag.stage.current = d, this._drag.pointer = this.pointer(b), a(c).on("mouseup.owl.core touchend.owl.core", a.proxy(this.onDragEnd, this)), a(c).one("mousemove.owl.core touchmove.owl.core", a.proxy(function (b) {
            var d = this.difference(this._drag.pointer, this.pointer(b));
            a(c).on("mousemove.owl.core touchmove.owl.core", a.proxy(this.onDragMove, this)), Math.abs(d.x) < Math.abs(d.y) && this.is("valid") || (b.preventDefault(), this.enter("dragging"), this.trigger("drag"))
        }, this)))
    }, e.prototype.onDragMove = function (a) {
        var b = null,
            c = null,
            d = null,
            e = this.difference(this._drag.pointer, this.pointer(a)),
            f = this.difference(this._drag.stage.start, e);
        this.is("dragging") && (a.preventDefault(), this.settings.loop ? (b = this.coordinates(this.minimum()), c = this.coordinates(this.maximum() + 1) - b, f.x = ((f.x - b) % c + c) % c + b) : (b = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()), c = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()), d = this.settings.pullDrag ? -1 * e.x / 5 : 0, f.x = Math.max(Math.min(f.x, b + d), c + d)), this._drag.stage.current = f, this.animate(f.x))
    }, e.prototype.onDragEnd = function (b) {
        var d = this.difference(this._drag.pointer, this.pointer(b)),
            e = this._drag.stage.current,
            f = d.x > 0 ^ this.settings.rtl ? "left" : "right";
        a(c).off(".owl.core"), this.$element.removeClass(this.options.grabClass), (0 !== d.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(this.closest(e.x, 0 !== d.x ? f : this._drag.direction)), this.invalidate("position"), this.update(), this._drag.direction = f, (Math.abs(d.x) > 3 || (new Date).getTime() - this._drag.time > 300) && this._drag.target.one("click.owl.core", function () {
            return !1
        })), this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"))
    }, e.prototype.closest = function (b, c) {
        var d = -1,
            e = 30,
            f = this.width(),
            g = this.coordinates();
        return this.settings.freeDrag || a.each(g, a.proxy(function (a, h) {
            return "left" === c && b > h - e && h + e > b ? d = a : "right" === c && b > h - f - e && h - f + e > b ? d = a + 1 : this.op(b, "<", h) && this.op(b, ">", g[a + 1] || h - f) && (d = "left" === c ? a + 1 : a), -1 === d
        }, this)), this.settings.loop || (this.op(b, ">", g[this.minimum()]) ? d = b = this.minimum() : this.op(b, "<", g[this.maximum()]) && (d = b = this.maximum())), d
    }, e.prototype.animate = function (b) {
        var c = this.speed() > 0;
        this.is("animating") && this.onTransitionEnd(), c && (this.enter("animating"), this.trigger("translate")), a.support.transform3d && a.support.transition ? this.$stage.css({
            transform: "translate3d(" + b + "px,0px,0px)",
            transition: this.speed() / 1e3 + "s"
        }) : c ? this.$stage.animate({
            left: b + "px"
        }, this.speed(), this.settings.fallbackEasing, a.proxy(this.onTransitionEnd, this)) : this.$stage.css({
            left: b + "px"
        })
    }, e.prototype.is = function (a) {
        return this._states.current[a] && this._states.current[a] > 0
    }, e.prototype.current = function (a) {
        if (a === d) return this._current;
        if (0 === this._items.length) return d;
        if (a = this.normalize(a), this._current !== a) {
            var b = this.trigger("change", {
                property: {
                    name: "position",
                    value: a
                }
            });
            b.data !== d && (a = this.normalize(b.data)), this._current = a, this.invalidate("position"), this.trigger("changed", {
                property: {
                    name: "position",
                    value: this._current
                }
            })
        }
        return this._current
    }, e.prototype.invalidate = function (b) {
        return "string" === a.type(b) && (this._invalidated[b] = !0, this.is("valid") && this.leave("valid")), a.map(this._invalidated, function (a, b) {
            return b
        })
    }, e.prototype.reset = function (a) {
        a = this.normalize(a), a !== d && (this._speed = 0, this._current = a, this.suppress(["translate", "translated"]), this.animate(this.coordinates(a)), this.release(["translate", "translated"]))
    }, e.prototype.normalize = function (a, b) {
        var c = this._items.length,
            e = b ? 0 : this._clones.length;
        return !this.isNumeric(a) || 1 > c ? a = d : (0 > a || a >= c + e) && (a = ((a - e / 2) % c + c) % c + e / 2), a
    }, e.prototype.relative = function (a) {
        return a -= this._clones.length / 2, this.normalize(a, !0)
    }, e.prototype.maximum = function (a) {
        var b, c, d, e = this.settings,
            f = this._coordinates.length;
        if (e.loop) f = this._clones.length / 2 + this._items.length - 1;
        else if (e.autoWidth || e.merge) {
            for (b = this._items.length, c = this._items[--b].width(), d = this.$element.width(); b-- && (c += this._items[b].width() + this.settings.margin, !(c > d)););
            f = b + 1
        } else f = e.center ? this._items.length - 1 : this._items.length - e.items;
        return a && (f -= this._clones.length / 2), Math.max(f, 0)
    }, e.prototype.minimum = function (a) {
        return a ? 0 : this._clones.length / 2
    }, e.prototype.items = function (a) {
        return a === d ? this._items.slice() : (a = this.normalize(a, !0), this._items[a])
    }, e.prototype.mergers = function (a) {
        return a === d ? this._mergers.slice() : (a = this.normalize(a, !0), this._mergers[a])
    }, e.prototype.clones = function (b) {
        var c = this._clones.length / 2,
            e = c + this._items.length,
            f = function (a) {
                return a % 2 === 0 ? e + a / 2 : c - (a + 1) / 2
            };
        return b === d ? a.map(this._clones, function (a, b) {
            return f(b)
        }) : a.map(this._clones, function (a, c) {
            return a === b ? f(c) : null
        })
    }, e.prototype.speed = function (a) {
        return a !== d && (this._speed = a), this._speed
    }, e.prototype.coordinates = function (b) {
        var c, e = 1,
            f = b - 1;
        return b === d ? a.map(this._coordinates, a.proxy(function (a, b) {
            return this.coordinates(b)
        }, this)) : (this.settings.center ? (this.settings.rtl && (e = -1, f = b + 1), c = this._coordinates[b], c += (this.width() - c + (this._coordinates[f] || 0)) / 2 * e) : c = this._coordinates[f] || 0, c = Math.ceil(c))
    }, e.prototype.duration = function (a, b, c) {
        return 0 === c ? 0 : Math.min(Math.max(Math.abs(b - a), 1), 6) * Math.abs(c || this.settings.smartSpeed)
    }, e.prototype.to = function (a, b) {
        var c = this.current(),
            d = null,
            e = a - this.relative(c),
            f = (e > 0) - (0 > e),
            g = this._items.length,
            h = this.minimum(),
            i = this.maximum();
        this.settings.loop ? (!this.settings.rewind && Math.abs(e) > g / 2 && (e += -1 * f * g), a = c + e, d = ((a - h) % g + g) % g + h, d !== a && i >= d - e && d - e > 0 && (c = d - e, a = d, this.reset(c))) : this.settings.rewind ? (i += 1, a = (a % i + i) % i) : a = Math.max(h, Math.min(i, a)), this.speed(this.duration(c, a, b)), this.current(a), this.$element.is(":visible") && this.update()
    }, e.prototype.next = function (a) {
        a = a || !1, this.to(this.relative(this.current()) + 1, a)
    }, e.prototype.prev = function (a) {
        a = a || !1, this.to(this.relative(this.current()) - 1, a)
    }, e.prototype.onTransitionEnd = function (a) {
        return a !== d && (a.stopPropagation(), (a.target || a.srcElement || a.originalTarget) !== this.$stage.get(0)) ? !1 : (this.leave("animating"), void this.trigger("translated"))
    }, e.prototype.viewport = function () {
        var d;
        if (this.options.responsiveBaseElement !== b) d = a(this.options.responsiveBaseElement).width();
        else if (b.innerWidth) d = b.innerWidth;
        else {
            if (!c.documentElement || !c.documentElement.clientWidth) throw "Can not detect viewport width.";
            d = c.documentElement.clientWidth
        }
        return d
    }, e.prototype.replace = function (b) {
        this.$stage.empty(), this._items = [], b && (b = b instanceof jQuery ? b : a(b)), this.settings.nestedItemSelector && (b = b.find("." + this.settings.nestedItemSelector)), b.filter(function () {
            return 1 === this.nodeType
        }).each(a.proxy(function (a, b) {
            b = this.prepare(b), this.$stage.append(b), this._items.push(b), this._mergers.push(1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
        }, this)), this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0), this.invalidate("items")
    }, e.prototype.add = function (b, c) {
        var e = this.relative(this._current);
        c = c === d ? this._items.length : this.normalize(c, !0), b = b instanceof jQuery ? b : a(b), this.trigger("add", {
            content: b,
            position: c
        }), b = this.prepare(b), 0 === this._items.length || c === this._items.length ? (0 === this._items.length && this.$stage.append(b), 0 !== this._items.length && this._items[c - 1].after(b), this._items.push(b), this._mergers.push(1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[c].before(b), this._items.splice(c, 0, b), this._mergers.splice(c, 0, 1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)), this._items[e] && this.reset(this._items[e].index()), this.invalidate("items"), this.trigger("added", {
            content: b,
            position: c
        })
    }, e.prototype.remove = function (a) {
        a = this.normalize(a, !0), a !== d && (this.trigger("remove", {
            content: this._items[a],
            position: a
        }), this._items[a].remove(), this._items.splice(a, 1), this._mergers.splice(a, 1), this.invalidate("items"), this.trigger("removed", {
            content: null,
            position: a
        }))
    }, e.prototype.preloadAutoWidthImages = function (b) {
        b.each(a.proxy(function (b, c) {
            this.enter("pre-loading"), c = a(c), a(new Image).one("load", a.proxy(function (a) {
                c.attr("src", a.target.src), c.css("opacity", 1), this.leave("pre-loading"), !this.is("pre-loading") && !this.is("initializing") && this.refresh()
            }, this)).attr("src", c.attr("src") || c.attr("data-src") || c.attr("data-src-retina"))
        }, this))
    }, e.prototype.destroy = function () {
        this.$element.off(".owl.core"), this.$stage.off(".owl.core"), a(c).off(".owl.core"), this.settings.responsive !== !1 && (b.clearTimeout(this.resizeTimer), this.off(b, "resize", this._handlers.onThrottledResize));
        for (var d in this._plugins) this._plugins[d].destroy();
        this.$stage.children(".cloned").remove(), this.$stage.unwrap(), this.$stage.children().contents().unwrap(), this.$stage.children().unwrap(), this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), "")).removeData("owl.carousel")
    }, e.prototype.op = function (a, b, c) {
        var d = this.settings.rtl;
        switch (b) {
            case "<":
                return d ? a > c : c > a;
            case ">":
                return d ? c > a : a > c;
            case ">=":
                return d ? c >= a : a >= c;
            case "<=":
                return d ? a >= c : c >= a
        }
    }, e.prototype.on = function (a, b, c, d) {
        a.addEventListener ? a.addEventListener(b, c, d) : a.attachEvent && a.attachEvent("on" + b, c)
    }, e.prototype.off = function (a, b, c, d) {
        a.removeEventListener ? a.removeEventListener(b, c, d) : a.detachEvent && a.detachEvent("on" + b, c)
    }, e.prototype.trigger = function (b, c, d, f, g) {
        var h = {
                item: {
                    count: this._items.length,
                    index: this.current()
                }
            },
            i = a.camelCase(a.grep(["on", b, d], function (a) {
                return a
            }).join("-").toLowerCase()),
            j = a.Event([b, "owl", d || "carousel"].join(".").toLowerCase(), a.extend({
                relatedTarget: this
            }, h, c));
        return this._supress[b] || (a.each(this._plugins, function (a, b) {
            b.onTrigger && b.onTrigger(j)
        }), this.register({
            type: e.Type.Event,
            name: b
        }), this.$element.trigger(j), this.settings && "function" == typeof this.settings[i] && this.settings[i].call(this, j)), j
    }, e.prototype.enter = function (b) {
        a.each([b].concat(this._states.tags[b] || []), a.proxy(function (a, b) {
            this._states.current[b] === d && (this._states.current[b] = 0), this._states.current[b]++
        }, this))
    }, e.prototype.leave = function (b) {
        a.each([b].concat(this._states.tags[b] || []), a.proxy(function (a, b) {
            this._states.current[b]--
        }, this))
    }, e.prototype.register = function (b) {
        if (b.type === e.Type.Event) {
            if (a.event.special[b.name] || (a.event.special[b.name] = {}), !a.event.special[b.name].owl) {
                var c = a.event.special[b.name]._default;
                a.event.special[b.name]._default = function (a) {
                    return !c || !c.apply || a.namespace && -1 !== a.namespace.indexOf("owl") ? a.namespace && a.namespace.indexOf("owl") > -1 : c.apply(this, arguments)
                }, a.event.special[b.name].owl = !0
            }
        } else b.type === e.Type.State && (this._states.tags[b.name] ? this._states.tags[b.name] = this._states.tags[b.name].concat(b.tags) : this._states.tags[b.name] = b.tags, this._states.tags[b.name] = a.grep(this._states.tags[b.name], a.proxy(function (c, d) {
            return a.inArray(c, this._states.tags[b.name]) === d
        }, this)))
    }, e.prototype.suppress = function (b) {
        a.each(b, a.proxy(function (a, b) {
            this._supress[b] = !0
        }, this))
    }, e.prototype.release = function (b) {
        a.each(b, a.proxy(function (a, b) {
            delete this._supress[b]
        }, this))
    }, e.prototype.pointer = function (a) {
        var c = {
            x: null,
            y: null
        };
        return a = a.originalEvent || a || b.event, a = a.touches && a.touches.length ? a.touches[0] : a.changedTouches && a.changedTouches.length ? a.changedTouches[0] : a, a.pageX ? (c.x = a.pageX, c.y = a.pageY) : (c.x = a.clientX, c.y = a.clientY), c
    }, e.prototype.isNumeric = function (a) {
        return !isNaN(parseFloat(a))
    }, e.prototype.difference = function (a, b) {
        return {
            x: a.x - b.x,
            y: a.y - b.y
        }
    }, a.fn.owlCarousel = function (b) {
        var c = Array.prototype.slice.call(arguments, 1);
        return this.each(function () {
            var d = a(this),
                f = d.data("owl.carousel");
            f || (f = new e(this, "object" == typeof b && b), d.data("owl.carousel", f), a.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function (b, c) {
                f.register({
                    type: e.Type.Event,
                    name: c
                }), f.$element.on(c + ".owl.carousel.core", a.proxy(function (a) {
                    a.namespace && a.relatedTarget !== this && (this.suppress([c]), f[c].apply(this, [].slice.call(arguments, 1)), this.release([c]))
                }, f))
            })), "string" == typeof b && "_" !== b.charAt(0) && f[b].apply(f, c)
        })
    }, a.fn.owlCarousel.Constructor = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    var e = function (b) {
        this._core = b, this._interval = null, this._visible = null, this._handlers = {
            "initialized.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.settings.autoRefresh && this.watch()
            }, this)
        }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers)
    };
    e.Defaults = {
        autoRefresh: !0,
        autoRefreshInterval: 500
    }, e.prototype.watch = function () {
        this._interval || (this._visible = this._core.$element.is(":visible"), this._interval = b.setInterval(a.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
    }, e.prototype.refresh = function () {
        this._core.$element.is(":visible") !== this._visible && (this._visible = !this._visible, this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh())
    }, e.prototype.destroy = function () {
        var a, c;
        b.clearInterval(this._interval);
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.AutoRefresh = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    var e = function (b) {
        this._core = b, this._loaded = [], this._handlers = {
            "initialized.owl.carousel change.owl.carousel resized.owl.carousel": a.proxy(function (b) {
                if (b.namespace && this._core.settings && this._core.settings.lazyLoad && (b.property && "position" == b.property.name || "initialized" == b.type))
                    for (var c = this._core.settings, e = c.center && Math.ceil(c.items / 2) || c.items, f = c.center && -1 * e || 0, g = (b.property && b.property.value !== d ? b.property.value : this._core.current()) + f, h = this._core.clones().length, i = a.proxy(function (a, b) {
                            this.load(b)
                        }, this); f++ < e;) this.load(h / 2 + this._core.relative(g)), h && a.each(this._core.clones(this._core.relative(g)), i), g++
            }, this)
        }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers)
    };
    e.Defaults = {
        lazyLoad: !1
    }, e.prototype.load = function (c) {
        var d = this._core.$stage.children().eq(c),
            e = d && d.find(".owl-lazy");
        !e || a.inArray(d.get(0), this._loaded) > -1 || (e.each(a.proxy(function (c, d) {
            var e, f = a(d),
                g = b.devicePixelRatio > 1 && f.attr("data-src-retina") || f.attr("data-src");
            this._core.trigger("load", {
                element: f,
                url: g
            }, "lazy"), f.is("img") ? f.one("load.owl.lazy", a.proxy(function () {
                f.css("opacity", 1), this._core.trigger("loaded", {
                    element: f,
                    url: g
                }, "lazy")
            }, this)).attr("src", g) : (e = new Image, e.onload = a.proxy(function () {
                f.css({
                    "background-image": "url(" + g + ")",
                    opacity: "1"
                }), this._core.trigger("loaded", {
                    element: f,
                    url: g
                }, "lazy")
            }, this), e.src = g)
        }, this)), this._loaded.push(d.get(0)))
    }, e.prototype.destroy = function () {
        var a, b;
        for (a in this.handlers) this._core.$element.off(a, this.handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.Lazy = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    var e = function (b) {
        this._core = b, this._handlers = {
            "initialized.owl.carousel refreshed.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.settings.autoHeight && this.update()
            }, this),
            "changed.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.settings.autoHeight && "position" == a.property.name && this.update()
            }, this),
            "loaded.owl.lazy": a.proxy(function (a) {
                a.namespace && this._core.settings.autoHeight && a.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
            }, this)
        }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers)
    };
    e.Defaults = {
        autoHeight: !1,
        autoHeightClass: "owl-height"
    }, e.prototype.update = function () {
        var b = this._core._current,
            c = b + this._core.settings.items,
            d = this._core.$stage.children().toArray().slice(b, c),
            e = [],
            f = 0;
        a.each(d, function (b, c) {
            e.push(a(c).height())
        }), f = Math.max.apply(null, e), this._core.$stage.parent().height(f).addClass(this._core.settings.autoHeightClass)
    }, e.prototype.destroy = function () {
        var a, b;
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.AutoHeight = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    var e = function (b) {
        this._core = b, this._videos = {}, this._playing = null, this._handlers = {
            "initialized.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.register({
                    type: "state",
                    name: "playing",
                    tags: ["interacting"]
                })
            }, this),
            "resize.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.settings.video && this.isInFullScreen() && a.preventDefault()
            }, this),
            "refreshed.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
            }, this),
            "changed.owl.carousel": a.proxy(function (a) {
                a.namespace && "position" === a.property.name && this._playing && this.stop()
            }, this),
            "prepared.owl.carousel": a.proxy(function (b) {
                if (b.namespace) {
                    var c = a(b.content).find(".owl-video");
                    c.length && (c.css("display", "none"), this.fetch(c, a(b.content)))
                }
            }, this)
        }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers), this._core.$element.on("click.owl.video", ".owl-video-play-icon", a.proxy(function (a) {
            this.play(a)
        }, this))
    };
    e.Defaults = {
        video: !1,
        videoHeight: !1,
        videoWidth: !1
    }, e.prototype.fetch = function (a, b) {
        var c = function () {
                return a.attr("data-vimeo-id") ? "vimeo" : a.attr("data-vzaar-id") ? "vzaar" : "youtube"
            }(),
            d = a.attr("data-vimeo-id") || a.attr("data-youtube-id") || a.attr("data-vzaar-id"),
            e = a.attr("data-width") || this._core.settings.videoWidth,
            f = a.attr("data-height") || this._core.settings.videoHeight,
            g = a.attr("href");
        if (!g) throw new Error("Missing video URL.");
        if (d = g.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/), d[3].indexOf("youtu") > -1) c = "youtube";
        else if (d[3].indexOf("vimeo") > -1) c = "vimeo";
        else {
            if (!(d[3].indexOf("vzaar") > -1)) throw new Error("Video URL not supported.");
            c = "vzaar"
        }
        d = d[6], this._videos[g] = {
            type: c,
            id: d,
            width: e,
            height: f
        }, b.attr("data-video", g), this.thumbnail(a, this._videos[g])
    }, e.prototype.thumbnail = function (b, c) {
        var d, e, f, g = c.width && c.height ? 'style="width:' + c.width + "px;height:" + c.height + 'px;"' : "",
            h = b.find("img"),
            i = "src",
            j = "",
            k = this._core.settings,
            l = function (a) {
                e = '<div class="owl-video-play-icon"></div>', d = k.lazyLoad ? '<div class="owl-video-tn ' + j + '" ' + i + '="' + a + '"></div>' : '<div class="owl-video-tn" style="opacity:1;background-image:url(' + a + ')"></div>', b.after(d), b.after(e)
            };
        return b.wrap('<div class="owl-video-wrapper"' + g + "></div>"), this._core.settings.lazyLoad && (i = "data-src", j = "owl-lazy"), h.length ? (l(h.attr(i)), h.remove(), !1) : void("youtube" === c.type ? (f = "//img.youtube.com/vi/" + c.id + "/hqdefault.jpg", l(f)) : "vimeo" === c.type ? a.ajax({
            type: "GET",
            url: "//vimeo.com/api/v2/video/" + c.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function (a) {
                f = a[0].thumbnail_large, l(f)
            }
        }) : "vzaar" === c.type && a.ajax({
            type: "GET",
            url: "//vzaar.com/api/videos/" + c.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function (a) {
                f = a.framegrab_url, l(f)
            }
        }))
    }, e.prototype.stop = function () {
        this._core.trigger("stop", null, "video"), this._playing.find(".owl-video-frame").remove(), this._playing.removeClass("owl-video-playing"), this._playing = null, this._core.leave("playing"), this._core.trigger("stopped", null, "video")
    }, e.prototype.play = function (b) {
        var c, d = a(b.target),
            e = d.closest("." + this._core.settings.itemClass),
            f = this._videos[e.attr("data-video")],
            g = f.width || "100%",
            h = f.height || this._core.$stage.height();
        this._playing || (this._core.enter("playing"), this._core.trigger("play", null, "video"), e = this._core.items(this._core.relative(e.index())), this._core.reset(e.index()), "youtube" === f.type ? c = '<iframe width="' + g + '" height="' + h + '" src="//www.youtube.com/embed/' + f.id + "?autoplay=1&v=" + f.id + '" frameborder="0" allowfullscreen></iframe>' : "vimeo" === f.type ? c = '<iframe src="//player.vimeo.com/video/' + f.id + '?autoplay=1" width="' + g + '" height="' + h + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>' : "vzaar" === f.type && (c = '<iframe frameborder="0"height="' + h + '"width="' + g + '" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/' + f.id + '/player?autoplay=true"></iframe>'), a('<div class="owl-video-frame">' + c + "</div>").insertAfter(e.find(".owl-video")), this._playing = e.addClass("owl-video-playing"))
    }, e.prototype.isInFullScreen = function () {
        var b = c.fullscreenElement || c.mozFullScreenElement || c.webkitFullscreenElement;
        return b && a(b).parent().hasClass("owl-video-frame")
    }, e.prototype.destroy = function () {
        var a, b;
        this._core.$element.off("click.owl.video");
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.Video = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    var e = function (b) {
        this.core = b, this.core.options = a.extend({}, e.Defaults, this.core.options), this.swapping = !0, this.previous = d, this.next = d, this.handlers = {
            "change.owl.carousel": a.proxy(function (a) {
                a.namespace && "position" == a.property.name && (this.previous = this.core.current(), this.next = a.property.value)
            }, this),
            "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": a.proxy(function (a) {
                a.namespace && (this.swapping = "translated" == a.type)
            }, this),
            "translate.owl.carousel": a.proxy(function (a) {
                a.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
            }, this)
        }, this.core.$element.on(this.handlers)
    };
    e.Defaults = {
        animateOut: !1,
        animateIn: !1
    }, e.prototype.swap = function () {
        if (1 === this.core.settings.items && a.support.animation && a.support.transition) {
            this.core.speed(0);
            var b, c = a.proxy(this.clear, this),
                d = this.core.$stage.children().eq(this.previous),
                e = this.core.$stage.children().eq(this.next),
                f = this.core.settings.animateIn,
                g = this.core.settings.animateOut;
            this.core.current() !== this.previous && (g && (b = this.core.coordinates(this.previous) - this.core.coordinates(this.next), d.one(a.support.animation.end, c).css({
                left: b + "px"
            }).addClass("animated owl-animated-out").addClass(g)), f && e.one(a.support.animation.end, c).addClass("animated owl-animated-in").addClass(f))
        }
    }, e.prototype.clear = function (b) {
        a(b.target).css({
            left: ""
        }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.onTransitionEnd()
    }, e.prototype.destroy = function () {
        var a, b;
        for (a in this.handlers) this.core.$element.off(a, this.handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null);
    }, a.fn.owlCarousel.Constructor.Plugins.Animate = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    var e = function (b) {
        this._core = b, this._timeout = null, this._paused = !1, this._handlers = {
            "changed.owl.carousel": a.proxy(function (a) {
                a.namespace && "settings" === a.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : a.namespace && "position" === a.property.name && this._core.settings.autoplay && this._setAutoPlayInterval()
            }, this),
            "initialized.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.settings.autoplay && this.play()
            }, this),
            "play.owl.autoplay": a.proxy(function (a, b, c) {
                a.namespace && this.play(b, c)
            }, this),
            "stop.owl.autoplay": a.proxy(function (a) {
                a.namespace && this.stop()
            }, this),
            "mouseover.owl.autoplay": a.proxy(function () {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "mouseleave.owl.autoplay": a.proxy(function () {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
            }, this),
            "touchstart.owl.core": a.proxy(function () {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "touchend.owl.core": a.proxy(function () {
                this._core.settings.autoplayHoverPause && this.play()
            }, this)
        }, this._core.$element.on(this._handlers), this._core.options = a.extend({}, e.Defaults, this._core.options)
    };
    e.Defaults = {
        autoplay: !1,
        autoplayTimeout: 5e3,
        autoplayHoverPause: !1,
        autoplaySpeed: !1
    }, e.prototype.play = function (a, b) {
        this._paused = !1, this._core.is("rotating") || (this._core.enter("rotating"), this._setAutoPlayInterval())
    }, e.prototype._getNextTimeout = function (d, e) {
        return this._timeout && b.clearTimeout(this._timeout), b.setTimeout(a.proxy(function () {
            this._paused || this._core.is("busy") || this._core.is("interacting") || c.hidden || this._core.next(e || this._core.settings.autoplaySpeed)
        }, this), d || this._core.settings.autoplayTimeout)
    }, e.prototype._setAutoPlayInterval = function () {
        this._timeout = this._getNextTimeout()
    }, e.prototype.stop = function () {
        this._core.is("rotating") && (b.clearTimeout(this._timeout), this._core.leave("rotating"))
    }, e.prototype.pause = function () {
        this._core.is("rotating") && (this._paused = !0)
    }, e.prototype.destroy = function () {
        var a, b;
        this.stop();
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.autoplay = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    "use strict";
    var e = function (b) {
        this._core = b, this._initialized = !1, this._pages = [], this._controls = {}, this._templates = [], this.$element = this._core.$element, this._overrides = {
            next: this._core.next,
            prev: this._core.prev,
            to: this._core.to
        }, this._handlers = {
            "prepared.owl.carousel": a.proxy(function (b) {
                b.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>")
            }, this),
            "added.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.settings.dotsData && this._templates.splice(a.position, 0, this._templates.pop())
            }, this),
            "remove.owl.carousel": a.proxy(function (a) {
                a.namespace && this._core.settings.dotsData && this._templates.splice(a.position, 1)
            }, this),
            "changed.owl.carousel": a.proxy(function (a) {
                a.namespace && "position" == a.property.name && this.draw()
            }, this),
            "initialized.owl.carousel": a.proxy(function (a) {
                a.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), this._initialized = !0, this._core.trigger("initialized", null, "navigation"))
            }, this),
            "refreshed.owl.carousel": a.proxy(function (a) {
                a.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"))
            }, this)
        }, this._core.options = a.extend({}, e.Defaults, this._core.options), this.$element.on(this._handlers)
    };
    e.Defaults = {
        nav: !1,
        navText: ["prev", "next"],
        navSpeed: !1,
        navElement: "div",
        navContainer: !1,
        navContainerClass: "owl-nav",
        navClass: ["owl-prev", "owl-next"],
        slideBy: 1,
        dotClass: "owl-dot",
        dotsClass: "owl-dots",
        dots: !0,
        dotsEach: !1,
        dotsData: !1,
        dotsSpeed: !1,
        dotsContainer: !1
    }, e.prototype.initialize = function () {
        var b, c = this._core.settings;
        this._controls.$relative = (c.navContainer ? a(c.navContainer) : a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled"), this._controls.$previous = a("<" + c.navElement + ">").addClass(c.navClass[0]).html(c.navText[0]).prependTo(this._controls.$relative).on("click", a.proxy(function (a) {
            this.prev(c.navSpeed)
        }, this)), this._controls.$next = a("<" + c.navElement + ">").addClass(c.navClass[1]).html(c.navText[1]).appendTo(this._controls.$relative).on("click", a.proxy(function (a) {
            this.next(c.navSpeed)
        }, this)), c.dotsData || (this._templates = [a("<div>").addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]), this._controls.$absolute = (c.dotsContainer ? a(c.dotsContainer) : a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled"), this._controls.$absolute.on("click", "div", a.proxy(function (b) {
            var d = a(b.target).parent().is(this._controls.$absolute) ? a(b.target).index() : a(b.target).parent().index();
            b.preventDefault(), this.to(d, c.dotsSpeed)
        }, this));
        for (b in this._overrides) this._core[b] = a.proxy(this[b], this)
    }, e.prototype.destroy = function () {
        var a, b, c, d;
        for (a in this._handlers) this.$element.off(a, this._handlers[a]);
        for (b in this._controls) this._controls[b].remove();
        for (d in this.overides) this._core[d] = this._overrides[d];
        for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null)
    }, e.prototype.update = function () {
        var a, b, c, d = this._core.clones().length / 2,
            e = d + this._core.items().length,
            f = this._core.maximum(!0),
            g = this._core.settings,
            h = g.center || g.autoWidth || g.dotsData ? 1 : g.dotsEach || g.items;
        if ("page" !== g.slideBy && (g.slideBy = Math.min(g.slideBy, g.items)), g.dots || "page" == g.slideBy)
            for (this._pages = [], a = d, b = 0, c = 0; e > a; a++) {
                if (b >= h || 0 === b) {
                    if (this._pages.push({
                            start: Math.min(f, a - d),
                            end: a - d + h - 1
                        }), Math.min(f, a - d) === f) break;
                    b = 0, ++c
                }
                b += this._core.mergers(this._core.relative(a))
            }
    }, e.prototype.draw = function () {
        var b, c = this._core.settings,
            d = this._core.items().length <= c.items,
            e = this._core.relative(this._core.current()),
            f = c.loop || c.rewind;
        this._controls.$relative.toggleClass("disabled", !c.nav || d), c.nav && (this._controls.$previous.toggleClass("disabled", !f && e <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !f && e >= this._core.maximum(!0))), this._controls.$absolute.toggleClass("disabled", !c.dots || d), c.dots && (b = this._pages.length - this._controls.$absolute.children().length, c.dotsData && 0 !== b ? this._controls.$absolute.html(this._templates.join("")) : b > 0 ? this._controls.$absolute.append(new Array(b + 1).join(this._templates[0])) : 0 > b && this._controls.$absolute.children().slice(b).remove(), this._controls.$absolute.find(".active").removeClass("active"), this._controls.$absolute.children().eq(a.inArray(this.current(), this._pages)).addClass("active"))
    }, e.prototype.onTrigger = function (b) {
        var c = this._core.settings;
        b.page = {
            index: a.inArray(this.current(), this._pages),
            count: this._pages.length,
            size: c && (c.center || c.autoWidth || c.dotsData ? 1 : c.dotsEach || c.items)
        }
    }, e.prototype.current = function () {
        var b = this._core.relative(this._core.current());
        return a.grep(this._pages, a.proxy(function (a, c) {
            return a.start <= b && a.end >= b
        }, this)).pop()
    }, e.prototype.getPosition = function (b) {
        var c, d, e = this._core.settings;
        return "page" == e.slideBy ? (c = a.inArray(this.current(), this._pages), d = this._pages.length, b ? ++c : --c, c = this._pages[(c % d + d) % d].start) : (c = this._core.relative(this._core.current()), d = this._core.items().length, b ? c += e.slideBy : c -= e.slideBy), c
    }, e.prototype.next = function (b) {
        a.proxy(this._overrides.to, this._core)(this.getPosition(!0), b)
    }, e.prototype.prev = function (b) {
        a.proxy(this._overrides.to, this._core)(this.getPosition(!1), b)
    }, e.prototype.to = function (b, c, d) {
        var e;
        !d && this._pages.length ? (e = this._pages.length, a.proxy(this._overrides.to, this._core)(this._pages[(b % e + e) % e].start, c)) : a.proxy(this._overrides.to, this._core)(b, c)
    }, a.fn.owlCarousel.Constructor.Plugins.Navigation = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    "use strict";
    var e = function (c) {
        this._core = c, this._hashes = {}, this.$element = this._core.$element, this._handlers = {
            "initialized.owl.carousel": a.proxy(function (c) {
                c.namespace && "URLHash" === this._core.settings.startPosition && a(b).trigger("hashchange.owl.navigation")
            }, this),
            "prepared.owl.carousel": a.proxy(function (b) {
                if (b.namespace) {
                    var c = a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                    if (!c) return;
                    this._hashes[c] = b.content
                }
            }, this),
            "changed.owl.carousel": a.proxy(function (c) {
                if (c.namespace && "position" === c.property.name) {
                    var d = this._core.items(this._core.relative(this._core.current())),
                        e = a.map(this._hashes, function (a, b) {
                            return a === d ? b : null
                        }).join();
                    if (!e || b.location.hash.slice(1) === e) return;
                    b.location.hash = e
                }
            }, this)
        }, this._core.options = a.extend({}, e.Defaults, this._core.options), this.$element.on(this._handlers), a(b).on("hashchange.owl.navigation", a.proxy(function (a) {
            var c = b.location.hash.substring(1),
                e = this._core.$stage.children(),
                f = this._hashes[c] && e.index(this._hashes[c]);
            f !== d && f !== this._core.current() && this._core.to(this._core.relative(f), !1, !0)
        }, this))
    };
    e.Defaults = {
        URLhashListener: !1
    }, e.prototype.destroy = function () {
        var c, d;
        a(b).off("hashchange.owl.navigation");
        for (c in this._handlers) this._core.$element.off(c, this._handlers[c]);
        for (d in Object.getOwnPropertyNames(this)) "function" != typeof this[d] && (this[d] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.Hash = e
}(window.Zepto || window.jQuery, window, document),
function (a, b, c, d) {
    function e(b, c) {
        var e = !1,
            f = b.charAt(0).toUpperCase() + b.slice(1);
        return a.each((b + " " + h.join(f + " ") + f).split(" "), function (a, b) {
            return g[b] !== d ? (e = c ? b : !0, !1) : void 0
        }), e
    }

    function f(a) {
        return e(a, !0)
    }
    var g = a("<support>").get(0).style,
        h = "Webkit Moz O ms".split(" "),
        i = {
            transition: {
                end: {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd",
                    transition: "transitionend"
                }
            },
            animation: {
                end: {
                    WebkitAnimation: "webkitAnimationEnd",
                    MozAnimation: "animationend",
                    OAnimation: "oAnimationEnd",
                    animation: "animationend"
                }
            }
        },
        j = {
            csstransforms: function () {
                return !!e("transform")
            },
            csstransforms3d: function () {
                return !!e("perspective")
            },
            csstransitions: function () {
                return !!e("transition")
            },
            cssanimations: function () {
                return !!e("animation")
            }
        };
    j.csstransitions() && (a.support.transition = new String(f("transition")), a.support.transition.end = i.transition.end[a.support.transition]), j.cssanimations() && (a.support.animation = new String(f("animation")), a.support.animation.end = i.animation.end[a.support.animation]), j.csstransforms() && (a.support.transform = new String(f("transform")), a.support.transform3d = j.csstransforms3d())
}(window.Zepto || window.jQuery, window, document);

/*! nouislider - 9.0.0 - 2016-09-29 21:44:02 */

! function (a) {
    "function" == typeof define && define.amd ? define([], a) : "object" == typeof exports ? module.exports = a() : window.noUiSlider = a()
}(function () {
    "use strict";

    function a(a, b) {
        var c = document.createElement("div");
        return j(c, b), a.appendChild(c), c
    }

    function b(a) {
        return a.filter(function (a) {
            return !this[a] && (this[a] = !0)
        }, {})
    }

    function c(a, b) {
        return Math.round(a / b) * b
    }

    function d(a, b) {
        var c = a.getBoundingClientRect(),
            d = a.ownerDocument,
            e = d.documentElement,
            f = m();
        return /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) && (f.x = 0), b ? c.top + f.y - e.clientTop : c.left + f.x - e.clientLeft
    }

    function e(a) {
        return "number" == typeof a && !isNaN(a) && isFinite(a)
    }

    function f(a, b, c) {
        c > 0 && (j(a, b), setTimeout(function () {
            k(a, b)
        }, c))
    }

    function g(a) {
        return Math.max(Math.min(a, 100), 0)
    }

    function h(a) {
        return Array.isArray(a) ? a : [a]
    }

    function i(a) {
        a = String(a);
        var b = a.split(".");
        return b.length > 1 ? b[1].length : 0
    }

    function j(a, b) {
        a.classList ? a.classList.add(b) : a.className += " " + b
    }

    function k(a, b) {
        a.classList ? a.classList.remove(b) : a.className = a.className.replace(new RegExp("(^|\\b)" + b.split(" ").join("|") + "(\\b|$)", "gi"), " ")
    }

    function l(a, b) {
        return a.classList ? a.classList.contains(b) : new RegExp("\\b" + b + "\\b").test(a.className)
    }

    function m() {
        var a = void 0 !== window.pageXOffset,
            b = "CSS1Compat" === (document.compatMode || ""),
            c = a ? window.pageXOffset : b ? document.documentElement.scrollLeft : document.body.scrollLeft,
            d = a ? window.pageYOffset : b ? document.documentElement.scrollTop : document.body.scrollTop;
        return {
            x: c,
            y: d
        }
    }

    function n() {
        return window.navigator.pointerEnabled ? {
            start: "pointerdown",
            move: "pointermove",
            end: "pointerup"
        } : window.navigator.msPointerEnabled ? {
            start: "MSPointerDown",
            move: "MSPointerMove",
            end: "MSPointerUp"
        } : {
            start: "mousedown touchstart",
            move: "mousemove touchmove",
            end: "mouseup touchend"
        }
    }

    function o(a, b) {
        return 100 / (b - a)
    }

    function p(a, b) {
        return 100 * b / (a[1] - a[0])
    }

    function q(a, b) {
        return p(a, a[0] < 0 ? b + Math.abs(a[0]) : b - a[0])
    }

    function r(a, b) {
        return b * (a[1] - a[0]) / 100 + a[0]
    }

    function s(a, b) {
        for (var c = 1; a >= b[c];) c += 1;
        return c
    }

    function t(a, b, c) {
        if (c >= a.slice(-1)[0]) return 100;
        var d, e, f, g, h = s(c, a);
        return d = a[h - 1], e = a[h], f = b[h - 1], g = b[h], f + q([d, e], c) / o(f, g)
    }

    function u(a, b, c) {
        if (c >= 100) return a.slice(-1)[0];
        var d, e, f, g, h = s(c, b);
        return d = a[h - 1], e = a[h], f = b[h - 1], g = b[h], r([d, e], (c - f) * o(f, g))
    }

    function v(a, b, d, e) {
        if (100 === e) return e;
        var f, g, h = s(e, a);
        return d ? (f = a[h - 1], g = a[h], e - f > (g - f) / 2 ? g : f) : b[h - 1] ? a[h - 1] + c(e - a[h - 1], b[h - 1]) : e
    }

    function w(a, b, c) {
        var d;
        if ("number" == typeof b && (b = [b]), "[object Array]" !== Object.prototype.toString.call(b)) throw new Error("noUiSlider: 'range' contains invalid value.");
        if (d = "min" === a ? 0 : "max" === a ? 100 : parseFloat(a), !e(d) || !e(b[0])) throw new Error("noUiSlider: 'range' value isn't numeric.");
        c.xPct.push(d), c.xVal.push(b[0]), d ? c.xSteps.push(!isNaN(b[1]) && b[1]) : isNaN(b[1]) || (c.xSteps[0] = b[1]), c.xHighestCompleteStep.push(0)
    }

    function x(a, b, c) {
        if (!b) return !0;
        c.xSteps[a] = p([c.xVal[a], c.xVal[a + 1]], b) / o(c.xPct[a], c.xPct[a + 1]);
        var d = (c.xVal[a + 1] - c.xVal[a]) / c.xNumSteps[a],
            e = Math.ceil(Number(d.toFixed(3)) - 1),
            f = c.xVal[a] + c.xNumSteps[a] * e;
        c.xHighestCompleteStep[a] = f
    }

    function y(a, b, c, d) {
        this.xPct = [], this.xVal = [], this.xSteps = [d || !1], this.xNumSteps = [!1], this.xHighestCompleteStep = [], this.snap = b, this.direction = c;
        var e, f = [];
        for (e in a) a.hasOwnProperty(e) && f.push([a[e], e]);
        for (f.length && "object" == typeof f[0][0] ? f.sort(function (a, b) {
                return a[0][0] - b[0][0]
            }) : f.sort(function (a, b) {
                return a[0] - b[0]
            }), e = 0; e < f.length; e++) w(f[e][1], f[e][0], this);
        for (this.xNumSteps = this.xSteps.slice(0), e = 0; e < this.xNumSteps.length; e++) x(e, this.xNumSteps[e], this)
    }

    function z(a, b) {
        if (!e(b)) throw new Error("noUiSlider: 'step' is not numeric.");
        a.singleStep = b
    }

    function A(a, b) {
        if ("object" != typeof b || Array.isArray(b)) throw new Error("noUiSlider: 'range' is not an object.");
        if (void 0 === b.min || void 0 === b.max) throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
        if (b.min === b.max) throw new Error("noUiSlider: 'range' 'min' and 'max' cannot be equal.");
        a.spectrum = new y(b, a.snap, a.dir, a.singleStep)
    }

    function B(a, b) {
        if (b = h(b), !Array.isArray(b) || !b.length) throw new Error("noUiSlider: 'start' option is incorrect.");
        a.handles = b.length, a.start = b
    }

    function C(a, b) {
        if (a.snap = b, "boolean" != typeof b) throw new Error("noUiSlider: 'snap' option must be a boolean.")
    }

    function D(a, b) {
        if (a.animate = b, "boolean" != typeof b) throw new Error("noUiSlider: 'animate' option must be a boolean.")
    }

    function E(a, b) {
        if (a.animationDuration = b, "number" != typeof b) throw new Error("noUiSlider: 'animationDuration' option must be a number.")
    }

    function F(a, b) {
        var c, d = [!1];
        if (b === !0 || b === !1) {
            for (c = 1; c < a.handles; c++) d.push(b);
            d.push(!1)
        } else {
            if (!Array.isArray(b) || !b.length || b.length !== a.handles + 1) throw new Error("noUiSlider: 'connect' option doesn't match handle count.");
            d = b
        }
        a.connect = d
    }

    function G(a, b) {
        switch (b) {
            case "horizontal":
                a.ort = 0;
                break;
            case "vertical":
                a.ort = 1;
                break;
            default:
                throw new Error("noUiSlider: 'orientation' option is invalid.")
        }
    }

    function H(a, b) {
        if (!e(b)) throw new Error("noUiSlider: 'margin' option must be numeric.");
        if (0 !== b && (a.margin = a.spectrum.getMargin(b), !a.margin)) throw new Error("noUiSlider: 'margin' option is only supported on linear sliders.")
    }

    function I(a, b) {
        if (!e(b)) throw new Error("noUiSlider: 'limit' option must be numeric.");
        if (a.limit = a.spectrum.getMargin(b), !a.limit || a.handles < 2) throw new Error("noUiSlider: 'limit' option is only supported on linear sliders with 2 or more handles.")
    }

    function J(a, b) {
        switch (b) {
            case "ltr":
                a.dir = 0;
                break;
            case "rtl":
                a.dir = 1;
                break;
            default:
                throw new Error("noUiSlider: 'direction' option was not recognized.")
        }
    }

    function K(a, b) {
        if ("string" != typeof b) throw new Error("noUiSlider: 'behaviour' must be a string containing options.");
        var c = b.indexOf("tap") >= 0,
            d = b.indexOf("drag") >= 0,
            e = b.indexOf("fixed") >= 0,
            f = b.indexOf("snap") >= 0,
            g = b.indexOf("hover") >= 0;
        if (e) {
            if (2 !== a.handles) throw new Error("noUiSlider: 'fixed' behaviour must be used with 2 handles");
            H(a, a.start[1] - a.start[0])
        }
        a.events = {
            tap: c || f,
            drag: d,
            fixed: e,
            snap: f,
            hover: g
        }
    }

    function L(a, b) {
        if (b !== !1)
            if (b === !0) {
                a.tooltips = [];
                for (var c = 0; c < a.handles; c++) a.tooltips.push(!0)
            } else {
                if (a.tooltips = h(b), a.tooltips.length !== a.handles) throw new Error("noUiSlider: must pass a formatter for all handles.");
                a.tooltips.forEach(function (a) {
                    if ("boolean" != typeof a && ("object" != typeof a || "function" != typeof a.to)) throw new Error("noUiSlider: 'tooltips' must be passed a formatter or 'false'.")
                })
            }
    }

    function M(a, b) {
        if (a.format = b, "function" == typeof b.to && "function" == typeof b.from) return !0;
        throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.")
    }

    function N(a, b) {
        if (void 0 !== b && "string" != typeof b && b !== !1) throw new Error("noUiSlider: 'cssPrefix' must be a string or `false`.");
        a.cssPrefix = b
    }

    function O(a, b) {
        if (void 0 !== b && "object" != typeof b) throw new Error("noUiSlider: 'cssClasses' must be an object.");
        if ("string" == typeof a.cssPrefix) {
            a.cssClasses = {};
            for (var c in b) b.hasOwnProperty(c) && (a.cssClasses[c] = a.cssPrefix + b[c])
        } else a.cssClasses = b
    }

    function P(a, b) {
        if (b !== !0 && b !== !1) throw new Error("noUiSlider: 'useRequestAnimationFrame' option should be true (default) or false.");
        a.useRequestAnimationFrame = b
    }

    function Q(a) {
        var b, c = {
            margin: 0,
            limit: 0,
            animate: !0,
            animationDuration: 300,
            format: T
        };
        b = {
            step: {
                r: !1,
                t: z
            },
            start: {
                r: !0,
                t: B
            },
            connect: {
                r: !0,
                t: F
            },
            direction: {
                r: !0,
                t: J
            },
            snap: {
                r: !1,
                t: C
            },
            animate: {
                r: !1,
                t: D
            },
            animationDuration: {
                r: !1,
                t: E
            },
            range: {
                r: !0,
                t: A
            },
            orientation: {
                r: !1,
                t: G
            },
            margin: {
                r: !1,
                t: H
            },
            limit: {
                r: !1,
                t: I
            },
            behaviour: {
                r: !0,
                t: K
            },
            format: {
                r: !1,
                t: M
            },
            tooltips: {
                r: !1,
                t: L
            },
            cssPrefix: {
                r: !1,
                t: N
            },
            cssClasses: {
                r: !1,
                t: O
            },
            useRequestAnimationFrame: {
                r: !1,
                t: P
            }
        };
        var d = {
            connect: !1,
            direction: "ltr",
            behaviour: "tap",
            orientation: "horizontal",
            cssPrefix: "noUi-",
            cssClasses: {
                target: "target",
                base: "base",
                origin: "origin",
                handle: "handle",
                horizontal: "horizontal",
                vertical: "vertical",
                background: "background",
                connect: "connect",
                ltr: "ltr",
                rtl: "rtl",
                draggable: "draggable",
                drag: "state-drag",
                tap: "state-tap",
                active: "active",
                tooltip: "tooltip",
                pips: "pips",
                pipsHorizontal: "pips-horizontal",
                pipsVertical: "pips-vertical",
                marker: "marker",
                markerHorizontal: "marker-horizontal",
                markerVertical: "marker-vertical",
                markerNormal: "marker-normal",
                markerLarge: "marker-large",
                markerSub: "marker-sub",
                value: "value",
                valueHorizontal: "value-horizontal",
                valueVertical: "value-vertical",
                valueNormal: "value-normal",
                valueLarge: "value-large",
                valueSub: "value-sub"
            },
            useRequestAnimationFrame: !0
        };
        Object.keys(b).forEach(function (e) {
            if (void 0 === a[e] && void 0 === d[e]) {
                if (b[e].r) throw new Error("noUiSlider: '" + e + "' is required.");
                return !0
            }
            b[e].t(c, void 0 === a[e] ? d[e] : a[e])
        }), c.pips = a.pips;
        var e = [["left", "top"], ["right", "bottom"]];
        return c.style = e[c.dir][c.ort], c.styleOposite = e[c.dir ? 0 : 1][c.ort], c
    }

    function R(c, e, i) {
        function o(b, c) {
            var d = a(b, e.cssClasses.origin),
                f = a(d, e.cssClasses.handle);
            return f.setAttribute("data-handle", c), d
        }

        function p(b, c) {
            return !!c && a(b, e.cssClasses.connect)
        }

        function q(a, b) {
            ba = [], ca = [], ca.push(p(b, a[0]));
            for (var c = 0; c < e.handles; c++) ba.push(o(b, c)), ha[c] = c, ca.push(p(b, a[c + 1]))
        }

        function r(b) {
            j(b, e.cssClasses.target), 0 === e.dir ? j(b, e.cssClasses.ltr) : j(b, e.cssClasses.rtl), 0 === e.ort ? j(b, e.cssClasses.horizontal) : j(b, e.cssClasses.vertical), aa = a(b, e.cssClasses.base)
        }

        function s(b, c) {
            return !!e.tooltips[c] && a(b.firstChild, e.cssClasses.tooltip)
        }

        function t() {
            var a = ba.map(s);
            Z("update", function (b, c, d) {
                if (a[c]) {
                    var f = b[c];
                    e.tooltips[c] !== !0 && (f = e.tooltips[c].to(d[c])), a[c].innerHTML = f
                }
            })
        }

        function u(a, b, c) {
            if ("range" === a || "steps" === a) return ia.xVal;
            if ("count" === a) {
                var d, e = 100 / (b - 1),
                    f = 0;
                for (b = [];
                    (d = f++ * e) <= 100;) b.push(d);
                a = "positions"
            }
            return "positions" === a ? b.map(function (a) {
                return ia.fromStepping(c ? ia.getStep(a) : a)
            }) : "values" === a ? c ? b.map(function (a) {
                return ia.fromStepping(ia.getStep(ia.toStepping(a)))
            }) : b : void 0
        }

        function v(a, c, d) {
            function e(a, b) {
                return (a + b).toFixed(7) / 1
            }
            var f = {},
                g = ia.xVal[0],
                h = ia.xVal[ia.xVal.length - 1],
                i = !1,
                j = !1,
                k = 0;
            return d = b(d.slice().sort(function (a, b) {
                return a - b
            })), d[0] !== g && (d.unshift(g), i = !0), d[d.length - 1] !== h && (d.push(h), j = !0), d.forEach(function (b, g) {
                var h, l, m, n, o, p, q, r, s, t, u = b,
                    v = d[g + 1];
                if ("steps" === c && (h = ia.xNumSteps[g]), h || (h = v - u), u !== !1 && void 0 !== v)
                    for (h = Math.max(h, 1e-7), l = u; l <= v; l = e(l, h)) {
                        for (n = ia.toStepping(l), o = n - k, r = o / a, s = Math.round(r), t = o / s, m = 1; m <= s; m += 1) p = k + m * t, f[p.toFixed(5)] = ["x", 0];
                        q = d.indexOf(l) > -1 ? 1 : "steps" === c ? 2 : 0, !g && i && (q = 0), l === v && j || (f[n.toFixed(5)] = [l, q]), k = n
                    }
            }), f
        }

        function w(a, b, c) {
            function d(a, b) {
                var c = b === e.cssClasses.value,
                    d = c ? m : n,
                    f = c ? k : l;
                return b + " " + d[e.ort] + " " + f[a]
            }

            function f(a, b, c) {
                return 'class="' + d(c[1], b) + '" style="' + e.style + ": " + a + '%"'
            }

            function g(a, d) {
                d[1] = d[1] && b ? b(d[0], d[1]) : d[1], i += "<div " + f(a, e.cssClasses.marker, d) + "></div>", d[1] && (i += "<div " + f(a, e.cssClasses.value, d) + ">" + c.to(d[0]) + "</div>")
            }
            var h = document.createElement("div"),
                i = "",
                k = [e.cssClasses.valueNormal, e.cssClasses.valueLarge, e.cssClasses.valueSub],
                l = [e.cssClasses.markerNormal, e.cssClasses.markerLarge, e.cssClasses.markerSub],
                m = [e.cssClasses.valueHorizontal, e.cssClasses.valueVertical],
                n = [e.cssClasses.markerHorizontal, e.cssClasses.markerVertical];
            return j(h, e.cssClasses.pips), j(h, 0 === e.ort ? e.cssClasses.pipsHorizontal : e.cssClasses.pipsVertical), Object.keys(a).forEach(function (b) {
                g(b, a[b])
            }), h.innerHTML = i, h
        }

        function x(a) {
            var b = a.mode,
                c = a.density || 1,
                d = a.filter || !1,
                e = a.values || !1,
                f = a.stepped || !1,
                g = u(b, e, f),
                h = v(c, b, g),
                i = a.format || {
                    to: Math.round
                };
            return fa.appendChild(w(h, d, i))
        }

        function y() {
            var a = aa.getBoundingClientRect(),
                b = "offset" + ["Width", "Height"][e.ort];
            return 0 === e.ort ? a.width || aa[b] : a.height || aa[b]
        }

        function z(a, b, c, d) {
            var f = function (b) {
                    return !fa.hasAttribute("disabled") && (!l(fa, e.cssClasses.tap) && (b = A(b, d.pageOffset), !(a === ea.start && void 0 !== b.buttons && b.buttons > 1) && ((!d.hover || !b.buttons) && (b.calcPoint = b.points[e.ort], void c(b, d)))))
                },
                g = [];
            return a.split(" ").forEach(function (a) {
                b.addEventListener(a, f, !1), g.push([a, f])
            }), g
        }

        function A(a, b) {
            a.preventDefault();
            var c, d, e = 0 === a.type.indexOf("touch"),
                f = 0 === a.type.indexOf("mouse"),
                g = 0 === a.type.indexOf("pointer"),
                h = a;
            if (0 === a.type.indexOf("MSPointer") && (g = !0), e) {
                if (h.touches.length > 1) return !1;
                c = a.changedTouches[0].pageX, d = a.changedTouches[0].pageY
            }
            return b = b || m(), (f || g) && (c = a.clientX + b.x, d = a.clientY + b.y), h.pageOffset = b, h.points = [c, d], h.cursor = f || g, h
        }

        function B(a) {
            var b = a - d(aa, e.ort),
                c = 100 * b / y();
            return e.dir ? 100 - c : c
        }

        function C(a) {
            var b = 100,
                c = !1;
            return ba.forEach(function (d, e) {
                if (!d.hasAttribute("disabled")) {
                    var f = Math.abs(ga[e] - a);
                    f < b && (c = e, b = f)
                }
            }), c
        }

        function D(a, b, c, d) {
            var e = c.slice(),
                f = [!a, a],
                g = [a, !a];
            d = d.slice(), a && d.reverse(), d.length > 1 ? d.forEach(function (a, c) {
                var d = M(e, a, e[a] + b, f[c], g[c]);
                d === !1 ? b = 0 : (b = d - e[a], e[a] = d)
            }) : f = g = [!0];
            var h = !1;
            d.forEach(function (a, d) {
                h = R(a, c[a] + b, f[d], g[d]) || h
            }), h && d.forEach(function (a) {
                E("update", a), E("slide", a)
            })
        }

        function E(a, b, c) {
            Object.keys(ka).forEach(function (d) {
                var f = d.split(".")[0];
                a === f && ka[d].forEach(function (a) {
                    a.call(da, ja.map(e.format.to), b, ja.slice(), c || !1, ga.slice())
                })
            })
        }

        function F(a, b) {
            "mouseout" === a.type && "HTML" === a.target.nodeName && null === a.relatedTarget && H(a, b)
        }

        function G(a, b) {
            if (navigator.appVersion.indexOf("MSIE 9") === -1 && 0 === a.buttons && 0 !== b.buttonsProperty) return H(a, b);
            var c = (e.dir ? -1 : 1) * (a.calcPoint - b.startCalcPoint),
                d = 100 * c / b.baseSize;
            D(c > 0, d, b.locations, b.handleNumbers)
        }

        function H(a, b) {
            var c = aa.querySelector("." + e.cssClasses.active);
            null !== c && k(c, e.cssClasses.active), a.cursor && (document.body.style.cursor = "", document.body.removeEventListener("selectstart", document.body.noUiListener)), document.documentElement.noUiListeners.forEach(function (a) {
                document.documentElement.removeEventListener(a[0], a[1])
            }), k(fa, e.cssClasses.drag), P(), b.handleNumbers.forEach(function (a) {
                E("set", a), E("change", a), E("end", a)
            })
        }

        function I(a, b) {
            if (1 === b.handleNumbers.length) {
                var c = ba[b.handleNumbers[0]];
                if (c.hasAttribute("disabled")) return !1;
                j(c.children[0], e.cssClasses.active)
            }
            a.preventDefault(), a.stopPropagation();
            var d = z(ea.move, document.documentElement, G, {
                    startCalcPoint: a.calcPoint,
                    baseSize: y(),
                    pageOffset: a.pageOffset,
                    handleNumbers: b.handleNumbers,
                    buttonsProperty: a.buttons,
                    locations: ga.slice()
                }),
                f = z(ea.end, document.documentElement, H, {
                    handleNumbers: b.handleNumbers
                }),
                g = z("mouseout", document.documentElement, F, {
                    handleNumbers: b.handleNumbers
                });
            if (document.documentElement.noUiListeners = d.concat(f, g), a.cursor) {
                document.body.style.cursor = getComputedStyle(a.target).cursor, ba.length > 1 && j(fa, e.cssClasses.drag);
                var h = function () {
                    return !1
                };
                document.body.noUiListener = h, document.body.addEventListener("selectstart", h, !1)
            }
            b.handleNumbers.forEach(function (a) {
                E("start", a)
            })
        }

        function J(a) {
            a.stopPropagation();
            var b = B(a.calcPoint),
                c = C(b);
            return c !== !1 && (e.events.snap || f(fa, e.cssClasses.tap, e.animationDuration), R(c, b, !0, !0), P(), E("slide", c, !0), E("set", c, !0), E("change", c, !0), E("update", c, !0), void(e.events.snap && I(a, {
                handleNumbers: [c]
            })))
        }

        function K(a) {
            var b = B(a.calcPoint),
                c = ia.getStep(b),
                d = ia.fromStepping(c);
            Object.keys(ka).forEach(function (a) {
                "hover" === a.split(".")[0] && ka[a].forEach(function (a) {
                    a.call(da, d)
                })
            })
        }

        function L(a) {
            a.fixed || ba.forEach(function (a, b) {
                z(ea.start, a.children[0], I, {
                    handleNumbers: [b]
                })
            }), a.tap && z(ea.start, aa, J, {}), a.hover && z(ea.move, aa, K, {
                hover: !0
            }), a.drag && ca.forEach(function (b, c) {
                if (b !== !1 && 0 !== c && c !== ca.length - 1) {
                    var d = ba[c - 1],
                        f = ba[c],
                        g = [b];
                    j(b, e.cssClasses.draggable), a.fixed && (g.push(d.children[0]), g.push(f.children[0])), g.forEach(function (a) {
                        z(ea.start, a, I, {
                            handles: [d, f],
                            handleNumbers: [c - 1, c]
                        })
                    })
                }
            })
        }

        function M(a, b, c, d, f) {
            return ba.length > 1 && (d && b > 0 && (c = Math.max(c, a[b - 1] + e.margin)), f && b < ba.length - 1 && (c = Math.min(c, a[b + 1] - e.margin))), ba.length > 1 && e.limit && (d && b > 0 && (c = Math.min(c, a[b - 1] + e.limit)), f && b < ba.length - 1 && (c = Math.max(c, a[b + 1] - e.limit))), c = ia.getStep(c), c = g(c), c !== a[b] && c
        }

        function N(a) {
            return a + "%"
        }

        function O(a, b) {
            ga[a] = b, ja[a] = ia.fromStepping(b);
            var c = function () {
                ba[a].style[e.style] = N(b), S(a), S(a + 1)
            };
            window.requestAnimationFrame && e.useRequestAnimationFrame ? window.requestAnimationFrame(c) : c()
        }

        function P() {
            ha.forEach(function (a) {
                var b = ga[a] > 50 ? -1 : 1,
                    c = 3 + (ba.length + b * a);
                ba[a].childNodes[0].style.zIndex = c
            })
        }

        function R(a, b, c, d) {
            return b = M(ga, a, b, c, d), b !== !1 && (O(a, b), !0)
        }

        function S(a) {
            if (ca[a]) {
                var b = 0,
                    c = 100;
                0 !== a && (b = ga[a - 1]), a !== ca.length - 1 && (c = ga[a]), ca[a].style[e.style] = N(b), ca[a].style[e.styleOposite] = N(100 - c)
            }
        }

        function T(a, b) {
            null !== a && a !== !1 && ("number" == typeof a && (a = String(a)), a = e.format.from(a), a === !1 || isNaN(a) || R(b, ia.toStepping(a), !1, !1))
        }

        function U(a, b) {
            var c = h(a),
                d = void 0 === ga[0];
            b = void 0 === b || !!b, c.forEach(T), e.animate && !d && f(fa, e.cssClasses.tap, e.animationDuration), ha.forEach(function (a) {
                R(a, ga[a], !0, !1)
            }), P(), ha.forEach(function (a) {
                E("update", a), null !== c[a] && b && E("set", a)
            })
        }

        function V(a) {
            U(e.start, a)
        }

        function W() {
            var a = ja.map(e.format.to);
            return 1 === a.length ? a[0] : a
        }

        function X() {
            for (var a in e.cssClasses) e.cssClasses.hasOwnProperty(a) && k(fa, e.cssClasses[a]);
            for (; fa.firstChild;) fa.removeChild(fa.firstChild);
            delete fa.noUiSlider
        }

        function Y() {
            return ga.map(function (a, b) {
                var c = ia.getNearbySteps(a),
                    d = ja[b],
                    e = c.thisStep.step,
                    f = null;
                e !== !1 && d + e > c.stepAfter.startValue && (e = c.stepAfter.startValue - d), f = d > c.thisStep.startValue ? c.thisStep.step : c.stepBefore.step !== !1 && d - c.stepBefore.highestStep, 100 === a ? e = null : 0 === a && (f = null);
                var g = ia.countStepDecimals();
                return null !== e && e !== !1 && (e = Number(e.toFixed(g))), null !== f && f !== !1 && (f = Number(f.toFixed(g))), [f, e]
            })
        }

        function Z(a, b) {
            ka[a] = ka[a] || [], ka[a].push(b), "update" === a.split(".")[0] && ba.forEach(function (a, b) {
                E("update", b)
            })
        }

        function $(a) {
            var b = a && a.split(".")[0],
                c = b && a.substring(b.length);
            Object.keys(ka).forEach(function (a) {
                var d = a.split(".")[0],
                    e = a.substring(d.length);
                b && b !== d || c && c !== e || delete ka[a]
            })
        }

        function _(a, b) {
            var c = W(),
                d = ["margin", "limit", "range", "animate", "snap", "step", "format"];
            d.forEach(function (b) {
                void 0 !== a[b] && (i[b] = a[b])
            });
            var f = Q(i);
            d.forEach(function (b) {
                void 0 !== a[b] && (e[b] = f[b])
            }), f.spectrum.direction = ia.direction, ia = f.spectrum, e.margin = f.margin, e.limit = f.limit, ga = [], U(a.start || c, b)
        }
        var aa, ba, ca, da, ea = n(),
            fa = c,
            ga = [],
            ha = [],
            ia = e.spectrum,
            ja = [],
            ka = {};
        if (fa.noUiSlider) throw new Error("Slider was already initialized.");
        return r(fa), q(e.connect, aa), da = {
            destroy: X,
            steps: Y,
            on: Z,
            off: $,
            get: W,
            set: U,
            reset: V,
            __moveHandles: function (a, b, c) {
                D(a, b, ga, c)
            },
            options: i,
            updateOptions: _,
            target: fa,
            pips: x
        }, L(e.events), U(e.start), e.pips && x(e.pips), e.tooltips && t(), da
    }

    function S(a, b) {
        if (!a.nodeName) throw new Error("noUiSlider.create requires a single element.");
        var c = Q(b, a),
            d = R(a, c, b);
        return a.noUiSlider = d, d
    }
    y.prototype.getMargin = function (a) {
        var b = this.xNumSteps[0];
        if (b && a % b) throw new Error("noUiSlider: 'limit' and 'margin' must be divisible by step.");
        return 2 === this.xPct.length && p(this.xVal, a)
    }, y.prototype.toStepping = function (a) {
        return a = t(this.xVal, this.xPct, a)
    }, y.prototype.fromStepping = function (a) {
        return u(this.xVal, this.xPct, a)
    }, y.prototype.getStep = function (a) {
        return a = v(this.xPct, this.xSteps, this.snap, a)
    }, y.prototype.getNearbySteps = function (a) {
        var b = s(a, this.xPct);
        return {
            stepBefore: {
                startValue: this.xVal[b - 2],
                step: this.xNumSteps[b - 2],
                highestStep: this.xHighestCompleteStep[b - 2]
            },
            thisStep: {
                startValue: this.xVal[b - 1],
                step: this.xNumSteps[b - 1],
                highestStep: this.xHighestCompleteStep[b - 1]
            },
            stepAfter: {
                startValue: this.xVal[b - 0],
                step: this.xNumSteps[b - 0],
                highestStep: this.xHighestCompleteStep[b - 0]
            }
        }
    }, y.prototype.countStepDecimals = function () {
        var a = this.xNumSteps.map(i);
        return Math.max.apply(null, a)
    }, y.prototype.convert = function (a) {
        return this.getStep(this.toStepping(a))
    };
    var T = {
        to: function (a) {
            return void 0 !== a && a.toFixed(2)
        },
        from: Number
    };
    return {
        create: S
    }
});

// Sticky Plugin v1.0.0 for jQuery
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Created: 2/14/2011
// Date: 2/12/2012
// Website: http://labs.anthonygarand.com/sticky
// Description: Makes an element on the page stick on the screen as you scroll
//       It will only set the 'top' and 'position' of your element, you
//       might need to adjust the width in some cases.

(function($) {
  var defaults = {
      topSpacing: 0,
      bottomSpacing: 0,
      className: 'is-sticky',
      wrapperClassName: 'sticky-wrapper',
      center: false,
      getWidthFrom: '',
      responsiveWidth: false
    },
    $window = $(window),
    $document = $(document),
    sticked = [],
    windowHeight = $window.height(),
    scroller = function() {
      var scrollTop = $window.scrollTop(),
        documentHeight = $document.height(),
        dwh = documentHeight - windowHeight,
        extra = (scrollTop > dwh) ? dwh - scrollTop : 0;

      for (var i = 0; i < sticked.length; i++) {
        var s = sticked[i],
          elementTop = s.stickyWrapper.offset().top,
          etse = elementTop - s.topSpacing - extra;

        if (scrollTop <= etse) {
          if (s.currentTop !== null) {
            s.stickyElement
              .css('position', '')
              .css('top', '');
            s.stickyElement.trigger('sticky-end', [s]).parent().removeClass(s.className);
            s.currentTop = null;
          }
        }
        else {
          var newTop = documentHeight - s.stickyElement.outerHeight()
            - s.topSpacing - s.bottomSpacing - scrollTop - extra;
          if (newTop < 0) {
            newTop = newTop + s.topSpacing;
          } else {
            newTop = s.topSpacing;
          }
          if (s.currentTop != newTop) {
            s.stickyElement
              .css('position', 'fixed')
              .css('top', newTop);

            if (typeof s.getWidthFrom !== 'undefined') {
              s.stickyElement.css('width', $(s.getWidthFrom).width());
            }

            s.stickyElement.trigger('sticky-start', [s]).parent().addClass(s.className);
            s.currentTop = newTop;
          }
        }
      }
    },
    resizer = function() {
      windowHeight = $window.height();

      for (var i = 0; i < sticked.length; i++) {
        var s = sticked[i];
        if (typeof s.getWidthFrom !== 'undefined' && s.responsiveWidth === true) {
          s.stickyElement.css('width', $(s.getWidthFrom).width());
        }
      }
    },
    methods = {
      init: function(options) {
        var o = $.extend({}, defaults, options);
        return this.each(function() {
          var stickyElement = $(this);

          var stickyId = stickyElement.attr('id');
          var wrapperId = stickyId ? stickyId + '-' + defaults.wrapperClassName : defaults.wrapperClassName 
          var wrapper = $('<div></div>')
            .attr('id', stickyId + '-sticky-wrapper')
            .addClass(o.wrapperClassName);
          stickyElement.wrapAll(wrapper);

          if (o.center) {
            stickyElement.parent().css({width:stickyElement.outerWidth(),marginLeft:"auto",marginRight:"auto"});
          }

          if (stickyElement.css("float") == "right") {
            stickyElement.css({"float":"none"}).parent().css({"float":"right"});
          }

          var stickyWrapper = stickyElement.parent();
          stickyWrapper.css('height', stickyElement.outerHeight());
          sticked.push({
            topSpacing: o.topSpacing,
            bottomSpacing: o.bottomSpacing,
            stickyElement: stickyElement,
            currentTop: null,
            stickyWrapper: stickyWrapper,
            className: o.className,
            getWidthFrom: o.getWidthFrom,
            responsiveWidth: o.responsiveWidth
          });
        });
      },
      update: scroller,
      unstick: function(options) {
        return this.each(function() {
          var unstickyElement = $(this);

          var removeIdx = -1;
          for (var i = 0; i < sticked.length; i++)
          {
            if (sticked[i].stickyElement.get(0) == unstickyElement.get(0))
            {
                removeIdx = i;
            }
          }
          if(removeIdx != -1)
          {
            sticked.splice(removeIdx,1);
            unstickyElement.unwrap();
            unstickyElement.removeAttr('style');
          }
        });
      }
    };

  // should be more efficient than using $window.scroll(scroller) and $window.resize(resizer):
  if (window.addEventListener) {
    window.addEventListener('scroll', scroller, false);
    window.addEventListener('resize', resizer, false);
  } else if (window.attachEvent) {
    window.attachEvent('onscroll', scroller);
    window.attachEvent('onresize', resizer);
  }

  $.fn.sticky = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method ) {
      return methods.init.apply( this, arguments );
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }
  };

  $.fn.unstick = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method ) {
      return methods.unstick.apply( this, arguments );
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }

  };
  $(function() {
    setTimeout(scroller, 0);
  });
})(jQuery);