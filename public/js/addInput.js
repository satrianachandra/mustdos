var counter = 1;
var x=1;
var limit = 3;
function addInput(divName){
     if (counter == limit || x == limit)  {
          alert("You can only add 3 Subtasks ");
     }
     else {
          var newdiv = document.createElement('div');
          var newdiv1 = document.createElement('div');
          newdiv.innerHTML = "SubTask " + (counter + 1) + " <br><input type='text' name='myInputs[]'>";
          newdiv1.innerHTML = "SubTask Description " + (x + 1) + " <br><textarea name='subtask_description' form='contactform' style='width: 415px; height: 40px'>";
          document.getElementById(divName).appendChild(newdiv);
          document.getElementById(divName).appendChild(newdiv1);
          counter++;
          x++;
     }
}