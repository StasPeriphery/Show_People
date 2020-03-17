$(document).ready(function () {
    $('#addUser').click(function (e) {
        e.preventDefault();

        var name_first = $("#name_first").val();
        var name_second = $("#name_second").val();
        var age = $("#age").val();
        var phone_number = $("#phone_number").val();
        var email = $("#email").val();
        var sqlCsv = $("#select:checked").val();
        alert("ADD USER");

        $.ajax({
            type: "POST",
            url: "/Controllers/UsersController.php",
            dataType: "json",
            data: {
                name_first: name_first,
                name_second: name_second,
                email: email,
                age: age,
                phone_number: phone_number,
                sqlCsv: sqlCsv,
                action: "AddUser"
            },
            success: function (data) {
                alert(data);

                if (data !== undefined) {
                    alert(data);
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
});

$(document).ready(function () {
    $('#getAllUsers').click(function (e) {
        e.preventDefault();
        alert("showAllPeople");
        var sqlCsv = $("#select:checked").val();

        $.ajax({
            type: "POST",
            url: "/Controllers/UsersController.php",
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
});

$(document).ready(function () {
    $('#delete').click(function (e) {
        e.preventDefault();
        alert("delete");
        var sqlCsv = $("#select:checked").val();
        var emailDelete = $("#emailDelete").val();

        $.ajax({
            type: "POST",
            url: "/Controllers/UsersController.php",
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
});

$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: '/table.php',
        data: '',
        success: function (comms) {
        }
    });
});

