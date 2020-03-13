$(document).ready(function () {

    $('#submit').click(function (e) {
        e.preventDefault();

        var name_first = $("#name_first").val();
        var name_second = $("#name_second").val();
        var age = $("#age").val();
        var phone_number = $("#phone_number").val();
        var email = $("#email").val();
        var sqlCsv = $("#select").val();

        alert(sqlCsv);

        $.ajax({
            type: "POST",
            url: "/SaveData.php",
            dataType: "json",
            data: {
                name_first: name_first,
                name_second: name_second,
                email: email,
                age: age,
                phone_number: phone_number,
                sqlCsv: sqlCsv
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
                    $(".display-error").html("<ul>" + data.msg + "</ul>");
                    $(".display-error").css("display", "block");
                }
            }
        });


    });
});

$(document).ready(function () {
    $('#showAllPeoples').click(function (e) {
        e.preventDefault();

        //var name_first = $("#name_first").val();
        var sqlCsv = $("#select").val();

        $.ajax({
            type: "POST",
            url: "/ShowPeoples.php",
            dataType: "json",
            data: {
                sqlCsv: sqlCsv
            },
            success: function (data) {
                // alert("GOOD");

                if (data !== undefined) {
                    // alert("code 200");
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

        var emailDelete = $("#email_delete").val();
        var sqlCsv = $("#select").val();

        $.ajax({
            type: "POST",
            url: "/Delete.php",
            dataType: "json",
            data: {
                emailDelete: emailDelete,
                sqlCsv: sqlCsv
            },
            success: function (data) {
                // alert("GOOD");

                if (data !== undefined) {

                } else {
                    alert("SOME SHIT");
                }
            }
        });

    });
});

