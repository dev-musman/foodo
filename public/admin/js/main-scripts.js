$(".standart-form").on("submit", async function (e) {
    e.preventDefault();
    try {
        let $form = $(this);

        let response = await $.ajax({
            type: $form.attr("method"),
            url: $form.attr("action"),
            data: $form.serialize(),
            dataType: "json",
            beforeSend: function (xhr) {
                $(".invalid-feedback").hide();
            },
            error: function (jqXHR) {
                let response =
                    jqXHR.responseJSON || JSON.parse(jqXHR.responseJSON);
                $.each(response.errors, function (field, value) {
                    $('.invalid-feedback[data-field="' + field + '"]', $form)
                        .text(value[0])
                        .show();
                    $('[name="' + field + '"]', $form).addClass("invalid");
                });
            },
        });
        if (response.success) {
            swal.fire("Success!", response.message, "success").then(() => {
                if (response.reload) {
                    window.location.reload();
                }
                if (response.redirect) {
                    window.location.href = response.redirect;
                }
            });
        } else {
            Swal.fire({
                title: "Error!",
                text: response.message,
                icon: "error",
            });
        }
    } catch (e) {
        console.error(e);
    }
});

$(document).on("click", ".removeItem", async function (e) {
    e.preventDefault();

    let $button = $(this);
    let $table = $button.closest("table");

    let result = await swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    });

    if (result.value) {
        let response = await $.ajax({
            url: $button.attr("href"),
            type: "DELETE",
            data: { _token: $('meta[name="csrf-token"]').attr("content") },
            success: function (response) {
                if (response.success) {
                    $table
                        .DataTable()
                        .row($button.closest("tr"))
                        .remove()
                        .draw(false);
                    swal.fire("Deleted!", "", "success");
                } else {
                    swal.fire("Error", response.message, "error");
                }
            },
            error: function () {
                swal.fire("Error!", "", "error").then(() => {
                    window.location.reload();
                });
            },
        });
    }
});

$(document).ready(function () {
    $(".select2").select2();
});

