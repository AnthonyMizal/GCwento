$(document).ready(function () {
    getRequestStories();
});

function getRequestStories() {
    var reqtable = $('#request_table_contents').DataTable({
      language: {
          paginate: {
            next: '<i class="fa fa-chevron-right" aria-hidden="true">',
            previous: '<i class="fa fa-chevron-left" aria-hidden="true">',
          },
        },
        dom: "rtip",
  });
  
  
  $("#search_request_story").keyup(function () {
    reqtable.search($("#search_request_story").val()).draw();
    });
  
  
  };