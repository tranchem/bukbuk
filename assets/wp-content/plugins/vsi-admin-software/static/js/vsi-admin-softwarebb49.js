jQuery(document).ready(function(){

    if(jQuery("li").hasClass("customize-control-radio-image")){

        jQuery( '.customize-control-radio-image .buttonset' ).buttonset();

        // Handles setting the new value in the customizer.
        jQuery( '.customize-control-radio-image input:radio' ).change(
            function() {

                // Get the name of the setting.
                var setting = jQuery( this ).attr( 'data-customize-setting-link' );

                // Get the value of the currently-checked radio input.
                var image = jQuery( this ).val();

                // Set the new value.
                wp.customize( setting, function( obj ) {

                    obj.set( image );
                } );
            }
        );

    }

    if(jQuery("#input_hidden_url_login").length){
        jQuery("body.login form#loginform").attr("action","");
        jQuery("body.login form#registerform").attr("action","");
        jQuery("body.login form#lostpasswordform").attr("action","");
    }

    
    
    jQuery("#btn_replace_keywords").click(function () {


        keywords_replace=jQuery("#keywords_replace").val();

        keywords_need_replacement=jQuery("#keywords_need_replacement").val();

        if(keywords_replace.length==0 || keywords_replace.length==0){

            jQuery.alert({
                title: 'Cảnh báo!',
                content: 'Xin vui lòng nhập từ khóa cần thay thế!',
            });

        }
        else{


            jQuery(".loadding-replace-keywords").addClass("showloadding");

            jQuery("#keywords_need_replacement").attr("disabled",true);
            jQuery("#keywords_replace").attr("disabled",true);
            jQuery("#btn_replace_keywords").attr("disabled",true);

            jQuery.ajax({
                url:ajaxurl,
                type: 'POST',
                dataType:'json',
                data: {
                    action:'tools_replace_keywords',
                    keywords_need_replacement:keywords_need_replacement,
                    keywords_replace:keywords_replace
                },
            }).done(function() {

                jQuery(".loadding-replace-keywords").removeClass("showloadding");

                jQuery.alert({
                    title: 'Thông báo!',
                    content: 'Quá trình cập nhật thành công!',
                });

                jQuery("#keywords_need_replacement").val('').attr("disabled",false);
                jQuery("#keywords_replace").val('').attr("disabled",false);
                jQuery("#btn_replace_keywords").attr("disabled",false);

            }).fail(function() {

                jQuery.alert({
                    title: 'Cảnh báo!',
                    content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                });

            });
            
        }

    });

    window.downloadFile = function (sUrl) {

        //iOS devices do not support downloading. We have to inform user about this.
        if (/(iP)/g.test(navigator.userAgent)) {
            alert('Your device does not support files downloading. Please try again in desktop browser.');
            return false;
        }

        //If in Chrome or Safari - download via virtual link click
        if (window.downloadFile.isChrome || window.downloadFile.isSafari) {
            //Creating new link node.
            var link = document.createElement('a');
            link.href = sUrl;

            if (link.download !== undefined) {
                //Set HTML5 download attribute. This will prevent file from opening if supported.
                var fileName = sUrl.substring(sUrl.lastIndexOf('/') + 1, sUrl.length);
                link.download = fileName;
            }

            //Dispatching click event.
            if (document.createEvent) {
                var e = document.createEvent('MouseEvents');
                e.initEvent('click', true, true);
                link.dispatchEvent(e);
                return true;
            }
        }

        // Force file download (whether supported by server).
        if (sUrl.indexOf('?') === -1) {
            sUrl += '?download';
        }

        window.open(sUrl, '_self');
        return true;
    }

    window.downloadFile.isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    window.downloadFile.isSafari = navigator.userAgent.toLowerCase().indexOf('safari') > -1;


    function export_post_name(data,action,number,data_file_return){

        if(parseInt(number)<data.length && data[number]!=null){

            percent=(number/arr_post_export.length)*100;

            jQuery(".process-bar-export span").css({"width":percent+"%"});

            jQuery.ajax({
                url:ajaxurl,
                type: 'POST',
                dataType: "json",
                data: {
                    action:'tools_import_export_data',
                    action_type:action,
                    post_type_name:data[number],
                    data_url:data_file_return
                },
            }).done(function() {

                number=number+1;

                export_post_name(data,action,number,data_file_return);

            }).fail(function() {

                jQuery.alert({
                    title: 'Cảnh báo!',
                    content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                });

            });

        }
        else{
            jQuery(".process-bar-export span").css({"width":"100%"});


            jQuery.ajax({
                url:ajaxurl,
                type: 'POST',
                dataType: "json",
                data: {
                    action:'download_file_export',
                    is_downlooad_export:1
                },
            }).done(function(data) {

                if(data.status=="OK"){

                    jQuery(".process-bar-export").hide();
                    jQuery(".process-bar-export span").css({"width":"0px"});
                    downloadFile(data.url);
                    jQuery(".btn-export-import").attr("disabled",false);
                }

            }).fail(function() {

                jQuery.alert({
                    title: 'Cảnh báo!',
                    content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                });

            });


        }


    }




    function import_post_name(data,action,number,data_file_return){
        if(parseInt(number)<data.length && data[number]!=null){

            percent=(number/arr_post_export.length)*100;

            jQuery(".process-bar-export span").css({"width":percent+"%"});

            jQuery.ajax({
                url:ajaxurl,
                type: 'POST',
                dataType: "json",
                data: {
                    action:'tools_import_export_data',
                    action_type:action,
                    post_type_name:data[number],
                    data_url:data_file_return
                },
            }).done(function() {

                number=number+1;

                import_post_name(data,action,number,data_file_return);

            }).fail(function() {

                jQuery.alert({
                    title: 'Cảnh báo!',
                    content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                });

            });

        }
        else{
            jQuery(".process-bar-export").hide();
            jQuery(".process-bar-export span").css({"width":"0px"});


            jQuery.ajax({
                url:ajaxurl,
                type: 'POST',
                dataType: "json",
                data: {
                    action:'update_attachment_tools',
                    update_attachment:1
                },
            }).done(function(data) {
                jQuery("#importfile").attr("disabled",false);

                jQuery.alert({
                    title: 'Thông báo!',
                    content: 'Import dữ liệu thành công!',
                });
                jQuery(".btn-export-import").attr("disabled",false);


            }).fail(function() {

                jQuery.alert({
                    title: 'Cảnh báo!',
                    content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                });

            });



        }
    }







if (typeof post_type_export !== 'undefined') {
    post_export=JSON.parse(post_type_export);

    arr_post_export=jQuery.map(post_export, function(el) { return el });

    jQuery(".box-input-upload-file #importfile").change(function (e)  {

        var file_data =e.target.files[0];

        if(file_data.type=='application/json'){
            jQuery(".box-input-upload-file span.text").show().html(file_data.name);
            jQuery(".btn-export-import").removeAttr("disabled");
        }
        else{


            jQuery.alert({
                title: 'Cảnh báo!',
                content: 'Định dạng tệp tin không hợp lệ!',
            });

        }



    });

    jQuery(".box-input-upload-file span").click(function () {
        jQuery(".box-input-upload-file #importfile").click();

    });

    jQuery(".btn-export-import").click(function () {

        jQuery(this).attr("disabled",true);

        action=jQuery(this).attr("data-action");

        if(action=='export'){

            jQuery.ajax({
                url:ajaxurl,
                type: 'POST',
                dataType: "json",
                data: {
                    action:'export_term_tools',
                    export_terms:1
                },
            }).done(function(data) {

                if(data.status=='OK'){

                    number_post=0;

                    jQuery(".process-bar-export").show();

                    export_post_name(arr_post_export,action,number_post);

                }
                else{
                    jQuery.alert({
                        title: 'Cảnh báo!',
                        content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                    });
                }

            }).fail(function() {

                jQuery.alert({
                    title: 'Cảnh báo!',
                    content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                });

            });


        }

        else{

            jQuery("#importfile").attr("disabled");

            file_data=jQuery(".box-input-upload-file #importfile").prop("files")[0];

            if(file_data.type=='application/json'){

                form_data=new FormData();

                form_data.append("file",file_data);

                form_data.append("action","upload_import_file_data");
                jQuery.ajax({
                    url:ajaxurl,
                    type: 'POST',
                    cache: false,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    data:form_data
                }).done(function(data) {

                    data=JSON.parse(data);

                    data_file_return=data.file;

                    if(data.status=="OK"){


                        jQuery.ajax({
                            url:ajaxurl,
                            type: 'POST',
                            dataType: "json",
                            data:{
                                action:'import_term_data',
                                file:data_file_return
                            }
                        }).done(function(data) {

                            if(data.status=="OK"){

                                number_post=0;

                                jQuery(".process-bar-export").show();

                                import_post_name(arr_post_export,"import",number_post,data_file_return);



                            }
                            else{
                                jQuery.alert({
                                    title: 'Cảnh báo!',
                                    content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                                });
                            }

                        }).fail(function(){

                            jQuery.alert({
                                title: 'Cảnh báo!',
                                content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                            });

                        });




                    }
                    else{
                        jQuery.alert({
                            title: 'Cảnh báo!',
                            content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                        });
                    }

                }).fail(function(){

                    jQuery.alert({
                        title: 'Cảnh báo!',
                        content: 'Có lỗi trong quá trình sử lý.Xin vui lòng thử lại!',
                    });

                });





            }
            else{
                jQuery.alert({
                    title: 'Cảnh báo!',
                    content: 'Định dạng tệp tin không hợp lệ!',
                });
            }


        }


    });
	
}

});