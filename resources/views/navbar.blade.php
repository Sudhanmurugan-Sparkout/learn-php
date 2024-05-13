<nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('author.index') }}">Author</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('book.index') }}>Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('genre') }}>Genres</a>
        </li>   
      </ul>
    </div>
  </nav>
  