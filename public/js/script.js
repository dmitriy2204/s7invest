function toggle_column(table, column) {
    table = document.getElementById(table);
    rows = table.getElementsByTagName('tr');
    for (var row=0; row<rows.length; row++) {
        cels = rows[row].getElementsByTagName('td');
        cels[column].style.display=cels[column].style.display=="none" ? "" : "none";
    }
}

function hide_rows(table, column) {
    table = document.getElementById(table);
    rows = table.getElementsByTagName('tr');
    for (var row=0; row<rows.length; row++) {
        cels = rows[row].getElementsByTagName('td');
        cels[column].style.display="none";
    }
}

var checkboxes = document.getElementById('dropdown-menu__checkboxes').getElementsByTagName('input');

for(var i=1; i<checkboxes.length; i++){
    if(!checkboxes[i].checked){
        hide_rows('details', i+1);
    }
}
