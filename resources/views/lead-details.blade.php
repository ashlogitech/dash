@extends('layouts.admin-layout')

@section('content')
    <div class="container">
        <h1>Lead Details</h1>
        <div class="lead-details">
            <p><strong>LEAD ID:</strong> {{ $lead->id }}</p>
            <p><strong>Anfrage für:</strong> {{ $lead->anfrage }}</p>
            <p><strong>Gewerk:</strong> {{ $lead->gewerk }}</p>
            <p><strong>Wobei können wir Sie unterstützen?:</strong> {{ $lead->unterstuetzen }}</p>
            <p><strong>Ausstattungsniveau:</strong> {{ $lead->ausstattung }}</p>
            <p><strong>Raumgröße:</strong> {{ $lead->raumgroesse }}</p>
            <p><strong>Sind Sie der/die Eigentümer/in?:</strong> {{ $lead->eigentuemer }}</p>
            <p><strong>Gewünschter Auftragsbeginn?:</strong> {{ $lead->auftragsbeginn }}</p>
            <p><strong>Geht es um einen Versicherungsfall?:</strong> {{ $lead->versicherungsfall }}</p>
            <p><strong>Sie sind eine:</strong> {{ $lead->anrede }}</p>
            <p><strong>Ansprechpartner:</strong> {{ $lead->ansprechpartner }}</p>
            <p><strong>Postleitzahl:</strong> {{ $lead->plz }}</p>
            <p><strong>E-Mail Adresse für die Angebote:</strong> {{ $lead->email }}</p>
            <p><strong>Telefon:</strong> {{ $lead->telefon }}</p>
        </div>
    </div>
@endsection
