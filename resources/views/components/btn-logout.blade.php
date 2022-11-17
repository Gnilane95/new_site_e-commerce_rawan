<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-primary">
        <i class="fa-solid fa-right-from-bracket"></i>
    </button>
</form>