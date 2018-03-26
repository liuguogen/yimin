                function check_postTel() {
                    var name = /[\u4E00-\u9FA5\uF900-\uFA2D]/;
                    var tel = /^0?(13[0-9]|15[012356789]|18[02356789]|14[57])[0-9]{8}$/;
                    if (document.zxyy.phone.value === "") {
                        alert("您的手机号不能为空！");
                        this.zxyy.phone.focus();
                        return false;
                    } else if (!tel.test(document.zxyy.phone.value)) {
                        alert("手机号不正确！");
                        this.zxyy.phone.focus();
                        return false;
                    } else {
                        zxyy.submit();
                    }
                }
                function tanchu() {
                    $("#heibj1").css("display", "block");
                    $("#showform1").css("display", "block");
                }

                function guanbi() {
                    $("#heibj1").fadeOut("slow");
                    $("#showform1").fadeOut("slow");
                }