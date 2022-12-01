<div class="">
    <form action="{{ route('cart.destroy', $bijou->rowId) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce bijou ?')">
        @csrf
        @method('DELETE')
        <button class="" type="submit">        
            <i class="fa-solid fa-delete-left text-primary-dark"></i>
        </button>
    </form>
</div>