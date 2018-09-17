$(window).ready(function (){
    
    $(".addChild").click(function() {
        childRowContainer = $(this).parent().prev(".childRowContainer");
        
        if(childRowContainer.children(".childRow:last").hasClass("hidden")) { 
            childRowContainer.children(".childRow:last, .labelLeft, .labelRight").removeClass("hidden");
            childRowContainer.children(".childRow:last").children("input[type=text], select").prop("disabled", false);
        } else {
            rowClone = childRowContainer.children(".childRow:last").clone(true, true);
            var test = 10;
			
            $(rowClone).children("input[type=text]").val("");
            $(rowClone).children("select").find('option').removeAttr("selected");
            
            $(rowClone).children("input[type=text], select").removeClass('disabledInput');
            $(rowClone).children(".removeChild").removeClass('hidden');
            $(rowClone).children("input.isDisabledForEditing").val(0);
            
            rowClone.appendTo(childRowContainer);

            clearDiv = $('<div />', {"class": 'float-clear'});
            clearDiv.appendTo(childRowContainer);
        }
        
        return false;
    })

    $(".removeChild").click(function() {
        childRowContainer = $(this).parent().parent(".childRowContainer");
        
        if(childRowContainer.children('.childRow').size() > 1) {
            $(this).parent().next(".float-clear").remove();
            $(this).parent().remove();       
        } else { 
            childRowContainer.children('.childRow, .labelLeft, .labelRight').addClass("hidden");
            childRowContainer.children(".childRow").children("input[type=text], select").prop("disabled", true);
        }
        
        return false;
    })
    
    $.datetimepicker.setLocale('lt');
    $('.datetime').datetimepicker({
        format: 'Y-m-d H:i',
        dayOfWeekStart : 1,
        startDate: '2016-01-01',
        defaultDate: '2016-01-01'
    });
    
    $('.date').datetimepicker({
        timepicker: false,
        format: 'Y-m-d',
        formatDate: 'Y-m-d',
        defaultDate: '2016-01-01'
    });
   
    
});

function showConfirmDialog(module, removeId) {
    var r = confirm("Ar tikrai norite pašalinti!");
    if (r === true) {
        window.location.replace("index.php?module=" + module + "&action=delete&id=" + removeId);
    }
}