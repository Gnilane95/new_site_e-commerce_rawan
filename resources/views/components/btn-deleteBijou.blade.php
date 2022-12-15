<div class="">
    <form action="{{ route('bijoux.destroy', $bijou->id) }}" method="POST" 
    onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce bijou ?')">
        @csrf
        @method('DELETE')
        <button class="" type="submit">        
            <i class="fa-solid fa-delete-left"></i>
        </button>
    </form>
</div>