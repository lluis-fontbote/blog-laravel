<div>

    <section class="rounded-b-lg  mt-4 ">


        <form action="{{ route('comment.store') }}" accept-charset="UTF-8" method="post">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <textarea 
                name="text" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl"
                placeholder="Ask questions here." cols="6" rows="6" id="comment_content" spellcheck="false">
            </textarea>
            <button class="font-bold py-2 px-4 w-full bg-gray-900 text-lg text-white shadow-md rounded-lg ">Comment</button>
        </form>

        <div id="task-comments" class="pt-4">
            @isset($post->comments)
                @foreach ($post->comments as $comment)
                    <!--     comment-->
                    <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                        <div class="flex flex-row justify-center mr-2">
                                <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4"
                                src="{{ isset($comment->author->profile_photo_path) ? $comment->author->profile_photo_path : 'https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png'}}">
                                <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $comment->author->name }}</h3>
                            
                            {{-- <div style="width: 50%;">Data: {{ $comment->created_at }}</div> --}}
                        </div>

                        <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->text }}</p>

                        @if (auth()->user()->is_admin) 
                            <form action="{{ route('comment.destroy') }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                <button class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                            </form>
                        @endif
                @endforeach
                    </div>
                <!--  comment end-->
            @endisset
        </div>
    </section>

</div>
