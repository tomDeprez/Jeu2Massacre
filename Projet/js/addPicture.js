
$('.remove-image').hide();

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function (e) {
      $('.file-upload .file-upload-image').attr('src', e.target.result);
      $('.file-upload .file-upload-content').show();
      $('.file-upload .remove-image').show();
      $('.file-upload .file-upload-btn').hide();

      $('.file-upload .image-title1').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}
function removeUpload() {
  $('.file-upload .file-upload-input').replaceWith($('.file-upload .file-upload-input').clone());
  $('.file-upload .file-upload-content').hide();
  $('.file-upload .remove-image').hide();
  $('.file-upload .file-upload-btn').show();
}


function readURL2(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function (e) {
      $('.file-upload2 .file-upload-image').attr('src', e.target.result);
      $('.file-upload2 .file-upload-content').show();
      $('.file-upload2 .remove-image').show();
      $('.file-upload2 .file-upload-btn').hide();

      $('.file-upload2 .image-title2').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload2();
  }
}
function removeUpload2() {
  $('.file-upload2 .file-upload-input').replaceWith($('.file-upload2 .file-upload-input').clone());
  $('.file-upload2 .file-upload-content').hide();
  $('.file-upload2 .remove-image').hide();
  $('.file-upload2 .file-upload-btn').show();
}


function readURL3(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function (e) {
      $('.file-upload3 .image-upload-wrap').hide();

      $('.file-upload3 .file-upload-image').attr('src', e.target.result);
      $('.file-upload3 .file-upload-content').show();
      $('.file-upload3 .remove-image').show();

      $('.file-upload3 .image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload3();
  }
}
function removeUpload3() {
  $('.file-upload3 .file-upload-input').replaceWith($('.file-upload3 .file-upload-input').clone());
  $('.file-upload3 .file-upload-content').hide();
  $('.file-upload3 .remove-image').hide();
  $('.file-upload3 .image-upload-wrap').show();
}

$('.file-upload3 .image-upload-wrap').bind('dragover', function () {
  $('.file-upload3 .image-upload-wrap').addClass('image-dropping');
});
$('.file-upload3 .image-upload-wrap').bind('dragleave', function () {
  $('.file-upload3 .image-upload-wrap').removeClass('image-dropping');
});