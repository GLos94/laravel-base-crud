@extends('layouts.main-layout')

@section('content')
  <h1>PAGAMENTo EDIT</h1>

  <form action="{{ route ('pagamento.update', $pagamento -> id) }}" method="post">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="status">STATUS</label>
      {{-- <input type="text" name="status" value="{{ $pagamento -> status }}"> --}}
      <select name="status">
        <option value="accepted">Accepted</option>
        <option value="rejected">Rejected</option>
        <option value="pending">Pending</option>
      </select>
    </div>
    <div class="form-group">
      <label for="price">PRICE</label>
      <input type="number" name="price" value="{{ $pagamento -> price }}">
    </div>

    <button type="submit" name="button">UPDATE</button>


  </form>
@endsection
