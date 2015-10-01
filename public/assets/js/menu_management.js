/**
 * Created by AL Kindi Isda on 8/2/2015.
 */

//handleformWizard

// default form wizard
$('#form_assign_menu').bootstrapWizard({
    'nextSelector': '.button-next',
    'previousSelector': '.button-previous',
    onTabClick: function (tab, navigation, index) {
        alert('on tab click disabled');
        return false;
    },
    onNext: function (tab, navigation, index) {
        console.log("tab: "+tab+", nav :"+navigation+", index:"+index);
        console.log(tab);
        console.log(navigation);
        var total = navigation.find('li').length;
        var current = index + 1;
        // set wizard title
        $('.step-title', $('#form_assign_menu')).text('Step ' + (index + 1) + ' of ' + total);
        // set done steps
        jQuery('li', $('#form_assign_menu')).removeClass("done");
        var li_list = navigation.find('li');
        for (var i = 0; i < index; i++) {
            jQuery(li_list[i]).addClass("done");
        }

        if (current == 1) {
            $('#form_assign_menu').find('.button-previous').hide();
        } else {
            $('#form_assign_menu').find('.button-previous').show();
        }

        if (current >= total) {
            $('#form_assign_menu').find('.button-next').hide();
            $('#form_assign_menu').find('.button-submit').show();
        } else {
            $('#form_assign_menu').find('.button-next').show();
            $('#form_assign_menu').find('.button-submit').hide();
        }
        App.scrollTo($('.page-title'));
    },
    onPrevious: function (tab, navigation, index) {
        var total = navigation.find('li').length;
        var current = index + 1;
        // set wizard title
        $('.step-title', $('#form_assign_menu')).text('Step ' + (index + 1) + ' of ' + total);
        // set done steps
        jQuery('li', $('#form_assign_menu')).removeClass("done");
        var li_list = navigation.find('li');
        for (var i = 0; i < index; i++) {
            jQuery(li_list[i]).addClass("done");
        }

        if (current == 1) {
            $('#form_assign_menu').find('.button-previous').hide();
        } else {
            $('#form_assign_menu').find('.button-previous').show();
        }

        if (current >= total) {
            $('#form_assign_menu').find('.button-next').hide();
            $('#form_assign_menu').find('.button-submit').show();
        } else {
            $('#form_assign_menu').find('.button-next').show();
            $('#form_assign_menu').find('.button-submit').hide();
        }

        App.scrollTo($('.page-title'));
    },
    onTabShow: function (tab, navigation, index) {
        var total = navigation.find('li').length;
        var current = index + 1;
        var $percent = (current / total) * 100;
        $('#form_assign_menu').find('.bar').css({
            width: $percent + '%'
        });
    }
});

$('#form_assign_menu').find('.button-previous').hide();
$('#form_assign_menu .button-submit').click(function () {
   // alert('Finished! Hope always :)');
    var permission=[];
    $("*[id=confirm]").each(function(){
        console.log($(this).attr("prefix"));
        permission.push($(this).attr("prefix"));
        //$(this).parents("span").attr("class","");
    });
    //console.log(permission);
    App.blockUI($('.portlet'));
    $.ajax({
        type: 'POST',
        url: "/updateAssignMenu",
        data: { role: $("#role").val(),menu:permission}
    }).success(function (data) {
        console.log(data);
        $('#form_assign_menu').find(".button-previous").trigger('click');
        $('#form_assign_menu').find(".button-previous").trigger('click');
        $(".alert-success").show();

    })
    .error(function (data) { // the data parameter here is a jqXHR instance

    });
    App.unblockUI($('.portlet'));
}).hide();




//============================================


$( ".button-previous" ).click(function() {
    $("#confirmation").empty();
});


$( ".button-next" ).click(function() {
    console.log($("#tab3").hasClass("active"));
    if($("#tab3").hasClass("active")){
        $("*[prefix=assign]").each(function(){

            if( $(this).parent().hasClass("checked") ) {
                console.log($(this).parent().parent().parent().text().trim());
                console.log($(this).val());
                $("#confirmation").append("<li id='confirm' prefix="+$(this).val()+">"+$(this).parent().parent().parent().text().trim()+"</li>");
            }

        });

    }

    if($("#tab2").hasClass("active")){
        console.log($("#role").val());
        $(".alert-success").hide();
        App.blockUI($('.portlet'));
        $.ajax({
            type: 'POST',
            url: "/get_menu_role",
            data: { role: $("#role").val()}
        }).success(function (data) {
            console.log(data);
            $("#menuForRole").html(data[1]);
            $("*[id=parent]").each(function(){
                console.log($(this));
                $($(this)).change(function() {
                    var val = $(this).val();
                    if( $(this).is(":checked") ) {
                        $("#"+val).show();
                    }else
                    {
                        $("#"+val).hide();
                        var num=1;
                        $("*[id=child"+val+"]").each(function(){
                           // alert(num++);
                            console.log($(this));
                            $(this).parents("span").attr("class","");
                        });
                    }

                });


            });
            App.forminput();

        }).error(function (data) { // the data parameter here is a jqXHR instance

        });
        App.unblockUI($('.portlet'));


    }

});








