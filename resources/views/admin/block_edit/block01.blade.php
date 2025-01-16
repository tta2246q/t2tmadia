<div class="form-group col-lg-6">
    <label for="title">Tiêu đề</label>
    <input type="text" name="title" value="" class="form-control">
</div>
<div class="form-group col-lg-6">
    <label for="title1">Tiêu Đề 1</label>
    <input type="text" name="title1" value="" class="form-control">
</div>
<div class="form-group col-lg-12">
    <label for="title1">Mô tả</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
</div>
<div class="form-group col-lg-6">
    <label for="link">Đường dẫn nút button</label>
    <input type="text" name="link" value="" class="form-control">
</div>
<div class="form-group col-lg-6">
    <label for="link1">Đường dẫn video</label>
    <input type="text" name="link1" value="" class="form-control">
</div>
<div class="form-group col-lg-6">
    <label for="images">Đường dẫn ảnh</label>
    <input type="file" name="images" class="form-control" onchange="previewSelectedImage(event)">
</div>
<img id="image-preview" style="width:20%;" src="" alt="">
// xem trước ảnh khi chọn ảnh
<script>
    function previewSelectedImage(event) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function() {
            const preview = document.getElementById('image-preview');
            preview.src = reader.result;
        }

        reader.readAsDataURL(input.files[0]);
    }
</script>
