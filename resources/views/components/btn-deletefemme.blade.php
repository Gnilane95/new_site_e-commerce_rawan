<div class="">
    <form action="{{ route('femmes.destroy', $femme->id) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce vêtement ?')">
        @csrf
        @method('DELETE')
        <button class="" type="submit">        
            <i class="fa-solid fa-delete-left"></i>
        </button>
    </form>
</div>