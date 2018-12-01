/*
 *  
 * 
 *  Author      :   Immanuel Dennis H. Lopez
 *	Email 		:	sunny.lopez@gmail.com
 *  Filename    :   noPostBack-1.20180316.js
 *  Version     :   1.20180316
 *  Description :   Eliminates post back action of page by passing it as JSON format in  
 *                  ajax.
 ***/

(function($){
    
    /*
     *
     *  
     * 	$(document).gmLoadPage({
     *		url 		:	'www.sample.com/save'
	 *		load_on		:	'.load-grid'
	 *	});
     **/
    $.fn.gmLoadPage = function(options){
        var defaults = {
            url         :   null,
            load_on     :   null
        }

        $(document).ready(function(){
            $(options.load_on).load(options.url);
        });
    };


     $.fn.gmLoad = function(options){
        var defaults = {
            url         :   null,
            data        : null,
            load_on     :   null
        }
        var data = [];
        data.push('"' + "id" + '":"' + options.data['id']+ '"');
        $.ajax({
            url         :   options.url,
            type        :   "POST",
            data        :   $.parseJSON("{" + data + "}")
        }).always(function (e) {
            $(options.load_on).html(e);
        });
        // $(document).ready(function(){
        //     $(options.load_on).load(options.url);
        // });
 
    };

    /*
     *
     *  
     * 	$("#submit").gmSavePost({
     *		url 		:	'www.sample.com/save'
     *      field  		:	'field',
	 *		selector 	:	'.input-field'
	 *		load_after	:	'www.sample.com/list',	
     *		load_on		:	'.load-grid',
     *      redirect    :   'www.sample.com/redirect',
     *      clear       :   true
	 *	});
     **/
    $.fn.gmSavePost = function(options) {
        var defaults = {
            url         :   null,
            field       :   null,
            selector    :   null,
			load_after	:	null,
            load_on		:	null,
            redirect    :   null,
            return_id   :   false,
            clear       :   false,
            reload      :   false
        };
        
        var data = [];

        this.click(function() {
            $.each($(options.selector), function () {
				data.push('"' + $(this).data(options.field) + '":"' + $(this).val() + '"');
            });
            $.ajax({
				url     :   options.url,
				type    :   "POST",
				dataType:   "JSON",
				data	:   $.parseJSON("{" + data + "}")
			}).always(function (e) {
                if (e.has_error == true) {
                    $("#alert").fadeIn(800);
                    $("#alert").html("<img id='alert-image' src='css/exclamation-icon.png' /><div id='alert-message'>"+e.error_message+"</div>");
                    return false;
                } 
                if (options.load_on != null || options.load_after != null) {
                    $(options.load_on).load(options.load_after);
                }
                if (options.clear == true){
                    $(options.selector).val('');
                }
                if (options.reload == true ){
                    window.location.reload();
                }
                if (options.redirect != null){
                    if (options.return_id == true){
                        window.location = options.redirect + e.ID;
                    }
                    else{
                        window.location = options.redirect;
                    }
                }
			});
        });
    };


    /*
     *
     *  
     * 	$(".delete").gmDelete({
     *		url 		:	'www.sample.com/delete',
     *      id       	:	'.delete',
	 *		confirm     :   'Confirmation Message',
	 *		load_after 	:	'www.sample.grid',
	 *		load_on 	:	'#grid'
	 *	});
     **/
    $.fn.gmDelete = function(options) {
        var defaults = {
            url         :   null,
            id          :   null,
            confirm     :   null,
            load_after	:	null,
			load_on		:	null,
        };

        this.click(function() {
            if (options.confirm != null){
                if (!confirm(options.confirm)){
                    return false;
                }   
            }

            $.ajax({
                url     :   options.url,
                type    :   "POST",
                data	:   
					{
                        ID 	: 	$(options.id).data('id')
                    }
                }).always(function (e) {
                    if (e.has_error == true) {
                        $("#alert").fadeIn(800);
                        $("#alert").html("<img id='alert-image' src='css/exclamation-icon.png' /><div id='alert-message'>"+e.error_message+"</div>");
                        return false;
                    }
                    if (options.load_on != null || options.load_after != null) {
                        $(options.load_on).load(options.load_after);
                    }
            });
        });
    };
   	
	/*
     *
     *  
     * 	$(".update").gmGetSingle({
	 *		url 		:	'www.sample.com/get_single',
     *		id   		:	'.update',
     *      confirm     :   'Confirmation Message',
     *      load_on 	:	'.input-field'
	 *	});
     **/
	 $.fn.gmGetSingle = (function(options){
		var defaults = {
            url 		:	null,
            id          :   null,
            confirm     :   null,
            load_on		:	null
		};
		
		this.click(function(){
			 if (options.confirm != null){
                if (!confirm(options.confirm)){
                    return false;
                }   
            }

			$.ajax({
				url			:	options.url,
				type 		:	"POST",
				data 		:	
					{
						ID	:	$(options.id).data('id')
					}
			}).always(function (e) {
				/*
				 * Loads the JSON data to 
				 * your html form.
				 */
                var value = $.parseJSON(e);
                $.each($(options.load_on), function () {
                    var field_name = $(this).data('field');
                    $("#" + field_name).val(value[field_name]);
                });
			});
		});
     });
     
    /*
     *
     *  
     * 	$("#btnSearch").gmSearch({
     *		url 		:	'www.sample.com/search',
     *		field 		:	'#search'
	 *      load_on 	:	'#grid',
	 *	});
     **/
	$.fn.gmSearch = (function(options){
		var defaults = {
            url 		:	null,
            search      :   null,
			load_on		:	null,
		}

        this.click(function() {
            $.ajax({
				url			:	options.url,
				type 		:	"POST",
				data 		:	
					{
						search	:	$(options.search).val()
					}
			}).always(function (e) {
				$(options.load_on).html(e);
			});
        });
    });
    
})(jQuery);