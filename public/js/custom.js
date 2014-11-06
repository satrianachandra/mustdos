$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
           // $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
           $(wrapper).append('<div><li><p><label for="item_name">Item Name:</label><input name="item_name[]" type="text" id="item_name"><a href="#" class="remove_field">Remove</a></li></p><p><label for="item_description">Description:</label><input name="item_description[]" type="text" id="item_description"></p></div>');           
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div').remove(); x--;
    })


});