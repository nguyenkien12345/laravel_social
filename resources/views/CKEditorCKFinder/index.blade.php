<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CKEditor và CKFinder</title>
</head>

<body>
    <div class="container">
        {{-- CKEditor sẽ dựa vào thuộc tính id để mà biến thẻ textarea thành CKEditor --}}
        <textarea name="editorDemo" id="editorDemo" cols="30" rows="10"></textarea>
    </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/ckeditor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/ckfinder/ckfinder/ckfinder.js') }}"></script>
<script>
    // options bên dưới là các thông số để cấu hình CKFinder vào trong CKEditor.
    // Khi chưa gắn CKFinder thì trong thuộc tính Image Properties sẽ không có Browser Server nhưng sau khi gắn CKFinder thì sẽ xuất hiện Browser Server
    let options = {
        filebrowserBrowseUrl: "{{ asset('js/ckfinder/ckfinder/ckfinder.html') }}",
        filebrowserUploadUrl: "{{ asset('js/ckfinder/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserWindowWidth: "1000",
        filebrowserWindowHeight: "700"
    }

    // Tìm thẻ textarea có thuộc tính id là editorDemo và biến thẻ textarea này thành CKEditor
    CKEDITOR.replace('editorDemo', options);
    // Khi sử dụng CKEditor sẽ có 1 thuộc tính là Source. Chúng ta có thể thêm id class để tùy biến css thoải mái
</script>
</html>
