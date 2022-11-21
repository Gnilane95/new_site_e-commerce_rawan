<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="">
        <i class="fa-solid fa-right-from-bracket text-gray-600"></i>
    </button>
</form>