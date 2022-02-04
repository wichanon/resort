function uploadFile(file_select, type, uid = "0", cover = 1) {
	//$('#spinner').fadeIn('fast');
	var tmp = $("#submit").attr("onclick");
	$("#submit").attr("onclick", "");
	$("#submit").addClass("onclick");
	//$('#'+file_select+'_name').html($('#'+file_select)[0].files[0].name)
	var file;
	if (type == "review") {
		file = $('.'+file_select)[0].files[0];
	} else if (uid != "0") {
		file = $("." + file_select + " .uuid_" + uid + " .image_upload")[0]
			.files[0];
	} else {
		file = $("." + file_select + " .image_upload")[0].files[0];
	}

	var formdata = new FormData();
	formdata.append(file_select, file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener(
		"load",
		function () {
			res = $.parseJSON(event.target.responseText);
			// /$("#status").innerHTML = res.msg;
			//$("#progressBar").value = 0;

			if (type == "cover") {
				cover++;
				$(".box_image_cover").append(
					'<div class="my-2 row image_cover cover_' +
						cover +
						' d-flex align-items-end"><div class="col"> <div class="preview"></div> </div><div class="col-9"><input type="file" class="form-control imagecover image_upload" onchange="uploadFile(\'cover_' +
						cover +
						"','cover')\"></div></div>"
				);
			}
			if(type =='review'){
				$('.popup .box_image').append('<div path="'+res.data+'" class="image" style="background-image:url('+base_url+'../'+res.data+')"><div class="close" onclick="del_review_image(this)"><img src="../../images/icons/cancel.png" alt=""></div></div>');
			}
			else if (uid != "0") {
				$("." + file_select + " .uuid_" + uid + " .image_upload").attr(
					"path",
					res.data
				);
				$("." + file_select + " .uuid_" + uid + " .preview").css(
					"background-image",
					"url(" + base_url + "../" + res.data + ")"
				);
			} else {
				$("." + file_select + " .image_upload").attr("path", res.data);
				$("." + file_select + " .preview").css(
					"background-image",
					"url(" + base_url + "../" + res.data + ")"
				);
			}
		},
		false
	);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", base_url + "Uploads/file");
	ajax.send(formdata);
}
function progressHandler(event) {
	var percent = (event.loaded / event.total) * 100;
	$("progressBar").value = Math.round(percent);
}
function errorHandler(event) {
	$("#status").innerHTML = "Upload Failed";
}
function abortHandler(event) {
	res = $.parseJSON(event.target.responseText);
	$("#status").innerHTML = "Upload Aborted";
}
