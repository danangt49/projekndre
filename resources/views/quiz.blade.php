@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Kelas</div>
          <div class="panel-body">
            <div class="col-md-12">
              <div class="list-group">
                <p>Adi memiliki 5 buah Appel kemudian apel adi di berikan ke Susi 2 Buah. Maka Jumlah apel adi berapa?</p>
                <a href="{{ url('/mataPelajaran') }}" class="list-group-item list-group-item-action">A</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">B</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">C</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">D</a>
                <a href="mataPelajaran.blade.php" class="list-group-item list-group-item-action">E</a>
              </div>
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
