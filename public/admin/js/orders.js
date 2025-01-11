$(function () {
    let $table = $("#ordersDataTable");
    let table = $table.DataTable({
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        order: [[0, "asc"]],
        columns: [
            { data: "id", name: "id" },
            { data: "type", name: "" },
            { data: "name", name: "" },
            { data: "phone", name: "" },
            { data: "delivery_address", name: "" },
            { data: "start_date", name: "" },
            { data: "persons", name: "" },
            {
                data: "status",
                name: "status",
                render: function (data, type, row) {
                    return `
                        <select class="form-select order-status" data-order-id="${
                            row.id
                        }">
                            <option value="pending" ${
                                data === "pending" ? "selected" : ""
                            }>Pending</option>
                            <option value="in-progress" ${
                                data === "in-progress" ? "selected" : ""
                            }>In Progress</option>
                            <option value="completed" ${
                                data === "completed" ? "selected" : ""
                            }>Completed</option>
                            <option value="cancelled" ${
                                data === "cancelled" ? "selected" : ""
                            }>Cancelled</option>
                        </select>
                    `;
                },
                searchable: false,
                orderable: false,
            },
            {
                data: "action",
                name: "action",
                searchable: false,
                orderable: false,
            },
        ],
        processing: true,
        serverSide: true,
        ajax: "",
    });

    $table.on("change", ".order-status", async function () {
        const orderId = $(this).data("order-id");
        const newStatus = $(this).val();

        let result = await swal.fire({
            title: "Are you sure?",
            text: "You want to change the status!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!",
        });
        if (result.value) {
            $.ajax({
                url: `/admin/update-order-status/${orderId}`,
                type: "GET",
                data: { status: newStatus },
                success: function (response) {
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                    });
                    table.ajax.reload();
                },
                error: function (xhr) {
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to update status. Please try again.",
                        icon: "error",
                    });
                    console.error(xhr.responseJSON);
                },
            });
        }
    });
});
