$('#add_task').submit(function(event) {
  /* stop form from submitting normally */
  event.preventDefault();
  var title = $('#task_title').val();
  if(title){
    //ajax post the form
    $.post("/add", {title: title}).done(function(data) {
      $('#add_task').hide("slow");
      $("#task_list").append(data);
    });
  }
  else{
    alert("Please give a title to task");
  }
});

$('#edit_task').submit(function(event) {
  /* stop form from submitting normally */
  event.preventDefault();
  var task_id = $('#edit_task_id').val();
  var title = $('#edit_task_title').val();
  var current_title = $("#span_"+task_id).text();
  var new_title = current_title.replace(current_title, title);
  if(title){
    //ajax post the form
    $.post("/update/"+task_id, {title: title}).done(function(data){
      $('#edit_task').hide("slow");
      $("#span_"+task_id).text(new_title);
    });
  }
  else{
    alert("Please give a title to task");
  }
});