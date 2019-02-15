





  @if (@isset($songInfo))
      <form action="{{ action('SongsController@store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ $songInfo->name }}" >
    </div>

    <div class="form-group">
      <label for="author">Author</label>
        <input type="text" class="form-control" name="author" id="author" value="{{ $songInfo->author }}">
    </div>

    <div class="form-group">
      <label for="link">Link</label>
        <input type="text" class="form-control" name="link" id="link" value="{{ $songInfo->link }}">
    </div>

    <div class="form-group">
      <label for="genre">Genre</label>
      <select class="form-control" id="genre" name="genre" value="{{ $songInfo->selected }}">
        <option>Hip Hop</option>
        <option>Rock</option>
        <option>Country</option>
        <option>Classic</option>
        <option>Jazz</option>
      </select>
    </div>

    <a href="/songs/update/{{ $songInfo->id }}"></a><input type="submit" value="Add"> 
  </form>
      
  @else
  <form action="{{ action('SongsController@store') }}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" >
      </div>
  
      <div class="form-group">
        <label for="author">Author</label>
          <input type="text" class="form-control" name="author" id="author">
      </div>
  
      <div class="form-group">
        <label for="link">Link</label>
          <input type="text" class="form-control" name="link" id="link">
      </div>
  
      <div class="form-group">
        <label for="genre">Genre</label>
        <select class="form-control" id="genre" name="genre">
          <option>Hip Hop</option>
          <option>Rock</option>
          <option>Country</option>
          <option>Classic</option>
          <option>Jazz</option>
        </select>
      </div>
  
      <input type="submit" value="Add">
    </form>
  @endif