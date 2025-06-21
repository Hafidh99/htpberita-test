@extend(layout.app)

@section('title', $category->title)

@section('content')
    <!-- Header -->
        <div class="w-full mb-16 bg-[#F6F6F6]">
        <h1 class="text-center font-bold text-2xl p-24">{{ $category->title }}</h1>
        </div>
@endsection