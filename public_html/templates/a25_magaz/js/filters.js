site.filters=function(a,b){"use strict";function h(b){var c=b.target||b;g.setChangedField(c);var h=f.getFieldParams(c),j=g.getParams();"checkbox"===f.getType(c).type&&void 0===a(c).attr("checked")&&e.deleteParam(c,j),e.mergeParams(j,h);var k=e.getRangeParams();e.mergeParams(j,k),g.setParams(j),d.getFilters(g.getCategoryId(),g.getParams(),i)}function i(b){var h=f.getAllFields(f.getFilterForm());f.forEachField(h,f.resetField,function(b){return"text"!==f.getType(b).type&&!(a(b).attr("name")in g.getParams())}),f.forEachField(h,f.fillField,null,b),c.processingDone||f.forEachField(h,function(){a(this).attr("checked",!0)},function(a){return("checkbox"===f.getType(a).type||"radio"===f.getType(a).type)&&void 0!==e.getFilterParams()[a.name]&&a.value==e.getFilterParams()[a.name].replace(/\+/gi," ")}),d.showResult(b,g.getChangedField()),c.processingDone=!0}var c={paramName:"filter",url:"/udata://catalog/getSmartFilters//",categoryId:null,form:null,params:null,changedField:null,resultButton:{element:null,name:null},processingDone:!1},d={getFilters:function(b,d,e){var f=c.url+b+".json";a.ajax({url:f,data:d,dataType:"json",type:"get",success:e})},showResult:function(a){var b=g.getResultButton();b.element.val(b.name+" ("+a.total+")")},init:function(){c.form=a(".catalog_filter"),c.categoryId=c.form.data("category"),c.resultButton.element=a("#show_result",c.form),c.resultButton.name=c.resultButton.element.val(),a(".field > h3",c.form).toggle(function(){a(this).siblings(".data").hide(300)},function(){a(this).siblings(".data").show(300)}),a("#reset",c.form).click(function(a){a.preventDefault(),location.href=location.pathname}),b(".slider",c.form).each(function(){var a=b(this).parent().parent().find(".range"),c=a.children("input:first-child"),d=a.children("input:last-child"),e=parseFloat(c.data("minimum")),f=parseFloat(c.val()),g=parseFloat(d.data("maximum")),i=parseFloat(d.val());b(this).siblings(".min").text(e),b(this).siblings(".max").text(g),b(this).slider({range:!0,min:e,max:g,values:[f,i],slide:function(a,b){c.val(b.values[0]),d.val(b.values[1])},change:function(a,b){c.val()==b.value&&h(c.get(0)),d.val()==b.value&&h(d.get(0))}})}),b("div.date_range input[type=text]",c.form).each(function(){var b=new Date(Date.parse(a(this).data("minimum"))),c=new Date(Date.parse(a(this).data("maximum"))),d=new Date(Date.parse(a(this).val())),e=f.formatDate(d);a(this).val(e),a(this).datepicker({dateFormat:"d.m.yy",minDate:b,maxDate:c})})}},e={hasFilterParam:function(a){var b=a||location.search,d=this.getAllParams(b);for(var f in d)if(d.hasOwnProperty(f)&&e.getArrayParamName(f)===c.paramName)return!0;return!1},getAllParams:function(a){var a=a||location.search,b=decodeURIComponent(a);b=b.replace(/^\?/,"");var c={};if("string"==typeof a&&0===a.length)return c;for(var d=b.split("&"),e=0;e<d.length;e++){var f=d[e].split("="),g=f[0],h=f[1];c[g]=h}return c},getRangeParams:function(){var d,e,b=f.getAllFields(f.getFilterForm()),c={};for(var g in b)e=b[g],"from"!==(d=f.getBound(e))&&"to"!==d||(c[a(e).attr("name")]=a(e).val());return c},getArrayParamName:function(a){var b=a.indexOf("[");return-1===b?a:a.slice(0,b)},getFilterParams:function(){var a=this.getAllParams(),b={};for(var d in a)this.getArrayParamName(d)===c.paramName&&(b[d]=a[d]);return b},getFieldNameByParam:function(a){var b=/^(\w+)?\[(\w+)/.exec(a);return void 0!==b[2]?b[2]:""},mergeParams:function(b,c){return a.extend(b,c),b},bindValueChangeHandler:function(b){var c=this,d=f.getType(c);switch(!0){case"input"===d.tag&&("radio"===d.type||"checkbox"===d.type):a(c).click(b);break;case"date_range"==d.parentClass:a(c).change(b);break;default:a(c).bind("focus",function(){a(this).data("originValue",a(this).val())}),a(c).focusout(function(c){var d=a(this).data("originValue");a(this).val()!==d&&b(c)})}},getFieldDataByName:function(a,b){function g(a){var b={};for(var c in a.group)b[c]=a.group[c];return b}function h(a,b){var c={},d=0;for(var e in a){var f=a[e][b];for(var e in f)c[d]=f[e],d++}return c}var c=g(a),d=h(c,"field");for(var e in d){var f=d[e];if("string"==typeof f.name&&f.name===b)return f}return null},getItems:function(a){return a&&a.item?a.item:null},deleteParam:function(b,c){var d=a(b).attr("name");c[d]&&delete c[d]}},f={forEachField:function(a,b,c){var b="function"==typeof b?b:function(){},c="function"==typeof c?c:function(){return!0},d=null,e=Array.prototype.slice.call(arguments,3);for(var f in a)a.hasOwnProperty(f)&&(d=a[f],c(d)&&b.apply(d,e))},getFieldParams:function(b){var c=a(b).val(),d=a(b).attr("name"),e={};return"checkbox"===f.getType(b).type&&void 0===a(b).attr("checked")?e:(e[d]=c,e)},resetField:function(){var b=this;a(b).parent().length&&f.makeInActive(b)},fillField:function(b){var c=this,d=f.getType(c),g=a(c).attr("name"),h=e.getFieldNameByParam(g),i=e.getFieldDataByName(b,h);"checkbox"===d.type?f.fillCheckBoxField(c,i):"radio"===d.type?f.fillRadioField(c,i):f.fillFromToField(c,i)},getAllFields:function(b){var d={},e=0;return a("input[name]",b).each(function(a,b){d[e]=b,e++}),d},getFilterForm:function(){return c.form},getType:function(b){return{tag:a(b).prop("tagName").toLowerCase(),type:a(b).attr("type")||null,parentClass:a(b).parent().attr("class")}},makeActive:function(b){a(b).parent().removeClass("inactive"),a(b).removeAttr("disabled")},makeInActive:function(b){a(b).parent().addClass("inactive"),a(b).attr("disabled","")},fillCheckBoxField:function(b,c){var d=null,g=a(b).val();if(c){d=e.getItems(c);for(var h in d){d[h].value===g&&f.makeActive(b)}}},fillRadioField:function(b,c){var d=a(b).val();"string"==typeof d&&0===d.length&&f.makeActive(b),f.fillCheckBoxField(b,c)},fillFromToField:function(b,c){if(c){if(c.minimum&&c.minimum.value&&"from"===f.getBound(b)){if("date"!=c["data-type"])return void a(b).val(c.minimum.value);var d=f.timestamp2date(c.minimum.value);a(b).val(f.formatDate(d))}if(c.maximum&&c.maximum.value&&"to"===f.getBound(b)){if("date"!=c["data-type"])return void a(b).val(c.maximum.value);var e=f.timestamp2date(c.maximum.value);a(b).val(f.formatDate(e))}}},timestamp2date:function(a){return new Date(1e3*a)},formatDate:function(a){return!a instanceof Date?"Date expected":a.getDate()+"."+(a.getMonth()+1)+"."+a.getFullYear()},getBound:function(b){var c=a(b).attr("name"),d=/\[(\w+)\]$/.exec(c);return d&&d[1]?d[1]:""}},g={setParams:function(a){c.params=a},getParams:function(){return c.params||{}},setChangedField:function(a){c.changedField=a},getChangedField:function(){return c.changedField},getCategoryId:function(){return c.categoryId},getResultButton:function(){return c.resultButton}};return a(function(){if(d.init(),e.hasFilterParam()){var a=e.getFilterParams();g.setParams(a),d.getFilters(g.getCategoryId(),a,i)}var b=f.getAllFields(f.getFilterForm());f.forEachField(b,e.bindValueChangeHandler,null,h)}),{helper:e}}(jQuery,lastJQ);