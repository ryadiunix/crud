<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<h3>Update</h3>
<form action="{{route('buku.update',$buku->id)}}" method="post">
 		{{ csrf_field() }}
 		{{method_field('put')}}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul" value="{{$buku->judul}}">
  </div>
  <div class="form-group">
    <label for="penulis">penulis</label>
    <input type="text" class="form-control" name="penulis" value="{{$buku->penulis}}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<script src="/js/app.js"></script>
</body>
</html>