/**
 * @author Mohsin Shafique
 *
 * Generic Ajax Request
 */
$('body').on('click', '.delete_btn', function () {
	let id = $(this).data("id");
    let url = $(this).data("url") + "/" + id;
	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.value) {
			$.ajax({
				type: "DELETE",
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
				success: function (response) {
					if(response.status=='success'){
						Swal.fire("Deleted!", response.message, "success");
					}else{
						Swal.fire("Oops!", response.message, "error");
					}
				},
				complete: function () {
					swal.hideLoading();
					setTimeout(function () {
						location.reload();
					}, 2000);
				},
				error: function () {
					swal.hideLoading();
					swal.fire(
						"!Opps ",
						"Something went wrong, try again later",
						"error"
					);
				},
			});
		}
	});
});
