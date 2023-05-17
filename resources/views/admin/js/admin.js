function refreshTime() {
    const date = new Date().toDateString();
    const time = new Date().toLocaleTimeString();
    document.getElementById("time").innerHTML = date.concat(" | " +time);
}

setInterval(refreshTime, 1000);


$(function(){
    $(".nav_container").load("admin_nav.html");
});


$(window).on("load",function(){
    $(".loader-wrapper").delay(900).fadeOut("slow");
});

// $(document).ready(function () {
//     $("#table_category_list").on("change", function () {
//         var table_category = $('#table_category_list').find("option:selected").val();
//         SearchData(table_category)
//     });
// });

// function SearchData(table_category) {
//     if (table_category.toUpperCase() == 'ALL') {
//         $('#table_values tbody tr').show();
//     } else {
//         $('#table_values tbody tr:has(td)').each(function () {
//             var rowCategory = $.trim($(this).find('td:eq(1)').text());
//             if (table_category.toUpperCase() != 'ALL') {
//                 if (rowCategory.toUpperCase() == table_category.toUpperCase()) {
//                     $(this).show();
//                 } else {
//                     $(this).hide();
//                 }
//             } else if ($(this).find('td:eq(1)').text() != '' || $(this).find('td:eq(1)').text() != '') {
//                 if (table_category != 'All') {
//                     if (rowCategory.toUpperCase() == table_category.toUpperCase()) {
//                         $(this).show();
//                     } else {
//                         $(this).hide();
//                     }
//                 }
//             }

//         });
//     }
// }



