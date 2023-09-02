@extends('zadanie3.layout')

@section('content')
<div class="container">
    <form>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" id="indyvidual" value="indyvidual" checked>
            <label class="form-check-label" for="indyvidual">
              Osobwa fizyczna
            </label>
          </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="company" id="company">
            <label class="form-check-label" for="company">
              Firma
            </label>
          </div>
          <div class="indyvidual-form">
            <div class="form-group">
                <label for="name">Imię</label>
                <input type="string" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="name">Adres email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="DOB">Data urodzenia</label>
                <input type="string" class="form-control" name="DOB" id="DOB">
            </div>
          </div>
          <div class="company-form">
            <div class="form-group">
                <label for="name">Nazwa firmy</label>
                <input type="string" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="name">Adres email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" name="nip" id="nip">
            </div>
          </div>
          <button type="submit" class="btn btn-success">Zarejestruj</button>
    </form>
</div>
@endsection
