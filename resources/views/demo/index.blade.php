<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<div class="container">
		<h1>Buku</h1>
 	<form action="{{route('buku.store')}}" method="post">
 		{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul">
  </div>
  <div class="form-group">
    <label for="penulis">penulis</label>
    <input type="text" class="form-control" name="penulis">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	</div>
<hr>
<center><H2>Isi Dari Inputan</H2></center>

	<table class="table table-striped">
    <thead>
      <tr>
        <th>Judul buku</th>
        <th>Penulis</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($buku as $key => $tampil)
      	<tr>
      		<td>{{$tampil->judul}}</td>
      		<td>{{$tampil->penulis}}</td>
      		<td><a href="{{route('buku.edit',$tampil->id)}}">Edit</a>|
      			<a href="#" onclick="event.preventDefault();                                                   
      			document.getElementById('delete-form{{$tampil->id}}').submit();">Hapus</a>
      			<form id="delete-form{{$tampil->id}}" action="{{route('buku.destroy',$tampil->id)}}" method="POST" style="display: none;">
      				 {{ csrf_field()}}
      				 {{method_field('delete')}}
      			</form>	 
      		</td>

      	</tr>
      	
      @endforeach
      
    </tbody>
  </table>

<script src="/js/app.js"></script>
</body>
</html>