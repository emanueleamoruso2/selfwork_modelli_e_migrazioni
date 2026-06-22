<x-layout>
<x-navbar>

</x-navbar>
<div class="container-fluid vh-100 bg-transparent ">
<div class="row h-100 justify-content-center align-items-center">
<div class="col-6">
<form method="POST" action="{{route('registration')}}">
@csrf
<div class="mb-3">
<label for="Name" class="form-label">Nome</label>
<input type="text" class="form-control" id="Name" name="Name"  aria-describedby="Nome">
</div>
<div class="mb-3">
<label for="exampleInputemail" class="form-label">Email</label>
<input type="email" class="form-control" id="exampleInputemail" name="email">
</div>
<div class="mb-3">
<label for="textarea" class="form-label">Descrizione</label>
<textarea name="description" id="textarea" class="form-control" rows="20" cols="10" placeholder="scrivi la pista"></textarea>
</div>
<div class="mb-3">
<label for="price" class="form-label">Prezzo</label>
<input type="text" class="form-control" id="price" name="price">
</div>
<button type="submit" class="btn btn-primary">Invia Form</button>
</form>
</div>
</div>
</div>
</x-layout>