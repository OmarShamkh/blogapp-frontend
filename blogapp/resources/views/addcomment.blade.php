<style>
    #comment {
        max-width: 750px;
    }
</style>
<div>
    <form method="POST" action="/blog/{{$post->id}}">
        @csrf
        <div class="form-group">
            <input id="comment" type="text" name="content" class="form-control" required />
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary " value="Add Comment" />
        </div>
    </form>
</div>