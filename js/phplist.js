$(document).ready(function() {
    var h = new Image();
    h.src = waitImage;
    $("#phplistsubscribeform").submit(function() {
        var d = $("#emailaddress").val();
        var e = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var f = this.action;
        ajaxaddress = f.replace(/subscribe/, 'asubscribe');
        $('#phplistsubscriberesult').html('<img src="' + h.src + '" width="' + h.width + '" height="' + h.height + '" border="0" alt="Please wait" title="powered by phpList, www.phplist.com" />');
        if (e.test(d)) {
            var g = $.ajax({
                type: 'POST',
                url: ajaxaddress,
                crossDomain: true,
                data: "email=" + d,
                success: function(a, b, c) {
                    if (a.search(/FAIL/) >= 0) {
                        document.location = f + "&email=" + d
                    } else {
                        $('#phplistsubscriberesult').html("<div id='subscribemessage'></div>");
                        //$('#subscribemessage').html(a).hide().fadeIn(1500);
                        $('#subscribemessage').html(thanksForSubscribing).hide().fadeIn(1500);
                        $("#phplistsubscribeform").hide();
                        document.cookie = "phplistsubscribed=yes"
                    }
                },
                error: function(a, b, c) {
                    document.location = f + "&email=" + d
                }
            })
        } else {
            document.location = f + "&email=" + d
        }
        return false
    });
    $("#emailaddress").val(pleaseEnter);
    $("#emailaddress").focus(function() {
        var v = $("#emailaddress").val();
        if (v == pleaseEnter) {
            $("#emailaddress").val("")
        }
    });
    $("#emailaddress").blur(function() {
        var v = $("#emailaddress").val();
        if (v == "") {
            $("#emailaddress").val(pleaseEnter)
        }
    });
    var i = document.cookie;
    if (i.indexOf('phplistsubscribed=yes') >= 0) {
        $("#phplistsubscribeform").html(thanksForSubscribing)
    }
});

$.ajaxTransport("+*", function(d, e, f) {
    if (jQuery.browser.msie && window.XDomainRequest) {
        var g;
        return {
            send: function(b, c) {
                g = new XDomainRequest();
                g.open("get", d.url + "&" + d.data);
                g.onload = function() {
                    if (this.contentType.match(/\/xml/)) {
                        var a = new ActiveXObject("Microsoft.XMLDOM");
                        a.async = false;
                        a.loadXML(this.responseText);
                        c(200, "success", [a])
                    } else {
                        c(200, "success", [this.responseText])
                    }
                };
                g.ontimeout = function() {
                    c(408, "error", ["The request timed out."])
                };
                g.onerror = function() {
                    c(404, "error", ["The requested resource could not be found."])
                };
                g.send()
            },
            abort: function() {
                if (g) g.abort()
            }
        }
    }
});

if (pleaseEnter == undefined) {
    var pleaseEnter = "Please enter your email"
}
if (thanksForSubscribing == undefined) {
    var thanksForSubscribing = '<div class="subscribed">Thanks for subscribing. Please click the link in the confirmation email you will receive.</div>'
}
if (waitImage == undefined) {
    var waitImage = 'https://s3.amazonaws.com/phplist/img/busy.gif'
}
