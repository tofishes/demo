// @tofishes
;(function (window, undefined) {
    // util for ajax
    var contentType = 'application/x-www-form-urlencoded; charset=UTF-8'
    ,   XMLHTTP = window.XMLHttpRequest || window.ActiveXObject;
    function getXMLHTTP() {
        return new XMLHTTP('Microsoft.XMLHTTP');
    };
    function processData(data) {
        if (!data) return null;

        var query = [], key;
        for (key in data) {
            query.push(key + '=' + data[key]);
        };

        return query.join('&');
    }
    var ajax = {
        /*
            options = {
                async: true, // 异步
                url: '',
                type: 'get', // get or post+
                data: {}, // params for this request
                dataType: 'text', // text | xml 服务器返回的数据格式
                success: function (data){}, // 成功的回调
                fail: function (){}, // 失败的回调
            }
         */
        req: function (options) {
            var xmlhttp = getXMLHTTP()
            ,   async = options.async || true
            ,   url = options.url || ''
            ,   type = (options.type || 'get').toUpperCase()
            ,   data = processData(options.data)
            ,   success = options.success || function (data) {}
            ,   fail = options.fail || function (status) {}
            ,   dataType = options.dataType
            ,   respContent = dataType === 'xml' ? 'responseXML' : 'responseText';

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState === 4) {
                    xmlhttp.status === 200 ? success.call(xmlhttp, xmlhttp[respContent])
                                            : fail.call(xmlhttp, xmlhttp.status);
                };
            };

            if (type === 'GET') url += '?' + data;

            xmlhttp.open(type, url, async);
            type === 'POST' && xmlhttp.setRequestHeader("Content-Type", contentType);
            xmlhttp.send(data);
        },
        get: function (url, data, success) {
            ajax.req({
                url: url,
                data: data,
                success: success
            });
        },
        post: function (url, data, success) {
            ajax.req({
                type: 'post',
                url: url,
                data: data,
                success: success
            });
        }
    };
    
    window.ajax = ajax;
})(window);

if (!window.JSON) {
  window.JSON = {
    parse: function (sJSON) { return eval("(" + sJSON + ")"); },
    stringify: function (vContent) {
      if (vContent instanceof Object) {
        var sOutput = "";
        if (vContent.constructor === Array) {
          for (var nId = 0; nId < vContent.length; sOutput += this.stringify(vContent[nId]) + ",", nId++);
          return "[" + sOutput.substr(0, sOutput.length - 1) + "]";
        }
        if (vContent.toString !== Object.prototype.toString) { return "\"" + vContent.toString().replace(/"/g, "\\$&") + "\""; }
        for (var sProp in vContent) { sOutput += "\"" + sProp.replace(/"/g, "\\$&") + "\":" + this.stringify(vContent[sProp]) + ","; }
        return "{" + sOutput.substr(0, sOutput.length - 1) + "}";
      }
      return typeof vContent === "string" ? "\"" + vContent.replace(/"/g, "\\$&") + "\"" : String(vContent);
    }
  };
};

String.prototype.trim = function() {
  var str = this,
  str = str.replace(/^\s\s*/, ''),
  ws = /\s/,
  i = str.length;
  while (ws.test(str.charAt(--i)));
  return str.slice(0, i + 1);
}
/* 业务代码如下 */
FastClick.attach(document.body);
var $ = function (id) {
    return document.getElementById(id);
};
var tip = {
    '$wrap': $('tip'),
    '$con': $('tip-con'),
    '$sure': $('tip-sure'),
    '$overlay': $('overlay'),
    'alert': function (content) {
        tip.$con.innerHTML = content;
        tip.show();
    },
    'show': function () {
        tip.$overlay.style.display = "block";
        tip.$wrap.style.display = "block";
    },
    'hide': function () {
        tip.$wrap.style.display = "none";
        tip.$overlay.style.display = "none";
    }
};
tip.$sure.onclick = function () {
    tip.hide();
}

var url = 'p/huggies/getcoupon/'
,   $submit = $('get-promo-code')
,   $phone = $('phone-input')
,   $brand = $('brand-input')
,   $promo = $('promo-code-show');

$submit.onclick = function () {
    var phoneNum = $phone.value.trim()
    ,   brand = $brand.value
    ,   params = {
        'phoneNum': phoneNum,
        'brand': brand
    };

    // 校验
    var regex = {
        mobile: /^0?(13[0-9]|15[012356789]|18[0-9]|14[57])[0-9]{8}$/
    };

    if (! phoneNum) {
        tip.alert('请输入手机号！');
        return;
    };

    if (! regex.mobile.test(phoneNum)) {
        tip.alert('您输入的手机号不正确，请重新输入，获取免费优惠券！');
        return;
    };
    $submit.setAttribute('disabled', 'disabled');
    ajax.get(url, params, function (data) {
        $submit.removeAttribute('disabled');
        var rst = JSON.parse(data).rst;
        if (rst.result === 'failed') {
            tip.alert('对不起，您的手机已经申请过优惠券，感谢您的关注！');
            return;
        } else if (rst.result === 'phoneNum or brand is null') {
            tip.alert('请输入手机号！');
            return;
        };

        $promo.innerHTML = rst.result;
    });        

    return false;
}