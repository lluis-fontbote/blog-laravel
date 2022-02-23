@extends('common.mainLayout')

@section('title', 'Blog de Laravel - Index')

@section('content')

<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
	<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
		<!--Title-->
			<p class="text-white font-extrabold text-3xl md:text-5xl">
				👻 Ghostwind CSS
			</p>
			<p class="text-xl md:text-2xl text-gray-500">Welcome to my Blog</p>
	</div>
</div>

<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
	<div class="mx-0 sm:mx-6">
					
			<!--Lead Card-->
			<div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
				<a href="{{ route('post.show', $featuredPost->id) }}" class="flex flex-wrap no-underline hover:no-underline">
					<div class="w-full md:w-2/3 rounded-t">	
						<img src="https://source.unsplash.com/collection/494263/800x600" class="h-full w-full shadow">
					</div>

					<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{{ $featuredPost->category->title}}</p>
							<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $featuredPost->title }}</div>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">{{ $featuredPost->content }}</p>
						</div>

						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

				</a>
			</div>
			<!--/Lead Card-->


			<!--Posts Container-->
			<div class="flex flex-wrap justify-between pt-12 -mx-6">
			
				@foreach ($posts as $post)
					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="{{ route('post.show', $post->id) }}" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post->category->title}}</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post->title }}</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">{{ $post->content }}</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>
				@endforeach 
			</div>
			<!--/ Post Content-->
			{{ $posts->links() }}

	</div>
</div>
@endsection