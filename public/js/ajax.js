// const { exists } = require("laravel-mix/src/File");

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
});

$(".place_order").click(function () {
    console.log("here");
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var city = $("#city").val();
    var post_code = $("#post_code").val();
    var address = $("#address").val();
    var country = $("#country").val();
    var region = $("#region").val();
    var items = $("#items").val();
    var sub_total = $("#sub_total").val();
    var delivery_charge = $("#delivery_charge").val();
    var total_amount = $("#total_amount").val();
    var credential = {
        first_name: first_name,
        last_name: last_name,
        city: city,
        address: address,
        post_code: post_code,
        country: country,
        region: region,
        items: items,
        sub_total: sub_total,
        delivery_charge: delivery_charge,
        total_amount: total_amount,
    };
    $.ajax({
        method: "POST",
        url: "/place-order",
        data: credential,
        success: function (data) {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Ordered",
                showConfirmButton: false,
                // timer: 1500,
            });
        },
    }).then((res) => {
        console.log(res);
        window.location.href = "/";
        
    });
});
