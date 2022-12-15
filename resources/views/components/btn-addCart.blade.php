<form action="{{ route('carts.store') }}" method="POST">
    @csrf
    <input type="hidden" name="bijoux_id" value="{{ $bijoux->id }}">
    <button type="submit" class="py-4 px-4 mt-5 w-full rounded-lg text-xl 
    bg-primary-dark border-none text-white">
        Ajouter au panier
    </button>
</form>