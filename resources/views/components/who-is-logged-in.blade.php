@if(Auth::guard('web')->check())
    <p class="text-success">
        Vous êtes connecté en tant qu' <strong>Utilisateur</strong>
    </p>
    @else
    <p class="text-danger">
        Vous êtes déconnecté en session <strong>Utilisateur</strong>
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        Vous êtes connecté en tant qu' <strong>Administrateur</strong>
    </p>
@else
    <p class="text-danger">
        Vous êtes déconnecté en session <strong>Administrateur</strong>
    </p>
@endif

