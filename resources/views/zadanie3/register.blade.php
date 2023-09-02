@extends('zadanie3.layout')

@section('content')
<div class="container">
    <form method="post" action="zadanie3/store">
        @csrf
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="indyvidual" value="indyvidual" @if(old('type') === 'indyvidual' || empty(old('type')))  checked @endif>
            <label class="form-check-label" for="indyvidual">
              Osobwa fizyczna
            </label>
          </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="company" id="company" @if(old('type') === 'company')  checked @endif>
            <label class="form-check-label" for="company">
              Firma
            </label>
          </div>
          @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
            <div class="form-group">
                <label for="name" class="nameLabel">Imię</label>
                <input type="string" class="form-control" name="name" id="name" value="{{old('name')}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Adres email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group indyvidualField">
                <label for="DOB">Data urodzenia</label>
                <input type="string" class="form-control" name="DOB" id="DOB" value="{{old('DOB')}}">
                @error('DOB')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group companyField">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" name="nip" id="nip" value="{{old('nip')}}">
                @error('nip')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          <button type="submit" class="btn btn-success">Zarejestruj</button>
    </form>
</div>
@endsection
