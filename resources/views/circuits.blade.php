<x-layout>
<x-navbar>

</x-navbar>
<div class="container-fluid mt-5">
<div class="row h-100 justify-content-around align-items-center">
@foreach($circuits as $circuit)
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">{{$circuit->Name}}</h5>
<h6 class="card-subtitle mb-2 text-body-secondary">{{$circuit->email}}</h6>
<p class="card-text">{{$circuit->description}}</p>
<p class="card-text">Prezzo del biglietto:{{$circuit->price}} €</p>
<a href="#" class="card-link">Vai al dettaglio</a>
</div>
</div>
@endforeach
</div>
</div>
</x-layout>