

$(document).ready(function () {

    var customercolumn = [
        { data: "customer_id" },
        { data: "name" },
        { data: "phone" },
        { data: "email" },
        { data: "address" },
        {
            data: "gender",
            render: function(data){
                if(data == 1){
                    return 'Male';
                }else{
                    return 'Female';
                }
            }
        },

    ]

    var contactcolumn = [
        { data: "contact_id" },
        { data: "name" },
        { data: "email" },
        { data: "subject" },
        { data: "message" },
        { data: "date_updated" },
        {
            data: "contact_id",
            render: function(data){
                return '<a href="deleteMessage.php?contact_id='+data+'" class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i></a>';
            }
        },

    ]


    getTableData("customer", "is_deleted = '0' AND email != 'admin'", customercolumn);
    // getTableData("contact", null, contactcolumn);
});


getTableData = (table, where, column) => {

    var needData = {
        table: table,
        where: where,
    }

    $.ajax({
        method: "POST",
        url: "../../server/api.php?function_code=getAllData",
        data: needData,
        success: function (data) {
            dataArray1 = $.parseJSON(data);
            var newArray1 = [];
            dataArray1.map(function (value) {
                newArray1.push(value);
            });

            handleTables(newArray1, column, table);

        },
        error: function (error) {
            console.log(`Error ${error}`);
        }
    });
}


var handleTables = function (data, column, id) {
    if ($("#" + id + "").length) {
        $("#" + id + "").DataTable({
            dom: "Bfrtip",
            data: data,
            columns: column,
            buttons: [
                {
                    extend: "copy",
                    className: "btn-sm"
                },
                {
                    extend: "csv",
                    className: "btn-sm"
                },
                {
                    extend: "excel",
                    className: "btn-sm"
                },
                {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                },
                {
                    extend: "print",
                    className: "btn-sm"
                },


            ],
            responsive: true,

        });
    }
};