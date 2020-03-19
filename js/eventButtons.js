$(document).ready(function () {
    $('#addUser').click(function (e) {
        e.preventDefault();

        var name_first = $("#name_first").val();
        var name_second = $("#name_second").val();
        var age = $("#age").val();
        var phone_number = $("#phone_number").val();
        var email = $("#email").val();
        var sqlCsv = $("#select:checked").val();
        // alert("ADD USER");

        $.ajax({
            type: "POST",
            url: "/main.php",
            dataType: "json",
            data: {
                id: 0,
                name_first: name_first,
                name_second: name_second,
                email: email,
                age: age,
                phone_number: phone_number,
                sqlCsv: sqlCsv,
                action: "AddUser"
            },
            success: function (data) {
                alert (data);
                if (data !== undefined) {
                    let strInsert = "<tr>";
                    for (let i = 0; i < data.length; ++i) {
                        strInsert += `<td>${data[i]}</td>`;
                    }
                    strInsert += "</tr>";

                    $('#allPeople tr:last').after(strInsert);

                } else {
                    alert("SOME SHIT ADD USER");

                    $(".display-error").html("<ul>" + data.msg + "</ul>");
                    $(".display-error").css("display", "block");
                }
            }
        });
    });

    $('#getAllUsers').click(function (e) {
        e.preventDefault();
        //alert("showAllPeople");
        var sqlCsv = $("#select:checked").val();

        $.ajax({
            type: "POST",
            url: "/main.php",
            dataType: "json",
            data: {
                action: "GetAllUsers",
                sqlCsv: sqlCsv
            },
            success: function (data) {

                if (data !== undefined) {
                    alert("code 200");
                    let strInsert;
                    for (let i = 0; i < data.length; ++i) {
                        strInsert += "<tr>";
                        for (let j = 0; j < data[i].length; ++j) {
                            strInsert += `<td>${data[i][j]}</td>`;
                        }
                        strInsert += "</tr>";
                    }
                    $('#allPeople tr:last').after(strInsert);

                } else {
                    alert("SOME SHIT");
                }
            }
        });
    });

    $('#delete').click(function (e) {
        e.preventDefault();
        alert("delete");
        var sqlCsv = $("#select:checked").val();
        var emailDelete = $("#emailDelete").val();

        $.ajax({
            type: "POST",
            url: "/main.php",
            dataType: "json",
            data: {
                sqlCsv: sqlCsv,
                emailDelete: emailDelete,
                action: "DeleteUser"
            },
            success: function (data) {
                alert("Good delete");

            }
        });
    });


    $('#refresh').click(function (e) {
        e.preventDefault();
        alert("refresh");
        var emailDelete = $("#allPeople").find("tr:gt(0)").remove();
        var sqlCsv = $("#select:checked").val();

        $.ajax({
            type: "POST",
            url: "/main.php",
            dataType: "json",
            data: {
                sqlCsv: sqlCsv,
                action: "Refresh"
            },
            success: function (data) {
                alert("code 200");
                if (data !== undefined) {
                    let strInsert;
                    for (let i = 0; i < data.length; ++i) {
                        strInsert += "<tr>";
                        for (let j = 0; j < data[i].length; ++j) {
                            strInsert += `<td>${data[i][j]}</td>`;
                        }
                        strInsert += "</tr>";
                    }
                    $('#allPeople tr:last').after(strInsert);

                } else {
                    alert("SOME SHIT");
                }

            }
        });
    });
});

