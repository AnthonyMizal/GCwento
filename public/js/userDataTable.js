$(document).ready(function () {

    getMyStories();

});

function getMyStories() {
    var favoriteTbl = $('#mystories_table_contents').DataTable({
        language: {
            paginate: {
              next: '<i class="fa fa-chevron-right" aria-hidden="true">',
              previous: '<i class="fa fa-chevron-left" aria-hidden="true">',
            },
          },
          dom: "rtip",
    });
    $("#mystories_table_contents.dataTables_filter").append($("#categoryFilter"));
      
    //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
    //This tells datatables what column to filter on when a user selects a value from the dropdown.
    //It's important that the text used here (Category) is the same for used in the header of the column to filter
    var categoryIndex = 0;
    $("#mystories_table_contents th").each(function (i) {
      if ($($(this)).html() == "GENRE") {
        categoryIndex = i; return false;
      }
    });

    //Use the built in datatables API to filter the existing rows by the Category column
    $.fn.dataTable.ext.search.push(
      function (settings, data, dataIndex) {
        var selectedItem = $('#categoryFilter').val()
        var category = data[categoryIndex];
        if (selectedItem === "" || category.includes(selectedItem)) {
          return true;
        }
        return false;
      }
    );

    //Set the change event for the Category Filter dropdown to redraw the datatable each time
    //a user selects a new filter.
    $("#categoryFilter").change(function (e) {
        favoriteTbl.draw();
    });

    $("#search_story").keyup(function () {
        favoriteTbl.search($("#search_story").val()).draw();
      });

      
}