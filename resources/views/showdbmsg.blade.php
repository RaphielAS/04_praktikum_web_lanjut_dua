<table border="1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Subjek</td>
        <td>Pesan</td>
    </tr>
    @foreach($msg as $key => $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->inquiry}}</td>
      <td>{{$data->message}}</td>
    </tr>
@endforeach
</table>
