$(document).ready(function() {
    var max_fields  = 5; //maximum input boxes allowed
    var x = [1,1,1]; //initlal text box count
    
    var wrapper = [$(".input_fields_wrap_0"),$(".input_fields_wrap_1"),$(".input_fields_wrap_2")];
    var add_button = [$(".add_field_button_0"),$(".add_field_button_1"),$(".add_field_button_2")]; //Add button ID
    
    for (j = 0; j < x.length; j++) {
        processElement(j);
    }   

    function processElement(j){
        $(add_button[j]).click(function(e){ //on add input button click
            e.preventDefault();
            if(x[j] < max_fields){ //max input box allowed
                x[j]++; //text box increment
               // $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
               $(wrapper[j]).append('<div><li><p><label for="item_name">Item Name:</label><input name="item_name['+j+'][]" type="text" id="item_name"><a href="#" class="remove_field">Remove</a></li></p><p><label for="item_description">Description:</label><input name="item_description['+j+'][]" type="text" id="item_description"></p></div>');           
            }
        });
        $(wrapper[j]).on("click",".remove_field", function(e){ //user click on remove text
           e.preventDefault(); $(this).closest('div').remove(); x[j]--;
        }) 
    }

});


