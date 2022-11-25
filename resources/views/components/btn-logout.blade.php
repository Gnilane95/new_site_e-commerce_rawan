<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="">
        Déconnexion
    </button>
</form>