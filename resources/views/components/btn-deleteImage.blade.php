<div class="">
    <form action="{{ route('images.destroy',$image->id) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce bijou ?')">
        @csrf
        @method('DELETE')
        <button class="" type="submit">        
            <i class="fa-solid fa-delete-left"></i>
        </button>
    </form>
</div>