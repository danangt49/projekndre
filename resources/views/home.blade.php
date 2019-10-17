@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Kelas</div>
          <div class="panel-body">
            <div class="col-md-6">
              <div class="list-group">
              <a href="{{ url('/mataPelajaran') }}" class="list-group-item list-group-item-action">Kelas 1</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 2</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 3</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 4</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 5</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 6</a>
                </div>
            </div>
            <div class="col-md-6">
              <div class="list-group">
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 7</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 8</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 9</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 10</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 11</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">Kelas 12</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
