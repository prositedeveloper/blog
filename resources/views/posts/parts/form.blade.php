<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Заголовок поста</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{ old('title') ?? $post->title ?? '' }}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Описание поста</label>
    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="10">{{ old('desc') ?? $post->desc ?? '' }}</textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Изображение поста поста</label>
    <input type="file" name="img" class="form-control"> 
  </div>