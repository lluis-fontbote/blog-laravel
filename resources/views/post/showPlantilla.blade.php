@extends('common.mainLayout')

@section('title', 'Blog Laravel - Post')

@section('content')
	<!--Title-->
	<div class="text-center pt-16 md:pt-32">
		<p class="text-sm md:text-base text-green-500 font-bold">08 APRIL 2019 <span class="text-gray-900">/</span> GETTING STARTED</p>
		<h1 class="font-bold break-normal text-3xl md:text-5xl">{{ $post->title }}</h1>
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">
		
		<div class="mx-0 sm:mx-6">
			
			<div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
				
				<!--Post Content-->
				
				{{ $post->content }}
												
				<!--/ Post Content-->
						
			</div>
			
			
		</div>

	</div>
<div style="margin: 3rem">
	@include('common.comments')
</div>
@endsection