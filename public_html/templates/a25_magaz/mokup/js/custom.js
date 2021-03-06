pos_refresh_summary()
function pos_go_to_step(a) {
    if ("1" != a && lastJQ(".step-tab").length > 0) {
        var b = "/udata/content/blank_transform/?transform=pos_load_steps.xsl&active-step=" + a;
        lastJQ.ajax({
            url: b,
            dataType: "html",
            success: function(b) {
                lastJQ(".pos-steps-crumbs").empty().append(b), pos_refresh_summary(), lastJQ(".step-tab").removeClass("active"), lastJQ("#pos-step-" + a).addClass("active")
            },
            error: function(a) {
                console.log(a)
            }
        })
    }
}

//lastJQ(".content-form input").change(pos_refresh_summary);

lastJQ( "body" ).on( "change", ".content-form input", pos_refresh_summary);
load_del_methods()
function pos_refresh_summary() {

    if (lastJQ(this).attr('id') == 'meth-id-349') {
        lastJQ('.delivery_block_hid').css('display', 'table-cell');
        lastJQ('#adr-new').attr('required','required');
    } else if (lastJQ(this).attr('id') != 'meth-id-349' && lastJQ(this).attr('name') == 'delivery-id') {
        lastJQ('.delivery_block_hid').css('display', 'none');
        lastJQ('#adr-new').removeAttr('required');
    }


    var a = "",
        b = "",
        c = "0",
        d = lastJQ("input[name=delivery-id]:checked");
    d.hasClass("del-self") ? (a = d.attr("data-title"), b = "Самовывоз", c = d.attr("data-price")) : (b = lastJQ(".delivery-method-cont input:checked").attr("data-title"), c = lastJQ(".delivery-method-cont input:checked").attr("data-price"), d.hasClass("del-adr-new") ? (a = lastJQ("#new-adr-country").find(":selected").text(), lastJQ(".new-adr-cont input").each(function() {
        a += ", " + lastJQ(this).val()
    })) : a = d.parent().find("label").html()), lastJQ(".value-delivery_adr li").html(a), lastJQ(".value-delivery_method").html(b), lastJQ(".value-delivery_price").html((c)?c:0 + " руб.");
    if (!parseInt(c)) {
        c = 0
    };
    var e = parseInt(lastJQ(".value-price_total").attr("data-actual")) + parseInt(c);
    lastJQ(".value-price_total").html(e + " руб."), lastJQ(".value-payment_id").html(lastJQ("input[name=payment-id]:checked").parent().find("label").html())
}

function load_del_methods() {
//    if (lastJQ(".del-adr").is(":checked")) {
        lastJQ.ajax({
            url: "/udata/emarket/purchasing_one_step/?transform=load_payments.xsl",
            dataType: "html",
            success: function(a) {
                lastJQ(".delivery-method-cont").empty().append(a)
            },
            error: function(a) {
                console.log(a)
            }
        })
//    } else {console.log('qwe');lastJQ(".delivery-method-cont").empty()}
}

function catalog_load_more1() {
    var a = lastJQ(".catalog-load-more");
    if ('false' != a.attr("data-page")) {
        var b = lastJQ(".catalog-loader"),
            c = lastJQ(".catalog-sort.selected"),
            d = "/udata/catalog/getSmartCatalog/0/" + b.attr("data-id") + "/" + lastJQ("#products-per-page").find(":selected").val() + "/0/10/" + c.attr("data-name") + "/" + c.attr("data-asc") + "/.json?p=" + a.attr("data-page") + "&extProps=h1,photo,description_short,description";
        lastJQ(".custom-sm-f-pr").each(function() {
            d += "&" + lastJQ(this).attr("name") + "=" + lastJQ(this).val()
        }), lastJQ(".custom-sm-f:checked").each(function() {
            d += "&" + lastJQ(this).attr("name") + "=" + lastJQ(this).val()
        }), b.show(), a.hide(), lastJQ.ajax({
            url: d,
            dataType: "json",
            success: function(c) {
                b.hide(), c.total > 0 ? (catalog_append(d), c.total > parseInt(c.per_page) ? (a.show(), a.attr("data-page", "1")) : a.attr("data-page", "false")) : a.attr("data-page", "false")
            },
            error: function(a) {
                b.hide(), console.log(a)
            }
        })
    }
}

function reload_catalog() {
    my_ajax_catalog && my_ajax_catalog.abort(), lastJQ(".catalog-items").empty();
    var b = lastJQ(".catalog-loader"),
        c = lastJQ(".catalog-load-more"),
        d = lastJQ(".catalog-sort.selected"),
        e = "/udata/catalog/getSmartCatalog/0/" + b.attr("data-id") + "/" + lastJQ("#products-per-page").find(":selected").val() + "/1/10/" + d.attr("data-name") + "/" + d.attr("data-asc") + "/.json?extProps=h1,photo,description_short,description";
    lastJQ(".custom-sm-f-pr").each(function() {
        e += "&" + lastJQ(this).attr("name") + "=" + lastJQ(this).val()
    }), lastJQ(".custom-sm-f:checked").each(function() {
        e += "&" + lastJQ(this).attr("name") + "=" + lastJQ(this).val()
    }), b.show(), c.hide(), my_ajax_catalog = lastJQ.ajax({
        url: e,
        dataType: "json",
        success: function(a) {
            b.hide(), a.total > 0 ? (catalog_append(e), a.total > parseInt(a.per_page) ? (c.attr("data-page", "1")) : c.attr("data-page", "false")) : c.attr("data-page", "false")
        },
        error: function(a) {
            b.hide(), console.log(a)
        }
    })
}

function catalog_append1(a) {
    var b = new Array,
        c = lastJQ(".catalog-items");
    "#grid" === lastJQ(".catalog-style.selected").attr("href") ? lastJQ.each(a.lines.item, function(a, c) {
        b.push('<div class="grid-33 tablet-grid-50"><div class="product-box light-bg item-for-reload" id="catalog-rel-' + c.id + '"><div class="sticker-cont"></div><a class="product-img" href="' + c.link + '"><span>'), void 0 !== c.extended.properties.property[1].value ? b.push('<img src="' + c.extended.properties.property[1].value.value + '" alt="" class="img-cont" />') : b.push('<img src="/templates/a25_magaz/mokup/images/photos/img-product1.jpg" alt="" />'), b.push('</span></a><div class="product-info light-bg middle-border"><h3 class="product-title subheader-font"><a href="' + c.link + '" class="dark-color active-hover"><strong>' + c.extended.properties.property[0].value.value + "</strong></a></h3>"), b.push('<a href="#" class="product-category middle-color dark-hover parent-cont"></a>'), b.push('<div class="product-bottom"><div class="product-price active-color price-cont"></div><div class="clear"></div><div class="button-dual light-color transition-all"><a href="/emarket/basket/put/element/' + c.id + '" class="button-dual-left middle-gradient dark-gradient-hover mp-cart-action">Добавить <i class="icon-shopping-cart"></i></a><a class="button-dual-right middle-gradient dark-gradient-hover"><i class="icon-angle-down"></i></a></div></div></div></div></div>')
    }) : lastJQ.each(a.lines.item, function(a, c) {
        b.push('<div class="grid-100"><div class="product-wide light-bg clearfix item-for-reload" id="catalog-rel-' + c.id + '"><div class="sticker-cont"></div><div class="grid-15 tablet-grid-20 mobile-grid-35 tablet-grid-20 product-img-holder"><a class="product-img" href="' + c.link + '">'), void 0 !== c.extended.properties.property[1].value ? b.push('<img src="' + c.extended.properties.property[1].value.value + '" alt="" class="img-cont" />') : b.push('<img src="/templates/a25_magaz/mokup/images/photos/img-product1.jpg" alt="" />'), b.push('</a></div><div class="grid-50 tablet-grid-45 mobile-grid-65 product-description"><h3 class="product-title subheader-font"><a href="' + c.link + '" class="dark-color active-hover"><strong>' + c.extended.properties.property[0].value.value + "</a></h3>"), b.push('<a href="#" class="product-category middle-color dark-hover parent-cont"></a>'), void 0 !== c.extended.properties.property[3].value && b.push('<div class="dark-color hide-on-mobile">' + c.extended.properties.property[3].value.value + "</div>"), b.push('</div><div class="grid-35 tablet-grid-35 hide-on-mobile product-actions"><div class="product-price active-color price-cont"></div><div class="clear"></div><div class="button-dual light-color transition-all"><a href="/emarket/basket/put/element/' + c.id + '" class="button-dual-left middle-gradient dark-gradient-hover">Добавить <i class="icon-shopping-cart"></i></a><a class="button-dual-right middle-gradient dark-gradient-hover"><i class="icon-angle-down"></i></a></div></div></div></div>')
    }), c.append(b.join("")), reload_catalog_inf()
}

function reload_catalog_inf() {
    lastJQ(".item-for-reload").each(function() {
        var a = lastJQ(this).attr("id"),
            b = lastJQ("#" + a),
            c = a.replace("catalog-rel-", ""),
            d = "/udata/catalog/reload_catalog_inf/" + c + "/.json";
        lastJQ.ajax({
            url: d,
            dataType: "json",
            success: function(a) {
                "true" == a.result && (b.find(".sticker-cont").append(a.sticker), b.find(".price-cont").append(a.price), "false" != a.img && b.find(".img-cont").attr("src", a.img.src), b.find(".parent-cont").html(a.parent.name), b.find(".parent-cont").attr("href", a.parent.link), b.removeClass("item-for-reload"))
            },
            error: function(a) {
                console.log(a)
            }
        })
    })
}

function load_more_search(a) {
    my_ajax_search && my_ajax_search.abort();
    var b = lastJQ("#cust-srch-content"),
        c = lastJQ("#cust-cat-srch input").val();
    if (c) {
        var d = "/udata" + lastJQ("#cust-cat-srch").attr("action") + "(" + c + ")/.json" + a;
        my_ajax_search = lastJQ.ajax({
            url: d,
            dataType: "json",
            success: function(a) {
                if (lastJQ(".search-loader-big img").hide(), a.total > 0) {
                    var c = new Array;
                    lastJQ.each(a.pages.page, function(a, b) {
                        var d = "";
                        d = b.photo.orginal ? b.photo.thumb.src : "/templates/a25_magaz/mokup/images/photos/quick-cart-item.jpg", c.push('<li class="quick-cart-item light-bg-hover transition-all"><a href="' + b.link + '" class="quick-cart-left dark-color"><span class="quick-cart-image"><img src="' + d + '" alt="Pablo Coelho Men’s Suit Jacket" /></span><span class="quick-cart-name">' + b.h1 + '</span></a></li><li class="list-divider"></li>')
                    }), b.append(c.join("")), void 0 !== a.numpages.tonext_link ? lastJQ(".search-loader-big").attr("data-page", a.numpages.tonext_link.value) : lastJQ(".search-loader-big").attr("data-page", "false")
                } else lastJQ(".search-loader-big").attr("data-page", "false")
            },
            error: function(a) {
                lastJQ(".search-loader-big img").hide(), console.log(a)
            }
        })
    }
}

function cust_cat_search() {
    var a = lastJQ("#cust-srch-content");
    a.empty(), my_ajax_search && my_ajax_search.abort(), lastJQ(".search-loader-big").attr("data-page", "false");
    var b = lastJQ("#cust-cat-srch input").val();
    if (b) {
        lastJQ(".srch-toggle").toggle();
        var c = "/udata" + lastJQ("#cust-cat-srch").attr("action") + "(" + b + ")/.json";
        my_ajax_search = lastJQ.ajax({
            url: c,
            dataType: "json",
            success: function(b) {
                if (lastJQ(".srch-toggle").toggle(), b.total > 0) {
                    lastJQ(".custom-srch-result>ul").show();
                    var c = new Array;
                    lastJQ.each(b.pages.page, function(a, b) {
                        var d = "";
                        d = b.photo.orginal ? b.photo.thumb.src : "/templates/a25_magaz/mokup/images/photos/quick-cart-item.jpg", c.push('<li class="quick-cart-item light-bg-hover transition-all"><a href="' + b.link + '" class="quick-cart-left dark-color"><span class="quick-cart-image"><img src="' + d + '" alt="Pablo Coelho Men’s Suit Jacket" /></span><span class="quick-cart-name">' + b.h1 + '</span></a></li><li class="list-divider"></li>')
                    }), a.append(c.join("")), void 0 !== b.numpages.tonext_link && lastJQ(".search-loader-big").attr("data-page", b.numpages.tonext_link.value)
                } else lastJQ(".search-loader-big").attr("data-page", "false"), lastJQ(".custom-srch-result>ul").hide()
            },
            error: function(a) {
                lastJQ(".srch-toggle").toggle(), console.log(a)
            }
        })
    }
}

function basket_reload_img() {
    lastJQ(".mp-cart-img-to-reload").each(function() {
        var a = lastJQ(this).attr("id"),
            b = a.replace("reload-img-", ""),
            c = "/upage/" + b + ".photo.json";
        lastJQ.ajax({
            url: c,
            dataType: "json",
            success: function(b) {
                if (void 0 !== b.property.value) {
                    var c = "/udata/system/makeThumbnailFull/(" + b.property.value.path + ")/40/40/.json";
                    lastJQ.ajax({
                        url: c,
                        dataType: "json",
                        success: function(b) {
                            lastJQ("#" + a).attr("src", b.src)
                        },
                        error: function(a) {
                            console.log(a)
                        }
                    })
                }
            },
            error: function(a) {
                console.log(a)
            }
        })
    })
}

function basket_refresh(a) {
    if (lastJQ(".mp-cart-container").empty(), a.summary.amount > 0) {
        lastJQ(".header-cart-preview").html('<strong class="active-color"><i class="icon-shopping-cart">&nbsp;</i>' + a.summary.amount + '</strong> Товар(ов)&nbsp;|&nbsp;<strong class="active-color">' + a.summary.price.actual + " " + a.summary.price.suffix + "</strong>"), lastJQ(".header-cart-preview-mobile").html('<i class="icon-shopping-cart">&nbsp;</i>' + a.summary.amount + "&nbsp;|&nbsp;" + a.summary.price.actual + " " + a.summary.price.suffix);
        var b = new Array;
        b.push('<li class="arrow-top"><span class="shadow cream-bg"></span></li><li class="focusor-top"></li>'), lastJQ.each(a.items.item, function(a, c) {
            b.push('<li class="quick-cart-item light-bg-hover transition-all">'), 1 == c.amount ? b.push('<a href="/emarket/basket/remove/item/' + c.id + '" class="quick-cart-remove circle-button middle-bg active-bg-hover mp-cart-action"><span class="minus"></span></a>') : b.push('<a href="/emarket/basket/put/element/' + c.page.id + "/?amount=" + (c.amount - 1) + '" class="quick-cart-remove circle-button middle-bg active-bg-hover mp-cart-add"><span class="minus"></span></a>'), b.push('<a href="/emarket/basket/put/element/' + c.page.id + "/?amount=" + (c.amount + 1) + '" class="quick-cart-add circle-button middle-bg active-bg-hover mp-cart-add"><span class="plus"></span></a><a href="' + c.page.link + '" class="quick-cart-left dark-color"><span class="quick-cart-image"><img src="/templates/a25_magaz/mokup/images/photos/quick-cart-item.jpg" alt="" class="mp-cart-img-to-reload" id="reload-img-' + c.page.id + '" /></span><span class="quick-cart-name">' + c.name + '</span></a><a href="' + c.page.link + '" class="quick-cart-right dark-color"><span class="hc-item-amount">' + c.amount + '</span> x <strong class="active-color"><span class="hc-item-price">' + c.price.actual + "</span>" + c.price.suffix + '</strong></a></li><li class="list-divider"></li>')
        }), b.push('<li class="quick-cart-total"><span class="quick-cart-left dark-color">Итого</span><span class="quick-cart-right active-color">' + a.summary.price.actual + " " + a.summary.price.suffix + '</span></li><li class="list-divider"></li><li class="quick-cart-buttons"><a href="/emarket/cart/" class="button-small light-color middle-gradient dark-gradient-hover">В корзину</a><a href="/emarket/purchasing_one_step/" class="button-small light-color active-gradient dark-gradient-hover">Купить</a></li>'), lastJQ(".mp-cart-container").append(b.join("")), lastJQ(".mp-cart-container").hasClass("custom-hid") && (lastJQ(".mp-cart-container").removeClass("custom-hid"), lastJQ(".mp-cart-container").css("display", "none")), basket_reload_img()
    } else lastJQ(".mp-cart-container").addClass("custom-hid"), lastJQ(".header-cart-preview").html('<strong class="active-color"><i class="icon-shopping-cart">&nbsp;</i></strong>Корзина пуста'), lastJQ(".header-cart-preview-mobile").html('<i class="icon-shopping-cart">&nbsp;</i>Корзина пуста')
}
lastJQ(document).ready(function() {
    lastJQ('.main-menu-item').click(function(){
        window.location.replace(lastJQ(this).attr('href'));
    });
    lastJQ(".continue-but").click(function(a) {
        a.preventDefault(), lastJQ(".continue-for").trigger("submit")
    }), lastJQ("#fancybox-loading").hide(), lastJQ(".usr-tabs").click(function(a) {
        a.preventDefault(), lastJQ(this).hasClass("selected") || (lastJQ(".usr-tabs").removeClass("selected"), lastJQ(this).addClass("selected"), lastJQ(".usr-tab-content").removeClass("active"), lastJQ(lastJQ(this).attr("href")).addClass("active"))
    }), lastJQ("input[name=delivery-address]").click(function() {
        if (lastJQ("#adr-new").is(":checked")) {
            var a = "/udata/content/blank_transform/?transform=new_adr_cont.xsl&typ_id=" + lastJQ(this).attr("data-id");
            lastJQ.ajax({
                url: a,
                dataType: "html",
                success: function(a) {
                    lastJQ(".new-adr-cont").empty();
                    lastJQ(".new-adr-cont").append(a), Global.initializeSelectboxes(".custom-selectbox")
                },
                error: function(a) {
                    console.log(a)
                }
            })
        } else lastJQ(".new-adr-cont").empty();
//        load_del_methods()
    }), lastJQ(".mp-tab-loadmore").click(function(a) {
        a.preventDefault();
        var b = lastJQ(this),
            c = lastJQ(lastJQ(this).attr("href"));
        b.hide();
        var d = b.attr("data-offset"),
            e = b.parent(),
            f = "/udata/content/get_merch_tab_list" + b.attr("data-params") + d + "/.json";
        lastJQ.ajax({
            url: f,
            dataType: "json",
            success: function(a) {
                if (a.total > 0) {
                    var f = new Array;
                    lastJQ.each(a.pages.page, function(a, b) {
                        f.push('<div class="grid-25 tablet-grid-50" umi:element-id="' + b.id + '"><div class="product-box light-bg">'), "false" != b.sticker.color && f.push('<div class="ribbon-small ribbon-' + b.sticker.color + '"><div class="ribbon-inner"><span class="ribbon-text">' + b.sticker.name + '</span><span class="ribbon-aligner"></span></div></div>'), f.push('<a class="product-img" href="' + b.link + '" umi:field-name="photo" umi:empty="Фотография"><span><img src="'), b.photo.thumb ? f.push(b.photo.thumb.src) : f.push("/templates/a25_magaz/mokup/images/photos/img-product1.jpg"), f.push('" alt="" /></span></a><div class="product-info light-bg middle-border"><h3 class="product-title subheader-font" umi:field-name="h1" umi:empty="Заголовок"><a href="' + b.link + '" class="dark-color active-hover"><strong>' + b.h1 + "</strong></a></h3>"), f.push('<a href="' + b.parent.link + '" class="product-category middle-color dark-hover">' + b.parent.name + "</a>"), f.push('<div class="product-bottom"><div class="product-price active-color">'), "true" == b.discount && f.push('<del class="light-gradient middle-border dark-color">' + b.price.original + " руб</del>"), f.push("<strong umi:field-name='price' umi:empty='Цена'>" + b.price.actual + ' руб</strong></div><div class="clear"></div><div class="button-dual light-color transition-all"><a href="/emarket/basket/put/element/' + b.id + '" class="button-dual-left middle-gradient dark-gradient-hover mp-cart-action">Добавить <i class="icon-shopping-cart"></i></a><a class="button-dual-right middle-gradient dark-gradient-hover"><i class="icon-angle-down"></i></a></div></div></div></div></div>')
                    }), e.before(f.join(""));
                    var g = parseInt(d) + 4;
                    b.attr("data-offset", g), g < a.total ? (c.html(g), b.show()) : c.html(a.total)
                }
            },
            error: function(a) {
                console.log(a)
            }
        })
    }), lastJQ(document).on("click", ".mp-cart-add", function(a) {
        a.preventDefault();
        var b = "/udata" + lastJQ(this).attr("href");
        b = b.replace("?amount", ".json?amount");
        var c = lastJQ(this);
        c.attr("disabled", "disabled"), lastJQ.ajax({
            url: b,
            dataType: "json",
            success: function(a) {
                if (c.removeAttr("disabled"), basket_refresh(a), lastJQ(".cartp-content").length > 0) {
                    lastJQ.ajax({
                        url: "/udata/emarket/cart/?transform=ajax_reload_cartp.xsl",
                        dataType: "html",
                        success: function(a) {
                            lastJQ(".cartp-content").empty().append(a)
                        },
                        error: function(a) {
                            console.log(a)
                        }
                    })
                }
            },
            error: function(a) {
                console.log(a)
            }
        })
    }), lastJQ(document).on("click", ".mpcart-removed", function() {
        lastJQ(this).html('<img src="/templates/a25_magaz/mokup/images/ajax-loader-line.gif" />')
    }), lastJQ(document).on("click", ".mpcart-removed-1", function() {
        lastJQ(this).html('<img src="/templates/a25_magaz/mokup/images/ajax-loader-line.gif" />')
    }), lastJQ(document).on("click", ".mp-cart-action", function(a) {
        a.preventDefault();
        var b = !1,
            c = lastJQ(this);
        lastJQ(this).find(".icon-shopping-cart").length > 0 && (b = !0, lastJQ(this).html('<img src="/templates/a25_magaz/mokup/images/ajax-loader-line.gif" />'));
        var d = "/udata" + lastJQ(this).attr("href") + "/.json";
        lastJQ(this).attr("disabled", "disabled"), lastJQ.ajax({
            url: d,
            dataType: "json",
            success: function(a) {
                if (c.removeAttr("disabled"), b && c.removeClass("mp-cart-action").html("Оформить").attr("href", "/emarket/cart/").addClass("mpcart-removed"), basket_refresh(a), lastJQ(".cartp-content").length > 0) {
                    lastJQ.ajax({
                        url: "/udata/emarket/cart/?transform=ajax_reload_cartp.xsl",
                        dataType: "html",
                        success: function(a) {
                            lastJQ(".cartp-content").empty().append(a)
                        },
                        error: function(a) {
                            console.log(a)
                        }
                    })
                }
            },
            error: function(a) {
                console.log(a)
            }
        })
    }), lastJQ("#cust-cat-srch").submit(function(a) {
        a.preventDefault(), cust_cat_search()
    }), lastJQ("#cust-cat-srch input").keyup(function() {
        cust_cat_search()
    }), lastJQ(".custom-srch-result .header-quick-cart ul").scroll(function() {
        var a = lastJQ(this).scrollTop(),
            b = lastJQ(".search-loader-big").attr("data-page");
        if ("false" !== b) {
            var c = b.replace("?p=", ""),
                d = 240 * parseInt(c);
            parseInt(a) > d && (lastJQ(".search-loader-big img").show(), load_more_search(b))
        }
    }), lastJQ(".srch-close").click(function(a) {
        a.preventDefault(), lastJQ(".custom-srch-result>ul").hide()
    }), lastJQ("#cust-cat-srch input").click(function() {
        lastJQ("#cust-srch-content li").length > 0 && lastJQ(".custom-srch-result>ul").show()
    }), lastJQ(".filter-show a").click(function(a) {
        a.preventDefault(), lastJQ("#cat-smart-f").stop(), lastJQ("#cat-smart-f").slideToggle()
    }), lastJQ(".custom-sm-f").click(function() {
        reload_catalog()
    }), lastJQ(".catalog-style").click(function(a) {
        a.preventDefault(), lastJQ(this).hasClass("selected") || (lastJQ(".catalog-style").toggleClass("selected"), reload_catalog())
    }), lastJQ(".catalog-sort").click(function(a) {
        a.preventDefault(), lastJQ(this).hasClass("selected") || (lastJQ(".catalog-sort").removeClass("selected"), lastJQ(this).addClass("selected"), lastJQ(this).parent().parent().find(".catalog-sort-head").hasClass("selected") || (lastJQ(".catalog-sort-head").removeClass("selected"), lastJQ(this).parent().parent().find(".catalog-sort-head").addClass("selected")), reload_catalog())
    }), lastJQ(".catalog-sort-head").click(function(a) {
        a.preventDefault(), lastJQ(this).hasClass("selected") ? lastJQ(this).parent().find("span.sort-arrows").find(".catalog-sort").toggleClass("selected") : (lastJQ(".catalog-sort-head").removeClass("selected"), lastJQ(".catalog-sort").removeClass("selected"), lastJQ(this).addClass("selected"), lastJQ(this).parent().find("span.sort-arrows").find(".catalog-sort").first().addClass("selected")), reload_catalog()
    }), lastJQ("#products-per-page").change(function() {
        reload_catalog()
    }), lastJQ(document).on("mouseup", ".range-slider-handle", function() {
        reload_catalog()
    }), lastJQ(".catalog-load-more").click(function(a) {
        a.preventDefault(), catalog_load_more()
    }), lastJQ("#product-quantity").change(function() {
        var a = lastJQ(this).val(),
            b = lastJQ(this).attr("data-val");
        /^[1-9]\d*$/.test(a) ? lastJQ(this).attr("data-val", a) : lastJQ(this).val(b)
    }), lastJQ("#catalog-obj-form").submit(function(a) {
        var e_name, options = {};
        var form = lastJQ("#catalog-obj-form");
        if (form) {
            var elements = jQuery(':radio:checked', form);
            for (var i = 0; i < elements.length; i++) {
                e_name = elements[i].name.replace(/^options\[/, '').replace(/\]$/, '');
                options[e_name] = elements[i].value;
            }
        }
        var o = {};
        for (var i in options) {
            var k;
            if (i.toLowerCase() != "amount")
                k = "options[" + i + "]";
            else
                k = i;
            o[k] = options[i];
        }

        a.preventDefault(), lastJQ(".sbmt-but").attr("disabled", "disabled").html('<img src="/templates/a25_magaz/mokup/images/ajax-loader-line.gif" />');
        var b = "/udata" + lastJQ(this).attr("action") + "/.json?amount=" + lastJQ("#product-quantity").val();
        lastJQ.ajax({
            url: b,
            dataType: "json",
            data:o,
            success: function(a) {
                lastJQ(".sbmt-but").removeAttr("disabled").html("Оформить").attr("type", "button").attr("onclick", 'window.location.href="/emarket/cart/"').addClass("mpcart-removed-1"), basket_refresh(a)
            },
            error: function(a) {
                console.log(a)
            }
        })
    }), lastJQ(document).on("click", ".ajax-news-load-more", function(a) {
        a.preventDefault();

        var subj = 0;
        if(lastJQ(".np-subj-select a.selected").attr("data-id") != undefined){
            subj = lastJQ(".np-subj-select a.selected").attr("data-id");
        }
        var b = "/udata/news/get_news_list_by_subjs/" + lastJQ(this).attr("data-id") + "/?transform=ajax_news.xsl&p=" + lastJQ(this).attr("data-page") + "&subj=" + subj;
        console.log(b), lastJQ(this).hide(), lastJQ.ajax({
            url: b,
            dataType: "html",
            success: function(a) {
                lastJQ(".np-items-cont").append(a), "false" !== lastJQ(".chk-for-more-news:last").attr("data-page") && (lastJQ(".ajax-news-load-more").attr("data-page", lastJQ(".chk-for-more-news:last").attr("data-page")), lastJQ(".ajax-news-load-more").show())
            },
            error: function(a) {
                console.log(a)
            }
        })
    }), lastJQ(document).on("click", ".cartp-basket-remove", function(a) {
        a.preventDefault();
        var b = "/udata" + lastJQ(this).attr("href") + ".json";
        lastJQ(this).parent().remove(), lastJQ.ajax({
            url: b,
            dataType: "json",
            success: function(a) {
                if (0 == a.summary.amount) lastJQ(".cartp-content").empty().append('<div class="content-holder grid-100"><div class="cart-product-list well-shadow"><p class="cp-empty-cart">Корзина пуста</p></div></div>');
                else {
                    var b = 0;
                    b = void 0 === a.summary.price.original ? a.summary.price.actual : a.summary.price.original, lastJQ(".cartp-total-pr").html(b), lastJQ(".cartp-total-disc").html(a.discount_value), lastJQ(".cartp-total-pr-d").html(a.summary.price.actual)
                }
                basket_refresh(a)
            },
            error: function(a) {
                console.log(a)
            }
        })
    }), lastJQ(document).on("change", ".cartp-ch-amount", function() {
        var a = lastJQ(this).val();
        if (/^[1-9]\d*$/.test(a)) {
            lastJQ(this).attr("data-val", a);
            var c = lastJQ(this).attr("data-item"),
                d = lastJQ(this).attr("data-id"),
                e = "/udata/emarket/basket/put/element/" + d + "/.json?amount=" + a;
            console.log(e), lastJQ.ajax({
                url: e,
                dataType: "json",
                success: function(a) {
                    if (0 == a.summary.amount) lastJQ(".cartp-content").empty().append('<div class="content-holder grid-100"><div class="cart-product-list well-shadow"><p class="cp-empty-cart">Корзина пуста</p></div></div>');
                    else {
                        var b = 0;
                        b = void 0 === a.summary.price.original ? a.summary.price.actual : a.summary.price.original, lastJQ(".cartp-total-pr").html(b), lastJQ(".cartp-total-disc").html(a.discount_value), lastJQ(".cartp-total-pr-d").html(a.summary.price.actual), lastJQ.each(a.items.item, function(a, b) {
                            b.id == c && (lastJQ("#item-" + c + " .cartp-item-pr").html(b.price.actual), lastJQ("#item-" + c + " .cartp-item-pr-t").html(b["total-price"].actual))
                        })
                    }
                    basket_refresh(a)
                },
                error: function(a) {
                    console.log(a)
                }
            })
        } else lastJQ(this).val(lastJQ(this).attr("data-val"))
    }), lastJQ(".goto-step").click(function(a) {
        if (a.preventDefault(), lastJQ(this).hasClass("pos-validate-adr")) {
            lastJQ(".content-form")[0].checkValidity() ? lastJQ(".delivery-method-cont input").length > 0 ? lastJQ(".delivery-method-cont input:checked").length > 0 && pos_go_to_step(lastJQ(this).attr("data-step")) : pos_go_to_step(lastJQ(this).attr("data-step")) : lastJQ(".trig-subm").click()
        } else pos_go_to_step(lastJQ(this).attr("data-step"))
    }), lastJQ("#adr-new").length > 0 && lastJQ("input[name=delivery-address]:checked").click()
});
var my_ajax_catalog, my_ajax_search;
lastJQ(document).ready(function() {
    lastJQ(document).on('change', '.ch-lp', function() {
        if (lastJQ('#legper-new').is(':checked')) {
            lastJQ('#new-legal-person').show();
        } else {
            lastJQ('#new-legal-person').hide();
        }
    });
    lastJQ('.chk-lp-subm').click(function() {
        if (!lastJQ('#legper-new').is(':checked')) {
            lastJQ('#new-legal-person input').removeAttr('required');
        }
    });
    lastJQ('#lk-payment-form .paym-type-choose').change(function() {
        if (lastJQ('.paym-type-choose:checked').attr('data-type') == 'invoice') {
            lastJQ('.for-invoice-form').show();
        } else {
            lastJQ('.for-invoice-form').hide();
        }
    });
    lastJQ('.lp-choose').change(function() {
        if (lastJQ('.lp-choose:checked').val() == 'new') {
            lastJQ('.new-legal-person').show();
        } else {
            lastJQ('.new-legal-person').hide();
        }
    });
    if (lastJQ('.paym-type-choose:checked').length > 0 && lastJQ('.paym-type-choose:checked').attr('data-type') == 'invoice') {
        lastJQ('.for-invoice-form').show();
    }
    lastJQ('.no-conf-pay').click(function() {
        var block = lastJQ(this).closest('form');
        if (block.find('.paym-type-choose:checked').attr('data-type') != 'invoice') {
            block.find('.for-invoice-form').remove();
        } else {
            if (block.find('.lp-choose:checked').val() != 'new') {
                block.find('.new-legal-person').remove();
            }
        }
    });
    var text_price = lastJQ('.product-price strong').text();

    lastJQ('#option_table_options tr').click(function(){
        var input = lastJQ(this).find('td').eq(0).find('input');
        var float = input.data('float');
        var split = text_price.split(' ');
        var num_price_row=Number(split[0]);
        var sum_result = num_price_row+=float;
        lastJQ('.product-price strong').text(sum_result+' '+split[1]);
        input.prop("checked", true);
    })

    var input_checked_option = lastJQ("#option_table_options input:checked");
    if (input_checked_option.length > 0) {
        var split = text_price.split(' ');
        var num_price_row = Number(split[0]);
        var float_num = Number(input_checked_option.data('float'));
        lastJQ('.product-price strong').text(num_price_row + float_num + ' ' + split[1])
    }

    lastJQ('.top-phone').click(function(){
        yaCounter25107791.reachGoal('header_phone');
        gtag('event', 'click', {'event_category': 'phone', 'event_label': 'p_head'});
//        gtag('event', 'phone', {'event_category': 'click'});
    });
    lastJQ('.footer_phone').click(function(){
        yaCounter25107791.reachGoal('footer_phone');
        gtag('event', 'click', {'event_category': 'phone', 'event_label': 'p_bot'});
//        gtag('event', 'phone', {'event_category': 'click'});
    });
    lastJQ('#modal-form-top form').submit(function(){
        yaCounter25107791.reachGoal('call_for_price_top');
        gtag('event', 'send', {'event_category': 'form', 'event_label': 'main'});
//        gtag('event', 'price', {'event_category': 'form'});
    });
    lastJQ('#modal-form-151 form').submit(function(){
        yaCounter25107791.reachGoal('call_for_price');
        gtag('event', 'send', {'event_category': 'form', 'event_label': 'threads'});
//        gtag('event', 'price', {'event_category': 'form'});
    });

    lastJQ('.contact-target').submit(function(){
        yaCounter25107791.reachGoal('contact_form');
        gtag('event', 'send', {'event_category': 'form', 'event_label': 'contacts'});
//        gtag('event', 'contact', {'event_category': 'form'});
    });
    lastJQ('.more_category').click(function(e){
        if (lastJQ(this).parent().hasClass('expanded')){
            e.preventDefault();
            lastJQ(this).removeClass('selected').parent().removeClass('expanded').children('ul').stop(!0,!0).slideUp();
        }
    });
});

var append_cat;

function catalog_append(url) {
    var loader = lastJQ('.catalog-loader');
    var load_more = lastJQ('.catalog-load-more');
    loader.show();
    load_more.hide();
    var append_block = lastJQ('.catalog-items');
    if (append_cat) {
        append_cat.abort();
    }
    var url_new = url.replace('.json', '');
    if (lastJQ('.catalog-style.selected').attr('href') === '#grid') {
        append_cat = lastJQ.ajax({
            url: url_new + '&transform=transform/ajax_cat_grid.xsl',
            dataType: "html",
            success: function(response) {
                loader.hide();
                if (load_more.attr('data-page') != 'false') {
                    load_more.show();
                }
                append_block.append(response);
            },
            error: function(response) {
                loader.hide();
                console.log(response);
            }
        });
    } else {
        append_cat = lastJQ.ajax({
            url: url_new + '&transform=transform/ajax_cat_list.xsl',
            dataType: "html",
            success: function(response) {
                loader.hide();
                if (load_more.attr('data-page') != 'false') {
                    load_more.show();
                }
                append_block.append(response);
            },
            error: function(response) {
                loader.hide();
                console.log(response);
            }
        });
    }
}

function catalog_load_more() {
    var load_more = lastJQ('.catalog-load-more');

    if (load_more.attr('data-page') != 'false') {
        var loader = lastJQ('.catalog-loader');
        var sort_item = lastJQ('.catalog-sort.selected');
        var page = load_more.attr('data-page');
        var newp = parseInt(page) + 1;
        var url = '/udata/catalog/getSmartCatalog/0/' + loader.attr('data-id') + '/' + lastJQ('#products-per-page').find(':selected').val() + '/0/10/' + sort_item.attr('data-name') + '/' + sort_item.attr('data-asc') + '/.json?p=' + page + '&extProps=h1,photo,description_short,description';
        lastJQ('.custom-sm-f-pr').each(function() {
            url += '&' + lastJQ(this).attr('name') + '=' + lastJQ(this).val();
        });
        lastJQ('.custom-sm-f:checked').each(function() {
            url += '&' + lastJQ(this).attr('name') + '=' + lastJQ(this).val();
        });

        loader.show();
        load_more.hide();

        lastJQ.ajax({
            url: url,
            dataType: "json",
            success: function(response) {
                loader.hide();
                if (response.total > 0) {
                    catalog_append(url);

                    if (response.total > newp * parseInt(response.per_page)) {
                        //                        load_more.show();
                        load_more.attr('data-page', newp);
                    } else {
                        load_more.attr('data-page', 'false');
                    }
                } else {
                    load_more.attr('data-page', 'false');
                }
            },
            error: function(response) {
                loader.hide();
                console.log(response);
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function(){
        lastJQ('.lazyload').each(function(){
            lastJQ(this).attr('src', lastJQ(this).attr('data-src')).removeClass('lazyload').removeAttr('data-src');
        });
        lastJQ('.lazyload-bg').each(function(){
            lastJQ(this).css('background-image', 'url(' + lastJQ(this).attr('data-src') + ')').removeClass('lazyload-bg').removeAttr('data-src');
        });
    }, 1000);
    setTimeout(function(){
        if (lastJQ(window).width() > 767) {
            lastJQ('img[data-src-xl]').each(function () {
                lastJQ(this).attr('src', lastJQ(this).attr('data-src-xl')).removeAttr('data-src-xl');
            });
        } else {
            lastJQ('img[data-src-sm]').each(function () {
                lastJQ(this).attr('src', lastJQ(this).attr('data-src-sm')).removeAttr('data-src-sm');
            });
        }
    }, 2000);
    setTimeout(function(){
        lastJQ(window).resize();
    }, 2500);
}, false);


lastJQ(document).ready(function(){
    lastJQ('.fancy').fancybox();
});