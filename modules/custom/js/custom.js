jQuery(document).ready(function($) {
  $('#story-table').DataTable({
    "bLengthChange": false,
  });

  $('#comment-table').DataTable({
    "bLengthChange": false,
    "bSort" : false
  });
});
